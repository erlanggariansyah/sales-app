<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nasabah extends Model
{
    protected $table = 'nasabah';
    protected $fillable = ['username', 'fullname', 'tanggal_terdaftar', 'nama_perusahaan', 'produk', 'nilai_produk', 'alamat', 'no_hp'];
}
