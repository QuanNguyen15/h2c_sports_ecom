<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categories;

class Product extends Model
{

    use HasFactory;
    protected $table = 'product';

    protected array $filltable = [
        'ID',
        'name',
        'description',
        'status',
        'price',
        'image',
        'featured',
        'categoryID',
        'branchID',

    ];
    public function category(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Categories::class, 'categoryID', 'ID');
    }
}

// class product extends Model
// {
//     use HasFactory;
//     protected array $filltable = [
//         'ID',
//         'name',
//         'price',
//         'image',
//         'categoryID',

//     ];
//     public function categories(): \Illuminate\Database\Eloquent\Relations\BelongsTo
//     {
//         return $this-> belongsTo(Categories::class);
//     }
// }
// <?php

// namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Product extends Model
// {
//     use HasFactory;
//     protected $fillable = [
//         'name',
//         'description',
//         'status',
//         'price',
//         'image',
//         'featured',
//         'categoryID',
//         'branchID',
//     ];

// }
