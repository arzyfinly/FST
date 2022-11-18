<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon">
            <img src="{{ asset('admin/images/logo.png') }}">
        </div>
        <div class="sidebar-brand-text mx-3">FST UNIBA MADURA</div>
    </a>
    <hr class="sidebar-divider my-0">
      <li class="nav-item active">
        <a class="nav-link" href="/home">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <hr class="sidebar-divider">
      <li class="nav-item @yield('profile-active')">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap1"
          aria-expanded="true" aria-controls="collapseBootstrap">
          <i class="fas fa-database"></i>
          <span>Profil</span>
        </a>
        <div id="collapseBootstrap1" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            {{-- <h6 class="collapse-header">Data</h6> --}}
            <a class="collapse-item @yield('sejarah-fst-active')" href="{{ route('sejarah-fst.index') }}"> Sejarah Fakultas</a>
            <a class="collapse-item @yield('visi-misi-tujuan-fst-active')" href="profil/visi-misi-tujuan-fst"> Visi, Misi dan Tujuan Fakultas</a>
            <a class="collapse-item @yield('profil-pimpinan-fakultas-active')" href="profil/pimpinan-fakultas">Profil Pimpinan Fakultas</a>
            <a class="collapse-item @yield('profil-staff-dosen-active')" href="profil/staff-dosen">Profil Staff Dosen</a>
            <a class="collapse-item @yield('profil-tenaga-kependidikan-active')" href="profil/tenaga-kependidikan">Profil Tenaga Kependidikan</a>
            <a class="collapse-item @yield('identitas-fst-active')" href="profil/identitas-fst">Identitas FST</a>
            <a class="collapse-item @yield('struktur-organisasi-active')" href="profil/struktur-organisasi">Struktur Organisasi</a>
            {{-- <a class="collapse-item" href="popovers.html">Popovers</a>
            <a class="collapse-item" href="progress-bar.html">Progress Bars</a> --}}
          </div>
        </div>
      </li>
      <li class="nav-item @yield('akademik-active')">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap2"
          aria-expanded="true" aria-controls="collapseBootstrap">
          <i class="fas fa-database"></i>
          <span>Akademik</span>
        </a>
        <div id="collapseBootstrap2" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            {{-- <h6 class="collapse-header">Data</h6> --}}
            <a class="collapse-item @yield('panduan-pendidikan-fst-active')" href="akademik/panduan-pendidikan-fst">Panduan Pendidikan FST</a>
            <a class="collapse-item @yield('program-studi-active')" href="akademik/program-studi">Program Studi</a>
            <a class="collapse-item @yield('kalender-akademik-active')" href="akademik/kalender-akademik">Kalender Akademik</a>
            <a class="collapse-item @yield('kemahasiswaan-active')" href="akademik/kemahasiswaan">Kemahasiswaan</a>
            {{-- <a class="collapse-item" href="popovers.html">Popovers</a>
            <a class="collapse-item" href="progress-bar.html">Progress Bars</a> --}}
          </div>
        </div>
      </li>
      <li class="nav-item @yield('penelitian-active')">
        <a class="nav-link" href="/penelitian">
          <i class="fas fa-user-graduate"></i>
          <span>Penelitian</span>
        </a>
      </li>
      <li class="nav-item @yield('berita-active')">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap3"
          aria-expanded="true" aria-controls="collapseBootstrap">
          <i class="fas fa-database"></i>
          <span>Berita</span>
        </a>
        <div id="collapseBootstrap3" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            {{-- <h6 class="collapse-header">Data</h6> --}}
            <a class="collapse-item @yield('berita-terkini-active')" href="/berita-terkini">Terkini</a>
            <a class="collapse-item @yield('agenda-active')" href="/agenda">Agenda</a>
            <a class="collapse-item @yield('laporan-active')" href="/laporan">Laporan</a>
            <a class="collapse-item @yield('hasil-survey-kepuasan-active')" href="/hasil-survey-kepuasan">Hasil Survei Kepuasan</a>
            {{-- <a class="collapse-item" href="popovers.html">Popovers</a>
            <a class="collapse-item" href="progress-bar.html">Progress Bars</a> --}}
          </div>
        </div>
      </li>
      <li class="nav-item @yield('lainnya-active')">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap4"
          aria-expanded="true" aria-controls="collapseBootstrap">
          <i class="fas fa-database"></i>
          <span>Lainnya</span>
        </a>
        <div id="collapseBootstrap4" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            {{-- <h6 class="collapse-header">Data</h6> --}}
            <a class="collapse-item @yield('fasilitas-fst-active')" href="/fasilitas-fst">Fasilitas FST</a>
            <a class="collapse-item @yield('daftar-staff-pengajar-active')" href="/daftar-staff-pengajar">Daftar Staff Pengajar</a>
            <a class="collapse-item @yield('selayang-pandang-active')" href="/selayang-pandang">Selayang Pandang</a>
            <a class="collapse-item @yield('panduan-grafis-fst-active')" href="/panduan-grafis-fst">Panduan Grafis FST</a>
            <a class="collapse-item @yield('download-center-active')" href="/download-center">Download Center</a>
            {{-- <a class="collapse-item" href="popovers.html">Popovers</a>
            <a class="collapse-item" href="progress-bar.html">Progress Bars</a> --}}
          </div>
        </div>
      </li>
      {{-- <li class="nav-item">
        <a class="nav-link" href="/student-details">
          <i class="fas fa-user"></i>
          <span>Profil</span>
        </a>
      </li> --}}
      {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm" aria-expanded="true"
          aria-controls="collapseForm">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>Forms</span>
        </a>
        <div id="collapseForm" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Forms</h6>
            <a class="collapse-item" href="form_basics.html">Form Basics</a>
            <a class="collapse-item" href="form_advanceds.html">Form Advanceds</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable" aria-expanded="true"
          aria-controls="collapseTable">
          <i class="fas fa-fw fa-table"></i>
          <span>Tables</span>
        </a>
        <div id="collapseTable" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Tables</h6>
            <a class="collapse-item" href="simple-tables.html">Simple Tables</a>
            <a class="collapse-item" href="datatables.html">DataTables</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ui-colors.html">
          <i class="fas fa-fw fa-palette"></i>
          <span>UI Colors</span>
        </a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Examples
      </div>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage" aria-expanded="true"
          aria-controls="collapsePage">
          <i class="fas fa-fw fa-columns"></i>
          <span>Pages</span>
        </a>
        <div id="collapsePage" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Example Pages</h6>
            <a class="collapse-item" href="login.html">Login</a>
            <a class="collapse-item" href="register.html">Register</a>
            <a class="collapse-item" href="404.html">404 Page</a>
            <a class="collapse-item" href="blank.html">Blank Page</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Charts</span>
        </a>
      </li> --}}
      <hr class="sidebar-divider">
      <div class="version" id="version-ruangadmin"></div>
    </ul>