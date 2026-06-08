@extends('layouts.app')

@section('content')

<h2>Tambah Laporan</h2>

<form action="{{ url('/reports') }}" method="POST">

    {{ csrf_field() }}

    <div class="form-group">

        <label>Judul</label>

        <input type="text"
               name="title"
               class="form-control">

    </div>

    <div class="form-group">

        <label>Deskripsi</label>

        <textarea name="description"
                  class="form-control"></textarea>

    </div>

    <div class="form-group">

        <label>Lokasi</label>

        <input type="text"
               name="location"
               class="form-control">

    </div>

    <button class="btn btn-success">
        Simpan
    </button>

</form>

@endsection