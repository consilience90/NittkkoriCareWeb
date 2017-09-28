<!DOCTYPE html>
<html lang="en">
<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ニッコリケア - MAIN</title>

  <!-- PLUGINS CSS STYLE -->
  <link href="{{asset('plugins/jquery-ui/jquery-ui.css')}}" rel="stylesheet">
  <link href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{asset('plugins/rs-plugin/css/settings.css')}}" media="screen">
  <link rel="stylesheet" type="text/css" href="{{asset('plugins/selectbox/select_option1.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('plugins/owl-carousel/owl.carousel.css')}}" media="screen">
  <link rel="stylesheet" type="text/css" href="{{asset('plugins/isotope/jquery.fancybox.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('plugins/isotope/isotope.css')}}">

  <!-- GOOGLE FONT -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Dosis:400,300,600,700" rel="stylesheet" type="text/css">

  <!-- CUSTOM CSS -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/colors/default.css')}}" id="option_color">

  <!-- Icons -->
  <link rel="shortcut icon" href="{{asset('img/favicon.png')}}">

  <!-- HTML5 shim and Respond.js')}} for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js')}} doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')}}"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script>
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
                <li><a href="" style="color:white;">こんにちは、{{ Auth::user()->name }} {{ session('positionName') }}。</a></li>
                {{-- @if(session('positionName')=='先生')
                  @if( $p_waitCount )
                    <li style="color:white;"><a href="{{ route('classroom.show',['classroom'=>$classNum ]) }}"><i class="fa fa-envelope bg-color-1" aria-hidden="true"></i>승인요청 {{ $p_waitCount }}건</a></li>
                  @else
                    <li style="color:white;"><i class="fa fa-envelope bg-color-1" aria-hidden="true"></i>승인요청 0건</li>
                  @endif
                @elseif(session('positionName')=='延長')
                  <li style="color:white;"><a href=""><i class="fa fa-envelope bg-color-1" aria-hidden="true"></i>승인요청 10건</a></li>
                @endif --}}
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
    @yield('main_content')



      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script src="{{asset('plugins/jquery-ui/jquery-ui.js')}}"></script>
      <script src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
      <script src="{{asset('plugins/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
      <script src="{{asset('plugins/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
      <script src="{{asset('plugins/selectbox/jquery.selectbox-0.1.3.min.js')}}"></script>
      <script src="{{asset('plugins/owl-carousel/owl.carousel.js')}}"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
      <script src="{{asset('plugins/counter-up/jquery.counterup.min.js')}}"></script>
      <script src="{{asset('plugins/isotope/isotope.min.js')}}"></script>
      <script src="{{asset('plugins/isotope/jquery.fancybox.pack.js')}}"></script>
      <script src="{{asset('plugins/isotope/isotope-triger.js')}}"></script>
      <script src="{{asset('plugins/countdown/jquery.syotimer.js')}}"></script>
      <script src="{{asset('plugins/velocity/velocity.min.js')}}"></script>
      <script src="{{asset('plugins/smoothscroll/SmoothScroll.js')}}"></script>
      <script src="{{asset('js/custom.js')}}"></script>

    </body>

    </html>
