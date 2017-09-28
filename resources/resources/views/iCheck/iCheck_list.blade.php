@extends('master.iCheck')

 @section('main_content')

    <!-- PAGE TITLE SECTION-->
    <section class="pageTitleSection">
      <div class="container">
        <div class="pageTitleInfo">
          <h2>ひまわりクラス - iCheck - {{ $childInfo->cName }}</h2>
          <ol class="breadcrumb">
            <li>T-Supporter</li>
          <a href="{{route('icheck.index')}}" ><li class="active">ひまわりのクラス</li></a>
            <li class="active">{{ $childInfo->cName }}</li>
          </ol>
        </div>
      </div>
    </section>


    <!-- MAIN SECTION -->
    <section class="mainContent full-width clearfix">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 blog-full">
            @if(session('position') != 'parents')
            <div class="continueBtnArea">
              <ul class="list-inline">

                <li><a href="{{ route('icheck.createDiary',['cId'=>$childInfo->cId]) }}"><button class="btn btn-primary">i-Check 作成</button></a></li>
              </ul>
            </div>
            @endif

            @for($i=0 ; $i < sizeof($childDiarys); $i++)
            <div class="media courseList">
              <a class="media-left" href="{{ route('icheck.view',['id'=>$childDiarys[$i]->memoId]) }}">
                @if($childDiarys[$i]->id) 
                   <img class="media-object" src="{{$folderName}}{{$childDiarys[$i]->photoName}}" alt="Image" style="width:320px; height:250px;">
                @else
                   <img class="media-object" src="{{$childPhoto}}{{$childInfo->imgName}}" alt="Image" style="width:320px; height:250px;">
                @endif
                   <span class="sticker-round bg-color-1">
                     <?php
                       $date=explode("-",explode(" ",$childDiarys[$i]->create_date)[0]);
                       echo $date[1]."月 <br>";
                       echo $date[2]."日 ";
                     ?>
                   </span>
                 </a>
              <div class="media-body">
                <h3 class="media-heading"><a href="{{ route('icheck.view',['id'=>$childDiarys[$i]->memoId]) }}" class="color-1"><br>{{$childDiarys[$i]->title}}</a></h3>
                <ul class="list-inline">
                  <li><i class="fa fa-user" aria-hidden="true"></i>{{$childDiarys[$i]->name}}</li>
                </ul>
                <ul class="list-inline btn-yellow btnPart">
                  <li><a href="{{ route('icheck.view',['id'=>$childDiarys[$i]->memoId]) }}" class="btn btn-link"><i class="fa fa-angle-double-right" aria-hidden="true"></i>もっと見る</a></li>
                </ul>
              </div>
            </div>
            @endfor
      {{ $childDiarys->render() }}

          </div>
        </div>
        <div class="pagerArea text-center">
          
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
        console.log('{{$childDiarys}}');
      </script>
</body>

</html>
 @stop
