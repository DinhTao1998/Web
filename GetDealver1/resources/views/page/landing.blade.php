 @extends('master')
 @section('content')
 <section id="intro">
    <div class="intro-content">
      <h2>Welcome to GetDeal!</h2>
      <form action="{{route('search')}}" method="get" accept-charset="utf-8" style="width:100%" role="search" >
      <div class="search_bar" >
      <input class ="search" placeholder="Tìm kiếm sản phẩm..." type="search" name="key" focus="none" autofocus="true">
      <!-- <button class="btn-search" type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" width="49" height="40" viewBox="0 0 24 24">
                  <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
                </svg>
              </button> -->
      </div>
      </form>
         </div>
  </section>

  <!-- services -->
  <section id="section-services" class="section pad-bot30 bg-white">
    <div class="container">

           <div id="about-title">
            <h1>DANH MỤC SẢN PHẨM</h1>
        </div>
        <form action="{{route('search')}}" method="get" accept-charset="utf-8">
          @foreach($product_type as $product_type)
      <div class="col-lg-3 col-sm-6 col-md-4">
        <a href="">
                <div class="about-danhmuc-sanpham ">
                    <div>
                        <img class="about-danhmuc-sanpham-hinhanh" src="GetDeal/img/danhmuc/{{$product_type->image}}">
                    </div>
                    <div class="about-danhmuc-sanpham-text" >{{$product_type->product_type_name}}</div>
                </div>
            </a>
      </div>
      @endforeach
     <!--  <div class="col-lg-3 col-sm-6 col-md-4">
         <a href="">
                <div class="about-danhmuc-sanpham ">
                    <div>
                        <img class="about-danhmuc-sanpham-hinhanh" src="GetDeal/img/danhmuc/trangdiemmat.png">
                    </div>
                    <div class="about-danhmuc-sanpham-text" >Trang điểm mặt</div>
                </div>
            </a>
      </div>
      <div class="col-lg-3 col-sm-6 col-md-4">
         <a href="">
                <div class="about-danhmuc-sanpham ">
                    <div>
                        <img class="about-danhmuc-sanpham-hinhanh" src="GetDeal/img/danhmuc/mascara.png">
                    </div>
                    <div class="about-danhmuc-sanpham-text" >Trang điểm măt</div>
                </div>
            </a>
      </div>
      <div class="col-lg-3 col-sm-6 col-md-4">
         <a href="">
                <div class="about-danhmuc-sanpham ">
                    <div>
                        <img class="about-danhmuc-sanpham-hinhanh" src="GetDeal/img/danhmuc/nuochoa.png">
                    </div>
                    <div class="about-danhmuc-sanpham-text" >Nước hoa</div>
                </div>
            </a>
      </div>
      <div class="col-lg-3 col-sm-6 col-md-4">
         <a href="">
                <div class="about-danhmuc-sanpham ">
                    <div>
                        <img class="about-danhmuc-sanpham-hinhanh" src="GetDeal/img/danhmuc/serum.png">
                    </div>
                    <div class="about-danhmuc-sanpham-text" >Tinh dầu</div>
                </div>
            </a>
      </div>
      <div class="col-lg-3 col-sm-6 col-md-4">
         <a href="">
                <div class="about-danhmuc-sanpham ">
                    <div>
                        <img class="about-danhmuc-sanpham-hinhanh" src="GetDeal/img/danhmuc/thuoc.png">
                    </div>
                    <div class="about-danhmuc-sanpham-text" >Thực phẩm chức năng</div>
                </div>
            </a>
      </div>
      <div class="col-lg-3 col-sm-6 col-md-4">
         <a href="">
                <div class="about-danhmuc-sanpham ">
                    <div>
                        <img class="about-danhmuc-sanpham-hinhanh" src="GetDeal/img/danhmuc/suruamat.png">
                    </div>
                    <div class="about-danhmuc-sanpham-text" >Chăm sóc da mặt</div>
                </div>
            </a>
      </div>
      <div class="col-lg-3 col-sm-6 col-md-4">
         <a href="">
                <div class="about-danhmuc-sanpham ">
                    <div>
                        <img class="about-danhmuc-sanpham-hinhanh" src="GetDeal/img/danhmuc/body.png">
                    </div>
                    <div class="about-danhmuc-sanpham-text" >Chăm sóc cơ thể</div>
                </div>
            </a>
      </div>
      <div class="col-lg-3 col-sm-6 col-md-4">
         <a href="">
                <div class="about-danhmuc-sanpham ">
                    <div>
                        <img class="about-danhmuc-sanpham-hinhanh" src="GetDeal/img/danhmuc/hair.png">
                    </div>
                    <div class="about-danhmuc-sanpham-text" >Chăm sóc tóc</div>
                </div>
            </a>
      </div>
      <div class="col-lg-3 col-sm-6 col-md-4">
         <a href="">
                <div class="about-danhmuc-sanpham ">
                    <div>
                        <img class="about-danhmuc-sanpham-hinhanh" src="GetDeal/img/danhmuc/sample.png">
                    </div>
                    <div class="about-danhmuc-sanpham-text" >Sample-Kit</div>
                </div>
            </a>
      </div>
      <div class="col-lg-3 col-sm-6 col-md-4">
         <a href="">
                <div class="about-danhmuc-sanpham ">
                    <div>
                        <img class="about-danhmuc-sanpham-hinhanh" src="GetDeal/img/danhmuc/lamdep.png">
                    </div>
                    <div class="about-danhmuc-sanpham-text" >Phụ kiện làm đẹp</div>
                </div>
            </a>
      </div>
      <div class="col-lg-3 col-sm-6 col-md-4">
         <a href="">
                <div class="about-danhmuc-sanpham ">
                    <div>
                        <img class="about-danhmuc-sanpham-hinhanh" src="GetDeal/img/danhmuc/nam.png">
                    </div>
                    <div class="about-danhmuc-sanpham-text" >Chăm sóc cho nam</div>
                </div>
            </a>
      </div>
    </div> -->
    </form>
  </section>

  <!-- spacer section:testimonial -->
  <section id="testimonials" class="section" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="align-center">
            <div class="flexslider testimonials-slider">
              <ul class="slides">
                <li>
                  <div class="testimonial clearfix">
                    <div class="mar-bot20">
                      <img alt="" src="GetDeal/img/testimonial/testimonial1.jpg" class="img-circle" width="160px" height="160px">
                    </div>
                    <i class="fa fa-quote-left fa-5x"></i>
                    <h5>
												Bây giờ bạn chỉ cần ngồi tại nhà và nhấp chuột bạn có thể đưa tất cả các loại mỹ phẩm về nhà mà không cần tốn thời gian ra ngoài tiệm.
											</h5>
                    <br/>
                    <span class="author"><h3 style="color:white">&mdash; MUA SẮM TẠI NHÀ &mdash;<h3></span>
                  </div>
                </li>

                <li>
                  <div class="testimonial clearfix">
                    <div class="mar-bot20">
                      <img alt="" src="GetDeal/img/testimonial/testimonial2.png" class="img-circle" width="160px" height="160px">
                    </div>
                    <i class="fa fa-quote-left fa-5x"></i>
                    <h5>
												Tiết kiệm lên đến <span style="color:red;font-size:30px">50%</span> so với các sản phẩm cùng loại bên loại thị trường trong khi chất lượng vẫn ổn định.
												</h5>
                    <br/>
                    <span class="author"><h3 style="color:white">&mdash; GIÁ RẺ BẤT NGỜ &mdash;</h3> </span>
                  </div>
                </li>
                <li>
                  <div class="testimonial clearfix">
                    <div class="mar-bot20">
                      <img alt="" src="GetDeal/img/testimonial/testimonial3.png" class="img-circle" width="160px" height="160px">
                    </div>
                    <i class="fa fa-quote-left fa-5x"></i>
                    <h5>
											Chỉ cần vài cú nhấp chuột bạn có thể so sánh các loại mỹ phẩm mình đang dùng đề biết được đâu là nơi bán sản phẩm dễ nhất. Vừa giúp bạn tiết kiệm chi phí vừa giảm thời gian so sánh giữa các trang bán hàng.
											</h5>
                    <br/>
                    <span class="author"><h3 style="color:white">&mdash; NHANH CHÓNG TIỆN LỢI &mdash;</h3></span>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- about -->
  <section id="section-about" class="section appear clearfix">
    <div class="container">
    <!-- <div class="row mar-bot40"> -->
      <div class="row mar-bot40">
        <div class="col-md-offset-3 col-md-6">
          <div class="section-header">
            <h2 class="section-heading animated" data-animation="bounceInUp">GETDEAL</h2>
            <p>Làm thế nào để mua sắm tại GetDeal.</p>
          </div>
        </div>
      </div>
        <div class="col-lg-4">
          <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a mar-top20">
            <div class="float-left mar-right20">
              <a href="#" class="hi-icon hi-icon-screen">screen</a>
            </div>
          </div>
          <h3 class="text-bold">Tìm kiếm</h3>
          <p>Tìm kiếm sản phẩm bạn mong muốn mua.</p>

          <div class="clear"></div>
        </div>

        <div class="col-lg-4">
          <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a mar-top20">
            <div class="float-left mar-right20">
              <a href="#" class="hi-icon hi-icon-link">location</a>
            </div>
          </div>
          <h3 class="text-bold">Nhấp link</h3>
          <p>Nhấp vào link của chúng tôi và mua sắm trên website như bình thường.</p>

          <div class="clear"></div>
        </div>

        <div class="col-lg-4">
          <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a mar-top20">
            <div class="float-left mar-right20">
              <a href="#" class="hi-icon hi-icon-star">images</a>
            </div>
          </div>
          <h3 class="text-bold">Nhận ưu đãi</h3>
          <p>Nhận ngay ưu đãi cho các sản phẩm.</p>

          <div class="clear"></div>
        </div>
  
    </div>
  </section>
  <!-- /about -->

  <!-- spacer section:stats -->
  <section id="parallax1" class="section" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row appear stats">
        <div class="col-md-3">
          <div class="align-center color-white txt-shadow">
            <div class="icon">
              <i class="fa fa-user-circle fa-5x" width="60px" height="71px"></i>
            </div>
            <strong id="counter-coffee" class="number">500</strong><br>
            <span class="text">Lượt tham quan</span>
          </div>
        </div>
        <div class="col-md-3">
          <div class="align-center color-white txt-shadow">
            <div class="icon">
              <i class="fa fa-shopping-cart fa-5x"></i>
            </div>
            <strong id="counter-music" class="number">345</strong><br>
            <span class="text">Lượt mua hàng</span>
          </div>
        </div>
        <div class="col-md-3">
          <div class="align-center color-white txt-shadow">
            <div class="icon">
              <i class="fa fa-clock-o fa-5x"></i>
            </div>
            <strong id="counter-clock" class="number">1235</strong><br>
            <span class="text">Giờ</span>
          </div>
        </div>
        <div class="col-md-3">
          <div class="align-center color-white txt-shadow">
            <div class="icon">
              <i class="fa fa-heart fa-5x"></i>
            </div>
            <strong id="counter-heart" class="number">478</strong><br>
            <span class="text">Lượt yêu thích</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- section works -->
  <!-- <section id="section-works" class="section appear clearfix">
    <div class="container">

      <div class="row mar-bot40">
        <div class="col-md-offset-3 col-md-6">
          <div class="section-header">
            <h2 class="section-heading animated" data-animation="bounceInUp">Portfolio</h2>
            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet consectetur, adipisci velit, sed quia non numquam.</p>
          </div>
        </div>
      </div>

      <div class="row">
        <nav id="filter" class="col-md-12 text-center">
          <ul>
            <li><a href="#" class="current btn btn-small" data-filter="*">All</a></li>
            <li><a href="#" class="btn btn-small" data-filter=".webdesign">Web Design</a></li>
            <li><a href="#" class="btn btn-small" data-filter=".photography">Photography</a></li>
            <li><a href="#" class="btn btn-small" data-filter=".print">Print</a></li>
          </ul>
        </nav>
        <div class="col-md-12">
          <div class="row">
            <div class="portfolio-items isotopeWrapper clearfix" id="3">

              <article class="col-md-4 isotopeItem webdesign">
                <div class="portfolio-item">
                  <img src="img/portfolio/img1.jpg" alt="">
                  <div class="portfolio-desc align-center">
                    <div class="folio-info">
                      <h5><a href="#">Portfolio name</a></h5>
                      <a href="img/portfolio/img1.jpg" class="fancybox"><i class="fa fa-plus fa-2x"></i></a>
                    </div>
                  </div>
                </div>
              </article>

              <article class="col-md-4 isotopeItem photography">
                <div class="portfolio-item">
                  <img src="img/portfolio/img2.jpg" alt="">
                  <div class="portfolio-desc align-center">
                    <div class="folio-info">
                      <h5><a href="#">Portfolio name</a></h5>
                      <a href="img/portfolio/img2.jpg" class="fancybox"><i class="fa fa-plus fa-2x"></i></a>
                    </div>
                  </div>
                </div>
              </article>


              <article class="col-md-4 isotopeItem photography">
                <div class="portfolio-item">
                  <img src="img/portfolio/img3.jpg" alt="">
                  <div class="portfolio-desc align-center">
                    <div class="folio-info">
                      <h5><a href="#">Portfolio name</a></h5>
                      <a href="img/portfolio/img3.jpg" class="fancybox"><i class="fa fa-plus fa-2x"></i></a>
                    </div>
                  </div>
                </div>
              </article>

              <article class="col-md-4 isotopeItem print">
                <div class="portfolio-item">
                  <img src="img/portfolio/img4.jpg" alt="">
                  <div class="portfolio-desc align-center">
                    <div class="folio-info">
                      <h5><a href="#">Portfolio name</a></h5>
                      <a href="img/portfolio/img4.jpg" class="fancybox"><i class="fa fa-plus fa-2x"></i></a>
                    </div>
                  </div>
                </div>
              </article>

              <article class="col-md-4 isotopeItem photography">
                <div class="portfolio-item">
                  <img src="img/portfolio/img5.jpg" alt="">
                  <div class="portfolio-desc align-center">
                    <div class="folio-info">
                      <h5><a href="#">Portfolio name</a></h5>
                      <a href="img/portfolio/img5.jpg" class="fancybox"><i class="fa fa-plus fa-2x"></i></a>
                    </div>
                  </div>
                </div>
              </article>

              <article class="col-md-4 isotopeItem webdesign">
                <div class="portfolio-item">
                  <img src="img/portfolio/img6.jpg" alt="">
                  <div class="portfolio-desc align-center">
                    <div class="folio-info">
                      <h5><a href="#">Portfolio name</a></h5>
                      <a href="img/portfolio/img6.jpg" class="fancybox"><i class="fa fa-plus fa-2x"></i></a>
                    </div>
                  </div>
                </div>
              </article>

              <article class="col-md-4 isotopeItem print">
                <div class="portfolio-item">
                  <img src="img/portfolio/img7.jpg" alt="">
                  <div class="portfolio-desc align-center">
                    <div class="folio-info">
                      <h5><a href="#">Portfolio name</a></h5>
                      <a href="img/portfolio/img7.jpg" class="fancybox"><i class="fa fa-plus fa-2x"></i></a>
                    </div>
                  </div>
                </div>
              </article>

              <article class="col-md-4 isotopeItem photography">
                <div class="portfolio-item">
                  <img src="img/portfolio/img8.jpg" alt="">
                  <div class="portfolio-desc align-center">
                    <div class="folio-info">
                      <h5><a href="#">Portfolio name</a></h5>
                      <a href="img/portfolio/img8.jpg" class="fancybox"><i class="fa fa-plus fa-2x"></i></a>
                    </div>
                  </div>
                </div>
              </article>

              <article class="col-md-4 isotopeItem print">
                <div class="portfolio-item">
                  <img src="img/portfolio/img9.jpg" alt="">
                  <div class="portfolio-desc align-center">
                    <div class="folio-info">
                      <h5><a href="#">Portfolio name</a></h5>
                      <a href="img/portfolio/img9.jpg" class="fancybox"><i class="fa fa-plus fa-2x"></i></a>
                    </div>
                  </div>
                </div>
              </article>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section> -->
  <!-- <section id="clients" class="section clearfix bg-white">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-sm-2 align-center">
              <img alt="logo" src="img/clients/logo1.png">
            </div>

            <div class="col-sm-2 align-center">
              <img alt="logo" src="img/clients/logo2.png">
            </div>

            <div class="col-sm-2 align-center">
              <img alt="logo" src="img/clients/logo3.png">
            </div>

            <div class="col-sm-2 align-center">
              <img alt="logo" src="img/clients/logo4.png">
            </div>

            <div class="col-sm-2 align-center">
              <img alt="logo" src="img/clients/logo5.png">
            </div>
            <div class="col-sm-2 align-center">
              <img alt="logo" src="img/clients/logo6.png">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->

  <!-- map -->
 <!--  <section id="section-map" class="clearfix">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22864.11283411948!2d-73.96468908098944!3d40.630720240038435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbg!4v1540447494452" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
  </section> -->

  <!-- contact -->
  <section id="section-contact" class="section appear clearfix">
    <div class="container">

      <div class="row mar-bot40">
        <div class="col-md-offset-3 col-md-6">
          <div class="section-header">
            <h2 class="section-heading animated" data-animation="bounceInUp">Contact us</h2>
            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet consectetur, adipisci velit, sed quia non numquam.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="cform" id="contact-form">
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form action="" method="post" class="contactForm">

              <div class="field your-name form-group">
                <input type="text" name="name" placeholder="Your Name" class="cform-text" size="40" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                <div class="validation"></div>
              </div>
              <div class="field your-email form-group">
                <input type="text" name="email" placeholder="Your Email" class="cform-text" size="40" data-rule="email" data-msg="Please enter a valid email">
                <div class="validation"></div>
              </div>
              <div class="field subject form-group">
                <input type="text" name="subject" placeholder="Subject" class="cform-text" size="40" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                <div class="validation"></div>
              </div>

              <div class="field message form-group">
                <textarea name="message" class="cform-textarea" cols="40" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
                <div class="validation"></div>
              </div>

              <div class="send-btn">
                <input type="submit" value="SEND MESSAGE" class="btn btn-theme">
              </div>

            </form>
          </div>
        </div>
        <!-- ./span12 -->
      </div>

    </div>
  </section>
  @endsection