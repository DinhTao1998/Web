 <div class="row" >
                                @foreach($product as $value)
                                @if($value->cost!=null)
                                <div class="col-lg-3 col-md-6 col-xs-12 col-sm-6 mb-4">
                                  
                                    <div class="card h-100 grow">
                                      <a href="https://fast.accesstrade.com.vn/deep_link/5027165606269731203?url={{$value -> link}}">

                                        {{-- <div class="flash-sale-div"><h3 class="flash-sale">FLASH SALE</h3></div> --}}
                                        <div class="card-img" style="height: 211.75px;">
                                          
                                            <img class="card-img-top" src="{{$value -> image}}" alt="" style="max-height:212px"></a>  
                                        </div>
                                        
                                        <div class="card-body">

                                            <h4 class="card-title">

                                                <a href="https://fast.accesstrade.com.vn/deep_link/5027165606269731203?url={{$value -> link}}" >{{$value ->product_name}}</a>
                                            </h4>
                                            <span class="final-price">{{number_format($value -> price)}}đ</span><span class="price-regular">{{$value ->cost}}đ</span><span class="sale-tag">-{{$value ->sale}}%</span>
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
                                        {{-- <div class="flash-sale-div"><h3 class="flash-sale">FLASH SALE</h3></div> --}}
                                        <div class="card-img" style="height: 211.75px;">
                                            <img class="card-img-top" src="{{$value -> image}}" alt="" style="max-height:212px"></a>  
                                        </div>
                                        
                                        <div class="card-body">
                                            
                                            <h4 class="card-title">
                                                <a href="https://fast.accesstrade.com.vn/deep_link/5027165606269731203?url={{$value -> link}}" >{{$value ->product_name}}</a>
                                            </h4>
                                            <span class="final-price">{{number_format($value -> price)}}đ</span><span class="price-regular">{{-- {{$value ->cost}} --}}</span><span class="sale-tag">{{-- {{$value ->sale}} --}}</span>
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
                                   <div class="row link" style="width: 520px; margin-left: 225px; margin-right: -15px;">{!! $product->links() !!}</div>
<script type="text/javascript">
        $(document).ready(function(){
            $('.pagination a').click(function(e){
           e.preventDefault();
           var page = $(this).attr('href');
           getPosts(page);
                     $("html, body").animate({ scrollTop: 0 }, 2000);
       });
        });

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
        
    </script>