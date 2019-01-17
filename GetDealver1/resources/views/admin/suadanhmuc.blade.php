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
            Sửa Danh Mục</div>
            <div class="card-body">
              <form action="admin/danhmuc/editdone" method="get">
              @foreach($product as $pr)
              <p><b>ID:</b></p>
              <input type="text" name="ma" id="id" disabled="true" style="text-align:center" value="{{$pr->id}}"><br><br>
              <p><b>Tên danh mục:</b></p>
              <input type="text" name="tendanhmuc" id="tendanhmuc" style="text-align:center" value="{{$pr->product_type_name}}"><br><br>
              <p><b>Image:</b></p>
              <input type="text" name="image" id="image" style="text-align:center" value="{{$pr->image}}"><br><br>
              @endforeach
              <button type="submit"value="{{$pr->id}}" name="madm" id="btnsua" style="height:30px;width:60px;border: 1px solid lightblue; background-color: white">Sửa</button>
              </form>
          </div>
          <div class="card-footer small text-muted">Cập nhật lúc 11:59 PM</div>
        </div>
          <script src="http://code.jquery.com/jquery-latest.js"></script>
          <script type="text/javascript">
            $(document).ready(function(){
              $('#btnsua').click(function(){
                if(!confirm('Bạn có muốn thay đổi danh mục hay không'))
                  return false;
              });
            });
          </script>

        @endsection
    

