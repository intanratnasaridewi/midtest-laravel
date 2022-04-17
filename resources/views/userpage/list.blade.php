@extends('layout.blankmain')



@section('content')
<h2>Pengaduan anda</h2>
<a href="/userpage/create" class="my-2 btn btn-primary">tambah</a>

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
                <th>NIK</th>
                <th>Nama</th>
                <th>Tanggal Pengaduan</th>
                <th>Isi Laporan</th>
                <th>Status</th>
                <th>Opsi</th>
            </tr>
            @if($data->count() > 0)
            @foreach($data as $row)
            <tr>
                <td>{{ $loop->iteration}}</td>
                <td>{{ $row->nik }}</td>
                <td>{{ $row->name}}</td>
                <td>{{ $row->tanggal_pengaduan }}</td>
                <td>{{ $row->keluhan}}</td>
                <td>{{ $row->status}}</td>
                <td>
                    @if($row->status == 'terkirim')
                    <form action="/userpage/{{ $row->id }}" method="post">
                        @csrf
                        @method('delete')
                        <div class="d-flex">
                            <a href="/userpage/{{ $row->id }}/edit" class="btn btn-warning mr-1">Edit</a>
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Hapus pengaduan?');">Delete</button>
                        </div>
                    </form>
                    @else
                    <span class="badge badge-info p-2 mt-2">Sudah diproses / selesai</span>
                    @endif
                </td>
            </tr>
            @endforeach
            @else
            <tr>
                <td class="text-center" colspan="6">Data tidak ada</td>
            </tr>
            @endif
        </table>
        <a href="/" class="my-2 btn btn-primary">kembali</a>
    </div>
</div>
@endsection