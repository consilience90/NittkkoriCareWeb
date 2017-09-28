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
                <li><a href="http://localhost:8000/main" style="color:white;">안녕하세요,{{ Auth::user()->name }} {{ session('positionName') }}!!</a></li>
                <li style="color:white;"><i class="fa fa-envelope bg-color-1" aria-hidden="true"></i>도착 메세지 10건</li>
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
              <a href="#" class="sectionLink bg-color-1" id="coursesLink">
                <i class="fa fa-file-text-o linkIcon border-color-1" aria-hidden="true"></i>
                <span class="linkText">공지사항</span>
                <i class="fa fa-chevron-down locateArrow" aria-hidden="true"></i>
              </a>
            </div>
            <div class="col-sm-3">
              <a href="{{ route('classroom.index') }}" class="sectionLink bg-color-2" id="teamLink">
                <i class="fa fa-calendar-o linkIcon border-color-2" aria-hidden="true"></i>
                <span class="linkText">유치원 관리</span>
                <i class="fa fa-chevron-down locateArrow" aria-hidden="true"></i>
              </a>
            </div>

            <div class="col-sm-3">
              <a href="#" class="sectionLink bg-color-3" id="galleryLink">
                <i class="fa fa-picture-o linkIcon border-color-3" aria-hidden="true"></i>
                <span class="linkText">회원 관리</span>
                <i class="fa fa-chevron-down locateArrow" aria-hidden="true"></i>
              </a>
            </div>

            <div class="col-sm-3">
              <a href="#" class="sectionLink bg-color-4">
                <i class="fa fa-picture-o linkIcon border-color-4" aria-hidden="true"></i>
                <span class="linkText">계획안 관리</span>
                <i class="fa fa-chevron-down locateArrow" aria-hidden="true"></i>
              </a>
            </div>



          </div>
        </div>
      </div>
    </section>

    <!-- FEATURE SECTION -->
    <!-- <section class="mainContent full-width clearfix featureSection">
      <div class="container">
        <div class="sectionTitle text-center">
          <h2>
            <span class="shape shape-left bg-color-4"></span>
            <span>영진 유치원 소개</span>
            <span class="shape shape-right bg-color-4"></span>
          </h2>
        </div>

        <div class="row">
          <div class="col-sm-4 col-xs-12">
            <div class="media featuresContent">
              <span class="media-left bg-color-1">
                <i class="fa fa-graduation-cap bg-color-1" aria-hidden="true"></i>
              </span>
              <div class="media-body">
                <h3 class="media-heading color-1">능력있는 유치원 교사들</h3>
                <p>버클리 대학원 유아교육과 출신 교사들만 뽑았습니다</p>
              </div>
            </div>
          </div>
          <div class="col-sm-4 col-xs-12">
            <div class="media featuresContent">
              <span class="media-left bg-color-2">
                <i class="fa fa-leaf bg-color-2" aria-hidden="true"></i>
              </span>
              <div class="media-body">
                <h3 class="media-heading color-2">활발한 체육활동</h3>
                <p>폴로부터 골프까지 다양한 체육 활동을 합니다</p>
              </div>
            </div>
          </div>
          <div class="col-sm-4 col-xs-12">
            <div class="media featuresContent">
              <span class="media-left bg-color-3">
                <i class="fa fa-car bg-color-3" aria-hidden="true"></i>
              </span>
              <div class="media-body">
                <h3 class="media-heading color-3">5년간 안전사고 0% 달성</h3>
                <p>오바마 대통령이 이용하던 방탄 리무진 차량을 이용하여 총기사고로부터 예방합니다</p>
              </div>
            </div>
          </div>
          <div class="col-sm-4 col-xs-12">
            <div class="media featuresContent">
              <span class="media-left bg-color-4">
                <i class="fa fa-cutlery bg-color-4" aria-hidden="true"></i>
              </span>
              <div class="media-body">
                <h3 class="media-heading color-4">5성급쉐프가 요리함</h3>
                <p>두바이 5성호텔 주방에서 일하던 쉐프가 매일 영양식을 만듭니다.</p>
              </div>
            </div>
          </div>
          <div class="col-sm-4 col-xs-12">
            <div class="media featuresContent">
              <span class="media-left bg-color-5">
                <i class="fa fa-heart bg-color-5" aria-hidden="true"></i>
              </span>
              <div class="media-body">
                <h3 class="media-heading color-5">1일에 1번 마사지</h3>
                <p>중국 주석 시진핑이 받던 마사지를 저희 유치원에서도 똑같이 제공합니다</p>
              </div>
            </div>
          </div>
          <div class="col-sm-4 col-xs-12">
            <div class="media featuresContent">
              <span class="media-left bg-color-6">
                <i class="fa fa-shield bg-color-6" aria-hidden="true"></i>
              </span>
              <div class="media-body">
                <h3 class="media-heading color-6">스파링 시스템</h3>
                <p>아이들의 건강을 위해 매주 1회 스파링을 실시합니다</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
<hr>
    <!-- WHITE SECTION -->
    <section class="whiteSection full-width clearfix newsSection" id="latestNews" style="padding-top:0px;">
      <div class="container">
        <div class="sectionTitle text-center">
          <h2>
            <span class="shape shape-left bg-color-4"></span>
            <span>{{ $kName }} 일정</span>
            <span class="shape shape-right bg-color-4"></span>
          </h2>
        </div>

        <div class="row">
          <div class="col-sm-4 col-xs-12 block">
            <div class="thumbnail thumbnailContent">
              <a href="single-blog-left-sidebar.html"><img src="img/home/news/news-1.jpg" alt="image" class="img-responsive"></a>
              <div class="sticker-round bg-color-1">30日<br>6月</div>
              <div class="caption border-color-1">
                <h3><a href="single-blog-left-sidebar.html" class="color-1">만 5세반: 참관수업</a></h3>
                <ul class="list-inline">
                  <li><a href="single-blog-left-sidebar.html"><i class="fa fa-user" aria-hidden="true"></i>신우성 교사</a></li>
                </ul>
                <p>빛과 무지개라는 주제로 수업을 진행합니다. 1시간 30분 정도 소요될 예정입니다. </p>
                <ul class="list-inline btn-yellow">
                  <li><a href="single-blog-left-sidebar.html" class="btn btn-link"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Read More</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-4 col-xs-12 block">
            <div class="thumbnail thumbnailContent">
              <a href="single-blog-left-sidebar.html"><img src="img/home/news/news-2.jpg" alt="image" class="img-responsive"></a>
              <div class="sticker-round bg-color-2">10日<br>7月</div>
              <div class="caption border-color-2">
                <h3><a href="single-blog-left-sidebar.html" class="color-2">만 5세반: 꿈 그리기</a></h3>
                <ul class="list-inline">
                  <li><a href="single-blog-left-sidebar.html"><i class="fa fa-user" aria-hidden="true"></i>신우성 교사</a></li>
                </ul>
                <p>만 5세반들이 모두 모여 자신의 꿈을 그립니다. 1시간 30분 정도 소요될 예정입니다.  </p>
                <ul class="list-inline btn-green">
                  <li><a href="single-blog-left-sidebar.html" class="btn btn-link"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Read More</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-4 col-xs-12 block">
            <div class="thumbnail thumbnailContent">
              <a href="single-blog-left-sidebar.html"><img src="img/home/news/news-3.jpg" alt="image" class="img-responsive"></a>
              <div class="sticker-round bg-color-3">15日 <br>7月</div>
              <div class="caption border-color-3">
                <h3><a href="single-blog-left-sidebar.html" class="color-3">만 4세반: 친구 얼굴 그리기</a></h3>
                <ul class="list-inline">
                  <li><a href="single-blog-left-sidebar.html"><i class="fa fa-user" aria-hidden="true"></i>최시우 교사</a></li>
                </ul>
                <p>친구 얼굴그리기 수업을 진행합니다. 1시간 30분 정도 소요될 예정입니다.</p>
                <ul class="list-inline btn-red">
                  <li><a href="#" class="btn btn-link"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Read More</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="btnArea">
          <a href="blog-grid.html" class="btn btn-primary">View more</a>
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
                      <a href="./class_list.html">
                      <div class="colContent">
                        <img src="img/home/banner-bottom/bottom-img1.jpg" alt="image" class="img-responsive">
                        <div class="colContent-info text-left">
                          <h3 class="bg-color-6">반 관리</h3>
                          <p>반을 추가하거나 수정할 수 있습니다.</p>
                        </div>
                      </div>
                    </a>
                    </div>

                    <div class="col-sm-4">
                      <div class="colContent">
                        <img src="img/home/banner-bottom/bottom-img2.jpg" alt="image" class="img-responsive">
                         <div class="colContent-info text-center">
                          <h3 class="bg-color-2">교육 계획안 관리</h3>
                          <p>교육계획안을 간편하게 작성 및 수정</p>
                        </div>
                      </div>
                    </div>

                    <div class="col-sm-4">
                      <div class="colContent">
                        <img src="img/home/banner-bottom/bottom-img3.jpg" alt="image" class="img-responsive">
                         <div class="colContent-info text-right">
                          <h3 class="bg-color-5">회원 관리</h3>
                          <p>우리유치원의 회원관리</p>
                        </div>
                      </div>
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
