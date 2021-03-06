<!DOCTYPE html>
<html lang="en">
  <head>
    <title>GET DEAL &mdash; Mua sắm theo cách của bạn</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <base href="{{asset('')}}">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700|Work+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="GetDeal/jobfinder/fonts/icomoon/style.css">

    <link rel="stylesheet" href="GetDeal/jobfinder/css/bootstrap.min.css">
    <link rel="stylesheet" href="GetDeal/jobfinder/css/magnific-popup.css">
    <link rel="stylesheet" href="GetDeal/jobfinder/css/jquery-ui.css">
    <link rel="stylesheet" href="GetDeal/jobfinder/css/owl.carousel.min.css">
    <link rel="stylesheet" href="GetDeal/jobfinder/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="GetDeal/jobfinder/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="GetDeal/jobfinder/css/animate.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">
    
    
    
    <link rel="stylesheet" href="GetDeal/jobfinder/fonts/flaticon/font/flaticon.css">
  
    <link rel="stylesheet" href="GetDeal/jobfinder/css/aos.css">

    <link rel="stylesheet" href="GetDeal/jobfinder/css/style.css">

     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    
  </head>
  <body>
  
  <div class="site-wrap">

    @include('landingpage.head')
  
    <div style="height: 113px;"></div>

    <div class="site-blocks-cover" style="background-image: url('GetDeal/jobfinder/images/nui.jpg');" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12" data-aos="fade">
            <h1>Bạn cần tìm gì?</h1>
            <form action="searchlanding" method="get" accept-charset="utf-8" role="search">
              <div class="row mb-3">
                <div class="col-md-9">
                  <div class="row">
                    <div class="col-md-6 mb-3 mb-md-0">
                      <input type="text" class="mr-3 form-control border-0 px-4" name="tensp" placeholder="Tên sản phẩm hoặc tên danh mục">
                    </div>
                    <div class="col-md-6 mb-3 mb-md-0">
                      <div class="input-wrap">
                        <span class="icon icon-room"></span>
                      <input type="text" class="form-control form-control-block search-input  border-0 px-4" id="autocomplete" placeholder="Tên sàn cung cấp" name="noiban" >
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <input type="submit" class="btn btn-search btn-primary btn-block" value="Search">
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <p class="small">Top tìm kiếm : <a href="#" class="category">Son môi</a> <a href="#" class="category">Kem nền</a><a href="#" class="category">Sữa rửa mặt</a><a href="#" class="category">Che khuyết điểm</a><a href="#" class="category">Mặt nạ</a></p>
                </div>
              </div>
              
            </form>
          </div>
        </div>
      </div>
    </div>
    

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2 class="mb-5">Danh mục phổ biến</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-md-4 col-lg-3 mb-3" data-aos="fade-up" data-aos-delay="100">
            <a href="search?key=dưỡng+da" class="h-100 feature-item">
              <span class="d-block icon  mb-3 text-primary"><img src="GetDeal/jobfinder/images/cream.png"></span>
             
              <h2>Làm sạch &amp dưỡng da </h2>
              <span class="counting">10,391</span>
            </a>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3 mb-3" data-aos="fade-up" data-aos-delay="300">
            <a href="search?key=phấn" class="h-100 feature-item">
              <span class="d-block icon  mb-3 text-primary"><img src="GetDeal/jobfinder/images/power.png"></span>
              <h2>Phấn &amp Kem trang điểm </h2>
              <span class="counting">1,021</span>
            </a>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3 mb-3" data-aos="fade-up" data-aos-delay="200">
            <a href="search?key=son" class="h-100 feature-item">
              <span class="d-block icon  mb-3 text-primary"><img src="GetDeal/jobfinder/images/lipstick.png"></span>
              <h2>Trang điểm môi</h2>
              <span class="counting">192</span>
            </a>
          </div>

          <div class="col-sm-6 col-md-4 col-lg-3 mb-3" data-aos="fade-up" data-aos-delay="400">
            <a href="search?key=mascara" class="h-100 feature-item">
              <span class="d-block icon  mb-3 text-primary"><img src="GetDeal/jobfinder/images/mascara.png"></span>
              <h2>Trang điểm vùng mắt</h2>
              <span class="counting">1,219</span>
            </a>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3 mb-3" data-aos="fade-up" data-aos-delay="500">
            <a href="search?key=nước+hoa+hồng" class="h-100 feature-item">
              <span class="d-block icon  mb-3 text-primary"><img src="GetDeal/jobfinder/images/lotion.png"></span>
              <h2>Xịt khoáng/Nước hoa hồng</h2>
              <span class="counting">482</span>
            </a>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3 mb-3" data-aos="fade-up" data-aos-delay="700">
            <a href="search?key=mặt+nạ" class="h-100 feature-item">
              <span class="d-block icon  mb-3 text-primary"><img src="GetDeal/jobfinder/images/face-mask.png"></span>
              <h2>Mặt nạ</h2>
              <span class="counting">291</span>
            </a>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3 mb-3" data-aos="fade-up" data-aos-delay="600">
            <a href="search?key=chăm+sóc+tóc" class="h-100 feature-item">
              <span class="d-block icon  mb-3 text-primary"><img src="GetDeal/jobfinder/images/hair.png"></span>
              <h2>Chăm sóc tóc</h2>
              <span class="counting">5,409</span>
            </a>
          </div>

          <div class="col-sm-6 col-md-4 col-lg-3 mb-3" data-aos="fade-up" data-aos-delay="800">
            <a href="search?key=toàn+thân" class="h-100 feature-item">
              <span class="d-block icon  mb-3 text-primary"><img src="GetDeal/jobfinder/images/soap.png"></span>
              <h2>Chăm sóc cơ thể<i> </i></h2>
              <span class="counting">329</span>
            </a>
          </div>
        </div>

      </div>
    </div>


    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-5 mb-md-0" data-aos="fade-up" data-aos-delay="100">
            <h2 class="mb-5 h3">Sản phẩm xem nhiều nhất</h2>
            <div class="rounded border jobs-wrap">

              <a href="job-single.html" class="job-item d-block d-md-flex align-items-center  border-bottom fulltime">
                <div class="company-logo blank-logo text-center text-md-left pl-3">
                  <img src="GetDeal/jobfinder/images/company_logo_blank.png" alt="Image" class="img-fluid mx-auto">
                </div>
                <div class="job-details h-100">
                  <div class="p-3 align-self-center">
                    <h3>Kem che khuyết điểm Maybelline </h3>
                    <div class="d-block d-lg-flex">
                      <!-- <div class="mr-3"><span class="icon-suitcase mr-1"></span>Lazada</div> -->
                      <div class="mr-3"><span class="icon-room mr-1"></span>Hồ Chí Minh</div>
                      <div><span class="icon-money mr-1"></span> 180000VND</div>
                    </div>
                  </div>
                </div>
                <div class="job-category align-self-center">
                  <div class="p-3">
                    <span class="text-info p-2 rounded border border-info">Shopee</span>
                  </div>
                </div>  
              </a>

              <a href="job-single.html" class="job-item d-block d-md-flex align-items-center freelance">
                <div class="company-logo blank-logo text-center text-md-left pl-3">
                  <img src="GetDeal/jobfinder/images/logo_1.png" alt="Image" class="img-fluid mx-auto">
                </div>
                <div class="job-details h-100">
                  <div class="p-3 align-self-center">
                    <h3>Bông tẩy trang Byphasse</h3>
                    <div class="d-block d-lg-flex">
                     <!--  <div class="mr-3"><span class="icon-suitcase mr-1"></span>Lazada</div> -->
                      <div class="mr-3"><span class="icon-room mr-1"></span>Hồ Chí Minh</div>
                      <div><span class="icon-money mr-1"></span> 180000VND</div>
                    </div>
                  </div>
                </div>
                <div class="job-category align-self-center">
                  <div class="p-3">
                    <!-- <span class="text-warning p-2 rounded border border-warning">Lazada</span> -->
                     <span class="text-info p-2 rounded border border-info">Tiki</span>
                  </div>
                </div>  
              </a>


              <a href="job-single.html" class="job-item d-block d-md-flex align-items-center freelance">
                <div class="company-logo blank-logo text-center text-md-left pl-3">
                  <img src="GetDeal/jobfinder/images/logo_1.png" alt="Image" class="img-fluid mx-auto">
                </div>
                <div class="job-details h-100">
                  <div class="p-3 align-self-center">
                    <h3>Sữa dưỡng ẩm Cetaphil</h3>
                    <div class="d-block d-lg-flex">
                     <!--  <div class="mr-3"><span class="icon-suitcase mr-1"></span>Lazada</div> -->
                      <div class="mr-3"><span class="icon-room mr-1"></span>Hồ Chí Minh</div>
                      <div><span class="icon-money mr-1"></span> 180000VND</div>
                    </div>
                  </div>
                </div>
                <div class="job-category align-self-center">
                  <div class="p-3">
                    <!-- <span class="text-warning p-2 rounded border border-warning">Lazada</span> -->
                     <span class="text-info p-2 rounded border border-info">Lazada</span>
                  </div>
                </div>  
              </a>


              <a href="job-single.html" class="job-item d-block d-md-flex align-items-center fulltime">
                <div class="company-logo blank-logo text-center text-md-left pl-3">
                  <img src="GetDeal/jobfinder/images/company_logo_blank.png" alt="Image" class="img-fluid mx-auto">
                </div>
                <div class="job-details h-100">
                  <div class="p-3 align-self-center">
                    <h3>Son môi BBIA Last Velet Ver3</h3>
                    <div class="d-block d-lg-flex">
                      <!-- <div class="mr-3"><span class="icon-suitcase mr-1"></span>Shopee</div> -->
                      <div class="mr-3"><span class="icon-room mr-1"></span>Hồ Chí Minh</div>
                      <div><span class="icon-money mr-1"></span> 120000VND</div>                    </div>
                  </div>
                </div>
                <div class="job-category align-self-center">
                  <div class="p-3">
                    <span class="text-info p-2 rounded border border-info">Hasaki</span>
                  </div>
                </div>  
              </a>

              <a href="job-single.html" class="job-item d-block d-md-flex align-items-center partime">
                <div class="company-logo blank-logo text-center text-md-left pl-3">
                  <img src="GetDeal/jobfinder/images/logo_2.png" alt="Image" class="img-fluid mx-auto">
                </div>
                <div class="job-details h-100">
                  <div class="p-3 align-self-center">
                    <h3> Phấn phủ Innisfree</h3>
                    <div class="d-block d-lg-flex">
                      <!-- <div class="mr-3"><span class="icon-suitcase mr-1"></span>Tiki</div> -->
                      <div class="mr-3"><span class="icon-room mr-1"></span>Hồ Chí Minh</div>
                      <div><span class="icon-money mr-1"></span> 200000VND</div>
                    </div>
                  </div>
                </div>
                <div class="job-category align-self-center">
                  <div class="p-3">
                    <!-- <span class="text-danger p-2 rounded border border-danger">Adayroi</span> -->
                     <span class="text-info p-2 rounded border border-info">Adayroi</span>
                  </div>
                </div>  
              </a>


            </div>

            <div class="col-md-12 text-center mt-5">
              <a href="#" class="btn load-more-btn rounded py-3 px-5"><span class="icon-plus-circle"></span>Xem thêm</a>
            </div>
          </div>

          <!-- Sản phẩm tiêu biểu -->
        <!--   <div class="col-md-4 block-16" data-aos="fade-up" data-aos-delay="200">
            <div class="d-flex mb-0">
              <h2 class="mb-5 h3 mb-0">Sản phẩm tiêu biểu</h2>
              <div class="ml-auto mt-1"><a href="#" class="owl-custom-prev">Prev</a> / <a href="#" class="owl-custom-next">Next</a></div>
            </div>

            <div class="nonloop-block-16 owl-carousel">

              <div class="border rounded p-4 bg-white">
                <h2 class="h5">Son môi BBIA Last Velet Ver3</h2>
                <p><span class="border border-warning rounded p-1 px-2 text-warning">Freelance</span></p>
                <p>
                  <span class="d-block"><span class="icon-suitcase"></span> Resto Bar</span>
                  <span class="d-block"><span class="icon-room"></span> Florida</span>
                  <span class="d-block"><span class="icon-money mr-1"></span> $55000 &mdash; 70000</span>
                </p>
                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi neque fugit tempora, numquam voluptate veritatis odit id, iste eum culpa alias, ut officiis omnis itaque ad, rem sunt doloremque molestias.</p>
              </div>

              <div class="border rounded p-4 bg-white">
                <h2 class="h5">Son môi BBIA Last Velet Ver3</h2>
                <p><span class="border border-warning rounded p-1 px-2 text-warning">Freelance</span></p>
                <p>
                  <span class="d-block"><span class="icon-suitcase"></span> Resto Bar</span>
                  <span class="d-block"><span class="icon-room"></span> Florida</span>
                  <span class="d-block"><span class="icon-money mr-1"></span> $55000 &mdash; 70000</span>
                </p>
                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus accusamus necessitatibus praesentium voluptate natus excepturi rerum, autem. Magnam laboriosam, quam sapiente laudantium iure sit ea! Tenetur, quasi, praesentium. Architecto, eum.</p>
              </div>

              <div class="border rounded p-4 bg-white">
                <h2 class="h5">Son môi BBIA Last Velet Ver3</h2>
                <p><span class="border border-warning rounded p-1 px-2 text-warning">Freelance</span></p>
                <p>
                  <span class="d-block"><span class="icon-suitcase"></span> Resto Bar</span>
                  <span class="d-block"><span class="icon-room"></span> Florida</span>
                  <span class="d-block"><span class="icon-money mr-1"></span> $55000 &mdash; 70000</span>
                </p>
                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus esse, quam consectetur ipsum quibusdam ullam ab nesciunt, doloribus voluptatum neque iure perspiciatis vel vero illo consequatur facilis, fuga nobis corporis.</p>
              </div>

              <div class="border rounded p-4 bg-white">
                <h2 class="h5">Son môi BBIA Last Velet Ver3</h2>
                <p><span class="border border-warning rounded p-1 px-2 text-warning">Freelance</span></p>
                <p>
                  <span class="d-block"><span class="icon-suitcase"></span> Resto Bar</span>
                  <span class="d-block"><span class="icon-room"></span> Florida</span>
                  <span class="d-block"><span class="icon-money mr-1"></span> $55000 &mdash; 70000</span>
                </p>
                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid at ipsum commodi hic, cum esse asperiores libero molestiae, perferendis consectetur assumenda iusto, dolorem nemo maiores magnam illo laborum sit, dicta.</p>
              </div>

            </div>

          </div> -->
        </div>
      </div>
    </div>
      
    <!-- Model Section -->
<!--     <div class="site-section" data-aos="fade">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 mb-5 mb-md-0">
              <div class="img-border">
                <img src="images/MODEL.jpg" alt="Image" class="img-fluid rounded">
              </div>
          </div>
          <div class="col-md-5 ml-auto">
            <div class="text-left mb-5 section-heading">
              <h2>Testimonies</h2>
            </div>
            <p class="mb-4 h5 font-italic lineheight1-5">&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, nisi Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit nobis magni eaque velit eum, id rem eveniet dolor possimus voluptas..&rdquo;</p>
            <p>&mdash; <strong class="text-black font-weight-bold">John Holmes</strong>, Marketing Strategist</p>
            
          </div>
        </div>
      </div>
    </div> -->


    <div class="site-blocks-cover inner-page" style="background-image: url('GetDeal/jobfinder/images/banner.jpg');" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-6 text-center" data-aos="fade">
            <h1 class="h3 mb-0">GET DEAL</h1>
            <p class="h3 text-white mb-5">Hãy Mua Theo Cách Của Bạn</p>
            <p><a href="contact.html" class="btn btn-outline-primary py-3 px-4">Liên hệ</a> <a href="categories.html" class="btn btn-primary py-3 px-4">Mua sắm</a></p>
            
          </div>
        </div>
      </div>
    </div>

    

    <div class="site-section site-block-feature bg-light">
      <div class="container">
        
        <div class="text-center mb-5 section-heading">
          <h2>GET DEAL - Mọi thứ trong tầm tay</h2>
        </div>

        <div class="d-block d-md-flex border-bottom row">
          <div class="text-center p-4 item border-right col-lg-6" data-aos="fade">
            <span class="flaticon-worker display-3 mb-3 d-block text-primary"></span>
            <h2 class="h4">Tiết kiệm thời gian </h2>
            <p> </p>
           <!--  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati reprehenderit explicabo quos fugit vitae dolorum.</p> -->
          </div>
          <div class="text-center p-4 item col-lg-6" data-aos="fade">
            <span class="flaticon-wrench display-3 mb-3 d-block text-primary"></span>
            <h2 class="h4">Giá luôn tốt nhất</h2>
            <p></p>

            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati reprehenderit explicabo quos fugit vitae dolorum.</p> -->
          </div>
        </div>
        <div class="d-block d-md-flex row">
          <div class="text-center p-4 item border-right col-lg-6" data-aos="fade">
            <span class="flaticon-stethoscope display-3 mb-3 d-block text-primary"></span>
            <h2 class="h4">Mua sắm nhanh chóng</h2>
            <p></p>

            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati reprehenderit explicabo quos fugit vitae dolorum.</p> -->

          </div>
          <div class="text-center p-4 item col-lg-6" data-aos="fade">
            <span class="flaticon-calculator display-3 mb-3 d-block text-primary"></span>
            <h2 class="h4">Hỗ trợ 24/7</h2>
            <p></p>

            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati reprehenderit explicabo quos fugit vitae dolorum.</p> -->
<!--             <p><a href="#">Read More <span class="icon-arrow-right small"></span></a></p> -->
          </div>
        </div>
      </div>
    </div>

    

<!-- =======================Bài đăng=================== -->
   <!--  <div class="site-section block-15">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2>Bài đăng gần đây</h2>
          </div>
        </div>


        <div class="nonloop-block-15 owl-carousel">
          

            <div class="media-with-text">
              <div class="img-border-sm mb-4">
                <a href="#" class="image-play">
                  <img src="images/img_1.jpg" alt="" class="img-fluid">
                </a>
              </div>
              <h2 class="heading mb-0 h5"><a href="#">Gợi ý sản phẩm se khít lỗ chân lông</a></h2>
              <span class="mb-3 d-block post-date">January 20, 2018 &bullet; By <a href="#">Josh Holmes</a></span>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolores culpa qui aliquam placeat nobis veritatis tempora natus rerum obcaecati.</p>
            </div>
          
            <div class="media-with-text">
              <div class="img-border-sm mb-4">
                <a href="#" class="image-play">
                  <img src="images/img_2.jpg" alt="" class="img-fluid">
                </a>
              </div>
              <h2 class="heading mb-0 h5"><a href="#">Dưỡng da thâm sạm</a></h2>
              <span class="mb-3 d-block post-date">January 20, 2018 &bullet; By <a href="#">Josh Holmes</a></span>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolores culpa qui aliquam placeat nobis veritatis tempora natus rerum obcaecati.</p>
            </div>
          
            <div class="media-with-text">
              <div class="img-border-sm mb-4">
                <a href="#" class="image-play">
                  <img src="images/img_3.jpg" alt="" class="img-fluid">
                </a>
              </div>
              <h2 class="heading mb-0 h5"><a href="#">5 tip phối đồ ực chất</a></h2>
              <span class="mb-3 d-block post-date">January 20, 2018 &bullet; By <a href="#">Josh Holmes</a></span>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolores culpa qui aliquam placeat nobis veritatis tempora natus rerum obcaecati.</p>
            </div>

            <div class="media-with-text">
              <div class="img-border-sm mb-4">
                <a href="#" class="image-play">
                  <img src="images/img_1.jpg" alt="" class="img-fluid">
                </a>
              </div>
              <h2 class="heading mb-0 h5"><a href="#">Jobs are made easy</a></h2>
              <span class="mb-3 d-block post-date">January 20, 2018 &bullet; By <a href="#">Josh Holmes</a></span>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolores culpa qui aliquam placeat nobis veritatis tempora natus rerum obcaecati.</p>
            </div>
          
            <div class="media-with-text">
              <div class="img-border-sm mb-4">
                <a href="#" class="image-play">
                  <img src="images/img_2.jpg" alt="" class="img-fluid">
                </a>
              </div>
              <h2 class="heading mb-0 h5"><a href="#">Jobs are made easy</a></h2>
              <span class="mb-3 d-block post-date">January 20, 2018 &bullet; By <a href="#">Josh Holmes</a></span>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolores culpa qui aliquam placeat nobis veritatis tempora natus rerum obcaecati.</p>
            </div>
          
            <div class="media-with-text">
              <div class="img-border-sm mb-4">
                <a href="#" class="image-play">
                  <img src="images/img_3.jpg" alt="" class="img-fluid">
                </a>
              </div>
              <h2 class="heading mb-0 h5"><a href="#">Jobs are made easy</a></h2>
              <span class="mb-3 d-block post-date">January 20, 2018 &bullet; By <a href="#">Josh Holmes</a></span>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolores culpa qui aliquam placeat nobis veritatis tempora natus rerum obcaecati.</p>
            </div>
            
            <div class="media-with-text">
              <div class="img-border-sm mb-4">
                <a href="#" class="image-play">
                  <img src="images/img_1.jpg" alt="" class="img-fluid">
                </a>
              </div>
              <h2 class="heading mb-0 h5"><a href="#">Jobs are made easy</a></h2>
              <span class="mb-3 d-block post-date">January 20, 2018 &bullet; By <a href="#">Josh Holmes</a></span>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolores culpa qui aliquam placeat nobis veritatis tempora natus rerum obcaecati.</p>
            </div>
          
            <div class="media-with-text">
              <div class="img-border-sm mb-4">
                <a href="#" class="image-play">
                  <img src="images/img_2.jpg" alt="" class="img-fluid">
                </a>
              </div>
              <h2 class="heading mb-0 h5"><a href="#">Jobs are made easy</a></h2>
              <span class="mb-3 d-block post-date">January 20, 2018 &bullet; By <a href="#">Josh Holmes</a></span>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolores culpa qui aliquam placeat nobis veritatis tempora natus rerum obcaecati.</p>
            </div>
          
            <div class="media-with-text">
              <div class="img-border-sm mb-4">
                <a href="#" class="image-play">
                  <img src="images/img_3.jpg" alt="" class="img-fluid">
                </a>
              </div>
              <h2 class="heading mb-0 h5"><a href="#">Jobs are made easy</a></h2>
              <span class="mb-3 d-block post-date">January 20, 2018 &bullet; By <a href="#">Josh Holmes</a></span>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolores culpa qui aliquam placeat nobis veritatis tempora natus rerum obcaecati.</p>
            </div>
        </div>

        <div class="row">
          
        </div>
      </div>
    </div> -->
    


    
 <!--    <footer class="site-footer">
      <div class="container">
        

        <div class="row">
          <div class="col-md-4">
            <h3 class="footer-heading mb-4 text-white">Giới thiệu</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat quos rem ullam, placeat amet.</p>
            <p><a href="#" class="btn btn-primary pill text-white px-4">Read More</a></p>
          </div>
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-6">
                <h3 class="footer-heading mb-4 text-white">Quick Menu</h3>
                  <ul class="list-unstyled">
                    <li><a href="#">About</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Approach</a></li>
                    <li><a href="#">Sustainability</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="#">Careers</a></li>
                  </ul>
              </div>
              <div class="col-md-6">
                <h3 class="footer-heading mb-4 text-white">Categories</h3>
                  <ul class="list-unstyled">
                    <li><a href="#">Full Time</a></li>
                    <li><a href="#">Freelance</a></li>
                    <li><a href="#">Temporary</a></li>
                    <li><a href="#">Internship</a></li>
                  </ul>
              </div>
            </div>
          </div>

          
          <div class="col-md-2">
            <div class="col-md-12"><h3 class="footer-heading mb-4 text-white">Social Icons</h3></div>
              <div class="col-md-12">
                <p>
                  <a href="#" class="pb-2 pr-2 pl-0"><span class="icon-facebook"></span></a>
                  <a href="#" class="p-2"><span class="icon-twitter"></span></a>
                  <a href="#" class="p-2"><span class="icon-instagram"></span></a>
                  <a href="#" class="p-2"><span class="icon-vimeo"></span></a>

                </p>
              </div>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
         <!--    Copyright &copy; <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All Rights Reserved | This template is made with <i class="icon-heart text-warning" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a> -->
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  <!--           </p>
          </div>
          
        </div>
      </div>
    </footer> -->

    <!-- Footer -->
<footer class="page-footer font-small mdb-color lighten-3 pt-4 footer-bg-color">

    <!-- Footer Links -->
    <div class="container text-center text-md-left row footer-des" style="margin:auto;color:white">

      <!-- Grid row -->
      <!-- <div class="row footer-des"> -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-3 col-sm-12 mr-auto my-md-4 my-0 mt-4 mb-1">

          <!-- Content -->
          <h5 class="font-weight-bold text-uppercase mb-4">Giới thiệu</h5>
          <p>GET DEAL</p>
            <p> Giá tốt trong tầm tay </p>
        </div>
       

        <div class="col-md-3 col-lg-3 col-sm-12 text-center mx-auto my-4">
        </div>

        <hr class="clearfix w-100 d-md-none">

        <div class="col-md-3 col-lg-3 col-sm-12 mx-auto my-md-4 my-0 mt-4 mb-1">

          <!-- Contact details -->
          <h5 class="font-weight-bold text-uppercase mb-4">Liên hệ</h5>

          <ul class="list-unstyled" style="margin-left: -15px;">
            <li>
              <p>
                <i class="fa fa-home mr-3"></i> Đại học Công nghệ thông tin</p>
            </li>
            <li>
              <p>
                <i class="fa fa-envelope mr-3"></i>getdeal.hotro@gmail.com</p>
            </li>
            <li>
              <p>
                <i class="fa fa-phone mr-3"></i> +84 38565656565</p>
            </li>
            <li>
              <p>
                <i class="fa fa-print mr-3"></i> +84 99 551 2184</p>
            </li>
          </ul>

        </div>

        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-md-3 col-lg-3 col-sm-12 text-center mx-auto my-4">

          <!-- Social buttons -->
          <h5 class="font-weight-bold text-uppercase mb-4">Theo dõi</h5>

          <ul class="list-unstyled" style="margin-left: -15px;">
            <li>
              <p>
                <a href="#">
                  <i class="fab fa-facebook-square"></i>
                </a>
              </p>
            </li>
            <li>
              <p>
                <a href="#">
                  <i class="fab fa-google"></i>
                </a>
              </p>
            </li>
            <li>
              <p>
                <a href="#">
                  <i class="fab fa-instagram"></i>
                </a>
              </p>
            </li>
            <li>
              <p>
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </p>
            </li>
          </ul>

          
        </div>
        <!-- Grid column -->

   <!--    </div> -->
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3" style="background: black;color:white">© 2018 Copyright:
      GETDEAL-TEAM <i class="icon-heart text-warning" aria-hidden="true"></i>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->
</body>
  </div>

  <script src="GetDeal/jobfinder/js/jquery-3.3.1.min.js"></script>
  <script src="GetDeal/jobfinder/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="GetDeal/jobfinder/js/jquery-ui.js"></script>
  <script src="GetDeal/jobfinder/js/popper.min.js"></script>
  <script src="GetDeal/jobfinder/js/bootstrap.min.js"></script>
  <script src="GetDeal/jobfinder/js/owl.carousel.min.js"></script>
  <script src="GetDeal/jobfinder/js/jquery.stellar.min.js"></script>
  <script src="GetDeal/jobfinder/js/jquery.countdown.min.js"></script>
  <script src="GetDeal/jobfinder/js/jquery.magnific-popup.min.js"></script>
  <script src="GetDeal/jobfinder/js/bootstrap-datepicker.min.js"></script>
  <script src="GetDeal/jobfinder/js/aos.js"></script>

  
  <script src="GetDeal/jobfinder/js/mediaelement-and-player.min.js"></script>

  <script src="GetDeal/jobfinder/js/main.js"></script>
    

  <script>
      document.addEventListener('DOMContentLoaded', function() {
                var mediaElements = document.querySelectorAll('video, audio'), total = mediaElements.length;

                for (var i = 0; i < total; i++) {
                    new MediaElementPlayer(mediaElements[i], {
                        pluginPath: 'https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/',
                        shimScriptAccess: 'always',
                        success: function () {
                            var target = document.body.querySelectorAll('.player'), targetTotal = target.length;
                            for (var j = 0; j < targetTotal; j++) {
                                target[j].style.visibility = 'visible';
                            }
                  }
                });
                }
            });
    </script>


    <script>
      // This example displays an address form, using the autocomplete feature
      // of the Google Places API to help users fill in the information.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      var placeSearch, autocomplete;
      var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
      };

      function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
            {types: ['geocode']});

        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);
      }

      function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();

        for (var component in componentForm) {
          document.getElementById(component).value = '';
          document.getElementById(component).disabled = false;
        }

        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
          var addressType = place.address_components[i].types[0];
          if (componentForm[addressType]) {
            var val = place.address_components[i][componentForm[addressType]];
            document.getElementById(addressType).value = val;
          }
        }
      }

      // Bias the autocomplete object to the user's geographical location,
      // as supplied by the browser's 'navigator.geolocation' object.
      function geolocate() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
              center: geolocation,
              radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
          });
        }
      }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&libraries=places&callback=initAutocomplete"
        async defer></script>




  </body>
</html>