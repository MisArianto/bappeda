@extends('public.layouts.welcome')

@section('content')

<!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="{{ url('/') }}">Home</a></li>
          <li><a href="{{ url('visi-misi') }}">Visi dan Misi</a></li>
        </ol>
        <h2>Visi Misi</h2>

      </div>
    </section><!-- End Breadcrumbs -->


    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry entry-single">

              {!! $model->content !!}

              {{-- <p><strong>VISI</strong></p>
              <div><strong>“Menjadi&nbsp; Lembaga Perencanaan yang Memiliki Integritas dan Profesionalisme Untuk&nbsp; Mewujudkan Sinergitas Perencanaan Pembangunan Jakarta Baru”</strong></div>
              <div>
                <ol>
                  <li><strong>Integritas&nbsp;</strong>menunjukkan sebuah sikap yang berpegang teguh pada nilai-nilai yang benar dan teguh sikap yang bertanggung jawab dalam melaksanakan tugas pelayanan publik</li>
                  <li><strong>Profesional&nbsp;</strong>menggambarkan sebuah kinerja yang berorientasi pada hasil dan dengan menjaga kaidah-kaidah proses dalam sebuah kerangka organisasi perencanaan yang modern.<strong></strong></li>
                  <li><strong>Sinergis</strong><strong>&nbsp;</strong>merupakan suatu proses pembangunan yang saling mendukung dan saling bahu membahu satu sama lain untuk mewujudkan tujuan organisasi.<strong></strong></li>
                </ol>
              </div>
              <p><strong>MISI</strong></p>
              <ol>
                <li>Mengembangkan Sumber Daya Manusia Perencana yang handal dan berwawasan global;</li>
                <li>Menyusun rencana pembangunan daerah yang berkualitas;</li>
                <li>Memantapkan fungsi koordinasi, pemantauan, pengendalian serta evaluasi kinerja dalam perencanaan dan pelaksanaan pembangunan daerah;</li>
                <li>Mengembangkan fungsi statistik dan penelitian daerah.</li>
              </ol>
              <p><strong>TUJUAN</strong></p>
              <div>
                <ol>
                  <li>Terwujudnya sumber daya manusia yang cukup, berkualitas dan berkinerja optimal.</li>
                  <li>Terwujudnya rencana pembangunan yang tepat sasaran dan responsif.</li>
                  <li>Terwujudnya program dan kegiatan pembangunan yang tepat sasaran dan melibatkan seluruh pemangku kepentingan berbasis Teknologi&nbsp; Informasi.</li>
                  <li>Terlaksananya pengembangan dan fasilitasi statistik daerah serta penelitian yang implementatif dan inovatif.</li>
                </ol>
              </div>
              <p><strong>SASARAN</strong></p>
              <div>
                <ol>
                  <li>Sasaran dari tujuan pertama: “Terwujudnya sumber daya manusia yang cukup, berkualitas dan berkinerja optimal” adalah:
                      <ul>
                        <li>Tercukupinya jumlah dan sebaran SDM sesuai dengan analisis jabatan dan analisis beban kerja, yang baik dapat diukur melalui:
                            <ol>
                              <li>Kecukupan kebutuhan jumlah SDM berdasarkan analisis beban kerja.</li>
                              <li>Persentase pemerataan sebaran SDM berdasarkan analisis beban kerja.</li>
                              <li>Persentase kesesuaian penempatan SDM berdasarkan analisis jabatan.</li>
                            </ol>
                        </li>
                        <li>Meningkatnya kualitas aparatur yang berwawasan global yang handal, yang dapat diukur:
                            <ol>
                              <li>Persentase SDM yang memiliki sertifikat perencana.</li>
                              <li>Peningkatan jumlah SDM dengan tingkat pendidikan S2 dan S3 di dalam dan luar negeri.</li>
                              <li>Jumlah SDM yang mengikuti pelatihan di luar negeri setiap tahun.</li>
                            </ol>
                        </li>
                        <li>Meningkatnya kinerja Bappeda, yang dapat diukur dari:
                            <ol>
                              <li>Tingkat pencapaian kinerja kegiatan tahunan.</li>
                              <li>Prosentase rata-rata tingkat kehadiran SDM Bappeda</li>
                            </ol>
                        </li>
                      </ul>
                  </li>
                  <li>Sasaran dari tujuan kedua: “Terwujudnya rencana pembangunan yang tepat sasaran dan responsif” adalah:
                      <ul>
                        <li>Meningkatnya kualitas dokumen perencanaan, yang dapat diukur dari:
                            <ol>
                              <li>Peningkatan prosentase usulan masyarakat yang berkualtas untuk diakomodasi di dalam APBD.</li>
                              <li>Tingkat kesesuaian antara indikator RPJPD, RPJMD, RKPD dan APBD.</li>
                            </ol>
                        </li>
                      </ul>
                  </li>
                  <li>Sasaran dari tujuan ketiga: “Terwujudnya program dan kegiatan pembangunan yang tepat sasaran dan melibatkan seluruh pemangku kepentingan berbasis Teknologi&nbsp; Informasi” adalah:
                      <ul>
                        <li>Meningkatnya kesesuaian program dan kegiatan pembangunan daerah, yang dapat diukur dari:
                            <ol>
                              <li>Kesesuaian antara program dan kegiatan pembangunan.</li>
                              <li>Kesesuaian target indikator kinerja antara RPJMD dengan RKPD dan APBD.</li>
                            </ol>
                        </li>
                        <li>Meningkatnya kualitas pelaporan pelaksanaan pembangunan tahunan daerah, yang dapat diukur dari:
                            <ol>
                              <li>Kesesuaian hasil evaluasi yang digunakan dalam perencanaan pembangunan.</li>
                            </ol>
                        </li>
                      </ul>
                  </li>
                  <li>Sasaran dari tujuan keempat: &nbsp;“Terlaksananya pengembangan dan fasilitasi statistik daerah serta penelitian yang implementatif dan inovatif” adalah:
                      <ul>
                        <li>Meningkatnya kualitas pengelolaan data statistik sesuai dengan kebutuhan daerah, yang dapat diukur dari:
                            <ol>
                              <li>Persentase ketersediaan data statistik daerah sesuai kebutuhan.</li>
                            </ol>
                        </li>
                        <li>Terbangunnya jejaring kerjasama pelaku inovasi daerah, yang dapat diukur dari:
                            <ol>
                              <li>Ketersediaan basis data pelaku inovasi daerah.</li>
                            </ol>
                        </li>
                      </ul>
                  </li>
                </ol>
              </div> --}}
              
            </article><!-- End blog entry -->

          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            @include('public.layouts.sidebar_page')

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Single Section -->
	

	
@endsection
