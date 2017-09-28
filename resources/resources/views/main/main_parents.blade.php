@extends('master.main')

 @section('main_content')

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
       <a class="navbar-brand" href="{{route('main.show')}}" style="padding-top:0px;"><img src="img/test_logo.png" alt="logo"></a>
     </div>


     <!-- Collect the nav links, forms, and other content for toggling -->
     <div class="collapse navbar-collapse navbar-ex1-collapse">
       <ul class="nav navbar-nav navbar-right">

         <li class=" dropdown megaDropMenu color-2">
           <a href="{{ route('icheck.show',['icheck'=>$childInfo->cId]) }}" aria-expanded="false">
             <i class="fa fa-file-text-o bg-color-2" aria-hidden="true"></i>
             <span>発育日誌</span>
           </a>
         </li>

         <li class="dropdown singleDrop color-4">
            <a href="{{route('weekreport.index')}}">
             <i class="fa fa-pencil-square-o bg-color-4" aria-hidden="true"></i>
             <span>成長記録</span>
           </a>
         </li>


         <li class="dropdown singleDrop color-5">
           <a href="{{route('list.kindergarden')}}" aria-expanded="false">
             <i class="fa fa-calendar bg-color-5" aria-hidden="true"></i>
             <span>募集申請</span>
           </a>
         </li>

         <li class="dropdown singleDrop color-6">
           <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
            aria-expanded="false"><i class="fa fa-gg bg-color-6" aria-hidden="true"></i> <span>お知らせ</span></a>
           <ul class="dropdown-menu dropdown-menu-right">
             <li><a href="accordion-toggles.html">幼稚園日程</a></li>
             <li><a href="tabs-dropdown.html">お知らせ</a></li>
           </ul>
         </li>
       </ul>
     </div>

   </div>
 </nav>
</header>

    <!-- BANNER -->
    <section class="bannercontainer bannercontainerV2">
      <div class="fullscreenbanner-container">
        <div class="fullscreenbanner">
          <ul>

            <li data-transition="fade" data-slotamount="5" data-masterspeed="100" data-title="kidz_slide_2">
              <img src="img/home/sliderV2/slider-bg1.png"  alt="slidebg" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="repeat">
              <div class="slider-caption container">

                <!-- LAYER NR. 1 -->
                <div class="tp-caption rs-caption-1 sft"
                  data-hoffset="0"
                  data-y="170"
                  data-speed="1100"
                  data-start="100"
                  data-easing="Back.easeInOut"
                  data-endspeed="300"
                  style="z-index: 5;">
                  {{ $childInfo->cName }}<span>&nbsp;園児</span>
                </div>
              @if(sizeof($permittion_status) && $permittion_status->status != 0)
                <!-- LAYER NR. 2 -->
                <div class="tp-caption rs-caption-2 sft"
                  data-hoffset="0"
                  data-y="245"
                  data-speed="1100"
                  data-start="200"
                  data-easing="Back.easeInOut"
                  data-endspeed="300"
                  data-endeasing="Power1.easeIn"
                  data-captionhidden="off"
                  style="z-index: 5;">
                  今日 {{ $childInfo->cName }}どんな活動をする？
                </div>

                <!-- LAYER NR. 3 -->
                <div class="tp-caption rs-caption-3 sft"
                  data-hoffset="0"
                  data-y="355"
                  data-speed="2000"
                  data-start="200"
                  data-easing="Back.easeInOut"
                  data-endspeed="300"
                  data-endeasing="Power1.easeIn"
                  data-captionhidden="off"
                  style="z-index: 5;">
                  <a href="#" class="btn btn-primary">計画案身に行く</a>
                </div>
                @else
                <!-- LAYER NR. 2 -->
                <div class="tp-caption rs-caption-2 sft"
                  data-hoffset="0"
                  data-y="245"
                  data-speed="1100"
                  data-start="200"
                  data-easing="Back.easeInOut"
                  data-endspeed="300"
                  data-endeasing="Power1.easeIn"
                  data-captionhidden="off"
                  style="z-index: 5;">
                  아직 유치원에 가입 신청 및 승인이 되어 있지 않습니다.
                </div>

                @endif
                <!-- LAYER NR. 4 -->
                <div class="tp-caption tp-resizeme sft stt "
                  data-x="right"
                  data-hoffset="0"
                  data-y="100"
                  data-start="0"
                  data-speed="350"
                  data-easing="Power1.easeIn"
                  data-endeasing="Power1.easeInOut"
                  data-endspeed="100"
                  style="z-index: 2;">
                  <img class="img-circle" src="./img/child/{{ $childInfo->imgName }}" alt="caption" width="405" height="417" style="margin-right:100px;">
                </div>

                <!-- LAYER NR. 5 -->
                <div class="tp-caption tp-resizeme start"
                  data-x="170"
                  data-y="34"
                  data-start="0"
                  data-speed="3000"
                  data-easing="Elastic.easeInOut"
                  data-endspeed="300"
                  style="z-index: 1;">
                  <img src="img/home/sliderV2/caption8.png" alt="caption" width="71" height="82">
                </div>

                <!-- LAYER NR. 6 -->
                <div class="tp-caption tp-resizeme sfl stl"
                  data-x="left"
                  data-hoffset="-90"
                  data-y="100"
                  data-start="0"
                  data-speed="3000"
                  data-easing="Elastic.easeInOut"
                  data-endspeed="300"
                  style="z-index: 1;">
                  <img src="img/home/sliderV2/caption6.png" alt="caption" width="51" height="59">
                </div>

                <!-- LAYER NR. 7 -->
                <div class="tp-caption tp-resizeme start"
                  data-x="left"
                  data-hoffset="-70"
                  data-y="bottom"
                  data-voffset="-170"
                  data-start="0"
                  data-speed="3000"
                  data-easing="Elastic.easeInOut"
                  data-endspeed="300"
                  style="z-index: 1;">
                  <img src="img/home/sliderV2/caption9.png" alt="caption" width="77" height="50">
                </div>

                <!-- LAYER NR. 8 -->
                <div class="tp-caption tp-resizeme start"
                  data-x="center"
                  data-y="center"
                  data-voffset="100"
                  data-start="0"
                  data-speed="3000"
                  data-easing="Elastic.easeInOut"
                  data-endspeed="300"
                  style="z-index: 1;">
                  <img src="img/home/sliderV2/caption12.png" alt="caption" width="66" height="55">
                </div>

                <!-- LAYER NR. 9 -->
                <div class="tp-caption tp-resizeme sfr str"
                  data-x="right"
                  data-hoffset="-270"
                  data-start="0"
                  data-y="34"
                  data-speed="3000"
                  data-easing="Elastic.easeInOut"
                  data-endspeed="300"
                  style="z-index: 1;">
                  <img src="img/home/sliderV2/caption13.png" alt="caption" width="65" height="65">
                </div>

                <!-- LAYER NR. 10 -->
                <div class="tp-caption tp-resizeme sfr str"
                  data-x="right"
                  data-hoffset="-70"
                  data-start="0"
                  data-y="100"
                  data-speed="3000"
                  data-easing="Elastic.easeInOut"
                  data-endspeed="300"
                  style="z-index: 1;">
                  <img src="img/home/sliderV2/caption10.png" alt="caption" width="73" height="56">
                </div>

                <!-- LAYER NR. 11 -->
                <div class="tp-caption tp-resizeme sfb stb"
                  data-x="right"
                  data-hoffset="-70"
                  data-y="bottom"
                  data-start="0"
                  data-voffset="-170"
                  data-speed="3000"
                  data-easing="Elastic.easeInOut"
                  data-endspeed="300"
                  style="z-index: 1;">
                  <img src="img/home/sliderV2/caption11.png" alt="caption" width="61" height="67">
                </div>

              </div>
            </li>



          </ul>
        </div>
      </div>
    </section>


    <!-- FOOTER -->
    <footer class="footer-2">
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

  <div class="scrolling">
    <a href="#pageTop" class="backToTop hidden-xs" id="backToTop"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
  </div>



  <!-- PORDUCT QUICK VIEW MODAL -->
  <div class="modal fade quick-view" tabindex="-1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="container-fluid">
          <div class="row">

            <div class="col-md-6 col-sm-7 col-xs-12">
              <div class="product-gallery text-center">
                <img src="img/single-product/preview01.jpg" alt="Product" class="img-responsive">
              </div>
            </div>

            <div class="col-md-6 col-sm-5 col-xs-12">
              <div class="product-info">
                <h1 class="product-title">Barbie Racing Car</h1>
                <div class="price">
                  <span>$50</span>
                  <span><del>$60</del></span>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.</p>
                <div class="add-cart">
                  <div class="count-input">
                    <input class="quantity btn-primary" type="text" value="1">
                    <a class="incr-btn incr-up" data-action="decrease" href="#"><i class="fa fa-caret-up" aria-hidden="true"></i></a>
                    <a class="incr-btn incr-down" data-action="increase" href="#"><i class="fa fa-caret-down" aria-hidden="true"></i></a>
                  </div>
                  <a href="cart-page.html" class="add-to-cart btn btn-primary">Add to Cart</a>
                </div>

              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
@stop
