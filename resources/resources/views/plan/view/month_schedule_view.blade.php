@extends('master.plan')

 @section('main_content')
    <!-- PAGE TITLE SECTION-->
    <section class="pageTitleSection">
      <div class="container">
        <div class="pageTitleInfo">
          <h2>해바라기반 -월간 교육계획안</h2>
          <ol class="breadcrumb">
            <li>T-Supporter</li>
            <li class="active"><a href="{{ route('plans.index') }}">교육 계획안</a></li>
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
            <a href="{{ route('plans.show',['plan'=>'year']) }}" class="progress-wizard-dot">
              <i class="fa fa-file-text-o" aria-hidden="true"></i>
            </a>
            <div class="progressInfo" style="padding-left:34px;">연간계획안</div>
          </div>

          <div class="col-sm-3 col-xs-12 progress-wizard-step active">
            <div class="progress">
              <div class="progress-bar"></div>
            </div>
            <a class="progress-wizard-dot">
              <i class="fa fa-file-text-o" aria-hidden="true"></i>
            </a>
            <div class="progressInfo" style="padding-left:34px;">월간계획안</div>
          </div>

          <div class="col-sm-3 col-xs-12 progress-wizard-step incomplete">
            <div class="progress">
              <div class="progress-bar"></div>
            </div>
            <a href="{{ route('plans.show',['plan'=>'week']) }}" class="progress-wizard-dot">
              <i class="fa fa-file-text-o" aria-hidden="true"></i>
            </a>
            <div class="progressInfo" style="padding-left:34px;">주간계획안</div>
          </div>

          <div class="col-sm-3 col-xs-12 progress-wizard-step incomplete">
            <div class="progress">
              <div class="progress-bar"></div>
            </div>
            <a href="day_schedule_view.html" class="progress-wizard-dot">
              <i class="fa fa-file-text-o" aria-hidden="true"></i>
            </a>
            <div class="progressInfo" style="padding-left:34px;">일간계획안</div>
          </div>
        </div>

        <div class="row">


          <div class="col-xs-12 block">
            <div class="thumbnail alt">
              <div class="caption">

                <h1 id="changeMonth" class="color-1" style="text-align:center; font-size:400%;"></h1>
                <div class="table-responsive">
                  <div class="col-xs-4 form-group form-inline">
                    <label>월 선택:&nbsp; </label>
                    <input type="text" id="schMonth" class="form-control" name="schMonth" size="10">
                    <button type="button" class="btn btn-success" style="height:35px; padding-top:0px; padding-bottom:0px;" id="excel">Excel</button>
                  </div>

                  <table class="table table-curved tg table2excel" id="maintable" style="text-align:center; vertical-align:middle;">
                    <thead>
                      <tr class="">
                        <th class="col-sm-1 redips-mark bg-color-2">
                          <h3 style="text-align:center; margin-bottom:0px; vertical-align:middle;">월간 주제</h3></th>
                        <th id = "mTopic" class="col-sm-5 redips-mark border-color-2" style="border:1px dotted; text-align:center; vertical-align:middle;" colspan="5"></th>
                      </tr>
                    </thead>
                    <tbody id="tbody">


                      <!-- bg-color-5 border-color-5 -->
                      <tr>
                        <td class="col-sm-2 redips-mark ">
                          <h3 style="margin-bottom:0px;">월간 목표</h3></td>
                        <td id="mGoal" class="col-sm-8 redips-single" colspan="5"></td>
                      </tr>

                      <tr>
                        <td class="redips-mark bg-color-3 border-color-3" style="">
                          <h3 style="margin-bottom:0px;">주차</h3></td>
                        <td class="redips-mark bg-color-3" style="vertical-align:middle;"><b>1주차</b></td>
                        <td class="redips-mark bg-color-3" style="vertical-align:middle;"><b>2주차</b></td>
                        <td class="redips-mark bg-color-3" style="vertical-align:middle;"><b>3주차</b></td>
                        <td class="redips-mark bg-color-3" style="vertical-align:middle;"><b>4주차</b></td>
                        <td class="redips-mark bg-color-3" style="vertical-align:middle;"><b>5주차</b></td>
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
                          <h3 style="margin-bottom:0px;">월</h3></td>
                        <td id ="mon_FirstWeek" class="FirstWeek"></td>
                          <td id ="mon_SecondWeek" class="SecondWeek"></td>
                          <td id ="mon_ThirdWeek" class="ThirdWeek"></td>
                          <td id ="mon_FourthWeek" class="FourthWeek"></td>
                          <td id ="mon_FifthWeek" class="FifthWeek"></td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="vertical-align:middle; background-color:rgb(212, 195, 230);">
                          <h3 style="margin-bottom:0px;">화</h3></td>
                         <td id ="tue_FirstWeek" class="FirstWeek"></td>
                          <td id ="tue_SecondWeek" class="SecondWeek"></td>
                          <td id ="tue_ThirdWeek" class="ThirdWeek"></td>
                          <td id ="tue_FourthWeek" class="FourthWeek"></td>
                          <td id ="tue_FifthWeek" class="FifthWeek"></td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="vertical-align:middle; background-color:rgb(247, 222, 178);">
                          <h3 style="margin-bottom:0px;">수</h3></td>
                        <td id ="web_FirstWeek" class="FirstWeek"></td>
                          <td id ="web_SecondWeek" class="SecondWeek"></td>
                          <td id ="web_ThirdWeek" class="ThirdWeek"></td>
                          <td id ="web_FourthWeek" class="FourthWeek"></td>
                          <td id ="web_FifthWeek" class="FifthWeek"></td>
                      </tr>
                      <tr>
                        <td class="redips-mark" style="vertical-align:middle; background-color:rgb(186, 238, 227);">
                          <h3 style="margin-bottom:0px;">목</h3></td>
                         <td id ="thu_FirstWeek" class="FirstWeek"></td>
                          <td id ="thu_SecondWeek" class="SecondWeek"></td>
                          <td id ="thu_ThirdWeek" class="ThirdWeek"></td>
                          <td id ="thu_FourthWeek" class="FourthWeek"></td>
                          <td id ="thu_FifthWeek" class="FifthWeek"></td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="vertical-align:middle; background-color:rgb(204, 252, 198);">
                          <h3 style="margin-bottom:0px;">금</h3></td>
                          <td id ="fri_FirstWeek" class="FirstWeek"></td>
                          <td id ="fri_SecondWeek" class="SecondWeek"></td>
                          <td id ="fri_ThirdWeek" class="ThirdWeek"></td>
                          <td id ="fri_FourthWeek" class="FourthWeek"></td>
                          <td id ="fri_FifthWeek" class="FifthWeek"></td>
                      </tr>



                    </tbody>
                  </table>
                </div>
              </div>
            </div>
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




    </footer>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="{{ asset('plugins/jquery-ui/jquery-ui.js') }}"></script>
  <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('plugins/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
  <script src="{{ asset('plugins/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
  <script src="{{ asset('plugins/selectbox/jquery.selectbox-0.1.3.min.js') }}"></script>
  <script src="{{ asset('plugins/owl-carousel/owl.carousel.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js') }}"></script>
  <script src="{{ asset('plugins/counter-up/jquery.counterup.min.js') }}"></script>
  <script src="{{ asset('plugins/isotope/isotope.min.js') }}"></script>
  <script src="{{ asset('plugins/isotope/jquery.fancybox.pack.js') }}"></script>
  <script src="{{ asset('plugins/isotope/isotope-triger.js') }}"></script>
  <script src="{{ asset('plugins/countdown/jquery.syotimer.js') }}"></script>
  <script src="{{ asset('plugins/velocity/velocity.min.js') }}"></script>
  <script src="{{ asset('plugins/smoothscroll/SmoothScroll.js') }}"></script>
  <script src="{{ asset('js/custom.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/header.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/redips-drag-min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/redips-table-min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/tableScript.js') }}"></script>
  <script src="{{ asset('js/gooey.min.js') }}"></script>
  <script src="{{ asset('dist/jquery.table2excel.min.js') }}"></script>
  <script src="{{ asset('dist\jquery.mtz.monthpicker.js') }}"></script>
  <script type="text/javascript">



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
        if(startNum != 0){
          var selectValue = document.getElementById('schMonth').value;
          selectValue = selectValue.split("-");
          var year = selectValue[0];
          var month = selectValue[1];
        }else{
          var year = {{$year}};
          var month = "0"+{{$month}};
          $('#schMonth').val(year+"-"+month);
          startNum = 1;
        }
          $('#changeMonth').text(year + "년도 "+ month + " 월");
        
        
        // 해당 월의 주제와 해당 월의 주간 주제를 가지고 온다.
        $.ajax({
          url: "{{route('plans.getViewData')}}",
          dataType:'jsonp',
          data: {
            year:year,
            month:month,
            pageInfo:'month'
          },
          success: function(result) {
            alert('동기화했습니다.'); 
          },
          error: function(data) {
            // alert("서버접속 실패");
          }
        });
          
      });
      startNum = 0;
      $("#schMonth").trigger('change');
    });


  </script>
@stop