<!DOCTYPE html>
<html lang="en">
<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home - 부모페이지</title>

  <!-- PLUGINS CSS STYLE -->
  <link href="plugins/jquery-ui/jquery-ui.css" rel="stylesheet">
  <link href="plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="plugins/rs-plugin/css/settings.css" media="screen">
  <link rel="stylesheet" type="text/css" href="plugins/selectbox/select_option1.css">
  <link rel="stylesheet" type="text/css" href="plugins/owl-carousel/owl.carousel.css" media="screen">
  <link rel="stylesheet" type="text/css" href="plugins/isotope/jquery.fancybox.css">
  <link rel="stylesheet" type="text/css" href="plugins/isotope/isotope.css">

  <!-- GOOGLE FONT -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Dosis:400,300,600,700" rel="stylesheet" type="text/css">
  <!-- CUSTOM CSS -->
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="css/colors/default.css" id="option_color">

  <!-- Icons -->
  <link rel="shortcut icon" href="img/favicon.png">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

<body class="body-wrapper">

  <div class="main-wrapper">
    <!-- HEADER -->
    <header id="pageTop" class="header-wrapper">
      <!-- COLOR BAR -->
      <div class="container-fluid color-bar top-fixed clearfix">
        <div class="row">
          <div class="col-sm-1 col-xs-2 bg-color-1">fix bar</div>
          <div class="col-sm-1 col-xs-2 bg-color-2">fix bar</div>
          <div class="col-sm-1 col-xs-2 bg-color-3">fix bar</div>
          <div class="col-sm-1 col-xs-2 bg-color-4">fix bar</div>
          <div class="col-sm-1 col-xs-2 bg-color-5">fix bar</div>
          <div class="col-sm-1 col-xs-2 bg-color-6">fix bar</div>
          <div class="col-sm-1 bg-color-1 hidden-xs">fix bar</div>
          <div class="col-sm-1 bg-color-2 hidden-xs">fix bar</div>
          <div class="col-sm-1 bg-color-3 hidden-xs">fix bar</div>
          <div class="col-sm-1 bg-color-4 hidden-xs">fix bar</div>
          <div class="col-sm-1 bg-color-5 hidden-xs">fix bar</div>
          <div class="col-sm-1 bg-color-6 hidden-xs">fix bar</div>
        </div>
      </div>

      <!-- TOP INFO BAR -->
      <div class="top-info-bar bg-color-7 hidden-xs">
        <div class="container">
          <div class="row">
            <div class="col-sm-7">
              <ul class="list-inline topList">
                <li><a href="" style="color:white;">안녕하세요,{{ Auth::user()->name }} {{ session('positionName') }}!!</a></li>
              </ul>
            </div>
            <div class="col-sm-5">
              <ul class="list-inline functionList">
                <li style="margin-left:180px;">
                  <a href="{{ route('sessions.destroy') }}" style="font-size:large; color:white;" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                   Logout</a>

                  <form id="logout-form" action="{{ route('sessions.destroy') }}" method="POST" style="display: none;">
                     {{ csrf_field() }}
                  </form>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- NAVBAR -->
      <nav id="menuBar" class="navbar navbar-default lightHeader" role="navigation">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index-v2.html"><img src="{{ asset('img/temp_logo.png')}}" ></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-right">

              <li class=" dropdown megaDropMenu color-2">
                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="300"
                data-close-others="true" aria-expanded="false">
                  <i class="fa fa-file-text-o bg-color-2" aria-hidden="true"></i>
                  <span>I-Check</span>
                </a>
              </li>

              <li class="dropdown singleDrop color-4">
                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-pencil-square-o bg-color-4" aria-hidden="true"></i>
                  <span>관찰일지</span>
                </a>
              </li>


              <li class="dropdown singleDrop color-5">
                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-calendar bg-color-5" aria-hidden="true"></i>
                  <span>앨범</span>
                </a>
              </li>

              <li class="dropdown singleDrop color-6">
                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                 aria-expanded="false"><i class="fa fa-gg bg-color-6" aria-hidden="true"></i> <span>공지사항</span></a>
                <ul class="dropdown-menu dropdown-menu-right">
                  <li><a href="accordion-toggles.html">유치원 일정</a></li>
                  <li><a href="tabs-dropdown.html">공지사항</a></li>
                </ul>
              </li>
            </ul>
          </div>

        </div>
      </nav>
    </header>

    <!-- BANNER -->
    <section class="bannercontainer bannercontainerV2">
      <div class="fullscreenbanner-container">
        <div class="fullscreenbanner">
          <ul>
            <li data-transition="fade" data-slotamount="5" data-masterspeed="300" data-title="kidz_slide_2">
              <img src="img/home/sliderV2/slider-bg1.png"  alt="slidebg" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="repeat">
               <div class="slider-caption container">

                <!-- LAYER NR. 1 -->
               <div class="tp-caption rs-caption-1 sft"
                  data-hoffset="0"
                  data-y="170"
                  data-speed="1100"
                  data-start="1100"
                  data-easing="Back.easeInOut"
                  data-endspeed="300"
                  style="z-index: 5;">
                   {{ $childInfo->cName }} <span>&nbsp;원아</span>
                </div>

                <!-- LAYER NR. 2 -->
               <div class="tp-caption rs-caption-2 sft"
                  data-hoffset="0"
                  data-y="245"
                  data-speed="1800"
                  data-start="2000"
                  data-easing="Back.easeInOut"
                  data-endspeed="300"
                  data-endeasing="Power1.easeIn"
                  data-captionhidden="off"
                  style="z-index: 5;">
                  오늘은 {{ $childInfo->cName }} 어린이가 어떤 활동을 할까요?
                </div>

                <!-- LAYER NR. 3 -->
                <div class="tp-caption rs-caption-3 sft"
                  data-hoffset="0"
                  data-y="355"
                  data-speed="2000"
                  data-start="3000"
                  data-easing="Power4.easeOut"
                  data-endspeed="300"
                  data-endeasing="Power1.easeIn"
                  data-captionhidden="off"
                  style="z-index: 5;">
                  <a href="#" class="btn btn-primary">계획안 보러가기</a>
                </div>

                <!-- LAYER NR. 4 -->
                <div class="tp-caption tp-resizeme sft stt "
                  data-x="right"
                  data-hoffset="0"
                  data-y="100"
                  data-speed="350"
                  data-easing="Power1.easeIn"
                  data-endeasing="Power1.easeInOut"
                  data-endspeed="200"
                  style="z-index: 2;">
                  <img class="img-circle" src="./img/child/{{ $childInfo->imgName }}" alt="caption" width="405" height="417" style="margin-right:100px;">
                </div>

                <!-- LAYER NR. 5 -->
               <div class="tp-caption tp-resizeme start"
                  data-x="170"
                  data-y="34"
                  data-speed="3000"
                  data-easing="Elastic.easeInOut"
                  data-endspeed="300"
                  style="z-index: 1;">
                  <img src="img/home/sliderV2/caption8.png" alt="caption" width="71" height="82">
                </div>

                <!-- LAYER NR. 6 -->
               <div class="tp-caption tp-resizeme sfl stl"
                  data-x="left"
                  data-hoffset="-90"
                  data-y="100"
                  data-speed="3000"
                  data-easing="Elastic.easeInOut"
                  data-endspeed="300"
                  style="z-index: 1;">
                  <img src="img/home/sliderV2/caption6.png" alt="caption" width="51" height="59">
                </div>

                <!-- LAYER NR. 7 -->
               <div class="tp-caption tp-resizeme start"
                  data-x="left"
                  data-hoffset="-70"
                  data-y="bottom"
                  data-voffset="-170"
                  data-speed="3000"
                  data-easing="Elastic.easeInOut"
                  data-endspeed="300"
                  style="z-index: 1;">
                  <img src="img/home/sliderV2/caption9.png" alt="caption" width="77" height="50">
                </div>

                <!-- LAYER NR. 8 -->
               <div class="tp-caption tp-resizeme start"
                  data-x="center"
                  data-y="center"
                  data-voffset="100"
                  data-speed="3000"
                  data-easing="Elastic.easeInOut"
                  data-endspeed="300"
                  style="z-index: 1;">
                  <img src="img/home/sliderV2/caption12.png" alt="caption" width="66" height="55">
                </div>

                <!-- LAYER NR. 9 -->
               <div class="tp-caption tp-resizeme sfr str"
                  data-x="right"
                  data-hoffset="-270"
                  data-y="34"
                  data-speed="3000"
                  data-easing="Elastic.easeInOut"
                  data-endspeed="300"
                  style="z-index: 1;">
                  <img src="img/home/sliderV2/caption13.png" alt="caption" width="65" height="65">
                </div>

                <!-- LAYER NR. 10 -->
                <div class="tp-caption tp-resizeme sfr str"
                  data-x="right"
                  data-hoffset="-70"
                  data-y="100"
                  data-speed="3000"
                  data-easing="Elastic.easeInOut"
                  data-endspeed="300"
                  style="z-index: 1;">
                  <img src="img/home/sliderV2/caption10.png" alt="caption" width="73" height="56">
                </div>

                <!-- LAYER NR. 11 -->
               <div class="tp-caption tp-resizeme sfb stb"
                  data-x="right"
                  data-hoffset="-70"
                  data-y="bottom"
                  data-voffset="-170"
                  data-speed="3000"
                  data-easing="Elastic.easeInOut"
                  data-endspeed="300"
                  style="z-index: 1;">
                  <img src="img/home/sliderV2/caption11.png" alt="caption" width="61" height="67">
                </div>

              </div>
            </li>
            <!-- <li data-transition="fade" data-slotamount="5" data-masterspeed="300" data-title="kidz_slide_2">
              <img src="img/home/sliderV2/slider-bg1.png"  alt="slidebg" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="repeat">
              <div class="slider-caption container"> -->



                <!-- LAYER NR. 2 -->
                <!-- <div class="tp-caption rs-caption-2 sft"
                  data-hoffset="0"
                  data-y="245"
                  data-speed="500"
                  data-start="500"
                  data-easing="Back.easeInOut"
                  data-endspeed="300"
                  data-endeasing="Power1.easeIn"
                  data-captionhidden="off"
                  style="z-index: 5;">
                  등록된 원아가 없습니다
                </div> -->

                <!-- LAYER NR. 3 -->
                <!-- <div class="tp-caption rs-caption-3 sft"
                  data-hoffset="0"
                  data-y="355"
                  data-speed="800"
                  data-start="1000"
                  data-easing="Power4.easeOut"
                  data-endspeed="300"
                  data-endeasing="Power1.easeIn"
                  data-captionhidden="off"
                  style="z-index: 5;">
                  <a href="{{ route('children.create') }}" class="btn btn-primary">원아 등록하기</a>
                </div> -->


                <!-- LAYER NR. 5 -->
                <!-- <div class="tp-caption tp-resizeme start"
                  data-x="170"
                  data-y="34"
                  data-speed="800"
                  data-easing="Elastic.easeInOut"
                  data-endspeed="300"
                  style="z-index: 1;">
                  <img src="img/home/sliderV2/caption8.png" alt="caption" width="71" height="82">
                </div> -->

                <!-- LAYER NR. 6 -->
                <!-- <div class="tp-caption tp-resizeme sfl stl"
                  data-x="left"
                  data-hoffset="-90"
                  data-y="100"
                  data-speed="800"
                  data-easing="Elastic.easeInOut"
                  data-endspeed="300"
                  style="z-index: 1;">
                  <img src="img/home/sliderV2/caption6.png" alt="caption" width="51" height="59">
                </div> -->

                <!-- LAYER NR. 7 -->
                <!-- <div class="tp-caption tp-resizeme start"
                  data-x="left"
                  data-hoffset="-70"
                  data-y="bottom"
                  data-voffset="-170"
                  data-speed="800"
                  data-easing="Elastic.easeInOut"
                  data-endspeed="300"
                  style="z-index: 1;">
                  <img src="img/home/sliderV2/caption9.png" alt="caption" width="77" height="50">
                </div> -->

                <!-- LAYER NR. 8 -->
                <!-- <div class="tp-caption tp-resizeme start"
                  data-x="center"
                  data-y="center"
                  data-voffset="100"
                  data-speed="800"
                  data-easing="Elastic.easeInOut"
                  data-endspeed="300"
                  style="z-index: 1;">
                  <img src="img/home/sliderV2/caption12.png" alt="caption" width="66" height="55">
                </div> -->

                <!-- LAYER NR. 9 -->
                <!-- <div class="tp-caption tp-resizeme sfr str"
                  data-x="right"
                  data-hoffset="-270"
                  data-y="34"
                  data-speed="800"
                  data-easing="Elastic.easeInOut"
                  data-endspeed="300"
                  style="z-index: 1;">
                  <img src="img/home/sliderV2/caption13.png" alt="caption" width="65" height="65">
                </div> -->

                <!-- LAYER NR. 10 -->
                <!-- <div class="tp-caption tp-resizeme sfr str"
                  data-x="right"
                  data-hoffset="-70"
                  data-y="100"
                  data-speed="800"
                  data-easing="Elastic.easeInOut"
                  data-endspeed="300"
                  style="z-index: 1;">
                  <img src="img/home/sliderV2/caption10.png" alt="caption" width="73" height="56">
                </div> -->

                <!-- LAYER NR. 11 -->
                <!-- <div class="tp-caption tp-resizeme sfb stb"
                  data-x="right"
                  data-hoffset="-70"
                  data-y="bottom"
                  data-voffset="-170"
                  data-speed="800"
                  data-easing="Elastic.easeInOut"
                  data-endspeed="300"
                  style="z-index: 1;">
                  <img src="img/home/sliderV2/caption11.png" alt="caption" width="61" height="67">
                </div>

              </div>
            </li> -->


          </ul>
        </div>
      </div>
    </section>


    <!-- PRODUCT SECTION -->
    <section class="mainContent full-width clearfix productSection">
      <div class="container">
        <div class="sectionTitle text-center">
          <h2>
            <span class="shape shape-left bg-color-4"></span>
            <span>Popular Products</span>
            <span class="shape shape-right bg-color-4"></span>
          </h2>
        </div>

        <div class="row">
          <div class="col-md-3 col-xs-6">
            <div class="box bg-color-1">
              <div class="box-img border-color-1 text-center">
                <a href="single-product.html">
                  <img src="img/home/product/product-img1.jpg" alt="image" class="img-responsive">
                </a>
                <a data-toggle="modal" href=".quick-view" class="btn-block"><i class="fa fa-eye" aria-hidden="true"></i>Quick View</a>
              </div>
              <div class="box-info">
                <h4>Barbie Racing Car</h4>
                <div class="price">
                  <span>$50</span>
                </div>
                <a href="cart-page.html" class="btn btn-primary "><i class="fa fa-shopping-basket " aria-hidden="true"></i>Add to Cart</a>
              </div>
            </div>
          </div>

          <div class="col-md-3 col-xs-6">
            <div class="box bg-color-2">
              <div class="box-img border-color-2 text-center">
                <a href="single-product.html">
                  <img src="img/home/product/product-img2.jpg" alt="image" class="img-responsive">
                </a>
                <a data-toggle="modal" href=".quick-view" class="btn-block"><i class="fa fa-eye" aria-hidden="true"></i>Quick View</a>
              </div>
              <div class="box-info">
                <h4>Barbie Racing Car</h4>
                <div class="price">
                  <span>$50</span>
                  <span><del>$60</del></span>
                </div>
                <a href="cart-page.html" class="btn btn-primary "><i class="fa fa-shopping-basket " aria-hidden="true"></i>Add to Cart</a>
              </div>
            </div>
          </div>

          <div class="col-md-3 col-xs-6">
            <div class="box bg-color-6">
              <div class="box-img border-color-6 text-center">
                <a href="single-product.html">
                  <img src="img/home/product/product-img3.jpg" alt="image" class="img-responsive">
                </a>
                <a data-toggle="modal" href=".quick-view" class="btn-block"><i class="fa fa-eye" aria-hidden="true"></i>Quick View</a>
              </div>
              <div class="box-info">
                <h4>Barbie Racing Car</h4>
                <div class="price">
                  <span>$50</span>
                </div>
                <a href="cart-page.html" class="btn btn-primary "><i class="fa fa-shopping-basket " aria-hidden="true"></i>Add to Cart</a>
              </div>
            </div>
          </div>

          <div class="col-md-3 col-xs-6">
            <div class="box bg-color-4">
              <div class="box-img border-color-4 text-center">
                <a href="single-product.html">
                  <img src="img/home/product/product-img4.jpg" alt="image" class="img-responsive">
                </a>
                <a data-toggle="modal" href=".quick-view" class="btn-block"><i class="fa fa-eye" aria-hidden="true"></i>Quick View</a>
              </div>
              <div class="box-info">
                <h4>Barbie Racing Car</h4>
                <div class="price">
                  <span>$50</span>
                  <span><del>$60</del></span>
                </div>
                <a href="cart-page.html" class="btn btn-primary "><i class="fa fa-shopping-basket " aria-hidden="true"></i>Add to Cart</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>











    <!-- FOOTER -->
    <footer class="footer-2">
      <!-- COLOR BAR -->
      <div class="container-fluid color-bar clearfix">
        <div class="row">
          <div class="col-sm-1 col-xs-2 bg-color-1">fix bar</div>
          <div class="col-sm-1 col-xs-2 bg-color-2">fix bar</div>
          <div class="col-sm-1 col-xs-2 bg-color-3">fix bar</div>
          <div class="col-sm-1 col-xs-2 bg-color-4">fix bar</div>
          <div class="col-sm-1 col-xs-2 bg-color-5">fix bar</div>
          <div class="col-sm-1 col-xs-2 bg-color-6">fix bar</div>
          <div class="col-sm-1 bg-color-1 hidden-xs">fix bar</div>
          <div class="col-sm-1 bg-color-2 hidden-xs">fix bar</div>
          <div class="col-sm-1 bg-color-3 hidden-xs">fix bar</div>
          <div class="col-sm-1 bg-color-4 hidden-xs">fix bar</div>
          <div class="col-sm-1 bg-color-5 hidden-xs">fix bar</div>
          <div class="col-sm-1 bg-color-6 hidden-xs">fix bar</div>
        </div>
      </div>


      <!-- COPY RIGHT -->
      <div class="copyRight clearfix">
        <div class="container">
          <div class="row">
            <div class="col-sm-5 col-sm-push-7 col-xs-12">
            </div>
            <div class="col-sm-7 col-sm-pull-5 col-xs-12">
              <div class="copyRightText">
                <p>© 2017 Copyright 3-WDJ LOGIC</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>

  <div class="scrolling">
    <a href="#pageTop" class="backToTop hidden-xs" id="backToTop"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
  </div>



  <!-- PORDUCT QUICK VIEW MODAL -->
  <div class="modal fade quick-view" tabindex="-1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="container-fluid">
          <div class="row">

            <div class="col-md-6 col-sm-7 col-xs-12">
              <div class="product-gallery text-center">
                <img src="img/single-product/preview01.jpg" alt="Product" class="img-responsive">
              </div>
            </div>

            <div class="col-md-6 col-sm-5 col-xs-12">
              <div class="product-info">
                <h1 class="product-title">Barbie Racing Car</h1>
                <div class="price">
                  <span>$50</span>
                  <span><del>$60</del></span>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.</p>
                <div class="add-cart">
                  <div class="count-input">
                    <input class="quantity btn-primary" type="text" value="1">
                    <a class="incr-btn incr-up" data-action="decrease" href="#"><i class="fa fa-caret-up" aria-hidden="true"></i></a>
                    <a class="incr-btn incr-down" data-action="increase" href="#"><i class="fa fa-caret-down" aria-hidden="true"></i></a>
                  </div>
                  <a href="cart-page.html" class="add-to-cart btn btn-primary">Add to Cart</a>
                </div>

              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="plugins/jquery-ui/jquery-ui.js"></script>
  <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
  <script src="plugins/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
  <script src="plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
  <script src="plugins/selectbox/jquery.selectbox-0.1.3.min.js"></script>
  <script src="plugins/owl-carousel/owl.carousel.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
  <script src="plugins/counter-up/jquery.counterup.min.js"></script>
  <script src="plugins/isotope/isotope.min.js"></script>
  <script src="plugins/isotope/jquery.fancybox.pack.js"></script>
  <script src="plugins/isotope/isotope-triger.js"></script>
  <script src="plugins/countdown/jquery.syotimer.js"></script>
  <script src="plugins/velocity/velocity.min.js"></script>
  <script src="plugins/smoothscroll/SmoothScroll.js"></script>
  <script src="js/custom.js"></script>

</body>

</html>
