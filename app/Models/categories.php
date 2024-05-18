<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\categories;

class Categories extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $fillable = [
        'ID',
        'category',
        'slug',


    ];


    public function product(){
        return $this->hasMany(Product::class, 'categoryID', 'ID');
    }
}
