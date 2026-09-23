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
}
