<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\product;

class Categories extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $fillable = [
        'ID',
        'category',
        'slug',


    ];


    public function product(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(product::class, 'categoryID', 'ID');
    }
}
