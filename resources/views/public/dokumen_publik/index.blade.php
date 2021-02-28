@extends('public.layouts.welcome')

@section('content')

<!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="{{ url('/') }}">Home</a></li>
          <li><a href="{{ url('dokumen-publik') }}">Dokumen Publik</a></li>
        </ol>
        <h2>Dokumen Publik</h2>

      </div>
    </section><!-- End Breadcrumbs -->


    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

            <div class="row">

              <div class="col-md-2">
                <div id="rpjpd" style="cursor: pointer;">
                  <div class="card card-primary">
                    <div class="card-body text-center">
                        <img src="{{ asset('image_posts/rpjpd.png') }}" style="width: 100px;" alt="" class="img-fluid">
                        <p class="card-title" style="color: #0099da;"><strong>RPJPD</strong></p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-2">
                <div id="rpjmd" style="cursor: pointer;">
                  <div class="card">
                    <div class="card-body text-center">
                      <img src="{{ asset('image_posts/rpjmd.png') }}" style="width: 100px;" alt="" class="img-fluid">
                      <p class="card-title" style="color: #0099da;"><strong>RPJMD</strong></p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-2">
                <div id="rkpd" style="cursor: pointer;">
                  <div class="card">
                    <div class="card-body text-center">
                      <img src="{{ asset('image_posts/rkpd.png') }}" style="width: 100px;" alt="" class="img-fluid">
                      <p class="card-title" style="color: #0099da;"><strong>RKPD</strong></p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-2">
                <div id="kuappa" style="cursor: pointer;">
                  <div class="card">
                    <div class="card-body text-center">
                      <img src="{{ asset('image_posts/kuappa.png') }}" style="width: 100px;" alt="" class="img-fluid">
                      <p class="card-title" style="color: #0099da;"><strong>KUA-PPA</strong></p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-2">
                <div id="lkpj" style="cursor: pointer;">
                  <div class="card">
                    <div class="card-body text-center">
                      <img src="{{ asset('image_posts/lkpj.png') }}" style="width: 100px;" alt="" class="img-fluid">
                      <p class="card-title" style="color: #0099da;"><strong>LKPJ</strong></p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-2">
                <div id="rtrw" style="cursor: pointer;">
                  <div class="card">
                    <div class="card-body text-center">
                      <img src="{{ asset('image_posts/rtrw.png') }}" style="width: 100px;" alt="" class="img-fluid">
                      <p class="card-title" style="color: #0099da;"><strong>RTRW</strong></p>
                    </div>
                  </div>
                </div>
              </div>

            </div>

            <div class="row mt-5">
              <div class="col-md-4">
                <form action="{{ url('search-dokumen-publik') }}" method="POST">
                  @csrf
                  <div class="input-group mb-3">
                      <input type="text" class="form-control" name="search" placeholder="Masukkan Kata Kunci...">
                      <button class="btn btn-warning">
                        <i class="fa fa-search"></i>
                        Cari
                      </button>
                  </div>
                </form>
              </div>
              {{-- <div class="col-md-3 float-right">
               {{ $dokumens->links() }}
              </div> --}}
            </div>

            <div class="row mt-1">
              <div class="col-md-12">
                <div class="table-responsive">
                  <table class="table table-stripped table-hover">
                    <thead>
                      <tr>
                        <th class="text-muted">No.</th>
                        <th class="text-muted">Detail Dokumen</th>
                        <th class="text-muted">#</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($dokumens as $dok)
                      <tr>
                        <td class="text-muted">{{ $no++ }}</td>
                        <td class="text-muted">
                          <p class="mb-3">{{ $dok->name }}</p>
                          <span class="badge bg-info">{{ $dok->tahun }}</span>
                          <span class="badge bg-danger">{{ $dok->sumber }}</span>
                          <span class="badge bg-warning">{{ $dok->sumber }}</span>
                          <span class="badge bg-dark">{{ $dok->kategori }}</span>
                          <span class="badge bg-success">{{ $dok->pic }}</span>
                        </td>
                        <td>
                          <div class="btn-group text-center">
                            <a href="{{ url('download', $dok->id) }}" class="btn btn-danger btn-sm" title="Download">
                              <i class="fa fa-file-pdf-o"></i>
                            </a>
                          </div>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  <div class="float-left">
                    {{ $dokumens->links() }}
                  </div>
                </div>
              </div>
            </div>

      </div>
    </section><!-- End Blog Single Section -->


    <!-- Button trigger modal -->

    {{-- modal rpjpd --}}
    <div class="modal fade" id="myRpjpd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" style="color: #0099da" id="title"></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="table-responsive">
              <table class="table table-bordered table-hover">
                @foreach($rpjpds as $rpjpd)
               <tr>
                  <td class="text-muted">{{ $no++ }}</td>
                  <td class="text-muted">
                    <p class="mb-3">{{ $rpjpd->name }}</p>
                    <span class="badge bg-info">{{ $rpjpd->tahun }}</span>
                    <span class="badge bg-danger">{{ $rpjpd->sumber }}</span>
                    <span class="badge bg-warning">{{ $rpjpd->sumber }}</span>
                    <span class="badge bg-dark">{{ $rpjpd->kategori }}</span>
                    <span class="badge bg-success">{{ $rpjpd->pic }}</span>
                  </td>
                  <td>
                    <div class="btn-group text-center">
                      <a href="{{ url('download', $rpjpd->id) }}" class="btn btn-danger btn-sm" title="Download">
                        <i class="fa fa-file-pdf-o"></i>
                      </a>
                    </div>
                  </td>
                </tr>
                @endforeach
              </table>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>


    {{-- modal rpjpd --}}
    <div class="modal fade" id="myRpjmd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" style="color: #0099da" id="title"></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="table-responsive">
              <table class="table table-bordered table-hover">
                @foreach($rpjmds as $rpjmd)
               <tr>
                  <td class="text-muted">{{ $no++ }}</td>
                  <td class="text-muted">
                    <p class="mb-3">{{ $rpjmd->name }}</p>
                    <span class="badge bg-info">{{ $rpjmd->tahun }}</span>
                    <span class="badge bg-danger">{{ $rpjmd->sumber }}</span>
                    <span class="badge bg-warning">{{ $rpjmd->sumber }}</span>
                    <span class="badge bg-dark">{{ $rpjmd->kategori }}</span>
                    <span class="badge bg-success">{{ $rpjmd->pic }}</span>
                  </td>
                  <td>
                    <div class="btn-group text-center">
                      <a href="{{ url('download', $rpjmd->id) }}" class="btn btn-danger btn-sm" title="Download">
                        <i class="fa fa-file-pdf-o"></i>
                      </a>
                    </div>
                  </td>
                </tr>
                @endforeach
              </table>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>


    {{-- modal rpjpd --}}
    <div class="modal fade" id="myRkpd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" style="color: #0099da" id="title"></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="table-responsive">
              <table class="table table-bordered table-hover">
                @foreach($rkpds as $rkpd)
               <tr>
                  <td class="text-muted">{{ $no++ }}</td>
                  <td class="text-muted">
                    <p class="mb-3">{{ $rkpd->name }}</p>
                    <span class="badge bg-info">{{ $rkpd->tahun }}</span>
                    <span class="badge bg-danger">{{ $rkpd->sumber }}</span>
                    <span class="badge bg-warning">{{ $rkpd->sumber }}</span>
                    <span class="badge bg-dark">{{ $rkpd->kategori }}</span>
                    <span class="badge bg-success">{{ $rkpd->pic }}</span>
                  </td>
                  <td>
                    <div class="btn-group text-center">
                      <a href="{{ url('download', $rkpd->id) }}" class="btn btn-danger btn-sm" title="Download">
                        <i class="fa fa-file-pdf-o"></i>
                      </a>
                    </div>
                  </td>
                </tr>
                @endforeach
              </table>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>


    {{-- modal rpjpd --}}
    <div class="modal fade" id="myKuappa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" style="color: #0099da" id="title"></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="table-responsive">
              <table class="table table-bordered table-hover">
                @foreach($kuappas as $kuappa)
               <tr>
                  <td class="text-muted">{{ $no++ }}</td>
                  <td class="text-muted">
                    <p class="mb-3">{{ $kuappa->name }}</p>
                    <span class="badge bg-info">{{ $kuappa->tahun }}</span>
                    <span class="badge bg-danger">{{ $kuappa->sumber }}</span>
                    <span class="badge bg-warning">{{ $kuappa->sumber }}</span>
                    <span class="badge bg-dark">{{ $kuappa->kategori }}</span>
                    <span class="badge bg-success">{{ $kuappa->pic }}</span>
                  </td>
                  <td>
                    <div class="btn-group text-center">
                      <a href="{{ url('download', $kuappa->id) }}" class="btn btn-danger btn-sm" title="Download">
                        <i class="fa fa-file-pdf-o"></i>
                      </a>
                    </div>
                  </td>
                </tr>
                @endforeach
              </table>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    {{-- modal rpjpd --}}
    <div class="modal fade" id="myLkpj" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" style="color: #0099da" id="title"></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="table-responsive">
              <table class="table table-bordered table-hover">
                @foreach($lkpjs as $lkpj)
               <tr>
                  <td class="text-muted">{{ $no++ }}</td>
                  <td class="text-muted">
                    <p class="mb-3">{{ $lkpj->name }}</p>
                    <span class="badge bg-info">{{ $lkpj->tahun }}</span>
                    <span class="badge bg-danger">{{ $lkpj->sumber }}</span>
                    <span class="badge bg-warning">{{ $lkpj->sumber }}</span>
                    <span class="badge bg-dark">{{ $lkpj->kategori }}</span>
                    <span class="badge bg-success">{{ $lkpj->pic }}</span>
                  </td>
                  <td>
                    <div class="btn-group text-center">
                      <a href="{{ url('download', $lkpj->id) }}" class="btn btn-danger btn-sm" title="Download">
                        <i class="fa fa-file-pdf-o"></i>
                      </a>
                    </div>
                  </td>
                </tr>
                @endforeach
              </table>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    {{-- modal rpjpd --}}
    <div class="modal fade" id="myRtrw" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" style="color: #0099da" id="title"></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="table-responsive">
              <table class="table table-bordered table-hover">
                @foreach($rtrws as $rtrw)
               <tr>
                  <td class="text-muted">{{ $no++ }}</td>
                  <td class="text-muted">
                    <p class="mb-3">{{ $rtrw->name }}</p>
                    <span class="badge bg-info">{{ $rtrw->tahun }}</span>
                    <span class="badge bg-danger">{{ $rtrw->sumber }}</span>
                    <span class="badge bg-warning">{{ $rtrw->sumber }}</span>
                    <span class="badge bg-dark">{{ $rtrw->kategori }}</span>
                    <span class="badge bg-success">{{ $rtrw->pic }}</span>
                  </td>
                  <td>
                    <div class="btn-group text-center">
                      <a href="{{ url('download', $rtrw->id) }}" class="btn btn-danger btn-sm" title="Download">
                        <i class="fa fa-file-pdf-o"></i>
                      </a>
                    </div>
                  </td>
                </tr>
                @endforeach
              </table>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

	

	
@endsection

@section('script')
  
  <script type="text/javascript">
    $(document).ready(function(){

      $(document).on('click', '#rpjpd', function(){
        $('.modal-title').html('Dokumen RPJPD')
        $('#myRpjpd').modal('show')
      })

      $(document).on('click', '#rpjmd', function(){
        $('.modal-title').html('Dokumen RPJMD')
        $('#myRpjmd').modal('show')
      })

      $(document).on('click', '#rkpd', function(){
        $('.modal-title').html('Dokumen RKPD')
        $('#myRkpd').modal('show')
      })

      $(document).on('click', '#kuappa', function(){
        $('.modal-title').html('Dokumen KUA-PPA')
        $('#myKuappa').modal('show')
      })

      $(document).on('click', '#lkpj', function(){
        $('.modal-title').html('Dokumen LKPJ')
        $('#myLkpj').modal('show')
      })

      $(document).on('click', '#rtrw', function(){
        $('.modal-title').html('Dokumen RT/RW')
        $('#myRtrw').modal('show')
      })


    })
  </script>

@endsection
