@extends('master.plan')

 @section('main_content')
    <!-- PAGE TITLE SECTION-->
    <section class="pageTitleSection">
      <div class="container">
        <div class="pageTitleInfo">
          <h2>해바라기반 -주간 교육계획안</h2>
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

          <div class="col-sm-3 col-xs-12 progress-wizard-step complete">
            <div class="progress">
              <div class="progress-bar"></div>
            </div>
            <a href="{{ route('plans.show',['plan'=>'month']) }}" class="progress-wizard-dot">
              <i class="fa fa-file-text-o" aria-hidden="true"></i>
            </a>
            <div class="progressInfo" style="padding-left:34px;">월간계획안</div>
          </div>

          <div class="col-sm-3 col-xs-12 progress-wizard-step active">
            <div class="progress">
              <div class="progress-bar"></div>
            </div>
            <a class="progress-wizard-dot">
              <i class="fa fa-file-text-o" aria-hidden="true"></i>
            </a>
            <div class="progressInfo" style="padding-left:34px;">주간계획안</div>
          </div>

          <div class="col-sm-3 col-xs-12 progress-wizard-step incomplete">
            <div class="progress">
              <div class="progress-bar"></div>
            </div>
            <a href="{{ route('plans.index') }}" class="progress-wizard-dot">
              <i class="fa fa-file-text-o" aria-hidden="true"></i>
            </a>
            <div class="progressInfo" style="padding-left:34px;">일간계획안</div>
          </div>
        </div>

        <div class="row">


          <div class="col-xs-12 block">
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

<button type="button" class="btn btn-success" style="height:35px; padding-top:0px; padding-bottom:0px;" id="excel">Excel</button>
                  </div>



                  <table class="table table-curved tg table2excel" id="maintable" style="text-align:center; vertical-align:middle;">
                    <thead>
                      <tr class="">
                        <th class="col-sm-1 redips-mark bg-color-2">
                          <h3 style="text-align:center; margin-bottom:0px; vertical-align:middle;">월간 주제</h3></th>
                        <th class="col-sm-5 redips-mark border-color-2" style="border:1px dotted; text-align:center; vertical-align:middle;" colspan="5">동기화</th>
                      </tr>
                    </thead>
                    <tbody id="tbody">


                      <!-- bg-color-5 border-color-5 -->
                      <tr>
                        <td class="col-sm-2 redips-mark bg-color-4">
                          <h3 style="margin-bottom:0px;">주간 주제</h3></td>
                        <td class="col-sm-8 redips-mark " colspan="5"><b> 동기화 </b></td>
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
                        <td class="redips-mark" style="vertical-align:middle;"><b>동기화</b></td>
                        <td class="redips-mark" style="vertical-align:middle;"><b>동기화</b></td>
                        <td class="redips-mark" style="vertical-align:middle;"><b>동기화</b></td>
                        <td class="redips-mark" style="vertical-align:middle;"><b>동기화</b></td>
                        <td class="redips-mark" style="vertical-align:middle;"><b>동기화</b></td>
                      </tr>


                      <tr>
                        <td class="redips-mark" style="vertical-align:middle;"><b>자유선택활동</b></td>
                        <td class="monday"></td>
                        <td class=""></td>
                        <td class=""></td>
                        <td class=""></td>
                        <td class=""></td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="vertical-align:middle;"><b><small>[단체활동]</small>이야기나누기</b></td>
                        <td class="monday"></td>
                        <td class=""></td>
                        <td class=""></td>
                        <td class=""></td>
                        <td class=""></td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="vertical-align:middle;"><b><small>[단체활동]</small>동화</b></td>
                        <td class="monday"></td>
                        <td class=""></td>
                        <td class=""></td>
                        <td class=""></td>
                        <td class=""></td>
                      </tr>
                      <tr>
                        <td class="redips-mark" style="vertical-align:middle;"><b><small>[단체활동]</small>신체표현</b></td>
                        <td class="monday"></td>
                        <td class=""></td>
                        <td class=""></td>
                        <td class=""></td>
                        <td class=""></td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="vertical-align:middle;"><b><small>[단체활동]</small>미술</b></td>
                        <td class="monday"></td>
                        <td class=""></td>
                        <td class=""></td>
                        <td class=""></td>
                        <td class=""></td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="vertical-align:middle;"><b><small>[단체활동]</small>감상</b></td>
                        <td class="monday"></td>
                        <td class=""></td>
                        <td class=""></td>
                        <td class=""></td>
                        <td class=""></td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="vertical-align:middle;"><b><small>[단체활동]</small>실외활동</b></td>
                        <td class="monday"></td>
                        <td class=""></td>
                        <td class=""></td>
                        <td class=""></td>
                        <td class=""></td>
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
  <script src="{{asset('plugins/jquery-ui/jquery-ui.js') }}"></script>
  <script src="{{asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{asset('plugins/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
  <script src="{{asset('plugins/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
  <script src="{{asset('plugins/selectbox/jquery.selectbox-0.1.3.min.js') }}"></script>
  <script src="{{asset('plugins/owl-carousel/owl.carousel.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
  <script src="{{asset('plugins/counter-up/jquery.counterup.min.js') }}"></script>
  <script src="{{asset('plugins/isotope/isotope.min.js') }}"></script>
  <script src="{{asset('plugins/isotope/jquery.fancybox.pack.js') }}"></script>
  <script src="{{asset('plugins/isotope/isotope-triger.js') }}"></script>
  <script src="{{asset('plugins/countdown/jquery.syotimer.js') }}"></script>
  <script src="{{asset('plugins/velocity/velocity.min.js') }}"></script>
  <script src="{{asset('plugins/smoothscroll/SmoothScroll.js') }}"></script>
  <script src="{{asset('js/custom.js') }}"></script>
  <script type="text/javascript" src="{{asset('js/header.js') }}"></script>
  <script type="text/javascript" src="{{asset('js/redips-drag-min.js') }}"></script>
  <script type="text/javascript" src="{{asset('js/redips-table-min.js') }}"></script>
  <script type="text/javascript" src="{{asset('js/tableScript.js') }}"></script>
  <script src="{{asset('js/gooey.min.js') }}"></script>
  <script src="{{ asset('dist/jquery.table2excel.min.js') }}"></script>
  <script src="{{ asset('dist/jquery.mtz.monthpicker.js') }}"></script>
  <script src="{{asset('js/moment.js') }}"></script>
  <script src="{{asset('js/bootstrap-datetimepicker.min.js') }}"></script>

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
          
          //ajax
          $.ajax({
           url:'',
           data:{},
           dataType:'jsonp',
           success:function(){
          
           },error:function(){
          
           }
         });
          
        });
    });
  });



  </script>
@stop