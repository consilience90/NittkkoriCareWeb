@extends('master.plan')

 @section('main_content')
    <!-- PAGE TITLE SECTION-->
    <section class="pageTitleSection">
      <div class="container">
        <div class="pageTitleInfo">
          <h2>ひまわりのクラスー計画案のメニュー</h2>
          <ol class="breadcrumb">
            <li>T-Supporter</li>
            <li class="active">ひまわりのクラス</li>
          </ol>
        </div>
      </div>
    </section>

<!-- MAIN SECTION -->
    <section class="mainContent full-width clearfix">
          <div class="container">
            <div class="sectionTitle text-center">
              <h2>
                <span class="shape shape-left bg-color-4"></span>
                <span>教育計画案</span>
                <span class="shape shape-right bg-color-4"></span>
              </h2>
            </div>

            <div class="row">
              <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="pricingTable">
                  <div class="priceUper">
                    <div class="priceTitle bg-color-1"><h3>年間計画案</h3></div>
                    <div class="priceInfo bg-color-1"><p>一番先に作成しなければならない<br> 計画案です。</p></div>
                  </div>
                  <div class="priceLower">
                    <ul class="list-unstyled priceOffer">
                      <a href="{{ route('plans.show',['plan'=>'year']) }}"><li><i class="fa fa-hand-o-right color-1" aria-hidden="true"></i>年間計画案を確認する</li></a>
                    </ul>
                    <div class="priceBtn">
                      <a href="{{ route('plans.selectCreate',['clickInfo'=>'year']) }}" class="btn btn-primary bg-color-1">作成する</a>
                      <h4 class="color-1">{{ date("Y") }}<small class="color-1">年度</small><br><small>Current Year</small></h4>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="pricingTable">
                  <div class="priceUper">
                    <div class="priceTitle bg-color-2"><h3>月間計画案</h3></div>
                    <div class="priceInfo bg-color-2"><p>月間計画案を作成します。</p></div>
                  </div>
                  <div class="priceLower">
                    <ul class="list-unstyled priceOffer">
                      <a href="{{ route('plans.show',['plan'=>'month']) }}"><li><i class="fa fa-hand-o-right color-2" aria-hidden="true"></i>月間計画案を確認する</li></a>
                    </ul>
                    <div class="priceBtn">
                      <a href="{{ route('plans.selectCreate',['clickInfo'=>'month']) }}" class="btn btn-primary bg-color-2">作成する</a>
                      <h4 class="color-2">{{ date("m") }}<br><small>Current Month</small></h4>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="pricingTable">
                  <div class="priceUper">
                    <div class="priceTitle bg-color-3"><h3>週間計画案</h3></div>
                    <div class="priceInfo bg-color-3"><p>週間計画案を作成します。</p></div>
                  </div>
                  <div class="priceLower">
                    <ul class="list-unstyled priceOffer">
                      <a href="{{ route('plans.show',['plan'=>'week']) }}"><li><i class="fa fa-hand-o-right color-3" aria-hidden="true"></i>週間計画案を確認する</li></a>
                    </ul>
                    <div class="priceBtn">
                      <a href="{{ route('plans.selectCreate',['clickInfo'=>'week']) }}" class="btn btn-primary bg-color-3">作成する</a>
                      <h4 id="week" class="color-3"></h4>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="pricingTable">
                  <div class="priceUper">
                    <div class="priceTitle bg-color-4"><h3>日々計画案</h3></div>
                    <div class="priceInfo bg-color-4"><p>日々計画案を作成します。</p></div>
                  </div>
                  <div class="priceLower">
                    <ul class="list-unstyled priceOffer">
                      <a href="{{ route('plans.show',['plan'=>'day']) }}"><li><i class="fa fa-hand-o-right color-4" aria-hidden="true"></i>日々計画案を確認する</li></a>
                    </ul>
                    <div class="priceBtn">
                      <a href="{{ route('plans.selectCreate',['clickInfo'=>'day']) }}" class="btn btn-primary bg-color-4">作成する</a>
                      <h4 id="day" class="color-4"></h4>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </section>

    <!-- FOOTER -->
    <footer>
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
      <div class="copyRight clearfix">
        <div class="container">
          <div class="row">
            <div class="col-sm-5 col-sm-push-7 col-xs-12">
            </div>
            <div class="col-sm-7 col-sm-pull-5 col-xs-12">
              <div class="copyRightText">
                <p>© 2017 Copyright 3-WDJ LOGIC</p>
              </div>
            </div>
          </div>
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
  <script>
    $(function(){
      
      //주차와 요일 구하는 함수
        function weekAndDay(value) {
          var date = new Date(value);
          var click_date = value.split("/");
          var month_fdate = new Date(click_date[1]+"/01/"+click_date[0]); // click month's first date
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
        
        
      var dt = new Date();
      
      var month = dt.getMonth()+1;
      var day = dt.getDate();
      var year = dt.getFullYear();
      
      var weekInfo = weekAndDay(year+"/"+month+"/"+day);
      
      $('#week').html(weekInfo[0]+"<small class='color-3'>週目</small><br><small>Current Week</small>");
      $('#day').html(day+"<small class='color-4'>日</small><br><small>Current Day</small>");
      
        
        
    });
  </script>
@stop
