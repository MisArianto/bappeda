  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="fixed-top d-flex align-items-center topbar-inner-pages">
    <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">{{ PengaturanHelp::setting()->header->email }}</a>
        <i class="bi bi-phone-fill phone-icon"></i> {{ PengaturanHelp::setting()->header->hp }}
      </div>
      <div class="cta d-none d-md-block">
        <a href="{{ url('login') }}" class="scrollto">Login</a>
      </div>
    </div>
  </div>
 <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-inner-pages">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="{{ url('/') }}">
      	<img src="{{ asset('storage/pengaturan/'. PengaturanHelp::setting()->header->logo) }}" class="img-fluid" alt="Logo">
      </a></h1>
		
		<nav id="navbar" class="navbar">
			<ul>
			  <li><a class="nav-link scrollto {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a></li>
			  <li class="dropdown"><a href="#"><span>Profile</span> <i class="bi bi-chevron-down"></i></a>
			    <ul>
			      <li><a href="{{ url('visi-misi') }}">Visi dan Misi</a></li>
			      <li><a href="{{ url('tugas-pokok-fungsi') }}">Tugas Pokok dan Fungsi</a></li>
			      <li><a href="{{ url('struktur-organisasi') }}">Struktur Organisasi</a></li>
			    </ul>
			  </li>
			  <li><a class="nav-link scrollto {{ Request::is('dokumen-publik') ? 'active' : '' }}" href="{{ url('dokumen-publik') }}">Dokumen Publik</a></li>
			  <li class="dropdown"><a href="#"><span>Galeri</span> <i class="bi bi-chevron-down"></i></a>
			    <ul>
			      <li><a href="{{ url('foto') }}">Galeri Foto</a></li>
			      <li><a href="{{ url('galeri-video') }}">Galeri Video</a></li>
			    </ul>
			  </li>
			  <li><a class="nav-link scrollto {{ Request::is('berita') ? 'active' : '' }}" href="{{ url('berita') }}">Berita</a></li>
			  <li class="dropdown"><a href="#"><span>Layanan Informasi</span> <i class="bi bi-chevron-down"></i></a>
			    <ul>
			      <li><a href="{{ url('kontak') }}">Kontak Kami</a></li>
			      <li><a href="{{ url('aplikasi') }}">Aplikasi</a></li>
			    </ul>
			  </li>
			</ul>
			<i class="bi bi-list mobile-nav-toggle"></i>
		</nav><!-- .navbar -->
	</div>
  </header><!-- End Header -->
