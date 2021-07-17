@extends('layouts.master');
@section('content')
    @if(session('Sukses'))
<div class="alert alert-success" role="alert">
      {{session('Sukses')}}
</div>
@endif
    <div class="row">
        <h1>Edit Data Nasabah</h1>
        <hr>
    <form action="/nasabah/{{$edit->id}}/nasabahEdit" method="POST">
    {{csrf_field()}}
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Username</label>
    <input name="username" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="" value="{{$edit->username}}">
</div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Fullname</label>
    <input name="fullname" type="text" class="form-control" id="exampleInputEmail1" value="{{$edit->fullname}}">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama Perusahaan</label>
    <input name="nama_perusahaan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$edit->nama_perusahaan}}">
</div>
<div class="mb-3">
      <label for="disabledSelect" class="form-label">Produk</label>
      <select name="produk" id="disabledSelect" class="form-select">
        <option value="SYH (Syariah)" @if ($edit->produk == "SYH (Syariah)") selected @endif>Syariah</option>
        <option value="TFS (Trade Finance & Service)" @if ($edit->produk == "TFS (Trade Finance & Service)") selected @endif>Trade Finance & Service</option>
        <option value="PJ (Pinjaman)" @if ($edit->produk == "PJ (Pinjaman)") selected @endif>Pinjaman</option>
        <option value="SPN (Simpanan)" @if ($edit->produk == "SPN (Simpanan)") selected @endif>Simpanan</option>
        <option value="VLS (Valas)" @if ($edit->produk == "VLS (Valas)") selected @endif>Valas</option>
      </select>
    </div>
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Alamat</label>
    <input name="alamat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$edit->produk}}">
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">No. Handphone</label>
    <input name="no_hp" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$edit->no_hp}}">
</div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Dengan ini saya setuju bahwa data diatas boleh dipergunakan untuk keperluan Development</label>
  </div>
      </div>
      <button type="submit" class="btn btn-warning">Update</button>
        </form>
    </div>
  </div>
</div>
</div>
<br>
</div>
@endsection