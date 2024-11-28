<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Akun extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama', 'email', 'password', 'role',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
