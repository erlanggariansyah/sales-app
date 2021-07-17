@extends('layouts.master');
@section('content')
    @if(session('Sukses'))
<div class="alert alert-success" role="alert">
      {{session('Sukses')}}
</div>
@endif
    <div class="row">
        <h1>Edit Data Produk</h1>
        <hr>
    <form action="/produk/{{$edit->id}}/produkEdit" method="POST">
    {{csrf_field()}}
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Kode Produk</label>
    <input name="kode" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="" value="{{$edit->kode}}">
</div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama Produk</label>
    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" value="{{$edit->nama}}">
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Update By</label>
    <input name="updateby" type="integer" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$edit->updateby}}">
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