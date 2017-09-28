@extends('master.plan')

 @section('main_content')
    <!-- PAGE TITLE SECTION-->
    <section class="pageTitleSection">
      <div class="container">
        <div class="pageTitleInfo">
          <h2>해바라기반 -연간 교육계획안</h2>
          <ol class="breadcrumb">
            <li>T-Supporter</li>
            <li class="active"><a href="{{ route('plans.index') }}">교육 계획안</a></li>
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
            <a class="progress-wizard-dot">
              <i class="fa fa-file-text-o" aria-hidden="true"></i>
            </a>
            <div class="progressInfo" style="padding-left:34px;">연간계획안</div>
          </div>

          <div class="col-sm-3 col-xs-12 progress-wizard-step incomplete">
            <div class="progress">
              <div class="progress-bar"></div>
            </div>
            <a href="{{ route('plans.show',['plan'=>'month']) }}" class="progress-wizard-dot">
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
            <a href="{{ route('plans.index') }}" class="progress-wizard-dot">
              <i class="fa fa-file-text-o" aria-hidden="true"></i>
            </a>
            <div class="progressInfo" style="padding-left:34px;">일간계획안</div>
          </div>
        </div>

        <div class="row">


          <div class="col-xs-12 block">
            <div class="thumbnail alt">

              <div class="col-xs-6 form-group form-inline" style="padding-right:; width:450px;">
                <label>년도 선택:&nbsp; </label>
                <select onchange="checkYear()" id="selectYear" name="Year" class="form-control">
                <option value="2017">2017</option>
                <option value="2016">2016</option>
                <option value="2015">2015</option>
                <option value="2014">2014</option>
                <option value="2013">2013</option>
              </select>
                <button type="button" class="btn btn-success" style="height:35px; padding-top:0px; padding-bottom:0px;" id="excel">Excel</button>
                <button type="button" class="btn btn-info" style="height:35px; padding-top:0px; padding-bottom:0px;" id="word">WORD</button>
                <button type="button" class="btn btn-danger" style="height:35px; padding-top:0px; padding-bottom:0px;" id="pdf">PDF</button>
              </div>

              <div id="docx" class="caption">
                <h1 id="changeYear" class="color-1" style="font-size:400%;">2017년도</h1>
                <div class="table-responsive WordSection1">



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
                        <td class="redips-mark" rowspan="5" style=" vertical-align:middle">
                          <h2 style="text-align:center;">1월</h2>
                        </td>
                        <td id="jan" class="redips-mark month_cell redips-single month1" rowspan="5" style=" vertical-align:middle">
                        </td>
                        <td class="redips-mark" style="text-align:center;"><b>1주차</b></td>
                        <td id="jan_first" class="redips-mark week_cell jan redips-single month1_week1" style="vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>2주차</b></td>
                        <td id="jan_second" class="redips-mark week_cell jan redips-single month1_week2" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>3주차</b></td>
                        <td id="jan_third" class="redips-mark week_cell jan redips-single month1_week3" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>4주차</b></td>
                        <td id="jan_fourth" class="redips-mark week_cell jan redips-single month1_week4" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>5주차</b></td>
                        <td id="jan_fifth" class="redips-mark week_cell jan redips-single month1_week5" style=" vertical-align:middle">
                        </td>
                      </tr>


                      <tr>
                        <td class="redips-mark" rowspan="5" style=" vertical-align:middle">
                          <h2 class="nodrop_cell" style="text-align:center;">2월</h2>
                        </td>
                        <td id="feb" class="redips-mark month_cell redips-single month2" rowspan="5" style=" vertical-align:middle">

                        </td>

                        <td class="redips-mark" style="text-align:center;"><b>1주차</b></td>
                        <td id="feb_first" class="redips-mark week_cell redips-single month2_week1" style="vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>2주차</b></td>
                        <td id="feb_second" class="redips-mark week_cell redips-single month2_week2" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>3주차</b></td>
                        <td id="feb_third" class="redips-mark week_cell redips-single month2_week3" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>4주차</b></td>
                        <td id="feb_fourth" class="redips-mark week_cell redips-single month2_week4" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>5주차</b></td>
                        <td id="feb_fifth" class="redips-mark week_cell redips-single month2_week5" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" rowspan="5" style=" vertical-align:middle">
                          <h2 class="nodrop_cell" style="text-align:center;">3월</h2>
                        </td>
                        <td id="mar" class="redips-mark month_cell redips-single month3" rowspan="5" style=" vertical-align:middle">

                        </td>

                        <td class="redips-mark" style="text-align:center;"><b>1주차</b></td>
                        <td id="mar_first" class="redips-mark week_cell redips-single month3_week1" style="vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>2주차</b></td>
                        <td id="mar_second" class="redips-mark week_cell redips-single month3_week2" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>3주차</b></td>
                        <td id="mar_third" class="redips-mark week_cell redips-single month3_week3" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>4주차</b></td>
                        <td id="mar_fourth" class="redips-mark week_cell redips-single month3_week4" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>5주차</b></td>
                        <td id="mar_fifth" class="redips-mark week_cell redips-single month3_week5" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" rowspan="5" style=" vertical-align:middle">
                          <h2 class="nodrop_cell" style="text-align:center;">4월</h2>
                        </td>
                        <td id="apir" class="redips-mark month_cell redips-single month4" rowspan="5" style=" vertical-align:middle">

                        </td>

                        <td class="redips-mark" style="text-align:center;"><b>1주차</b></td>
                        <td id="apir_first" class="redips-mark week_cell redips-single month4_week1" style="vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>2주차</b></td>
                        <td id="apir_second" class="redips-mark week_cell redips-single month4_week2" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>3주차</b></td>
                        <td id="apir_third" class="redips-mark week_cell redips-single month4_week3" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>4주차</b></td>
                        <td id="apir_fourth" class="redips-mark week_cell redips-single month4_week4" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>5주차</b></td>
                        <td id="apir_fifth" class="redips-mark week_cell redips-single month4_week5" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" rowspan="5" style=" vertical-align:middle">
                          <h2 class="nodrop_cell" style="text-align:center;">5월</h2>
                        </td>
                        <td id="may" class="redips-mark month_cell redips-single month5" rowspan="5" style=" vertical-align:middle">

                        </td>

                        <td class="redips-mark" style="text-align:center;"><b>1주차</b></td>
                        <td id="may_first" class="redips-mark week_cell redips-single month5_week1" style="vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>2주차</b></td>
                        <td id="may_second" class="redips-mark week_cell redips-single month5_week2" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>3주차</b></td>
                        <td id="may_third" class="redips-mark week_cell redips-single month5_week3" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>4주차</b></td>
                        <td id="may_fourth" class="redips-mark week_cell redips-single month5_week4" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>5주차</b></td>
                        <td id="may_fifth" class="redips-mark week_cell redips-single month5_week5" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" rowspan="5" style=" vertical-align:middle">
                          <h2 class="nodrop_cell" style="text-align:center;">6월</h2>
                        </td>
                        <td id="jun" class="redips-mark month_cell redips-single month6" rowspan="5" style=" vertical-align:middle">

                        </td>

                        <td class="redips-mark" style="text-align:center;"><b>1주차</b></td>
                        <td id="jun_first" class="redips-mark week_cell redips-single month6_week1" style="vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>2주차</b></td>
                        <td id="jun_second" class="redips-mark week_cell redips-single month6_week2" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>3주차</b></td>
                        <td id="jun_third" class="redips-mark week_cell redips-single month6_week3" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>4주차</b></td>
                        <td id="jun_fourth" class="redips-mark week_cell redips-single month6_week4" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>5주차</b></td>
                        <td id="jun_fifth" class="redips-mark week_cell redips-single month6_week5" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" rowspan="5" style=" vertical-align:middle">
                          <h2 class="nodrop_cell" style="text-align:center;">7월</h2>
                        </td>
                        <td id="jul" class="redips-mark month_cell redips-single month7" rowspan="5" style=" vertical-align:middle">

                        </td>

                        <td class="redips-mark" style="text-align:center;"><b>1주차</b></td>
                        <td id="jul_first" class="redips-mark week_cell redips-single month7_week1" style="vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>2주차</b></td>
                        <td id="jul_second" class="redips-mark week_cell redips-single month7_week2" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>3주차</b></td>
                        <td id="jul_third" class="redips-mark week_cell redips-single month7_week3" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>4주차</b></td>
                        <td id="jul_fourth" class="redips-mark week_cell redips-single month7_week4" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>5주차</b></td>
                        <td id="jul_fifth" class="redips-mark week_cell redips-single month7_week5" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" rowspan="5" style=" vertical-align:middle">
                          <h2 class="nodrop_cell" style="text-align:center;">8월</h2>
                        </td>
                        <td id="august" class="redips-mark month_cell redips-single month8" rowspan="5" style=" vertical-align:middle">

                        </td>

                        <td class="redips-mark" style="text-align:center;"><b>1주차</b></td>
                        <td id="aug_first" class="redips-mark week_cell redips-single month8_week1" style="vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>2주차</b></td>
                        <td id="aug_second" class="redips-mark week_cell redips-single month8_week2" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>3주차</b></td>
                        <td id="aug_third" class="redips-mark week_cell redips-single month8_week3" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>4주차</b></td>
                        <td id="aug_fourth" class="redips-mark week_cell redips-single month8_week4" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>5주차</b></td>
                        <td id="aug_fifth" class="redips-mark week_cell redips-single month8_week5" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" rowspan="5" style=" vertical-align:middle">
                          <h2 class="nodrop_cell" style="text-align:center;">9월</h2>
                        </td>
                        <td id ="sep" class="redips-mark month_cell redips-single month9" rowspan="5" style=" vertical-align:middle">

                        </td>

                        <td class="redips-mark" style="text-align:center;"><b>1주차</b></td>
                        <td id="sep_first" class="redips-mark week_cell redips-single month9_week1" style="vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>2주차</b></td>
                        <td id="sep_second" class="redips-mark week_cell redips-single month9_week2" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>3주차</b></td>
                        <td id="sep_third" class="redips-mark week_cell redips-single month9_week3" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>4주차</b></td>
                        <td id="sep_fourth" class="redips-mark week_cell redips-single month9_week4" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>5주차</b></td>
                        <td id="sep_fifth" class="redips-mark week_cell redips-single month9_week5" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" rowspan="5" style=" vertical-align:middle">
                          <h2 class="nodrop_cell" style="text-align:center;">10월</h2>
                        </td>
                        <td id = "oct" class="redips-mark month_cell redips-single month10" rowspan="5" style=" vertical-align:middle">

                        </td>

                        <td class="redips-mark" style="text-align:center;"><b>1주차</b></td>
                        <td id ="oct_first" class="redips-mark week_cell redips-single month10_week1" style="vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>2주차</b></td>
                        <td id="oct_second"  class="redips-mark week_cell redips-single month10_week2" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>3주차</b></td>
                        <td id="oct_third" class="redips-mark week_cell redips-single month10_week3" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>4주차</b></td>
                        <td id = "oct_fourth" class="redips-mark week_cell redips-single month10_week4" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>5주차</b></td>
                        <td id="oct_fifth" class="redips-mark week_cell redips-single month10_week5" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" rowspan="5" style=" vertical-align:middle">
                          <h2 class="nodrop_cell" style="text-align:center;">11월</h2>
                        </td>
                        <td id = "nov" class="redips-mark month_cell redips-single month11" rowspan="5" style=" vertical-align:middle">

                        </td>

                        <td class="redips-mark" style="text-align:center;"><b>1주차</b></td>
                        <td id="nov_first" class="redips-mark week_cell redips-single month11_week1" style="vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>2주차</b></td>
                        <td id="nov_second" class="redips-mark week_cell redips-single month11_week2" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>3주차</b></td>
                        <td id="nov_third" class="redips-mark week_cell redips-single month11_week3" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>4주차</b></td>
                        <td id="nov_fourth" class="redips-mark week_cell redips-single month11_week4" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>5주차</b></td>
                        <td id="nov_fifth" class="redips-mark week_cell redips-single month11_week5" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" rowspan="5" style=" vertical-align:middle">
                          <h2 class="nodrop_cell" style="text-align:center;">12월</h2>
                        </td>
                        <td id ="dec" class="redips-mark month_cell redips-single month12" rowspan="5" style=" vertical-align:middle">

                        </td>

                        <td class="redips-mark" style="text-align:center;"><b>1주차</b></td>
                        <td id="dec_first" class="redips-mark week_cell redips-single month12_week1" style="vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>2주차</b></td>
                        <td id="dec_second" class="redips-mark week_cell redips-single month12_week2" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>3주차</b></td>
                        <td id="dec_third" class="redips-mark week_cell redips-single month12_week3" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>4주차</b></td>
                        <td id="dec_fourth" class="redips-mark week_cell redips-single month12_week4" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>5주차</b></td>
                        <td id = "dec_fifth" class="redips-mark week_cell redips-single month12_week5" style=" vertical-align:middle">
                        </td>
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
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
  <script type="text/javascript">
  function checkYear() {
      if(startNum != 0){
          var selectValue = document.getElementById('selectYear').value;
      }else{
          var selectValue = {{ $year }};
          startNum = 1;
      }
      $('#changeYear').text(selectValue + "년도");
      
      $.ajax({
        url:"{{route('plans.getViewData')}}",
        data:{
          year:selectValue,
          pageInfo:'year'
        },
        dataType:'jsonp',
        success:function(result){
          //기존에 있는 값은 지운다.
          for(var m = 1;m <= 12;m++){
                $('.month'+m).empty();
                $('.month'+m+'_week1').empty();
                $('.month'+m+'_week2').empty();
                $('.month'+m+'_week3').empty();
                $('.month'+m+'_week4').empty();
                $('.month'+m+'_week5').empty();
          }
          for(var i in result.result){
            //
            switch(result.result[i].monthInfo){
              case 'jan':

                switch(result.result[i].weekInfo){
                  case 1:
                    $('#jan').text(result.result[i].mTopic);
                    $('#jan_first').text(result.result[i].wTopic);
                  break;
                  
                  case 2:
                    $('#jan_second').text(result.result[i].wTopic);
                  break;
                  
                  case 3:
                    $('#jan_third').text(result.result[i].wTopic);
                  break;
                  
                  case 4:
                    $('#jan_fourth').text(result.result[i].wTopic);
                  break;
                  
                  case 5:
                    $('#jan_fifth').text(result.result[i].wTopic);
                  break;
                }
              break;
              
              case 'feb':

                switch(result.result[i].weekInfo){
                  case 1:
                    $('#feb').text(result.result[i].mTopic);
                    $('#feb_first').text(result.result[i].wTopic);
                  break;
                  
                  case 2:
                    $('#feb_second').text(result.result[i].wTopic);
                  break;
                  
                  case 3:
                    $('#feb_third').text(result.result[i].wTopic);
                  break;
                  
                  case 4:
                    $('#feb_fourth').text(result.result[i].wTopic);
                  break;
                  
                  case 5:
                    $('#feb_fifth').text(result.result[i].wTopic);
                  break;
                }
              break;
              
              case 'mar':

                switch(result.result[i].weekInfo){
                  case 1:
                    $('#mar').text(result.result[i].mTopic);
                    $('#mar_first').text(result.result[i].wTopic);
                  break;
                  
                  case 2:
                    $('#mar_second').text(result.result[i].wTopic);
                  break;
                  
                  case 3:
                    $('#mar_third').text(result.result[i].wTopic);
                  break;
                  
                  case 4:
                    $('#mar_fourth').text(result.result[i].wTopic);
                  break;
                  
                  case 5:
                    $('#mar_fifth').text(result.result[i].wTopic);
                  break;
                }
              break;
              
              case 'apir':

                switch(result.result[i].weekInfo){
                  case 1:
                    $('#apir').text(result.result[i].mTopic);
                    $('#apir_first').text(result.result[i].wTopic);
                  break;
                  
                  case 2:
                    $('#apir_second').text(result.result[i].wTopic);
                  break;
                  
                  case 3:
                    $('#apir_third').text(result.result[i].wTopic);
                  break;
                  
                  case 4:
                    $('#apir_fourth').text(result.result[i].wTopic);
                  break;
                  
                  case 5:
                    $('#apir_fifth').text(result.result[i].wTopic);
                  break;
                }
              break;
              
              case 'may':

                switch(result.result[i].weekInfo){
                  case 1:
                    $('#may').text(result.result[i].mTopic);
                    $('#may_first').text(result.result[i].wTopic);
                  break;
                  
                  case 2:
                    $('#may_second').text(result.result[i].wTopic);
                  break;
                  
                  case 3:
                    $('#may_third').text(result.result[i].wTopic);
                  break;
                  
                  case 4:
                    $('#may_fourth').text(result.result[i].wTopic);
                  break;
                  
                  case 5:
                    $('#may_fifth').text(result.result[i].wTopic);
                  break;
                }
              break;
              
              case 'jun':

                switch(result.result[i].weekInfo){
                  case 1:
                    $('#jun').text(result.result[i].mTopic);
                    $('#jun_first').text(result.result[i].wTopic);
                  break;
                  
                  case 2:
                    $('#jun_second').text(result.result[i].wTopic);
                  break;
                  
                  case 3:
                    $('#jun_third').text(result.result[i].wTopic);
                  break;
                  
                  case 4:
                    $('#jun_fourth').text(result.result[i].wTopic);
                  break;
                  
                  case 5:
                    $('#jun_fifth').text(result.result[i].wTopic);
                  break;
                }
              break;
              
              case 'jul':

                switch(result.result[i].weekInfo){
                  case 1:
                    $('#jul').text(result.result[i].mTopic);
                    $('#jul_first').text(result.result[i].wTopic);
                  break;
                  
                  case 2:
                    $('#jul_second').text(result.result[i].wTopic);
                  break;
                  
                  case 3:
                    $('#jul_third').text(result.result[i].wTopic);
                  break;
                  
                  case 4:
                    $('#jul_fourth').text(result.result[i].wTopic);
                  break;
                  
                  case 5:
                    $('#jul_fifth').text(result.result[i].wTopic);
                  break;
                }
              break;
              
              case 'aug':

                switch(result.result[i].weekInfo){
                  case 1:
                    $('#aug').text(result.result[i].mTopic);
                    $('#aug_first').text(result.result[i].wTopic);
                  break;
                  
                  case 2:
                    $('#aug_second').text(result.result[i].wTopic);
                  break;
                  
                  case 3:
                    $('#aug_third').text(result.result[i].wTopic);
                  break;
                  
                  case 4:
                    $('#aug_fourth').text(result.result[i].wTopic);
                  break;
                  
                  case 5:
                    $('#aug_fifth').text(result.result[i].wTopic);
                  break;
                }
              break;
              
              case 'sep':

                switch(result.result[i].weekInfo){
                  case 1:
                    $('#sep').text(result.result[i].mTopic);
                    $('#sep_first').text(result.result[i].wTopic);
                  break;
                  
                  case 2:
                    $('#sep_second').text(result.result[i].wTopic);
                  break;
                  
                  case 3:
                    $('#sep_third').text(result.result[i].wTopic);
                  break;
                  
                  case 4:
                    $('#sep_fourth').text(result.result[i].wTopic);
                  break;
                  
                  case 5:
                    $('#sep_fifth').text(result.result[i].wTopic);
                  break;
                }
              break;
              
              case 'oct':

                switch(result.result[i].weekInfo){
                  case 1:
                    $('#oct').text(result.result[i].mTopic);
                    $('#oct_first').text(result.result[i].wTopic);
                  break;
                  
                  case 2:
                    $('#oct_second').text(result.result[i].wTopic);
                  break;
                  
                  case 3:
                    $('#oct_third').text(result.result[i].wTopic);
                  break;
                  
                  case 4:
                    $('#oct_fourth').text(result.result[i].wTopic);
                  break;
                  
                  case 5:
                    $('#oct_fifth').text(result.result[i].wTopic);
                  break;
                }
              break;
              
              case 'nov':

                switch(result.result[i].weekInfo){
                  case 1:
                    $('#nov').text(result.result[i].mTopic);
                    $('#nov_first').text(result.result[i].wTopic);
                  break;
                  
                  case 2:
                    $('#nov_second').text(result.result[i].wTopic);
                  break;
                  
                  case 3:
                    $('#nov_third').text(result.result[i].wTopic);
                  break;
                  
                  case 4:
                    $('#nov_fourth').text(result.result[i].wTopic);
                  break;
                  
                  case 5:
                    $('#nov_fifth').text(result.result[i].wTopic);
                  break;
                }
              break;
              
              case 'dec':

                switch(result.result[i].weekInfo){
                  case 1:
                    $('#dec').text(result.result[i].mTopic);
                    $('#dec_first').text(result.result[i].wTopic);
                  break;
                  
                  case 2:
                    $('#dec_second').text(result.result[i].wTopic);
                  break;
                  
                  case 3:
                    $('#dec_third').text(result.result[i].wTopic);
                  break;
                  
                  case 4:
                    $('#dec_fourth').text(result.result[i].wTopic);
                  break;
                  
                  case 5:
                    $('#dec_fifth').text(result.result[i].wTopic);
                  break;
                }
              break;
              
            }
          }
        },error:function(){
          alert('서버접속 에러');
        }
      });
    }
    
  
  $(function(){
      startNum = 0;
      checkYear();
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


     
    window.word.onclick = function() {

      if (!window.Blob) {
        alert('Your legacy browser does not support this action.');
        return;
      }

      var html, link, blob, url, css;

      // EU A4 use: size: 841.95pt 595.35pt;
      // US Letter use: size:11.0in 8.5in;

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
