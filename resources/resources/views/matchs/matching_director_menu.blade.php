@extends('master.matching') @section('main_content')

<!-- WHITE SECTION -->
<section class="whiteSection full-width clearfix p-t-n" style="margin-top:50px;">
  <div class="container">
    <div class="sectionTitle text-center">
      <h2>
           <span class="shape shape-left bg-color-4"></span>
           <span>幼稚園の募集管理メニュー</span>
           <span class="shape shape-right bg-color-4"></span>
         </h2>
    </div>

    <div class="row">

      <div class="col-lg-12 col-xs-12">
        <div class="pricingTable tableVertical">
          <div class="priceUper" style="width:280px; height:150px;">
            <div class="priceTitle bg-color-1">
              <h3 style="font-size:x-large;">園児募集期間設定</h3></div>
            <div class="priceInfo bg-color-1" style="height:140px;">
              <p>募集期間に幼稚園が公開されます</p>
              <div class="priceBtn alt">
                <div class="col-xs-7 form-group form-inline ">
                  <label>日付選択:&nbsp; </label>
                  <input type="text" id="daySch" class="form-control" size="12" />
                </div>


              </div>
            </div>
          </div>

          <div class="priceLower">

            <h3 style="margin-top:10px;">抽選方式設定</h3>
            <div class="radio">

              <label>
   <input type="radio" name="select_way" id="select_way" value="random" checked>
 <h4 style="margin-bottom:0px;">無作為選抜する</h4>
 </label>
            </div>
            <div class="radio">
              <label>
   <input type="radio" name="select_way" id="select_way" value="firstCome">
 <h4 style="margin-bottom:0px;">先着順で選抜する</h4>
 </label>
            </div>
            <hr>
            <ul class="list-unstyled priceOffer">
              <li>
                <i id="now" class="fa fa-calendar-o" aria-hidden="true"></i>
                <i id="until" aria-hidden="true">
                  @if($endTime)
                  <font style='color:#1C1C1C'> {{$endTime[0]}}年 {{$endTime[1]}}月 {{$endTime[2]}}日</font>
                  @endif
                </i>
              </li>

            </ul>
          </div>
        </div>
      </div>
      
            <div class="col-lg-12 col-xs-12">
        <div class="pricingTable tableVertical">
          <div class="priceUper" style="width:280px; ">
            <div class="priceTitle bg-color-3">
              <h3 style="font-size:x-large;">細部設定</h3></div>
            <div class="priceInfo bg-color-3" style="height:145px;">
              <p>クラスの最大人員設定/男女比率</p>

            </div>
          </div>
          <div class="priceLower" style="height:215px;">
            <ul class="list-unstyled priceOffer">
     
               
                <a href="" data-toggle="modal" data-target="#class" id="teamLink">
                  <li>
                    <i class="fa fa-arrow-right color-3" aria-hidden="true"></i>
                    <b>ひまわりクラス(4歳)</b><br>
                    @if(gettype($numberOfBoy) != 'integer')
                    現在人数:{{ $numberOfClass->childTotal }}人(男:{{$numberOfBoy->boyTotal}}人 &nbsp; 女:{{$numberOfGirl->girlTotal}}人)
                     <br>最大人数:{{$recruitOfClass->boy+$recruitOfClass->girl}}人 &nbsp;&nbsp;|&nbsp;&nbsp; 男女比率({{$recruitOfClass->boy}}
                   :{{$recruitOfClass->girl}})
                   @else
                   現在人数:{{ $numberOfClass->childTotal }}人(男:{{$numberOfBoy}}명 &nbsp; 女:{{$numberOfGirl->girlTotal}}人)
                    &nbsp;&nbsp;|&nbsp;&nbsp; 最大人数:{{$recruitOfClass->boy+$recruitOfClass->girl}}人&nbsp;&nbsp;|&nbsp;&nbsp; 男女比率({{$recruitOfClass->boy}}
                   :{{$recruitOfClass->girl}})
                   @endif
                   </li>
                </a>
                
                                <a href="" data-toggle="modal" data-target="#class" id="teamLink">
                  <li>
                    <i class="fa fa-arrow-right color-3" aria-hidden="true"></i>
                    <b>光クラス(3歳)</b><br>
                    現在人数: 16人(男:8人 &nbsp; 女:8人)
                     <br>最大人数: 16人 &nbsp;&nbsp;|&nbsp;&nbsp; 男女比率(5:5)
                   </li>
                </a>
   
            </ul>
            
          </div>
          
                
          
        </div>
      </div>
      
      


      <div class="col-lg-12 col-xs-12">
        <div class="pricingTable tableVertical">
          <div class="priceUper" style="width:280px; height:150px;">
            <div class="priceTitle bg-color-4">
              <h3 style="font-size:x-large;">募集申請管理</h3></div>
            <div class="priceInfo bg-color-4"style="height:144px;">
              <p>今までの募集の申請を確認及び受諾することができます</p>
              <div class="priceBtn alt">
                <a href="{{ route('joinList.show',['classAge'=>4]) }}" class="btn btn-primary">確認</a>
                <h4> <br><small></small></h4>
              </div>
            </div>
          </div>
          <div class="priceLower">
            <ul class="list-unstyled priceOffer">
              <li><i class="fa fa-users color-4" aria-hidden="true"></i>募集申請数： {{$recuAge4}}人</li>
              <li><i class="fa fa-child color-4" aria-hidden="true"></i>3歳: 0人</li>
              <li><i class="fa fa-child color-4" aria-hidden="true"></i>4歳: {{$recuAge4}}人</li>
              <li><i class="fa fa-child color-4" aria-hidden="true"></i>5歳: 0人</li>
            </ul>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

  <div class="modal fade customModal" id="class" tabindex="-1" role="dialog">
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

      <div class="modal-content" style="height:250px;">
        
        <div class="panel panel-default formPanel">
          <div class="panel-heading bg-color-3 border-color-3">
            <h3 class="panel-title">ひまわりクラス(4歳)</h3>
          </div>
          <div class="panel-body" style="padding-bottom:0px; width:540px; height:310px;">
                <div class="banner-bottom-inner" style="padding-top: 100px;">
                  <div class="row">
                    
                    <div class="col-sm-12">
                          <h3  style="color:#585858;">最大人数設定</h3>
                                          <form class="form-inline">

  <div class="form-group">
    <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
    <div class="input-group">
      <input type="number" class="form-control" id="totalNum" min="10" placeholder="人数" style="
    padding-right: 0px;
    padding-left: 0px;
    width: 102px;
">
      <div class="input-group-addon">人</div>
    </div>
  </div>
  <div id="ratio">
  <hr>
  <h3  style="color:#585858;">男女比率設定</h3>
    <div class="form-group" >
    <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
    <div class="input-group">
      <div class="input-group-addon" style="background-color:#A9BCF5;"><b>男</b></div>
      
      <input type="number" class="form-control" min="1" max="10" id="boyNums" style="
    padding-right: 0px;
    padding-left: 0px;
    width: 50px;
">
    </div>
  </div>
  
      <div class="form-group" style="margin-left:20px;">
    <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
    <div class="input-group">
      <div class="input-group-addon" style="background-color:#F6CEF5;" >女</div>
      
      <input type="number" class="form-control" min="1" max="10" id="girlNums"  style="
    padding-right: 0px;
    padding-left: 0px;
    width: 50px;
">

    </div>
  </div>
    
   <hr>
  <button id="setbtn" class="btn btn-primary" style="margin-left:380px;">修正</button>
  </div>
  
  

</form>
                 
        

                  </div>
                </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script>

    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth()+1; //January is 0!
    var yyyy = today.getFullYear();
    
    if(dd<10) {
        dd='0'+dd
    } 
    
    if(mm<10) {
        mm='0'+mm
    } 
    
    today = "<font style='color:#1C1C1C'> "+ yyyy+"年 "+ mm+'月 '+dd+"日 ~</font>";
    // $('#now').text(today);
    console.log(today);
    document.getElementById('now').innerHTML= today;

        $('#setbtn').click(function () {
          
             var today = new Date();
             var dd = today.getDate();
             var mm = today.getMonth()+1; //January is 0!
             var yyyy = today.getFullYear();
              
             if(dd<10) {
                dd='0'+dd
              } 
              
             if(mm<10) {
                mm='0'+mm
              } 
              
              var recruitWay = $('input[name="select_way"]:checked').val(); // 추첨방식
              var classAge = {{ $numberOfClass->classAge }}; // 반 나이
              var boy = $('#boyNums').val();   // 남자아이 수
              var girl = $('#girlNums').val(); // 여자아이 수
              
              var click_time = document.getElementById('daySch').value;
              
              if(click_time && boy && girl){
                click_time = click_time.split("/");
              
                var startTime = yyyy+"-"+mm+"-"+dd+" 00:00:00"; // 모집 시작 시간
                var endTime = click_time[2]+"-"+click_time[0]+"-"+click_time[1]+" 23:59:59"; // 모집 끝나는 시간
  
                $.ajax({
                        url:"{{ route('kinderRecruit.make') }}",
                        dataType:'jsonp',
                        data:{
                          kinderNum:{{$numberOfClass->kinderNum}},
                          startTime:startTime,
                          endTime:endTime,
                          recruitWay:recruitWay,
                          boyTotal:boy,
                          girlTotal:girl,
                          classAge:classAge
                        },success:function(data){
                          swal({
                            title:'등록 완료',
                            text:"해당 반의 모집공고를 등록 완료하였습니다.",
                            type:'success'
                          });
                          // 새로고침
                          setTimeout(
                            function(){
                            location.reload() 
                            }, 3000);
                        },error:function(){
                          swal({
                            title:"서버접속오류",
                            type:'error',
                          });
                        }
                        
                    });
              
              }else{
                swal({
                  title:"값을 입력해주세요",
                  type:'error',
                });
              }
              
            });
            
     $(document).on("change", "#totalNum", function () {
        var value = document.getElementById('totalNum').value;
          $('#boyNums').val(value/2);
          $('#girlNums').val(value/2); 
});

     $(document).on("change", "#boyNums", function () {
            var value = document.getElementById('totalNum').value;
            var boy =  document.getElementById('boyNums').value;
            $('#girlNums').val(value-boy); 
});



      
  </script>
@stop