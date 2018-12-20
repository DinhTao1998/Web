<!DOCTYPE html>
<html>

<head>
  <!-- BASICS -->
  <meta charset="utf-8">
  <title>GetDeal - Lựa chọn hàng đầu của sắc đẹp</title>
  <base href="{{ asset('')}}">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  {{-- <link rel="stylesheet" type="text/css" href="GetDeal/js/rs-plugin/css/settings.css" media="screen"> --}}
  <link rel="stylesheet" type="text/css" href="GetDeal/css/isotope.css" media="screen">
  <link rel="stylesheet" href="GetDeal/css/flexslider.css" type="text/css">
  <link rel="stylesheet" href="GetDeal/js/fancybox/jquery.fancybox.css" type="text/css" media="screen">


  <link rel="stylesheet" href="GetDeal/css/bootstrap.css">
  <link rel="stylesheet" href="GetDeal/css/search_bar.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700|Open+Sans:300,400,600,700">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <link rel="stylesheet" href="GetDeal/css/style.css">
  <!-- skin -->
  <link rel="stylesheet" href="GetDeal/skin/default.css">
  

  <!-- =======================================================
    Theme Name: Vlava
    Theme URL: https://bootstrapmade.com/vlava-free-bootstrap-one-page-template/
    Author: BootstrapMade.comintro-background
    Author URL: https://bootstrapmade.com
  ======================================================= -->

</head>

<body>
  @include('header')

    @yield('content')

 @include('footer')

  <!-- Javascript Library Files -->
  <script src="GetDeal/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  <script src="GetDeal/js/jquery.js"></script>
  <script src="GetDeal/js/jquery.easing.1.3.js"></script>
  <script src="GetDeal/js/bootstrap.min.js"></script>
  <script src="GetDeal/js/jquery.isotope.min.js"></script>
  <script src="GetDeal/js/jquery.nicescroll.min.js"></script>
  <script src="GetDeal/js/fancybox/jquery.fancybox.pack.js"></script>
  <script src="GetDeal/js/skrollr.min.js"></script>
  <script src="GetDeal/js/jquery.scrollTo.min.js"></script>
  <script src="GetDeal/js/jquery.localScroll.min.js"></script>
  <script src="GetDeal/js/stellar.js"></script>
  <script src="GetDeal/js/jquery.appear.js"></script>
  <script src="GetDeal/js/jquery.flexslider-min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="GetDeal/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="GetDeal/js/main.js"></script>
  <script type="text/javascript" charset="utf-8" >
    var flag =1;
    function change()
    {
     up();
     down()
    }
    function down(){
       $('.scrollup').animate(
      {
        top:'620px'},
        1000,
      );
    }
      function up()
    {
      $('.scrollup').animate(
      {
        top:'550px'},
        1000,
      );
      flag=2;
    }
    $('.scrollup').mouseover(function(){
      if(flag ==1)
      change();
    });
    // $('.scrollup').click(function(){
    //   $('.scrollup').stop(true);
    // });
    $('.scrollup').mousemove(function(){
      // $('.scrollup').stop(true)
      flag =1;

    });

  </script>

</body>


