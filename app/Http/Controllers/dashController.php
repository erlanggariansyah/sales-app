<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashController extends Controller
{
    public function index (Request $request) {
        if ($request->has('cari')){
            $data_dashboard = \App\Models\dashboard::where('username', 'LIKE', '%'.$request->cari.'%')->orWhere('fullname', 'LIKE', '%'.$request->cari.'%')->orWhere('no_hp', 'LIKE', '%'.$request->cari.'%')->orWhere('NIK', 'LIKE', '%'.$request->cari.'%')->get();
        } else {
            $data_dashboard = \App\Models\dashboard::all();
        }
        return view ('dashboard.index', ['data_user' => $data_dashboard]);
    }

    public function createUser (Request $request) {
        \App\Models\dashboard::create($request->all());
        return redirect('/master')->with('Sukses', 'Data berhasil di input.');
    }

    public function editUser ($id) {
        $edit = \App\Models\dashboard::find($id);
        return view ('dashboard.edit', ['edit' => $edit]);
    }

    public function update (Request $request, $id) {
        $edit = \App\Models\dashboard::find($id);
        $edit->update($request->all());
        return redirect ('/master')->with('Sukses', "Data berhasil di update.");
    }

    public function delete ($id) {
        $edit = \App\Models\dashboard::find($id);
        $edit->delete();
        return redirect ('/master')->with('Sukses', "Data berhasil di hapus.");
    }
}
