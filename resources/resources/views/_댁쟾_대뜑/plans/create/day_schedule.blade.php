<!DOCTYPE html>
<html lang="en">

<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ニッコリケア - Class LIST</title>

  <!-- PLUGINS CSS STYLE -->
  <link href="{{ asset('plugins/jquery-ui/jquery-ui.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/tablestyle.css')}}" type="text/css" media="screen" />
  <link href="{{ asset('plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{ asset('plugins/rs-plugin/css/settings.css')}}" media="screen">
  <link rel="stylesheet" type="text/css" href="{{ asset('plugins/selectbox/select_option1.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('plugins/owl-carousel/owl.carousel.css')}}" media="screen">
  <link rel="stylesheet" type="text/css" href="{{ asset('plugins/isotope/jquery.fancybox.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('plugins/isotope/isotope.css')}}">
  <link rel="stylesheet" href="{{ asset('css/gooey.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.timepicker.css')}}" />
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
  <link href="{{ asset('css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet" />

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
          <h2>해바라기반 -일간 교육계획안 작성</h2>
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

          <div class="col-sm-3 col-xs-12 progress-wizard-step complete">
            <div class="progress">
              <div class="progress-bar"></div>
            </div>
            <a href="{{ route('plans.selectCreate',['clickInfo'=>'week']) }}" class="progress-wizard-dot">
              <i class="fa fa-file-text-o" aria-hidden="true"></i>
            </a>
            <div class="progressInfo" style="padding-left:34px;">주간계획안</div>
          </div>

          <div class="col-sm-3 col-xs-12 progress-wizard-step active">
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
                    <label>날짜 선택:&nbsp; </label>
                    <input type="text" id="daySch" class="form-control" size="12" />
                  </div>




                  <table class="table table-curved tg table2excel" id="maintable" style="text-align:center; vertical-align:middle;">
                    <tr>
                      <th class="redips-mark bg-color-2" style="text-align:center;">월간주제</th>
                      <th id = "monthTopic" class="redips-mark " style="text-align:center;">동기화</th>
                      <th class="redips-mark bg-color-4" style="text-align:center;">주간주제</th>
                      <th id = "weekTopic" class="redips-mark" style="text-align:center;">동기화</th>
                      <th class="redips-mark  bg-color-1" style="text-align:center;">일일주제</th>
                      <th id = "dayTopic" class="redips-mark" style="text-align:center;">동기화</th>
                    </tr>
                    <tr>
                      <td class="redips-mark bg-color-4"><b>주간 목표</b></td>
                      <td id = "weekGoal" class="redips-mark" colspan="5"><b>동기화</b></td>
                    </tr>
                    <tr>

                      <td id="datepairExample" class="redips-mark">
                        <input type="text" class="time start" id="timeStart" size="6" placeholder="시작시간" />
                        <input type="text" class="time start" id="timeEnd" size="6" placeholder="종료시간" /><br><br>
                        <input id="timeSchName" type="text" placeholder="제목">

                      </td>

                      <td class="redips-mark" colspan="2" id="schTable1">
                      </td>
                      <td class="redips-mark" colspan="3" style="border-left: 0px;" id="schTable2">
                      </td>
                    </tr>
                    <tr>
                      <td class="redips-mark">활동 및 시간</td>
                      <td class="redips-mark" colspan="4"> 활동내용</td>
                      <td class="redips-mark">평가</td>
                    </tr>
                    <!-- <tr>
                      <td class="">08:30~09:50<br>자유선택 활동</td>
                      <td class=""> 자유선택활동 주제</td>
                      <td class="" colspan="3"> &lt;활동내용&gt;</td>
                      <td class="">해와 바람의 특징을 말로<br> 표현할 수 있는가?</td>
                    </tr> -->
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
            <a class="gooey-menu-item" style="right: -40px;" onclick="activityContentView();">불러오기</a>
            <a class="gooey-menu-item" style="right: -40px;" onclick="empty();">비우기</a>
            <a class="gooey-menu-item" style="right: -40px;" onclick="inputContentView();">직접 입력</a>
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
                <h3 class="color-3" style="text-align:center;">저장된 컨텐츠</h3>
                <div class="table-responsive">
                  <table class="table table-curved tg" id="table1">
                    <tr>
                      <td class="redips-single">
                        <div id="load0" class="redips-drag redips-clone"><span>저장 1</span></div>
                      </td>
                      <td class="redips-single">
                        <div id="load1" class="redips-drag redips-clone"><span>저장 2</span></div>
                      </td>
                      <td class="redips-single">
                        <div id="load2" class="redips-drag redips-clone"><span>저장 3</span></div>
                      </td>
                      <td class="redips-single">
                        <div id="load3" class="redips-drag redips-clone"><span>저장 4</span></div>
                      </td>
                      <td class="redips-single">
                        <div id="load4" class="redips-drag redips-clone"><span>저장 5</span></div>
                      </td>
                      <td class="redips-single">
                        <div id="load5" class="redips-drag redips-clone"><span>저장 6</span></div>
                      </td>
                      <td class="redips-single">
                        <div id="load6" class="redips-drag redips-clone"><span>저장 7</span></div>
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
  <script type="text/javascript" src="{{ asset('js/jquery.timepicker.min.js')}}"></script>


  <script type="text/javascript">
    $(document).ready(function() {
      StaticMenuOn();
      $('footer').hide();
      $("#activityContent").hide();
      $("#freeContent").hide();
      $("#inputContent").hide();
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


    $("#timeSchName").blur(function() {
      timeSchAdd();
      $("#timeStart").val("");
      $("#timeEnd").val("");
      $("#timeSchName").val("");
    })

    // 타임테이블 추가 + 열추가
    function timeSchAdd() {

      var timeStart = document.getElementById('timeStart').value;
      var timeEnd = document.getElementById('timeEnd').value;
      var timeSchName = document.getElementById('timeSchName').value;
      // 다 입력 안되어 있을 경우
      if (timeStart == "" || timeEnd == "" || timeSchName == "") {
        window.alert("다 입력해주세요");
        return
      }
      var timeSchSrc = "<b>" + timeStart + "~" + timeEnd + ": </b> " + "<span style='text-decoration:underline;'>" + timeSchName + "</span><br />";
      var Src = "<tr class='newTr'>";
      Src += "<td class='redips-mark'>" + timeSchSrc + "</td>";
      Src += "<td class=''>주제(컨텐츠 드랍하는 곳)</td>";
      Src += "<td class='' colspan='3'>활동내용</td>";
      Src += "<td class=''> 평가</td>";
      Src += "</tr>";

      if ($("#schTable2").children().length < 14) {

        if ($("#schTable1").children().length > 14) {
          $("#schTable2").append(timeSchSrc);
        } else {
          $("#schTable1").append(timeSchSrc);
        }

      } else {
        alert("너무 많습니다!");
      }
      $("#maintable").append(Src);
    }


    // initialize input widgets first
    $('#datepairExample .time').timepicker({
      'showDuration': true,
      'timeFormat': 'g:ia',
      'minTime': '8:00am',
      'maxTime': '6:00pm',
      'step': 10
    });

    // 날짜 선택 --------------------------------------------
    $(function() {
      $("#daySch").datepicker();
    });

    $(function() {
      $("#daySch").change(function() {
        var value = document.getElementById('daySch').value;
        var week = weekAndDay(value);
        value = value.split('/');
        $('#changeMonth').text(value[2] + "년도 " + value[0] + "월 " + value[1] + "일 " + week[0] + "주차 " + week[1] + "요일");
        $.ajax({
          url:"{{ route('plans.getData') }}",
          data:{
            year:value[2],
            month:value[0],
            week:week[0],
            day:value[1],
            date:week[1],
            pageInfo:'day'
          },
          dataType:'jsonp',
          success:function(result){
            alert('동기화 성공하였습니다.');
            // console.log($result.test);

            $('#monthTopic').text(result.monthInfo.mTopic);// 여기에는 그달의 주제에 대한 값이 들어간다.
            $('#weekTopic').text(result.weekInfo.wTopic);//여기엔 그주의 주제에 대한 값이 들어간다.
            $('#dayTopic').text(result.dayInfo.dTopic); //여기엔 그 날의 주제에 대한 값이 들어간다.
            $('#weekGoal').text(result.dayInfo.dObjective); //여기에는 그주의 주간 목표에 대한 값이 들어간다.

            for(var i in result.actInfo){
              $('#load'+i).text(result.actInfo[i].title);
            }
          },error:function(){
            alert('서버 접속에러가 발생하였습니다.');
          }
        });
      });
    });

    //주차와 요일 구하는 함수
    function weekAndDay(value) {
      var date = new Date(value);
      days = ['일', '월', '화', '수',
          '목', '금', '토'
        ],
        prefixes = ['1', '2', '3', '4', '5'];
      var result = new Array();
      result[0] = prefixes[0 | date.getDate() / 7]; //주차
      result[1] = days[date.getDay()]; //요일
      return result;
    }

    function empty() {
      $("#timeStart").val("");
      $("#timeEnd").val("");
      $("#timeSchName").val("");
      $("#schTable1").empty();
      $("#schTable2").empty();
      $(".newTr").remove();

    }
  </script>
</body>

</html>
