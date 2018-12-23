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
    {{-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"> --}}
    <!-- My css -->
    <link rel="stylesheet" type="text/css" href="GetDeal/Home page/css/gird.css">
    <link rel="stylesheet" type="text/css" href="GetDeal/Home page/css/card.css">
    <link rel="stylesheet" type="text/css" href="GetDeal/Home page/css/filter.css">
    <link rel="stylesheet" href="GetDeal/Home page/css/search_bar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --}}
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="padding-top: 6px;padding-bottom: 5.25px ;background-color: darkslateblue !important;
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
                {{-- <span class="sr-only">(current)</span> --}}
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
                                        <span>Có <b>{{$count}}</b> kết quả trong mỹ phẩm</span>
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
                <form action="{{route ('search1')}}" method="get">
                            <h4 class="my-1">Danh mục sản phẩm</h4>
                            <div class="filter-warp">
                                <div class="filter-inner">
                                    <div class="filter-item">
                                        <div class="filter-text">
                                            
                                        </div>
                                        <div class="filter-list mCustomScrollbar _mCS_1 scrollbar-filter style-3" style="overflow: auto; height: 258px;" >
                                            <div id="mCSB_1" class="mCustomScrollBox mCS-dark mCSB_vertical mCSB_inside" style="max-height: none;" tabindex="0" >
                                                <div id="mCSB_1_container" class="mCSB_container" style="position: relative; top: 0px; left: 0px;" dir="ltr">
                                                    <div class="control-group scrollbar-filter">
                                                        

                                                            @foreach($product_type as $pt)
                                                            <label class="control control--radio" data-value="1891">
                                                                <input class="checkvalue pro" type="radio" name="pro" value="{{$pt->id}}" data-name="{{$pt->product_type_name}}">{{$pt->product_type_name}}
                                                                <span>(798)</span>
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
                                            </div>
                                        </div>
                                    </div>
                                    <div class="filter-item">
                                        <hr class="hr-filter">
                                        <h4 data-property-id="region" data-type="4" class="my-1">Địa chỉ nơi bán</h4>
                                        <div class="filter-text">
                                            
                                        </div>
                                        <div class="filter-list mCustomScrollbar _mCS_2" style="overflow: auto; ">
                                            <div id="mCSB_2" class="mCustomScrollBox mCS-dark mCSB_vertical mCSB_inside" style="max-height: none;" tabindex="0">
                                                <div id="mCSB_2_container" class="mCSB_container" style="position:relative; top:0; left:0;" dir="ltr">
                                                    <div class="control-group">
                                                       
                                                            @foreach($pr_location as $p)
                                                            <label class="control control--radio custom-radio" data-value="1891">{{$p->location}}
                                                                <span>(9424)</span>
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
                                        <hr class="hr-filter">
                                        <h4 data-property-id="merchant" data-type="1" class="my-1">Cửa hàng</h4>
                                        <div class="filter-text">
                                            
                                        </div>
                                        <div class="filter-list mCustomScrollbar _mCS_3" style="overflow: auto; ;">
                                            <div id="mCSB_3" class="mCustomScrollBox mCS-dark mCSB_vertical mCSB_inside" style="max-height: none;" tabindex="0">
                                                <div id="mCSB_3_container" class="mCSB_container" style="position:relative; top:0; left:0;" dir="ltr">
                                                    <div class="control-group">
                                                  @foreach ($place as $p)
                                                            <label class="control control--checkbox custom-radio" data-value="1891">{{$p->place_name}}
                                                                <span>(440)</span>
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
                                        <hr class="hr-filter">
                                        <h4 data-property-id="price" data-type="7" class="my-1">Giá sản phẩm</h4>
                                        <div class="filter-list">
                                            <div class="control-group">
                                                
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
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit">Lọc</button>
                                </form>
                                <!-- /tags -->
                            </div>
                        </div>
                        <!-- /.col-lg-3 -->
                        <div class="col-lg-10 "  id="filtersearch" >
                            <div class="row">
                                @foreach($product as $value)
                                @if($value->cost!=null)
                                <div class="col-lg-3 col-md-4 col-xs-12 col-sm-6 mb-4">
                                  
                                    <div class="card h-100 grow">
                                      <a href="{{$value -> link}}">
                                        <div class="card-img" style="height: 211.75px;">
                                            <img class="card-img-top" src="{{$value -> image}}" alt="" style="max-height:212px"></a>  
                                        </div>
                                        
                                        <div class="card-body">
                                            {{-- <div class="sale-tag-red">FLASH SALE</div> --}}
                                            <h4 class="card-title">
                                                <a href="{{$value -> link}}" >{{$value ->product_name}}</a>
                                            </h4>
                                            <span class="final-price">{{number_format($value -> price)}}đ</span><span class="price-regular">{{number_format($value ->cost)}}đ</span><span class="sale-tag">-{{$value ->sale}}</span>
                                            <p class="card-text"></p>
                                        </div>
                                        <div class="card-footer">
                                            <small class="text-muted">{{$value -> location}}</small>
                                            <img class="img-src" src="{{$value -> place_image}}">
                                        </div>
                                        </div>
                                    </div>
                                   
                                    @else
                                    <div class="col-lg-3 col-md-4 col-xs-12 col-sm-6 mb-4">
                                  
                                    <div class="card h-100 grow">
                                      <a href="{{$value -> link}}">
                                        <div class="card-img" style="height: 211.75px;">
                                            <img class="card-img-top" src="{{$value -> image}}" alt="" style="max-height:212px"></a>  
                                        </div>
                                        
                                        <div class="card-body">
                                            
                                            <h4 class="card-title">

                                                <a href="{{$value -> link}}" >{{$value ->product_name}}</a>
                                            </h4>
                                            <span class="final-price">{{number_format($value -> price)}}đ</span><span class="price-regular">{{$value ->cost}}</span><span class="sale-tag">{{$value ->sale}}</span>
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
    <script type="text/javascript">
        $(document).ready(function(){
            $('.checkvalue').change(function(){
                // var pro = $('[name="pro"]:radio:checked').val();
                var local = $('[name="local"]:radio:checked').val();
                if(local ==null)
                    local ="flag";
                var place = $('[name="place"]:checkbox:checked').val();
                if(place==null)
                place = "flag";
                var key = document.getElementById("key_search").value;
                if(key=="")
                    key="flag";
                $.get("ajax/filtersearch/"+key+"/"+local+"/"+place,function(data){
                    $('#filtersearch').html(data);                 
                });
                 $.get("ajax/searchresult/"+key+"/"+local+"/"+place,function(data){
                    $('.search-result').html(data);                 
                });
            });

        });
    </script>

  </body>
  

</html>
