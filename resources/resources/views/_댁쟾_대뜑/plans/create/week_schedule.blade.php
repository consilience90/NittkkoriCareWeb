<!DOCTYPE html>
<html lang="en">

<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ニッコリケア - Class LIST</title>

  <link href="{{ asset('plugins/jquery-ui/jquery-ui.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/tablestyle.css') }}" type="text/css" media="screen" />
  <link href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{ asset('plugins/rs-plugin/css/settings.css') }}" media="screen">
  <link rel="stylesheet" type="text/css" href="{{ asset('plugins/selectbox/select_option1.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('plugins/owl-carousel/owl.carousel.css') }}" media="screen">
  <link rel="stylesheet" type="text/css" href="{{ asset('plugins/isotope/jquery.fancybox.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('plugins/isotope/isotope.css') }}">
  <link rel="stylesheet" href="{{ asset('css/gooey.min.css') }}">
  <style media="screen">
    .footer {
      position: absolute;
      bottom: 10px;
      padding-right: 0px;
      padding-left: 0px;
    }


  </style>


  <!-- GOOGLE FONT -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Dosis:400,300,600,700" rel="stylesheet" type="text/css">
  <link href="{{ asset('css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet" />

  <!-- CUSTOM CSS -->
  <link href="{{ asset('css/style.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/colors/default.css')}}" id="option_color">


</head>
<!-- <body class="body-wrapper" onload="InitializeStaticMenu();"> -->

<body class="body-wrapper">

  <div class="main-wrapper" id="redips-drag">
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
                <li><a href="" style="color:white;">권오교 원장님 환영합니다</a></li>
                <li style="color:white;"><i class="fa fa-envelope bg-color-1" aria-hidden="true"></i>도착 메세지 10건</li>
              </ul>
            </div>
            <div class="col-sm-5">
              <ul class="list-inline functionList">
                <li style="margin-left:180px;">
                  <a href="./index.html" style="font-size:large; color:white;">Logout</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- PAGE TITLE SECTION-->
    <section class="pageTitleSection">
      <div class="container">
        <div class="pageTitleInfo">
          <h2>해바라기반 -주간 교육계획안 작성</h2>
          <ol class="breadcrumb">
            <li>T-Supporter</li>
            <li class="active"><a href="./schedule_menu.html">교육 계획안</a></li>
            <li class="active">해바라기 반</li>
          </ol>
        </div>
      </div>
    </section>

    <!-- MAIN SECTION -->
    <section class="mainContent full-width clearfix courseSingleSection" style="padding-top:60px; margin-bottom:100px;">
      <div class="container">

        <div class="row progress-wizard" style="border-bottom:0;">

          <div class="col-sm-3 col-xs-12 progress-wizard-step complete">
            <div class="progress">
              <div class="progress-bar"></div>
            </div>
            <a href="{{ route('plans.selectCreate',['clickInfo'=>'year']) }}" class="progress-wizard-dot">
              <i class="fa fa-file-text-o" aria-hidden="true"></i>
            </a>
            <div class="progressInfo" style="padding-left:34px;">연간계획안</div>
          </div>

          <div class="col-sm-3 col-xs-12 progress-wizard-step complete">
            <div class="progress">
              <div class="progress-bar"></div>
            </div>
            <a href="{{ route('plans.selectCreate',['clickInfo'=>'month']) }}" class="progress-wizard-dot">
              <i class="fa fa-file-text-o" aria-hidden="true"></i>
            </a>
            <div class="progressInfo" style="padding-left:34px;">월간계획안</div>
          </div>

          <div class="col-sm-3 col-xs-12 progress-wizard-step active">
            <div class="progress">
              <div class="progress-bar"></div>
            </div>
            <a href="{{ route('plans.selectCreate',['clickInfo'=>'week']) }}" class="progress-wizard-dot">
              <i class="fa fa-file-text-o" aria-hidden="true"></i>
            </a>
            <div class="progressInfo" style="padding-left:34px;">주간계획안</div>
          </div>

          <div class="col-sm-3 col-xs-12 progress-wizard-step incomplete">
            <div class="progress">
              <div class="progress-bar"></div>
            </div>
            <a href="{{ route('plans.selectCreate',['clickInfo'=>'day']) }}" class="progress-wizard-dot">
              <i class="fa fa-file-text-o" aria-hidden="true"></i>
            </a>
            <div class="progressInfo" style="padding-left:34px;">일간계획안</div>
          </div>
        </div>

        <div class="row">


          <div class="col-xs-10 block">
            <div class="thumbnail alt">
              <div class="caption">

                <h2 id="changeMonth" class="color-1" style="text-align:center; font-size:400%;"></h2>
                <div class="table-responsive">

                  <div class="col-xs-7 form-group form-inline">
                    <label>월 선택:&nbsp; </label>
                    <input type="text" id="schMonth" class="form-control" size="8" />
                      <label id="weekLabel">주간 선택:&nbsp; </label>
                      <select id="selectWeek" class="form-control">
                      <option value="0">주간 선택</option>
                      <option value="1">1주차</option>
                      <option value="2">2주차</option>
                      <option value="3">3주차</option>
                      <option value="4">4주차</option>
                      <option value="5">5주차</option>
                    </select>



                  </div>



                  <table class="table table-curved tg table2excel" id="maintable" style="text-align:center; vertical-align:middle;">
                    <thead>
                      <tr class="">
                        <th class="col-sm-1 redips-mark bg-color-2">
                          <h3 style="text-align:center; margin-bottom:0px; vertical-align:middle;">월간 주제</h3></th>
                        <th id="monthTopic" class="col-sm-5 redips-mark border-color-2" style="border:1px dotted; text-align:center; vertical-align:middle;" colspan="5">동기화</th>
                      </tr>
                    </thead>
                    <tbody id="tbody">


                      <!-- bg-color-5 border-color-5 -->
                      <tr>
                        <td class="col-sm-2 redips-mark bg-color-4">
                          <h3 style="margin-bottom:0px;">주간 주제</h3></td>
                        <td id="weekTopic" class="col-sm-8 redips-mark " colspan="5"><b> 동기화 </b></td>
                      </tr>

                      <tr>
                        <td class="col-sm-2 redips-mark ">
                          <h3 style="margin-bottom:0px;">주간 목표</h3></td>
                        <td id="goal" class="col-sm-8 redips-single" colspan="5"></td>
                      </tr>



                      <tr>
                        <td class="redips-mark bg-color-3 border-color-3" style="">
                          <h3 style="margin-bottom:0px;">요일</h3></td>
                        <td class="redips-mark bg-color-3" style="vertical-align:middle;"><b>월</b></td>
                        <td class="redips-mark bg-color-3" style="vertical-align:middle;"><b>화</b></td>
                        <td class="redips-mark bg-color-3" style="vertical-align:middle;"><b>수</b></td>
                        <td class="redips-mark bg-color-3" style="vertical-align:middle;"><b>목</b></td>
                        <td class="redips-mark bg-color-3" style="vertical-align:middle;"><b>금</b></td>
                      </tr>

                      <tr>
                        <td class="redips-mark bg-color-1 border-color-1" style="vertical-align:middle;">
                          <h3 style="margin-bottom:0px;">일일 주제</h3></td>
                        <td id="mon" class="redips-mark" style="vertical-align:middle;"><b>동기화</b></td>
                        <td id="tue" class="redips-mark" style="vertical-align:middle;"><b>동기화</b></td>
                        <td id="wed" class="redips-mark" style="vertical-align:middle;"><b>동기화</b></td>
                        <td id="thu" class="redips-mark" style="vertical-align:middle;"><b>동기화</b></td>
                        <td id="fri" class="redips-mark" style="vertical-align:middle;"><b>동기화</b></td>
                      </tr>


                      <tr>
                        <td class="redips-mark" style="vertical-align:middle;"><b>자유선택활동</b></td>
                        <td class="mon"></td>
                        <td class="tue"></td>
                        <td class="wed"></td>
                        <td class="thu"></td>
                        <td class="fri"></td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="vertical-align:middle;"><b><small>[단체활동]</small>이야기나누기</b></td>
                        <td class="mon"></td>
                        <td class="tue"></td>
                        <td class="wed"></td>
                        <td class="thu"></td>
                        <td class="fri"></td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="vertical-align:middle;"><b><small>[단체활동]</small>동화</b></td>
                        <td class="mon"></td>
                        <td class="tue"></td>
                        <td class="wed"></td>
                        <td class="thu"></td>
                        <td class="fri"></td>
                      </tr>
                      <tr>
                        <td class="redips-mark" style="vertical-align:middle;"><b><small>[단체활동]</small>신체표현</b></td>
                        <td class="mon"></td>
                        <td class="tue"></td>
                        <td class="wed"></td>
                        <td class="thu"></td>
                        <td class="fri"></td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="vertical-align:middle;"><b><small>[단체활동]</small>미술</b></td>
                        <td class="mon"></td>
                        <td class="tue"></td>
                        <td class="wed"></td>
                        <td class="thu"></td>
                        <td class="fri"></td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="vertical-align:middle;"><b><small>[단체활동]</small>감상</b></td>
                        <td class="mon"></td>
                        <td class="tue"></td>
                        <td class="wed"></td>
                        <td class="thu"></td>
                        <td class="fri"></td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="vertical-align:middle;"><b><small>[단체활동]</small>실외활동</b></td>
                        <td class="mon"></td>
                        <td class="tue"></td>
                        <td class="wed"></td>
                        <td class="thu"></td>
                        <td class="fri"></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>




          <div id="gooey-round" class="col-xs-2 block">
            <input type="checkbox" class="menu-open" name="menu-open3" id="menu-open3" />
            <label class="open-button" for="menu-open3" style="right: -40px;">
  <span class="burger burger-1"></span>
  <span class="burger burger-2"></span>
  <span class="burger burger-3"></span>
</label>
            <a class="gooey-menu-item" style="right: -40px;" onclick="activityContentView();">단체 활동</a>
            <a class="gooey-menu-item" style="right: -40px;" onclick="freeContentView();">자유 활동</a>
            <a class="gooey-menu-item" style="right: -40px;" onclick="inputContentView();">직접 입력  </a>
            <a id="excel" class="gooey-menu-item" style="right: -40px;"> EXCEL 변환 </a>
            <a id="save" class="gooey-menu-item" style="right: -40px;"> 계획안 저장 </a>
          </div>
        </div>
      </div>
    </section>

    <!-- FOOTER -->
    <footer class="footer col-sm-12 test">
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
      <div class="copyRight clearfix" style="background-color:white;  padding-bottom:0px; padding-top:10px;">
        <div class="container">
          <div class="col-xs-12 block" id="ContentMenu">
            <div class="thumbnail thumbnailContent alt">

              <!--월간 컨텐츠  -->
              <div class="caption" id="activityContent" style="padding-top:0px; padding-bottom:0px;">
                <h3 class="color-3" style="text-align:center;">단체활동 컨텐츠</h3>
                <div class="table-responsive">
                  <table class="table table-curved tg" id="table1">
                    <tr>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone"><span>단체활동 1</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone"><span>단체활동 2</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone"><span>단체활동 3</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone"><span>단체활동 4</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone"><span>단체활동 5</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone"><span>단체활동 6</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone"><span>단체활동 7</span></div>
                      </td>
                    </tr>
                    <tr>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone"><span>단체활동 8</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone"><span>단체활동 9</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone"><span>단체활동 10</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone"><span>단체활동 11</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone"><span>단체활동 12</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone"><span>단체활동 13</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone"><span>단체활동 14</span></div>
                      </td>

                    </tr>
                  </table>
                </div>
              </div>


              <!--월간 컨텐츠  -->
              <div class="caption" id="freeContent" style="padding-top:0px; padding-bottom:0px;">
                <h3 class="color-3" style="text-align:center;">자유활동 컨텐츠</h3>
                <div class="table-responsive">
                  <table class="table table-curved tg" id="table2">
                    <tr>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone" id="test"><span>자유활동 1</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone"><span>자유활동 2</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone "><span>자유활동 3</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone "><span>자유활동 4</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone"><span>자유활동 5</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone"><span>자유활동 6</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone"><span>자유활동 7</span></div>
                      </td>
                    </tr>
                    <tr>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone"><span>자유활동 8</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone"><span>자유활동 9</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone"><span>자유활동 10</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone"><span>자유활동 11</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone"><span>자유활동 12</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone"><span>자유활동 13</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone"><span>자유활동 14</span></div>
                      </td>
                    </tr>
                  </table>
                </div>
              </div>

              <!--직접입력  -->
              <div class="caption" id="inputContent" style="padding-top:0px; padding-bottom:0px;">
                <h3 class="color-3" style="text-align:center;">직접입력</h3>
                <div class="table-responsive">
                  <table class="table table-curved tg" id="table3">
                    <tr>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone week month form-group" style="padding:10px 10px 40px 10px;"><input class="form-control" type="text" placeholder="텍스트입력" name=""></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone week month form-group" style="padding:10px 10px 40px 10px;"><select class="" name="">
                            <option value="0">첫번째 항목</option>
                            <option value="2">두번째 항목</option>
                          </select></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone week month form-group" style="padding:10px 10px 40px 10px;"><input class="form-control" type="number" name="" placeholder="숫자"></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone week month form-group" style="padding:10px 10px 40px 10px;"><input class="form-control" type="time" name="" placeholder="시간"></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone week month form-group" style="padding:10px 10px 40px 10px;"><input class="form-control" type="date" name="" placeholder="날짜"></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone week month form-group" style="padding:10px 10px 40px 10px;"><input class="form-control" type="range" name=""></div>
                      </td>
                    </tr>
                  </table>
                </div>
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
  <script type="text/javascript" src="{{ asset('js/header.js')}}"></script>
  <script type="text/javascript" src="{{ asset('js/redips-drag-min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('js/redips-table-min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('js/tableScript.js')}}"></script>
  <script src="{{ asset('js/gooey.min.js')}}"></script>
  <script src="{{ asset('dist/jquery.table2excel.min.js')}}"></script>
  <script src="{{ asset('dist/jquery.mtz.monthpicker.js')}}"></script>
  <script src="{{ asset('js/moment.js')}}"></script>
  <script src="{{ asset('js/bootstrap-datetimepicker.min.js')}}"></script>

  <script type="text/javascript">
    $(document).ready(function() {
      StaticMenuOn();
      $('footer').hide();
      $("#activityContent").hide();
      $("#freeContent").hide();
      $("#inputContent").hide();
    });



    // AJAX 데이터 송수신
    $("#save").click(function() {
      //날짜들
      var selectWeek = document.getElementById('selectWeek').value; //주차
      var selectMonth = document.getElementById('schMonth').value; // 년도와 달
      selectMonth = selectMonth.split('-'); //문자열 자르기
      //주간 목표(INPUT TEXT 만)
      var goal = $("#goal").find("input").val();
      console.log(selectMonth[0],selectMonth[1],selectWeek,goal); //년도,달.주차,주간목표

      var day = {
        //요일별 데이터
        'mon':       [
                      $(".mon:eq(0)").children().text(), //자유선택활동
                      $(".mon:eq(1)").children().text(), //이야기나누기
                      $(".mon:eq(2)").children().text(), //동화
                      $(".mon:eq(3)").children().text(), //신체표현
                      $(".mon:eq(4)").children().text(), //미술
                      $(".mon:eq(5)").children().text(), //감상
                      $(".mon:eq(6)").children().text()  //실외활동
                    ],
        'tue':       [
                      $(".tue:eq(0)").children().text(), //자유선택활동
                      $(".tue:eq(1)").children().text(), //이야기나누기
                      $(".tue:eq(2)").children().text(), //동화
                      $(".tue:eq(3)").children().text(), //신체표현
                      $(".tue:eq(4)").children().text(), //미술
                      $(".tue:eq(5)").children().text(), //감상
                      $(".tue:eq(6)").children().text()  //실외활동
                    ],
      'wed':       [
                  $(".wed:eq(0)").children().text(), //자유선택활동
                  $(".wed:eq(1)").children().text(), //이야기나누기
                  $(".wed:eq(2)").children().text(), //동화
                  $(".wed:eq(3)").children().text(), //신체표현
                  $(".wed:eq(4)").children().text(), //미술
                                  $(".wed:eq(5)").children().text(), //감상
                                  $(".wed:eq(6)").children().text()  //실외활동
                                ],
                    'thu':       [
                                  $(".thu:eq(0)").children().text(), //자유선택활동
                                  $(".thu:eq(1)").children().text(), //이야기나누기
                                  $(".thu:eq(2)").children().text(), //동화
                                  $(".thu:eq(3)").children().text(), //신체표현
                                  $(".thu:eq(4)").children().text(), //미술
                                  $(".thu:eq(5)").children().text(), //감상
                                  $(".thu:eq(6)").children().text()  //실외활동
                                ],
                    'fri':       [
                                  $(".fri:eq(0)").children().text(), //자유선택활동
                                  $(".fri:eq(1)").children().text(), //이야기나누기
                                  $(".fri:eq(2)").children().text(), //동화
                                  $(".fri:eq(3)").children().text(), //신체표현
                                  $(".fri:eq(4)").children().text(), //미술
                                  $(".fri:eq(5)").children().text(), //감상
                                  $(".fri:eq(6)").children().text()  //실외활동
                                ]

      }

      $.ajax({
        url:"{{ route('plans.storePlans') }}",
        data:{
          year:selectMonth[0],
          month:selectMonth[1],
          week:selectWeek,
          day:day,
          dayGoal:goal,
          clickInfo:'week'
        },
        dataType:'jsonp',
        success:function(result){
          // console.log(result.test);
          alert('저장하였습니다.');
        },
        error:function(){
          alert('서버접속에러');
        }
      });
    });


    // T-Supporter 도우미 메뉴바
    function StaticMenuOn() {
      var currentPosition = parseInt($("#gooey-round").css("top")) - 180;
      $('#gooey-round').hide();

      //따라오는거
      $(window).scroll(function() {
        var position = $(window).scrollTop();
        $("#gooey-round").stop().animate({
          "top": position + currentPosition + "px"
        }, 0);
      });
      //나타나고 사라지기
      $(function() {
        $(window).scroll(function() {
          if ($(this).scrollTop() > 50) {
            $('#gooey-round').fadeIn("fast");
          } else {
            $('#gooey-round').hide();
          }
        });
      });
    }

    function activityContentView() {
      $("#freeContent").hide();
      $("#inputContent").hide();
      if ($("#freeContent").css("display") == "block") {
        $("#activityContent").fadeIn("fast");
      } else {
        $("footer").fadeIn("fast");
        $("#activityContent").fadeIn("fast");
      }
    }

    function freeContentView() {
      $("#activityContent").hide();
      $("#inputContent").hide();
      if ($("#activityContent").css("display") == "blcok") {
        $("#freeContent").fadeIn("fast");
      } else {
        $("footer").fadeIn("fast");
        $("#freeContent").fadeIn("fast");
      }
    }

    function inputContentView() {
      $("#activityContent").hide();
      $("#freeContent").hide();
      $("footer").fadeIn("fast");
      $("#inputContent").fadeIn("fast");

    }

    $("#gooey-round").gooeymenu({
      bgColor: "rgb(240, 129, 235)",
      contentColor: "white",
      style: "circle",
      horizontal: {
        menuItemPosition: "spaced"
      },
      vertical: {
        menuItemPosition: "spaced",
        direction: "up"
      },
      circle: {
        radius: 95
      },
      margin: "small",
      size: 90,
      bounce: true,
      bounceLength: "small",
      transitionStep: 100,
      hover: "#5dbb89"
    });

    $("#excel").click(function() {
      $(".table2excel").table2excel({
        exclude: ".noExl",
        name: "Excel Document Name",
        filename: "myFileName",
        fileext: ".xls",
        exclude_img: true,
        exclude_links: true,
        exclude_inputs: true
      });
    });


  //월선택 주간선택
  $("#selectWeek").hide();
  $("#weekLabel").hide();
  var currentYear = (new Date()).getFullYear();
  var startYear = currentYear - 10;

  var options = {
    startYear: startYear,
    finalYear: currentYear,
    pattern: 'yyyy-mm',
    monthNames: ['1월', '2월', '3월', '4월', '5월', '6월', '7월', '8월', '9월', '10월', '11월', '12월']
  };
  $('#schMonth').monthpicker(options);

  $(function() {
    $("#schMonth").change(function() {
      $("#selectWeek").show();
        $("#weekLabel").show();
        $("#selectWeek").change(function(){
          var selectWeek = document.getElementById('selectWeek').value;
          var selectMonth = document.getElementById('schMonth').value;
          selectMonth = selectMonth.split('-');
          $('#changeMonth').text(selectMonth[0]+"년  "+selectMonth[1]+"월 "+ selectWeek+"주차");

          $.ajax({
            url:"{{ route('plans.getData') }}",
            dataType:"jsonp",
            data:{
              year:selectMonth[0],
              month:selectMonth[1],
              week:selectWeek,
              pageInfo:'week'
            },
            success:function(result){
              if(!result.data){
                alert("동기화 성공");
                $('#monthTopic').text(result.monthInfo.mTopic);// 여기에는 그달의 주제에 대한 값이 들어간다.
                $('#weekTopic').text(result.weekInfo.wTopic);//여기엔 그주의 주제에 대한 값이 들어간다.

                for(var i in result.dayInfo){
                  switch(result.dayInfo[i].date){
                    case "월":
                      $('#mon').text(result.dayInfo[i].dTopic);//월요일의 주제
                      break;

                      case "화":
                      $('#tue').text(result.dayInfo[i].dTopic); //화요일의 주제
                      break;

                      case "수":
                      $('#wed').text(result.dayInfo[i].dTopic); //수요일의 주제
                      break;

                      case "목":
                      $('#thu').text(result.dayInfo[i].dTopic); //목요일의 주제
                      break;

                      case "금":
                      $('#fri').text(result.dayInfo[i].dTopic);  //금요일의 주제
                      break;
                    }
                  }
                }else{
                  alert("데이터가 없습니다.");
                }
            },
            error:function(){
              alert('서버접속 실패하였습니다.');
            }
          });
        });
    });
  });


    //더블클릭하면 컨텐츠 삭제
    $('td').on("dblclick", function() {
      if (!$(this).hasClass("redips-drag")) {
        $(this).children().first().remove();
      }
    });
  </script>
</body>

</html>
