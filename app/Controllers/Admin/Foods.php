<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\FoodModel;

class Foods extends BaseController
{
    protected $foodModel;

    public function __construct()
    {
        $this->foodModel = new FoodModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Kelola Menu Makanan - Gharafaiha Resto',
            'foods' => $this->foodModel->orderBy('id', 'DESC')->findAll(),
        ];
        return view('admin/foods/index', $data);
    }

    public function new()
    {
        $data = [
            'title'      => 'Tambah Menu Baru - Gharafaiha Resto',
            'validation' => \Config\Services::validation(),
        ];
        return view('admin/foods/create', $data);
    }

    public function create()
    {
        $rules = [
            'name'        => 'required|min_length[3]|max_length[150]',
            'category'    => 'required',
            'price'       => 'required|numeric',
            'description' => 'required',
            'origin'      => 'required',
            'spice_level' => 'required',
            'image'       => 'is_image[image]|mime_in[image,image/jpg,image/jpeg,image/png,image/webp]|max_size[image,2048]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $imageFile = $this->request->getFile('image');
        $imageName = 'default.jpg';

        if ($imageFile && $imageFile->isValid() && !$imageFile->hasMoved()) {
            $imageName = $imageFile->getRandomName();
            $imageFile->move(FCPATH . 'uploads/foods', $imageName);
        }

        $name = $this->request->getPost('name');
        $slug = url_title($name, '-', true) . '-' . time();

        $this->foodModel->save([
            'name'        => $name,
            'slug'        => $slug,
            'category'    => $this->request->getPost('category'),
            'price'       => $this->request->getPost('price'),
            'description' => $this->request->getPost('description'),
            'origin'      => $this->request->getPost('origin'),
            'spice_level' => $this->request->getPost('spice_level'),
            'rating'      => $this->request->getPost('rating') ?: 4.8,
            'image'       => $imageName,
            'is_featured' => $this->request->getPost('is_featured') ? 1 : 0,
        ]);

        return redirect()->to('/admin/foods')->with('success', 'Menu makanan berhasil ditambahkan!');
    }

    public function edit($id = null)
    {
        $food = $this->foodModel->find($id);
        if (!$food) {
            return redirect()->to('/admin/foods')->with('error', 'Menu makanan tidak ditemukan.');
        }

        $data = [
            'title'      => 'Edit Menu Makanan - Gharafaiha Resto',
            'food'       => $food,
            'validation' => \Config\Services::validation(),
        ];
        return view('admin/foods/edit', $data);
    }

    public function update($id = null)
    {
        $food = $this->foodModel->find($id);
        if (!$food) {
            return redirect()->to('/admin/foods')->with('error', 'Menu tidak ditemukan.');
        }

        $rules = [
            'name'        => 'required|min_length[3]|max_length[150]',
            'category'    => 'required',
            'price'       => 'required|numeric',
            'description' => 'required',
            'origin'      => 'required',
            'spice_level' => 'required',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $imageFile = $this->request->getFile('image');
        $imageName = $food['image'];

        if ($imageFile && $imageFile->isValid() && !$imageFile->hasMoved()) {
            $imageName = $imageFile->getRandomName();
            $imageFile->move(FCPATH . 'uploads/foods', $imageName);
            
            // Optionally remove old image if not default
            if ($food['image'] && $food['image'] !== 'default.jpg' && file_exists(FCPATH . 'uploads/foods/' . $food['image'])) {
                @unlink(FCPATH . 'uploads/foods/' . $food['image']);
            }
        }

        $name = $this->request->getPost('name');
        $slug = url_title($name, '-', true);

        $this->foodModel->update($id, [
            'name'        => $name,
            'slug'        => $slug,
            'category'    => $this->request->getPost('category'),
            'price'       => $this->request->getPost('price'),
            'description' => $this->request->getPost('description'),
            'origin'      => $this->request->getPost('origin'),
            'spice_level' => $this->request->getPost('spice_level'),
            'rating'      => $this->request->getPost('rating') ?: $food['rating'],
            'image'       => $imageName,
            'is_featured' => $this->request->getPost('is_featured') ? 1 : 0,
        ]);

        return redirect()->to('/admin/foods')->with('success', 'Menu makanan berhasil diperbarui!');
    }

    public function delete($id = null)
    {
        $food = $this->foodModel->find($id);
        if ($food) {
            if ($food['image'] && $food['image'] !== 'default.jpg' && file_exists(FCPATH . 'uploads/foods/' . $food['image'])) {
                @unlink(FCPATH . 'uploads/foods/' . $food['image']);
            }
            $this->foodModel->delete($id);
            return redirect()->to('/admin/foods')->with('success', 'Menu makanan telah dihapus.');
        }
        return redirect()->to('/admin/foods')->with('error', 'Menu tidak ditemukan.');
    }
}
