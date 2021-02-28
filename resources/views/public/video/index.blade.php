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

              @foreach($videos as $v)

              <div class="col-md-6">
                <div class="card">
                  <video autoplay loop muted playsinline>
                    <source src="{{ asset('storage/video/'.$v->video) }}" type="video/mp4">
                  Your browser does not support the video tag.
                  </video>
                  <div class="card-body">
                    <h5 class="entry-title"><a href="{{ url('watching-video',$v->slug) }}">{{ ucwords($v->name) }}</a></h5>
                  </div>
                </div>
              </div>
              @endforeach

              {{ $videos->links() }}




            </div>
          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            @include('public.layouts.sidebar_page')

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Single Section -->
	
@endsection
