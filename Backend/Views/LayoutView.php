<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Quản lý ký túc xá HAUI</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="../Assets/Backend/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../Assets/Backend/css/font-awesome.min.css">
    <link rel="stylesheet" href="../Assets/Backend/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../Assets/Backend/css/styles.css">
    <link rel="stylesheet" href="../Assets/Backend/css/_all-skins.min.css">
    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="index.php" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>H</b>aui</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>KTX-Haui</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="../Assets/Backend/images/user2-160x160.jpg" class="user-image" alt="User Image">
                            <span class="hidden-xs">Your name</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="../Assets/Backend/images/user2-160x160.jpg" class="img-circle" alt="User Image">
<!-- 
                                <p>
                                    <?php echo $_SESSION["email"]?>
                                    <small>Web developer</small>
                                </p> -->
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <div class="pull-right">
                                    <a href="index.php?controller=login&action=logout" class="btn btn-default btn-flat">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="../Assets/Backend/images/user2-160x160.jpg" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>Your name</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">LAOYOUT ADMIN</li>
                <li>
                    <div onclick={showOption()}><i class="fa fa-th"></i><span>Quản lý sinh viên</span></div>
                    <ul class="menu-child hide" id="menu-child">
                        <li><a href="index.php?page=QLSinhVien"><span>Thông tin sinh viên</span></a></li>
                        <li><a href="index.php?page=QLKyLuat"><span>Kỷ luật</span></a></li>
                        <li><a href="index.php?page=QLTrucTQ"><span>Trực tự quản</span></a></li>
                    </ul>
                </li>
                <li>
                    <a href="index.php?page=QLPhong">
                        <i class="fa fa-th"></i> <span>Quản lý phòng</span>
                    </a>
                </li>
                <li>
                    <a href="index.php?page=QLHopDong">
                        <i class="fa fa-th"></i> <span>Quản lý hợp đồng</span>
                    </a>
                </li>
                <li>
                    <a href="index.php?page=ThongKeBaoCao">
                        <i class="fa fa-th"></i> <span>Thống kê, báo cáo</span>
                    </a>
                </li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Dashboard
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            
            <?php 
            
                if(isset($fileController)){
                    include $fileController;
                }
            ?>
        </section>
        <!-- /.content -->
    </div>
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../Assets/Backend/js/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../Assets/Backend/js/jquery-ui.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../Assets/Backend/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="../Assets/Backend/js/adminlte.min.js"></script>
<script src="../Assets/Backend/js/main.js"></script>
</body>
</html>
