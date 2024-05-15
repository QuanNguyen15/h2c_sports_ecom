<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categories;

class product extends Model
{
    use HasFactory;
    protected array $filltable = [
        'ID',
        'name',
        'price',
        'image',
        'categoryID',

    ];
    public function categories(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this-> belongsTo(Categories::class);
    }
}
