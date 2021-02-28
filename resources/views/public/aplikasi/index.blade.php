@extends('public.layouts.welcome')

@section('content')

<!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="{{ url('/') }}">Home</a></li>
          <li><a href="{{ url('aplikasi') }}">Aplikasi</a></li>
        </ol>
        <h2>Aplikasi</h2>

      </div>
    </section><!-- End Breadcrumbs -->


    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row text-center">

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
              <div class="card" style="width: 18rem;">
                <div class="icon"><i class="bx bx-globe mt-5" style="font-size: 100px;"></i></div>
                <div class="card-body">
                  <h4 class="title text-center"><a href="http://sipd.merantikab.go.id/e-planning/">E-Planning</a></h4>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
              <div class="card" style="width: 18rem;">
                <div class="icon"><i class="bx bx-globe mt-5" style="font-size: 100px;"></i></div>
                <div class="card-body">
                  <h4 class="title text-center"><a href="http://sipd.merantikab.go.id/e-data/">E-Data</a></h4>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
              <div class="card" style="width: 18rem;">
                <div class="icon"><i class="bx bx-globe mt-5" style="font-size: 100px;"></i></div>
                <div class="card-body">
                  <h4 class="title text-center"><a href="http://e-sakip.merantikab.go.id/">E-Sakip</a></h4>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
              <div class="card" style="width: 18rem;">
                <div class="icon"><i class="bx bx-globe mt-5" style="font-size: 100px;"></i></div>
                <div class="card-body">
                  <h4 class="title text-center"><a href="http://tkpk.four-e.com/">E-TKPK</a></h4>
                </div>
              </div>
            </div>

        </div>

      </div>
    </section><!-- End Blog Single Section -->
	

	
@endsection
