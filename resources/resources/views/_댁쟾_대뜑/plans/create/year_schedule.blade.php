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
  <style media="screen">
    .footer {
      position: fixed;
      bottom: 0px;
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
                <li><a href="" style="color:white;">{{ Auth::user()->name }} {{ session('positionName') }}, 안녕하세요!!</a></li>
                <li style="color:white;"><i class="fa fa-envelope bg-color-1" aria-hidden="true"></i>도착 메세지 10건</li>
              </ul>
            </div>
            <div class="col-sm-5">
              <ul class="list-inline functionList">
                <li style="margin-left:180px;">
                  <a href="{{ route('sessions.destroy') }}" style="font-size:large; color:white;" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                   Logout</a>

                  <form id="logout-form" action="{{ route('sessions.destroy') }}" method="POST" style="display: none;">
                     {{ csrf_field() }}
                  </form>
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
          <h2>해바라기반 -연간 교육계획안</h2>
          <ol class="breadcrumb">
            <li>T-Supporter</li>
            <li class="active">반 목록</li>
            <li class="active">해바라기 반</li>
          </ol>
        </div>
      </div>
    </section>

    <!-- MAIN SECTION -->
    <section class="mainContent full-width clearfix courseSingleSection" style="padding-top:60px; margin-bottom:120px;">
      <div class="container">

        <div class="row progress-wizard" style="border-bottom:0;">

          <div class="col-sm-3 col-xs-12 progress-wizard-step active">
            <div class="progress">
              <div class="progress-bar"></div>
            </div>
            <a href="{{ route('plans.selectCreate',['clickInfo'=>'year']) }}" class="progress-wizard-dot">
              <i class="fa fa-file-text-o" aria-hidden="true"></i>
            </a>
            <div class="progressInfo" style="padding-left:34px;">연간계획안</div>
          </div>

          <div class="col-sm-3 col-xs-12 progress-wizard-step incomplete">
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

                <h1 id="changeYear" class="color-1" style="text-align:center; font-size:400%;">2017</h1>

                <div class="table-responsive">
                  <div class="col-xs-4 form-group form-inline">
                    <label>년도 선택:&nbsp; </label>
                    <select onchange="checkYear()" id="selectYear" name="Year" class="form-control">
                    <option value="2017">2017</option>
                    <option value="2016">2016</option>
                    <option value="2015">2015</option>
                  </select>
                  </div>

                  <table class="table table-curved tg table2excel" id="maintable">
                    <thead>
                      <tr>
                        <th class="col-sm-1 bg-color-1 redips-mark ">월</th>
                        <th class="col-sm-1 bg-color-2 redips-mark ">월간주제</th>
                        <th class="col-sm-1 bg-color-3 redips-mark ">주차</th>
                        <th class="col-sm-2 bg-color-4 redips-mark ">주간주제</th>
                      </tr>
                    </thead>

                    <tbody id="tbody">

                      <tr>
                        <td class="redips-mark" rowspan="4" style=" vertical-align:middle">
                          <h2 style="text-align:center;">1월</h2>
                        </td>
                        <td id="jan" class="redips-mark month_cell redips-single" rowspan="4" style=" vertical-align:middle">
                        </td>
                        <td class="redips-mark" style="text-align:center;"><b>1주차</b></td>
                        <td id="jan_first" class="redips-mark week_cell jan" style="vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>2주차</b></td>
                        <td id="jan_second" class="redips-mark week_cell jan" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>3주차</b></td>
                        <td id="jan_third" class="redips-mark week_cell jan" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>4주차</b></td>
                        <td id="jan_fourth" class="redips-mark week_cell jan" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" rowspan="4" style=" vertical-align:middle">
                          <h2 class="nodrop_cell" style="text-align:center;">2월</h2>
                        </td>
                        <td id="feb" class="redips-mark month_cell redips-single" rowspan="4" style=" vertical-align:middle">

                        </td>

                        <td class="redips-mark" style="text-align:center;"><b>1주차</b></td>
                        <td id="feb_first" class="redips-mark week_cell" style="vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>2주차</b></td>
                        <td id="feb_second" class="redips-mark week_cell" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>3주차</b></td>
                        <td id="feb_third" class="redips-mark week_cell" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>4주차</b></td>
                        <td id="feb_fourth" class="redips-mark week_cell" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" rowspan="4" style=" vertical-align:middle">
                          <h2 class="nodrop_cell" style="text-align:center;">3월</h2>
                        </td>
                        <td id="mar" class="redips-mark month_cell redips-single" rowspan="4" style=" vertical-align:middle">

                        </td>

                        <td class="redips-mark" style="text-align:center;"><b>1주차</b></td>
                        <td id="mar_first" class="redips-mark week_cell" style="vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>2주차</b></td>
                        <td id="mar_second" class="redips-mark week_cell" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>3주차</b></td>
                        <td id="mar_third" class="redips-mark week_cell" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>4주차</b></td>
                        <td id="mar_fourth" class="redips-mark week_cell" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" rowspan="4" style=" vertical-align:middle">
                          <h2 class="nodrop_cell" style="text-align:center;">4월</h2>
                        </td>
                        <td id="apir" class="redips-mark month_cell redips-single" rowspan="4" style=" vertical-align:middle">

                        </td>

                        <td class="redips-mark" style="text-align:center;"><b>1주차</b></td>
                        <td id="apir_first" class="redips-mark week_cell jan" style="vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>2주차</b></td>
                        <td id="apir_second" class="redips-mark week_cell" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>3주차</b></td>
                        <td id="apir_third" class="redips-mark week_cell" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>4주차</b></td>
                        <td id="apir_fourth" class="redips-mark week_cell" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" rowspan="4" style=" vertical-align:middle">
                          <h2 class="nodrop_cell" style="text-align:center;">5월</h2>
                        </td>
                        <td id="may" class="redips-mark month_cell redips-single" rowspan="4" style=" vertical-align:middle">

                        </td>

                        <td class="redips-mark" style="text-align:center;"><b>1주차</b></td>
                        <td id="may_first" class="redips-mark week_cell" style="vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>2주차</b></td>
                        <td id="may_second" class="redips-mark week_cell" style="vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>3주차</b></td>
                        <td id="may_third" class="redips-mark week_cell" style="vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>4주차</b></td>
                        <td id="may_fourth" class="redips-mark week_cell" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" rowspan="4" style=" vertical-align:middle">
                          <h2 class="nodrop_cell" style="text-align:center;">6월</h2>
                        </td>
                        <td id="jun" class="redips-mark month_cell redips-single" rowspan="4" style=" vertical-align:middle">

                        </td>

                        <td class="redips-mark" style="text-align:center;"><b>1주차</b></td>
                        <td id="jun_first" class="redips-mark week_cell" style="vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>2주차</b></td>
                        <td id="jun_second" class="redips-mark week_cell" style="vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>3주차</b></td>
                        <td id="jun_third" class="redips-mark week_cell" style="vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>4주차</b></td>
                        <td id="jun_fourth" class="redips-mark week_cell" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" rowspan="4" style=" vertical-align:middle">
                          <h2 class="nodrop_cell" style="text-align:center;">7월</h2>
                        </td>
                        <td id="jul" class="redips-mark month_cell redips-single" rowspan="4" style=" vertical-align:middle">

                        </td>

                        <td class="redips-mark" style="text-align:center;"><b>1주차</b></td>
                        <td id="jul_first" class="redips-mark week_cell" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>2주차</b></td>
                        <td id="jul_second" class="redips-mark week_cell" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>3주차</b></td>
                        <td id="jul_third" class="redips-mark week_cell" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>4주차</b></td>
                        <td id="jul_fourth" class="redips-mark week_cell" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" rowspan="4" style=" vertical-align:middle">
                          <h2 class="nodrop_cell" style="text-align:center;">8월</h2>
                        </td>
                        <td id="aug" class="redips-mark month_cell redips-single" rowspan="4" style=" vertical-align:middle">

                        </td>

                        <td class="redips-mark" style="text-align:center;"><b>1주차</b></td>
                        <td id="aug_first" class="redips-mark week_cell" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>2주차</b></td>
                        <td id="aug_second" class="redips-mark week_cell" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>3주차</b></td>
                        <td id="aug_third" class="redips-mark week_cell" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>4주차</b></td>
                        <td id="aug_fourth" class="redips-mark week_cell" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" rowspan="4" style=" vertical-align:middle">
                          <h2 class="nodrop_cell" style="text-align:center;">9월</h2>
                        </td>
                        <td id="sep" class="redips-mark month_cell redips-single" rowspan="4" style=" vertical-align:middle">

                        </td>

                        <td class="redips-mark" style="text-align:center;"><b>1주차</b></td>
                        <td id="sep_first" class="redips-mark week_cell" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>2주차</b></td>
                        <td id="sep_second" class="redips-mark week_cell" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>3주차</b></td>
                        <td id="sep_third" class="redips-mark week_cell" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>4주차</b></td>
                        <td id="sep_fourth" class="redips-mark week_cell" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" rowspan="4" style=" vertical-align:middle">
                          <h2 class="nodrop_cell" style="text-align:center;">10월</h2>
                        </td>
                        <td id="oct" class="redips-mark month_cell redips-single" rowspan="4" style=" vertical-align:middle">

                        </td>

                        <td class="redips-mark" style="text-align:center;"><b>1주차</b></td>
                        <td id="oct_first" class="redips-mark week_cell" style=" vertical-align:middle">
                        </td>
                        </tr>

                        <tr>
                        <td class="redips-mark" style="text-align:center;"><b>2주차</b></td>
                        <td id="oct_second" class="redips-mark week_cell" style=" vertical-align:middle">
                        </td>
                        </tr>

                        <tr>
                        <td class="redips-mark" style="text-align:center;"><b>3주차</b></td>
                        <td id="oct_third" class="redips-mark week_cell" style=" vertical-align:middle">
                        </td>
                        </tr>

                        <tr>
                        <td class="redips-mark" style="text-align:center;"><b>4주차</b></td>
                        <td id="oct_fourth" class="redips-mark week_cell" style=" vertical-align:middle">
                        </td>
                        </tr>
                      <tr>
                        <td class="redips-mark" rowspan="4" style=" vertical-align:middle">
                          <h2 class="nodrop_cell" style="text-align:center;">11월</h2>
                        </td>
                        <td id="nov" class="redips-mark month_cell redips-single" rowspan="4" style=" vertical-align:middle">

                        </td>

                        <td class="redips-mark" style="text-align:center;"><b>1주차</b></td>
                        <td id="nov_first" class="redips-mark week_cell" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>2주차</b></td>
                        <td id="nov_second" class="redips-mark week_cell" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>3주차</b></td>
                        <td id="nov_third" class="redips-mark week_cell" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>4주차</b></td>
                        <td id="nov_fourth" class="redips-mark week_cell" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" rowspan="4" style=" vertical-align:middle">
                          <h2 class="nodrop_cell" style="text-align:center;">12월</h2>
                        </td>
                        <td id="dec" class="redips-mark month_cell redips-single" rowspan="4" style=" vertical-align:middle">

                        </td>

                        <td class="redips-mark" style="text-align:center;"><b>1주차</b></td>
                        <td class="redips-mark week_cell" style="vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>2주차</b></td>
                        <td class="redips-mark week_cell" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>3주차</b></td>
                        <td class="redips-mark week_cell" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>4주차</b></td>
                        <td class="redips-mark week_cell" style=" vertical-align:middle">
                        </td>
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
            <a class="gooey-menu-item" style="right: -40px;" onclick="monthContentView();"> 월간컨텐츠</a>
            <a class="gooey-menu-item" style="right: -40px;" onclick="weekContentView();"> 주간컨텐츠</a>
            <a class="gooey-menu-item" style="right: -40px;" onclick="inputContentView();"> 직접입력  </a>
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

                      <!--누리교육 컨셉  -->
                      <div class="caption" id="Concept" style="padding-top:0px; padding-bottom:0px;">
                        <h2 class="color-3" style="text-align:center;">누리교육 컨셉</h2>

                        <div class="col-sm-3 col-xs-12 block concept">
                          <div class="thumbnail thumbnailContent">
                            <img src="{{ asset('img/family.jpg')}}" alt="image" class="img-responsive">
                            <div class="caption border-color-1">
                              <h3 class="color-1" style="text-align:center;">우리 가족</h3>
                            </div>
                          </div>
                        </div>

                        <div class="col-sm-3 col-xs-12 block concept">
                          <div class="thumbnail thumbnailContent">
                            <img src="{{ asset('img/friends.jpg')}}" alt="image" class="img-responsive">
                            <div class="caption border-color-2">
                              <h3 class="color-2" style="text-align:center;">친구</h3>
                            </div>
                          </div>
                        </div>

                        <div class="col-sm-3 col-xs-12 block concept">
                          <div class="thumbnail thumbnailContent">
                            <img src="{{ asset('img/nature.jpg')}}" alt="image" class="img-responsive">
                            <div class="caption border-color-3">
                              <h3 class="color-3" style="text-align:center;">자연</h3>
                            </div>
                          </div>
                        </div>

                        <div class="col-sm-3 col-xs-12 block concept">
                          <div class="thumbnail thumbnailContent">
                            <img src="{{ asset('img/plants.jpg')}}" alt="image" class="img-responsive" height="500px;">
                            <div class="caption border-color-4">
                              <h3 class="color-4" style="text-align:center;">동식물</h3>
                            </div>
                          </div>
                        </div>

                        <div class="col-sm-3 col-xs-12 block concept">
                          <div class="thumbnail thumbnailContent">
                            <img src="{{ asset('img/viliiage.jpg') }}" alt="image" class="img-responsive">
                            <div class="caption border-color-5">
                              <h3 class="color-5" style="text-align:center;">우리 동네</h3>
                            </div>
                          </div>
                        </div>

                        <div class="col-sm-3 col-xs-12 block concept">
                          <div class="thumbnail thumbnailContent">
                            <img src="{{ asset('img/music.jpg') }}" alt="image" class="img-responsive">
                            <div class="caption border-color-6">
                              <h3 class="color-6" style="text-align:center;">음악</h3>
                            </div>
                          </div>
                        </div>

                        <div class="col-sm-3 col-xs-12 block concept">
                          <div class="thumbnail thumbnailContent">
                            <img src="{{ asset('img/fourSeasons.jpg') }}" alt="image" class="img-responsive">
                            <div class="caption border-color-1">
                              <h3 class="color-1" style="text-align:center;">계절</h3>
                            </div>
                          </div>
                        </div>

                        <div class="col-sm-3 col-xs-12 block concept">
                          <div class="thumbnail thumbnailContent">
                            <img src="{{ asset('img/sience.jpg') }}" alt="image" class="img-responsive" height="500px;">
                            <div class="caption border-color-2">
                              <h3 class="color-2" style="text-align:center;">과학</h3>
                            </div>
                          </div>
                        </div>

            </div>

              <!--월간 컨텐츠  -->
              <div class="caption" id="monthContent" style="padding-top:0px; padding-bottom:0px;">
                <h3 class="color-3" style="text-align:center;">월간 컨텐츠</h3>
                <div class="table-responsive">
                  <table class="table table-curved tg" id="table1">
                    <tr>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone month"><span>월간컨텐츠 1</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone month"><span>월간컨텐츠 2</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone month"><span>월간컨텐츠 3</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone month"><span>월간컨텐츠 4</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone month"><span>월간컨텐츠 5</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone month"><span>월간컨텐츠 6</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone month"><span>월간컨텐츠 7</span></div>
                      </td>


                    </tr>
                    <tr>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone month"><span>월간컨텐츠 8</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone month"><span>월간컨텐츠 9</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone month"><span>월간컨텐츠 10</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone month"><span>월간컨텐츠 11</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone month"><span>월간컨텐츠 12</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone month"><span>월간컨텐츠 13</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone month"><span>월간컨텐츠 14</span></div>
                      </td>
                    </tr>
                  </table>
                </div>
              </div>


              <!--월간 컨텐츠  -->
              <div class="caption" id="weekContent" style="padding-top:0px; padding-bottom:0px;">
                <h3 class="color-3" style="text-align:center;">주간 컨텐츠</h3>
                <div class="table-responsive">
                  <table class="table table-curved tg" id="table2">
                    <tr>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone week"><span>주간컨텐츠 1</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone week"><span>주간컨텐츠 2</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone week"><span>주간컨텐츠 3</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone week"><span>주간컨텐츠 4</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone week"><span>주간컨텐츠 5</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone week"><span>주간컨텐츠 6</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone week"><span>주간컨텐츠 7</span></div>
                      </td>
                    </tr>
                    <tr>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone week"><span>주간컨텐츠 8</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone week"><span>주간컨텐츠 9</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone week"><span>주간컨텐츠 10</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone week"><span>주간컨텐츠 11</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone week"><span>주간컨텐츠 12</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone week"><span>주간컨텐츠 13</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone week"><span>주간컨텐츠 14</span></div>
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
  <script type="text/javascript">
    $(document).ready(function() {
      StaticMenuOn();
      $('footer').hide();
      $("#monthContent").hide();
      $("#weekContent").hide();
      $("#inputContent").hide();
    });


    // AJAX 데이터 송수신
    $("#save").click(function() {
      //년도 선택
      var year = document.getElementById('selectYear').value;

      //월 데이터
      var monthData = {
        'jan': $("#jan").children().first().text(),
        'feb': $("#feb").children().first().text(),
        'mar': $("#mar").children().first().text(),
        'feb': $("#feb").children().first().text(),
        'apir': $("#apir").children().first().text(),
        'may': $("#may").children().first().text(),
        'jun': $("#jun").children().first().text(),
        'jul': $("#jul").children().first().text(),
        'aug': $("#aug").children().first().text(),
        'sep': $("#sep").children().first().text(),
        'oct': $("#oct").children().first().text(),
        'nov': $("#nov").children().first().text(),
        'dec': $("#dec").children().first().text(),
      }

      //주간 데이터, 연관 배열 indx[0] -> 1월달부터 시작
      var weekData = [
        //1월달 주차  데이터 index 0부터
        [$("#jan_first").children().first().text(), $("#jan_second").children().first().text(), $("#jan_third").children().first().text(), $("#jan_fourth").children().first().text()],
        //2월달 주차  데이터 index 0부터
        [$("#feb_first").children().first().text(), $("#feb_second").children().first().text(), $("#feb_third").children().first().text(), $("#feb_fourth").children().first().text()],
        //3월달 주차  데이터 index 0부터
        [$("#mar_first").children().first().text(), $("#mar_second").children().first().text(), $("#mar_third").children().first().text(), $("#mar_fourth").children().first().text()],
        //4월달 주차  데이터 index 0부터
        [$("#apir_first").children().first().text(), $("#apir_second").children().first().text(), $("#apir_third").children().first().text(), $("#apir_fourth").children().first().text()],
        //5월달 주차  데이터 index 0부터
        [$("#may_first").children().first().text(), $("#may_second").children().first().text(), $("#may_third").children().first().text(), $("#may_fourth").children().first().text()],
        //6월달 주차  데이터 index 0부터
        [$("#jun_first").children().first().text(), $("#jun_second").children().first().text(), $("#jun_third").children().first().text(), $("#jun_fourth").children().first().text()],
        //7월달 주차  데이터 index 0부터
        [$("#jul_first").children().first().text(), $("#jul_second").children().first().text(), $("#jul_third").children().first().text(), $("#jul_fourth").children().first().text()],
        //8월달 주차  데이터 index 0부터
        [$("#aug_first").children().first().text(), $("#aug_second").children().first().text(), $("#aug_third").children().first().text(), $("#aug_fourth").children().first().text()],
        //9월달 주차  데이터 index 0부터
        [$("#sep_first").children().first().text(), $("#sep_second").children().first().text(), $("#sep_third").children().first().text(), $("#sep_fourth").children().first().text()],
        //10월달 주차  데이터 index 0부터
        [$("#oct_first").children().first().text(), $("#oct_second").children().first().text(), $("#oct_third").children().first().text(), $("#oct_fourth").children().first().text()],
        //11월달 주차  데이터 index 0부터
        [$("#nov_first").children().first().text(), $("#nov_second").children().first().text(), $("#nov_third").children().first().text(), $("#nov_fourth").children().first().text()],
        //12월달 주차  데이터 index 0부터
        [$("#dec_first").children().first().text(), $("#dec_second").children().first().text(), $("#dec_third").children().first().text(), $("#dec_fourth").children().first().text()]
      ];

      $.ajax({
        url: "{{ route('plans.storePlans') }}",
        // url: "http://localhost/test/selectarea.php",
        dataType:'jsonp',
        data: {
          year:year,
          month:monthData,
          week:weekData,
          clickInfo:'year' // 현재작성하고 있는것이 년간인지, 월간인지, 주간인지 확인위해
        },
        success: function(result) {
          alert('데이터 저장 성공');
        },
        error: function(data) {
          alert("서버접속 실패");
        }
      });

    });


        function checkYear() {
          var selectValue = document.getElementById('selectYear').value;
          $('#changeYear').text(selectValue+"년도");
        }


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


        function conceptView(){
          $("footer").fadeIn("fast");
          $("#Concept").fadeIn("fast");
        }

        $(".concept").click(function(){
          $("#Concept").hide();
          monthContentView();
        })

        function monthContentView() {
          $("#weekContent").hide();
          $("#inputContent").hide();
           if ($("#weekContent").css("display") == "block") {
             $("#monthContent").fadeIn("fast");
           } else {
             $("footer").fadeIn("fast");
             $("#monthContent").fadeIn("fast");
           }
        }

        function weekContentView() {
          $("#monthContent").hide();
          $("#inputContent").hide();
          if ($("#monthContent").css("display") == "blcok") {
            $("#weekContent").fadeIn("fast");
          } else {
            $("footer").fadeIn("fast");
            $("#weekContent").fadeIn("fast");
          }
        }

        function inputContentView() {
          $("#monthContent").hide();
          $("#weekContent").hide();
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

        //더블클릭하면 컨텐츠 삭제
        $('td').on("dblclick", function() {
          if (!$(this).hasClass("redips-drag")) {
            $(this).children().first().remove();
          }
        });

  </script>
</body>

</html>
