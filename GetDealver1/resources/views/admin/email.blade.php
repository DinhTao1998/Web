@extends('layoutAdmin')
 @section('content')
  <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.html">Bảng điều khiển</a>
            </li>
            <li class="breadcrumb-item active">Quản lý Email</li>
          </ol>

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
            Bảng quản lý Email</div>
            <div class="card-body">
              <div class="table-responsive">
              <table class="table table-bordered table-earning thead th" id="dataTable" width="100%" cellspacing="0">
                
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Họ và tên</th>
                    <th>Email</th>
                    <th>Điện thoại</th>
                    <th>Nội dung</th>
                    <th>Ngày gửi</th>
                    <th>Trạng thái</th>                
                  </tr>
                </thead>
                @foreach($email as $e)
                @if($e->status ==1)
                <tr id="{{$e->id}}" style="background-color: red">
                  <td>{{$e->id}}</td>
                  <td>{{$e->name}}</td>
                  <td>{{$e->email}}</td>
                  <td>{{$e->phone}}</td>
                  <td>{{$e->content}}</td>
                  <td>{{$e->created_at}}</td>
                  <td>Đã xử lí</td>
{{--                   <td><button type="button" value="{{$e->id}}" id="btnxem" style="background-color: white; border:none">Đã xem &nbsp;<i class="fas fa-eye"></i></button></td> --}}
                </tr>
                @else
                 <tr id="{{$e->id}}">
                  <td>{{$e->id}}</td>
                  <td>{{$e->name}}</td>
                  <td>{{$e->email}}</td>
                  <td>{{$e->phone}}</td>
                  <td>{{$e->content}}</td>
                  <td>{{$e->created_at}}</td>
                  <td> <form action="admin/xulimail" method="get"><button type="submit" value="{{$e->id}}" name="btnxem" style="background-color: white; border:none">Mới &nbsp;<i class="fas fa-eye"></i></button></form></td>
                </tr>
                @endif
                @endforeach
              </table>
            </div>
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
                <a class="btn btn-primary" href="admin/dangnhap">Đăng Xuất</a>
              </div>
            </div>
          </div>
        </div>
        @endsection