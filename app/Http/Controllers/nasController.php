<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class nasController extends Controller
{
    public function index (Request $request) {
        if ($request->has('cari')){
            $data_nasabah = \App\Models\nasabah::where('username', 'LIKE', '%'.$request->cari.'%')->get();
        } else {
            $data_nasabah = \App\Models\nasabah::all();
        }
        return view ('dashboard.nasabah', ['data_nasabah' => $data_nasabah]);
    }

    public function createNasabah (Request $request) {
        \App\Models\nasabah::create($request->all());
        return redirect('/nasabah')->with('Sukses', 'Data berhasil di input.');
    }

    public function editNasabah ($id) {
        $edit = \App\Models\nasabah::find($id);
        return view ('dashboard.editNasabah', ['edit' => $edit]);
    }

    public function updateNasabah (Request $request, $id) {
        $edit = \App\Models\nasabah::find($id);
        $edit->update($request->all());
        return redirect ('/nasabah')->with('Sukses', "Data berhasil di update.");
    }

    public function deleteNasabah ($id) {
        $edit = \App\Models\nasabah::find($id);
        $edit->delete();
        return redirect ('/nasabah')->with('Sukses', "Data berhasil di hapus.");
    }
}
