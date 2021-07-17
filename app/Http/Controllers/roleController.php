<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class roleController extends Controller
{
    public function index (Request $request) {
        if ($request->has('cari')){
            $data_role = \App\Models\role::where('role', 'LIKE', '%'.$request->cari.'%')->get();
        } else {
            $data_role = \App\Models\role::all();
        }
        return view ('dashboard.role', ['data_role' => $data_role]);
    }

    public function createRole (Request $request) {
        \App\Models\role::create($request->all());
        return redirect('/role')->with('Sukses', 'Data berhasil di input.');
    }

    public function editRole ($id) {
        $edit = \App\Models\role::find($id);
        return view ('dashboard.editRole', ['edit' => $edit]);
    }

    public function updateRole (Request $request, $id) {
        $edit = \App\Models\role::find($id);
        $edit->update($request->all());
        return redirect ('/role')->with('Sukses', "Data berhasil di update.");
    }
}
