<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <!-- <i class="fas fa-laugh-wink"></i> -->
            <img src="{{ asset('storage/pengaturan/'. PengaturanHelp::setting()->header->logo) }}" alt="logo" style="width: 100px;">
        </div>
        {{-- <div class="sidebar-brand-text mx-3">Hcode</div> --}}
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="/home">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
        <!-- <a class="nav-link" href="index.html">
        </a> -->
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    @if(Auth::user()->level == 'admin')
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Master</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <!-- <h6 class="collapse-header">Custom Components:</h6> -->
                <a class="collapse-item" href="{{ url('admin/master/levels') }}">Levels</a>
                <a class="collapse-item" href="{{ url('admin/master/users') }}">Manage User</a>
                <a class="collapse-item" href="{{ url('admin/master/categories') }}">Category</a>
                <a class="collapse-item" href="{{ url('admin/master/tags') }}">Tag</a>
                <a class="collapse-item" href="{{ url('admin/master/contact') }}">Contact</a>
                <h6 class="collapse-header">Master Dokumen:</h6>
                <a class="collapse-item" href="{{ url('admin/master/tahun') }}">Tahun</a>
                <a class="collapse-item" href="{{ url('admin/master/sumber') }}">Sumber</a>
                <a class="collapse-item" href="{{ url('admin/master/versi') }}">Versi</a>
                <a class="collapse-item" href="{{ url('admin/master/kategori') }}">Kategori</a>
                <a class="collapse-item" href="{{ url('admin/master/pic') }}">PIC</a>
                <a class="collapse-item" href="{{ url('admin/master/keterangan') }}">Keterangan</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Data Utama</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ url('admin/posts') }}">Berita</a>
                <a class="collapse-item" href="{{ url('admin/fotos') }}">Foto</a>
                <a class="collapse-item" href="{{ url('admin/message') }}">Message</a>
                <a class="collapse-item" href="{{ url('admin/aplikasi') }}">Aplikasi</a>
                <a class="collapse-item" href="{{ url('admin/videos') }}">Video</a>
                <a class="collapse-item" href="{{ url('admin/dokumens') }}">Dokumen</a>
                <a class="collapse-item" href="{{ url('admin/slides') }}">Slide</a>
                <a class="collapse-item" href="{{ url('admin/visi-misi') }}">Visi Misi</a>
                <a class="collapse-item" href="{{ url('admin/tugas-fungsi') }}">Tugas Fungsi</a>
                <a class="collapse-item" href="{{ url('admin/struktur-organisasi') }}">Struktur Organisasi</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#setting"
            aria-expanded="true" aria-controls="setting">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Setting</span>
        </a>
        <div id="setting" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ url('admin/setting/pengaturan') }}">Pengaturan</a>
            </div>
        </div>
    </li>

    @endif

    <!-- user -->
    @if(Auth::user()->level == 'user')
        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-fw fa-wrench"></i>
                <span>Data Utama</span>
            </a>
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="{{ url('user/posts') }}">Berita</a>
                    <a class="collapse-item" href="{{ url('user/fotos') }}">Foto</a>
                    <a class="collapse-item" href="{{ url('user/message') }}">Message</a>
                    <a class="collapse-item" href="{{ url('user/aplikasi') }}">Aplikasi</a>
                    <a class="collapse-item" href="{{ url('user/videos') }}">Video</a>
                    <a class="collapse-item" href="{{ url('user/dokumens') }}">Dokumen</a>
                    <a class="collapse-item" href="{{ url('user/slides') }}">Slide</a>
                    <a class="collapse-item" href="{{ url('user/visi-misi') }}">Visi Misi</a>
                    <a class="collapse-item" href="{{ url('user/tugas-fungsi') }}">Tugas Fungsi</a>
                    <a class="collapse-item" href="{{ url('user/struktur-organisasi') }}">Struktur Organisasi</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#setting"
                aria-expanded="true" aria-controls="setting">
                <i class="fas fa-fw fa-wrench"></i>
                <span>Setting</span>
            </a>
            <div id="setting" class="collapse" aria-labelledby="headingUtilities"
                data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="{{ url('user/setting/pengaturan') }}">Pengaturan</a>
                </div>
            </div>
        </li>
    @endif
    <!-- end user -->

    <!-- author -->
    @if(Auth::user()->level == 'author')
        <li class="nav-item active">
            <a class="nav-link" href="{{ url('author/posts') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Berita</span>
            </a>
        </li>
    @endif
    <!-- end author -->

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
