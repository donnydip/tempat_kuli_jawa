@extends('layouts.user')
@section('title','Selamat datang')
@section('menuUserHome','active')
@section('userhome')

<!-- Card profile -->
<div class="container">
    <div class="row justify-content-center">
  <h1 class="h4 text-default font-weight-bold mb-4">TUKANG KAMI</h1>
      </div>
</div>
<div class="container">
    <div class="row">

@foreach ($show as $shw)
<form action="{{ route('getTukang') }}" method="post">
    @csrf
    <div class="col-md-4">
    <div class="card mb-3" style="width:300px">
      <img class="card-img-top" src="{{asset('/storage/foto/'.$shw->id.'/'.$shw->foto)}}" alt="Card image">
      <div class="card-body">
        <p class="card-text">Nama : {{ $shw->name }} </p>
        <p class="card-text">Lokasi : {{ $shw->alamat }}</p>
        <p class="card-text">Keahlian : {{ $shw->keahlian }}</p>
        <input type="hidden" value="{{$shw->id}}" name="tukang_id">
        <input type="submit" class="btn btn-primary" value="Pilih Tukang">
      </div>
    </div>
    <br>
  </div>
</form>
@endforeach
</div>
</div>
<!-- footer -->
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
