<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Homepage - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="GetDeal/Home page/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="GetDeal/Home page/css/shop-homepage.css" rel="stylesheet">

    <!-- My css -->
    <link rel="stylesheet" type="text/css" href="GetDeal/Home page/css/gird.css">
    <link rel="stylesheet" type="text/css" href="GetDeal/Home page/css/card.css">
    <link rel="stylesheet" type="text/css" href="GetDeal/Home page/css/filter.css">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="hieght:60px;height: 60px;padding-top: 0px;padding-bottom: 0px;"">
      <div class="container" height="60px">
        <a class="navbar-brand" href="#"><img  src="GetDeal/img/logo.png " height="38.75px" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index">TRANG CHỦ
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index#section-services">DANH MỤC</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index#testimonials">THÔNG TIN</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index#section-about">HƯỚNG DẪN</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index#section-contact">LIÊN HỆ</a>
            </li>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- <div class="col-lg-3">

          <h1 class="my-4">Shop Name</h1>
          <div class="list-group">
            <a href="#" class="list-group-item">Category 1</a>
            <a href="#" class="list-group-item">Category 2</a>
            <a href="#" class="list-group-item">Category 3</a>
          </div>
 -->
        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-12">

          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img class="d-block img-fluid" src="https://cf.shopee.vn/file/1b399a69c086a03c76b22d9e75391ffb" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="https://cf.shopee.vn/file/8e4db708a5bc7913fc3edce239c83ac8" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="https://cf.shopee.vn/file/293242948a14f0457e316bc3f1973d9a" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

          <div class="row">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-10 col-md-4">
                            <div class="list-wrap">
                                <div class="list-header">
                                    <div class="search-result">
                                        <span>Có <b>696</b> kết quả trong mỹ phẩm</span>
                                    </div>
                                    <div class="search-action">
                                        <div id="sortType">
                                            <label class="control">Sắp xếp sản phẩm:</label>
                                            <label class="control control--radio"> Đáng quan tâm
                                                <input type="radio" name="sort-type" data-name="Đáng quan tâm" data-value="-1" checked>
                                                <div class="control__indicator"></div>
                                            </label>
                                            <label class="control control--radio"> Giá tiền tăng &nbsp;↑
                                                <input type="radio" name="sort-type" data-name="Giá tiền tăng  ↑" data-value="1">
                                                <div class="control__indicator"></div>
                                            </label>
                                            <label class="control control--radio"> Giá tiền giảm &nbsp;↓
                                                <input type="radio" name="sort-type" data-name="Giá tiền giảm " data-value="2">
                                                <div class="control__indicator"></div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

          <div class="row">
            <div class="col-lg-2 col-md-hide">
                            <h4 class="my-1">Lọc sản phẩm</h4>
                            <div class="filter-warp">
                                <div class="filter-inner">
                                    <div class="filter-item">
                                        <div class="filter-text">
                                            <input type="text" placeholder="Chọn thuộc tính">
                                        </div>
                                        <div class="filter-list mCustomScrollbar _mCS_1" style="overflow: auto; height: 258px;">
                                            <div id="mCSB_1" class="mCustomScrollBox mCS-dark mCSB_vertical mCSB_inside" style="max-height: none;" tabindex="0">
                                                <div id="mCSB_1_container" class="mCSB_container" style="position: relative; top: 0px; left: 0px;" dir="ltr">
                                                    <div class="control-group">
                                                        <form action="#" method="post" onfocus="focus_form()" class="filter">
                                                            <label class="control control--radio" data-value="1891">
                                                                <input type="radio" name="cat" data-value="1891" data-name="Mỹ phẩm nữ"> Trang điểm môi
                                                                <span>(798)</span>
                                                                <div class="control__indicator"></div>
                                                            </label>
                                                            <label class="control control--radio custom-radio" data-value="1891">Trang điểm mặt
                                                                <span>(63)</span>
                                                                <input type="radio" name="cat" data-value="1968" data-name="Đồ dùng gia đình">
                                                                <div class="control__indicator"></div>
                                                            </label>
                                                            <label class="control control--radio custom-radio" data-value="1891">Trang điểm mắt
                                                                <span>(52)</span>
                                                                <input type="radio" name="cat" data-value="609" data-name="Ba lô - Túi xách nữ">
                                                                <div class="control__indicator"></div>
                                                            </label>
                                                            <label class="control control--radio custom-radio" data-value="1891">Nước Hoa
                                                                <span>(49)</span>
                                                                <input type="radio" name="cat" data-value="569" data-name="Phụ kiện Laptop">
                                                                <div class="control__indicator"></div>
                                                            </label>
                                                            <label class="control control--radio custom-radio" data-value="1891">Tinh dầu spa
                                                                <span>(44)</span>
                                                                <input type="radio" name="cat" data-value="120" data-name="Sản phẩm cho bé">
                                                                <div class="control__indicator"></div>
                                                            </label>
                                                            <label class="control control--radio custom-radio" data-value="1891">Chăm sóc da mặt
                                                                <span>(40)</span>
                                                                <input type="radio" name="cat" data-value="1900" data-name="Bếp các loại">
                                                                <div class="control__indicator"></div>
                                                            </label>
                                                            <label class="control control--radio custom-radio" data-value="1891">Chăm sóc cơ thể
                                                                <span>(39)</span>
                                                                <input type="radio" name="cat" data-value="792" data-name="Tủ đựng - Sắp xếp đồ">
                                                                <div class="control__indicator"></div>
                                                            </label>
                                                            <label class="control control--radio custom-radio" data-value="1891">Chăm sóc tóc
                                                                <span>(15)</span>
                                                                <input type="radio" name="cat" data-value="694" data-name="Thực phẩm chức năng">
                                                                <div class="control__indicator"></div>
                                                            </label>
                                                            <label class="control control--radio custom-radio" data-value="1891">Thực phẩm chức năng
                                                                <span>(44)</span>
                                                                <input type="radio" name="cat" data-value="1833" data-name="Ba lô - Cặp - Túi xách nam">
                                                                <div class="control__indicator"></div>
                                                            </label>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div id="mCSB_1_scrollbar_vertical" class="mCSB_scrollTools mCSB_1_scrollbar mCS-dark mCSB_scrollTools_vertical" style="display: block;">
                                                    <div class="mCSB_draggerContainer">
                                                        <div id="mCSB_1_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; display: block; height: 31px; max-height: 228px; top: 0px;" oncontextmenu="return false;">
                                                            <div class="mCSB_dragger_bar" style="line-height: 30px;"></div>
                                                        </div>
                                                        <div class="mCSB_draggerRail"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="filter-item">
                                        <hr class="hr-filter">
                                        <h4 data-property-id="region" data-type="4" class="my-1">Địa chỉ nơi bán</h4>
                                        <div class="filter-text">
                                            <input type="text" placeholder="Tìm kiếm...">
                                        </div>
                                        <div class="filter-list mCustomScrollbar _mCS_2" style="overflow: auto; height: 258px;">
                                            <div id="mCSB_2" class="mCustomScrollBox mCS-dark mCSB_vertical mCSB_inside" style="max-height: none;" tabindex="0">
                                                <div id="mCSB_2_container" class="mCSB_container" style="position:relative; top:0; left:0;" dir="ltr">
                                                    <div class="control-group">
                                                        <form action="#" method="post">
                                                            <label class="control control--radio custom-radio" data-value="1891">Hồ Chí Minh
                                                                <span>(9424)</span>
                                                                <input type="radio" name="cat" data-value="120" data-name="Sản phẩm cho bé">
                                                                <div class="control__indicator"></div>
                                                            </label>
                                                            <label class="control control--radio custom-radio" data-value="1891">Hà Nội
                                                                <span>(9244)</span>
                                                                <input type="radio" name="cat" data-value="120" data-name="Sản phẩm cho bé">
                                                                <div class="control__indicator"></div>
                                                            </label>
                                                            <label class="control control--radio custom-radio" data-value="1891">Đà Nẵng
                                                                <span>(4644)</span>
                                                                <input type="radio" name="cat" data-value="120" data-name="Sản phẩm cho bé">
                                                                <div class="control__indicator"></div>
                                                            </label>
                                                            <label class="control control--radio custom-radio" data-value="1891">Cần Thơ
                                                                <span>(474)</span>
                                                                <input type="radio" name="cat" data-value="120" data-name="Sản phẩm cho bé">
                                                                <div class="control__indicator"></div>
                                                            </label>
                                                            <label class="control control--radio custom-radio" data-value="1891">Thừa Thiên - Huế
                                                                <span>(64)</span>
                                                                <input type="radio" name="cat" data-value="120" data-name="Sản phẩm cho bé">
                                                                <div class="control__indicator"></div>
                                                            </label>
                                                            <label class="control control--radio custom-radio" data-value="1891">Hải Phòng
                                                                <span>(44)</span>
                                                                <input type="radio" name="cat" data-value="120" data-name="Sản phẩm cho bé">
                                                                <div class="control__indicator"></div>
                                                            </label>
                                                            <label class="control control--radio custom-radio" data-value="1891">Quảng Trị
                                                                <span>(34)</span>
                                                                <input type="radio" name="cat" data-value="120" data-name="Sản phẩm cho bé">
                                                                <div class="control__indicator"></div>
                                                            </label>
                                                            <label class="control control--radio custom-radio" data-value="1891">Đồng Nai
                                                                <span>(4)</span>
                                                                <input type="radio" name="cat" data-value="120" data-name="Sản phẩm cho bé">
                                                                <div class="control__indicator"></div>
                                                            </label>
                                                            <label class="control control--radio custom-radio" data-value="1891">Bình Thuận
                                                                <span>(14)</span>
                                                                <input type="radio" name="cat" data-value="120" data-name="Sản phẩm cho bé">
                                                                <div class="control__indicator"></div>
                                                            </label>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div id="mCSB_2_scrollbar_vertical" class="mCSB_scrollTools mCSB_2_scrollbar mCS-dark mCSB_scrollTools_vertical" style="display: block;">
                                                    <div class="mCSB_draggerContainer">
                                                        <div id="mCSB_2_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; display: block; height: 51px; max-height: 228px; top: 0px;" oncontextmenu="return false;">
                                                            <div class="mCSB_dragger_bar" style="line-height: 30px;"></div>
                                                        </div>
                                                        <div class="mCSB_draggerRail"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="filter-item">
                                        <hr class="hr-filter">
                                        <h4 data-property-id="merchant" data-type="1" class="my-1">Cửa hàng</h4>
                                        <div class="filter-text">
                                            <input type="text" placeholder="Chọn cửa hàng">
                                        </div>
                                        <div class="filter-list mCustomScrollbar _mCS_3" style="overflow: auto; height: 258px;">
                                            <div id="mCSB_3" class="mCustomScrollBox mCS-dark mCSB_vertical mCSB_inside" style="max-height: none;" tabindex="0">
                                                <div id="mCSB_3_container" class="mCSB_container" style="position:relative; top:0; left:0;" dir="ltr">
                                                    <div class="control-group">
                                                        <form action="{{route ('search')}}" method="post">
                                                            <label class="control control--checkbox custom-radio" data-value="1891">Lazada.vn
                                                                <span>(440)</span>
                                                                <input type="checkbox" name="cat" data-value="120" data-name="Sản phẩm cho bé">
                                                                <div class="control__indicator"></div>
                                                            </label>
                                                            <label class="control control--checkbox custom-radio" data-value="1891">Shoppe.vn
                                                                <span>(144)</span>
                                                                <input type="checkbox" name="cat" data-value="120" data-name="Sản phẩm cho bé">
                                                                <div class="control__indicator"></div>
                                                            </label>
                                                            <!-- <label class="control control--checkbox custom-radio" data-value="1891">Sendo.vn
                                                                <span>(15)</span>
                                                                <input type="checkbox" name="cat" data-value="120" data-name="Sản phẩm cho bé">
                                                                <div class="control__indicator"></div>
                                                            </label> -->
                                                            <label class="control control--checkbox custom-radio" data-value="1891">Tiki.vn
                                                                <span>(5)</span>
                                                                <input type="checkbox" name="cat" data-value="120" data-name="Sản phẩm cho bé">
                                                                <div class="control__indicator"></div>
                                                            </label>
                                                            <label class="control control--checkbox custom-radio" data-value="1891">Hasaki.vn
                                                                <span>(442)</span>
                                                                <input type="checkbox" name="cat" data-value="120" data-name="Sản phẩm cho bé">
                                                                <div class="control__indicator"></div>
                                                            </label>
                                                           <!--  <label class="control control--checkbox custom-radio" data-value="1891">Lotte.vn
                                                                <span>(44)</span>
                                                                <input type="checkbox" name="cat" data-value="120" data-name="Sản phẩm cho bé">
                                                                <div class="control__indicator"></div>
                                                            </label>
                                                            <label class="control control--checkbox custom-radio" data-value="1891">Shopmatmoc.com
                                                                <span>(144)</span>
                                                                <input type="checkbox" name="cat" data-value="120" data-name="Sản phẩm cho bé">
                                                                <div class="control__indicator"></div>
                                                            </label>
                                                            <label class="control control--checkbox custom-radio" data-value="1891">3cevietnam.com.vn
                                                                <span>(424)</span>
                                                                <input type="checkbox" name="cat" data-value="120" data-name="Sản phẩm cho bé">
                                                                <div class="control__indicator"></div>
                                                            </label>
                                                            <label class="control control--checkbox custom-radio" data-value="1891">Thegioiskinfood.vn
                                                                <span>(4)</span>
                                                                <input type="checkbox" name="cat" data-value="120" data-name="Sản phẩm cho bé">
                                                                <div class="control__indicator"></div>
                                                            </label> -->
                                                        </form>
                                                    </div>
                                                </div>
                                                <div id="mCSB_3_scrollbar_vertical" class="mCSB_scrollTools mCSB_3_scrollbar mCS-dark mCSB_scrollTools_vertical" style="display: block;">
                                                    <div class="mCSB_draggerContainer">
                                                        <div id="mCSB_3_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; display: block; height: 29px; max-height: 228px; top: 0px;" oncontextmenu="return false;">
                                                            <div class="mCSB_dragger_bar" style="line-height: 30px;"></div>
                                                        </div>
                                                        <div class="mCSB_draggerRail"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="filter-item">
                                        <hr class="hr-filter">
                                        <h4 data-property-id="price" data-type="7" class="my-1">Giá sản phẩm</h4>
                                        <div class="filter-list">
                                            <div class="control-group">
                                                <form action="#" method="post">
                                                    <label class="control control--radio custom-radio" data-value="1891">Dưới <strong>100K</strong>
                                                        <span>(696)</span>
                                                        <input type="radio" name="cat" data-value="120" data-name="Sản phẩm cho bé">
                                                        <div class="control__indicator"></div>
                                                    </label>
                                                    <label class="control control--radio custom-radio" data-value="1891">Từ <strong>100K</strong> - <strong>200K</strong>
                                                        <span>(169)</span>
                                                        <input type="radio" name="cat" data-value="120" data-name="Sản phẩm cho bé">
                                                        <div class="control__indicator"></div>
                                                    </label>
                                                    <label class="control control--radio custom-radio" data-value="1891">Từ <strong>200K</strong> - <strong>500K</strong>
                                                        <span>(69)</span>
                                                        <input type="radio" name="cat" data-value="120" data-name="Sản phẩm cho bé">
                                                        <div class="control__indicator"></div>
                                                    </label>
                                                    <label class="control control--radio custom-radio" data-value="1891">Từ <strong>500K</strong> - <strong>1 triệu</strong>
                                                        <span>(6)</span>
                                                        <input type="radio" name="cat" data-value="120" data-name="Sản phẩm cho bé">
                                                        <div class="control__indicator"></div>
                                                    </label>
                                                    <label class="control control--radio custom-radio" data-value="1891">Trên <strong>1 triệu</strong>
                                                        <span>(9)</span>
                                                        <input type="radio" name="cat" data-value="120" data-name="Sản phẩm cho bé">
                                                        <div class="control__indicator"></div>
                                                    </label>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /tags -->
                            </div>
                        </div>
                        <!-- /.col-lg-3 -->
                        <div class="col-lg-10">
                            <div class="row">
                                @foreach($product as $value)
                                <div class="col-lg-3 col-md-4 col-xs-12 col-sm-6 mb-4">
                                  
                                    <div class="card h-100">
                                      <a href="{{$value -> link}}">
                                        <img class="card-img-top" src="{{$value -> image}}" alt=""></a>
                                        
                                        <div class="card-body">
                                            
                                            <h4 class="card-title">
                                                <a href="{{$value -> link}}">{{$value ->product_name}}</a>
                                            </h4>
                                            <span class="final-price">{{$value -> price}}đ</span><span class="price-regular">{{$value ->cost}}đ</span><span class="sale-tag">-{{$value ->sale}}%</span>
                                            <p class="card-text"></p>
                                        </div>
                                                <div class="card-footer">
                                            <small class="text-muted">{{$value -> location}}</small>
                                            <img class="img-src" src="{{$value -> place_image}}">
                                        </div>
                                        </div>
                                    </div>
                                    @endforeach
                                   
                                    </div>
                                    <div class="row">{{ $product->appends(['key' => $key_search])->links() }}</div>
                                                                            </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
</div>
    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
