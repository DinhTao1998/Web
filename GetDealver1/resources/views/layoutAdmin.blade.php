<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>GetDeal Admin - Get Deal</title>
  <base href="{{asset('')}}">

  <!-- Bootstrap core CSS-->
  <link href="GetDeal/Admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template-->
  <link href="GetDeal/Admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="GetDeal/Admin/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="GetDeal/Admin/css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.html">GetDeal</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>
    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Chương Trần
          <i class="fas fa-user-circle fa-fw"></i>
          

        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">Cài đặt</a>
          <!-- <a class="dropdown-item" href="#">Activity Log</a> -->
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="admin/dangnhap" data-toggle="modal" data-target="#logoutModal">Đăng xuất</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="admin/trangchu">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Bảng điều khiển</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Trang</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Bảng đăng nhập</h6>
          <a class="dropdown-item" href="admin/dangnhap">Đăng nhập</a>
          <a class="dropdown-item" href="register.html">Đăng kí</a>
          <a class="dropdown-item" href="forgot-password.html">Quên mật khẩu</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="admin/quanlisanpham">
          <i class="fas fa-fw fa-table"></i>
          <span>Quản lý sản phẩm</span></a>
        </li>

         <li class="nav-item">
        <a class="nav-link" href="admin/danhmuc/danhsach">
          <i class="fas fa-fw fa-table"></i>
          <span>Quản lý danh mục sản phẩm</span></a>
        </li>

         <li class="nav-item">
        <a class="nav-link" href="admin/email">
          <i class="fas fa-fw fa-table"></i>
          <span>Quản lý Email &nbsp;&nbsp;<button style="border:1px solid red ;background-color: red;border-radius:15px;width:30px;height: 30px">{{$send}}</button></span></a>
        </li>
        
      </ul>

      <div id="content-wrapper">
        @yield('content')
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="GetDeal/Admin/vendor/jquery/jquery.min.js"></script>
        <script src="GetDeal/Admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="GetDeal/Admin/vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Page level plugin JavaScript-->
        <script src="GetDeal/Admin/vendor/chart.js/Chart.min.js"></script>
        <script src="GetDeal/Admin/vendor/datatables/jquery.dataTables.js"></script>
        <script src="GetDeal/Admin/vendor/datatables/dataTables.bootstrap4.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="GetDeal/Admin/js/sb-admin.min.js"></script>

        <!-- Demo scrGetDeal/Admin/ipts for this page-->
        {{-- <script src="GetDeal/Admin/js/demo/datatables-demo.js"></script> --}}
        <script src="GetDeal/Admin/js/demo/chart-area-demo.js"></script>
      </body>

      </html>
