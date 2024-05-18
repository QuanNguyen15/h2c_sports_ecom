<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSize extends Model
{
    use HasFactory;
    // Đặt tên bảng nếu không tuân theo quy tắc đặt tên của Laravel
    protected $table = 'sizes';

    // Đặt khóa chính nếu không phải là 'id'
    protected $primaryKey = 'ID';

    // Cho phép Eloquent quản lý các cột này
    protected $fillable = [
        'size',
    ];

    // Nếu khóa chính không tự động tăng, cần thiết lập điều này
    public $incrementing = false;

    // Đặt kiểu dữ liệu của khóa chính
    protected $keyType = 'int';

    // Nếu bảng không có cột timestamps (created_at và updated_at)
    public $timestamps = false;

    public function getAll()
    {
        return ProductSize::all();
    }

    public function getById($id)
    {
        return ProductSize::findOrFail($id);
    }

}
