@extends('layouts.app')

@section('content')

<h2>Edit Laporan</h2>

<form action="{{ url('/reports/'.$report->id) }}"
      method="POST">

    {{ csrf_field() }}

    {{ method_field('PUT') }}

    <div class="form-group">

        <label>Judul</label>

        <input type="text"
               name="title"
               value="{{ $report->title }}"
               class="form-control">

    </div>

    <div class="form-group">

        <label>Deskripsi</label>

        <textarea name="description"
                  class="form-control">{{ $report->description }}</textarea>

    </div>

    <div class="form-group">

        <label>Lokasi</label>

        <input type="text"
               name="location"
               value="{{ $report->location }}"
               class="form-control">

    </div>

    <div class="form-group">
        <label>Status</label>

        <select name="status" class="form-control">

            <option value="pending"
            {{ $report->status == 'pending' ? 'selected' : '' }}>
            Pending
            </option>

            <option value="process"
            {{ $report->status == 'process' ? 'selected' : '' }}>
            Process
            </option>

            <option value="done"
            {{ $report->status == 'done' ? 'selected' : '' }}>
            Done
            </option>

        </select>

    </div>

    <button class="btn btn-primary">
        Update
    </button>

</form>

@endsection