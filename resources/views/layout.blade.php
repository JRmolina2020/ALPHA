<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Laravel</title>
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/alt/icheck-bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/alt/ionicons.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/alt/fontawesome.min.css') }}">
</head>
<body  class="hold-transition sidebar-mini">
<div id="app" class="wrapper">
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
<ul class="navbar-nav">
  <li class="nav-item">
    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
  </li>
</ul>
</nav>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
<a href="index3.html" class="brand-link">
  <img src="{{asset('/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
        style="opacity: .8">
  <span class="brand-text font-weight-light">ALPHA</span>
</a>
<div class="sidebar">
  <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
      <img src="{{asset('/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
    </div>
    <div class="info">
      <a href="#" class="d-block">Alexander Pierce</a>
    </div>
  </div>
  {{--  navegation  --}}
  @include('navegation')
  {{--  end  --}}
</div>
</aside>
<div class="content-wrapper">
<div class="content-header">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">@yield('titlepanel')</h3>
          </div>
          <div class="card-body">
          @yield('contenido')
          </div>
          <div class="card-footer">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
@include('footer')