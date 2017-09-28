@extends('master.plan')

 @section('main_content')

    <!-- PAGE TITLE SECTION-->
    <section class="pageTitleSection">
      <div class="container">
        <div class="pageTitleInfo">
          <h2>반이름 - 일간 교육계획안 보기</h2>
          <ol class="breadcrumb">
            <li>T-Supporter</li>
            <li class="active"><a href="{{ route('plans.index') }}">교육 계획안</a></li>
            <li class="active">반 이름</li>
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

                  <div class="col-xs-7 form-group form-inline ">
                    <label>날짜 선택:&nbsp; </label>
                    <input type="text" id="daySch" class="form-control" size="12" />
                <button type="button" class="btn btn-success" style="height:35px; padding-top:0px; padding-bottom:0px;" id="excel">Excel</button>
                <button type="button" class="btn btn-info" style="height:35px; padding-top:0px; padding-bottom:0px;" id="word">WORD</button>
                <button type="button" class="btn btn-danger" style="height:35px; padding-top:0px; padding-bottom:0px;" id="pdf">PDF</button>
                  </div>

                  <table class="table table-curved tg table2excel inputData" id="maintable" style="text-align:center; vertical-align:middle;">

                    
                  </table>



                </div>
              </div>
            </div>
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


  <script type="text/javascript">

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
        $('#changeMonth').text(value[2] + "년도 " + value[0] + "월 " + value[1] + "일 " + 5 + "주차 " + week[1] + "요일");
       $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
        $.ajax({
          url:"{{ route('dayActPlans.get') }}",
          data:{
            year:value[2], // 연정보
            month:value[0], // 월정보
            week:week[0], // 주 정보
            day:value[1], // 일 정보
            date:week[1], // 요일 정보
            clickInfo:'getData'
          },
          dataType:'jsonp',
          success:function(result){
               $('.inputData').empty();
              if(result.result == 'success'){
                $('.inputData').append(result.htmls.dContent);
              }else{
                alert('저장된 데이터가 없습니다.');
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

     
    window.word.onclick = function() {

      if (!window.Blob) {
        alert('Your legacy browser does not support this action.');
        return;
      }

      var html, link, blob, url, css;


      css = (
        '<style>' +
        '@page WordSection1{size: 841.95pt 595.35pt;mso-page-orientation: landscape;}' +
        'div.WordSection1 {page: WordSection1;}' +
        'table{border-collapse:collapse;}td{border:1px gray solid;width:13em;padding:2px;}' +
        '</style>'
      );

      html = window.docx.innerHTML;
      blob = new Blob(['\ufeff', css + html], {
        type: 'application/msword'
      });
      url = URL.createObjectURL(blob);
      link = document.createElement('A');
      link.href = url;
      // Set default file name.
      // Word will append file extension - do not add an extension here.
      link.download = 'Document';
      document.body.appendChild(link);
      if (navigator.msSaveOrOpenBlob) navigator.msSaveOrOpenBlob(blob, 'Document.doc'); // IE10-11
      else link.click(); // other browsers
      document.body.removeChild(link);
    };
    
  </script>

@stop
