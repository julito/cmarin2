
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<?php
$URL = Rutas::ulr();
?>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Clinica Marín</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo $URL;?>Vistas/public/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $URL;?>Vistas/public/dist/css/adminlte.min.css">
  <!-- jQuery -->
<script src="<?php echo $URL;?>Vistas/public/plugins/jquery/jquery.min.js"></script>
              <!-- Sweet alert2 -->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

              <!-- Datatable -->
  <link rel="stylesheet" type="text/css" href="<?php echo $URL;?>Vistas/public/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $URL;?>Vistas/public/plugins/datatables-responsive/css/responsive.bootstrap4.css">
  <script type="text/javascript" charset="utf8" src="<?php echo $URL;?>Vistas/public/plugins/datatables/jquery.dataTables.js"></script>
  <script type="text/javascript" charset="utf8" src="<?php echo $URL;?>Vistas/public/plugins/datatables-responsive/js/dataTables.responsive.js"></script>
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
    </ul>           

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="<?php echo $URL;?>Vistas/public/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo $URL;?>Vistas/admin" class="brand-link">
      <img src="<?php echo $URL;?>Vistas/login/logo.png" alt="Logo" class="brand-image img-circle elevation-4" style="opacity: .8">
      <span class="brand-text font-weight-light">Clinica Marín</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo $URL;?>Vistas/public/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="<?php echo $URL;?>Vistas/admin/" class="d-block">nombre</a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-close">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-users"></i>
              <p>
                usuarios
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $URL;?>Vistas/admin/usuarios" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listado de usuarios</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $URL;?>Vistas/admin/usuarios/create.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nuevo usuario</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-close">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Pacientes
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $URL;?>Vistas/admin/pacientes" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listado de pacientes</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $URL;?>Vistas/admin/pacientes/create.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nuevo paciente</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-close">
            <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-file"></i>
              <p>
                Especialidades
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $URL;?>Vistas/admin/especialidades" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lista especialidades</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $URL;?>Vistas/admin/especialidades/create.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nueva especialidad</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-close">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-glasses"></i>
              <p>
                Especialista
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $URL;?>Vistas/admin/especialistas" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listado de especialistas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $URL;?>Vistas/admin/especialistas/create.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nuevo especialista</p>
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

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6"></div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="btn btn-default"><a href="<?php echo $URL;?>Vistas/login/controller_cerrar_session.php">Cerrar sessión</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->

    ocntenido
    </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Contactenos estamos a su servcio
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2017-2021 <a href="">RHO Group UNAN León</a>.</strong> Derechos reservados.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->


<!-- Bootstrap 4 -->
<script src="<?php echo $URL;?>Vistas/public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo $URL;?>Vistas/public/dist/js/adminlte.min.js"></script>
</body>
</html>
