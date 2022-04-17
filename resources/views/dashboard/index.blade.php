@extends('layout.mainadmin')

@section('content')
<h2>List</h2>


<div class="card shadow p-3 mt-2">
    <div class="table-responsive">
        @if(session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success')}}
        </div>
        @endif
        {{-- <form action="/pengaduan" method="get">
            <div class="mb-1 d-flex justify-content-end">
                <label for="search" class="mt-1">Search :</label>
                <input class="form-control form-control-sm w-25 ml-2" type="text" name="search">
            </div>
        </form> --}}
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIK</th>
                <th>Tanggal Pengaduan</th>
                <th>Isi Laporan</th>
                <th>status</th>
                <th>Opsi</th>
            </tr>
            @if($data->count() > 0)
            @foreach($data as $row)
            <tr>
                <td>{{ $loop->iteration}}</td>
                <td>{{ $row->name }}</td>
                <td>{{ $row->nik}}</td>
                <td>{{ $row->tanggal_pengaduan }}</td>
                <td>{{ $row->keluhan}}</td>
                <td>{{ $row->status}}</td>
                <td>
                    <form action="/dashboard/{{ $row->id }}" method="post">
                        @csrf
                        @method('delete')
                        <div class="d-flex">
                            <a href="/dashboard/{{ $row->id }}" class="btn btn-warning mr-1">Respon</a>
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Hapus pengaduan?');">Delete</button>
                        </div>
                    </form>
                </td>
            </tr>
            @endforeach
            @else
            <tr>
                <td class="text-center" colspan="6">Data tidak ada</td>
            </tr>
            @endif
        </table>
    </div>
</div>
@endsection