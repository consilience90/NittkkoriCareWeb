<!DOCTYPE html>
<html lang="en">

<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ニッコリケア - Class LIST</title>

  <!-- PLUGINS CSS STYLE -->
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
          <h2>해바라기반 -월간 교육계획안</h2>
          <ol class="breadcrumb">
            <li>T-Supporter</li>
            <li class="active"><a href="./class_list.html">반 목록</a></li>
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

          <div class="col-sm-3 col-xs-12 progress-wizard-step active">
            <div class="progress">
              <div class="progress-bar"></div>
            </div>
            <a href="{{ route('plans.selectCreate',['clickInfo'=>'month']) }}" class="progress-wizard-dot">
              <i class="fa fa-file-text-o" aria-hidden="true"></i>
            </a>
            <div class="progressInfo" style="padding-left:34px;">월간계획안</div>
          </div>

          <div class="col-sm-3 col-xs-12 progress-wizard-step incomplete">
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

                <h1 id="changeMonth" class="color-1" style="text-align:center; font-size:400%;"></h1>
                <div class="table-responsive">
                  <div class="col-xs-4 form-group form-inline">
                    <label>월 선택:&nbsp; </label>
                    <input type="text" id="schMonth" class="form-control" name="schMonth" size="10">
                  </div>

                  <table class="table table-curved tg table2excel" id="maintable" style="text-align:center; vertical-align:middle;">
                    <thead>
                      <tr class="">
                        <th class="col-sm-1 redips-mark bg-color-2">
                          <h3  style="text-align:center; margin-bottom:0px; vertical-align:middle;">월간 주제</h3></th>
                        <th id="monthTopic" class="col-sm-5 redips-mark border-color-2" style="border:1px dotted; text-align:center; vertical-align:middle;" colspan="4">동기화</th>
                      </tr>
                    </thead>
                    <tbody id="tbody">


                      <!-- bg-color-5 border-color-5 -->
                      <tr>
                        <td class="col-sm-2 redips-mark ">
                          <h3 style="margin-bottom:0px;">월간 목표</h3></td>
                        <td id="goal" class="col-sm-8 redips-single" colspan="4">input text </td>
                      </tr>

                      <tr>
                        <td class="redips-mark bg-color-3 border-color-3" style="">
                          <h3 style="margin-bottom:0px;">주차</h3></td>
                        <td class="redips-mark bg-color-3" style="vertical-align:middle;"><b>1주차</b></td>
                        <td class="redips-mark bg-color-3" style="vertical-align:middle;"><b>2주차</b></td>
                        <td class="redips-mark bg-color-3" style="vertical-align:middle;"><b>3주차</b></td>
                        <td class="redips-mark bg-color-3" style="vertical-align:middle;"><b>4주차</b></td>
                      </tr>

                      <tr>
                        <td class="redips-mark bg-color-4 border-color-4" style="vertical-align:middle;">
                          <h3 style="margin-bottom:0px;">주간 주제</h3></td>
                        <td id="weekTopic1" class="redips-mark" style="vertical-align:middle;"><b>동기화</b></td>
                        <td id="weekTopic2" class="redips-mark" style="vertical-align:middle;"><b>동기화</b></td>
                        <td id="weekTopic3" class="redips-mark" style="vertical-align:middle;"><b>동기화</b></td>
                        <td id="weekTopic4" class="redips-mark" style="vertical-align:middle;"><b>동기화</b></td>
                      </tr>


                      <tr>
                        <td class="redips-mark" style="vertical-align:middle; background-color:pink;">
                          <h3 style="margin-bottom:0px;">월</h3></td>
                        <td class="FirstWeek"></td>
                        <td class="SecondWeek"></td>
                        <td class="ThirdWeek"></td>
                        <td class="FourthWeek"></td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="vertical-align:middle; background-color:rgb(212, 195, 230);">
                          <h3 style="margin-bottom:0px;">화</h3></td>
                        <td class="FirstWeek"></td>
                        <td class="SecondWeek"></td>
                        <td class="ThirdWeek"></td>
                        <td class="FourthWeek"></td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="vertical-align:middle; background-color:rgb(247, 222, 178);">
                          <h3 style="margin-bottom:0px;">수</h3></td>
                        <td class="FirstWeek"></td>
                        <td class="SecondWeek"></td>
                        <td class="ThirdWeek"></td>
                        <td class="FourthWeek"></td>
                      </tr>
                      <tr>
                        <td class="redips-mark" style="vertical-align:middle; background-color:rgb(186, 238, 227);">
                          <h3 style="margin-bottom:0px;">목</h3></td>
                        <td class="FirstWeek"></td>
                        <td class="SecondWeek"></td>
                        <td class="ThirdWeek"></td>
                        <td class="FourthWeek"></td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="vertical-align:middle; background-color:rgb(204, 252, 198);">
                          <h3 style="margin-bottom:0px;">금</h3></td>
                        <td class="FirstWeek"></td>
                        <td class="SecondWeek"></td>
                        <td class="ThirdWeek"></td>
                        <td class="FourthWeek"></td>
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
            <a class="gooey-menu-item" style="right: -40px;" onclick="activityContentView();">일일 컨텐츠</a>
            <a class="gooey-menu-item" style="right: -40px;" onclick="freeContentView();">자유 컨텐츠</a>
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
                <h3 class="color-3" style="text-align:center;">일일활동 주제</h3>
                <div class="table-responsive">
                  <table class="table table-curved tg" id="table1">
                    <tr>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone"><span>일일활동 1</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone"><span>일일활동 2</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone"><span>일일활동 3</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone"><span>일일활동 4</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone"><span>일일활동 5</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone"><span>일일활동 6</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone"><span>일일활동 7</span></div>
                      </td>
                    </tr>
                    <tr>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone"><span>일일활동 8</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone"><span>일일활동 9</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone"><span>일일활동 10</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone"><span>일일활동 11</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone"><span>일일활동 12</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone"><span>일일활동 13</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone"><span>일일활동 14</span></div>
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
  <script src="{{ asset('dist\jquery.mtz.monthpicker.js')}}"></script>
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
      var month = document.getElementById('schMonth').value;
      month = month.split('-'); // month[0] : 년도 , month[1] : 달
      //월 목표(INPUT TEXT 만)
      var goal = $("#goal").find("input").val();
      // 주차별로 데이터 파싱
      var Week = {
        //첫째주 데이터 // 요일별 일일주제
        '1stWeek': [$(".FirstWeek:eq(0)").children().text(), //월요일
          $(".FirstWeek:eq(1)").children().text(), //화요일
          $(".FirstWeek:eq(2)").children().text(), //수요일
          $(".FirstWeek:eq(3)").children().text(), //목요일
          $(".FirstWeek:eq(4)").children().text() //금요일
        ],
        '2ndWeek':[$(".SecondWeek:eq(0)").children().text(),
          $(".SecondWeek:eq(1)").children().text(), //화요일
          $(".SecondWeek:eq(2)").children().text(), //수요일
          $(".SecondWeek:eq(3)").children().text(), //목요일
          $(".SecondWeek:eq(4)").children().text() //금요일
        ],
        '3rdWeek': [$(".ThirdWeek:eq(0)").children().text(), //월요일
          $(".ThirdWeek:eq(1)").children().text(), //화요일
          $(".ThirdWeek:eq(2)").children().text(), //수요일
          $(".ThirdWeek:eq(3)").children().text(), //목요일
          $(".ThirdWeek:eq(4)").children().text() //금요일
        ],
        '4thWeek':[$(".FourthWeek:eq(0)").children().text(),
          $(".FourthWeek:eq(1)").children().text(), //화요일
          $(".FourthWeek:eq(2)").children().text(), //수요일
          $(".FourthWeek:eq(3)").children().text(), //목요일
          $(".FourthWeek:eq(4)").children().text() //금요일
        ]
      }

      $.ajax({
        url:"{{ route('plans.storePlans') }}",
        dataType:'jsonp',
        data:{
          year:month[0],
          month:month[1],
          week:Week,
          clickInfo:'month',
        },
        success:function(result){
          alert('저장을 하였습니다.');
        },error:function(data){
          alert('서버 접속에러');
        }
      })
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
        // $(this).css("background-color", "yellow");
        var selectValue = document.getElementById('schMonth').value;
        selectValue = selectValue.split("-");
        $('#changeMonth').text(selectValue[0] + "년도 " + selectValue[1] + " 월");

        // 해당 월의 주제와 해당 월의 주간 주제를 가지고 온다.
        $.ajax({
          url: "{{ route('plans.getData') }}",
          dataType:'jsonp',
          data: {
            year:selectValue[0],
            month:selectValue[1],
            pageInfo:'month'
          },
          success: function(result) {
            // result.monthInfo
            $('#monthTopic').text(result.monthInfo.mTopic);
            for (var i in result.weekInfo){
              switch(result.weekInfo[i].weekInfo){
                case 1:
                $('#weekTopic1').text(result.weekInfo[i].wTopic);
                break;

                case 2:
                $('#weekTopic2').text(result.weekInfo[i].wTopic);
                break;

                case 3:
                $('#weekTopic3').text(result.weekInfo[i].wTopic);
                break;

                case 4:
                $('#weekTopic4').text(result.weekInfo[i].wTopic);
                break;

              }
            }
          },
          error: function(data) {
            alert("서버접속 실패");
          }
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
