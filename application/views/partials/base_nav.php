<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
    </ul>

    <!-- Search -->
    <!-- <form class="form-inline ml-3" action="" method="post">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Cari History Plat" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fa fa-search"></i>
          </button>
        </div>
      </div>
    </form> -->

    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fa fa-user"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-xs dropdown-menu-right">
          <a href="<?php echo base_url('login/logout') ?>" class="dropdown-item">
            <i class="fa fa-sign-out"></i> Keluar
          </a>
          <a href="<?php echo base_url('admin') ?>" class="dropdown-item">
            <i class="fa fa-user"></i> pengguna
          </a>
      </li>
    </ul>
  </nav>
  
  <!-- Sidebar bagian atas -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="<?php echo base_url('home') ?>" class="brand-link">
      <span class="brand-text font-weight-light">ParkirSwalauyan</span>
    </a>

    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url().$this->session->userdata('img_admin'); ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $this->session->userdata('nama_admin'); ?></a>
        </div>
      </div>

      <!-- Menu Sidebar -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?php echo base_url('home') ?>" class="nav-link">
              
              <p>Home</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('masuk') ?>" class="nav-link">
              <p>Parkir Masuk</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('keluar') ?>" class="nav-link">
              <p>Parkir Keluar</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('Laporan') ?>" class="nav-link">
              <p>Laporan</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('JenisKendaraan') ?>" class="nav-link">
              <p>Jenis Kendaraan</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('Admin') ?>" class="nav-link">
              <p>Data Pegawai</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <!--     _
       .__(.)< (MEOW)
        \___)   
 ~~~~~~~~~~~~~~~~~~ -->