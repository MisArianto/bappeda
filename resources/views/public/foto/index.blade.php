@extends('public.layouts.welcome')

@section('content')

<!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="{{ url('/') }}">Home</a></li>
          <li><a href="{{ url('foto') }}">Foto</a></li>
        </ol>
        <h2>Foto</h2>

      </div>
    </section><!-- End Breadcrumbs -->


    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-12 entries">

            <article class="entry entry-single">

              <section id="portfolio" class="portfoio">
                <div class="container" data-aos="fade-up">

                  <div class="row portfolio-container">

                    @foreach($fotos as $foto)
                    <a href="{{ asset('image_foto/'.$foto->image)}}" data-gall="portfolioGallery" class="portfolio-lightbox preview-link ml-5" title="{{ ucwords($foto->name) }}">
                      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="{{ asset('image_foto/'.$foto->image)}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                          <h4>{{ ucwords($foto->name) }}</h4>
                          <p>{{ ucwords($foto->name) }}</p>
                            
                        </div>
                      </div>
                    </a>
                    @endforeach

                  </div>

                  {{ $fotos->links() }}

                </div>

              </section><!-- End Portfoio Section -->

              
            </article><!-- End blog entry -->

          </div><!-- End blog entries list -->

        </div>

      </div>
    </section><!-- End Blog Single Section -->
	

	
@endsection
