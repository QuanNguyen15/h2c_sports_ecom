<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    use HasFactory;

    protected $table = 'shipping';

    // Các thuộc tính có thể được gán hàng loạt.
    protected $fillable = [
        'full_name',
        'address',
        'phone_num',
        'email',
        'note',
    ];

    public $timestamps = false;

    // thêm mới bản ghi vào bảng shipping


}
