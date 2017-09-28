<!DOCTYPE html>
<html lang="en">

<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>교사 회원가입</title>

  <!-- PLUGINS CSS STYLE -->
  <link href="{{ asset('plugins/jquery-ui/jquery-ui.css')}}" rel="stylesheet">
  <link href="{{ asset('plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{ asset('plugins/rs-plugin/css/settings.css')}}" media="screen">
  <link rel="stylesheet" type="text/css" href="{{ asset('plugins/selectbox/select_option1.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('plugins/owl-carousel/owl.carousel.css')}}" media="screen">
  <link rel="stylesheet" type="text/css" href="{{ asset('plugins/isotope/jquery.fancybox.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('plugins/isotope/isotope.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('dist/sweetalert.css')}}">

  <!-- GOOGLE FONT -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Dosis:400,300,600,700" rel="stylesheet" type="text/css">

  <!-- CUSTOM CSS -->
  <link href="{{ asset('css/style.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/colors/default.css')}}" id="option_color">

  <!-- Icons -->
  <link rel="shortcut icon" href="{{ asset('img/favicon.png')}}">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

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
            <div class="col-sm-9">
              <ul class="list-inline topList">
                <li style="color:white; font-size:xx-large;"><b>ニッコリケア</b></li>
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

    <form action="#" method="POST" role="form" class="form">
      <!--MAIN SECTION  -->

      <section class="mainContent full-width clearfix" id="join_1">
        <h1 class="bg-color-4" style="text-align:center; color:white;">교사 회원가입</h1>
        <hr>
        <div class="container">
          <div class="row progress-wizard" style="border-bottom:0;">

            <div class="col-sm-4 col-xs-12 progress-wizard-step active">
              <div class="progress">
                <div class="progress-bar"></div>
              </div>
              <a class="progress-wizard-dot">
              <i class="fa fa-user" aria-hidden="true"></i>
            </a>
              <div class="progressInfo">1. 개인정보 입력</div>
            </div>

            <div class="col-sm-4 col-xs-12 progress-wizard-step incomplete">
              <div class="progress">
                <div class="progress-bar"></div>
              </div>
              <a class="progress-wizard-dot">
              <i class="fa fa-usd" aria-hidden="true"></i>
            </a>
              <div class="progressInfo">2. 유치원 정보 입력</div>
            </div>

            <div class="col-sm-4 col-xs-12 progress-wizard-step incomplete">
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

            <div class="col-sm-4 col-sm-push-8 col-xs-12" st>
              <div class="panel-heading bg-color-3 border-color-3">
                <h3 style="font-size:x-large; color:white;" class="panel-title">선생님 사진</h3>
              </div>
              <div class="thumbnail image_preview" style="max-width: 100%; height: auto;">
                <img class="img-responsive img-rounded" width="100%;">
                <div class="caption">
                  <p><a href="#" class="btn btn-primary" role="button">삭제</a></p>
                </div>
              </div>

            </div>



            <div class="col-sm-8  col-sm-pull-4 col-xs-12">

              <div class="panel panel-default checkoutInfo">
                <div class="panel-heading bg-color-3 border-color-3">
                  <h3 class="panel-title">개인 정보</h3>
                </div>
                <div class="panel-body">
                  <div class="form-group">
                    <div class="col-sm-8 col-xs-12">
                      <label for="">선생님 이름</label>
                      <input type="text" name="name" class="form-control border-color-1" id="" required="">
                    </div>
                  </div>
                    <div class="form-group">
                      <div class="col-sm-4 col-xs-12">
                        <label for="">성별</label>
                        <div class="bookingDrop">
                          <select name="gender" class="select-drop">
                            <option value="female">여성</option>
                            <option value="male">남성</option>
                          </select>
                        </div>
                      </div>
                    </div>

                  <div class="form-group">
                    <div class="col-sm-6 col-xs-12">
                      <label for="">ID 입력</label>
                      <input type="text" name="user_id" class="form-control border-color-3" id="" required="">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-6 col-xs-12">
                      <label for="">Paswword 입력</label>
                      <input type="password" name="password" class="form-control border-color-3" id="" required="">
                    </div>
                  </div>


                  <div class="form-group">
                    <div class="col-sm-12 col-xs-12">
                      <label for="">선생님 연락처</label>
                      <input type="text" class="form-control border-color-5" name='phoneNum' id="">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-xs-12">
                      <hr>
                      <label for="">선생님 사진을 선택해주세요</label>
                      <input type="file" name="user_image" id="image" required="">
                    </div>
                  </div>
                </div>
              </div>

              <div class="continueBtnArea">
                <ul class="list-inline">
                  <li class="pull-right"><a class="btn btn-primary" onclick="show();">next</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="mainContent full-width clearfix" id="join_2" style="display:none;">
        <h1 class="bg-color-4" style="text-align:center; color:white;">교사 회원가입</h1>
        <hr>
        <div class="container">
          <div class="row progress-wizard" style="border-bottom:0;">

            <div class="col-sm-4 col-xs-12 progress-wizard-step complete">
              <div class="progress">
                <div class="progress-bar"></div>
              </div>
              <a class="progress-wizard-dot">
                  <i class="fa fa-user" aria-hidden="true"></i>
                </a>
              <div class="progressInfo">1. 개인정보 입력</div>
            </div>

            <div class="col-sm-4 col-xs-12 progress-wizard-step active">
              <div class="progress">
                <div class="progress-bar"></div>
              </div>
              <a class="progress-wizard-dot">
                  <i class="fa fa-usd" aria-hidden="true"></i>
                </a>
              <div class="progressInfo">2. 유치원 정보 입력</div>
            </div>

            <div class="col-sm-4 col-xs-12 progress-wizard-step incomplete">
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

            <div class="col-sm-1 col-xs-12"> </div>
            <div class="col-sm-10 col-xs-12">

              <div class="panel panel-default checkoutInfo">
                <div class="panel-heading bg-color-3 border-color-3">
                  <h3 class="panel-title">유치원 선택</h3>
                </div>
                <div class="panel-body">

                  <div class="form-group">
                    <div class="col-sm-6 col-xs-12">
                      <label for="address">주소</label>
                      <div class="bookingDrop">
                        <select name="address" class="select-drop">
                              <option value="서울">서울</option>
                              <option value="대구">대구</option>
                              <option value="부산">부산</option>
                              <option value="경기도">경기도</option>
                              <option value="제주도">제주도</option>
                              <option value="강원도">강원도</option>
                            </select>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-sm-6 col-xs-12">
                      <label for="">유치원 명</label>
                      <input type="text" class="form-control border-color-1" id="" required="">
                    </div>
                  </div>

                </div>
              </div>
              <div class="continueBtnArea">
                <ul class="list-inline">
                  <li><a onclick="show();" class="btn btn-primary">back</a></li>
                  <li class="pull-right"><input class="btn btn-primary" type="submit" onclick="location.replace('./complete_join.html')"></li>
                </ul>
              </div>

            </div>
          </div>
        </div>
      </section>
  </form>



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



  <!-- LOGIN MODAL -->
  <div class="modal fade customModal" id="loginModal" tabindex="-1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="panel panel-default formPanel">
          <div class="panel-heading bg-color-1 border-color-1">
            <h3 class="panel-title">ニッコリケア 로그인</h3>
          </div>
          <div class="panel-body">
            <form action="#" method="POST" role="form">
              <div class="form-group formField">
                <input type="text" class="form-control" placeholder="ID">
              </div>
              <div class="form-group formField">
                <input type="password" class="form-control" placeholder="Password">
              </div>
              <div class="form-group formField">
                <input class="btn btn-primary btn-block bg-color-3 border-color-3" value="원장 로그인" onclick="location.replace('./main_director.html')">
                <input class="btn btn-primary btn-block bg-color-3 border-color-3" value="교사 로그인" onclick="location.replace('./main_teacher.html')">
                <input class="btn btn-primary btn-block bg-color-3 border-color-3" value="부모 로그인" onclick="location.replace('./main_parents.html')">
              </div>
              <div class="form-group formField">
                <p class="help-block"><a href="#">비밀번호를 잊어버리셨나요?</a></p>
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
            <h3 class="panel-title">ニッコリケア 회원가입</h3>
          </div>
          <div class="panel-body">
              <div class="form-group formField">
                <input class="btn btn-primary btn-block bg-color-4 border-color-4" value="원장 회원가입" onclick="location.replace('{{route('users.create',['position'=>'director'])}}')">
                <input class="btn btn-primary btn-block bg-color-4 border-color-4" value="교사 회원가입" onclick="location.replace('{{route('users.create',['position'=>'teacher'])}}')">
                <input class="btn btn-primary btn-block bg-color-4 border-color-4" value="부모 회원가입" onclick="location.replace('{{route('users.create',['position'=>'parents'])}}')">
              </div>
          </div>
        </div>
      </div>
    </div>
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
  <script type="text/javascript">
    function show() {
      $('#join_1').toggle();
      $('#join_2').toggle();
    }


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
