
@extends('master.classroom')

 @section('main_content')

    <!-- PAGE TITLE SECTION-->
    <section class="pageTitleSection">
      <div class="container">
        <div class="pageTitleInfo">
          <h2>반 개설</h2>
          <ol class="breadcrumb">
            <li>T-Supporter</li>
            <li class="active"><a href="{{ route('classroom.index') }}">반 목록</a></li>
            <li class="active">반 개설</li>
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
              <form action="{{ route('classroom.store') }}" method="POST" role="form" class="form">
                {!! csrf_field() !!}
                <div class="panel panel-default checkoutInfo">
                  <div class="panel-heading bg-color-3 border-color-3">
                    <h3 class="panel-title">반 정보 입력</h3>
                  </div>
                  <div class="panel-body">
                    <div class="form-group">
                      <div class="col-sm-12 col-xs-12">
                        <label for="">반 이름을 입력해주세요</label>
                        <input type="text" name="className" class="form-control border-color-1">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-2 col-xs-12">
                        <label for="">몇 세반 인가요?</label>
                        <input type="number" name="classAge" class="form-control border-color-2" max="7" min="4" value="5">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-5 col-xs-12">
                        <label for="">담임교사 이름</label>
                        <input type="text" name="mainTeacher" class="form-control border-color-3" id="">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-5 col-xs-12">
                        <label for="">부 담임교사 이름</label>
                        <input type="text" name="subTeacher" class="form-control border-color-4" id="">
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="col-xs-12">
                        <label for="">반의 간단한 설명을 써주세요</label>
                        <textarea name="classInfo" class="form-control border-color-5"></textarea>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="col-xs-12">
                        <hr>
                        <label for="">반의 대표 이미지를 선택해주세요</label>
                        <input type="file" name="image" id="image">
                      </div>
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
                    <li class="pull-right">
                      <input type="submit" class="btn btn-primary" value="등록">
                    </li>
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

      @stop
