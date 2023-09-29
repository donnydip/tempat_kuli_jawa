@extends('layouts.base_login')
@section('title','Daftar || Tempatnya Kuli Jawa')
@section('menuRegister','active')

@section('log')
<div class="wrapper">
    <section class="section section-shaped section-lg">
      <div class="shape shape-style-1 bg-gradient-default">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
      <div class="text-center">
        <a href="/">
        <img src="{{asset('assets/img/brand/tkjlogo4.png')}} " width="200">
        </a>
    </div>
      <div class="container pt-lg-2">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="card bg-secondary shadow border-0">
              <div class="card-header bg-white pb-5">
                <div class="text-muted text-center mb-3"><small>Sign up with</small></div>
                <div class="text-center">
                  <a href="#" class="btn btn-neutral btn-icon mr-4">
                    <span class="btn-inner--icon"><img src="{{asset('assets/img/icons/common/fb.svg')}}"></span>
                    <span class="btn-inner--text">Facebook</span>
                  </a>
                  <a href="#" class="btn btn-neutral btn-icon">
                    <span class="btn-inner--icon"><img src="{{asset('assets/img/icons/common/google.svg')}}"></span>
                    <span class="btn-inner--text">Google</span>
                  </a>
                </div>
              </div>
              <div class="card-body px-lg-5 py-lg-5">
                <div class="text-center text-muted mb-4">
                  <small>Or sign up with credentials</small>
                </div>
                <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                    @csrf
                  <div class="form-group">
                    <div class="input-group input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                      </div>
                      <input class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name" type="text">
                      @error('name')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                     @enderror
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-building"></i></span>
                      </div>
                      <input class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" required autocomplete="alamat" placeholder="Alamat" type="text">
                      @error('alamat')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-badge"></i></span>
                      </div>
                      <input class="form-control @error('handphone') is-invalid @enderror" name="handphone" value="{{ old('handphone') }}" required autocomplete="handphone" autofocus placeholder="Nomer Handphone" type="text">
                      @error('handphone')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group input-group-alternative mb-3">
                        <span class="input-group-text"><i class="ni ni-single-02"></i>&ensp; Foto Diri&ensp;</span>
                        <input type="file" class="form-control @error('foto') is-invalid @enderror" name="foto" value="{{ old('foto') }}" required autocomplete="foto" autofocus id="customFile" />
                        @error('foto')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                      </div>
                      <input class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email" type="email">
                      @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>
                  </div>
                  <div class="form-group focused">
                    <div class="input-group input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                      </div>
                      <input class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password" type="password">
                      @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>
                  </div>
                  <div class="form-group focused">
                    <div class="input-group input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                      </div>
                      <input class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Your Password" type="password">
                    </div>
                  </div>
                  <div class="text-muted font-italic"><small>password strength: <span class="text-success font-weight-700">strong</span></small></div>
                  <div class="row my-4">
                    <div class="col-12">
                      <div class="custom-control custom-control-alternative custom-checkbox" required>
                        <input class="custom-control-input" id="customCheckRegister" type="checkbox">
                        <label class="custom-control-label" for="customCheckRegister"><span>I agree with the <a href="#">Privacy Policy</a></span></label>
                      </div>
                    </div>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary mt-4">Create account</button>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-20 text-right">
                <a href="{{ route('login') }}" class="text-light"><small>Already have an account? Sign in</small></a>
              </div>
          </div>
        </div>
      </div>
    </section>
@endsection
