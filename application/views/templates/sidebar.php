<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="icon" href="http://bpbd.jogjaprov.go.id/assets/uploads/2623d-7a5d0-bpbd1.png">

    <title>BPBD | <?= $title; ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?= base_url('') ?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('') ?>assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css">
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- daterange picker -->
    <link rel="stylesheet" href="<?= base_url('') ?>assets/plugins/daterangepicker/daterangepicker.css">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="<?= base_url('') ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="<?= base_url('') ?>assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="<?= base_url('') ?>assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="<?= base_url('') ?>assets/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="<?= base_url('') ?>assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet" href="<?= base_url('') ?>assets/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('') ?>assets/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="<?= base_url('') ?>assets/plugins/summernote/summernote-bs4.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="<?= base_url('') ?>assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">

    
  <!-- Font Awesome -->
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
        </nav>
        

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="http://bpbd.jogjaprov.go.id/assets/uploads/2623d-7a5d0-bpbd1.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Administrator</span> </a> <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?= base_url('') ?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="" class="d-block"><?= $this->session->userdata('nama') ?></a>
                    </div>
                </div>
                <!-- Sidebar -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                        <li class="nav-item">
                            <a href="<?= base_url('Admin/Dashboard') ?>" class="<?= $page=='Dashboard'?'nav-link active' : 'nav-link'; ?>">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="" class="<?= $page=='Infografis'?'nav-link active' : 'nav-link'; ?>">
                                <i class="nav-icon fa fa-fw fa-pencil"></i>
                                <p>
                                    Infografis
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="" class="<?= $page=='E-Lapor'?'nav-link active' : 'nav-link'; ?>">
                                <i class="nav-icon fa fa-fw fa-laptop"></i>
                                <p>
                                    E-Lapor
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?=base_url('Admin/Berita')?>" class="<?= $page=='Berita'?'nav-link active' : 'nav-link'; ?>" >
                                <i class="nav-icon fa fa-fw fa-newspaper"></i>
                                <p>
                                    Berita
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?=base_url('Admin/About')?>" class="<?= $page=='About'?'nav-link active' : 'nav-link'; ?>">
                                <i class="nav-icon fa fa-fw fa-users"></i>
                                <p>
                                    Profil Website
                                </p>
                            </a>
                        </li>

                        <li class="nav-header">Dokumentasi</li>
                        <li class="nav-item">
                            <a href="<?=base_url('Admin/Dokumentasi/foto')?>" class="<?= $page=='Foto'?'nav-link active' : 'nav-link'; ?>">
                                <i class="nav-icon fa fa-fw fa-inbox"></i>
                                <p>
                                    Foto
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?=base_url('Admin/Dokumentasi/video')?>" class="<?= $page=='Video'?'nav-link active' : 'nav-link'; ?>">
                                <i class="nav-icon fa fa-fw fa-shopping-cart"></i>
                                <p>
                                    Video
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/gallery.html" class="<?= $page=='Buletin'?'nav-link active' : 'nav-link'; ?>" >
                                <i class="nav-icon fa fa-fw fa-globe"></i>
                                <p>
                                     Buletin
                                </p>
                            </a>
                        </li>

                        <!-- <li class="nav-header">WEB LAZISMU</li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-chart-pie"></i>
                            <p>
                                MANAGE WEB
                                <i class="right fas fa-angle-left"></i>
                            </p>
                            </a>
                            <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?=base_url('Admin/About')?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tentang Kami</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?=base_url('Admin/Berita')?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Berita</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?=base_url('Admin/Visimisi')?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Visi Misi</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?=base_url('Admin/Komentar')?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Komentar</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?=base_url('Admin/Dokumentasi/video')?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dokumentasi</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?=base_url('Admin/Mitra')?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Mitra</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?=base_url('Admin/Softfile')?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Softfile</p>
                                </a>
                            </li>
                            </ul>
                        </li> -->

                        <li class="nav-header">AKUN</li>
                        <li class="nav-item">
                            <a href="pages/calendar.html" class="<?= $page=='Profil'?'nav-link active' : 'nav-link'; ?>" >
                                <i class="nav-icon fa fa-fw fa-user"></i>
                                <p>
                                    Profil
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('Admin/Dashboard/logout') ?>" class="nav-link">
                                <i class="nav-icon fa fa-fw fa-power-off"></i>
                                <p>
                                    Logout
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>


        


        