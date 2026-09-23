<?php

namespace App\Models;

use CodeIgniter\Model;

class FoodModel extends Model
{
    protected $table            = 'foods';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'name', 'slug', 'category', 'price', 'description', 
        'origin', 'spice_level', 'rating', 'image', 'is_featured'
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    // Helper method for filtering and sorting
    public function getFilteredFoods($category = null, $sort = null, $search = null)
    {
        $builder = $this;

        if (!empty($category) && $category !== 'all') {
            $builder->where('category', $category);
        }

        if (!empty($search)) {
            $builder->groupStart()
                    ->like('name', $search)
                    ->orLike('description', $search)
                    ->orLike('origin', $search)
                    ->groupEnd();
        }

        switch ($sort) {
            case 'price_asc':
                $builder->orderBy('price', 'ASC');
                break;
            case 'price_desc':
                $builder->orderBy('price', 'DESC');
                break;
            case 'rating_desc':
                $builder->orderBy('rating', 'DESC');
                break;
            case 'name_asc':
                $builder->orderBy('name', 'ASC');
                break;
            default:
                $builder->orderBy('is_featured', 'DESC')->orderBy('id', 'DESC');
                break;
        }

        return $builder->findAll();
    }

    public static function getImageUrl($food)
    {
        if (is_array($food)) {
            $imageName = $food['image'] ?? '';
            $id        = $food['id'] ?? 1;
        } else {
            $imageName = '';
            $id        = 1;
        }

        if ($imageName && file_exists(FCPATH . 'uploads/foods/' . $imageName)) {
            return base_url('uploads/foods/' . $imageName);
        }

        $fallbackImages = [
            1 => 'https://images.unsplash.com/photo-1546069901-ba9599a7e63c?auto=format&fit=crop&w=800&q=80',
            2 => 'https://images.unsplash.com/photo-1565299585323-38d6b0865b47?auto=format&fit=crop&w=800&q=80',
            3 => 'https://images.unsplash.com/photo-1512058564366-18510be2db19?auto=format&fit=crop&w=800&q=80',
            4 => 'https://images.unsplash.com/photo-1534422298391-e4f8c172dddb?auto=format&fit=crop&w=800&q=80',
            5 => 'https://images.unsplash.com/photo-1555939594-58d7cb561ad1?auto=format&fit=crop&w=800&q=80',
            6 => 'https://images.unsplash.com/photo-1540420773420-3366772f4999?auto=format&fit=crop&w=800&q=80',
            7 => 'https://images.unsplash.com/photo-1547592180-85f173990554?auto=format&fit=crop&w=800&q=80',
            8 => 'https://images.unsplash.com/photo-1567620905732-2d1ec7ab7445?auto=format&fit=crop&w=800&q=80',
            9 => 'https://images.unsplash.com/photo-1565958011703-44f9829ba187?auto=format&fit=crop&w=800&q=80',
        ];

        return $fallbackImages[$id] ?? 'https://images.unsplash.com/photo-1546069901-ba9599a7e63c?auto=format&fit=crop&w=800&q=80';
    }
}
