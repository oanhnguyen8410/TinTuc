<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Thần Thú 3D - Admin</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../Public/admin/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="../../Public/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../../Public/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="../../Public/admin/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../Public/admin/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../../Public/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../../Public/admin/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="../../Public/admin/plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="shortcut icon" type="ico" href="../../View/thanthu/assets/images/frame1/favicon-head.ico">
</head>
<style type="text/css">
    .main {
        margin-right: 10px;
    }
</style>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="http://localhost/blog_thanthu/View/admin/?controller=admin&action=get" class="nav-link">Trang chủ</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Liên hệ</a>
                </li>
            </ul>

            <!-- SEARCH FORM -->
            <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                  
           
            </ul>
        </nav>
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="../../Public/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">
                    <?php 
                if(isset($_SESSION['admin_user']) && $_SESSION['admin_user'] != NULL){
                     
            ?>
            <p>
            <?php echo $_SESSION['admin_user']?> <br>
           
            </p>
            <?php
            }
                
            ?>
        </span>
            </a>
             <a href="http://localhost/blog_thanthu/?controller=loginadmin&action=loginadmin" style="position: absolute;
                top: 7%;
                left: 25%;
                color: #17a2b8;">Đăng xuất</a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="../../Public/admin/dist/img/ava.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="?controller=admin&action=update" class="d-block">Nguyễn Thị Kiều Oanh</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
                        <li class="nav-item has-treeview">
                            <a href="http://localhost/blog_thanthu/View/admin/?controller=admin&action=get" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Trang chủ
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                               <i class="fas fa-th-large main"></i>
                                <p>
                                    Chuyên mục
                                    <i class="fas fa-angle-left right"></i>
                                  
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="?controller=category&action=add" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Thêm</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="?controller=category&action=get" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Danh sách</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="fas fa-newspaper main"></i>
                                <p>
                                    Bài viết
                                    <i class="fas fa-angle-left right"></i>
                                  
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="http://localhost/blog_thanthu/view/admin/?controller=post&action=add" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Thêm</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="?controller=post&action=get" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Danh sách</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                       
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="ion ion-person-add main"></i>
                                <p>
                                    Thành viên
                                    <i class="fas fa-angle-left right"></i>
                                   
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                               <!--  <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Thêm</p>
                                    </a>
                                </li> -->
                                <li class="nav-item">
                                    <a href="?controller=user&action=get" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Danh sách</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                               <i class="fas fa-credit-card main"></i>
                                <p>
                                    Thẻ nạp
                                    <i class="fas fa-angle-left right"></i>
                                   
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                
                                <li class="nav-item">
                                    <a href="?controller=card&action=get" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Danh sách</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                               <i class="fas fa-images main"></i>
                                <p>
                                    Thư viện ảnh 
                                    <i class="fas fa-angle-left right"></i>
                                  
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="?controller=images&action=add" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Thêm</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="?controller=images&action=get" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Danh sách</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="fas fa-edit main"></i>
                                <p>
                                    Thông tin Pokemon
                                    <i class="fas fa-angle-left right"></i>
                                   
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="http://localhost/blog_thanthu/View/admin/?controller=pokemon&action=add" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Thêm</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="http://localhost/blog_thanthu/View/admin/?controller=pokemon&action=get" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Danh sách</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                               <i class="fas fa-external-link-alt main"></i>                                
                               <p>
                                    Link - Cộng đồng
                                    <i class="fas fa-angle-left right"></i>
                                    
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="?controller=link&action=add" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Thêm</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="?controller=link&action=get" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Danh sách</p>
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