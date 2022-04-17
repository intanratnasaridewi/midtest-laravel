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
<!-- CONTACT -->
<section class="contact py-5" id="contact">
  <div class="container">
    <div class="row">
      
      <div class="col-lg-5 mr-lg-5 col-12">
        <div class="google-map w-100">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12088.558402180099!2d-73.99373482142036!3d40.75895421922642!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25855b8fb3083%3A0xa0f9aef176042a5c!2sTheater+District%2C+New+York%2C+NY%2C+USA!5e0!3m2!1sen!2smm!4v1549875377188" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>

        <div class="contact-info d-flex justify-content-between align-items-center py-4 px-lg-5">
            <div class="contact-info-item">
              <h3 class="mb-3 text-white">Say hello</h3>
              <p class="footer-text mb-0">010 020 0960</p>
              <p><a href="mailto:hello@company.co">hello@company.co</a></p>
            </div>

            <ul class="social-links">
                 <li><a href="#" class="uil uil-dribbble" data-toggle="tooltip" data-placement="left" title="Dribbble"></a></li>
                 <li><a href="#" class="uil uil-instagram" data-toggle="tooltip" data-placement="left" title="Instagram"></a></li>
                 <li><a href="#" class="uil uil-youtube" data-toggle="tooltip" data-placement="left" title="Youtube"></a></li>
            </ul>
        </div>
      </div>

      <div class="col-lg-6 col-12">
        <div class="contact-form">
          <h2 class="mb-4">Interested to work together? Let's talk</h2>

          <form action="" method="get">
            <div class="row">
              <div class="col-lg-6 col-12">
                <input type="text" class="form-control" name="name" placeholder="Your Name" id="name">
              </div>

              <div class="col-lg-6 col-12">
                <input type="email" class="form-control" name="email" placeholder="Email" id="email">
              </div>

              <div class="col-12">
                <textarea name="message" rows="6" class="form-control" id="message" placeholder="Message"></textarea>
              </div>

              <div class="ml-lg-auto col-lg-5 col-12">
                <input type="submit" class="form-control submit-btn" value="Send Button">
              </div>
            </div>
          </form>
        </div>
      </div>

    </div>
  </div>
@endsection