<?php
require "class_pasien.php";
require "class_BMI.php";
require "class_BMIPasien.php";

  $pasien=[];
  // $ahmad=new Pasien("1","P001","Ahmad","2005/08/21","Jakarta","madahmad@gmail.com","L");
  // $ahmadBMI=new BMI(69.8, 169);
  // $rina=new Pasien("2","P002","Rina","1995/04/10","Solo","narin45a@gmail.com","P");
  // $rinaBMI=new BMI(55.3, 165);
  // $lutfi=new Pasien("3","P003","Lutfi","2000/03/10","Medan","lutfifi123@gmail.com","L");
  // $lutfiBMI=new BMI(45.2, 171);
  // $ahmadBMIPasien=new BMIPasien("2022-01-10", $ahmad, $ahmadBMI);
  // array_push($data, $ahmadBMIPasien);
  // $rinaBMIPasien=new BMIPasien("2022-01-10", $rina, $rinaBMI);
  // array_push($data, $rinaBMIPasien);
  // $lutfiBMIPasien=new BMIPasien("2022-01-11", $lutfi, $lutfiBMI); 
  // array_push($data, $lutfiBMIPasien);

if(isset($_POST["simpan_data"])){
    $tgl_periksa=$_POST["tgl_periksa"];
    $nama=$_POST["nama"];
    $tgl_lahir=$_POST["tempat_lahir"];
    $tmp_lahir=$_POST["tanggal_lahir"];
    $email=$_POST["email"];
    $gender=$_POST["gender"];
    $berat=$_POST["berat"];
    $tinggi=$_POST["tinggi"];

    $dataPasien=new Pasien("4", "P004", $nama, $tgl_lahir, $tmp_lahir, $email, $gender);
    $dataPasienBMI=new BMI($berat, $tinggi);
    $dataPasien=new BMIPasien($tgl_periksa, $dataPasien, $dataPasienBMI);
    array_push($pasien, $dataPasien);
}

?>


<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Data Pasien</title>

  <!-- Google Font: Source Sans Pro -->
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav v>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="assets/img/logo.png" alt="logo" class="brand-image">
      <span class="brand-text font-weight-light">BMI</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Muhammad Fiqri Dwi N.</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard Alumni
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="fas fa-database"></i>
                  <p>Data Alumni</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-clipboard"></i>                 
                  <p>Loker</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-users"></i>
                  <p>Mitra NF</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="index.html" class="nav-link">
              <i class="fas fa-sign-out-alt"></i>
              Logout
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        <div class="row mt-5 mb-2">
          <div class="col-sm-6">

            <h1 class="m-0">Data Pasien</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
              <div class="breadcrumb float-sm-right">
              <a href="#" class="breadcrumb-item ">Home</a>
              <a href="tambah_data.php" class="breadcrumb-item active">Data Pasien</a>
            </div>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row mt-3">
          <div class="col-lg-12">
            <a href="tambah_data.php" class="btn btn-primary mb-3">Tambah Data</a>
            <table class="table table-bordered text-center">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Tanggal Periksa</th>
                  <th scope="col">Kode Pasien</th>
                  <th scope="col">Nama Pasien</th>
                  <th scope="col">Gender</th>
                  <th scope="col">Berat(kg)</th>
                  <th scope="col">Tinggi(cm)</th>
                  <th scope="col">Nilai BMI</th>
                  <th scope="col">Status BMI</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>2022-01-10</td>
                  <td>P001</td>
                  <td>Ahmad</td>
                  <td>L</td>
                  <td>69,8</td>
                  <td>169</td>
                  <td>24,7</td>
                  <td>Kelebihan Berat Badan</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>2022-01-10</td>
                  <td>P002</td>
                  <td>Rina</td>
                  <td>P</td>
                  <td>55,3</td>
                  <td>165</td>
                  <td>20,3</td>
                  <td>Normal (Ideal)</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>2022-01-11</td>
                  <td>P003</td>
                  <td>Lutfi</td>
                  <td>L</td>
                  <td>45,2</td>
                  <td>171</td>
                  <td>15,4</td>
                  <td>Kekurangan Berat Badan</td>
                </tr>
                <?php foreach($pasien as $p) : ?>
                 <tr>
                  <th scope="row"><?= $p->pasien->id; ?></th>
                  <td><?= $p->tanggal; ?></td>
                  <td><?= $p->pasien->kode; ?></td>
                  <td><?= $p->pasien->nama; ?></td>
                  <td><?= $p->pasien->gender; ?></td>
                  <td><?= $p->BMI->berat; ?></td>
                  <td><?= $p->BMI->tinggi; ?></td>
                  <td><?= $p->BMI->nilaiBMI(); ?></td>
                  <td><?= $p->BMI->statusBMI(); ?></td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App --> 
<script src="assets/dist/js/adminlte.min.js"></script>
</body>
</html>
