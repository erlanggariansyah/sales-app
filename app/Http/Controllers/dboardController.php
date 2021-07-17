<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dboardController extends Controller
{
    public function index () {
        $data_produk = \App\Models\produkss::all();
        return view ('dashboard.dboard', ['data_produk' => $data_produk]);
    }
}
