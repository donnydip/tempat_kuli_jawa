<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/img/apple-icon.png')}}">
        <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}">
        <title>@yield('title','Tempatnya Kuli Jawa')</title>

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link rel="stylesheet" href="{{asset('assets/css/nucleo-icons.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/nucleo-svg.css')}}">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('assets/css/font-awesome.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/nucleo-svg.css')}}">
  <!-- CSS Files -->
  <link rel="stylesheet" href="{{asset('assets/css/argon-design-system.min.css?v=1.2.2')}}">
    </head>
   <body class="login-page">
    @yield('log')
  </body>
  </html>
