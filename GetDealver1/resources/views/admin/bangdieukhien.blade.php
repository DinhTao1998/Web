@extends('layoutAdmin')
 @section('content')
 <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Bảng điều khiển</a>
            </li>
            <li class="breadcrumb-item active">Tổng quan</li>
          </ol>

          <!-- Icon Cards-->
          <div class="row">

            <div class="col-sm-6 col-lg-4">
              <div class="overview-item overview-item--c1">
                <div class="overview__inner">
                  <div class="overview-box clearfix">
                   <div class="icon">
                    <i class="zmdi zmdi-account-o"></i>
                  </div>
                  <div class="text">
                    <h2>{{$product}}</h2>
                    <span>Sản phẩm</span>
                  </div>
                </div>
                <div class="overview-chart">
                  <canvas id="widgetChart1"></canvas>                               
                </div> 
                <a class="card-footer text-white clearfix small z-1" href="admin/quanlisanpham">
                  <span class="float-left">Chi tiết</span>
                  <span class="float-right">
                    <i class="fa fa-arrow-circle-right"></i>
                  </span>
                </a>                       
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4">
            <div class="overview-item overview-item--c2">
              <div class="overview__inner">
                <div class="overview-box clearfix">
                  <div class="icon">
                    <i class="zmdi zmdi-calendar-note"></i>
                  </div>
                  <div class="text">
                    <h2>{{$product_type}}</h2>
                    <span>Danh mục sản phẩm</span>
                  </div>
                </div>
                <div class="overview-chart">
                  <canvas id="widgetChart3"></canvas>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="admin/danhmuc/danhsach">
                 <span class="float-left">Chi tiết</span>
                 <span class="float-right">
                  <i class="fa fa-arrow-circle-right"></i>
                </span>
              </a>                                               
            </div>
          </div>
        </div>

         <div class="col-sm-6 col-lg-4">
            <div class="overview-item overview-item--c4">
              <div class="overview__inner">
                <div class="overview-box clearfix">
                  <div class="icon">
                    <i class="zmdi zmdi-calendar-note"></i>
                  </div>
                  <div class="text">
                    <h2>{{$email}}</h2>
                    <span>Danh mục Email</span>
                  </div>
                </div>
                <div class="overview-chart">  
                  <canvas id="widgetChart3"></canvas>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="admin/email">
                 <span class="float-left">Chi tiết</span>
                 <span class="float-right">
                  <i class="fa fa-arrow-circle-right"></i>
                </span>
              </a>                                               
            </div>
          </div>
        </div>


        <!-- DataTables Example -->
        <div class="col-lg-12">
          <div class="card-header">
            <i class="fas fa-table"></i>
            <a class="card-footer1 text-white clearfix small2 z-1" href="admin/quanlisanpham">
            Bảng sản phẩm</a>
          </div>

          <div class="card-header">
            <i class="fas fa-table"></i>
            <a class="card-footer1 text-white clearfix small2 z-1" href="admin/danhmuc/danhsach">
            Bảng danh mục sản phẩm</a>
          </div>

            <div class="card-header">
            <i class="fas fa-table"></i>
            <a class="card-footer1 text-white clearfix small2 z-1" href="admin/email">
            Bảng danh mục Email </a>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered table-earning thead th" id="dataTable" width="100%" cellspacing="0">
               </table> 
            </div>
          </div>
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Đăng xuất?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body">Chọn "Đăng xuất" để kết thúc phiên hoạt động</div>
              <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Hủy</button>
                <a class="btn btn-primary" href="admin/dangnhap">Đăng Xuất</a>
              </div>
            </div>
          </div>
        </div>
          @endsection