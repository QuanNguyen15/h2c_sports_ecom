<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categories;

class product extends Model
{
    use HasFactory;
    protected $table = 'product';

    protected $primaryKey = 'ID';

    protected $fillable = [
        'name',
        'description',
        'status',
        'price',
        'image',
        'featured',
        'create_at',
        'update_at',
        'delete_at',
        'categoryID',
        'branchID',

    ];

    public function getById($id)
    {
        return product::findOrFail($id); // Sử dụng Eloquent để lấy sản phẩm theo ID
    }

    public function getAll()
    {
        return product::all();
    }

    public function getByCategory($cateID)
    {
        return product::where('categoryID', $cateID)->get();
    }

    public function category(){
        return $this->belongsTo(Categories::class, 'categoryID', 'ID');
    }

    public function productImages()
    {
        return $this->hasMany(ProductImage::class, 'productID');
    }


}
