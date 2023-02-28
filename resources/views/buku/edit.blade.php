@extends('layouts.nav')
@section('content')
<div class="container col-10 bg-light my-5">
    <div class="col-md py-5">
    <h3>Edit buku</h3>
<form action="/buku/edit{{ $id_buku->id_buku }}" method="POST">
    @method('PUT')
    @csrf
    Nama buku :
    <input type="text" name="nama_buku" value="{{ $id_buku->nama_buku }}" class="form-control">

    Nama Pengarang :
    <input type="text" name="nama_pengarang" value="{{ $id_buku->nama_pengarang }}" class="form-control">

    <a href="/buku" class="btn btn-danger my-3 mx-3" style="float:right">Batal</a>
    <button type="submit" class="btn btn-primary my-3" style="float:right">Simpan</button>
    <br>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-
gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
</script>
    </div>
</div>
@endsection