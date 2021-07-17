@extends('layouts.master')
@section('content')
@if(session('Sukses'))
<div class="alert alert-success" role="alert">
      {{session('Sukses')}}
</div>
@endif
    <div class="row">
    <div class="col-6">
    <h1>Produk</h1>
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
        <h5 class="modal-title" id="exampleModalLabel">Create Produk</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="/produk/createProduk" method="POST">
      {{csrf_field()}}
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Kode Produk</label>
    <input name="kode" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="">
</div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama Produk</label>
    <input name="nama" type="text" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Created By</label>
    <input name="by" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="">
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Updated By</label>
    <input name="updateby" type="integer" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
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
            <th>Kode Produk</th>
            <th>Nama Produk</th>
            <th>Creat Date</th>
            <th>Created By</th>
            <th>Last Update</th>
            <th>Update By</th>
            <th>Aksi</th>
</tr>
@foreach($data_produk as $pengguna)
<tr>
    <td>{{$pengguna->kode}}</td>
    <td>{{$pengguna->nama}}</td>
    <td>{{$pengguna->create}}</td>
    <td>{{$pengguna->by}}</td>
    <td>{{$pengguna->lastupdate}}</td>
    <td>{{$pengguna->updateby}}</td>
    <td><a href="/produk/{{$pengguna->id}}/produkEdit" class="btn btn-warning btn-sm">Edit</a></td>
    <td><a href="/produk/{{$pengguna->id}}/produkDelete" class="btn btn-danger btn-sm">Hapus</a></td>
</tr>
@endforeach
</table>
</div>
@endsection