<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'product';


    protected $fillable = [
        'name',
        'description',
        'status',
        'price',
        'image',
        'featured',
        'categoryID',
        'branchID',
    ];

    public function getById($id)
    {
        return Product::find($id); // Sử dụng Eloquent để lấy sản phẩm theo ID
    }

    public function getAll()
    {
        return Product::all();
    }

    public function getByCategory($cateID)
    {
        return Product::where('categoryID', $cateID)->get();
    }
}

