<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Aplikasi Pengaduan Masyarakat</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse">
      <div class="navbar-nav ml-auto mr-3">
          <a class="nav-link" href="/">Home</a>
          <a class="nav-link" href="/pengaduan">Buat Laporan</a>
          
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Namaku</a>
              <div div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a href="/laporanku" class="nav-link dropdown-item">Laporanku</a>
                  <a href="#" class="nav-link dropdown-item">Logout</a>
              </div>
            </li>
           @if(!Auth()->guard('masyarakat')->check())
              <a class="nav-link" href="/login">Login</a>
          @endif
         
      </div>
    </div>
  </div>
</nav>