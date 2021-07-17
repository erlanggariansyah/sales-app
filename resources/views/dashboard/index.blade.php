@extends('layouts.master')
@section('content')
@if(session('Sukses'))
<div class="alert alert-success" role="alert">
      {{session('Sukses')}}
</div>
@endif
    <div class="row">
    <div class="col-6">
    <h1>Data Admin dan Karyawan</h1>
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
        <h5 class="modal-title" id="exampleModalLabel">Create User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="/master/createUser" method="POST">
      {{csrf_field()}}
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Username</label>
    <input name="username" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="">
</div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input name="password" type="password" class="form-control" id="exampleInputPassword1">
    <div id="emailHelp" class="form-text">Jangan gunakan password yang mudah ditebak!</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Fullname</label>
    <input name="fullname" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">NIK</label>
    <input name="NIK" type="integer" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
</div>
<div class="mb-3">
      <label for="disabledSelect" class="form-label">User Role</label>
      <select name="user_role" id="disabledSelect" class="form-select">
        <option value="Admin">Admin</option>
        <option value="Direktur">Direktur</option>
        <option value="Finance">Finance</option>
        <option value="Sales Corporate">Sales Corporate</option>
        <option value="Sales Manager">Sales Manager</option>
        <option value="Sales">Sales</option>
      </select>
    </div>
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">E-mail</label>
    <input name="email" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">No. Handphone</label>
    <input name="no_hp" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
</div>
<div class="mb-3">
      <label for="disabledSelect" class="form-label">Gender</label>
      <select name="gender" id="disabledSelect" class="form-select">
        <option value="Pria">Pria</option>
        <option value="Wanita">Wanita</option>
      </select>
    </div>
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Alamat</label>
    <input name="alamat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
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
            <th>Password</th>
            <th>Fullname</th>
            <th>NIK</th>
            <th>User Role</th>
            <th>Email</th>
            <th>Nomor HP</th>
            <th>Gender</th>
            <th>Alamat</th>
            <th>Aksi</th>
</tr>
@foreach($data_user as $pengguna)
<tr>
    <td>{{$pengguna->username}}</td>
    <td>{{$pengguna->password}}</td>
    <td>{{$pengguna->fullname}}</td>
    <td>{{$pengguna->NIK}}</td>
    <td>{{$pengguna->user_role}}</td>
    <td>{{$pengguna->email}}</td>
    <td>{{$pengguna->no_hp}}</td>
    <td>{{$pengguna->gender}}</td>
    <td>{{$pengguna->alamat}}</td>
    <td><a href="/master/{{$pengguna->id}}/userEdit" class="btn btn-warning btn-sm">Edit</a></td>
    <td><a href="/master/{{$pengguna->id}}/userDelete" class="btn btn-danger btn-sm">Hapus</a></td>
</tr>
@endforeach
</table>
</div>
@endsection