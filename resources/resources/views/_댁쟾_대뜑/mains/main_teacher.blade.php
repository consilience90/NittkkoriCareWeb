<!DOCTYPE html>
<html lang="en">
<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ニッコリケア - MAIN</title>

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
                <li><a href="" style="color:white;">{{ Auth::user()->name }} {{ session('positionName') }}, 안녕하세요!!</a></li>
                @if( $p_waitCount )
                <li style="color:white;"><a href="{{ route('classroom.show',['classroom'=>$classNum ]) }}"><i class="fa fa-envelope bg-color-1" aria-hidden="true"></i>승인요청 {{ $p_waitCount }}건</a></li>
                @else
                <li style="color:white;"><i class="fa fa-envelope bg-color-1" aria-hidden="true"></i>승인요청 0건</li>
                @endif
              </ul>
            </div>
            <div class="col-sm-5">
              <ul class="list-inline functionList">
                <li><i class="fa fa-globe bg-color-4" aria-hidden="true"></i></li>
                <li class="LanguageList">
                  <select name="guiest_id1" id="guiest_id1" class="select-drop">
                    <option value="1"><i class="fa fa-globe bg-color-4" aria-hidden="true"></i>日本語</option>
                    <option value="2" selected="">한국어</option>
                  </select>
                </li>
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
    </header>

    <!-- BANNER -->
    <section class="bannercontainer bannercontainerV1">
      <div class="fullscreenbanner-container">
        <div class="fullscreenbanner">
          <ul>
            <li data-transition="fade" data-slotamount="5" data-masterspeed="700" data-title="Slide 1">
              <img src="img/home/slider/slider-1.jpg" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
              <div class="slider-caption container">
                <div class="tp-caption rs-caption-1 sft start"
                  data-hoffset="0"
                  data-y="200"
                  data-speed="800"
                  data-start="1000"
                  data-easing="Back.easeInOut"
                  data-endspeed="300">
                  {{ $kName }}
                </div>
                <div class="tp-caption rs-caption-2 sft"
                  data-hoffset="0"
                  data-y="265"
                  data-speed="1000"
                  data-start="1500"
                  data-easing="Power4.easeOut"
                  data-endspeed="300"
                  data-endeasing="Power1.easeIn"
                  data-captionhidden="off">
                  ニッコリケア는 {{ $kName }}과 함께합니다! <br>
                </div>
              </div>
            </li>
            <li data-transition="fade" data-slotamount="5" data-masterspeed="700"  data-title="Slide 3">
              <img src="img/home/slider/slider-3.jpg" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
              <div class="slider-caption container">
                <div class="tp-caption rs-caption-1 sft start text-right"
                  data-hoffset="0"
                  data-y="200"
                  data-x="right"
                  data-speed="800"
                  data-start="1000"
                  data-easing="Back.easeInOut"
                  data-endspeed="300">
                  {{ $kName }}
                </div>

                <div class="tp-caption rs-caption-2 sft text-right"
                  data-hoffset="0"
                  data-y="265"
                  data-x="right"
                  data-speed="1000"
                  data-start="1500"
                  data-easing="Power4.easeOut"
                  data-endspeed="300"
                  data-endeasing="Power1.easeIn"
                  data-captionhidden="off">
                  ニッコリケア는 {{ $kName }}과 함께합니다!
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </section>

    <!-- MAIN CONTENT -->
    <section class="clearfix linkSection hidden-xs">
      <div class="sectionLinkArea hidden-xs scrolling">
        <div class="container">
          <div class="row">
            <div class="col-sm-3">
              <a href="#" data-toggle="modal" class="sectionLink bg-color-1" id="coursesLink">
                <i class="fa fa-file-text-o linkIcon border-color-1" aria-hidden="true"></i>
                <span class="linkText">공지사항</span>
                <i class="fa fa-chevron-down locateArrow" aria-hidden="true"></i>
              </a>
            </div>
            <div class="col-sm-3">
              <a href="" data-toggle="modal" data-target="#Tsupporter" class="sectionLink bg-color-2" id="teamLink">
                <i class="fa fa-calendar-o linkIcon border-color-2" aria-hidden="true"></i>
                <span class="linkText">T-Supporter</span>
                <i class="fa fa-chevron-down locateArrow" aria-hidden="true"></i>
              </a>
            </div>
            <div class="col-sm-3">
              <a href="#" class="sectionLink bg-color-3" id="galleryLink">
                <i class="fa fa-picture-o linkIcon border-color-3" aria-hidden="true"></i>
                <span class="linkText">I-Check</span>
                <i class="fa fa-chevron-down locateArrow" aria-hidden="true"></i>
              </a>
            </div>

            <div class="col-sm-3">
              <a href="#" class="sectionLink bg-color-4" id="newsLink">
                <i class="fa fa-files-o linkIcon border-color-4" aria-hidden="true"></i>
                <span class="linkText">원아지킴이</span>
                <i class="fa fa-chevron-down locateArrow" aria-hidden="true"></i>
              </a>
            </div>

          </div>
        </div>
      </div>
    </section>

<hr>
    <!-- WHITE SECTION -->
    <section class="whiteSection full-width clearfix newsSection" id="latestNews" style="padding-top:0px;">
      <div class="container">
        <div class="sectionTitle text-center">
          <h2>
            <span class="shape shape-left bg-color-4"></span>
            <span>오늘의 교육계획안</span>
            <span class="shape shape-right bg-color-4"></span>
          </h2>
        </div>


        <div class="btnArea">
          <a href="blog-grid.html" class="btn btn-primary">더 보기</a>
        </div>

      </div>
    </section>


    <!-- FOOTER -->
    <footer>
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

  <div class="modal fade customModal" id="Tsupporter" tabindex="-1" role="dialog">
    <div class="modal-dialog" style="  position:absolute;
  top:0;right:0;bottom:0;left:0;
  display:-webkit-box;
  display:-moz-box;
  display:-ms-flexbox;
  display:-webkit-flex;
  display:flex;

  align-items:center;
  justify-content:center;
  -webkit-align-items:center;
  -webkit-justify-content:center;

  -webkit-box-pack:center;
  -webkit-box-align:center;
  -moz-box-pack:center;
  -moz-box-align:center;
  -ms-box-pack:center;
  -ms-box-align:center;
  width:1000px; height:500px;">

      <div class="modal-content" >
        <div class="panel panel-default formPanel">
          <div class="panel-heading bg-color-1 border-color-1">
            <h3 class="panel-title">T-Supporter</h3>
          </div>
          <div class="panel-body">
                <div class="banner-bottom-inner" style="padding-top: 150px;">
                  <div class="row">

                    <div class="col-sm-4">
                      <a href="{{ route('classroom.show',['classroom'=>$classNum ]) }}">
                      <div class="colContent">
                        <img src="img/home/banner-bottom/bottom-img1.jpg" alt="image" class="img-responsive">
                        <div class="colContent-info text-left">
                          <h3 class="bg-color-6">반 관리</h3>
                          <p>반의 정보와 가입신청을 수락할 수 있습니다.</p>
                        </div>
                      </div>
                    </a>
                    </div>

                    <div class="col-sm-4">
                      <a href="{{ route('plans.index') }}">
                      <div class="colContent">
                        <img src="img/home/banner-bottom/bottom-img2.jpg" alt="image" class="img-responsive">
                         <div class="colContent-info text-center">
                          <h3 class="bg-color-2">교육 계획안 작성</h3>
                          <p>교육계획안을 간편하게 작성 및 수정</p>
                        </div>
                      </div>
                    </a>
                    </div>
                    <div class="col-sm-4">
                      <a href="#">
                      <div class="colContent">
                        <img src="img/home/banner-bottom/bottom-img3.jpg" alt="image" class="img-responsive">
                         <div class="colContent-info text-right">
                          <h3 class="bg-color-5">관찰일지</h3>
                          <p>관찰일지 작성을 합니다</p>
                        </div>
                      </div>
                    </a>
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
