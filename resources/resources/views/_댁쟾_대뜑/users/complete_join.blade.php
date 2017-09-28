<!DOCTYPE html>
<html lang="en">

<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>ニッコリケア - index</title>

  <!-- PLUGINS CSS STYLE -->
  <link href="{{ asset('plugins/jquery-ui/jquery-ui.css' )}}" rel="stylesheet">
  <link href="{{ asset('plugins/bootstrap/css/bootstrap.min.css' )}}" rel="stylesheet">
  <link href="{{ asset('plugins/font-awesome/css/font-awesome.min.css' )}}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{ asset('plugins/rs-plugin/css/settings.css' )}}" media="screen">
  <link rel="stylesheet" type="text/css" href="{{ asset('plugins/selectbox/select_option1.css' )}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('plugins/owl-carousel/owl.carousel.css' )}}" media="screen">
  <link rel="stylesheet" type="text/css" href="{{ asset('plugins/isotope/jquery.fancybox.css' )}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('plugins/isotope/isotope.css' )}}">

  <!-- GOOGLE FONT -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Dosis:400,300,600,700" rel="stylesheet" type="text/css">

  <!-- CUSTOM CSS -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/colors/default.css' )}}" id="option_color">

  <!-- Icons -->
  <link rel="shortcut icon" href="{{ asset('img/favicon.png' )}}">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script>
      window.Laravel = {!! json_encode([
          'csrfToken' => csrf_token(),
      ]) !!};
  </script>
</head>

<body class="body-wrapper version3">

  <div class="main-wrapper">
    <!-- HEADER -->
    <header id="pageTop" class="header-wrapper headerV3">
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
      <!-- TOP INFO BAR -->
      <div class="top-info-bar bg-color-7 hidden-xs">
        <div class="container">
          <div class="row">
            <div class="col-sm-7">
              <ul class="list-inline topList">
                <li><a href="{{route('main.show')}}" style="color:white;">{{ $name }}님,안녕하세요!</a></li>
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


    <section class="mainContent full-width clearfix">
          <hr>

          <div class="container">
            <div class="row progress-wizard" style="border-bottom:0;">

              <div class="col-sm-4 col-xs-12 progress-wizard-step complete">
                <div class="progress"><div class="progress-bar"></div>
                </div>
                <a class="progress-wizard-dot">
                    <i class="fa fa-user" aria-hidden="true"></i>
                  </a>
                <div class="progressInfo">1. 개인정보 입력</div>
              </div>

              <div class="col-sm-4 col-xs-12 progress-wizard-step complete">
                <div class="progress">
                  <div class="progress-bar"></div>
                </div>
                <a class="progress-wizard-dot">
                    <i class="fa fa-usd" aria-hidden="true"></i>
                  </a>
                <div class="progressInfo">2. 유치원 정보 입력</div>
              </div>

              <div class="col-sm-4 col-xs-12 progress-wizard-step active">
                <div class="progress">
                  <div class="progress-bar"></div>
                </div>
                <a class="progress-wizard-dot">
                    <i class="fa fa-check" aria-hidden="true"></i>
                  </a>
                <div class="progressInfo">3. 등록 완료</div>
              </div>
            </div>




            <div class="row">
              <div class="col-xs-12">
                <div class="alert alert-success alert-dismissible alt" role="alert">
                  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">x</span></button>
                  <span class="successAlert"><i class="fa fa-check" aria-hidden="true"></i></span>
                  감사합니다! 회원가입이 완료 되었습니다!
                </div>
              </div>
              <div class="col-xs-12">
                <div class="lowerPartTitle">
                  <h4>가입 정보</h4>
                  <h4>회원 ID: <span>{{ $user_id }}</span></h4>
                  <h4>회원 이름: <span>{{ $name }}</span></h4>
                  <h4>회원 직책: <span>{{ $position }}</span></h4>
                  <h4>소속 유치원: <span>{{ $kinderName }}</span></h4>

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
