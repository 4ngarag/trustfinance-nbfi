<!DOCTYPE html>
<html lang="mn">

<head>
  <meta charset="utf-8">
  <title>@yield('title')</title>
  <link href="{{ asset('src/css/bootstrap.css') }}" rel="stylesheet">
  <link href="{{ asset('src/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('src/css/responsive.css') }}" rel="stylesheet">
  <link rel="icon" href="{{ asset('src/images/favicon.png') }}" type="image/x-icon">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
  <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
  @yield('styles')
</head>
<body data-anm=".anm">
  <div class="page-wrapper">
    <div class="preloader"></div>
@include('partials.header')
@yield('content')
@include('partials.footer')
<script src="{{ asset('src/js/jquery.js') }}"></script>
<script src="{{ asset('src/js/popper.min.js') }}"></script>
<script src="{{ asset('src/js/chosen.min.js') }}"></script>
<script src="{{ asset('src/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('src/js/jquery.fancybox.js') }}"></script>
<script src="{{ asset('src/js/jquery.modal.min.js') }}"></script>
<script src="{{ asset('src/js/mmenu.polyfills.js') }}"></script>
<script src="{{ asset('src/js/mmenu.js') }}"></script>
<script src="{{ asset('src/js/appear.js') }}"></script>
<script src="{{ asset('src/js/anm.min.js') }}"></script>
<script src="{{ asset('src/js/ScrollMagic.min.js') }}"></script>
<script src="{{ asset('src/js/rellax.min.js') }}"></script>
<script src="{{ asset('src/js/owl.js') }}"></script>
<script src="{{ asset('src/js/wow.js') }}"></script>
<script src="{{ asset('src/js/script.js') }}"></script>
@yield('scripts')
</body>
</html>