<!-- Modal -->
@extends('layout.blankmain')

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

<form action="/userpage" method="post" enctype="multipart/form-data">
    @csrf
    <div class="card shadow p-3 mb-5">
        <div class="mb-3">
            <label for="nik">NIK</label>
            <input type="text" class="form-control" name="nik" value="{{ auth()->user()->nik }}" >
        </div>
        <div class="mb-3">
            <label for="name">Nama</label>
            <input type="text" class="form-control" name="name" value="{{ auth()->user()->name }}" >
        </div>
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
            <a href="/" class="btn btn-danger">Kembali</a>
            <button type="submit" class="btn btn-primary">Kirim</button>
        </div>
    </div>
          {{-- <label for="basic-url" class="form-label">Identitas</label>
          <div class="input-group mb-3">
            <input type="text" class="form-control" name="name" value="{{ auth()->user()->name }}" disabled>
            <span class="input-group-text">NIK</span>
            <input type="text" class="form-control" name="nik" value="{{ auth()->user()->nik }}" disabled>
          </div>
          <label for="basic-url" class="form-label">Masukkan Tanggal yang sesuai</label>
            <div class="input-group">
              <span class="input-group-text">tanggal</span>
              <input type="date" class="form-control @error('tanggal_pengaduan') is-invalid  @enderror" name="tanggal_pengaduan">
              @error('tanggal_pengaduan')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
              @enderror
            </div>
            <label for="basic-url" class="form-label">Masukkan Keluhan Anda dengan Jelas</label>
            <div class="input-group">
              <span class="input-group-text">Keluhan</span>
              <textarea class="form-control" aria-label="With textarea" @error('keluhan') is-invalid  @enderror name="keluhan">{{old('keluhan')}}</textarea>
              @error('keluhan')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
              @enderror
            </div>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
          </div>   --}}
</form>
@endsection