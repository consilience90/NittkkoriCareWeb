@extends('master.main')

 @section('main_content')

    <!-- BANNER -->
    <section class="bannercontainer bannercontainerV1">
      <div class="fullscreenbanner-container">
        <div class="fullscreenbanner">
          <ul>
            <li data-transition="fade" data-slotamount="5" data-masterspeed="700" data-title="Slide 1">
              <img src="img/home/slider/slider-1.jpg" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
              <div class="slider-caption container">
                <div class="tp-caption rs-caption-1 sft start"
                  data-hoffset="0"
                  data-y="200"
                  data-speed="800"
                  data-start="1000"
                  data-easing="Back.easeInOut"
                  data-endspeed="300">
                  永進幼稚園
                </div>
                <div class="tp-caption rs-caption-2 sft"
                  data-hoffset="0"
                  data-y="265"
                  data-speed="1000"
                  data-start="1500"
                  data-easing="Power4.easeOut"
                  data-endspeed="300"
                  data-endeasing="Power1.easeIn"
                  data-captionhidden="off">
                  ニッコリケアは永進幼稚園と共に！ <br>
                </div>
              </div>
            </li>
            <li data-transition="fade" data-slotamount="5" data-masterspeed="700"  data-title="Slide 3">
              <img src="img/home/slider/slider-3.jpg" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
              <div class="slider-caption container">
                <div class="tp-caption rs-caption-1 sft start text-right"
                  data-hoffset="0"
                  data-y="200"
                  data-x="right"
                  data-speed="800"
                  data-start="1000"
                  data-easing="Back.easeInOut"
                  data-endspeed="300">
                  永進幼稚園
                </div>

                <div class="tp-caption rs-caption-2 sft text-right"
                  data-hoffset="0"
                  data-y="265"
                  data-x="right"
                  data-speed="1000"
                  data-start="1500"
                  data-easing="Power4.easeOut"
                  data-endspeed="300"
                  data-endeasing="Power1.easeIn"
                  data-captionhidden="off">
                 ニッコリケアは永進幼稚園と共に！
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </section>

    <!-- MAIN CONTENT -->
    <section class="clearfix linkSection hidden-xs">
      <div class="sectionLinkArea hidden-xs scrolling">
        <div class="container">
          <div class="row">
            <div class="col-sm-3">
              <a href="#" class="sectionLink bg-color-1" id="coursesLink">
                <i class="fa fa-calendar-o linkIcon border-color-1" aria-hidden="true"></i>
                <span class="linkText">お知らせ</span>
                <i class="fa fa-chevron-down locateArrow" aria-hidden="true"></i>
              </a>
            </div>
            <div class="col-sm-3">
              <a href="{{ route('classroom.index') }}" class="sectionLink bg-color-2" id="teamLink">
                <i class="fa fa-cog linkIcon border-color-2" aria-hidden="true"></i>
                <span class="linkText">幼稚園管理</span>
                <i class="fa fa-chevron-down locateArrow" aria-hidden="true"></i>
              </a>
            </div>

            <div class="col-sm-3">
              <a href="{{route('user.matching',['userId'=>Auth::user()->id])}}" class="sectionLink bg-color-3" id="galleryLink">
                <i class="fa fa-users linkIcon border-color-3" aria-hidden="true"></i>
                <span class="linkText">募集管理</span>
                <i class="fa fa-chevron-down locateArrow" aria-hidden="true"></i>
              </a>
            </div>

            <div class="col-sm-3">
              <a href="{{route('accounts.show',['userId'=>Auth::user()->id])}}" class="sectionLink bg-color-4">
                <i class="fa fa-file-text-o linkIcon border-color-4" aria-hidden="true"></i>
                <span class="linkText">決算</span>
                <i class="fa fa-chevron-down locateArrow" aria-hidden="true"></i>
              </a>
            </div>



          </div>
        </div>
      </div>
    </section>

<hr>
    <!-- WHITE SECTION -->
    <section class="whiteSection full-width clearfix newsSection" id="latestNews" style="padding-top:0px;">
      <div class="container">
        <div class="sectionTitle text-center">
          <h2>
            <span class="shape shape-left bg-color-4"></span>
            <span>永進幼稚園　日程</span>
            <span class="shape shape-right bg-color-4"></span>
          </h2>
        </div>

        <div class="row">
          
          <div class="col-sm-4 col-xs-12 block">
            <div class="thumbnail thumbnailContent">
              <img src="img/director-main03.jpg" alt="image" class="img-responsive" style="width:502px; height:280px;">
              <div class="sticker-round bg-color-1">30日<br>6月</div>
              <div class="caption border-color-1">
                <h3><a href="single-blog-left-sidebar.html" class="color-1">5歳クラス: 音楽コンテスト</a></h3>
                <ul class="list-inline">
                  <li><a href="single-blog-left-sidebar.html"><i class="fa fa-user" aria-hidden="true"></i>山田教師</a></li>
                </ul>
                <p>園児たちが練習した曲を弾きます。1時間30分ぐらいかかる予定です。</p>
                <ul class="list-inline btn-yellow">
                  <li><a href="single-blog-left-sidebar.html" class="btn btn-link"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Read More</a></li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="col-sm-4 col-xs-12 block">
            <div class="thumbnail thumbnailContent">
              <img src="img/director-main02.jpg" alt="image" class="img-responsive" style="width:502px; height:280px;">
              <div class="sticker-round bg-color-2">10日<br>7月</div>
              <div class="caption border-color-2">
                <h3><a href="single-blog-left-sidebar.html" class="color-2">3歳クラス: 作品展示会</a></h3>
                <ul class="list-inline">
                  <li><a href="single-blog-left-sidebar.html"><i class="fa fa-user" aria-hidden="true"></i>宮崎教師</a></li>
                </ul>
                <p>これまで、子どもたちが作った作品を幼稚園内に展示する予定です</p>
                <ul class="list-inline btn-green">
                  <li><a href="single-blog-left-sidebar.html" class="btn btn-link"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Read More</a></li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="col-sm-4 col-xs-12 block">
            <div class="thumbnail thumbnailContent">
              <img src="img/director-main01.jpg" alt="image" class="img-responsive"  style="width:502px; height:280px;">
              <div class="sticker-round bg-color-3">15日<br>7月</div>
              <div class="caption border-color-3">
                <h3><a href="single-blog-left-sidebar.html" class="color-3">4歳クラス: 発表会</a></h3>
                <ul class="list-inline">
                  <li><a href="single-blog-left-sidebar.html"><i class="fa fa-user" aria-hidden="true"></i>きくち教師</a></li>
                </ul>
                <p>ウサギとカメの童話、演劇とポロロ歌合わせてダンスを踊る予定です。</p>
                <ul class="list-inline btn-red">
                  <li><a href="#" class="btn btn-link"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Read More</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="btnArea">
          <a href="blog-grid.html" class="btn btn-primary">詳しく</a>
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

  <div class="scrolling">
    <a href="#pageTop" class="backToTop hidden-xs" id="backToTop"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
  </div>

  <div class="modal fade customModal" id="Tsupporter" tabindex="-1" role="dialog">
    <div class="modal-dialog" style="  position:absolute;
  top:0;right:0;bottom:0;left:0;
  display:-webkit-box;
  display:-moz-box;
  display:-ms-flexbox;
  display:-webkit-flex;
  display:flex;

  align-items:center;
  justify-content:center;
  -webkit-align-items:center;
  -webkit-justify-content:center;

  -webkit-box-pack:center;
  -webkit-box-align:center;
  -moz-box-pack:center;
  -moz-box-align:center;
  -ms-box-pack:center;
  -ms-box-align:center;
  width:1000px; height:500px;">

      <div class="modal-content" >
        <div class="panel panel-default formPanel">
          <div class="panel-heading bg-color-1 border-color-1">
            <h3 class="panel-title">T-Supporter</h3>
          </div>
          <div class="panel-body">
                <div class="banner-bottom-inner" style="padding-top: 150px;">
                  <div class="row">

                    <div class="col-sm-4">
                      <a href="./class_list.html">
                      <div class="colContent">
                        <img src="img/home/banner-bottom/bottom-img1.jpg" alt="image" class="img-responsive">
                        <div class="colContent-info text-left">
                          <h3 class="bg-color-6">クラス管理</h3>
                          <p>クラスを追加したり、修正することができます。</p>
                        </div>
                      </div>
                    </a>
                    </div>

                    <div class="col-sm-4">
                      <div class="colContent">
                        <img src="img/home/banner-bottom/bottom-img2.jpg" alt="image" class="img-responsive">
                         <div class="colContent-info text-center">
                          <h3 class="bg-color-2">教育計画案管理</h3>
                          <p>教育計画案を手軽に作成および修正</p>
                        </div>
                      </div>
                    </div>

                    <div class="col-sm-4">
                      <div class="colContent">
                        <img src="img/home/banner-bottom/bottom-img3.jpg" alt="image" class="img-responsive">
                         <div class="colContent-info text-right">
                          <h3 class="bg-color-5">会員管理</h3>
                          <p>うちの幼稚園の会員管理</p>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@stop
