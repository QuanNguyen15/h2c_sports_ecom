<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{

    use HasFactory, Notifiable;

    // Specify the table associated with the model
    protected $table = 'users';

    // Define the primary key
    protected $primaryKey = 'ID';

    // Disable timestamps if they are not being used by Eloquent
    public $timestamps = false;

    // Define which attributes should be mass assignable
    protected $fillable = [
        'full_name',
        'gender',
        'birth',
        'phone_num',
        'email',
        'account',
        'password',
        'roleID',
        'status',
    ];

    // Define which attributes should be hidden for arrays
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // The attributes that should be cast to native types
    protected $casts = [
        'password' => 'hashed',
        'birth' => 'date',
        'create_at' => 'datetime',
        'update_at' => 'datetime',
        'delete_at' => 'datetime',
    ];

    // If your password is hashed when stored in the database,
    // you don't need to hash it manually in the controller
    // public function setPasswordAttribute($password)
    // {
    //     $this->attributes['password'] = bcrypt($password);
    // }


    //method
}
