@extends('layoutAdmin')
 @section('content')
  <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.html">Bảng điều khiển</a>
            </li>
            <li class="breadcrumb-item active">Quản lý danh mục sản phẩm</li>
          </ol>

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
            Bảng danh mục sản phẩm</div>
            <div class="card-body">
              <div class="table-responsive">
              <table class="table table-bordered table-earning thead th" id="dataTable" width="100%" cellspacing="0">
                
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Product name</th>
                    <th>Link</th>  
                     <th>Price</th>
                    <th>Cost</th>
                    <th>Sale</th>
                    <th>Location</th>                     
                  </tr>
                </thead>
                @foreach($product as $pr)
                <tr>
                    <td>{{$pr->id}}</td>
                    <td>{{$pr->product_title}}</td>
                    <td>{{$pr->link}}</td>
                    <td>{{number_format($pr->price)}}</td>
                    <td>{{number_format($pr->cost)}}</td>
                    <td>{{$pr->sale}}</td>
                    <td>{{$pr->location}}</td>
                </tr>
                @endforeach
              </table>
            </div>
             <div class="row link" style="width: 520px; margin-left: 225px; margin-right: -15px;">{!! $product->links() !!}</div>
          </div>
          <div class="card-footer small text-muted">Cập nhật lúc 11:59 PM</div>
        </div>

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
          <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
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
                <a class="btn btn-primary" href="login.html">Đăng Xuất</a>
              </div>
            </div>
          </div>
        </div>
        @endsection