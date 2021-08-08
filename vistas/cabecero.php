<?php

if ($_SERVER['HTTPS'] != "on") { 
    $url = "https://". $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; 
    header("Location: $url"); 
    exit; 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Legacy User Menu</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../public/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../public/dist/css/adminlte.min.css">
   <!-- CSS  de datatables -->
  <link rel="stylesheet" href="../public/plugins/datatables-bs4/css/datatables.bootstrap4.min.css">
  <link rel="stylesheet" href="../public/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="../public/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../public/plugins/toastr/toastr.min.css">
  
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
          <img src="../files/foto.jpg" class="user-image img-circle elevation-2" alt="User Image">
          
          <span class="d-none d-md-inline">Luis Amador</span>
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <!-- User image -->
          <li class="user-header bg-primary">
            <img src="../public/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">

            <p>
              Alexander Pierce - Web Developer
              <small>Member since Nov. 2012</small>
            </p>
          </li>
          <!-- Menu Footer-->
          <li class="user-footer">
            <a href="#" class="btn btn-default btn-flat float-right">Sign out</a>
          </li>
        </ul>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="inicio.php" class="brand-link">
      <img src="../public/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Finance</span>
    </a>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Administracion
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="departamento.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Catalogo Departamento</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Catalogo Categorias</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Catalogo Empleados</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Autorizacion
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Autorizaciones</p>
                </a>
              </li> 
            </ul>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Gastos
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Registrar gastos</p>
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
