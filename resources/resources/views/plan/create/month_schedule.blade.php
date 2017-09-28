@extends('master.plan')

 @section('main_content')
    <!-- PAGE TITLE SECTION-->
    <section class="pageTitleSection">
      <div class="container">
        <div class="pageTitleInfo">
          <h2>{{$className}} - 月間教育計画案を作成</h2>
          <ol class="breadcrumb">
            <li>T-Supporter</li>
            <li class="active"><a href="{{ route('plans.index') }}">教育計画案</a></li>
            <li class="active">{{$className}}</li>
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
            <div class="progressInfo" style="padding-left:34px;">年間計画案</div>
          </div>

          <div class="col-sm-3 col-xs-12 progress-wizard-step active">
            <div class="progress">
              <div class="progress-bar"></div>
            </div>
            <a href="{{ route('plans.selectCreate',['clickInfo'=>'month']) }}" class="progress-wizard-dot">
              <i class="fa fa-file-text-o" aria-hidden="true"></i>
            </a>
            <div class="progressInfo" style="padding-left:34px;">月間計画案</div>
          </div>

          <div class="col-sm-3 col-xs-12 progress-wizard-step incomplete">
            <div class="progress">
              <div class="progress-bar"></div>
            </div>
            <a href="{{ route('plans.selectCreate',['clickInfo'=>'week']) }}" class="progress-wizard-dot">
              <i class="fa fa-file-text-o" aria-hidden="true"></i>
            </a>
            <div class="progressInfo" style="padding-left:34px;">週間計画案</div>
          </div>

          <div class="col-sm-3 col-xs-12 progress-wizard-step incomplete">
            <div class="progress">
              <div class="progress-bar"></div>
            </div>
            <a href="{{ route('plans.selectCreate',['clickInfo'=>'day']) }}" class="progress-wizard-dot">
              <i class="fa fa-file-text-o" aria-hidden="true"></i>
            </a>
            <div class="progressInfo" style="padding-left:34px;">日々計画案</div>
          </div>
        </div>

        <div class="row">


          <div class="col-xs-10 block">
            <div class="thumbnail alt">
              <div class="caption">

                <h1 id="changeMonth" class="color-1" style="text-align:center; font-size:400%;"></h1>
                <div class="table-responsive">
                  <div class="col-xs-4 form-group form-inline">
                    <label>月選択:&nbsp; </label>
                    <input type="text" id="schMonth" class="form-control" name="schMonth" size="10">
                  </div>

<table class="table table-curved tg table2excel" id="maintable" style="text-align:center; vertical-align:middle;">
                    <thead>
                      <tr class="">
                        <th class="col-sm-1 redips-mark bg-color-2">
                          <h3 style="text-align:center; margin-bottom:0px; vertical-align:middle;">月間テーマ</h3></th>
                        <th id = "mTopic" class="col-sm-5 redips-mark border-color-2" style="border:1px dotted; text-align:center; vertical-align:middle;" colspan="5"></th>
                      </tr>
                    </thead>
                    <tbody id="tbody">


                      <!-- bg-color-5 border-color-5 -->
                      <tr>
                        <td class="col-sm-2 redips-mark ">
                          <h3 style="margin-bottom:0px;">月間目標</h3></td>
                        <td id="mGoal" class="col-sm-8 redips-single" colspan="5"></td>
                      </tr>

                      <tr>
                        <td class="redips-mark bg-color-3 border-color-3" style="">
                          <h3 style="margin-bottom:0px;">週目</h3></td>
                        <td class="redips-mark bg-color-3" style="vertical-align:middle;"><b>1週目</b></td>
                        <td class="redips-mark bg-color-3" style="vertical-align:middle;"><b>2週目</b></td>
                        <td class="redips-mark bg-color-3" style="vertical-align:middle;"><b>3週目</b></td>
                        <td class="redips-mark bg-color-3" style="vertical-align:middle;"><b>4週目</b></td>
                        <td class="redips-mark bg-color-3" style="vertical-align:middle;"><b>5週目</b></td>
                      </tr>

                      <tr>
                        <td class="redips-mark bg-color-4 border-color-4" style="vertical-align:middle;">
                          <h3 style="margin-bottom:0px;">주간 주제</h3></td>
                        <td id = "weekTopic1" class="redips-mark" style="vertical-align:middle;"><b></b></td>
                        <td id = "weekTopic2" class="redips-mark" style="vertical-align:middle;"><b></b></td>
                        <td id = "weekTopic3" class="redips-mark" style="vertical-align:middle;"><b></b></td>
                        <td id = "weekTopic4" class="redips-mark" style="vertical-align:middle;"><b></b></td>
                        <td id = "weekTopic5" class="redips-mark" style="vertical-align:middle;"><b></b></td>
                      </tr>


                      <tr>
                        <td class="redips-mark" style="vertical-align:middle; background-color:pink;">
                          <h3 style="margin-bottom:0px;">月</h3></td>
                        <td class="FirstWeek"></td>
                        <td class="SecondWeek"></td>
                        <td class="ThirdWeek"></td>
                        <td class="FourthWeek"></td>
                        <td class="FifthWeek"></td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="vertical-align:middle; background-color:rgb(212, 195, 230);">
                          <h3 style="margin-bottom:0px;">火</h3></td>
                        <td class="FirstWeek"></td>
                        <td class="SecondWeek"></td>
                        <td class="ThirdWeek"></td>
                        <td class="FourthWeek"></td>
                        <td class="FifthWeek"></td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="vertical-align:middle; background-color:rgb(247, 222, 178);">
                          <h3 style="margin-bottom:0px;">水</h3></td>
                        <td class="FirstWeek"></td>
                        <td class="SecondWeek"></td>
                        <td class="ThirdWeek"></td>
                        <td class="FourthWeek"></td>
                        <td class="FifthWeek"></td>
                      </tr>
                      <tr>
                        <td class="redips-mark" style="vertical-align:middle; background-color:rgb(186, 238, 227);">
                          <h3 style="margin-bottom:0px;">木</h3></td>
                          <td class="FirstWeek"></td>
                          <td class="SecondWeek"></td>
                          <td class="ThirdWeek"></td>
                          <td class="FourthWeek"></td>
                          <td class="FifthWeek"></td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="vertical-align:middle; background-color:rgb(204, 252, 198);">
                          <h3 style="margin-bottom:0px;">金</h3></td>
                          <td class="FirstWeek"></td>
                          <td class="SecondWeek"></td>
                          <td class="ThirdWeek"></td>
                          <td class="FourthWeek"></td>
                          <td class="FifthWeek"></td>
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
            <a class="gooey-menu-item" style="right: -40px;" onclick="activityContentView();">一日コンテンツ</a>
            <a class="gooey-menu-item" style="right: -40px;" onclick="freeContentView();">自由コンテンツ</a>
            <a class="gooey-menu-item" style="right: -40px;" onclick="inputContentView();">直接入力</a>
            <a id="excel" class="gooey-menu-item" style="right: -40px;"> EXCEL 変換 </a>
            <a id="save" class="gooey-menu-item" style="right: -40px;"> 計画案保存 </a>
          </div>
        </div>
      </div>
    </section>

    <!-- FOOTER -->
    <footer id="dayFooter" class="footer col-sm-12 test" style="display:none;">
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

              <!--月간 컨텐츠  -->
              <div class="caption" id="activityContent" style="padding-top:0px; padding-bottom:0px;">
                <button type="button" class="close" id="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="color-3" style="text-align:center;">一日活動テーマ</h3>
                <div class="table-responsive">
                  <table class="table table-curved tg" id="table1">
                    <tr>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone"><span>水と私たちの生活</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone"><span>水で文字を書く</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone"><span>釣りをする</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone"><span>水の国を構成する</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone"><span>私は水の守護神</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone"><span>水に船を浮かぶ</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone"><span>水の名札</span></div>
                      </td>
                    </tr>
                    <tr>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone"><span>水のシロフォン</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone"><span>私は誰でしょうか?</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone"><span>私たちの周辺の水</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone"><span>水では、誰が住んでいるかな?</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone"><span>水が与える被害</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone"><span>水がなければ?</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone"><span>水を大事にする</span></div>
                      </td>

                    </tr>
                  </table>
                </div>
              </div>


              <!--月간 컨텐츠  -->
              <div class="caption" id="freeContent" style="padding-top:0px; padding-bottom:0px;">
                <button type="button" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="color-3" style="text-align:center;">自由活動コンテンツ</h3>
                <div class="table-responsive">
                  <table class="table table-curved tg" id="table2">
                    <tr>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone" id="test"><span>自由活動 1</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone"><span>自由活動 2</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone "><span>自由活動 3</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone "><span>自由活動 4</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone"><span>自由活動 5</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone"><span>自由活動 6</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone"><span>自由活動 7</span></div>
                      </td>
                    </tr>
                    <tr>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone"><span>自由活動 8</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone"><span>自由活動 9</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone"><span>自由活動 10</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone"><span>自由活動 11</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone"><span>自由活動 12</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone"><span>自由活動 13</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone"><span>自由活動 14</span></div>
                      </td>
                    </tr>
                  </table>
                </div>
              </div>

              <!--직접입력  -->
              <div class="caption" id="inputContent" style="padding-top:0px; padding-bottom:0px;">
                <button type="button" class="close"  aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="color-3" style="text-align:center;">直接入力</h3>
                <div class="table-responsive">
                  <table class="table table-curved tg" id="table3">
                    <tr>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone week month form-group" style="padding:10px 10px 40px 10px;"><input class="form-control" type="text" placeholder="テキスト入力" name=""></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone week month form-group" style="padding:10px 10px 40px 10px;"><select class="" name="">
                            <option value="0">第1目の項目</option>
                            <option value="2">第2目の項目</option>
                          </select></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone week month form-group" style="padding:10px 10px 40px 10px;"><input class="form-control" type="number" name="" placeholder="数字"></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone week month form-group" style="padding:10px 10px 40px 10px;"><input class="form-control" type="time" name="" placeholder="時間"></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone week month form-group" style="padding:10px 10px 40px 10px;"><input class="form-control" type="date" name="" placeholder="日数"></div>
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
      //月 목표(INPUT TEXT 만)
      var goal = $("#goal").find("input").val();
      // 주차별로 데이터 파싱
      var Week = {
        //첫째주 데이터 // 요일별 일일주제
        '1stWeek': [$(".FirstWeek:eq(0)").children().text(), //月요일
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
        '3rdWeek': [$(".ThirdWeek:eq(0)").children().text(), //月요일
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
        ],
        '5thWeek':[$(".FifthWeek:eq(0)").children().text(),
          $(".FifthWeek:eq(1)").children().text(), //화요일
          $(".FifthWeek:eq(2)").children().text(), //수요일
          $(".FifthWeek:eq(3)").children().text(), //목요일
          $(".FifthWeek:eq(4)").children().text() //금요일
        ]
      }

      $.ajax({
        url:"{{ route('plans.storePlans') }}",
        dataType:'jsonp',
        data:{
          year:month[0],
          month:month[1],
          week:Week,
          // goal:goal,
          clickInfo:'month',
        },
        success:function(result){
          alert('成功');
          
        },error:function(data){
          alert('サーバー接続エラー');
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
    
    $(".close").click(function(){
      $('#gooey-round').css("visibility","visible");
      $("footer").hide();
    })
    function activityContentView() {
       $('#gooey-round').css("visibility","hidden");
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
      $('#gooey-round').css("visibility","hidden");
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
      $('#gooey-round').css("visibility","hidden");
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
      monthNames: ['1月', '2月', '3月', '4月', '5月', '6月', '7月', '8月', '9月', '10月', '11月', '12月']
    };
    $('#schMonth').monthpicker(options);

    $(function() {
      $("#schMonth").change(function() {
        // $(this).css("background-color", "yellow");
        var selectValue = document.getElementById('schMonth').value;
        selectValue = selectValue.split("-");
        $('#changeMonth').text(selectValue[0] + "年度 " + selectValue[1] + " 月");

        // 해당 月의 주제와 해당 月의 주간 주제를 가지고 온다.
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
            if(result.result == 'success'){
              alert('同期化しました。');
            $('#mTopic').text(result.monthInfo.mTopic);
            for (var i in result.weekInfo){
              switch(result.weekInfo[i].weekInfo){
                case 1:
                $('#weekTopic1').text(result.weekInfo[i].wTopic);
                                $('#weekTopic'+i).text(result.weekInfo[i].wTopic);

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
                case 5:
                $('#weekTopic5').text(result.weekInfo[i].wTopic);
                break;
              }
            }
          }else{
            alert('データがありません。');
          }
          },
          error: function(data) {
            alert("サーバー接続失敗");
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
    @stop
