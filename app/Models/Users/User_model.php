<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_model extends Model
{
    use HasFactory;

    protected $table = 'Users';


    protected $fillable = [
        'name',
        'phone',
        'email',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

}
