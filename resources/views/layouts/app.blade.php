<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
  
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
   
   
    <meta property="og:title" content="">
    <meta property="og:image" content="">
    <meta property="og:url" content="">
   <meta property="og:site_name" content="">
    <meta property="og:description" content="">

  <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
   <meta name="twitter:card" content="summary">
   <meta name="twitter:site" content="">
   <meta name="twitter:title" content="">
   <meta name="twitter:description" content="">
   <meta name="twitter:image" content="">

  <!-- Place your favicon.ico and apple-touch-icon.png in the template root directory -->
  <link href="favicon.ico" rel="shortcut icon">
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">
  <!-- Bootstrap -->

  <link rel="stylesheet" href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}">

  <link rel="stylesheet" href="{{asset('lib/font-awesome/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('lib/animate-css/animate.min.css')}}">

  <link rel="stylesheet" href="{{asset('lib/css/style.css')}}">    
</head>

<body>
  <main>  
  @include('layouts._partials.menu')  

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- Required JavaScript Libraries -->
  <script src="{{asset('lib/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('lib/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('lib/superfish/hoverIntent.js')}}"></script>
  <script src="{{asset('lib/superfish/superfish.min.js')}}"></script>
  <script src="{{asset('lib/morphext/morphext.min.js')}}"></script>
  <script src="{{asset('lib/wow/wow.min.js')}}"></script>
  <script src="{{asset('lib/stickyjs/sticky.js')}}"></script>
  <script src="{{asset('lib/easing/easing.js')}}"></script>

  <!-- Template Specisifc Custom Javascript File -->
  <script src="{{asset('lib/js/custom.js')}}"></script>

  <script src="{{asset('lib/contactform/contactform.js')}}"></script>

  @yield('content')
  </main>
  

  
  
</body>
</html>