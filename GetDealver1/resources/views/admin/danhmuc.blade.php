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
              @if(session('thongbao'))
              <div class="alert alert-success">
                {{session('thongbao')}}
              </div>
              @endif
               <div >
            <a data-toggle="collapse" href="#themdanhmuc">
              <h4 style="text-align: center">Thêm Danh Mục</h4>
            </a>
            <div class="collapse" id="themdanhmuc" style="text-align: center">
              <form action="admin/danhmuc/them" method="get" accept-charset="utf-8">
              <lable>Tên danh mục <input type="text" id="tendm" name="tenloai" placeholder="nhập tên danh mục"></lable>
              <label>Image <input type="text" id="hinh" name="hinh" placeholder="Nhập tên hình ảnh"></label>

              <button type="submit" id="btnthem">Thêm</button>
            </form>
            </div>
              <div class="table-responsive">
              <table class="table table-bordered table-earning thead th" id="dataTable" width="100%" cellspacing="0">
                
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Product Type Name</th>
                    <th>Image</th>
                    <th>Edit</th>  
                    <th>Delete</th>
                  </tr>
                </thead>
                <div id="bangdanhmuc">
                @foreach($product_type as $pr)
                <tr>
                    <td>{{$pr->id}}</td>
                    <td>{{$pr->product_type_name}}</td>
                    <td>{{$pr->image}}</td>
                    <td>
                      <form action="admin/danhmuc/sua" method="get">
                      <button type="submit" value="{{$pr->id}}" name="btnEdit" class="btnEdit" style="background-color: white; border:none">Edit&nbsp;
                        <i class="fas fa-edit"></i>
                      </button>
                    </form>
                    </td>
                    <td>
                      <form action="admin/danhmuc/xoa" method="get">
                      <button type="submit" class="btndelete" name='btnxoa'value="{{$pr->id}}" style="background-color: white; border:none">Delete&nbsp;
                        <i class="fas fa-trash-alt"></i>
                      </button>
                      </form>
                    </td>

                </tr>
                @endforeach
              </div>
              </table>
            </div>
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
            <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script type="text/javascript">
          $(document).ready(function(){
            // $('#btnthem').click(function(){
            //   var ten = $('#tendm').val();
            //   var hinh = $('#hinh').val();
            //   $.get("admin/danhmuc/them/"+ten+"/"+hinh, function(data){
            //     $('html').html(data);
            //   });

            // });

            $('.btndelete').click(function(){
              var id = $(this).val();
              if(!confirm("Bạn có muốn xóa sản phẩm không")) return false;
              // $.get("admin/danhmuc/xoa/"+id, function(data){
              //   $('html').html(data);
              // });
            });

            // $('.btnEdit').click(function(){
            //    var id = $(this).val();
            //    $.get("admin/danhmuc/sua/"+id, function(data){
            //     $('html').html(data);
            //   });
            // });
          })
        </script>
        @endsection
    

