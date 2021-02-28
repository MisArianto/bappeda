<!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row text-center">
          <h4>Aplikasi</h4>

          @foreach(\App\Models\Aplikasi::get() as $app)
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
              <div class="card" style="width: 18rem;">
                <div class="icon text-primary">
                  <img src="{{ asset('image_aplikasi/'.$app->image) }}" class="img-fluid w-50 mt-3" alt="{{ $app->name }}">
                  {{-- <i class="bx bx-globe mt-5" style="font-size: 100px;"></i> --}}
                </div>
                <div class="card-body">
                  <h4 class="title text-center"><a href="{{ $app->url }}" target="_blank">{{ $app->name }}</a></h4>
                </div>
              </div>
            </div>
            @endforeach

            {{-- <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
              <div class="card" style="width: 18rem;">
                <div class="icon text-primary"><i class="bx bx-globe mt-5" style="font-size: 100px;"></i></div>
                <div class="card-body">
                  <h4 class="title text-center"><a href="http://sipd.merantikab.go.id/e-data/">E-Data</a></h4>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
              <div class="card" style="width: 18rem;">
                <div class="icon text-primary"><i class="bx bx-globe mt-5" style="font-size: 100px;"></i></div>
                <div class="card-body">
                  <h4 class="title text-center"><a href="http://e-sakip.merantikab.go.id/">E-Sakip</a></h4>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
              <div class="card" style="width: 18rem;">
                <div class="icon text-primary"><i class="bx bx-globe mt-5" style="font-size: 100px;"></i></div>
                <div class="card-body">
                  <h4 class="title text-center"><a href="http://tkpk.four-e.com/">E-TKPK</a></h4>
                </div>
              </div>
            </div> --}}
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Menu</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Profile</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Berita</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Galeri</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Dokumen Publik</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Layanan Informasi</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Kontak Kami</h4>
            <p>
              {{ PengaturanHelp::setting()->contact->alamat }} 
              <br>
              <strong>Phone:</strong> {{ PengaturanHelp::setting()->header->hp }}<br>
              <strong>Email:</strong> {{ PengaturanHelp::setting()->header->email }}<br>
            </p>

          </div>

          <div class="col-lg-6 col-md-6 footer-info">
            <h3>TENTANG BAPPEDA</h3>
            <p>{{ PengaturanHelp::setting()->footer->keterangan }}</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span><a href="#">{{ PengaturanHelp::setting()->footer->footer_name }}</a></span></strong>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/anyar-free-multipurpose-one-page-bootstrap-theme/ -->
        {{-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> --}}
        {{ date('Y') }}
      </div>
    </div>
  </footer><!-- End Footer -->
