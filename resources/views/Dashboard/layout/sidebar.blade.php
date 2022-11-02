<!-- Spinner Start -->
        {{-- <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div> --}}
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa arrows"></i>Hospital</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">ADMIN</h6>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="/dashboard" class="nav-item nav-link {{ Request::is('/dashboard') ? 'active' : '' }}"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    
                    <a href="/pasien" class="nav-item nav-link {{ Request::is('pasien') ? 'active' : '' }}"><i class="fa fa-th me-2"></i>Pasien</a>
                    <a href="/dokter" class="nav-item nav-link {{ Request::is('dokter') ? 'active' : '' }}"><i class="fa fa-th me-2"></i>Dokter</a>
                    <a href="/penyakit" class="nav-item nav-link {{ Request::is('penyakit') ? 'active' : '' }}"><i class="fa fa-keyboard me-2"></i>Penyakit</a>
                    <a href="/spesialis" class="nav-item nav-link {{ Request::is('spesialis') ? 'active' : '' }}"><i class="fa fa-table me-2"></i>Spesialis</a>
                    <a href="/ruangan" class="nav-item nav-link {{ Request::is('ruangan') ? 'active' : '' }}"><i class="fa fa-keyboard me-2"></i>Ruangan</a>
                    <a href="/nomor" class="nav-item nav-link {{ Request::is('nomor') ? 'active' : '' }}"><i class="fa fa-table me-2"></i>Nomor</a>
                    
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->