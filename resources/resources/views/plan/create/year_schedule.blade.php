@extends('master.plan')

 @section('main_content')
 
 <!-- 작성을 할때 전에 작성을 하였던 내용을 자동으로 가져온다. -->
    <!-- PAGE TITLE SECTION-->
    <section class="pageTitleSection">
      <div class="container">
        <div class="pageTitleInfo">
          <h2>{{$className}} - 年間の教育計画案の作成</h2>
          <ol class="breadcrumb">
            <li>T-Supporter</li>
            <li class="active"><a href="{{ route('plans.index') }}">教育計画案</a></li>
            <li class="active">{{$className}}</li>
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
            <div class="progressInfo" style="padding-left:34px;">年間計画案</div>
          </div>

          <div class="col-sm-3 col-xs-12 progress-wizard-step incomplete">
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

                <h1 id="changeYear" class="color-1" style="text-align:center; font-size:400%;">2017</h1>

                <div class="table-responsive">
                  <div class="col-xs-4 form-group form-inline">
                    <label>年度選択:&nbsp; </label>
                    <select onchange="checkYear()" id="selectYear" name="Year" class="form-control">
                    <option value="2017">2017</option>
                    <option value="2016">2016</option>
                    <option value="2015">2015</option>
                  </select>
                  </div>

                  <table class="table table-curved tg table2excel" id="maintable">
                    <thead>
                      <tr>
                        <th class="col-sm-1 bg-color-1 redips-mark ">月</th>
                        <th class="col-sm-1 bg-color-2 redips-mark ">月間テーマ</th>
                        <th class="col-sm-1 bg-color-3 redips-mark ">週目</th>
                        <th class="col-sm-2 bg-color-4 redips-mark ">週間テーマ</th>
                      </tr>
                    </thead>

<tbody id="tbody">

                      <tr>
                        <td class="redips-mark" rowspan="5" style=" vertical-align:middle">
                          <h2 style="text-align:center;">1月</h2>
                        </td>
                        <td id="jan" class="redips-mark month_cell redips-single" rowspan="5" style=" vertical-align:middle">
                        </td>
                        <td class="redips-mark" style="text-align:center;"><b>1週目</b></td>
                        <td id="jan_first" class="redips-mark week_cell jan redips-single" style="vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>2週目</b></td>
                        <td id="jan_second" class="redips-mark week_cell jan redips-single" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>3週目</b></td>
                        <td id="jan_third" class="redips-mark week_cell jan redips-single" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>4週目</b></td>
                        <td id="jan_fourth" class="redips-mark week_cell jan redips-single" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>5週目</b></td>
                        <td id="jan_fifth" class="redips-mark week_cell jan redips-single" style=" vertical-align:middle">
                        </td>
                      </tr>


                      <tr>
                        <td class="redips-mark" rowspan="5" style=" vertical-align:middle">
                          <h2 class="nodrop_cell" style="text-align:center;">2月</h2>
                        </td>
                        <td id="feb" class="redips-mark month_cell redips-single" rowspan="5" style=" vertical-align:middle">

                        </td>

                        <td class="redips-mark" style="text-align:center;"><b>1週目</b></td>
                        <td id="feb_first" class="redips-mark week_cell redips-single" style="vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>2週目</b></td>
                        <td id="feb_second" class="redips-mark week_cell redips-single" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>3週目</b></td>
                        <td id="feb_third" class="redips-mark week_cell redips-single" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>4週目</b></td>
                        <td id="feb_fourth" class="redips-mark week_cell redips-single" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>5週目</b></td>
                        <td id="feb_fifth" class="redips-mark week_cell redips-single" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" rowspan="5" style=" vertical-align:middle">
                          <h2 class="nodrop_cell" style="text-align:center;">3月</h2>
                        </td>
                        <td id="mar" class="redips-mark month_cell redips-single" rowspan="5" style=" vertical-align:middle">

                        </td>

                        <td class="redips-mark" style="text-align:center;"><b>1週目</b></td>
                        <td id="mar_first" class="redips-mark week_cell redips-single" style="vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>2週目</b></td>
                        <td id="mar_second" class="redips-mark week_cell redips-single" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>3週目</b></td>
                        <td id="mar_third" class="redips-mark week_cell redips-single" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>4週目</b></td>
                        <td id="mar_fourth" class="redips-mark week_cell redips-single" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>5週目</b></td>
                        <td id="mar_fifth" class="redips-mark week_cell redips-single" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" rowspan="5" style=" vertical-align:middle">
                          <h2 class="nodrop_cell" style="text-align:center;">4月</h2>
                        </td>
                        <td id="apir" class="redips-mark month_cell redips-single" rowspan="5" style=" vertical-align:middle">

                        </td>

                        <td class="redips-mark" style="text-align:center;"><b>1週目</b></td>
                        <td id="apir_first" class="redips-mark week_cell redips-single" style="vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>2週目</b></td>
                        <td id="apir_second" class="redips-mark week_cell redips-single" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>3週目</b></td>
                        <td id="apir_third" class="redips-mark week_cell redips-single" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>4週目</b></td>
                        <td id="apir_fourth" class="redips-mark week_cell redips-single" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>5週目</b></td>
                        <td id="apir_fifth" class="redips-mark week_cell redips-single" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" rowspan="5" style=" vertical-align:middle">
                          <h2 class="nodrop_cell" style="text-align:center;">5月</h2>
                        </td>
                        <td id="may" class="redips-mark month_cell redips-single" rowspan="5" style=" vertical-align:middle">

                        </td>

                        <td class="redips-mark" style="text-align:center;"><b>1週目</b></td>
                        <td id="may_first" class="redips-mark week_cell redips-single" style="vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>2週目</b></td>
                        <td id="may_second" class="redips-mark week_cell redips-single" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>3週目</b></td>
                        <td id="may_third" class="redips-mark week_cell redips-single" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>4週目</b></td>
                        <td id="may_fourth" class="redips-mark week_cell redips-single" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>5週目</b></td>
                        <td id="may_fifth" class="redips-mark week_cell redips-single" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" rowspan="5" style=" vertical-align:middle">
                          <h2 class="nodrop_cell" style="text-align:center;">6月</h2>
                        </td>
                        <td id="jun" class="redips-mark month_cell redips-single" rowspan="5" style=" vertical-align:middle">

                        </td>

                        <td class="redips-mark" style="text-align:center;"><b>1週目</b></td>
                        <td id="jun_first" class="redips-mark week_cell redips-single" style="vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>2週目</b></td>
                        <td id="jun_second" class="redips-mark week_cell redips-single" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>3週目</b></td>
                        <td id="jun_third" class="redips-mark week_cell redips-single" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>4週目</b></td>
                        <td id="jun_fourth" class="redips-mark week_cell redips-single" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>5週目</b></td>
                        <td id="jun_fifth" class="redips-mark week_cell redips-single" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" rowspan="5" style=" vertical-align:middle">
                          <h2 class="nodrop_cell" style="text-align:center;">7月</h2>
                        </td>
                        <td id="jul" class="redips-mark month_cell redips-single" rowspan="5" style=" vertical-align:middle">

                        </td>

                        <td class="redips-mark" style="text-align:center;"><b>1週目</b></td>
                        <td id="jul_first" class="redips-mark week_cell redips-single" style="vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>2週目</b></td>
                        <td id="jul_second" class="redips-mark week_cell redips-single" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>3週目</b></td>
                        <td id="jul_third" class="redips-mark week_cell redips-single" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>4週目</b></td>
                        <td id="jul_fourth" class="redips-mark week_cell redips-single" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>5週目</b></td>
                        <td id="jul_fifth" class="redips-mark week_cell redips-single" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" rowspan="5" style=" vertical-align:middle">
                          <h2 class="nodrop_cell" style="text-align:center;">8月</h2>
                        </td>
                        <td id="aug" class="redips-mark month_cell redips-single" rowspan="5" style=" vertical-align:middle">

                        </td>

                        <td class="redips-mark" style="text-align:center;"><b>1週目</b></td>
                        <td id="aug_first" class="redips-mark week_cell redips-single" style="vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>2週目</b></td>
                        <td id="aug_second" class="redips-mark week_cell redips-single" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>3週目</b></td>
                        <td id="aug_third" class="redips-mark week_cell redips-single" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>4週目</b></td>
                        <td id="aug_fourth" class="redips-mark week_cell redips-single" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>5週目</b></td>
                        <td id="aug_fifth" class="redips-mark week_cell redips-single" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" rowspan="5" style=" vertical-align:middle">
                          <h2 class="nodrop_cell" style="text-align:center;">9月</h2>
                        </td>
                        <td id ="sep" class="redips-mark month_cell redips-single" rowspan="5" style=" vertical-align:middle">

                        </td>

                        <td class="redips-mark" style="text-align:center;"><b>1週目</b></td>
                        <td id="sep_first" class="redips-mark week_cell redips-single" style="vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>2週目</b></td>
                        <td id="sep_second" class="redips-mark week_cell redips-single" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>3週目</b></td>
                        <td id="sep_third" class="redips-mark week_cell redips-single" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>4週目</b></td>
                        <td id="sep_fourth" class="redips-mark week_cell redips-single" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>5週目</b></td>
                        <td id="sep_fifth" class="redips-mark week_cell redips-single" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" rowspan="5" style=" vertical-align:middle">
                          <h2 class="nodrop_cell" style="text-align:center;">10月</h2>
                        </td>
                        <td id = "oct" class="redips-mark month_cell redips-single" rowspan="5" style=" vertical-align:middle">

                        </td>

                        <td class="redips-mark" style="text-align:center;"><b>1週目</b></td>
                        <td id ="oct_first" class="redips-mark week_cell redips-single" style="vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>2週目</b></td>
                        <td id="oct_second"  class="redips-mark week_cell redips-single" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>3週目</b></td>
                        <td id="oct_third" class="redips-mark week_cell redips-single" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>4週目</b></td>
                        <td id = "oct_fourth" class="redips-mark week_cell redips-single" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>5週目</b></td>
                        <td id="oct_fifth" class="redips-mark week_cell redips-single" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" rowspan="5" style=" vertical-align:middle">
                          <h2 class="nodrop_cell" style="text-align:center;">11月</h2>
                        </td>
                        <td id = "nov" class="redips-mark month_cell redips-single" rowspan="5" style=" vertical-align:middle">

                        </td>

                        <td class="redips-mark" style="text-align:center;"><b>1週目</b></td>
                        <td id="nov_first" class="redips-mark week_cell redips-single" style="vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>2週目</b></td>
                        <td id="nov_second" class="redips-mark week_cell redips-single" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>3週目</b></td>
                        <td id="nov_third" class="redips-mark week_cell redips-single" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>4週目</b></td>
                        <td id="nov_fourth" class="redips-mark week_cell redips-single" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>5週目</b></td>
                        <td id="nov_fifth" class="redips-mark week_cell redips-single" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" rowspan="5" style=" vertical-align:middle">
                          <h2 class="nodrop_cell" style="text-align:center;">12月</h2>
                        </td>
                        <td id ="dec" class="redips-mark month_cell redips-single" rowspan="5" style=" vertical-align:middle">

                        </td>

                        <td class="redips-mark" style="text-align:center;"><b>1週目</b></td>
                        <td id="dec_first" class="redips-mark week_cell redips-single" style="vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>2週目</b></td>
                        <td id="dec_second" class="redips-mark week_cell redips-single" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>3週目</b></td>
                        <td id="dec_third" class="redips-mark week_cell redips-single" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>4週目</b></td>
                        <td id="dec_fourth" class="redips-mark week_cell redips-single" style=" vertical-align:middle">
                        </td>
                      </tr>

                      <tr>
                        <td class="redips-mark" style="text-align:center;"><b>5週目</b></td>
                        <td id = "dec_fifth" class="redips-mark week_cell redips-single" style=" vertical-align:middle">
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
            <a class="gooey-menu-item" style="right: -40px;" onclick="conceptView();"> 月間コンテンツ</a>
            <a class="gooey-menu-item" style="right: -40px;" onclick="weekContentView();"> 週間コンテンツ</a>
            <a class="gooey-menu-item" style="right: -40px;" onclick="inputContentView();"> 直接入力  </a>
            <a id="excel" class="gooey-menu-item" style="right: -40px;"> EXCEL 変換 </a>
            <a id="save" class="gooey-menu-item" style="right: -40px;"> 計画案 保存 </a>
          </div>
        </div>
      </div>
    </section>

    <!-- FOOTER -->
    <footer id="yearFooter" class="footer col-sm-12 test" style="display:none;">
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
                        <h2 class="color-3" style="text-align:center;">ヌリ教育コンセプト</h2>

                        <div class="col-sm-3 col-xs-12 block concept">
                          <div class="thumbnail thumbnailContent">
                            <img src="{{ asset('img/family.jpg')}}" alt="image" class="img-responsive">
                            <div class="caption border-color-1">
                              <h3 class="color-1" style="text-align:center;">身体運動/健康</h3>
                            </div>
                          </div>
                        </div>

                        <div class="col-sm-3 col-xs-12 block concept">
                          <div class="thumbnail thumbnailContent">
                            <img src="{{ asset('img/friends.jpg')}}" alt="image" class="img-responsive">
                            <div class="caption border-color-2">
                              <h3 class="color-2" style="text-align:center;">意思疏通</h3>
                            </div>
                          </div>
                        </div>

                        <div class="col-sm-3 col-xs-12 block concept">
                          <div class="thumbnail thumbnailContent">
                            <img src="{{ asset('img/nature.jpg')}}" alt="image" class="img-responsive">
                            <div class="caption border-color-3">
                              <h3 class="color-3" style="text-align:center;">社会関係</h3>
                            </div>
                          </div>
                        </div>

                        <div class="col-sm-3 col-xs-12 block concept">
                          <div class="thumbnail thumbnailContent">
                            <img src="{{ asset('img/plants.jpg')}}" alt="image" class="img-responsive" height="500px;">
                            <div class="caption border-color-4">
                              <h3 class="color-4" style="text-align:center;">芸術経験</h3>
                            </div>
                          </div>
                        </div>

                        <div class="col-sm-3 col-xs-12 block concept">
                          <div class="thumbnail thumbnailContent">
                            <img src="{{ asset('img/viliiage.jpg') }}" alt="image" class="img-responsive">
                            <div class="caption border-color-5">
                              <h3 class="color-5" style="text-align:center;">自然探求</h3>
                            </div>
                          </div>
                        </div>

                        <div class="col-sm-3 col-xs-12 block concept">
                          <div class="thumbnail thumbnailContent">
                            <img src="{{ asset('img/music.jpg') }}" alt="image" class="img-responsive">
                            <div class="caption border-color-6">
                              <h3 class="color-6" style="text-align:center;">満 3才</h3>
                            </div>
                          </div>
                        </div>

                        <div class="col-sm-3 col-xs-12 block concept">
                          <div class="thumbnail thumbnailContent">
                            <img src="{{ asset('img/fourSeasons.jpg') }}" alt="image" class="img-responsive">
                            <div class="caption border-color-1">
                              <h3 class="color-1" style="text-align:center;">満 4才</h3>
                            </div>
                          </div>
                        </div>

                        <div class="col-sm-3 col-xs-12 block concept">
                          <div class="thumbnail thumbnailContent">
                            <img src="{{ asset('img/sience.jpg') }}" alt="image" class="img-responsive" height="500px;">
                            <div class="caption border-color-2">
                              <h3 class="color-2" style="text-align:center;">満 5才</h3>
                            </div>
                          </div>
                        </div>

            </div>

              <!--月간 컨텐츠  -->
              <div class="caption" id="monthContent" style="padding-top:0px; padding-bottom:0px; ">
                  <button type="button" class="close"  aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="color-3" style="text-align:center;">月間コンテンツ</h3>
                <div class="table-responsive">
                  <table class="table table-curved tg" id="table1">
                    <tr>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone month"><span>海と川</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone month"><span>翠緑の山</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone month"><span>春</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone month"><span>夏</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone month"><span>秋</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone month"><span>冬</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone month"><span>私たちの地球</span></div>
                      </td>


                    </tr>
                    <tr>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone month"><span>きれいな空気</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone month"><span>お月様とおひさま</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone month"><span>土/石</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone month"><span>水の大切さ</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone month"><span>風</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone month"><span>動・植物観察</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone month"><span>キラキラ、星</span></div>
                      </td>
                    </tr>
                  </table>
                </div>
              </div>


              <!--月간 컨텐츠  -->
              <div class="caption" id="weekContent" style="padding-top:0px; padding-bottom:0px;">
                  <button type="button" class="close"  aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="color-3" style="text-align:center;">週間コンテンツ</h3>
                <div class="table-responsive">
                  <table class="table table-curved tg" id="table2">
                    <tr>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone week"><span>秋の天気と生活</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone week"><span>秋の遠足を行く</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone week"><span>秋に会う動物</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone week"><span>秋に会う植物</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone week"><span>秋料理</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone week"><span>秋の遊び</span></div>
                      </td>
                      <td class="redips-single">
                        <div class="redips-drag redips-clone week"><span>秋に来るもの</span></div>
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
                            <option value="0">第１目項目</option>
                            <option value="2">第２目項目</option>
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
  <script type="text/javascript">
    $(document).ready(function() {
      StaticMenuOn();
      $('footer').hide();
      $("#monthContent").hide();
      $("#weekContent").hide();
      $("#inputContent").hide();
       $("#concept").hide();
      
    });


    // AJAX 데이터 송수신
    $("#save").click(function() {
      //년도 선택
      var year = document.getElementById('selectYear').value;

      //月 데이터
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

      //주간 데이터, 연관 배열 indx[0] -> 1月달부터 시작
      var weekData = [
        //1月달 週目  데이터 index 0부터
        [$("#jan_first").children().first().text(), $("#jan_second").children().first().text(), $("#jan_third").children().first().text(), $("#jan_fourth").children().first().text(), $("#jan_fifth").children().first().text()],
        //2月달 週目  데이터 index 0부터
        [$("#feb_first").children().first().text(), $("#feb_second").children().first().text(), $("#feb_third").children().first().text(), $("#feb_fourth").children().first().text(), $("#feb_fifth").children().first().text()],
        //3月달 週目  데이터 index 0부터
        [$("#mar_first").children().first().text(), $("#mar_second").children().first().text(), $("#mar_third").children().first().text(), $("#mar_fourth").children().first().text(), $("#mar_fifth").children().first().text()],
        //4月달 週目  데이터 index 0부터
        [$("#apir_first").children().first().text(), $("#apir_second").children().first().text(), $("#apir_third").children().first().text(), $("#apir_fourth").children().first().text(), $("#apir_fifth").children().first().text()],
        //5月달 週目  데이터 index 0부터
        [$("#may_first").children().first().text(), $("#may_second").children().first().text(), $("#may_third").children().first().text(), $("#may_fourth").children().first().text(), $("#may_fifth").children().first().text()],
        //6月달 週目  데이터 index 0부터
        [$("#jun_first").children().first().text(), $("#jun_second").children().first().text(), $("#jun_third").children().first().text(), $("#jun_fourth").children().first().text(), $("#jun_fifth").children().first().text()],
        //7月달 週目  데이터 index 0부터
        [$("#jul_first").children().first().text(), $("#jul_second").children().first().text(), $("#jul_third").children().first().text(), $("#jul_fourth").children().first().text(), $("#jul_fifth").children().first().text()],
        //8月달 週目  데이터 index 0부터
        [$("#aug_first").children().first().text(), $("#aug_second").children().first().text(), $("#aug_third").children().first().text(), $("#aug_fourth").children().first().text(), $("#aug_fifth").children().first().text()],
        //9月달 週目  데이터 index 0부터
        [$("#sep_first").children().first().text(), $("#sep_second").children().first().text(), $("#sep_third").children().first().text(), $("#sep_fourth").children().first().text(), $("#sep_fifth").children().first().text()],
        //10月달 週目  데이터 index 0부터
        [$("#oct_first").children().first().text(), $("#oct_second").children().first().text(), $("#oct_third").children().first().text(), $("#oct_fourth").children().first().text(), $("#oct_fifth").children().first().text()],
        //11月달 週目  데이터 index 0부터
        [$("#nov_first").children().first().text(), $("#nov_second").children().first().text(), $("#nov_third").children().first().text(), $("#nov_fourth").children().first().text(), $("#nov_fifth").children().first().text()],
        //12月달 週目  데이터 index 0부터
        [$("#dec_first").children().first().text(), $("#dec_second").children().first().text(), $("#dec_third").children().first().text(), $("#dec_fourth").children().first().text(), $("#dec_fifth").children().first().text()]
      ];
    
      $.ajax({
        url: "{{ route('plans.storePlans') }}",
        // url: "http://localhost/test/selectarea.php",
        dataType:'jsonp',
        data: {
          year:year,
          month:monthData,
          week:weekData,
          clickInfo:'year' // 현재작성하고 있는것이 년간인지, 月간인지, 주간인지 확인위해
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

        
    $(".close").click(function(){
      $('#gooey-round').css("visibility","visible");
      $("footer").hide();
    })

        function conceptView(){
            $('#gooey-round').css("visibility","hidden");
          $("footer").fadeIn("fast");
          $("#Concept").fadeIn("fast");
        }

        $(".concept").click(function(){
          $("#Concept").hide();
          monthContentView();
        })

        function monthContentView() {
            $('#gooey-round').css("visibility","hidden");
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
            $('#gooey-round').css("visibility","hidden");
          $("#Concept").hide();
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
            $('#gooey-round').css("visibility","hidden");
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

@stop
