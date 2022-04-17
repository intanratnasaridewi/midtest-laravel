@extends('layout.blankmain')

@section('content')
<form action="/userpage/{{ $data->id }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="card shadow p-3 mb-5">
        <div class="mb-3">
            <label for="tanggal_pengaduan">Tanggal Pengaduan</label>
            <input type="date" class="form-control @error('tanggal_pengaduan') is-invalid  @enderror" name="tanggal_pengaduan" value="{{ $data->tanggal_pengaduan }}">
            @error('tanggal_pengaduan')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="keluhan">Keluhan</label>
            <input type="text" class="form-control @error('keluhan') is-invalid @enderror" name="keluhan" value="{{ $data->keluhan }}">
            @error('keluhan')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        @if($data->status == 'terkirim')
        <div class="mb-3">
            <a href="/userpage" class="btn btn-danger">Kembali</a>
            <button type="submit" class="btn btn-warning">Ubah</button>
        </div>
        @else
        <a class="badge badge-info p-2 mt-2" href="/userpage">Sudah diproses / selesai</a>
        @endif
    </div>
</form>
@endsection