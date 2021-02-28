<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Artikel Belajar Pemograman Sejati, Artikel Laravel, Artikel PHP, Artikel VueJS, Artikel Git, Artikel Pemrograman, Artikel Koding, Artikel Membuat Web, Artikel Web Development, Training Laravel, Training PHP, Training VueJS, Training Git, Membuat Website, Menerima Pembuatan Aplikasi Web, Menerima Pembuatan Aplikasi Dekstop, Menerima Pembuatan Aplikasi Android, Menerima Pembuatan Aplikasi Mobile, Artikel PHP Murah, Penjualan Aplikasi, Konsultasi, Problem Solvet">
    <meta name="author" content="Hcode">
    <link rel="icon" href="{{ asset('assets/public/img/favicon.ico')}}">
    
    <title>Bappeda - @yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Custom fonts for this template-->
    <link href="{{ asset('assets/admin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('assets/admin/css/sb-admin-2.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/loading.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sweetalert2.min.css') }}">
    <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/24.0.0/classic/ckeditor.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <!-- <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/medium-editor@latest/dist/css/medium-editor.min.css" type="text/css" media="screen" charset="utf-8"> -->





    {{-- <script src="https://cdn.tiny.cloud/1/3dlnkmyzfmzku3ax822h1d15qxfesucp6bpd7l5fxz6kyvia/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script> --}}



    <style type="text/css">
        .layar{
          display: none;
        }
    </style>

    @auth
      <script>
      window.user = @json(auth()->user());
      </script>
    @endauth

    @yield('style')

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        @auth
        <!-- Sidebar -->
        @include('layouts.sidebar')
        <!-- End of Sidebar -->
        @endauth

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                @auth
                <!-- Topbar -->
                @include('layouts.header')
                <!-- End of Topbar -->
                @endauth

                <!-- Begin Page Content -->
                <div class="container-fluid">
                @yield('content')
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

           <!--  <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer> -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a 
                    class="btn btn-primary" 
                    href="{{ route('logout') }}"
                    onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                    >
                    <i class="mdi mdi-logout mr-2 text-primary"></i>
                    Logout
                </a>
                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('assets/admin/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('assets/admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('assets/admin/js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('assets/admin/vendor/chart.js/Chart.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('assets/admin/js/demo/chart-area-demo.js')}}"></script>
    <script src="{{ asset('assets/admin/js/demo/chart-pie-demo.js')}}"></script>
    <script src="{{ asset('js/hcode.js')}}"></script>
     <script src="{{ asset('js/sweetalert2.min.js') }}"></script>
     <script src="{{asset('js/configToastr.js')}}"></script>
     <!-- <script src="//cdn.jsdelivr.net/npm/medium-editor@latest/dist/js/medium-editor.min.js"></script> -->

     <!-- <script src="https://cdn.jsdelivr.net/npm/@editorjs/editorjs@latest"></script> -->





    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

     {{-- <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script> --}}
     


     {{-- <script src="//cdn.tinymce.com/4/tinymce.min.js"></script> --}}

    @yield('scripts')


    <script type="text/javascript">
        // $(document).ready(function(){
        //     $('.select2').select2();
        // })

        function ConfirmDelete() {
          var x = confirm("Yakin akan menghapus data?");
          if (x) return true; else return false;
        }
    </script>

</body>

</html>
