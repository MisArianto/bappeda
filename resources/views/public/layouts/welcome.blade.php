<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Artikel Laravel, Artikel PHP, Artikel VueJS, Artikel Git, Artikel Pemrograman, Artikel Koding, Artikel Membuat Web, Artikel Web Development, Training Laravel, Training PHP, Training VueJS, Training Git, Membuat Website, Menerima Pembuatan Aplikasi Web, Menerima Pembuatan Aplikasi Dekstop, Menerima Pembuatan Aplikasi Android, Menerima Pembuatan Aplikasi Mobile, Artikel PHP Murah, Penjualan Aplikasi, Konsultasi, Problem Solvet">
<meta name="author" content="Hcode">
<link rel="icon" href="{{ asset('assets/public/img/favicon.ico')}}">

<meta property="og:url" content="{{url()->full()}}">
<meta property="og:title" content="{{ $title }}" />
<meta property="og:description" content="Artikel Laravel, Artikel PHP, Artikel VueJS, Artikel Git, Artikel Pemrograman, Artikel Koding, Artikel Membuat Web, Artikel Web Development, Training Laravel, Training PHP, Training VueJS, Training Git, Membuat Website, Menerima Pembuatan Aplikasi Web, Menerima Pembuatan Aplikasi Dekstop, Menerima Pembuatan Aplikasi Android, Menerima Pembuatan Aplikasi Mobile, Artikel PHP Murah, Penjualan Aplikasi, Konsultasi, Problem Solvet" />
<meta property="og:image" content="{{ asset('assets/public/img/logo.png') }}">


<title>Bappeda - Kabupaten Kepulauan Meranti</title>

<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Fonts -->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="{{ asset('assets/public/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/public/vendor/aos/aos.css') }}" rel="stylesheet">
<link href="{{ asset('assets/public/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/public/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
<link href="{{ asset('assets/public/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/public/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/public/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
<link href="{{ asset('assets/public/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

<!-- Template Main CSS File -->
<link href="{{ asset('assets/public/css/style.css') }}" rel="stylesheet">

</head>

<body>

  @include('public.layouts.navbar')

  <main id="main">

    @yield('content')

  </main><!-- End #main -->

  @include('public.layouts.footer')

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{ asset('assets/admin/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('assets/public/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('assets/public/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/public/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('assets/public/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/public/vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('assets/public/vendor/swiper/swiper-bundle.min.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('assets/public/js/main.js') }}"></script>


@yield('script')

<script>
	$(document).ready(function(){
		$(document).on('click', '#login', function(){
			window.location.replace('/login')
		})
	})	
</script>

</body>
</html>
