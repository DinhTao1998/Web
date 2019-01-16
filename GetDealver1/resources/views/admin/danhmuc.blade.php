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
               <div >
            <a data-toggle="collapse" href="#themdanhmuc">
              <h4 style="text-align: center">Thêm Danh Mục</h4>
            </a>
            <div class="collapse" id="themdanhmuc" style="text-align: center">
              {{-- <form action="admin/danhmuc" method="get" accept-charset="utf-8" role="search"> --}}
              <lable>Tên danh mục <input type="text" id="tendm" name="tenloai" placeholder="nhập tên danh mục"></lable>
              <label>Image <input type="text" id="hinh" name="hinh" placeholder="Nhập tên hình ảnh"></label>

              <button type="button" id="btnthem">Thêm</button>
            {{-- </form> --}}
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
                    <td><input style="border:none; background-color: white" type="text" class="{{$pr->id}}" disabled="true" value="{{$pr->product_type_name}}"></td>
                    <td><input style="border:none; background-color: white" type="text" class="{{$pr->id}}" disabled="true" value="{{$pr->image}}"></td>
                    <td>
                      <button type="button" value="{{$pr->id}}" class="{{$pr->id}} btnEdit" style="background-color: white; border:none">Edit&nbsp;
                        <i class="fas fa-edit"></i>
                      </button>
                      <button type="button" id="btnsave" value="{{$pr->id}}" style="display:none">Save</button>
                    </td>
                    <td>
                      <button type="button" class="btndelete" value="{{$pr->id}}" style="background-color: white; border:none">Delete&nbsp;
                        <i class="fas fa-trash-alt"></i>
                      </button>
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
                <a class="btn btn-primary" href="login.html">Đăng Xuất</a>
              </div>
            </div>
          </div>
        </div>
            <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script type="text/javascript">
          $(document).ready(function(){
            $('#btnthem').click(function(){
              var ten = $('#tendm').val();
              var hinh = $('#hinh').val();
              $.get("admin/danhmuc/them/"+ten+"/"+hinh, function(data){
                $('html').html(data);
              });

            });

            $('.btndelete').click(function(){
              var id = $(this).val();
              if(!confirm("Bạn có muốn xóa sản phẩm không")) return false;
              $.get("admin/danhmuc/xoa/"+id, function(data){
                $('html').html(data);
              });
            });

            $('.btnEdit').click(function(){
              // var diachi = $(this).val();
              // document.getElementsByClassName($(this).val()).setAttribute('disabled','true');
              $('input').attr('disabled','false');
            });
          })
        </script>
        @endsection
    

