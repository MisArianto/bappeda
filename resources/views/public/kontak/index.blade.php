@extends('public.layouts.welcome')

@section('content')

<!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="{{ url('/') }}">Home</a></li>
          <li><a href="{{ url('kontak') }}">Kontak Kami</a></li>
        </ol>
        <h2>Mekanisme layanan informasi publik</h2>

      </div>
    </section><!-- End Breadcrumbs -->


    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry entry-single">

              <strong>Badan Perencanaan Pembangunan Daerah</strong>

              <p>Pemerintah Provinsi DKI Jakarta</p>

              <p>sekretariat.bappeda@jakarta.go.id</p>
              <p>Gedung Balaikota Lantai 2</p>
              <p>Jl. Merdeka Selatan 8-9 Blok G</p>
              <p>Jakarta Pusat – Indonesia</p>
              <p>Telp: (021) 382-2261</p>

              <img src="{{ asset('image_posts/informasi_grafis_ppid.jpg') }}" alt="" class="img-fluid mb-5">

              
            </article><!-- End blog entry -->

          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            @include('public.layouts.sidebar_page')

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Single Section -->
	

	
@endsection
