<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\product;

class categories extends Model
{
    use HasFactory;
    protected $filltable = [
              'ID',
              'category',
         
    ];
    public function product(){
          return $this-> hasMany(product::class,'categoryID','ID');
    }
}
