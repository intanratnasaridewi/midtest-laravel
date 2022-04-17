@extends('layout.main')

@section('content')
<section class="about full-screen d-lg-flex justify-content-center align-items-center" id="about">
    <div class="container">
        <div class="row">   
            <div class="col-lg-7 col-md-12 col-12 d-flex align-items-center">
                <div class="about-text">
                    <small class="small-text">Selamat Datang di <span class="mobile-block">Pengaduan Layanan</span></small>
                    <h1 class="animated animated-text">
                        <span class="mr-2">Mari Ajukan</span>
                            <div class="animated-info">
                                <span class="animated-item">Pendapat</span>
                                <span class="animated-item">Keluhan</span>
                                <span class="animated-item">Kritik Saran</span>
                            </div>
                    </h1>

                    <p>Kami akan selalu menunggu dan terbuka terkait layanan pemerintahan Badung.</p>
                    
                    <div class="custom-btn-group mt-4">
                      <a href="/userpage/create" class="btn mr-lg-2 custom-btn" ><i class='uil uil-file-alt'></i> Ajukan Keluhan</a>
                      <a href="/userpage" class="btn custom-btn custom-btn-bg custom-btn-link">Daftar Keluhan Anda</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 col-md-12 col-12">
                <div class="about-image svg">
                    <img src="../assets/images/undraw/undraw_software_engineer_lvl5.svg" class="img-fluid" alt="svg image">
                </div>
            </div>

        </div>
    </div>
</section>
@endsection