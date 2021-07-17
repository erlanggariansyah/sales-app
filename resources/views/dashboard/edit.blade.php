@extends('layouts.master');
@section('content')
<div class="alert alert-danger" role="alert">
    Peringatan! demi keamanan, password harus di dirubah setiap kali melakukan update data.
</div>
    @if(session('Sukses'))
<div class="alert alert-success" role="alert">
      {{session('Sukses')}}
</div>
@endif
    <div class="row">
        <h1>Edit Data User</h1>
        <hr>
    <form action="/master/{{$edit->id}}/userEdit" method="POST">
    {{csrf_field()}}
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Username</label>
    <input name="username" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="" value="{{$edit->username}}">
</div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input name="password" type="password" class="form-control" id="exampleInputPassword1" value="$edit->password">
    <div id="emailHelp" class="form-text">Jangan gunakan password yang mudah ditebak!</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Fullname</label>
    <input name="fullname" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$edit->fullname}}">
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">NIK</label>
    <input name="NIK" type="integer" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$edit->NIK}}">
</div>
<div class="mb-3">
      <label for="disabledSelect" class="form-label">User Role</label>
      <select name="user_role" id="disabledSelect" class="form-select">
        <option value="Admin" @if ($edit->user_role == "Admin") selected @endif>Admin</option>
        <option value="Direktur" @if ($edit->user_role === "Direktur") selected @endif>Direktur</option>
        <option value="Finance" @if ($edit->user_role === "Finance") selected @endif>Finance</option>
        <option value="Sales Corporate" @if ($edit->user_role === "Sales Corporate") selected @endif>Sales Corporate</option>
        <option value="Sales Manager" @if ($edit->user_role === "Sales Manager") selected @endif>Sales Manager</option>
        <option value="Sales" @if ($edit->user_role === "Sales") selected @endif>Sales</option>
      </select>
    </div>
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">E-mail</label>
    <input name="email" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$edit->email}}">
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">No. Handphone</label>
    <input name="no_hp" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$edit->no_hp}}">
</div>
<div class="mb-3">
      <label for="disabledSelect" class="form-label">Gender</label>
      <select name="gender" id="disabledSelect" class="form-select">
        <option value="Pria" @if ($edit->gender == "Pria") selected @endif>Pria</option>
        <option value="Wanita" @if ($edit->gender == "Wanita") selected @endif>Wanita</option>
      </select>
    </div>
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Alamat</label>
    <input name="alamat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$edit->alamat}}">
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