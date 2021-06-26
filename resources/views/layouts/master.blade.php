<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>@yield('title'){{config('app.name')}} </title>
 
  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
 
  <!-- CSS Libraries -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
 
 
  <!-- Template CSS -->
  <link rel="stylesheet" href={{asset("assets/css/style.css")}}>
  <link rel="stylesheet" href={{asset("assets/css/components.css")}}>
</head>
 
@stack('page-styles')
<!-- Start Ga -->
<script>async src="https://www.googletagmanager.com/gtag/js?id=UA-94034662-3"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    functional gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
 
    gtag('config', 'UA-94034662-3');
</script>
<!-- /End Ga --></head>
<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <!-- titik atau / sama ajah ya -->
      @include('layouts.header')
      @include('layouts.sidebar')
      
      <!-- Main Content -->
      <div class="main-content">
      <div class="section-header">
        <section class="section">
        
            @yield('content') 
        
        </section>
        </div>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
         SIMPRO &copy; 2021 <div class="bullet"></div> Design By <a href="https://nauval.in/">Leni Cahyani  & Novica Ogidia Bella</a>
        </div>
        <div class="footer-right">
 
        </div>
      </footer>
    </div>
  </div>
 
  @stack('before-scripts')
  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src={{asset("assets/js/stisla.js")}}></script>
  <!-- <script src="../assets/js/stisla.js"></script> -->
 
  <!-- JS Libraies -->
  @stack('page-scripts')
 
  <!-- Page Specific JS File -->
 
  <!-- Template JS File -->
  <script src="{{asset("assets/js/scripts.js")}}></script>
  <script src="{{asset("assets/js/custom.js")}}></script>
  <!-- <script src="../assets/js/scripts.js"></script>
  <script src="../assets/js/custom.js"></script> -->
 
 
  <!-- untuk menanpung sript halaman tertentu saja biar tidak berat-->
  @stack('after-scripts')
</body>
</html>
 
 
