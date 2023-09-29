@extends('layouts.base_login')
@section('title','Daftar || Tempatnya Kuli Jawa')
@section('menuRegister','active')

@section('log')
<div class="wrapper">
    <section class="section section-shaped section-lg">
      <div class="shape shape-style-1 bg-gradient-success">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
      @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
      @endif
      <div class="container pt-lg-2">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="card bg-secondary shadow border-0">
              <div class="card-header bg-white pb-5">
                <div class="text-muted text-center"><h5 class="display-4">Form Pendaftaran Tukang</h5></div>
              </div>
              <div class="card-body px-lg-5 py-lg-5">
                <div class="text-center text-muted mb-4">
                </div>
                <form method="post" action="{{ route('formtukang') }}" autocomplete="off" enctype="multipart/form-data">
                    @csrf
                  <div class="form-group">
                    <div class="input-group input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                      </div>
                      <input class="form-control @error('nik') is-invalid @enderror" name="nik" value="{{ old('nik') }}" required autocomplete="nik" autofocus placeholder="Nomor Induk Kewarganegaraan" type="text">
                      @error('nik')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                     @enderror
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group input-group-alternative mb-3">
                        <span class="input-group-text"><i class="ni ni-settings"></i></span>
                    <select class="form-control @error('keahlian') is-invalid @enderror" name="keahlian" value="{{ old('keahlian') }}" required>
                        <option selected>Pilih Keahlian Anda</option>
                        <option value="Cleaning Services">Cleaning Services</option>
                        <option value="Electronic Services">Electronic Services</option>
                        <option value="Builder">Builder</option>
                        <option value="Mechanic">Mechanic</option>
                        <option value="Delivery Services">Delivery Services</option>
                    </select>
                    @error('keahlian')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>
                    <div class="form-group">
                        <div class="input-group input-group-alternative mb-3">
                            <span class="input-group-text"><i class="ni ni-single-02"></i>&ensp; Foto KTP&ensp;</span>
                            <input type="file" class="form-control @error('ktp') is-invalid @enderror" name="ktp" value="{{ old('ktp') }}" required autocomplete="ktp" autofocus id="customFile" />
                            @error('ktp')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="input-group input-group-alternative mb-3">
                            <span class="input-group-text"><i class="ni ni-single-02"></i>&ensp; Sertifikasi</span>
                            <input type="file" class="form-control" name="sertifikat" value="{{ old('sertifikat') }}" autofocus id="customFile" />
                        </div>
                      </div>
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
          </div>
        </div>
      </div>
    </section>
@endsection



