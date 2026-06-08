@extends('layouts.app')

@section('content')

<h2>Daftar Laporan</h2>

<a href="{{ url('/reports/create') }}"
    class="btn btn-primary mb-3">
    Tambah Laporan
</a>

<table class="table table-bordered">
   
    <tr>
        <th>Judul</th>
        <th>Lokasi</th>
        <th>Status</th>
        <th>Aksi</th>
    </tr>
     
@foreach($reports as $report)
    
    <tr>

        <td>{{ $report->title }}</td>

        <td>{{ $report->location }}</td>

        <td>{{ $report->status }}</td>

        <td>

            <a href="{{ url('/reports/'.$report->id.'/edit') }}"
               class="btn btn-warning btn-sm">
               Edit
            </a>

            <form action="{{ url('/reports/'.$report->id) }}"
                  method="POST"
                  style="display:inline-block;">

                {{ csrf_field() }}

                {{ method_field('DELETE') }}

                <button class="btn btn-danger btn-sm">
                    Hapus
                </button>

            </form>

        </td>

    </tr>

    @endforeach

</table>

@endsection