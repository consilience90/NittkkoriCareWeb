<!DOCTYPE html>
<html lang="en">
<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ニッコリケア - Create Class</title>

  <!-- PLUGINS CSS STYLE -->
  <link href="{{ asset('plugins/jquery-ui/jquery-ui.css') }}" rel="stylesheet">
  <link href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{ asset('plugins/rs-plugin/css/settings.css') }}" media="screen">
  <link rel="stylesheet" type="text/css" href="{{ asset('plugins/selectbox/select_option1.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('plugins/owl-carousel/owl.carousel.css') }}" media="screen">
  <link rel="stylesheet" type="text/css" href="{{ asset('plugins/isotope/jquery.fancybox.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('plugins/isotope/isotope.css') }}">
  
  <link rel="stylesheet" type="text/css" href="{{ asset('css/sweetalert.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/sb-admin-2.css') }}">
   <link rel="stylesheet" type="text/css" href="{{ asset('css/morris.css') }}">
  

  <!-- GOOGLE FONT -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Dosis:400,300,600,700" rel="stylesheet" type="text/css">

  <!-- CUSTOM CSS -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/colors/default.css') }}" id="option_color">
  <style type="text/css">
    /* The switch - the box around the slider */
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

/* Hide default HTML checkbox */
.switch input {display:none;}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
  </style>
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
                <li><a href="" style="color:white;">안녕하세요, {{ Auth::user()->name }} {{ session('positionName') }}!!</a></li>
                <!--@if(session('positionName')=='선생님')-->
                <!--  @if( count($waitList) )-->
                <!--    <li style="color:white;"><a href="{{ route('classroom.show',['classroom'=>$classNum ]) }}"><i class="fa fa-envelope bg-color-1" aria-hidden="true"></i>승인요청 {{ count($waitList) }}건</a></li>-->
                <!--  @else-->
                <!--    <li style="color:white;"><i class="fa fa-envelope bg-color-1" aria-hidden="true"></i>승인요청 0건</li>-->
                <!--  @endif-->
                <!--@elseif(session('positionName')=='원장님')-->
                <!--  <li style="color:white;"><a href=""><i class="fa fa-envelope bg-color-1" aria-hidden="true"></i>승인요청 10건</a></li>-->
                <!--@endif-->
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
            <a class="navbar-brand" href="{{route('main.show')}}" style="padding-top:0px;"><img src="{{asset('img/test_logo.png')}}" alt="logo"></a>
          </div>
        </div>
      </nav>
    </header>


    @yield('main_content')

   
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
      <script src="{{ asset('plugins/jquery-ui/jquery-ui.js') }}"></script>
      <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
      <script src="{{ asset('plugins/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
      <script src="{{ asset('plugins/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
      <script src="{{ asset('plugins/selectbox/jquery.selectbox-0.1.3.min.js') }}"></script>
      <script src="{{ asset('plugins/owl-carousel/owl.carousel.js') }}"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
      <script src="{{ asset('plugins/counter-up/jquery.counterup.min.js') }}"></script>
      <script src="{{ asset('plugins/isotope/isotope.min.js') }}"></script>
      <script src="{{ asset('plugins/isotope/jquery.fancybox.pack.js') }}"></script>
      <script src="{{ asset('plugins/isotope/isotope-triger.js') }}"></script>
      <script src="{{ asset('plugins/countdown/jquery.syotimer.js') }}"></script>
      <script src="{{ asset('plugins/velocity/velocity.min.js') }}"></script>
      <script src="{{ asset('plugins/smoothscroll/SmoothScroll.js') }}"></script>
      <script src="{{ asset('js/custom.js') }}"></script>
      <script src="{{ asset('js/sweetalert.min.js') }}"></script>
      <script src="{{ asset('js/raphael.js') }}"></script>
      <script src="{{ asset('js/morris.js') }}"></script>


    </body>
    </html>
