<?php

namespace App\Controllers;

use App\Models\FoodModel;

class Home extends BaseController
{
    protected $foodModel;

    public function __construct()
    {
        $this->foodModel = new FoodModel();
    }

    public function index()
    {
        $category = $this->request->getGet('category');
        $sort     = $this->request->getGet('sort');
        $search   = $this->request->getGet('search');

        $foods = $this->foodModel->getFilteredFoods($category, $sort, $search);

        // Get distinct categories
        $categories = $this->foodModel->select('category')->distinct()->findAll();

        $data = [
            'title'          => 'Gharafaiha Resto - Spesialis Gulai Ikan Patin & Kuliner Khas Riau',
            'foods'          => $foods,
            'categories'     => array_column($categories, 'category'),
            'selectedCat'    => $category,
            'selectedSort'   => $sort,
            'searchKeyword'  => $search,
            'featuredFoods'  => $this->foodModel->where('is_featured', 1)->limit(3)->findAll(),
        ];

        return view('home', $data);
    }

    public function detail($id = null)
    {
        $food = $this->foodModel->find($id);

        if (!$food) {
            return redirect()->to('/')->with('error', 'Menu makanan tidak ditemukan.');
        }

        $relatedFoods = $this->foodModel
            ->where('category', $food['category'])
            ->where('id !=', $food['id'])
            ->limit(3)
            ->findAll();

        $data = [
            'title'        => $food['name'] . ' - Gharafaiha Resto',
            'food'         => $food,
            'relatedFoods' => $relatedFoods,
        ];

        return view('pages/detail', $data);
    }

    public function apiFoods()
    {
        $category = $this->request->getGet('category');
        $sort     = $this->request->getGet('sort');
        $search   = $this->request->getGet('search');

        $foods = $this->foodModel->getFilteredFoods($category, $sort, $search);

        return $this->response->setJSON([
            'status' => 'success',
            'count'  => count($foods),
            'data'   => $foods
        ]);
    }
}
