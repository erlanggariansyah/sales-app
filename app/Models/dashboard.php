<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dashboard extends Model
{
    protected $table = 'user';
    protected $fillable = ['username', 'password', 'fullname', 'NIK', 'user_role', 'email', 'no_hp', 'gender', 'alamat'];
}
