@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 style="color: black">{{ __('Verifikasi Email Anda') }}</h5>
                </div>
                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Link Verifikasi Baru Telah Dikirim Ke Email Anda') }}
                        </div>
                    @endif

                    {{ __('Sebelum mengakses Web TKJ, Cek email anda untuk link verifikasi') }}
                    {{ __('Jika anda tidak menerima email, cek folder spam anda atau') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-primary btn-sm">{{ __('klik disini untuk mengirim ulang verifikasi') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
