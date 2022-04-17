<!-- Modal -->
@extends('layout.mainadmin')

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

<form action="/dashboard" method="post" enctype="multipart/form-data">
    @csrf
    <div class="card shadow p-3 mb-5">
        <div class="mb-3">
            <label for="tanggal_pengaduan">Tanggal Pengaduan</label>
            <input type="date" class="form-control @error('tanggal_pengaduan') is-invalid  @enderror" name="tanggal_pengaduan">
            @error('tanggal_pengaduan')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="keluhan">Keluhan</label>
            <textarea class="form-control @error('keluhan') is-invalid  @enderror" name="keluhan"></textarea>
            @error('keluhan')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <a href="/dashboard" class="btn btn-danger">Kembali</a>
            <button type="submit" class="btn btn-primary">Kirim</button>
        </div>
    </div>
</form>
@endsection