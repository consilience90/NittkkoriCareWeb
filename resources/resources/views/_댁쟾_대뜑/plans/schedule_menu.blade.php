<!DOCTYPE html>
<html lang="en">

<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ニッコリケア - Class LIST</title>

  <!-- PLUGINS CSS STYLE -->
  <link href="{{ asset('plugins/jquery-ui/jquery-ui.css') }}" rel="stylesheet">
  <link href="{{ asset('plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{ asset('plugins/rs-plugin/css/settings.css')}}" media="screen">
  <link rel="stylesheet" type="text/css" href="{{ asset('plugins/selectbox/select_option1.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('plugins/owl-carousel/owl.carousel.css')}}" media="screen">
  <link rel="stylesheet" type="text/css" href="{{ asset('plugins/isotope/jquery.fancybox.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('plugins/isotope/isotope.css')}}">


  <!-- GOOGLE FONT -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Dosis:400,300,600,700" rel="stylesheet" type="text/css">

  <!-- CUSTOM CSS -->
  <link href="{{ asset('css/style.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/colors/default.css')}}" id="option_color">

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
                <li style="color:white;"><i class="fa fa-envelope bg-color-1" aria-hidden="true"></i>도착 메세지 10건</li>
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
      <nav id="menuBar" class="navbar navbar-default lightHeader" role="navigation" style="height:120px;">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{route('main.show')}}" style="padding-top:0px;"><img src="{{ asset('img/test_logo.png')}}" alt="logo"></a>
          </div>
        </div>
      </nav>
    </header>

    <!-- PAGE TITLE SECTION-->
    <section class="pageTitleSection">
      <div class="container">
        <div class="pageTitleInfo">
          <h2>해바라기반 - 계획안 메뉴</h2>
          <ol class="breadcrumb">
            <li>T-Supporter</li>
            <li class="active">반 이름</li>
            <li class="active">해바라기 반</li>
          </ol>
        </div>
      </div>
    </section>

<!-- MAIN SECTION -->
    <section class="mainContent full-width clearfix">
          <div class="container">
            <div class="sectionTitle text-center">
              <h2>
                <span class="shape shape-left bg-color-4"></span>
                <span>교육 계획안</span>
                <span class="shape shape-right bg-color-4"></span>
              </h2>
            </div>

            <div class="row">
              <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="pricingTable">
                  <div class="priceUper">
                    <div class="priceTitle bg-color-1"><h3>연간 계획안</h3></div>
                    <div class="priceInfo bg-color-1"><p>제일 먼저 작성해야되는<br> 계획안입니다.</p></div>
                  </div>
                  <div class="priceLower">
                    <ul class="list-unstyled priceOffer">
                      <li><i class="fa fa-hand-o-right color-1" aria-hidden="true"></i>월간 주제</li>
                      <li><i class="fa fa-hand-o-right color-1" aria-hidden="true"></i>주간 주제</li>
                    </ul>
                    <div class="priceBtn">
                      <a href="{{ route('plans.selectCreate',['clickInfo'=>'year']) }}" class="btn btn-primary bg-color-1">작성 하기</a>
                      <h4 class="color-1">2017<small class="color-1">년도</small><br><small>Current Year</small></h4>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="pricingTable">
                  <div class="priceUper">
                    <div class="priceTitle bg-color-2"><h3>월간 계획안</h3></div>
                    <div class="priceInfo bg-color-2"><p>월간 계획안을 작성합니다</p></div>
                  </div>
                  <div class="priceLower">
                    <ul class="list-unstyled priceOffer">
                      <li><i class="fa fa-hand-o-right color-2" aria-hidden="true"></i>월간 주제</li>
                      <li><i class="fa fa-hand-o-right color-2" aria-hidden="true"></i>주간 주제</li>
                    </ul>
                    <div class="priceBtn">
                      <a href="{{ route('plans.selectCreate',['clickInfo'=>'month']) }}" class="btn btn-primary bg-color-2">작성 하기</a>
                      <h4 class="color-2">06월<br><small>Current Month</small></h4>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="pricingTable">
                  <div class="priceUper">
                    <div class="priceTitle bg-color-3"><h3>주간 계획안</h3></div>
                    <div class="priceInfo bg-color-3"><p>주간 계획안을 작성합니다</p></div>
                  </div>
                  <div class="priceLower">
                    <ul class="list-unstyled priceOffer">
                      <li><i class="fa fa-hand-o-right color-3" aria-hidden="true"></i>주간 주제</li>
                      <li><i class="fa fa-hand-o-right color-3" aria-hidden="true"></i>일간 주제</li>
                    </ul>
                    <div class="priceBtn">
                      <a href="{{ route('plans.selectCreate',['clickInfo'=>'week']) }}" class="btn btn-primary bg-color-3">작성 하기</a>
                      <h4 class="color-3">4<small class="color-3">주차</small><br><small>Current Week</small></h4>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="pricingTable">
                  <div class="priceUper">
                    <div class="priceTitle bg-color-4"><h3>일간 계획안</h3></div>
                    <div class="priceInfo bg-color-4"><p>일간 계획안을 작성합니다.</p></div>
                  </div>
                  <div class="priceLower">
                    <ul class="list-unstyled priceOffer">
                      <li><i class="fa fa-hand-o-right color-4" aria-hidden="true"></i>주간 주제</li>
                      <li><i class="fa fa-hand-o-right color-4" aria-hidden="true"></i>일간 주제</li>
                    </ul>
                    <div class="priceBtn">
                      <a href="{{ route('plans.selectCreate',['clickInfo'=>'day']) }}" class="btn btn-primary bg-color-4">작성하기</a>
                      <h4 class="color-4">26<small class="color-4">일</small><br><small>Current Day</small></h4>
                    </div>
                  </div>
                </div>
              </div>

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



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="{{ asset('plugins/jquery-ui/jquery-ui.js')}}"></script>
  <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('plugins/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
  <script src="{{ asset('plugins/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
  <script src="{{ asset('plugins/selectbox/jquery.selectbox-0.1.3.min.js')}}"></script>
  <script src="{{ asset('plugins/owl-carousel/owl.carousel.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
  <script src="{{ asset('plugins/counter-up/jquery.counterup.min.js')}}"></script>
  <script src="{{ asset('plugins/isotope/isotope.min.js')}}"></script>
  <script src="{{ asset('plugins/isotope/jquery.fancybox.pack.js')}}"></script>
  <script src="{{ asset('plugins/isotope/isotope-triger.js')}}"></script>
  <script src="{{ asset('plugins/countdown/jquery.syotimer.js')}}"></script>
  <script src="{{ asset('plugins/velocity/velocity.min.js')}}"></script>
  <script src="{{ asset('plugins/smoothscroll/SmoothScroll.js')}}"></script>
  <script src="{{ asset('js/custom.js')}}"></script>

</body>

</html>
