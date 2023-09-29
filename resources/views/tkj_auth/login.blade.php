@extends('layouts.base_login')
@section('title','Masuk || Tempatnya Kuli Jawa')
@section('menuLogin','active')

@section('log')
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
              <div class="text-muted text-center mb-3"><small>Sign in with</small></div>
              <div class="btn-wrapper text-center">
                <a href="#" class="btn btn-neutral btn-icon">
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
                <small>Or sign in with credentials</small>
              </div>
              <form action="{{ ('login') }}" role="form" method="POST">
                  @csrf
                <div class="form-group mb-3">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email" autofocus>
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
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"  placeholder="Password"  required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                </div>
                <div class="custom-control custom-control-alternative custom-checkbox">
                  <input class="custom-control-input" id="remember" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                  <label class="custom-control-label" for="remember"><span>Remember me</span></label>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary my-4">Sign in</button>
                </div>
              </form>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-6">
              <a href="{{ route('password.request') }}" class="text-light"><small>Forgot password?</small></a>
            </div>
            <div class="col-6 text-right">
              <a href="{{ route('register') }}" class="text-light"><small>Create new account</small></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endsection
