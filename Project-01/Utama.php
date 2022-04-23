<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BMI | Sapitri</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="utama.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="Praktikum-1/array_siswa.php" class="nav-link">Praktikum 1</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="Praktikum-2/form_persentase_nilai_get.php" class="nav-link">Praktikum 2</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="Praktikum-3/Tugas/home.php" class="nav-link">Praktikum 3</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="Praktikum-4/class_persegipanjang.php" class="nav-link">Praktikum 4</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="Praktikum-5/dispenser.php" class="nav-link">Praktikum 5</a>
      </li>
    </ul>
    
  </nav>

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="dist/img/logo.jpg" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">BMI KAMI</span>
    </a>


    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/profil.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="datadiri.html" class="d-block">Sapitri</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
     

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="Utama.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Halaman Utama
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index1.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pendaftaran BMI</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item menu-close">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Praktikum 1
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="Praktikum-1/array_siswa.php" class="nav-link active">
                  <p>Tugas Nilai Siswa</p>

                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-close">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Praktikum 2
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="Praktikum-2/form_belanja.php" class="nav-link active">
                <i class="far fa-circle nav-icon"></i>
                  <p>Form Belanja</p>
                </a>
              </li>            
              <li class="nav-item">
                <a href="Praktikum-2/form_nilai_post.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Form Nilai POST</p>
                </a>
              </li>            
              <li class="nav-item">
                <a href="Praktikum-2/form_nilai_get.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Form Nilai GET</p>
                </a>
              </li>            
              <li class="nav-item">
                <a href="Praktikum-2/form_grade_nilai_get.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Form Grade Nilai Siswa</p>
                </a>
              </li>               
              <li class="nav-item">
                <a href="Praktikum-2/form_persentase_nilai_get.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Form Persentasi Nilai Siswa</p>
                </a>
              </li>
            </ul>

          </li>
          <li class="nav-item menu-close">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Praktikum 3
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="Praktikum-3/tugas/home.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tugas Membuat Template</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-close">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Praktikum 4
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="Praktikum-4/class_lingkaran.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Lingkaran</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Praktikum-4/class_persegipanjang.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Persegi Panjang</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-close">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Praktikum 5
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="Praktikum-5/dispenser.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dispenser</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Praktikum-5/atm.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ATM 1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Praktikum-5/atm2.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ATM 2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Praktikum-5/class_buah.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Buah</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="text-center">
      <br><br/><br>
      <h1>SELAMAT DATANG DI PENGUKURAN BMI KAMI</h1>
      <br> <hr>
      <p><br>Layanan ini akan membantu anda dalam menentukan apakah pengukuran tinggi dan berat anda termasuk ke dalam 
        <br><b>"KEKURANGAN BOBOT, SEHAT (IDEAL) atau KELEBIHAN BOBOT bahkan OBESITAS"</b>
        <br> Tunggu apalagi, Yuk, segera Daftarkan diri anda melalui form yang tersedia di <b>Pendaftaran BMI</b>. Agar mendapatkan hasilnya anda harus mengisi semua data yang ada pada form ya.
        Tidak hanya itu disini juga tersedia Praktikum-Praktikum yaa...
      </p>
      <br><br/><hr>
      <h1><br>SILAHKAN MENCOBA !!!!</h1>
    </div>
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5></h5>
      <p></p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
