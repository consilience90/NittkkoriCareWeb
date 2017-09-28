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
  <link href="{{ asset('css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet" />
  
    <!-- GOOGLE FONT -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Dosis:400,300,600,700" rel="stylesheet" type="text/css">

  <!-- CUSTOM CSS -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/colors/default.css') }}" id="option_color">

  
  <style media="screen">
    /* drag container */

    #main_container {
      margin: auto;
      width: 1000px;
      height: auto;
    }
    /* container for the left table */

    #main_container #left {
      float: left;
      margin-right: 20px;
    }
    /* container for the main table and message line below */

    #main_container #right {
      width: 800px;
      padding-left: auto;
      padding-right: 0px;
      margin-left: auto;
    }
    /* drag objects (DIV inside table cells) */

    .redips-drag {
      cursor: move;
      margin: auto;
      z-index: 10;
      color: #222;
      text-align: center;
      font-size: 10pt;
      /* needed for cloned object */
      opacity: 0.7;
      filter: alpha(opacity=70);
      /* without width, IE6/7 will not apply filter/opacity to the element ?! */
      /* IE needs element layout */
      width: 87px;
      height: 20px;
      line-height: 20px;
      /* border */
      border: 1px solid #555;
      /* round corners */
      border-radius: 3px;
      -moz-border-radius: 3px;
      /* FF */
    }
    /* tables */

    div#redips-drag table {
      background-color: #eee;
      border-collapse: collapse;
    }
    /* timetable */

    div#drag #table2 {
      /* align table to the right */
      margin-left: auto;
    }
    /* table cells */

    div#redips-drag td {
      border-style: solid;
      border-width: 1px;
      border-color: white;
      height: 32px;
      text-align: center;
      font-size: 10pt;
      padding: 2px;
    }
    /* overwrite border settings for left tables */
    /* set all borders to 0px except border-bottom */

    div#redips-drag #table1 td {
      border-width: 0px 0px 1px 0px;
    }
    /* styles for clone DIV elements in left table */

    div#redips-drag #table1 div {
      margin-left: 5px;
      float: left;
    }
    /* define styles for buttons */

    div#redips-drag #table1 input {
      float: right;
      width: 15px;
      height: 23px;
      margin-right: 5px;
      border-width: 1px;
      /* round corners */
      border-radius: 3px;
      /* default visibility is hidden */
      visibility: hidden;
    }
    /* subject colors */

    .ar {
      background-color: #AAC8E2;
    }

    .bi {
      background-color: #E7D783;
    }

    .ch {
      background-color: #E99AE6;
    }

    .en {
      background-color: #C4AFFF;
    }

    .et {
      background-color: #91DEC5;
    }

    .hi {
      background-color: #CFE17F;
    }

    .it {
      background-color: #E7BD83;
    }

    .ma {
      background-color: #FFC5C2;
    }

    .ph {
      background-color: #A5F09D;
    }
    /* blank cells (upper left corner) */

    .blank {
      background-color: white;
    }
    /* background color for lunch */

    .lunch {
      color: #665;
      background-color: #f8eeee;
    }
    /* trash cell */

    .redips-trash {
      color: white;
      background-color: #6386BD;
    }
    /* message line */

    #message {
      color: white;
      background-color: #aaa;
      text-align: center;
      margin-top: 10px;
    }
    /* dark cells (first column and table header) */

    .dark {
      color: #444;
      background-color: #e0e0e0;
    }

    .button_container {
      padding-top: 10px;
      text-align: right;
    }
    /* "Save" button */

    .button_container input {
      background-color: #6A93D4;
      color: white;
      border-width: 1px;
      width: 40px;
      padding: 0px;
    }
    /*.teacherList{
    height:120px;
    text-align: center;
  }*/
  </style>


</head>

<body class="body-wrapper">

  <div class="main-wrapper">
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

      <!-- NAVBAR -->
      <nav id="menuBar" class="navbar navbar-default lightHeader" role="navigation" style="height:120px;">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html" style="padding-top:0px;"><img src="img/test_logo.png" alt="logo"></a>
          </div>
        </div>
      </nav>
    </header>

    <!-- PAGE TITLE SECTION-->
    <section class="pageTitleSection">
      <div class="container">
        <div class="pageTitleInfo">
          <h2>교사 일정 관리</h2>
        </div>
      </div>
    </section>



    <div id="main_container" style="padding-top:40px;">

      <form class="form-horizontal" role="form">
        <div class="form-group">
          <div class="col-md-12">
            <div class="form-group row">
              <label for="inputKey" class="col-md-1 control-label">반 이름</label>
              <div class="col-md-3">
                <select id="" name="" class="form-control">
                            <option value="1">해바라기반</option>
                            <option value="2">햇님반</option>
                            <option value="3">복숭아반</option>
                        </select>
              </div>
              <label for="inputValue" class="col-md-2 control-label">날짜 선택</label>
              <div class="col-md-2">
                <input type="text" class="form-control" id="daySch" placeholder="날짜">
              </div>
            </div>
          </div>
        </div>
      </form>



      <hr>
      <!-- tables inside this DIV could have draggable content -->
      <div id="redips-drag">

        <!-- left container (table with subjects) -->
        <div id="left">
          <table id="table1">
            <colgroup>
              <col width="120" />
            </colgroup>
            <tbody>
              <tr class="teacherList">
                <td class="dark">
                  <div id="ar" class="redips-drag redips-clone ar">권오교</div><input id="b_ar" class="ar" type="button" value="" onclick="redips.report('ar')" title="Show only Arts" /></td>
              </tr>
              <tr class="teacherList">
                <td class="dark">
                  <div id="bi" class="redips-drag redips-clone bi">진주완</div><input id="b_bi" class="bi" type="button" value="" onclick="redips.report('bi')" title="Show only Biology" /></td>
              </tr>
              <tr class="teacherList">
                <td class="dark">
                  <div id="ch" class="redips-drag redips-clone ch">최시우</div><input id="b_ch" class="ch" type="button" value="" onclick="redips.report('ch')" title="Show only Chemistry" /></td>
              </tr>
              <tr class="teacherList">
                <td class="dark">
                  <div id="en" class="redips-drag redips-clone en">신우성</div><input id="b_en" class="en" type="button" value="" onclick="redips.report('en')" title="Show only English" /></td>
              </tr>
              <tr class="teacherList">
                <td class="dark">
                  <div id="et" class="redips-drag redips-clone et">교사이름</div><input id="b_et" class="et" type="button" value="" onclick="redips.report('et')" title="Show only Ethics" /></td>
              </tr>
              <tr class="teacherList">
                <td class="dark">
                  <div id="hi" class="redips-drag redips-clone hi">교사이름</div><input id="b_hi" class="hi" type="button" value="" onclick="redips.report('hi')" title="Show only History" /></td>
              </tr>
              <tr class="teacherList">
                <td class="dark">
                  <div id="it" class="redips-drag redips-clone it">교사이름</div><input id="b_it" class="it" type="button" value="" onclick="redips.report('it')" title="Show only IT" /></td>
              </tr>
              <tr class="teacherList">
                <td class="dark">
                  <div id="ma" class="redips-drag redips-clone ma">교사이름</div><input id="b_ma" class="ma" type="button" value="" onclick="redips.report('ma')" title="Show only Mathematics" /></td>
              </tr>
              <tr class="teacherList">
                <td class="dark">
                  <div id="ph" class="redips-drag redips-clone ph">교사이름</div><input id="b_ph" class="ph" type="button" value="" onclick="redips.report('ph')" title="Show only Physics" /></td>
              </tr>
              <tr>
                <td class="redips-trash" title="Trash">삭제</td>
              </tr>
            </tbody>
          </table>
        </div>
        <!-- left container -->

        <!-- right container -->
        <div id="right">
          <table id="table2">
            <colgroup>
              <col width="50" />
              <col width="100" />
              <col width="100" />
              <col width="100" />
              <col width="100" />
              <col width="100" />
            </colgroup>
            <tbody>
              <tr>
                <!-- if checkbox is checked, clone school subjects to the whole table row  -->
                <td class="redips-mark blank">
                  <input type="radio" id="week" name="radio" value="" checked="">
                  <input type="radio" id="report" name="radio" value="">
                </td>
                <td class="redips-mark dark">월요일</td>
                <td class="redips-mark dark">화요일</td>
                <td class="redips-mark dark">수요일</td>
                <td class="redips-mark dark">목요일</td>
                <td class="redips-mark dark">금요일</td>

              </tr>
              <tr>
                <td class="redips-mark dark">8:00</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td class="redips-mark dark">9:00</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td class="redips-mark dark">10:00</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td class="redips-mark dark">11:00</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td class="redips-mark dark">12:00</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td class="redips-mark dark">13:00</td>
                <td class="redips-mark lunch" colspan="5">점심 시간</td>
              </tr>
              <tr>
                <td class="redips-mark dark">14:00</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td class="redips-mark dark">15:00</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td class="redips-mark dark">16:00</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
            </tbody>
          </table>
        </div>
        <!-- right container -->
      </div>
      <!-- drag container -->
    </div>
    <!-- main container -->
  </div>


  <div class="scrolling">
    <a href="create_class.html" class="backToTop" id="backToTop"><i class="fa fa-plus-square fa-3x" aria-hidden="true"></i></a>
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
  <script src="{{ asset('dist/jquery.table2excel.min.js')}}"></script>
  <script src="{{ asset('js/moment.js')}}"></script>
  <script src="{{ asset('js/bootstrap-datetimepicker.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('js/jquery.timepicker.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('js/teacherSchedule.js')}}"></script>
  
  <script type="text/javascript">
    $(function() {
      $("#daySch").datepicker();
    });
  </script>
</body>

</html>
