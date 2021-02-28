@extends('public.layouts.welcome')

@section('content')

<!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="{{ url('/') }}">Home</a></li>
          <li><a href="{{ url('struktur-organisasi') }}">Struktur Organisasi</a></li>
        </ol>
        <h2>Struktur Organisasi</h2>

      </div>
    </section><!-- End Breadcrumbs -->


    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry entry-single">

              {!! $model->content !!}

              {{-- <p class="text-info text-center"><strong>BADAN PERENCANAAN PEMBANGUNAN DAERAH PROVINSI DKI JAKARTA</strong></p>

              <img src="{{ asset('image_posts/struktur1.jpg') }}" alt="" class="img-fluid mb-5">

              <p class="text-info text-center"><strong>Unit Pengelola Data dan Informasi Perencanaan Pembangunan</strong></p>
             
              <img src="{{ asset('image_posts/struktur2.jpg') }}" alt="" class="img-fluid"> --}}

              
            </article><!-- End blog entry -->

          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            @include('public.layouts.sidebar_page')

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Single Section -->
	

	
@endsection
