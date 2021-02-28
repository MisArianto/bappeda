@extends('public.layouts.welcome')

@section('content')

<!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="{{ url('/') }}">Home</a></li>
          <li><a href="{{ url('tugas-pokok-fungsi') }}">Tugas Pokok dan Fungsi</a></li>
        </ol>
        <h2>Tugas Pokok dan Fungsi</h2>

      </div>
    </section><!-- End Breadcrumbs -->


    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry entry-single">

                  {!! $model->content !!}

                  {{-- <p><strong>KEDUDUKAN</strong></p>
                  <ol>
                    <li>Bappeda merupakan unsur perencanaan pembangunan pemerintahan daerah;</li>
                    <li>Bappeda dipimpin oleh seorang Kepala Badan yang berkedudukan di bawah dan bertanggung jawab kepada Gubernur melalui Sekretaris Daerah;</li>
                    <li>Dalam melaksanakan tugasnya Kepala Badan dibantu oleh seorang Wakil Kepala Badan.</li>
                  </ol>
                  <p><strong>TUGAS POKOK</strong></p>
                  <p>Bappeda mempunyai tugas menyusun, mengendalikan dan mengevaluasi pelaksanaan rencana pembangunan daerah, penyelenggaraan penelitian dan pengembangan, dan pengelolaan statistik daerah.</p>
                  <p><strong>FUNGSI</strong></p>
                  <ol>
                    <li>Penyusunan dan pelaksanaan Rencana Kerja dan Anggaran Badan Perencanaan Pembangunan Daerah</li>
                    <li>Perumusan kebijakan perencanaan pembangunan, penelitian dan pengembangan serta statistik daerah;</li>
                    <li>Pengoordinasian penyusunan Rencana Tata Ruang Wilayah (RTRW), Rencana Pembangunan Jangka Panjang Daerah (RPJPD), Rencana Pembangunan Jangka Menengah Daerah (RPJMD), dan Rencana Kerja Pemerintah Daerah (RKPD);</li>
                    <li>Penyusunan Kebijakan Umum Anggaran (KUA) berkoordinasi dengan Badan Pengelola Keuangan Daerah (BPKD);</li>
                    <li>Penyusunan Prioritas dan Plafon Anggaran (PPA) berkoordinasi dengan Badan Pengelola Keuangan Daerah (BPKD);</li>
                    <li>Pengendalian kesesuaian antaran indikator, kinerja RKPD dengan Kebijakan Umum Anggaran (KUA) dan Prioritas dan Plafon Anggaran (PPA), output/hasil kegiiatan di Rencana Kerja Satuan Kerja Perangkat Daerah (Renja SKPD) dan Rencana Kerja dan Anggaran Satuan Kerja Perangkat Daerah (RKA SKPD);</li>
                    <li>Pengoordinasian kebijakan perencanaan di bidang pembangunan perekonomian, pembangunan prasarana dan sarana, pembangunan kesejahteraan masyarakat, pembangunan tata praja, pembangunan aparatur dan keuangan;</li>
                    <li>Pengoordinasian perencanaan pembangunan secara terpadu lintas negara, lintas daerah, lintas urusan pemerintah, antar pemerintah daerah dengan pusat dan antar lintas pelaku lainnya;</li>
                    <li>Evaluasi pelaksanaan rencana pembangunan;</li>
                    <li>Penyelenggaraan pengoordinasian penelitian dan pengembangan daerah;</li>
                    <li>Penyelenggaraan pengoordinasian statistik daerah;</li>
                    <li>Penyediaan, penatausahaan, penggunaan, pemeliharaan, dan perawatan prasarana dan sarana kerja Bappeda;</li>
                    <li>Pemberian dukungan teknis perencanaan pembangunan kepada perangkat daerah;</li>
                    <li>Pengoordinasian penyusunan laporan kinerja pemerintah daerah;</li>
                    <li>Pengelolaan kepegawaian, keuangan, barang dan ketatausahaan Bappeda; dan</li>
                    <li>Pelaporan, dan pertanggungjawaban pelaksanaan tugas dan fungsi.</li>
                  </ol> --}}
            
              
            </article><!-- End blog entry -->

          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            @include('public.layouts.sidebar_page')

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Single Section -->
	

	
@endsection
