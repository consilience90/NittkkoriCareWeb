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
  <link href="{{asset('/plugins/jquery-ui/jquery-ui.css')}}" rel="stylesheet">
  <link href="{{asset('/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{asset('/plugins/rs-plugin/css/settings.css')}}" media="screen">
  <link rel="stylesheet" type="text/css" href="{{asset('/plugins/selectbox/select_option1.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('/plugins/owl-carousel/owl.carousel.css')}}" media="screen">
  <link rel="stylesheet" type="text/css" href="{{asset('/plugins/isotope/jquery.fancybox.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('/plugins/isotope/isotope.css')}}">

  <!-- GOOGLE FONT -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Dosis:400,300,600,700" rel="stylesheet" type="text/css">

  <!-- CUSTOM CSS -->
  <link href="{{asset('/css/style.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('/css/colors/default.css')}}" id="option_color">

  <!-- Icons -->
  <link rel="shortcut icon" href="{{asset('/img/favicon.png')}}">

  <!-- HTML5 shim and Respond.js')}} for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js')}} doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')}}"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script>
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
            <div class="col-sm-9">
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




    <!-- LOGIN MODAL -->

    <div class="modal fade customModal" id="loginModal" tabindex="-1" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="panel panel-default formPanel">
            <div class="panel-heading bg-color-1 border-color-1">
              <h3 class="panel-title">ニッコリケア 로그인</h3>
            </div>
            <div class="panel-body">
              <form action="{{ route('sessions.store') }}" method="POST" role="form">
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
                      로그인 기억하기<br>
                      <span class="text-danger">
                        (공용 컴퓨터에서는 사용하지 마세요!)
                      </span>
                    </label>
                  </div>
                </div>
                <div class="form-group formField">
                  <input class="btn btn-primary btn-block bg-color-3 border-color-3" type="submit" value="로그인" >
                </div>
                <div class="form-group formField">
                  <p class="help-block"><a href="http://localhost:8000/auth/remind">비밀번호를 잊어버리셨나요?</a></p>
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
    <script src="{{asset('/plugins/jquery-ui/jquery-ui.js')}}"></script>
    <script src="{{asset('/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/plugins/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{asset('/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script src="{{asset('/plugins/selectbox/jquery.selectbox-0.1.3.min.js')}}"></script>
    <script src="{{asset('/plugins/owl-carousel/owl.carousel.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script src="{{asset('/plugins/counter-up/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('/plugins/isotope/isotope.min.js')}}"></script>
    <script src="{{asset('/plugins/isotope/jquery.fancybox.pack.js')}}"></script>
    <script src="{{asset('/plugins/isotope/isotope-triger.js')}}"></script>
    <script src="{{asset('/plugins/countdown/jquery.syotimer.js')}}"></script>
    <script src="{{asset('/plugins/velocity/velocity.min.js')}}"></script>
    <script src="{{asset('/plugins/smoothscroll/SmoothScroll.js')}}"></script>
    <script src="{{asset('/js/custom.js')}}"></script>
    <script>
    // document.querySelector('#submitBtn').onclick = function() {
    //   swal({
    //       title: "회원 가입 완료!",
    //       text: "유치원 가입신청 메세지를 보냈습니다!",
    //       type: "success",
    //       confirmButtonColor: "rgb(77, 193, 186)",
    //       confirmButtonText: "확인",
    //       closeOnConfirm: false
    //     },
    //     function(isConfirm) {
    //       if (isConfirm) {
    //         location.replace('./index.html');
    //       }
    //     });
    // };

    function show() {
      $('#join_1').toggle();
      $('#join_2').toggle();
    }

    function show2() {
      $('#join_2').toggle();
      $('#join_3').toggle();
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

    $('#image2').on('change', function() {

      ext = $(this).val().split('.').pop().toLowerCase(); //확장자

      //배열에 추출한 확장자가 존재하는지 체크
      if ($.inArray(ext, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
        resetFormElement($(this)); //폼 초기화
        window.alert('이미지 파일이 아닙니다! (gif, png, jpg, jpeg 만 업로드 가능)');
      } else {
        file = $('#image2').prop("files")[0];
        blobURL = window.URL.createObjectURL(file);
        $('.image_preview2 img').attr('src', blobURL);
        $('.image_preview2').show();
        $('.image_preview2').slideDown(); //업로드한 이미지 미리보기
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

    $('.image_preview2 a').bind('click', function() {
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

    function areaSelect(){
      var areaValue = document.getElementById("select_area").value;
      $.ajax({
          url:"{{ route('kinderName.get') }}",
          data:{
            area:areaValue,
          },
          dataType:"jsonp",
          success:function(data){
              //성공
              if(data.result == "success"){
                //넘어온 유치원의 정보 배열의 길이를 가져와서 loop를 돌린다.
                // 그렇게 돌린 loop를 이용을 하여 option값을 생성을 한다.
                $('#select_kindergarden option').remove();
                $("#select_kindergarden").append("<option value=''>::선택::</option>");
                for(var i =0 ;i < data.data.length; i++){
                  var kId = data.data[i].kId;
                  var kName = data.data[i].kName;
                  $("#select_kindergarden").append("<option value="+kId+">"+kName+"</option>");
                }
              }
              //오류
              else {
                window.alert("데이터가 없습니다.");
              }
          }, error: function(){
              window.alert("서버 접속 오류가 발생하였습니다.");
          }
      });
    }

    function kinderSelect(){
     //  alert('test');
      var kinderId = document.getElementById("select_kindergarden").value;
      if(kinderId != ""){
        $.ajax({
          url:"{{ route('className.get') }}",
            data:{
              kinderId:kinderId
            },
            dataType:"jsonp",
            success:function(data){
                //성공
                if(data.result == "success"){
                  //넘어온 유치원의 정보 배열의 길이를 가져와서 loop를 돌린다.
                  // 그렇게 돌린 loop를 이용을 하여 option값을 생성을 한다.
                  $('#select_classroom option').remove();

                  if(data.data.length){
                    $("#select_classroom").append("<option value=''>::선택::</option>");
                    for(var i =0 ;i < data.data.length; i++){
                      var cId = data.data[i].cId;
                      var cName = data.data[i].cName;
                      var cAge = data.data[i].ages;
                      $("#select_classroom").append("<option value="+cId+">"+cName+"("+cAge+"세반)</option>");
                     }
                   }else{
                     $("#select_classroom").append("<option value=''>::해당유치원에 반이 없습니다.::</option>");
                   }
               }
                //오류
                else {
                  window.alert("디비 접속에 오류가 발생하였습니다.");
                }
            }, error: function(){
                window.alert("서버 접속 오류가 발생하였습니다.");
            }
        });
      }else{
        alert('유치원을 선택해주세요');
     }
    }
    </script>
    </body>

    </html>
