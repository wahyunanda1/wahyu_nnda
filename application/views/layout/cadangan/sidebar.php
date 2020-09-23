 <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon">
          <i class="fa fa-server"></i>
        </div>
        <div class="sidebar-brand-text">INVENTARISASI SEKOLAH</div>
      </a>
     
      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Beranda -->
      <li class="nav-item active">
        <a class="nav-link" href="">
          <i class="fas fa-school"></i>
          <span><b>PROFIL SEKOLAH</b></span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        BARANG INVENTARIS
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('elektronik/index')  ?>">
          <i class="fas fa-bolt"></i>
          <span>ELEKTRONIK</span>
        </a>
      </li>
      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('nonelektronik/index')  ?>">
          <i class="fa fa-book"></i>
          <span>NON-ELEKTRONIK</span>
        </a>
      </li>


       <!-- Divider -->
      <hr class="sidebar-divider my-0">
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('auth/logout') ?>">
          <i class="fas fa-fw fa-sign-out-alt"></i>
          <span>LOG OUT</span></a>

    </ul>
    <!-- End of Sidebar -->