<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>GetDeal - Tìm kiếm sản phẩm</title>

    <!-- Bootstrap core CSS -->
    <link href="GetDeal/Home page/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="GetDeal/Home page/css/shop-homepage.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <!-- My css -->
    <link rel="stylesheet" type="text/css" href="GetDeal/Home page/css/gird.css">
    <link rel="stylesheet" type="text/css" href="GetDeal/Home page/css/card.css">
    <link rel="stylesheet" type="text/css" href="GetDeal/Home page/css/filter.css">
    <link rel="stylesheet" type="text/css" href="GetDeal/Home page/css/loading.css">
    <link rel="stylesheet" href="GetDeal/Home page/css/search_bar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --}}
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="GetDeal/Home page/js/modernizr-2.6.2.min.js"></script>

  </head>

  <body>
    <div id="demo-content">

    <div id="loader-wrapper">
      <div id="loader"></div>

      <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>

    </div>

    <!-- Navigation -->
    {{-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="padding-top: 6px;padding-bottom: 5.25px ;background-color: darkslateblue !important;
}
">
      <div class="container" height="60px">
        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2 hinh" style="">
        <a class="navbar-brand" href="#"><img  src="GetDeal/img/logo.png " height="38.75px" alt=""></a>
        </div>
        <div class="col-lg-4 col-md-7 col-sm-8 col-xs-8 thanhsearch" >
            <form action="{{route('search')}}" method="get" accept-charset="utf-8" role="search" >
      <div class="search_bar" focus="none" >
      <input class ="search" placeholder="Tìm kiếm sản phẩm..." type="search" name="key" focus="none" autofocus="true" value="{{$key_search}}" id="key_search">
      <button class="btn_search" type="submit"><i class="fa fa-search"></i></button>
      </div>
      </form>
        </div>
        <div style="max-width: 50px " class="nutmenu">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" style="width:40px">
          <span class="navbar-toggler-icon" style="margin-right: auto; margin-left: -8px"></span>
        </button>
    </div>
    <div class=" thanhmenu">
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto" style="margin-left:0px; width:100%">
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
    </div>
    </nav> --}}
    @include('header')


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

         {{--  <div class="row">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-10 col-md-12">
                            <div class="list-wrap">
                                <div class="list-header">
                                    <div class="search-result">
                                        <span>Có <b>{{$count}}</b> kết quả trong mỹ phẩm</span>
                                    </div>
                                    <div class="search-action">
                                        <div id="sortType">
                                            <label class="control">Sắp xếp :</label>
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
                    </div> --}}

          <div class="row">
            <div class="col-lg-2 col-md-3" style="margin-bottom: 30px; margin-top: 30px">
                <form action="{{route ('search1')}}" method="get">       
                            <a data-toggle = "collapse" href="#danhmucsanpham">               
                               <h4 class="my-1" style="float:left;width:90%">Danh mục</h4>
                               <div class="filter-down"><i class="fa fa-angle-down" style=""></i></div>
                            </a>
                            <div class="filter-warp ">
                                <div class="filter-inner">
                                    <div class="filter-item">
                                       {{--  <div class="filter-text">
                                            
                                        </div>
                                        <div class="filter-list mCustomScrollbar _mCS_1 scrollbar-filter style-3" style="overflow: auto; height:auto;" >
                                            <div id="mCSB_1" class="mCustomScrollBox mCS-dark mCSB_vertical mCSB_inside" style="max-height: none;" tabindex="0" >
                                                <div id="mCSB_1_container" class="mCSB_container" style="position: relative; top: 0px; left: 0px;" dir="ltr">
                                                    <div class="control-group scrollbar-filter collapse" id="danhmucsanpham" >
                                                        

                                                            @foreach($product_type as $pt)
                                                            <label class="control control--radio" data-value="1891">
                                                                <input class="checkvalue pro" type="radio" name="pro" value="{{$pt->id}}" data-name="{{$pt->product_type_name}}">{{$pt->product_type_name}}
                                                                <span></span>
                                                                <div class="control__indicator"></div>
                                                            </label>
                                                            @endforeach
                                                         <div class="force-overflow"></div>   
                                                       
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
                                            </div> --}}
                                            <div class="filter-list mCustomScrollbar _mCS_2" style="overflow: auto;" >
                                            <div id="mCSB_2" class="mCustomScrollBox mCS-dark mCSB_vertical mCSB_inside" style="max-height: none;" tabindex="0">
                                                <div id="mCSB_2_container" class="mCSB_container" style="position:relative; top:0; left:0;" dir="ltr">
                                                    <div class="control-group collapse"id="danhmucsanpham" >
                                                       
                                                           @foreach($product_type as $pt)
                                                            <label class="control control--radio" data-value="1891">
                                                                <input class="checkvalue pro" type="radio" name="pro" value="{{$pt->id}}" data-name="{{$pt->product_type_name}}">{{$pt->product_type_name}}
                                                                <span></span>
                                                                <div class="control__indicator"></div>
                                                            </label>
                                                            @endforeach
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
                                        <hr class="hr-filter" style="width:100%">
                                        <a data-toggle="collapse" href="#diachinoiban">
                                           <h4 data-property-id="region" data-type="4" class="my-1" style="float:left;width:90%">Địa chỉ nơi bán</h4>
                                           <div><i class="fa fa-angle-down" style=""></i></div>
                                        </a>
                                        <div class="filter-text">
                                            
                                        </div>
                                        <div class="filter-list mCustomScrollbar _mCS_2" style="overflow: auto;" >
                                            <div id="mCSB_2" class="mCustomScrollBox mCS-dark mCSB_vertical mCSB_inside" style="max-height: none;" tabindex="0">
                                                <div id="mCSB_2_container" class="mCSB_container" style="position:relative; top:0; left:0;" dir="ltr">
                                                    <div class="control-group collapse"id="diachinoiban" >
                                                       
                                                            @foreach($pr_location as $p)
                                                            <label class="control control--radio custom-radio" data-value="1891">{{$p->location}}
                                                                <span></span>
                                                                <input class="checkvalue local" type="radio" name="local" value="{{$p->location}}" data-name="{{$p->location}}">
                                                                <div class="control__indicator"></div>
                                                            </label>
                                                            @endforeach
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
                                        <hr class="hr-filter" style="width:100%">
                                        <a data-toggle="collapse" href="#cuahang" role ="button">
                                            <h4 data-property-id="merchant" data-type="1" class="my-1" style="float:left;width:90%">Cửa hàng</h4>
                                            <div><i class="fa fa-angle-down" style=""></i></div>
                                        </a>
                                        <div class="filter-text">
                                            
                                        </div>
                                        <div class="filter-list mCustomScrollbar _mCS_3" style="overflow: auto; ;">
                                            <div id="mCSB_3" class="mCustomScrollBox mCS-dark mCSB_vertical mCSB_inside" style="max-height: none;" tabindex="0">
                                                <div id="mCSB_3_container" class="mCSB_container" style="position:relative; top:0; left:0;" dir="ltr">
                                                    <div class="control-group collapse" id="cuahang">
                                                  @foreach ($place as $p)
                                                            <label class="control control--checkbox custom-radio" data-value="1891">{{$p->place_name}}
                                                                <span></span>
                                                                <input class="checkvalue place" type="checkbox" name="place" value="{{$p->id}}" data-value="{{$p->id}}}" data-name="{{$p->place_name}}">
                                                                <div class="control__indicator"></div>
                                                            </label>
                                                            @endforeach
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
                                        <hr class="hr-filter" style="width:100%">
                                        <a data-toggle="collapse" href="#giasanpham">
                                           <h4 data-property-id="price" data-type="7" class="my-1" style="float:left;width:90%">Giá sản phẩm</h4>
                                           <div><i class="fa fa-angle-down" style=""></i></div>
                                        </a>
                                        <div class="filter-list collapse" id="giasanpham">
                                            <div class="control-group">
                                                
                                                    <label class="control control--radio custom-radio" data-value="1891">Dưới <strong>100K</strong>
                                                        <span></span>
                                                        <input type="radio" name="price" data-value="120" data-name="Sản phẩm cho bé" value="1" class="checkvalue">
                                                        <div class="control__indicator"></div>
                                                    </label>
                                                    <label class="control control--radio custom-radio" data-value="1891">Từ <strong>100K</strong> - <strong>200K</strong>
                                                        <span></span>
                                                        <input type="radio" name="price" data-value="120" data-name="Sản phẩm cho bé" value="2" class="checkvalue">
                                                        <div class="control__indicator"></div>
                                                    </label>
                                                    <label class="control control--radio custom-radio" data-value="1891">Từ <strong>200K</strong> - <strong>500K</strong>
                                                        <span></span>
                                                        <input type="radio" name="price" data-value="120" data-name="Sản phẩm cho bé" value="3" class="checkvalue">
                                                        <div class="control__indicator"></div>
                                                    </label>
                                                    <label class="control control--radio custom-radio" data-value="1891">Từ <strong>500K</strong> - <strong>1 triệu</strong>
                                                        <span></span>
                                                        <input type="radio" name="price" data-value="120" data-name="Sản phẩm cho bé" value="4" class="checkvalue">
                                                        <div class="control__indicator"></div>
                                                    </label>
                                                    <label class="control control--radio custom-radio" data-value="1891">Trên <strong>1 triệu</strong>
                                                        <span></span>
                                                        <input type="radio" name="price" data-value="120" data-name="Sản phẩm cho bé" value="5" class="checkvalue">
                                                        <div class="control__indicator"></div>
                                                    </label>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <button type="submit">Lọc</button> --}}
                                </form>
                                <!-- /tags -->
                            </div>
                        </div>
                        <!-- /.col-lg-3 -->
                        <div class="col-lg-10 col-md-9 " >
                           <div class="row">
                            <div class="list-wrap" style="width: 100%">
                                <div class="list-header" style="height:auto">
                                    <div class="search-result col-lg-4 col-md-4" style="width: 100%">
                                        <span>Có <b>{{$count}}</b> sản phẩm được tìm thấy</span>
                                    </div>
                                    <div class="search-action col-lg-8 col-md-8" style="width: 100%">
                                        <div id="sortType">
                                            {{-- <label class="control">Sắp xếp :</label> --}}
                                            <label class="control control--radio"> Đáng quan tâm
                                                <input  class="checkvalue" type="radio" name="sort" data-name="Đáng quan tâm" data-value="1" value="1">
                                                <div class="control__indicator"></div>
                                            </label>
                                            <label class="control control--radio"> Giá tiền tăng &nbsp;↑
                                                <input class="checkvalue" type="radio" name="sort" data-name="Giá tiền tăng  ↑" data-value="2" value="2" checked>
                                                <div class="control__indicator"></div>
                                            </label>
                                            <label class="control control--radio"> Giá tiền giảm &nbsp;↓
                                                <input class="checkvalue" type="radio" name="sort" data-name="Giá tiền giảm " data-value="3" value="3">
                                                <div class="control__indicator"></div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="filtersearch">
                           {{--  <div class="row" >
                                @foreach($product as $value)
                                @if($value->cost!=null)
                                <div class="col-lg-3 col-md-6 col-xs-12 col-sm-6 mb-4">
                                  
                                    <div class="card h-100 grow">
                                      <a href="https://fast.accesstrade.com.vn/deep_link/5027165606269731203?url={{$value -> link}}">

                                        <div class="flash-sale-div"><h3 class="flash-sale">FLASH SALE</h3></div>
                                        <div class="card-img" style="height: 211.75px;">
                                          
                                            <img class="card-img-top" src="{{$value -> image}}" alt="" style="max-height:212px"></a>  
                                        </div>
                                        
                                        <div class="card-body">

                                            <h4 class="card-title">

                                                <a href="https://fast.accesstrade.com.vn/deep_link/5027165606269731203?url={{$value -> link}}" >{{$value ->product_name}}</a>
                                            </h4>
                                            <span class="final-price">{{number_format($value -> price)}}đ</span><span class="price-regular">{{$value ->cost}}đ</span><span class="sale-tag">-{{$value ->sale}}</span>
                                            <p class="card-text"></p>
                                        </div>
                                        <div class="card-footer">
                                            <small class="text-muted">{{$value -> location}}</small>
                                            <img class="img-src" src="{{$value -> place_image}}">
                                        </div>
                                        </div>
                                    </div>
                                   
                                    @else
                                    <div class="col-lg-3 col-md-6 col-xs-12 col-sm-6 mb-4">
                                  
                                    <div class="card h-100 grow">
                                      <a href="https://fast.accesstrade.com.vn/deep_link/5027165606269731203?url={{$value -> link}}">
                                        <div class="flash-sale-div"><h3 class="flash-sale">FLASH SALE</h3></div>
                                        <div class="card-img" style="height: 211.75px;">
                                            <img class="card-img-top" src="{{$value -> image}}" alt="" style="max-height:212px"></a>  
                                        </div>
                                        
                                        <div class="card-body">
                                            
                                            <h4 class="card-title">
                                                <a href="https://fast.accesstrade.com.vn/deep_link/5027165606269731203?url={{$value -> link}}" >{{$value ->product_name}}</a>
                                            </h4>
                                            <span class="final-price">{{number_format($value -> price)}}đ</span><span class="price-regular"></span><span class="sale-tag"></span>
                                            <p class="card-text"></p>
                                        </div>
                                                <div class="card-footer">
                                            <small class="text-muted">{{$value -> location}}</small>
                                            <img class="img-src" src="{{$value -> place_image}}">
                                        </div>
                                        </div>
                                    </div>
                                    @endif
                                    @endforeach
                                    </div>
                                    <div class="row link" style="width: 520px; margin-left: 225px; margin-right: -15px;">{!!$product->appends(['key' => $key_search])->links() !!}</div> --}}
                                    @include('page.result')
                                </div>
                                    {{-- <button id="button"  class="row" type="button" style="margin-left: auto; margin-right: auto;margin-bottom: 20px;display:none">Tải thêm</button> --}}
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
</div>
        
    <!-- Footer -->
   {{--  <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer> --}}
    @include('footer')

    <!-- Bootstrap core JavaScript -->
    <script src="GetDeal/Home page/vendor/jquery/jquery.min.js"></script>
    <script src="GetDeal/Home page/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>window.jQuery || document.write ('<script src="GetDeal/Home page/js/jquery-1.9.1.min.js"><\/script>')</script>
    <script src="GetDeal/Home page/js/main.js"></script>
       <script type="text/javascript">
        $(document).ready(function(){
         
         var search = $('.search').val();
         if(search=='')
         search='flag';
               $.get("ajax/filtersearch/"+search+"/flag/flag/1/2/3/4/flag/2",function(data){
                    $('#filtersearch').html(data);
                  });
            $('.checkvalue').change(function(){
                // var pro = $('[name="pro"]:radio:checked').val();
                // var flag = '1';
                var local = $('[name="local"]:radio:checked').val();
                if(local ==null)
                    local ="flag";
                var test = $('[name="place"]:checkbox:checked').val();
                var place = [];
                if(test==null)
              {
                place[0] = "1";
                place[1] = "2";
                place[2] = "3";
                place[3] = "4";
              }
              else
              {
                var checkbox = document.getElementsByName('place');
                for(var i=0; i<4;i++)
                {
                  if (checkbox[i].checked === true)
                  {
                    place[i]=checkbox[i].value;
                  }
                  else
                    place[i]='flag';
                }
              }
              // alert(place);

                var key = document.getElementById("key_search").value;
                if(key=="")
                    key="flag";
                var price = $('[name="price"]:radio:checked').val();
                if(price == null)
                    price="flag";
                // if( $('[name="pro"]:radio:checked').val() !=null)
                // {
                //     key = $('[name="pro"]:radio:checked').val();
                //     flag ='2';
                // }
                var key = $('[name="pro"]:radio:checked').val();
                if(key ==null)
                  key ="flag";
                var key_search = $('.search').val(); 
                if(key_search=='')
                    key_search='flag';
                var sort =$('[name="sort"]:radio:checked').val();
                $.get("ajax/filtersearch/"+key_search+"/"+key+"/"+local+"/"+place[0]+"/"+place[1]+"/"+place[2]+"/"+place[3]+"/"+price+"/"+sort,function(data){
                    $('#filtersearch').html(data);                 
                });
                 $.get("ajax/searchresult/"+key_search+"/"+key+"/"+local+"/"+place[0]+"/"+place[1]+"/"+place[2]+"/"+place[3]+"/"+price,function(data){
                    $('.search-result').html(data);                 
                });
                 // $('.link').hide();
            });
            $(document).load(function(){
               var search = $('.search').val();
               $.get("ajax/filtersearch/"+search+"/flag/flag/1/2/3/4/flag/1",function(data){
                    $('#filtersearch').html(data);
                  alert(search);});
            });
            // $('.search').change(function(){
            //   var key_search = $(this).val();
            //   $.get("result/"+key_search,function(data){
            //         $('#filtersearch').html(data);
            //    $.get("findresult/"+key_search,function(data){
            //         $('.search-result').html(data);
            //       });
            // });
            // });
            $('.pagination a').click(function(e){
           e.preventDefault();
           var page = $(this).attr('href');
           getPosts(page);
           $("html, body").animate({ scrollTop: 0 }, 2000);

       });
        });
        // $('.page-link').click(function(){
        //   var a = $(this).attr('href');
        //   alert(a);
        // });

 
       function getPosts(page)
       {
           $.ajax({
               type: "GET",
               url: page
           })
           .success(function(data) {
               $('#filtersearch').html(data);
           });
             
       }
        // $('#button').click(function(){
        //   var a= $('.pagination li.active + li a').attr('href');
        //   if(a)
        //   {
        //   $.get(a,function(data){
        //     document.getElementById('filtersearch').innerHTML += data;
        //   });
          
        //   $('ul.pagination').remove();
        //   $('ul.pagination').hide();
        //    }
        //    else
        //    {
        //     alert('Hết sản phẩm');
        //      // document.getElementByI('button').style.display = "none";
        //      $('#button').hide();
        //    }
          
        //     });
    </script>
  </body>
  

</html>
