<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('page_title', 'Kayat Engineers')</title>
  <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ url('assets/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ url('assets/css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ url('assets/css/animate.css') }}">
  <link rel="stylesheet" href="{{ url('assets/css/custom.css') }}">

  <!--favicon-->
  <link rel="icon" type="image/png" sizes="32x32" href="{{ url('assets/img/favicon.png') }}">
</head>
<body>
<!-- start header area -->
  <div class="header-area">
    <div class="container">
      <div class="row">
        <div class="header">
          <div class="col-md-3">
            <div class="ke-logo">
              <a href="{{ route('home') }}"><img src="{{ url('assets/img/logo.png') }}" alt=""></a>
            </div>
          </div>
          <div class="col-md-8 col-md-offset-1">
            <div class="ke-mainmenu">
              <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('service') }}">Services</a></li>
                <li><a href="{{ route('home') }}">Project</a></li>
                <li><a href="{{ route('home') }}">Career</a></li>
                <li><a href="{{ route('home') }}">Gallery</a></li>
                <li><a href="{{ route('home') }}">Contact</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end header area -->
