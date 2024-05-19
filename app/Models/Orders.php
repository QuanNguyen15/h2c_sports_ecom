<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
    protected $fillable = [
        'create_at',
        'total_pay',
        'pay_method',
        'status',
        'update_at',
        'cancel_at',
        'userID',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'userID');
    }
}
