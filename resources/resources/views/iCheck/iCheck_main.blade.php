@extends('master.iCheck')

 @section('main_content')

    <!-- PAGE TITLE SECTION-->
    <section class="pageTitleSection">
      <div class="container">
        <div class="pageTitleInfo">
          <h2>{{$classInfo->cName}}クラス - iCheck</h2>
          <ol class="breadcrumb">
            <li>T-Supporter</li>
            <a href="{{route('icheck.index')}}" ><li class="active">{{$classInfo->cName}} クラス</li></a>
          </ol>
        </div>
      </div>
    </section>

    <!-- MAIN SECTION -->
        <section class="mainContent full-width clearfix">
          <div class="container">

            <div class="row">
              <div class="col-xs-12">
                <div class="sectionTitle text-center">
                  <h2>
                    <span class="shape shape-left bg-color-4"></span>
                    <span>園児リスト</span>
                    <span class="shape shape-right bg-color-4"></span>
                  </h2>
                </div>
              </div>
            </div>
            <div class="row">
          @foreach($childInfos as $childInfo)
              <div class="col-sm-3 col-xs-12" style="border-style: outset; padding-top:40px;">
                <div class="teamContent teamAdjust">
                  <div class="teamImage">
                  <a href="{{ route('icheck.show',['icheck'=>$childInfo->cId]) }}"><img src="./img/child/{{ $childInfo->imgName }}" alt="img" class="img-circle img-responsive" style="width:200px; height:160px;"></a>
                  </div>
                  <div class="teamInfo teamTeacher">
                 <h3><a href="{{ route('icheck.show',['icheck'=>$childInfo->cId]) }}">{{ $childInfo->cName }}</a></h3>
                    <p>満 {{$childInfo->age}}才</p>
                  </div>
                </div>
              </div>
        @endforeach

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
</body>

</html>
 @stop
