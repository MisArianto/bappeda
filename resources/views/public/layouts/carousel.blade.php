{{--   <section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

      @foreach($slides as $key => $value)
      <div class="carousel-item @if($key == 0) active @endif">
        <div class="carousel-container">
          <p class="animate__animated animate__fadeInRight">
            <img src="{{ asset('storage/slide/'.$value->slide) }}" class="img-fluid w-100" alt="{{ $value->name }}">
          </p>
        </div>
      </div>
      @endforeach

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section>
 --}}

 <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
     @foreach($slides as $key => $value)
        @if($key == 0)
       <div class="carousel-item active">
        @else
       <div class="carousel-item">
        @endif
        {{-- <div class="carousel-container"> --}}
          <p class="animate__animated animate__fadeInRight">
            <img class="d-block w-100" src="{{ asset('storage/slide/'.$value->slide) }}" alt="First slide">
          </p>
      {{-- </div> --}}
      </div>
    @endforeach
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
