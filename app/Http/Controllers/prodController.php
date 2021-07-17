<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class prodController extends Controller
{
    public function index (Request $request) {
        if ($request->has('cari')){
            $data_produk = \App\Models\produkss::where('nama', 'LIKE', '%'.$request->cari.'%')->orWhere('kode', 'LIKE', '%'.$request->cari.'%')->get();
        } else {
            $data_produk = \App\Models\produkss::all();
        }
        return view ('dashboard.produkss', ['data_produk' => $data_produk]);
    }

    public function createProduk (Request $request) {
        \App\Models\produkss::create($request->all());
        return redirect('/produk')->with('Sukses', 'Data berhasil di input.');
    }

    public function editProduk ($id) {
        $edit = \App\Models\produkss::find($id);
        return view ('dashboard.editProduk', ['edit' => $edit]);
    }

    public function updateProduk (Request $request, $id) {
        $edit = \App\Models\produkss::find($id);
        $edit->update($request->all());
        return redirect ('/produk')->with('Sukses', "Data berhasil di update.");
    }

    public function deleteProduk ($id) {
        $edit = \App\Models\produkss::find($id);
        $edit->delete();
        return redirect ('/produk')->with('Sukses', "Data berhasil di hapus.");
    }
}
