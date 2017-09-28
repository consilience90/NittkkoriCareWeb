@extends('master.plan')

 @section('main_content')

    <!-- PAGE TITLE SECTION-->
    <section class="pageTitleSection">
      <div class="container">
        <div class="pageTitleInfo">
          <h2>{{$className}} - 週間教育計画案を作成</h2>
          <ol class="breadcrumb">
            <li>T-Supporter</li>
            <li class="active"><a href="{{ route('plans.index') }}">教育計画案</a></li>
            <li class="active">{{$className}} クラス</li>
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

          <div class="col-sm-3 col-xs-12 progress-wizard-step complete">
            <div class="progress">
              <div class="progress-bar"></div>
            </div>
            <a href="{{ route('plans.selectCreate',['clickInfo'=>'month']) }}" class="progress-wizard-dot">
              <i class="fa fa-file-text-o" aria-hidden="true"></i>
            </a>
            <div class="progressInfo" style="padding-left:34px;">月間計画案</div>
          </div>

          <div class="col-sm-3 col-xs-12 progress-wizard-step active">
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
            <div class="progressInfo" style="padding-left:34px;">日間計画案</div>
          </div>
        </div>

        <div class="row">


          <div class="col-xs-10 block">
            <div class="thumbnail alt">
              <div class="caption">

                <h2 id="changeMonth" class="color-1" style="text-align:center; font-size:400%;"></h2>
                <div class="table-responsive">

                  <div class="col-xs-7 form-group form-inline">
                    <label>月選択:&nbsp; </label>
                    <input type="text" id="schMonth" class="form-control" size="8" />
                      <label id="weekLabel">週間選択:&nbsp; </label>
                      <select id="selectWeek" class="form-control">
                      <option value="0">週間選択</option>
                      <option value="1">第1週目</option>
                      <option value="2">第2週目</option>
                      <option value="3">第3週目</option>
                      <option value="4">第4週目</option>
                      <option value="5">第5週目</option>
                    </select>



                  </div>



                  <table class="table table-curved tg table2excel" id="maintable" style="text-align:center; vertical-align:middle;">
                    <thead>
                      <tr class="">
                        <th class="col-sm-1 redips-mark bg-color-2">
                          <h3 style="text-align:center; margin-bottom:0px; vertical-align:middle;">月間テーマ</h3></th>
                        <th id="monthTopic" class="col-sm-5 redips-mark border-color-2" style="border:1px dotted; text-align:center; vertical-align:middle;" colspan="5"></th>
                      </tr>
                    </thead>
                    <tbody id="tbody">


                      <!-- bg-color-5 border-color-5 -->
                      <tr>
                        <td class="col-sm-2 redips-mark bg-color-4">
                          <h3 style="margin-bottom:0px;">週間テーマ</h3></td>
                        <td id="weekTopic" class="col-sm-8 redips-mark " colspan="5"><b>  </b></td>
                      </tr>

                      <tr>
                        <td class="col-sm-2 redips-mark ">
                          <h3 style="margin-bottom:0px;">週間目標</h3></td>
                        <td id="goal" class="col-sm-8 redips-single" colspan="5">
                          <textarea id="weekgoal" rows='1' style='width:100%; border: 0;' placeholder='週間目標'></textarea>
                        </td>
                      </tr>



                      <tr>
                        <td class="redips-mark bg-color-3 border-color-3" style="">
                          <h3 style="margin-bottom:0px;">曜日</h3></td>
                        <td class="redips-mark bg-color-3" style="vertical-align:middle;"><b>月</b></td>
                        <td class="redips-mark bg-color-3" style="vertical-align:middle;"><b>火</b></td>
                        <td class="redips-mark bg-color-3" style="vertical-align:middle;"><b>水</b></td>
                        <td class="redips-mark bg-color-3" style="vertical-align:middle;"><b>木</b></td>
                        <td class="redips-mark bg-color-3" style="vertical-align:middle;"><b>金</b></td>
                      </tr>

                      <tr>
                        <td class="redips-mark bg-color-1 border-color-1" style="vertical-align:middle;">
                          <h3 style="margin-bottom:0px;">1日のテーマ</h3></td>
                        <td id="mon" class="redips-mark" style="vertical-align:middle;"><b></b></td>
                        <td id="tue" class="redips-mark" style="vertical-align:middle;"><b></b></td>
                        <td id="wed" class="redips-mark" style="vertical-align:middle;"><b></b></td>
                        <td id="thu" class="redips-mark" style="vertical-align:middle;"><b></b></td>
                        <td id="fri" class="redips-mark" style="vertical-align:middle;"><b></b></td>
                      </tr>


                      <tr>
                        <td class="redips-mark" style="vertical-align:middle;"><b>自由選択活動</b></td>
                        <td class="mon redips-single"></td>
                        <td class="tue redips-single"></td>
                        <td class="wed redips-single"></td>
                        <td class="thu redips-single"></td>
                        <td class="fri redips-single"></td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="vertical-align:middle;"><b><small>「団体活動」</small>話し合い</b></td>
                        <td class="mon redips-single"></td>
                        <td class="tue redips-single"></td>
                        <td class="wed redips-single"></td>
                        <td class="thu redips-single"></td>
                        <td class="fri redips-single"></td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="vertical-align:middle;"><b><small>「団体活動」</small>童話</b></td>
                        <td class="mon redips-single"></td>
                        <td class="tue redips-single"></td>
                        <td class="wed redips-single"></td>
                        <td class="thu redips-single"></td>
                        <td class="fri redips-single"></td>
                      </tr>
                      <tr>
                        <td class="redips-mark" style="vertical-align:middle;"><b><small>「団体活動」</small>身体表現</b></td>
                        <td class="mon redips-single"></td>
                        <td class="tue redips-single"></td>
                        <td class="wed redips-single"></td>
                        <td class="thu redips-single"></td>
                        <td class="fri redips-single"></td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="vertical-align:middle;"><b><small>「団体活動」</small>美術</b></td>
                        <td class="mon redips-single"></td>
                        <td class="tue redips-single"></td>
                        <td class="wed redips-single"></td>
                        <td class="thu redips-single"></td>
                        <td class="fri redips-single"></td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="vertical-align:middle;"><b><small>「団体活動」</small>鑑賞</b></td>
                        <td class="mon redips-single"></td>
                        <td class="tue redips-single"></td>
                        <td class="wed redips-single"></td>
                        <td class="thu redips-single"></td>
                        <td class="fri redips-single"></td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="vertical-align:middle;"><b><small>「団体活動」</small>野外活動</b></td>
                        <td class="mon redips-single"></td>
                        <td class="tue redips-single"></td>
                        <td class="wed redips-single"></td>
                        <td class="thu redips-single"></td>
                        <td class="fri redips-single"></td>
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
            <a class="gooey-menu-item" style="right: -40px;" onclick="activityContentView();">団体活動</a>
            <a class="gooey-menu-item" style="right: -40px;" onclick="freeContentView();">自由活動</a>
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

              <!--월간 컨텐츠  -->
              <div class="caption" id="activityContent" style="padding-top:0px; padding-bottom:0px;">
                 <button type="button" class="close"  aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="color-3" style="text-align:center;">団体活動コンテンツ</h3>
                <div class="table-responsive">
                  <table class="table table-curved tg" id="table1">
                    <tr>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone"><span>光の城作り</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone"><span>日光の大切さ</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone"><span>月の友達、星</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone"><span>虹の作り</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone"><span>翼作り</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone"><span>夢の光</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone"><span>きらきら食べ物</span></div>
                      </td>
                    </tr>
                    <tr>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone"><span>私の色</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone"><span>クレヨン彫刻</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone"><span>照明店遊び</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone"><span>太陽のパン</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone"><span>光で作った世の中</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone"><span>暗闇を照らす光</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone"><span>老眼鏡観察</span></div>
                      </td>

                    </tr>
                  </table>
                </div>
              </div>


              <!--월간 컨텐츠  -->
              <div class="caption" id="freeContent" style="padding-top:0px; padding-bottom:0px;">
                 <button type="button" class="close"  aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="color-3" style="text-align:center;">自由活動コンテンツ</h3>
                <div class="table-responsive">
                  <table class="table table-curved tg" id="table2">
                    <tr>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone" id="test"><span>自由活動1</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone"><span>自由活動2</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone "><span>自由活動3</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone "><span>自由活動4</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone"><span>自由活動5</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone"><span>自由活動6</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone"><span>自由活動7</span></div>
                      </td>
                    </tr>
                    <tr>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone"><span>自由活動8</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone"><span>自由活動9</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone"><span>自由活動10</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone"><span>自由活動11</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone"><span>自由活動12</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone"><span>自由活動13</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone"><span>自由活動14</span></div>
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
                            <option value="0">第１目の項目</option>
                            <option value="2">第２目の項目</option>
                          </select></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone week month form-group" style="padding:10px 10px 40px 10px;"><input class="form-control" type="number" name="" placeholder="数字"></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone week month form-group" style="padding:10px 10px 40px 10px;"><input class="form-control" type="time" name="" placeholder="時間"></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone week month form-group" style="padding:10px 10px 40px 10px;"><input class="form-control" type="date" name="" placeholder="日付"></div>
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
      <script src="{{ asset('sweetalert-master/dist/sweetalert.min.js')}}"></script>
      <link rel="stylesheet" type="text/css" href="{{asset('sweetalert-master/dist/sweetalert.css')}}">
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
            // var selectWeek = 5; //주차

      var selectMonth = document.getElementById('schMonth').value; // 년도와 달
      selectMonth = selectMonth.split('-'); //문자열 자르기
      //주간 목표(INPUT TEXT 만)
      var goal = $("#weekgoal").val();
      
      console.log(goal);
      // console.log(selectMonth[0],selectMonth[1],selectWeek,goal); //년도,달.주차,주간목표

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
      'web':       [
                  $(".wed:eq(0)").children().text(), //자유선택활동
                  $(".wed:eq(1)").children().text(), //이야기나누기
                  $(".wed:eq(2)").children().text(), //동화
                  $(".wed:eq(3)").children().text(), //신체표현
                  $(".wed:eq(4)").children().text(), //미술
                  $(".wed:eq(5)").children().text(), //감상
                  $(".wed:eq(6)").children().text() //실외활동
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
            swal({
                  title:'週間計画案保存',
                  text:"週間計画案を成功的に保存しました。",
                  type:'success'
                });        
          
        },
        error:function(){
          swal({
                  title:'サーバー接続エラー',
                  text:"サーバー接続にエラーが発生しました。 しばらく待ってくださるように願います。",
                  type:'error'
                }); 
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


      //월선택 주간선택
      $("#selectWeek").hide();
      $("#weekLabel").hide();
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
      $("#selectWeek").show();
        $("#weekLabel").show();
        $("#selectWeek").change(function(){
          var selectWeek = document.getElementById('selectWeek').value;
          // var selectWeek = 4;

          var selectMonth = document.getElementById('schMonth').value;
          selectMonth = selectMonth.split('-');
          $('#changeMonth').text(selectMonth[0]+"年  "+selectMonth[1]+"月 第"+ selectWeek +"週目");

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
              if(result.result == 'success'){
                $('#monthTopic').text(result.monthInfo.mTopic);// 여기에는 그달의 주제에 대한 값이 들어간다.
                $('#weekTopic').text(result.weekInfo.wTopic);//여기엔 그주의 주제에 대한 값이 들어간다.

                for(var i in result.dayInfo){
                  switch(result.dayInfo[i].date){
                      case "月":
                      $('#mon').text(result.dayInfo[i].dTopic);//월요일의 주제
                      break;

                      case "火":
                      $('#tue').text(result.dayInfo[i].dTopic); //화요일의 주제
                      break;

                      case "水":
                      $('#wed').text(result.dayInfo[i].dTopic); //수요일의 주제
                      break;

                      case "木":
                      $('#thu').text(result.dayInfo[i].dTopic); //목요일의 주제
                      break;

                      case "金":
                      $('#fri').text(result.dayInfo[i].dTopic);  //금요일의 주제
                      break;
                    }
                  }
                }else{
                  swal({
                      title:'데이터가 없습니다',
                      type:'error'
                    }); 
                }
            },
            error:function(){
              swal({
                      title:'서버접속 실패하였습니다.',
                      type:'error'
                    }); 
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
@stop
