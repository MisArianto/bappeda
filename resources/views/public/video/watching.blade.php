@extends('public.layouts.welcome')

@section('content')

<!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="{{ url('/') }}">Home</a></li>
          <li><a href="{{ url('video') }}">Video</a></li>
        </ol>
        <h2>Video</h2>

      </div>
    </section><!-- End Breadcrumbs -->


    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <div class="row">

              <div class="col-md-12">
                  <h5 class="entry-title text-center">{{ ucwords($model->name) }}</h5>
                  <video width="100%" height="auto" controls>
                    <source src="{{ asset('storage/video/'.$model->video) }}" type="video/mp4">
                  Your browser does not support the video tag.
                  </video>
              </div>

            </div>
          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            @include('public.layouts.sidebar_page')

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Single Section -->
	
@endsection
