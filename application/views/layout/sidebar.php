<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

 <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon">
          <i class="fab fa-accusoft"></i>
        </div>
        <div class="sidebar-brand-text">INVENTARISASI SEKOLAH</div>
      </a>
     
      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Beranda -->
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('home'); ?>">
          <i class="fas fa-folder-open"></i>
          <span><b>DATA INVENTARIS</b></span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        BARANG INVENTARIS
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('elektronik/index');  ?>">
          <i class="fas fa-bolt"></i>
          <span>ELEKTRONIK</span>
        </a>
      </li>
      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('nonelektronik/index');  ?>">
          <i class="fa fa-book"></i>
          <span>NON-ELEKTRONIK</span>
        </a>
      </li>


       <!-- Divider -->
      <hr class="sidebar-divider my-0">
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('auth/logout'); ?>">
          <i class="fas fa-fw fa-sign-out-alt"></i>
          <span>KELUAR</span></a>

    </ul>
    <!-- End of Sidebar -->
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">
                <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <span style="margin-top: 7px;"><h4><b>Hai! Admin</b></h4></span>
          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
              
            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">SMKN 4 KENDARI</span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/03/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="https://www.smkn4kendari.sch.id/">
                  <i class="fas fa-school fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profil Sekolah
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?= base_url('auth/logout');  ?>" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Keluar
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->