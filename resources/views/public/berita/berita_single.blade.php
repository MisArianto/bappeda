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

            <article class="entry entry-single">

              <div class="entry-img">
                <img src="{{ asset('image_posts/'.$post->image) }}" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="blog-single.html">{{ ucwords($post->judul) }}</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html">{{date('d F Y', strtotime($post->created_at))}}</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-eye"></i> {{ $post->eye }}</li>
                </ul>
              </div>

              <div class="entry-content">
                {!! $post->content !!}
              </div>

              <div class="entry-footer">
                <i class="bi bi-folder"></i>
                <ul class="cats">
                  <li><a href="#">{{ $post->category->category_name }}</a></li>
                </ul>

                @if($post->tag != '')
                <i class="bi bi-tags"></i>
                <ul class="tags">
                  @foreach(json_decode($post->tag) as $t)
                  <li><a href="#">{{ $t }}</a></li>
                  @endforeach
                </ul>
                @endif
              </div>

            </article><!-- End blog entry -->

          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            @include('public.layouts.sidebar_page')

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Single Section -->
	


	
@endsection
