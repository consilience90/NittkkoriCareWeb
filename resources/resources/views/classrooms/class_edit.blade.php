
@extends('master.classroom')

 @section('main_content')


    <!-- PAGE TITLE SECTION-->
    <section class="pageTitleSection">
      <div class="container">
        <div class="pageTitleInfo">
          <h2>반 정보수정</h2>
          <ol class="breadcrumb">
            <li>T-Supporter</li>
            <li class="active"><a href="./class_list.html">반 목록</a></li>
            <li class="active">반 정보수정</li>
          </ol>
        </div>
      </div>
    </section>

<!--MAIN SECTION  -->
    <section class="mainContent full-width clearfix">
        <div class="container">

          <div class="row" style="
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
  -ms-box-align:center;">


            <div class="col-sm-9 col-xs-12">
              <form action="#" method="POST" role="form" class="form" enctype="multipart/form-data">
                  {!! csrf_field() !!}

                <div class="panel panel-default checkoutInfo">
                  <div class="panel-heading bg-color-3 border-color-3">
                    <h3 class="panel-title">반 정보 수정</h3>
                  </div>
                  <div class="panel-body">
                    <div class="form-group">
                      <div class="col-sm-12 col-xs-12">
                        <label for="">수정할 반 이름을 입력해주세요</label>
                        <input type="text" class="form-control border-color-1" value="{{$classInfo->cName}}">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-2 col-xs-12">
                        <label for="">몇 세반 인가요?</label>
                        <input type="number" class="form-control border-color-2" value="{{$classInfo->ages}}">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-5 col-xs-12">
                        <label for="">담임교사 이름</label>
                        <input type="text" class="form-control border-color-3" value="{{$classInfo->mainTname}}">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-5 col-xs-12">
                        <label for="">부 담임교사 이름</label>
                        <input type="text" class="form-control border-color-4" value="{{$classInfo->subTname}}">
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="col-xs-12">
                        <label for="">반의 간단한 설명을 써주세요</label>
                        <textarea class="form-control border-color-5" placeholder="{{$classInfo->cExplain}}"></textarea>
                      </div>
                    </div>



                    <div class="form-group">
                      <div class="col-xs-12">
                        <hr>
                        <label for="">반의 대표 이미지를 선택해주세요</label>
                        <input type="file" name="image" id="image">
                      </div>
                    </div>

                    <div id="baseImage">
                            <img src="{{asset('img/child/child03.JPG')}}"/>
                        </div>


                    <div id="image_preview" style="display:none;">
                            <img src="#"/>
                            <br />
                            <a href="#">Remove</a>
                        </div>
                  </div>
                </div>


                <div class="continueBtnArea">
                  <ul class="list-inline">
                    <li class="pull-right"><input type="submit" class="btn btn-primary" value="등록"></li>
                  </ul>
                </div>
              </form>
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

  <script type="text/javascript">
  $('#image').on('change', function() {

      ext = $(this).val().split('.').pop().toLowerCase(); //확장자

      //배열에 추출한 확장자가 존재하는지 체크
      if($.inArray(ext, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
          resetFormElement($(this)); //폼 초기화
          window.alert('이미지 파일이 아닙니다! (gif, png, jpg, jpeg 만 업로드 가능)');
      } else {
          file = $('#image').prop("files")[0];
          blobURL = window.URL.createObjectURL(file);
          $('#image_preview img').attr('src', blobURL);
          $('#baseImage').hide();
          $('#image_preview').show();
          $('#image_preview').slideDown(); //업로드한 이미지 미리보기
          $(this).slideUp(); //파일 양식 감춤
      }
  });

  /**
  onclick event handler for the delete button.
  It removes the image, clears and unhides the file input field.
  */
  $('#image_preview a').bind('click', function() {
      resetFormElement($('#image')); //전달한 양식 초기화
      $('#image').slideDown(); //파일 양식 보여줌
      $(this).parent().slideUp(); //미리 보기 영역 감춤
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
   
@stop
