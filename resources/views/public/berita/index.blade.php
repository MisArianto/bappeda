@extends('public.layouts.welcome')

@section('content')

<!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="{{ url('/') }}">Home</a></li>
          <li><a href="{{ url('berita') }}">Berita</a></li>
        </ol>
        <h2>Berita</h2>

      </div>
    </section><!-- End Breadcrumbs -->


    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <div class="row">

              @foreach($posts as $post)
              <div class="col-md-6">
                <article class="entry">

                  <div class="entry-img">
                    <img src="{{ asset('image_posts/'.$post->image) }}" alt="{{ $post->image }}" class="img-fluid">
                  </div>

                  <h5 class="entry-title">
                    <a href="{{ url('berita', $post->slug) }}" title="{{ ucwords($post->judul) }}">{{ Str::limit(ucwords($post->judul), 30, '...') }}</a>
                  </h5>

                  <div class="entry-meta">
                    <ul>
                      <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html">{{ date('d F Y', strtotime($post->created_at)) }}</a></li>
                      <li class="d-flex align-items-center"><i class="bi bi-eye"></i> <a href="blog-single.html">{{ $post->eye }} X</a></li>
                    </ul>
                  </div>

                  <div class="entry-content">
                    <p>
                      {!! Str::limit(ucwords($post->content), 100, '...') !!}
                    </p>
                    <div class="read-more">
                      <a href="{{ url('berita', $post->slug) }}">Baca Selengkapny</a>
                    </div>
                  </div>

                </article><!-- End blog entry -->
              </div>
              @endforeach

              {{ $posts->links() }}




            </div>
          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            @include('public.layouts.sidebar_page')

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Single Section -->
	
@endsection
