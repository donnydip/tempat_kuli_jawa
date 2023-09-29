@extends('layouts.base')
@section('title','TKJ')
@section('menuHome','active')
@section('home')

<!-- Layanan Kami -->
<div class="section section-components pb-0" id="section-components">
    <div class="container">
      <div class="row justify-content-center">
    <h3 class="h4 text-default font-weight-bold mb-4">Layanan Kami</h3>
        </div>
</div>
    <div class="row justify-content-center">
        <button type="button" class="btn btn-link text-secondary btn-icon">
            <span class="btn-inner--icon">
                <i class="ni ni-diamond"></i>
            </span>
            <span class="nav-link-inner--text">Cleaning Service</span>
        </button>
        <button type="button" class="btn btn-link text-secondary btn-icon">
            <span class="btn-inner--icon">
                <i class="ni ni-tv-2"></i>
            </span>
            <span class="nav-link-inner--text">Electronic Service</span>
        </button>
        <button type="button" class="btn btn-link text-secondary btn-icon">
            <span class="btn-inner--icon">
                <i class="ni ni-building"></i>
            </span>
            <span class="nav-link-inner--text">Builder</span>
        </button>
        <button type="button" class="btn btn-link text-secondary btn-icon">
            <span class="btn-inner--icon">
                <i class="ni ni-settings"></i>
            </span>
            <span class="nav-link-inner--text">Mechanical</span>
        </button>
        <button type="button" class="btn btn-link text-secondary btn-icon">
            <span class="btn-inner--icon">
                <i class="ni ni-vector"></i>
            </span>
            <span class="nav-link-inner--text">Delivery Services</span>
        </button>
    </div>
</div>
<br>
<br>
<br>
<br>

<!-- Mengapa Layanan Kami -->
<div class="sectio-carousel" style="background-image: url('assets/img/ill/1.svg');">
    <div class="container py-md">
      <div class="row justify-content-between align-items-center">
        <div class="col-lg-6 mb-lg-auto">
          <div class="rounded overflow-hidden transform-perspective-left">
            <div id="Mengapa memilih kami" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carousel_example" data-slide-to="0" class="active"></li>
                <li data-target="#carousel_example" data-slide-to="1" class="active"></li>
                <li data-target="#carousel_example" data-slide-to="2" class="active"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="img-fluid" src="{{asset('assets/img/theme/tukang3.jpg')}}" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="img-fluid" src="{{asset('assets/img/theme/tukang2.jpg')}}" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="img-fluid" src="{{asset('assets/img/theme/tukang1.jpg')}}" alt="Third slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carousel_example" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carousel_example" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-5 mb-5 mb-lg-0">
          <h1 class="font-weight-light">Mengapa memilih layanan kami</h1>
          <p class="lead mt-4">
            <p><ul>
              <li><b>Teknisi terlatih siap melayani anda kapanpun</b></li>
              <div>Tukang TKJ terlatih teknis dan berkualitas, serta sudah memmpunyai sertifikasi kerja dan keahlian.</div>
              <li><b>Harga sesuai pelanggan dengan garansi produk untuk elektronik</b></li>
              <div>Semua servis kami mempunyai harga yang disesuaikan dan disertakan dengan garansi produk untuk service elektronik.</div>
              <li><b>Menerima uang tunai atau transfer dengan aman</b></li>
              <div>TKJ menerima pembayaran tunai dan transfer. Nikmati pelayanan pembayaran yang aman, terjamin, dan real-time.</div>
          </ul></p>
          <a href="#" class="btn btn-white mt-4">Pesan layanan Kami Sekarang</a>
        </div>
      </div>
    </div>
  </div>
<br>
<br>
<br>
<br>
<br>
<br>

<!-- Footer -->
<footer class="footer">
    <footer class="footer has-cards">
        <div class="container">
          <div class="row row-grid align-items-center">
            <div class="col-lg-6">
                <img src="{{asset('assets/img/brand/tkjlogo3.png')}}" alt="" width="240px" height="78px">
              <h4 class="mb-0 font-weight-light">Bersama Tukang Membangun Negeri</h4>
            </div>
            <div class="col-lg-6 text-lg-center btn-wrapper">
              <button target="_blank" href="#" rel="nofollow" class="btn btn-icon-only btn-twitter rounded-circle" data-toggle="tooltip" data-original-title="Follow us">
                <span class="btn-inner--icon"><i class="fa fa-twitter"></i></span>
              </button>
              <button target="_blank" href="#" rel="nofollow" class="btn-icon-only rounded-circle btn btn-facebook" data-toggle="tooltip" data-original-title="Like us">
                <span class="btn-inner--icon"><i class="fab fa-facebook"></i></span>
              </button>
              <button target="_blank" href="#" rel="nofollow" class="btn btn-icon-only btn-dribbble rounded-circle" data-toggle="tooltip" data-original-title="Follow us">
                <span class="btn-inner--icon"><i class="fa fa-dribbble"></i></span>
              </button>
              <button target="_blank" href="#" rel="nofollow" class="btn btn-icon-only btn-github rounded-circle" data-toggle="tooltip" data-original-title="Star on Github">
                <span class="btn-inner--icon"><i class="fa fa-github"></i></span>
              </button>
            </div>
          </div>
          <hr>
          <div class="row align-items-center justify-content-md-between">
            <div class="col-md-6">
              <div class="copyright">
                &copy; 2021 <a href="" target="_blank">Tim TKJ</a>.
              </div>
            </div>
            <div class="col-md-6">
              <ul class="nav nav-footer justify-content-end">
                <li class="nav-item">
                  <a href="" class="nav-link" target="_blank">Tim TKJ</a>
                </li>
                <li class="nav-item">
                  <a href="" class="nav-link" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="" class="nav-link" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="" class="nav-link" target="_blank">License</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
      </div>

@endsection
