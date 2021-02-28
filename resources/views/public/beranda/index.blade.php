@extends('public.layouts.welcome')

@section('content')

  @include('public.layouts.carousel')
  
	
	<!-- ======= Icon Boxes Section ======= -->
    <section id="icon-boxes" class="icon-boxes mt-5">
      <div class="container">

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            <div class="card" style="width: 18rem;">
              <div class="icon"><i class="bx bx-tachometer mt-5" style="font-size: 100px;"></i></div>
              <div class="card-body">
                <h4 class="title text-center"><a href="{{ url('/') }}">Dashboard</a></h4>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            <div class="card" style="width: 18rem;">
              <div class="icon"><i class="bx bx-file mt-5" style="font-size: 100px;"></i></div>
              <div class="card-body">
                <h4 class="title text-center"><a href="{{ url('dokumen-publik') }}">Dokumen</a></h4>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            <div class="card" style="width: 18rem;">
              <div class="icon"><i class="bx bx-bar-chart mt-5" style="font-size: 100px;"></i></div>
              <div class="card-body">
                <h4 class="title text-center"><a href="{{ url('dokumen-publik') }}">Statistik</a></h4>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            <div class="card" style="width: 18rem;">
              <div class="icon"><i class="bx bx-layer mt-5" style="font-size: 100px;"></i></div>
              <div class="card-body">
                <h4 class="title text-center"><a href="{{ url('kontak') }}">Layanan Informasi</a></h4>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Icon Boxes Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container-fluid">

        <div class="row">

          <div class="col-lg-5 align-items-stretch position-relative video-box" style='background-image: url({{ asset('storage/video/'. PengaturanHelp::setting()->content->img_video)  }});' data-aos="fade-right">
            <a href="{{ PengaturanHelp::setting()->content->video }}" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          {{-- <div class="col-lg-5 d-flex flex-column float-right" data-aos="fade-left">
            <video width="100%" height="auto" controls>
              <source src="{{ asset('storage/video/'.$model->video) }}" type="video/mp4">
            Your browser does not support the video tag.
            </video>
          </div> --}}

          <div class="col-lg-7 d-flex flex-column" data-aos="fade-left">

            <div class="content">
              <h3><strong>{{ ucwords(PengaturanHelp::setting()->content->judul) }}</strong></h3>
              <p>
                {{ PengaturanHelp::setting()->content->keterangan }}
              </p>
              <a href="{{ url('galeri-video') }}" class="btn btn-warning">
                Galeri Video
                <i class="bx bx-right-arrow-alt"></i>
              </a>
            </div>

            {{-- <div class="accordion-list">
              <ul>
                <li data-aos="fade-up" data-aos-delay="100">
                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span> Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                    <p>
                      Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                    </p>
                  </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="200">
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                    </p>
                  </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="300">
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span> Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                    </p>
                  </div>
                </li>

              </ul>
            </div> --}}

          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Berita</h2>
        </div>

        <div class="row">

          @foreach($posts as $post)
          <div class="col-lg-6 mt-3" data-aos="fade-up" data-aos-delay="100">
            <div class="member d-flex align-items-start">
              <div><img src="{{ asset('image_posts/'.$post->image) }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4 title="{{ $post->judul }}"><a href="{{ url('berita', $post->slug) }}">{{ Str::limit(ucwords($post->judul), 30, '...') }}</a></h4>
                <p>{!! Str::limit(ucwords($post->content), 100, '...') !!}</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>
          @endforeach

        </div>

        <div class="row mt-5">
          <div class="col-md-12 text-center">
            <a href="{{ url('berita') }}" class="btn btn-warning">Selengkapnya <i class="bx bx-right-arrow-alt"></i></a>
          </div>
        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Kontak Kami</h2>
        </div>

        <div class="row mt-1 d-flex justify-content-end" data-aos="fade-right" data-aos-delay="100">

          <div class="col-lg-5">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Alamat:</h4>
                <p>{{ PengaturanHelp::setting()->contact->alamat }}</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>{{ PengaturanHelp::setting()->header->email }}</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>{{ PengaturanHelp::setting()->header->hp }}</p>
              </div>

            </div>

          </div>

          <div class="col-lg-6 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="100">

            @if ($message = Session::get('success'))
              <div class="alert alert-success alert-block">
                <strong>{{ $message }}</strong>
              </div>
            @endif
            @if ($message = Session::get('danger'))
              <div class="alert alert-danger alert-block">
                <strong>{{ $message }}</strong>
              </div>
            @endif
            <br>

            <form action="{{ url('message-store') }}" method="POST">
              @csrf
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              {{-- <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div> --}}
              <div class="text-center mt-3">
                <button class="btn btn-warning">Send Message</button>
              </div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
	
@endsection
