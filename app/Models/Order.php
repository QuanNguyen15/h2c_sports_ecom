<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';

    // Các thuộc tính có thể được gán hàng loạt.
    protected $fillable = [
        'created_at',
        'total_pay',
        'pay_method',
        'status',
        'updated_at',
        'cancelled_at',
        'userID',
        'shipID',
    ];

    // Nếu bạn không sử dụng timestamps (created_at, updated_at), bỏ đi đoạn sau:
    public $timestamps = true;

    // Định nghĩa mối quan hệ với bảng `users` và `shipping`
    public function user()
    {
        return $this->belongsTo(User::class, 'userID');
    }

    public function shipping()
    {
        return $this->belongsTo(Shipping::class, 'shipID');
    }

    // thêm mới đơn hàng vào cơ sở dữ liệu


}
