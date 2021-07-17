<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produkss extends Model
{
    protected $table = 'produks';
    protected $fillable = ['kode', 'nama', 'creatby', 'updateby'];
}
