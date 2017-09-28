@extends('master.plan')

 @section('main_content')

    <!-- PAGE TITLE SECTION-->
    <section class="pageTitleSection">
      <div class="container">
        <div class="pageTitleInfo">
          <h2>{{$className}} - 日々教育計画案を作成</h2>
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

          <div class="col-sm-3 col-xs-12 progress-wizard-step complete">
            <div class="progress">
              <div class="progress-bar"></div>
            </div>
            <a href="{{ route('plans.selectCreate',['clickInfo'=>'week']) }}" class="progress-wizard-dot">
              <i class="fa fa-file-text-o" aria-hidden="true"></i>
            </a>
            <div class="progressInfo" style="padding-left:34px;">週間計画案</div>
          </div>

          <div class="col-sm-3 col-xs-12 progress-wizard-step active">
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

                <h2 id="changeMonth" class="color-1" style="text-align:center; font-size:400%;"></h2>
                <div class="table-responsive">

                  <div class="col-xs-7 form-group form-inline">
                    <label>日付選択:&nbsp; </label>
                    <input type="text" id="daySch" class="form-control" size="12" />
                  </div>




                  <table class="table table-curved tg table2excel" id="maintable" style="text-align:center; vertical-align:middle;">
                    <tr>
                      <th class="redips-mark bg-color-2" style="text-align:center;">月間テーマ</th>
                      <th id = "monthTopic" class="redips-mark " style="text-align:center;"></th>
                      <th class="redips-mark bg-color-4" style="text-align:center;">週間テーマ</th>
                      <th id = "weekTopic" class="redips-mark" style="text-align:center;"></th>
                      <th class="redips-mark  bg-color-1" style="text-align:center;">日々のテーマ</th>
                      <th id = "dayTopic" class="redips-mark" style="text-align:center;"></th>
                    </tr>
                    <tr>
                      <td class="redips-mark bg-color-4"><b>週間目標</b></td>
                      <td id = "weekGoal" class="redips-mark" colspan="5"><b></b></td>
                    </tr>
                    <tr>

                      <td id="datepairExample" class="redips-mark">
                        <input type="text" class="time start" id="timeStart" size="6" placeholder="開始時間" />
                        <input type="text" class="time start" id="timeEnd" size="6" placeholder="終了時間" /><br><br>
                        <input id="timeSchName" type="text" placeholder="タイトル">

                      </td>

                      <td class="redips-mark" colspan="3" id="schTable1">
                      </td>
                      <td class="redips-mark" colspan="2" style="border-left: 0px;" id="schTable2">
                      </td>
                    </tr>
                    <tr>
                      <td class="redips-mark">活動や時間</td>
                      <td class="redips-mark" colspan="4"> 活動内容</td>
                      <td class="redips-mark">評価</td>
                    </tr>
                    
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
            <a class="gooey-menu-item" style="right: -40px;" onclick="activityContentView();">持って来る</a>
            <a class="gooey-menu-item" style="right: -40px;" onclick="empty();">空にする</a>
            <a class="gooey-menu-item" style="right: -40px;" onclick="">週間計画を見る</a>
            <a class="gooey-menu-item" style="right: -40px;">月間計画を見ること</a>
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
                   <button type="button" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="color-3" style="text-align:center;">セーブコンテンツ</h3>
                <div class="table-responsive">
                  <table class="table table-curved tg" id="table1">
                    <tr>
                      <td class="redips-single">
                        <div id="load0" class="redips-drag redips-clone"><span>セーブ 1</span></div>
                      </td>
                      <td class="redips-single">
                        <div id="load1" class="redips-drag redips-clone"><span>セーブ 2</span></div>
                      </td>
                      <td class="redips-single">
                        <div id="load2" class="redips-drag redips-clone"><span>セーブ 3</span></div>
                      </td>
                      <td class="redips-single">
                        <div id="load3" class="redips-drag redips-clone"><span>セーブ 4</span></div>
                      </td>
                      <td class="redips-single">
                        <div id="load4" class="redips-drag redips-clone"><span>セーブ 5</span></div>
                      </td>
                      <td class="redips-single">
                        <div id="load5" class="redips-drag redips-clone"><span>セーブ 6</span></div>
                      </td>
                      <td class="redips-single">
                        <div id="load6" class="redips-drag redips-clone"><span>セーブ 7</span></div>
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
  <script type="text/javascript" src="{{ asset('js/dayTableScript.js')}}"></script>
  <script src="{{ asset('js/gooey.min.js')}}"></script>
  <script src="{{ asset('dist/jquery.table2excel.min.js')}}"></script>
  <script src="{{ asset('js/moment.js')}}"></script>
  <script src="{{ asset('js/bootstrap-datetimepicker.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('js/jquery.timepicker.min.js')}}"></script>
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
      if ($("#freeContent").css("display") == "block") {
        $("#activityContent").fadeIn("fast");
      } else {
        $("footer").fadeIn("fast");
        $("#activityContent").fadeIn("fast");
      }
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
      

      var timeSchSrc = "<b>" + timeStart + "~" + timeEnd + ": </b> " + "<span style='text-decoration:underline;'>" + timeSchName + "</span><br />";
      var Src = "<tr class='newTr'>";
      Src += "<td id='td1' class='redips-mark'>" + timeSchSrc + "</td>";
      Src += "<td id='td2' class='dropcontent redips-single'> <textarea rows='5' style='width:100%; border: 0;' placeholder='活動デーま/コンテンツドラップ'></textarea></td>";
      Src += "<td id='td3' class='redips-mark' colspan='3'> <textarea rows='5' style='width:100%; border: 0;' placeholder='活動内容'></textarea></td>";
      Src += "<td id='td4' class='redips-mark'> <textarea rows='5' style='width:100%; border: 0;' placeholder='評価'></textarea></td>";
      Src += "</tr>";

      if ($("#schTable2").children().length < 14) {

        if ($("#schTable1").children().length > 14) {
          $("#schTable2").append(timeSchSrc);
        } else {
          $("#schTable1").append(timeSchSrc);
        }

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

  // 날짜정보 동기화
    $(function() {
      $("#daySch").change(function() {
        var value = document.getElementById('daySch').value;
        var week = weekAndDay(value);
        value = value.split('/');
        $('#changeMonth').text(value[2] + "年度 " + value[0] + "月 " + value[1] + "日 第" + week[0] + "週目 " + week[1] + "曜日");
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
            if(result.result == 'success'){
            console.log(result.dayInfo);
            $('#monthTopic').text(result.monthInfo.mTopic);// 여기에는 그달의 주제에 대한 값이 들어간다.
            $('#weekTopic').text(result.weekInfo.wTopic);//여기엔 그주의 주제에 대한 값이 들어간다.
            $('#dayTopic').text(result.dayInfo.dTopic); //여기엔 그 날의 주제에 대한 값이 들어간다.
            $('#weekGoal').text(result.dayInfo.dObjective); //여기에는 그주의 주간 목표에 대한 값이 들어간다.
          
          if(result.actInfo.length){
            for(var i=0;i < result.actInfo.length;i++){
              $('#load'+i).text(result.actInfo[i].title);
            }
           if(result.actInfo.length-7 < 0){
             for(var i = result.actInfo.length;i<7;i++){
              $('#load'+i).remove();
             }
           }
            
          }else{
            for(var i=0;i < 5;i++){
                $('#load'+i).text('データなし');
            }
          }
          }else{
             swal({
                  title:'保存されたデータがありません',
                  type:'error'
                });  
          }
          },error:function(){
             swal({
                  title:'サーバー接続エラ-が発生しました。',
                  type:'error'
                });  
          }
        });
      });
    });

    //주차와 요일 구하는 함수
    function weekAndDay(value) {
      var date = new Date(value);
      var click_date = value.split("/");
      var month_fdate = new Date(click_date[0]+"/01/"+click_date[2]); // click month's first date
      var month_fday = month_fdate.getDay(); // 일요일 이면 0을 반환 // 월요일 ,화요일이면 1,2를 반환

      var day = date.getDate(); //click's date
      var days = ['日', '月', '火', '水','木', '金', '土'];
      var prefixes = ['1','2', '3', '4', '5', '6'];
      var result = new Array();
        
        // 한 주의 시작을 일요일로!
      if(month_fday == '0'){
        // 일요일 이면
        day-=(date.getDay()+2);// 일요일의 날짜를 가져옴.

      }else if(month_fday == '1' || month_fday == '2'){
        // 월요일, 화요일 이면
        day-=(date.getDay()+1);// 일요일의 날짜를 가져옴.
        //special case handling for 0 (sunday)
      }else{
        // 일, 월, 화 모두 아님

        day-=date.getDay();//일요일의 날짜를 가져옴.
        //special case handling for 0 (sunday)

      }
      
      
      day+=7; 
      result[0] = prefixes[0 | (day) / 7]; //주차
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
    
      
      // 정보 저장
      $('#save').click(function(){
      var htmls =  $('#maintable').html(); // 테이블 HTML 소스 저장
        var value = document.getElementById('daySch').value;
        var week = weekAndDay(value);
        value = value.split('/');
        $.ajaxSetup({ headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')} });

        $.ajax({
          url:"{{route('ajaxtest.post')}}",
          type:"POST",
          dataType : "jsonp", 
          data:{
            year:value[2], //연 정보
            month:value[0], // 달 정보
            week:week[0], // 주 정보
            day:value[1], // 날 정보
            date:week[1], // 요일 정보
            dContent:htmls,
            clickInfo:'setData' // 페이지 명
          },
          success:function(result){
           swal({
                  title:'一日計画案作成完了',
                  text:'一日計画案を保存しました。',
                  type:'success'
                }); 
          },error:function(){
              swal({
                  title:'サーバー接続失敗',
                  text:"サーバー接続失敗しました。",
                  type:'error'
                }); 
          }
        });
        
      });

  </script>

@stop
