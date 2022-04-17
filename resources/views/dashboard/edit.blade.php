@extends('layout.blank2')

@section('content')
@if(session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
    </button>
</div>
@endif

@if(session()->has('failed'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ session('failed') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
    </button>
</div>
@endif

<form action="/dashboard/{{ $data->id }}" method="post"enctype="multipart/form-data" >
    @csrf
    @method('put')
    <div class="card shadow p-3 mb-5">
        <div class="mb-3">
            <label for="tanggal_pengaduan">Tanggal Pengaduan</label>
            <input type="date" class="form-control @error('tanggal_pengaduan') is-invalid  @enderror" name="tanggal_pengaduan" value="{{ $data->tanggal_pengaduan }}" disabled>
            @error('tanggal_pengaduan')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="keluhan">Keluhan</label>
            <input type="text" class="form-control @error('keluhan') is-invalid @enderror" name="keluhan" value="{{ $data->keluhan }}" disabled>
            @error('keluhan')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="keluhan">Status</label>
            <input type="text" class="form-control @error('status') is-invalid @enderror" name="status" value="{{ $data->status }}">
            @error('status')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <a href="/dashboard" class="btn btn-danger">Kembali</a>
            <button type="submit" class="btn btn-warning">Ubah</button>
        </div>
    </div>
</form>
@endsection