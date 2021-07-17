@extends('layouts.master')
@section('content')
@if(session('Sukses'))
<div class="alert alert-success" role="alert">
      {{session('Sukses')}}
</div>
@endif
    <div class="row">
    <div class="col-6">
    <h1>Nasabah</h1>
    <hr>
</div>
<div class="col-6">
<div class="modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Create
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create Nasabah</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="/nasabah/createNasabah" method="POST">
      {{csrf_field()}}
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Username</label>
    <input name="username" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="">
</div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Fullname</label>
    <input name="fullname" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="">
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama Perusahaan</label>
    <input name="nama_perusahaan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="">
</div>
<div class="mb-3">
      <label for="disabledSelect" class="form-label">Produk</label>
      <select name="produk" id="disabledSelect" class="form-select">
        <option value="SYH (Syariah)">Syariah</option>
        <option value="TFS (Trade Finance & Service)">Trade Finance & Service</option>
        <option value="PJ (Pinjaman)">Pinjaman</option>
        <option value="SPN (Simpanan)">Simpanan</option>
        <option value="VLS (Valas)">Valas</option>
      </select>
    </div>
    <div class="mb-3">
      <label for="disabledSelect" class="form-label">Nilai Produk</label>
      <select name="nilai_produk" id="disabledSelect" class="form-select">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
      </select>
    </div>
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Alamat</label>
    <input name="alamat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="">
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">No. Handphone</label>
    <input name="no_hp" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
</div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Dengan ini saya setuju bahwa data diatas boleh dipergunakan untuk keperluan Development</label>
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Kirim</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
<br>
    <table class="table table-hover">
        <tr>
            <th>Username</th>
            <th>Fullname</th>
            <th>Tanggal Terdaftar</th>
            <th>Nama Perusahaan</th>
            <th>Produk</th>
            <th>Nilai Produk</th>
            <th>Alamat</th>
            <th>No. Handphone</th>
            <th>Aksi</th>
</tr>
@foreach($data_nasabah as $pengguna)
<tr>
    <td>{{$pengguna->username}}</td>
    <td>{{$pengguna->fullname}}</td>
    <td>{{$pengguna->tanggal_terdaftar}}</td>
    <td>{{$pengguna->nama_perusahaan}}</td>
    <td>{{$pengguna->produk}}</td>
    <td>{{$pengguna->nilai_produk}}</td>
    <td>{{$pengguna->alamat}}</td>
    <td>{{$pengguna->no_hp}}</td>
    <td><a href="/nasabah/{{$pengguna->id}}/nasabahEdit" class="btn btn-warning btn-sm">Edit</a></td>
    <td><a href="/nasabah/{{$pengguna->id}}/nasabahDelete" class="btn btn-danger btn-sm">Hapus</a></td>
</tr>
@endforeach
</table>
</div>
@endsection