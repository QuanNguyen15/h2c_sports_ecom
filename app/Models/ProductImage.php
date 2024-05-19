<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    use HasFactory;

    // Tên bảng tương ứng trong cơ sở dữ liệu
    protected $table = 'images';

    // Khóa chính của bảng
    protected $primaryKey = 'ID';

    // Các cột có thể được fill vào
    protected $fillable = ['image', 'productID'];

    // Tắt timestamps nếu bảng không có cột created_at và updated_at
    public $timestamps = false;

    // Định nghĩa mối quan hệ với model Product
    public function productImage()
    {
        return $this->belongsTo(product::class, 'productID');
    }
}
