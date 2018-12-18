@extends("layouts.app")

@section('content')
@include('inc.header')

<section class="bg-primary" id="about">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mx-auto text-center">
        <h2 class="section-heading text-white">Kenapa Catatan Online?</h2>
        <hr class="light my-4">
        <p class="text-faded mb-4">Dengan catatan online kita dapat membantu mengurangi penggunaan kertas dan mendukung gerakan Go Green !</p>
        <a class="btn btn-light btn-xl js-scroll-trigger" href="{{ route('register') }}">Yuk Daftar!</a>
      </div>
    </div>
  </div>
</section>

<section class="bg-light" id="features">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center">
              <h2 class="section-heading">Apa aja sih yang bisa dilakukan di Noted.?</h2>
              <hr class="my-4">
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6 text-center">
              <div class="service-box mt-5 mx-auto">
                <i class="fas fa-4x fa-pen-nib text-primary mb-3 sr-icon-1"></i>
                <h3 class="mb-3">Menulis Catatan</h3>
                <p class="text-muted mb-0">Kamu bisa menulis catatanmu disini, tanpa menggunakan kertas cukup dengan device yang memiliki koneksi internet.</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
              <div class="service-box mt-5 mx-auto">
                <i class="fas fa-4x fa-book-open text-primary mb-3 sr-icon-2"></i>
                <h3 class="mb-3">Membaca Catatan</h3>
                <p class="text-muted mb-0">Tentu saja disini kamu bisa membaca semua catatan kamu yang sudah kamu buat di Noted.</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
              <div class="service-box mt-5 mx-auto">
                <i class="fas fa-4x fa-edit text-primary mb-3 sr-icon-3"></i>
                <h3 class="mb-3">Mengedit Catatan</h3>
                <p class="text-muted mb-0">Kamu juga bisa mengedit catatatnmu yang sudah kamu simpan di Noted.</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
              <div class="service-box mt-5 mx-auto">
                <i class="fas fa-4x fa-share-alt text-primary mb-3 sr-icon-4"></i>
                <h3 class="mb-3">Share dengan teman!</h3>
                <p class="text-muted mb-0">Dengan Noted. kamu juga dengan mudah membagikan catatanmu kepada teman-temanmu!</p>
              </div>
            </div>
          </div>
        </div>
</section>

<section id="contact" class="bg-dark text-white">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto text-center">
              <h2 class="section-heading">Let's Get In Touch!</h2>
              <hr class="my-4">
              <p class="mb-5">Punya keluhan atau saran untuk kami? Hubungi kami di kontak di bawah ini! Kami akan dengan senang hati membatu dan menerima saran teman-teman :)</p>
            </div>
          </div>
            <div class="col-lg-4-center mr-auto text-center">
              <i class="fas fa-envelope fa-3x mb-3 sr-contact-2"></i>
              <p>
                <a href="mailto:your-email@your-domain.com">feedback@noted.com</a>
              </p>
              <p><small style="text-align:center">Theme from <a href="https://startbootstrap.com/" target="_blank">startbootstrap.com</a></small></p>
            </div>
          </div>
        </div>
    </section>

@endsection

