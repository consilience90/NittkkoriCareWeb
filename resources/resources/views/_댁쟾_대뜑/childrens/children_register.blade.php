<!DOCTYPE html>
<html lang="en">

<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home - 부모페이지</title>

  <!-- PLUGINS CSS STYLE -->
  <link href="{{ asset('plugins/jquery-ui/jquery-ui.css') }}" rel="stylesheet">
  <link href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{ asset('plugins/rs-plugin/css/settings.css') }}" media="screen">
  <link rel="stylesheet" type="text/css" href="{{ asset('plugins/selectbox/select_option1.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('plugins/owl-carousel/owl.carousel.css') }}" media="screen">
  <link rel="stylesheet" type="text/css" href="{{ asset('plugins/isotope/jquery.fancybox.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('plugins/isotope/isotope.css') }}">

  <!-- GOOGLE FONT -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Dosis:400,300,600,700" rel="stylesheet" type="text/css">
  <!-- CUSTOM CSS -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/colors/default.css') }}" id="option_color">

  <!-- Icons -->
  <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">

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
                <li><a href="" style="color:white;">권오교 부모님 환영합니다</a></li>
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
            <a class="navbar-brand" href="index.html" style="padding-top:0px;"><img src="img/test_logo.png" alt="logo"></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-right">

              <li class=" dropdown megaDropMenu color-2">
                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="300" data-close-others="true" aria-expanded="false">
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
                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-gg bg-color-6" aria-hidden="true"></i> <span>공지사항</span></a>
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





    <!--MAIN SECTION  -->

    <section class="mainContent full-width clearfix">
      <div class="container">
        <div class="row progress-wizard" style="border-bottom:0;">

          <div class="col-sm-4 col-xs-12 progress-wizard-step active">
            <div class="progress">
              <div class="progress-bar"></div>
            </div>
            <a href="#" class="progress-wizard-dot">
              <i class="fa fa-user" aria-hidden="true"></i>
            </a>
            <div class="progressInfo">1. 원아정보 입력</div>
          </div>

          <div class="col-sm-4 col-xs-12 progress-wizard-step incomplete">
            <div class="progress">
              <div class="progress-bar"></div>
            </div>
            <a href="#" class="progress-wizard-dot">
              <i class="fa fa-usd" aria-hidden="true"></i>
            </a>
            <div class="progressInfo">2. 유치원 가입 신청</div>
          </div>

          <div class="col-sm-4 col-xs-12 progress-wizard-step incomplete">
            <div class="progress">
              <div class="progress-bar"></div>
            </div>
            <a href="#" class="progress-wizard-dot">
              <i class="fa fa-check" aria-hidden="true"></i>
            </a>
            <div class="progressInfo">3. 신청 완료</div>
          </div>
        </div>

        <!--  -->
        <div class="row" id="childInfo">

          <div class="col-sm-4 col-sm-push-8 col-xs-12" st>
            <div class="panel-heading bg-color-3 border-color-3">
              <h3 style="font-size:x-large; color:white;"  class="panel-title">원아 사진</h3>
            </div>
            <div class="thumbnail image_preview" style="max-width: 100%; height: auto;">
              <img class="img-responsive img-rounded" width="100%;">
              <div class="caption">
                <p><a href="#" class="btn btn-primary" role="button">remove</a></p>
              </div>
            </div>

          </div>



          <div class="col-sm-8  col-sm-pull-4 col-xs-12">
            <form action="#" method="POST" role="form" class="form">
              <div class="panel panel-default checkoutInfo">
                <div class="panel-heading bg-color-3 border-color-3">
                  <h3 class="panel-title">원아 정보</h3>
                </div>
                <div class="panel-body">
                  <div class="form-group">
                    <div class="col-sm-8 col-xs-12">
                      <label for="">원아 이름</label>
                      <input type="text" class="form-control border-color-1" id="">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-4 col-xs-12">
                      <label for="">생년 월일</label>
                      <input type="date" class="form-control border-color-2" id="" >
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-8 col-xs-12">
                      <label for="">주소</label>
                      <input type="text" class="form-control border-color-3" id="">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-4 col-xs-12">
                      <label for="">관계</label>
                      <input type="text" class="form-control border-color-4" value="모" id="">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-6 col-xs-12">
                      <label for="">보호자 연락처</label>
                      <input type="text" class="form-control border-color-5" id="" value="{{ Auth::user()->phoneNum }}">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-6 col-xs-12">
                      <label for="">보호자 이메일</label>
                      <input type="email" class="form-control border-color-6" id="" value="{{ Auth::user()->user_id }}">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-xs-12">
                      <label for="">원아에 관한 간단한 설명 및 특이사항</label>
                      <textarea class="form-control border-color-4"></textarea>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-xs-12">
                      <hr>
                      <label for="">아이의 사진을 선택해주세요</label>
                      <input type="file" name="image" id="image">

                    </div>
                  </div>

                </div>
              </div>
              <div class="continueBtnArea">
                <ul class="list-inline">
                  <li class="pull-right"><a href="#" class="btn btn-primary" >next</a></li>
                </ul>
              </div>
          </div>
        </div>

        <!-- select kindergarden and classroom -->
        <div class="row" id="select_classroom">

          <div class="col-sm-1 col-xs-12"> </div>
          <div class="col-sm-10 col-xs-12">
              <div class="panel panel-default checkoutInfo">
                <div class="panel-heading bg-color-3 border-color-3">
                  <h3 class="panel-title">유치원 가입 신청</h3>
                </div>
                <div class="panel-body">

                  <div class="form-group">
                    <div class="col-sm-4 col-xs-12">
                      <label for="">도시</label>
                      <div class="bookingDrop">
                        <select name="area" id="areaName" class="select-drop" onclick="area_select();">
                          <option value="서울">서울</option>
                          <option value="대구">대구</option>

                        </select>
                        <script>
                        function area_select(){
                          var localName=document.getElementById('areaName').value;
                          window.alert(localName);
                        }
                        </script>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-sm-4 col-xs-12">
                      <label for="">유치원 명</label>
                      <div class="bookingDrop">
                        <select name="kinderName" id="kinderName" class="select-drop" onclick="kinder_select()">

                        </select>
                      </div>
                    </div>
                  </div>


                  <div class="form-group">
                    <div class="col-sm-4 col-xs-12">
                      <label for="">ㅇㅇㅇ 유치원 반 목록</label>
                      <div class="bookingDrop alt">
                        <select name="className" id="className" class="select-drop">

                        </select>
                      </div>
                    </div>
                  </div>



                </div>
              </div>
              <div class="continueBtnArea">
                <ul class="list-inline">
                  <li><a href="#" class="btn btn-primary">back</a></li>
                  <li class="pull-right"><a href="#" class="btn btn-primary">next</a></li>
                </ul>
              </div>
            </form>
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
  <script type="text/javascript">
  // function area_select(){
  //   var area = document.getElementById('areaName').value;
  //   console.log(area);
  //   // $.ajax({
  //   //   url:"http://localhost/test/select_area.php",
  //   //   data:{
  //   //     area:area
  //   //   },
  //   //   dataType:'jsonp',
  //   //   success:function(data){
  //   //     //성공
  //   //     foreach(data as kName){
  //   //       window.alert(kName);
  //   //     }
  //   //   },error:function(){
  //   //     window.alert('서버접속 오류가 발생하였습니다.');
  //   //   }
  //   // });
  // }


    $('#image').on('change', function() {

      ext = $(this).val().split('.').pop().toLowerCase(); //확장자

      //배열에 추출한 확장자가 존재하는지 체크
      if ($.inArray(ext, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
        resetFormElement($(this)); //폼 초기화
        window.alert('이미지 파일이 아닙니다! (gif, png, jpg, jpeg 만 업로드 가능)');
      } else {
        file = $('#image').prop("files")[0];
        blobURL = window.URL.createObjectURL(file);
        $('.image_preview img').attr('src', blobURL);
        $('.image_preview').show();
        $('.image_preview').slideDown(); //업로드한 이미지 미리보기
        $(this).slideUp(); //파일 양식 감춤
      }
    });

    /**
    onclick event handler for the delete button.
    It removes the image, clears and unhides the file input field.
    */
    $('.image_preview a').bind('click', function() {
      resetFormElement($('#image')); //전달한 양식 초기화
      $('#image').slideDown(); //파일 양식 보여줌
      $('.thumbnail').slideUp(); //미리 보기 영역 감춤
      return false; //기본 이벤트 막음
    });


    /**
     * 폼요소 초기화
     * Reset form element
     *
     * @param e jQuery object
     */
    function resetFormElement(e) {
      e.wrap('<form>').closest('form').get(0).reset();
      //리셋하려는 폼양식 요소를 폼(<form>) 으로 감싸고 (wrap()) ,
      //요소를 감싸고 있는 가장 가까운 폼( closest('form')) 에서 Dom요소를 반환받고 ( get(0) ),
      //DOM에서 제공하는 초기화 메서드 reset()을 호출
      e.unwrap(); //감싼 <form> 태그를 제거
    }
  </script>
</body>

</html>
