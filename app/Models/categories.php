<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\product;


class categories extends Model
{

    use HasFactory;
    protected $table = 'categorires';

    protected array $filltable = [
              'ID',
              'category',
              'slug'

    ];
    public function product(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
          return $this-> hasMany(product::class,'categoryID','ID');
    }



    public $timestamps = false;

}
// <?php

// namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class categories extends Model
// {
//     use HasFactory;
//     protected $fillable = [
//         'category',
//         'slug'
//     ];
//     public $timestamps = false;
    
// }
