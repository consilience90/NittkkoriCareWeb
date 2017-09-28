<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>ニッコリケア</title>

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
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/colors/default.css" id="option_color">

  <!-- Icons -->
  <link rel="shortcut icon" href="img/favicon.png">

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
      <div class="top-info-bar bg-color-7 hidden-xs">
        <div class="container">
          <div class="row">
            <div class="col-sm-9" style="bottom:9px;">
              <ul class="list-inline topList">
                <li style="color:white; font-size:xx-large; cursor:pointer" onclick="location.replace('/')"><b>ニッコリケア</b></li>
              </ul>
            </div>
            <div class="col-sm-3">
              <ul class="list-inline functionList">
                <li>
                  <a href="#loginModal" data-toggle="modal" style="color:white; font-size:large; ">Login&nbsp;&nbsp;&nbsp;&nbsp;</a>
                  <a href="#createAccount" data-toggle="modal" style="color:white; font-size:large;">&nbsp;&nbsp;&nbsp;&nbsp;Join</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>


    <!-- BANNER -->
    <section class="bannercontainer bannercontainerV3">
      <div class="fullscreenbanner-container">
        <div class="fullscreenbanner">
          <ul>
            <li data-transition="fade" data-slotamount="5" data-masterspeed="700" data-title="Slide 1">
              <img src="img/home/sliderV3/slider-1.jpg" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
              <div class="slider-caption container">
                <div class="tp-caption rs-caption-1 sft start" data-hoffset="0" data-y="270" data-speed="800" data-start="1000" data-easing="Back.easeInOut" data-endspeed="300" style="font-size:90px;">
                  ニッコリケア
                </div>

                <div class="tp-caption rs-caption-2 sft" data-hoffset="0" data-y="345" data-speed="1000" data-start="1500" data-easing="Power4.easeOut" data-endspeed="300" data-endeasing="Power1.easeIn" data-captionhidden="off" style="font-size:35px;">
                  ニッコリケアは、皆のためのサービスです。
                </div>
              </div>
            </li>


            <li data-transition="fade" data-slotamount="5" data-masterspeed="700" data-title="Slide 3">
              <img src="img/home/sliderV3/slider-3.jpg" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
              <div class="slider-caption container">
                <div class="tp-caption rs-caption-1 sft start text-right" data-hoffset="0" data-y="270" data-x="right" data-speed="800" data-start="1000" data-easing="Back.easeInOut" data-endspeed="300" style="font-size:90px;">
                  ニッコリケア
                </div>

                <div class="tp-caption rs-caption-2 sft text-right" data-hoffset="0" data-x="right" data-y="345" data-speed="1000" data-start="1500" data-easing="Power4.easeOut" data-endspeed="300" data-endeasing="Power1.easeIn" data-captionhidden="off" style="font-size:35px;">
                  ニッコリケアは子供たちに幸せを提供します。
                </div>
              </div>
            </li>

          </ul>
        </div>
      </div>
    </section>

    <!-- WHITE SECTION -->
    <section class="whiteSection full-width clearfix aboutSchool">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-sm-push-6 col-xs-12">
            <img src="img/home/about-school.png" alt="image" class="img-responsive">
          </div>
          <div class="col-sm-6 col-sm-pull-6 col-xs-12">
            <div class="schoolInfo">
              <h2>ニッコリケアとは？</h2>
              <h4 style="font-size:x-large;">スマートフォンやコンピューターで連絡帳、告知事項、献立表、アルバムの写真などを楽に作成して、
                幼稚園の先生たちと父母が容易に疎通できるスマートサービスです。</h4>
              <ul class="list-unstyled">
                <li style="font-size:x-large;"><i class="fa fa-check" aria-hidden="true"></i>幼稚園先生の業務時間を減らしてくれる「T-Supporter」</li><br>
                <li style="font-size:x-large;"><i class="fa fa-check" aria-hidden="true"></i>園児の安全を守ってくれる「園児の守護神」</li><br>
                <li style="font-size:x-large;"><i class="fa fa-check" aria-hidden="true"></i>どこでも私の子供の情報を見ることができる「I-Check」</li>
              </ul>
              <!-- <a href="about_us.html" class="btn btn-primary">read more</a> -->
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- COLOR SECTION -->
    <section class="colorSection full-width clearfix bg-color-4 servicesSection">
      <div class="container">
        <div class="sectionTitle text-center alt">
          <h2>
            <span class="shape shape-left bg-color-3"></span>
            <span>主なサービス</span>
            <span class="shape shape-right bg-color-3"></span>
          </h2>
        </div>

        <div class="row">
          <div class="col-sm-4 col-xs-12">
            <div class="media servicesContent">
              <span class="media-left">
                <i class="fa fa-cutlery bg-color-4" aria-hidden="true"></i>
              </span>
              <div class="media-body">
                <h3 class="media-heading">献立表</h3>
                <p style="font-size:large;">幼稚園の献立表を簡単に修正及び配布することができます</p>
              </div>
            </div>
            <div class="media servicesContent">
              <span class="media-left">
                <i class="fa fa-heart bg-color-4" aria-hidden="true"></i>
              </span>
              <div class="media-body">
                <h3 class="media-heading">わが子の活動量</h3>
                <p style="font-size:large;">ニッコリケアを通じて毎日子供の活動量をチェックすることができます。</p>
              </div>
            </div>
            <div class="media servicesContent">
              <span class="media-left">
                <i class="fa fa-shield bg-color-4" aria-hidden="true"></i>
              </span>
              <div class="media-body">
                <h3 class="media-heading">원아 지킴이</h3>
                <p style="font-size:large;">유치원교사는 원아의 위치를 실시간 확인 가능합니다.</p>
              </div>
            </div>
          </div>
          <div class="col-sm-4 hidden-xs">
            <!-- <div class="text-center">
              <img src="img/home/services.png" alt="image">
            </div> -->
          </div>
          <div class="col-sm-4 col-xs-12">
            <div class="media servicesContent">
              <span class="media-left">
                <i class="fa fa-car bg-color-4" aria-hidden="true"></i>
              </span>
              <div class="media-body">
                <h3 class="media-heading">버스 알리미</h3>
                <p style="font-size:large;">유치원 통학버스가 도착하기전에 미리 알려줍니다.</p>
              </div>
            </div>
            <div class="media servicesContent">
              <span class="media-left">
                <i class="fa fa-graduation-cap bg-color-4" aria-hidden="true"></i>
              </span>
              <div class="media-body">
                <h3 class="media-heading">T-Supporter</h3>
                <p style="font-size:large;">유치원교사가 하는 업무를 간소화 시켜줍니다</p>
              </div>
            </div>
            <div class="media servicesContent">
              <span class="media-left">
                <i class="fa fa-leaf bg-color-4" aria-hidden="true"></i>
              </span>
              <div class="media-body">
                <h3 class="media-heading">성장일지</h3>
                <p style="font-size:large;">매주 원아의 활동 및 상황들을 일목요연하게 자동으로 정리해줍니다</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- TESTIMONIAL SECTION -->
    <section class="mainContent full-width clearfix testimonialArea">
      <div class="container">
        <div class="sectionTitle text-center">
          <h2>
            <span class="shape shape-left bg-color-4"></span>
            <span>ニッコリケア 사용 후기</span>
            <span class="shape shape-right bg-color-4"></span>
          </h2>
        </div>

        <div class="row testimonial-grid">
          <div class="col-sm-4 col-xs-12">
            <div class="testimonialContent  bg-color-1">
              <span class="userSign border-color-1"><i class="fa fa-quote-left color-1" aria-hidden="true"></i></span>
              <p>ニッコリケア를 사용하면서 알림장 쓰는 시간이 정말 줄었어요. 절약된 시간을 통해 보다 더 아이들에게 신경을 써줄 수 있게 되었어요!</p>
              <h3>영진유치원<br> <small>전현주 원장님(전)</small></h3>
            </div>
          </div>
          <div class="col-sm-4 col-xs-12">
            <div class="testimonialContent  bg-color-2">
              <span class="userSign border-color-2"><i class="fa fa-quote-left color-2" aria-hidden="true"></i></span>
              <p>월이나 학기 별로 사진을 폴더로 정리할 필요가 없어요. 부모님이 원하시면 직접 사진을 다운로드 받을 수 있기 때문이죠. 사진 작업이라는 큰 일이 사라지니 너무 편해요.</p>
              <h3>강남유치원<br> <small>서미정 원장님</small></h3>
            </div>
          </div>
          <div class="col-sm-4 col-xs-12">
            <div class="testimonialContent  bg-color-3">
              <span class="userSign border-color-3"><i class="fa fa-quote-left color-3" aria-hidden="true"></i></span>
              <p>같은 사진을 알림장에 보내고 홈페이지나 카페에 따로 또 올려야했어요. 키즈노트는 한 번만 올리면 모든 업무가 끝나서 정말 편해요.</p>
              <h3>해바라기 학원<br> <small>문다혜 대표님</small></h3>
            </div>
          </div>
          <div class="col-sm-4 col-xs-12">
            <div class="testimonialContent  bg-color-4">
              <span class="userSign border-color-4"><i class="fa fa-quote-left color-4" aria-hidden="true"></i></span>
              <p>알림장을 손으로 작성할 때보다 확실히 업무량이 줄어들었어요. 반 아이들의 공통적인 활동 내용은 알림장 작성시 쉽게 복사할 수 있어서 편해요</p>
              <h3>대구유치원<br> <small>김영희 원장님</small></h3>
            </div>
          </div>
          <div class="col-sm-4 col-xs-12">
            <div class="testimonialContent  bg-color-5">
              <span class="userSign border-color-5"><i class="fa fa-quote-left color-5" aria-hidden="true"></i></span>
              <p>집에서도 직장에서도 스마트폰으로 우리아이의 사진이나 알림장을 간단히 볼수있어요 </p>
              <h3>영진유치원<br> <small>진주완 어머님</small></h3>
            </div>
          </div>
          <div class="col-sm-4 col-xs-12">
            <div class="testimonialContent  bg-color-6">
              <span class="userSign border-color-6"><i class="fa fa-quote-left color-6" aria-hidden="true"></i></span>
              <p>ニッコリケア 하나만 제대로 관리하면 되니 교사들도 편하고, 관리를 하는 원아의 입장에서도 훨씬 편해요. 아직 사용하지 않는 원이 있다면, 꼭 추천하고 싶습니다!</p>
              <h3>청담동 유치원 <br> <small>권슬기 원장님</small></h3>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- COUNT UP SECTION-->
    <section class="countUpSection">
      <div class="container">
        <div class="sectionTitleSmall">
          <h2>ニッコリケア 서비스 현황</h2>
          <p>{{ date("Y") }}년도 {{ date("m") }}월 기준</p>
        </div>

        <div class="row">
          <div class="col-sm-3 col-xs-12">
            <div class="text-center">
              <div class="counter">89</div>
              <div class="counterInfo bg-color-1">유치원</div>
            </div>
          </div>
          <div class="col-sm-3 col-xs-12">
            <div class="text-center">
              <div class="counter">579</div>
              <div class="counterInfo bg-color-2">원아</div>
            </div>
          </div>
          <div class="col-sm-3 col-xs-12">
            <div class="text-center">
              <div class="counter">479</div>
              <div class="counterInfo bg-color-3">부모</div>
            </div>
          </div>
          <div class="col-sm-3 col-xs-12">
            <div class="text-center">
              <div class="counter">215</div>
              <div class="counterInfo bg-color-4">유치원 교사</div>
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
      <!-- FOOTER INFO AREA -->


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

  <!-- LOGIN MODAL -->
  <div class="modal fade customModal" id="loginModal" tabindex="-1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="panel panel-default formPanel">
          <div class="panel-heading bg-color-1 border-color-1">
            <h3 class="panel-title">ニッコリケア ログイン</h3>
          </div>
          <div class="panel-body">
            <form action="{{route('sessions.store')}}" method="POST" role="form">
              {!! csrf_field() !!}
              <div class="form-group formField">
                <input type="email" class="form-control" name="user_id" placeholder="ID" autofocus>
              </div>
              <div class="form-group formField">
                <input type="password" class="form-control" name="password" placeholder="Password">
              </div>
              <div class="form-group formField">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="remember" value="{{ old('remember', 1) }}" checked>
                    ログイン記憶する<br>
                    <span class="text-danger">
                      (共用パソコンでは使用しないでください!)
                    </span>
                  </label>
                </div>
              </div>
              <div class="form-group formField">
                <input class="btn btn-primary btn-block bg-color-3 border-color-3" type="submit" value="ログイン" >
              </div>
              <div class="form-group formField">
                <p class="help-block"><a href="#">パスワードを忘れてしまいましたか？</a></p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- CREATE ACCOUNT MODAL -->
  <div class="modal fade customModal" id="createAccount" tabindex="-1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="panel panel-default formPanel">
          <div class="panel-heading bg-color-1 border-color-1">
            <h3 class="panel-title">ニッコリケア 会員加入</h3>
          </div>
          <a href="#"></a>
          <div class="panel-body">
              <div class="form-group formField">
                <input style="font-size:large;" class="btn btn-primary btn-block bg-color-4 border-color-4" value="院長の会員加入" onclick="location.replace('{{route('users.create',['position'=>'director'])}}')">
                <input style="font-size:large;" class="btn btn-primary btn-block bg-color-4 border-color-4" value="先生の会員加入" onclick="location.replace('{{route('users.create',['position'=>'teacher'])}}')">
                <input style="font-size:large;" class="btn btn-primary btn-block bg-color-4 border-color-4" value="父母会員加入" onclick="location.replace('{{route('users.create',['position'=>'parents'])}}')">
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
  <script>

    function checkChange() {
      var selectValue = document.getElementById('selectBox').value;
      switch(selectValue){
        case "parents":
        $("#kindername_check").hide();
        $("#address_check").hide();
        break;

        case "director":
        $("#kindername_check").show();
        $("#address_check").show();
        break;

        case "teacher":
        $("#kindername_check").show();
        $("#address").hide();
        break;
      }
    }
  </script>


</body>

</html>
