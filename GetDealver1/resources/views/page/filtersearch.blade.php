
                            <div class="row">
                                @foreach($product as $value)
                                <div class="col-lg-3 col-md-4 col-xs-12 col-sm-6 mb-4">
                                  
                                    <div class="card h-100">
                                      <a href="{{$value -> link}}">
                                        <div class="card-img" style="height: 211.75px;">
                                            <img class="card-img-top" src="{{$value -> image}}" alt="" style="max-height:212px"></a>  
                                        </div>
                                        
                                        <div class="card-body">
                                            
                                            <h4 class="card-title">
                                                <a href="{{$value -> link}}" >{{$value ->product_name}}</a>
                                            </h4>
                                            <span class="final-price">{{$value -> price}}đ</span><span class="price-regular">{{$value ->cost}}đ</span><span class="sale-tag">-{{$value ->sale}}</span>
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

