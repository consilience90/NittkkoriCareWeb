<!DOCTYPE html>
<html lang="en">
<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ニッコリケア - Create Class</title>

  <!-- PLUGINS CSS STYLE -->
  <link href="{{ asset('plugins/jquery-ui/jquery-ui.css') }}" rel="stylesheet">
  <link href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{ asset('plugins/rs-plugin/css/settings.css') }}" media="screen">
  <link rel="stylesheet" type="text/css" href="{{ asset('plugins/selectbox/select_option1.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('plugins/owl-carousel/owl.carousel.css') }}" media="screen">
  <link rel="stylesheet" type="text/css" href="{{ asset('plugins/isotope/jquery.fancybox.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('plugins/isotope/isotope.css') }}">
    <link href="{{ asset('css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="{{ asset('css/sweetalert.css') }}">

  <!-- GOOGLE FONT -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Dosis:400,300,600,700" rel="stylesheet" type="text/css">

  <!-- CUSTOM CSS -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/colors/default.css') }}" id="option_color">
  <style type="text/css">
  @import "bourbon";
@import url(//fonts.googleapis.com/css?family=Oswald:400);

.chart {
  position: absolute;
  width: 300px;
  height: 200px;
  top: 50%;
  left: 50%;
  margin: -525px 0 0 -610px;
}
.doughnutTip {
  position: absolute;
  min-width: 30px;
  max-width: 300px;
  padding: 5px 15px;
  border-radius: 1px;
  background: rgba(0,0,0,.8);
  color: #ddd;
  font-size: 17px;
  text-shadow: 0 1px 0 #000;
  text-transform: uppercase;
  text-align: center;
  line-height: 1.3;
  letter-spacing: .06em;
  box-shadow: 0 1px 3px rgba(0,0,0,0.5);
  pointer-events: none;
  &::after {
      position: absolute;
      left: 50%;
      bottom: -6px;
      content: "";
      height: 0;
      margin: 0 0 0 -6px;
      border-right: 5px solid transparent;
      border-left: 5px solid transparent;
      border-top: 6px solid rgba(0,0,0,.7);
      line-height: 0;
  }
}
.doughnutSummary {
  position: absolute;
  top: 50%;
  left: 50%;
  color: #d5d5d5;
  text-align: center;
  text-shadow: 0 -1px 0 #111;
  cursor: default;
}
.doughnutSummaryTitle {
  position: absolute;
  top: 50%;
  width: 100%;
  margin-top: -27%;
  font-size: 22px;
  letter-spacing: .06em;
}
.doughnutSummaryNumber {
  position: absolute;
  top: 70%;
  width: 100%;
  margin-top: -15%;
  font-size: 35px;
}
.chart path:hover { opacity: 0.65; }
  
  
  
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input {display:none;}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
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
                <li><a href="" style="color:white;">こんにちは、 {{ Auth::user()->name }} {{ session('positionName') }}!!</a></li>
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
            <a class="navbar-brand" href="{{route('main.show')}}" style="padding-top:0px;"><img src="{{asset('img/test_logo.png')}}" alt="logo"></a>
          </div>
        </div>
      </nav>
    </header>
 
 <!-- MAIN SECTION -->
    <section class="mainContent full-width clearfix">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="cartInfo">
              <div class="table-responsive">
                        <div class="sectionTitle text-center">
         <h2>
            <span class="shape shape-left bg-color-4"></span>
            <span>募集申請の現況</span>
            <span class="shape shape-right bg-color-4"></span>
          </h2>
          
                    <div id="doughnutChart" class="chart" ></div>
          
                  <div class="row">
          <div class="col-xs-12">
            
            <div class="filter-container isotopeFilters">
              <ul class="list-inline filter">
                <li class="active"><a href="{{ route('joinList.show',['classInfo'=>'total']) }}" data-filter="*">ALL</a></li>
                <li><a href="{{ route('joinList.show',['classInfo'=>3]) }}" data-filter=".charity">3歳</a></li>
                <li><a href="{{ route('joinList.show',['classInfo'=>4]) }}" data-filter=".nature">4歳</a></li>
                <li><a href="{{ route('joinList.show',['classInfo'=>5]) }}" data-filter=".children">5歳</a></li>
              </ul>
            </div>
          </div>
        </div>
        </div>

                <table class="table" style="vertical-align: middle;">
                  <thead>
                    <tr class="bg-color-1" style="vertical-align: middle;">
                      <th class="col-lg-2 col-xs-3" style="min-width: 190px; text-indent:-999px;">
                        empty</th>
                      <th class="col-lg-4 col-xs-3" style="vertical-align: middle;"><h3 style="color:black; margin-bottom:0px;">園児の名</h3></th>
                      <th class="col-lg-2 col-xs-2" style="vertical-align: middle;"><h3 style="color:; margin-bottom:0px;">歳</h3></th>
                      <th class="col-lg-2 col-xs-2" style="vertical-align: middle;"><h3 style="color:; margin-bottom:0px;">申請日</h3></th>
                      <th class="col-lg-2 col-xs-2" style="vertical-align: middle;"><h3 style="color:; margin-bottom:0px;">加算点</h3></th>
                    </tr>
                  </thead>
                  <tbody>
                    
                    @if(sizeof($childInfos) && gettype($childInfos) != 'integer')
                    
                        @foreach($childInfos as $childInfo)
                          <tr>
                            <td  style="vertical-align: middle;">
                              
                              <button onclick="showChildInfo({{$childInfo->cId}})"style="border-style:none;" data-toggle="modal" data-target="#info" id="teamLink">
                               <span class="cartImage"><img src={!! asset("img/child/$childInfo->imgName") !!} alt="image" class="img-rounded" style="width:80px; height:80px;"></span>
                               </button>
                               
                            </td>
                            <td style="vertical-align: middle;">                               
                               <h4 id="childName" style="margin-bottom:0px;">{{ $childInfo->cName }}</h4>
                            </td>
                            <td><h4 style="margin-bottom:0px;">{{$childInfo->age}}歳</h4></td>
                            <td>
                              <h4 style="margin-bottom:0px;">
                              <?php
                                $val1 = explode('-',$childInfo->created_at);
                                $val2 = explode(' ',$val1[2]);
                                echo $val1[0]."/".$val1[1]."/".$val2[0];
                              ?>
                            </h4>
                            </td>
                              <td><h4 style="margin-bottom:0px;">{{$childInfo->score}}</h4></td>
                           
                          </tr>
                        @endforeach
                        {{ $childInfos->render() }}

                    @endif
          
                    
                    <tr>
                      <td colspan="4">
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="園児の名を入力してください" aria-describedby="basic-addon2">
                          <a href="#" class="btn btn-primary input-group-addon" id="basic-addon2">検索</a>
                        </div>
                      </td>
                      <td><button id="recuEnd" class="btn btn-primary pull-right">抽選始め</button></td>
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


</div>


  
  <div class="modal fade customModal" id="info" tabindex="-1" role="dialog">
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
  width:1000px; height:500px;
  margin-top:150px;">

    <div class="modal-content" style="height:700px; width:1000px;">

      <div class="panel panel-default formPanel">
        <div class="panel-heading bg-color-3 border-color-3">
          <h3 class="panel-title">園児の詳細情報</h3>
        </div>
        <div class="panel-body" style="padding-bottom:0px; width:1000px; height:700px;">
          <div class="banner-bottom-inner" style="padding-top: 100px;">
            <div class="row">
              
          <div class="col-md-4 col-sm-7 col-xs-12">
            <div class="product-gallery">
              <div class="product-gallery-content">
                    <img id = "detail_img" src="" alt="Product" class="img-responsive img-rounded" style="width:300px;">
              </div>
            </div>
          </div>
     

          <div class="col-md-6 col-sm-5 col-xs-12">
            <div id = "detail_info" class="product-info">
              <h1 class="product-title" style="margin-bottom:25px; color:#585858;">園児の名</h1>
              <h2 style="margin-bottom:20px; color:#585858;">親: </h2>
              <h2 id="detail_age" style="margin-bottom:20px; color:#585858;">3歳 &nbsp;誕生日:  2015年9月13日</h2>
 
              <hr>
               <h1 class="color-3" style="text-align:center; margin-bottom:15px;">園児の詳細情報</h1>
              
                  <ul class="list-unstyled para-list col-md-6">
                  <li><i class="fa fa-check" aria-hidden="true"></i>アトピー</li>
                  <li><i class="fa fa-check" aria-hidden="true"></i>菜食嫌い</li>
                  <li><i class="fa fa-check" aria-hidden="true"></i>視力が悪い</li>
                </ul>
                
                <ul class="list-unstyled para-list col-md-6">
                  <li><i class="fa fa-check" aria-hidden="true"></i>足元にやけどの跡がある</li>
                  <li><i class="fa fa-check" aria-hidden="true"></i>手を握ることを好き</li>
                  <li><i class="fa fa-check" aria-hidden="true"></i>恥ずかしがり屋</li>
                </ul>
        
                <p class = "child_detail"></p>

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
    
</div>

  <div class="scrolling">
    <a href="#pageTop" class="backToTop hidden-xs" id="backToTop"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
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
      <script src="{{ asset('js/sweetalert.min.js') }}"></script>
      <script src="{{ asset('js/bootstrap-datetimepicker.min.js')}}"></script>
      <script src="{{ asset('js/socket.io.js')}}"></script>
      <script src="{{ asset('js/mobilePush.js')}}"></script>
       
      <script>
       // "global" vars, built using blade
        var childUrl = '{{ URL::asset('/img/child/') }}';
        
      $(function(){
        $('#guiest_id5').change(function(){
              var areaName = document.getElementById('guiest_id5').value;
              alert(areaName);
        });
      });
      
        
          // 날짜 선택 --------------------------------------------
    $(function() {
      $("#daySch").datepicker();
    });

  
    $(function() {
      $("#daySch").change(function(){
        var value = document.getElementById('daySch').value;
         value = value.split('/');
    //   $.ajaxSetup({
    //     headers: {
    //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //     }
    // });
    
        document.getElementById('until').innerHTML="<font style='color:#1C1C1C'> "+ value[2] + "年 " + value[0] + "月 " + value[1] + "日 "+"</font>";
      
      });
      });
      
  // 선택한 원아 상세보기
  function showChildInfo(childNum){
      $.ajax({
        url:"{{route('childInfo.show')}}",
        data:{
          childNum:childNum
        },dataType:'jsonp',
        success:function(data){
          $("#detail_info h1").text(data.childInfo.cName);
          $("#detail_info h2").text("親: "+data.childInfo.name);
          var birth=data.childInfo.birth.split("-");
          $("#detail_age").text(data.childInfo.age+"際  誕生日:  "+birth[0]+"年"+birth[1]+"月"+birth[2]+"日");      
          $("#detail_img").attr("src",childUrl+"/"+data.childInfo.imgName);
          var short_name = data.childInfo.cName.split("권");
          $('.child_detail').text("先生こんにちは、"+data.childInfo.cName+"母です。"+short_name+"は10月には満三歳になっている私の最初の子です。石を過ぎた妹がいます。歌を歌う、踊り、ボール蹴ったり、石を拾って、走り回って遊ぶのが好きで、自動車、トトロを愛してます。");
        },error:function(){
          alert('Error');
        }

    });
    }

$(function(){
  $("#childName").click(function(childNum){
    
  });
})
      
      
  // 원아 뽑기 정보 저장
  var gacha = function (id, name, image) {
    this.cId = id;
    this.cName = name;
    this.cImage = image;
  }
  var arrGacha = function (id, name, image) {
    this.cId = id;
    this.cName = name;
    this.cImage = image;
  }
  
  var admissionPush = function (id, name, image) {

    
  }
  
  
   document.querySelector('#recuEnd').onclick = function(){
    var kinderNum = {{$kinderNum}};
    // alert(kinderNum);
    var classAge = {{$classAge}};
    
    $.ajax({
                url:"{{route('permit.update')}}",
                  data:{
                    classAge:classAge,
                    kinderNum:kinderNum
                  },
                  dataType:'jsonp',
                  
                  success:function(data){
                    alert('成功');

                    location.reload();
                  },error:function(){
                    alert('Error');
                  }
                });
              
            
        
      }
 
$(function(){
  $("#doughnutChart").drawDoughnutChart([
    { title: "男", value : {{$recuBoys}},  color: "#6DBCDB" },
    { title: "女", value:  {{$recuGirls}},   color: "#FC4349" }
  ]);
})


;(function($, undefined) {
  $.fn.drawDoughnutChart = function(data, options) {
    var $this = this,
      W = $this.width(),
      H = $this.height(),
      centerX = W/2,
      centerY = H/2,
      cos = Math.cos,
      sin = Math.sin,
      PI = Math.PI,
      settings = $.extend({
        segmentShowStroke : true,
        segmentStrokeColor : "#0C1013",
        segmentStrokeWidth : 1,
        baseColor: "white",
        baseOffset: 4,
        edgeOffset : 10,//offset from edge of $this
        percentageInnerCutout : 75,
        animation : true,
        animationSteps : 90,
        animationEasing : "easeInOutExpo",
        animateRotate : true,
        tipOffsetX: -8,
        tipOffsetY: -45,
        tipClass: "doughnutTip",
        summaryClass: "doughnutSummary",
        summaryTitle: "申請数:",
        summaryTitleClass: "doughnutSummaryTitle",
        summaryNumberClass: "doughnutSummaryNumber",
        beforeDraw: function() {  },
        afterDrawed : function() {  },
        onPathEnter : function(e,data) {  },
        onPathLeave : function(e,data) {  }
      }, options),
      animationOptions = {
        linear : function (t) {
          return t;
        },
        easeInOutExpo: function (t) {
          var v = t<.5 ? 8*t*t*t*t : 1-8*(--t)*t*t*t;
          return (v>1) ? 1 : v;
        }
      },
      requestAnimFrame = function() {
        return window.requestAnimationFrame ||
          window.webkitRequestAnimationFrame ||
          window.mozRequestAnimationFrame ||
          window.oRequestAnimationFrame ||
          window.msRequestAnimationFrame ||
          function(callback) {
            window.setTimeout(callback, 1000 / 60);
          };
      }();

    settings.beforeDraw.call($this);

    var $svg = $('<svg width="' + W + '" height="' + H + '" viewBox="0 0 ' + W + ' ' + H + '" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"></svg>').appendTo($this),
        $paths = [],
        easingFunction = animationOptions[settings.animationEasing],
        doughnutRadius = Min([H / 2,W / 2]) - settings.edgeOffset,
        cutoutRadius = doughnutRadius * (settings.percentageInnerCutout / 100),
        segmentTotal = 0;

    //Draw base doughnut
    var baseDoughnutRadius = doughnutRadius + settings.baseOffset,
        baseCutoutRadius = cutoutRadius - settings.baseOffset;
    $(document.createElementNS('http://www.w3.org/2000/svg', 'path'))
      .attr({
        "d": getHollowCirclePath(baseDoughnutRadius, baseCutoutRadius),
        "fill": settings.baseColor
      })
      .appendTo($svg);

    //Set up pie segments wrapper
    var $pathGroup = $(document.createElementNS('http://www.w3.org/2000/svg', 'g'));
    $pathGroup.attr({opacity: 0}).appendTo($svg);

    //Set up tooltip
    var $tip = $('<div class="' + settings.tipClass + '" />').appendTo('body').hide(),
        tipW = $tip.width(),
        tipH = $tip.height();

    //Set up center text area
    var summarySize = (cutoutRadius - (doughnutRadius - cutoutRadius)) * 2,
        $summary = $('<div class="' + settings.summaryClass + '" />')
                   .appendTo($this)
                   .css({ 
                     width: summarySize + "px",
                     height: summarySize + "px",
                     "margin-left": -(summarySize / 2) + "px",
                     "margin-top": -(summarySize / 2) + "px"
                   });
    var $summaryTitle = $('<p class="' + settings.summaryTitleClass + '">' + settings.summaryTitle + '</p>').appendTo($summary);
    var $summaryNumber = $('<p class="' + settings.summaryNumberClass + '"></p>').appendTo($summary).css({opacity: 0});

    for (var i = 0, len = data.length; i < len; i++) {
      segmentTotal += data[i].value;
      $paths[i] = $(document.createElementNS('http://www.w3.org/2000/svg', 'path'))
        .attr({
          "stroke-width": settings.segmentStrokeWidth,
          "stroke": settings.segmentStrokeColor,
          "fill": data[i].color,
          "data-order": i
        })
        .appendTo($pathGroup)
        .on("mouseenter", pathMouseEnter)
        .on("mouseleave", pathMouseLeave)
        .on("mousemove", pathMouseMove);
    }

    //Animation start
    animationLoop(drawPieSegments);

    //Functions
    function getHollowCirclePath(doughnutRadius, cutoutRadius) {
        //Calculate values for the path.
        //We needn't calculate startRadius, segmentAngle and endRadius, because base doughnut doesn't animate.
        var startRadius = -1.570,// -Math.PI/2
            segmentAngle = 6.2831,// 1 * ((99.9999/100) * (PI*2)),
            endRadius = 4.7131,// startRadius + segmentAngle
            startX = centerX + cos(startRadius) * doughnutRadius,
            startY = centerY + sin(startRadius) * doughnutRadius,
            endX2 = centerX + cos(startRadius) * cutoutRadius,
            endY2 = centerY + sin(startRadius) * cutoutRadius,
            endX = centerX + cos(endRadius) * doughnutRadius,
            endY = centerY + sin(endRadius) * doughnutRadius,
            startX2 = centerX + cos(endRadius) * cutoutRadius,
            startY2 = centerY + sin(endRadius) * cutoutRadius;
        var cmd = [
          'M', startX, startY,
          'A', doughnutRadius, doughnutRadius, 0, 1, 1, endX, endY,//Draw outer circle
          'Z',//Close path
          'M', startX2, startY2,//Move pointer
          'A', cutoutRadius, cutoutRadius, 0, 1, 0, endX2, endY2,//Draw inner circle
          'Z'
        ];
        cmd = cmd.join(' ');
        return cmd;
    };
    function pathMouseEnter(e) {
      var order = $(this).data().order;
      $tip.text(data[order].title + ": " + data[order].value)
          .fadeIn(200);
      settings.onPathEnter.apply($(this),[e,data]);
    }
    function pathMouseLeave(e) {
      $tip.hide();
      settings.onPathLeave.apply($(this),[e,data]);
    }
    function pathMouseMove(e) {
      $tip.css({
        top: e.pageY + settings.tipOffsetY,
        left: e.pageX - $tip.width() / 2 + settings.tipOffsetX
      });
    }
    function drawPieSegments (animationDecimal) {
      var startRadius = -PI / 2,//-90 degree
          rotateAnimation = 1;
      if (settings.animation && settings.animateRotate) rotateAnimation = animationDecimal;//count up between0~1

      drawDoughnutText(animationDecimal, segmentTotal);

      $pathGroup.attr("opacity", animationDecimal);

      //If data have only one value, we draw hollow circle(#1).
      if (data.length === 1 && (4.7122 < (rotateAnimation * ((data[0].value / segmentTotal) * (PI * 2)) + startRadius))) {
        $paths[0].attr("d", getHollowCirclePath(doughnutRadius, cutoutRadius));
        return;
      }
      for (var i = 0, len = data.length; i < len; i++) {
        var segmentAngle = rotateAnimation * ((data[i].value / segmentTotal) * (PI * 2)),
            endRadius = startRadius + segmentAngle,
            largeArc = ((endRadius - startRadius) % (PI * 2)) > PI ? 1 : 0,
            startX = centerX + cos(startRadius) * doughnutRadius,
            startY = centerY + sin(startRadius) * doughnutRadius,
            endX2 = centerX + cos(startRadius) * cutoutRadius,
            endY2 = centerY + sin(startRadius) * cutoutRadius,
            endX = centerX + cos(endRadius) * doughnutRadius,
            endY = centerY + sin(endRadius) * doughnutRadius,
            startX2 = centerX + cos(endRadius) * cutoutRadius,
            startY2 = centerY + sin(endRadius) * cutoutRadius;
        var cmd = [
          'M', startX, startY,//Move pointer
          'A', doughnutRadius, doughnutRadius, 0, largeArc, 1, endX, endY,//Draw outer arc path
          'L', startX2, startY2,//Draw line path(this line connects outer and innner arc paths)
          'A', cutoutRadius, cutoutRadius, 0, largeArc, 0, endX2, endY2,//Draw inner arc path
          'Z'//Cloth path
        ];
        $paths[i].attr("d", cmd.join(' '));
        startRadius += segmentAngle;
      }
    }
    function drawDoughnutText(animationDecimal, segmentTotal) {
      $summaryNumber
        .css({opacity: animationDecimal})
        .text((segmentTotal * animationDecimal).toFixed(1));
    }
    function animateFrame(cnt, drawData) {
      var easeAdjustedAnimationPercent =(settings.animation)? CapValue(easingFunction(cnt), null, 0) : 1;
      drawData(easeAdjustedAnimationPercent);
    }
    function animationLoop(drawData) {
      var animFrameAmount = (settings.animation)? 1 / CapValue(settings.animationSteps, Number.MAX_VALUE, 1) : 1,
          cnt =(settings.animation)? 0 : 1;
      requestAnimFrame(function() {
          cnt += animFrameAmount;
          animateFrame(cnt, drawData);
          if (cnt <= 1) {
            requestAnimFrame(arguments.callee);
          } else {
            settings.afterDrawed.call($this);
          }
      });
    }
    function Max(arr) {
      return Math.max.apply(null, arr);
    }
    function Min(arr) {
      return Math.min.apply(null, arr);
    }
    function isNumber(n) {
      return !isNaN(parseFloat(n)) && isFinite(n);
    }
    function CapValue(valueToCap, maxValue, minValue) {
      if (isNumber(maxValue) && valueToCap > maxValue) return maxValue;
      if (isNumber(minValue) && valueToCap < minValue) return minValue;
      return valueToCap;
    }
    return $this;
  };
})(jQuery);
            
            
document.querySelector('#recuEnd').onclick = function(){
	swal({
		title: "抽選を始めますか",
		text: "抽選が終わったら募集は終了になります",
		type: "warning",
		showCancelButton: true,
		confirmButtonColor: '#31B404',
		confirmButtonText: '抽選始め',
		cancelButtonText: "キャンセル",
		closeOnConfirm: false
	},
	function(){
	  var kinderNum = {{$kinderNum}};
    // alert(kinderNum);
    var classAge = {{$classAge}};
    
    $.ajax({
                url:"{{route('permit.update')}}",
                  data:{
                    classAge:classAge,
                    kinderNum:kinderNum
                  },
                  dataType:'jsonp',
                  
                  success:function(data){
                  	swal("園児抽選完了!", "園児募集終了", "success");
                  		                    setTimeout(function(){
                                        location.replace("{{route('matchingResult.show',['kinderNum'=>$kinderNum])}}");
                                      },1500);          
                  
                  },error:function(){
                    // alert('실패');
                    	swal("すでに園児抽選になりました!", "結果を画面に移動します", "success");
                  		                    setTimeout(function(){
                                        location.replace("{{route('matchingResult.show',['kinderNum'=>$kinderNum])}}");
                                      },1500);
                  }
                });
              
	
	});
};



      </script>

    </body>
    </html>


