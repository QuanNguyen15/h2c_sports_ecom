<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    protected $table = 'order_detail';



    // Các thuộc tính có thể được gán hàng loạt.
    protected $fillable = [
        'orderID',
        'productID',
        'sizeID',
        'colorID',
        // 'discountID',
        'quantity',
        'sale_price',
    ];

    public $timestamps = false;

    // Định nghĩa mối quan hệ với các bảng liên quan
    public function order()
    {
        return $this->belongsTo(Order::class, 'orderID');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'productID');
    }

    public function size()
    {
        return $this->belongsTo(ProductSize::class, 'sizeID');
    }

    public function color()
    {
        return $this->belongsTo(ProductColor::class, 'colorID');
    }

    // public function discount()
    // {
    //     return $this->belongsTo(Discount::class, 'discountID');
    // }

    // thêm mới bản ghi vào OrderDetail


}
