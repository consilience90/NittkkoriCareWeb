@extends('master.iCheck') @section('main_content')

<!-- PAGE TITLE SECTION-->
<section class="pageTitleSection">
  <div class="container">
    <div class="pageTitleInfo">
      <h2>{{$classInfo->cName}} - iCheck - {{ $childInfo->cName }}</h2>
      <ol class="breadcrumb">
        <li>T-Supporter</li>
        <a href="{{route('icheck.index')}}" ><li class="active">{{$classInfo->cName}}</li></a>
        <li class="active">{{ $childInfo->cName }}</li>
      </ol>
    </div>
  </div>
</section>
  
</div>



<section class="mainContent full-width clearfix" style="padding-top:10px; padding-bottom:10px;">
  <div class="container">
    <div class="row">
      <div class="col-xs-8 col-sm-push-4 form-group form-inline">
        <div style="float:left; border-style:outset; padding:2px 10px 2px 10px; margin-top:2px; color:#FA5858">
        <a class="gooey-menu-item" data-toggle="modal" data-target="#memo" style="cursor:pointer; font-size:large;"><b>モバイルメモ</b></a></div>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <b>日付選択:</b> <input type="text" id="daySch" name='clickSch' class="form-control" size="15" />
      </div>
      <h2 id="dayChange" style="margin-top:10px;"></h2>

      <div id="checkScore" class="col-xs-8 pull-right">
          <div id="assessChecks">
          
          </div>
          <div id = "basicChecks">
          <div class="form-horizontal" style="width:700px; margin-left:0px; padding-top:2px; padding-bottom:2px;">
            <div id ="feel" class="col-xs-6">
              <h2>気分</h2>
              <label for="check-one">
                  <input type="checkbox" name="feel" id="check-3" value="3"/>
                  <i></i> <span>良い</span> </label>
              <label for="check-two">
                  <input type="checkbox" name="feel" id="check-2" value="2"/>
                  <i></i> <span>普通</span> </label>
              <label for="check-three">
                  <input type="checkbox" name="feel" id="check-1" value="1"/>
                  <i></i> <span>悪い</span> </label>
            </div>
            
            <div id = "health" class="col-xs-6">
              <h2>健康</h2>
              <label for="check-one">
                  <input type="checkbox" name="health" id="check-3" value="3"/>
                  <i></i> <span>良い</span> </label>
              <label for="check-two">
                  <input type="checkbox" name="health" id="check-2" value="2"/>
                  <i></i> <span>普通</span> </label>
              <label for="check-three">
                  <input type="checkbox" name="health" id="check-1" value="1"/>
                  <i></i> <span>悪い</span> </label>
            </div>
          </div>
          
          <div class="form-horizontal" style="width:700px; margin-left:0px; padding-top:2px; padding-bottom:2px;">
            <div id="temperature" class="col-xs-6">
              <h2>体温チェック</h2>
              
              <label for="check-one">
                  <input type="checkbox" name="temperature" id="check-2" value="2"/>
                  <i></i> <span>微熱</span> </label>
              <label for="check-two">
                  <input type="checkbox" name="temperature" id="check-3" value="3"/>
                  <i></i> <span>正常</span> </label>
              <label for="check-three">
                  <input type="checkbox" name="temperature" id="check-4" value="4"/>
                  <i></i> <span>高熱</span> </label>
            </div>
            <div id ="meal" class="col-xs-6" style=" padding-right:0px;">
              <h2>食事</h2>
              <label for="check-one">
                  <input type="checkbox" name="meal" id="check-2" value="2"/>
                  <i></i> <span>少なく</span> </label>
              <label for="check-two">
                  <input type="checkbox" name="meal" id="check-3" value="3"/>
                  <i></i> <span>定量</span> </label>
              <label for="check-three">
                  <input type="checkbox" name="meal" id="check-4" value="4"/>
                  <i></i> <span>多い</span> </label>
  
            </div>
          </div>
        </div>


          <div class="input-group input-group-lg">
            <span class="input-group-addon bg-color-4" style="height:10px;">タイトル:</span>
            <input id='title' type="text" name="title" class="form-control" placeholder="タイトルを入力してください" value="めいが風邪気味です。">
          </div>
          <br>
          <textarea class="content3" name="description" id="diary_content" placeholder="本文" class="span12" rows="15">昼ごはんを食べる時めいが力がなさそうなので、体温を計ったら、熱がありました。それで、薬を飲ませました。</textarea>

          <br>
          <div class="btn-group" style="float:left;">
            <input type="file" name="k_image" id="image" />
          </div>
          <div class="btn-group" style="float:left;">
            <input id = 'upload_button' class="btn btn-success" value="登録する" style="height:35px; padding-top:0px; padding-bottom:0px;">
          </div>
      </div>

      <div class="col-xs-4 pull-left" style="padding-top:10px;">
        <div class="panel-heading bg-color-3 border-color-3">
          <h3 style="font-size:x-large; color:white;" class="panel-title">アップロードする写真</h3>
        </div>
        <div class="thumbnail image_preview" style="max-width: 100%; height: auto;">
          <img class="img-responsive img-rounded" width="100%;">
          <div class="caption">
            <p><a href="#" class="btn btn-primary" role="button">削除</a></p>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</section>

<div class="row">
  

  
    <div class="col-sm-12 col-xs-12" style="margin-left:20px;">
    <nav id="child-list">
      <input type="checkbox" class="menu-open" name="menu-open3" id="menu-open3" />
      <label class="open-button" for="menu-open3">
<h4 style="padding-top:38px; color:white;">園児リスト</h4>
</label>

      @foreach($childrensInfo as $childrenInfo)
       <a class="gooey-menu-item" href="{{ route('icheck.createDiary',['cId'=>$childrenInfo->cId]) }}" style="cursor:pointer; font-size:large;">
         <img src="{{ asset('img/child/'.$childrenInfo->imgName)}}" alt="img" class="img-circle img-responsive" style="width:100%; height:100px; float:left">
         <p class="Childname" style="display:none;"><b>{{ $childrenInfo->cName }}</b></p>
       </a>
      @endforeach
    </nav>
  </div>
  
  
</div>






	

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



<div class="modal fade customModal" id="memo" tabindex="-1" role="dialog">
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

    <div id="memoModal" class="modal-content" style="width:100%; height:100%;">
      <div class="panel panel-default formPanel">
        <div class="panel-heading bg-color-1 border-color-1">
          <h3 class="panel-title">園児の名前 「メモ」</h3>
        </div>
        
        <div class="panel-body">
          <div class="row">
            <div class="col-sm-6">

                  <div class="windy-demo windy-demo-2">
            					<ul id="wi-el" class="wi-container imgMemos" style="width:300px;">
            					  @foreach($imgMemos as $imgMemo)
            						  <li><img src="{!! asset('./img/memo/'.$folderName.'/'.$imgMemo->comment) !!}" alt="image1" style="width:300px; height:320px;"/><h4>イメジ 1</h4></li>
            	          @endforeach
            					</ul>
            					<nav style="margin-left:93px;">
            						<span id="nav-prev">prev</span>
            						<span id="nav-next">next</span>
            					</nav>
            			</div>
            				
              </div>

              @foreach($textMemos as $textMemo)
              <div id="comment" class="col-sm-6 comment" style="border-style:outset; margin-top:10px; width:400px; cursor:pointer; padding-left:40px;">
              
                <h1>{{$textMemo->comment}}</h1>
            
              </div>
            
              @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


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
<script src="https://cdn.ckeditor.com/4.7.0/standard/ckeditor.js"></script>
<script src="{{ asset('js/gooey.min.js') }}"></script>
<script src="{{ asset('js/moment.js')}}"></script>
<script src="{{ asset('js/bootstrap-datetimepicker.min.js')}}"></script>
<script src="{{ asset('js/modernizr.custom.79639.js')}}"></script>
<script src="{{ asset('js/jquery.windy.js')}}"></script>
<script src="{{ asset('js/socket.io.js')}}"></script>
<!--<script src="{{ asset('js/mobilePush.js')}}"></script>-->
<script src="{{ asset('js/pushMessage.js')}}"></script>
<script src="{{ asset('sweetalert-master/dist/sweetalert.min.js')}}"></script>
<link rel="stylesheet" type="text/css" href="{{asset('sweetalert-master/dist/sweetalert.css')}}">
    
<script type="text/javascript">



$(document).ready(function(){
    $("#leftmenuArea").hide();
    $("#button2").hide();
    
    $("#button1").click(function(){
      $('#leftmenuArea').animate({width:'toggle'});
      $("#button1").hide();
      $("#button2").show();
    })
    
      $("#button2").click(function(){
      $('#leftmenuArea').animate({width:'toggle'});
      $("#button2").hide();
      $("#button1").show();
    })  


})

  CKEDITOR.replace('description', {
    filebrowserUploadUrl: '/index.php/topic/upload_receive_from_ck'
  });
  
    $('#menu-open3').on('change', function() {
        $('.Childname').toggle();
    });
  
  

  $('#image').on('change', function() {

    ext = $(this).val().split('.').pop().toLowerCase(); //확장자

    //배열에 추출한 확장자가 존재하는지 체크
    if ($.inArray(ext, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
      resetFormElement($(this)); //폼 초기화
      window.alert('イメジファイルではありません! (gif, png, jpg, jpeg だけアップロードできる。)');
    } else {
      file = $('#image').prop("files")[0];
      blobURL = window.URL.createObjectURL(file);
      $('.image_preview img').attr('src', blobURL);
      $('.image_preview').show();
      $('.image_preview').slideDown(); //업로드한 이미지 미리보기
      $(this).slideUp(); //파일 양식 감춤
    }
  });

  $('.image_preview a').bind('click', function() {
    resetFormElement($('#image')); //전달한 양식 초기화
    $('#image').slideDown(); //파일 양식 보여줌
    $('.thumbnail').slideUp(); //미리 보기 영역 감춤
    return false; //기본 이벤트 막음
  });



  function resetFormElement(e) {
    e.wrap('<form>').closest('form').get(0).reset();
    //리셋하려는 폼양식 요소를 폼(<form>) 으로 감싸고 (wrap()) ,
    //요소를 감싸고 있는 가장 가까운 폼( closest('form')) 에서 Dom요소를 반환받고 ( get(0) ),
    //DOM에서 제공하는 초기화 메서드 reset()을 호출
    e.unwrap(); //감싼 <form> 태그를 제거
  }


 $("#child-list").gooeymenu({
    bgColor: "#FA5858",
    contentColor: "white",
    style: "horizontal",
    horizontal: {
      menuItemPosition: "spaced",
    },
    vertical: {
      menuItemPosition: "spaced",
      direction: "up"
    },
    circle: {
      radius: 80
    },
    margin: "small",
    size: 100,
    bounce: true,
    bounceLength: "small",
    transitionStep: 100,
    hover: "#5dbb89"
  });
  

$(function(){
  $('.comment').click(function(){
    var memo = $(this).text();
    $('#memo').modal('toggle'); // 모달 바로 토글
    CKEDITOR.instances['diary_content'].insertText(memo); // ckeditor 바꾸는 내용 안에 동적 바꾸기
  });
});
  

  

  // 날짜 선택 --------------------------------------------
  $(function() {
    $("#daySch").datepicker();
  });

// ajax 동기화
  $(function() {
      startNum = 0;
      var todays = now();
      
      function now() {
	       var date = new Date();
	       var m = date.getMonth()+1;
	       var d = date.getDate();
      
        var todays = (m>9?m:'0'+m)+'/'+(d>9?d:'0'+d)+'/'+date.getFullYear();
        $('#daySch').val(todays);
        
        getDateInfo(todays);
      }
      
      
      //img 불러오기
      function getImgInfo(value){
        //이미지 불러오기전 이미지 제거
        resetFormElement($('#image')); //전달한 양식 초기화
        $('#image').slideDown(); //파일 양식 보여줌
        $('.thumbnail').slideUp(); //미리 보기 영역 감춤
        
        var childNum = {{$childInfo->cId}};
        var dateInfo = value.split('/');
        var create_date = dateInfo[2]+"-"+dateInfo[0]+"-"+dateInfo[1];

        $.ajax({
          url:"{{route('icheck.imgload')}}",
          data:{
            childNum:childNum,
            todayTime:create_date
          },
          dataType:"jsonp",
          success:function(data){
            if(data.result == "success"){
              console.log(data.photoInfo);
              var imgName = data.photoInfo.photoName;
              var imgsrc = data.filefolder+imgName;
              
              $('.image_preview img').attr('src', "http://japan-okyo.c9users.io/img/album/childID_{{$childInfo->cId}}/"+data.photoInfo.photoName);
              $('.image_preview').show();
              $('.image_preview').slideDown(); //업로드한 이미지 미리보기
              
              // 메모 보여줌
            }
            else{

              $('.image_preview img').attr('src',"{{ asset('img/child/'.$childInfo->imgName)}}");
              $('.image_preview').show();
              $('.image_preview').slideDown(); //업로드한 이미지 미리보기
            }
          },error:function(){
            swal({
              title:'サーバー接続エラー',
              text:'サーバー接続に問題があります。 しばらく後、再び実行お願いします。',
              type:'error'
            });
          }
        });
      }
      
    function getDateInfo(value){
      getImgInfo(value)
      var week = weekAndDay(value);
      value = value.split('/');
      $('#dayChange').text(value[2] + "年度 " + value[0] + "月 " + value[1] + "日 ");
      var create_date = value[2]+"-"+value[0]+'-'+value[1];
      
      // 해당 일에 해당하는 평가 항목을 들고 온다.
      // 해당 일에 해당하는 평가 항목을 들고 오려면 
      // dayContSums 디비테이블에 접근을 하여야 한다.
      // 해당일에 대한 고유 값을 들고 오고 그 고유값에 해당하는 평가항목들을 들고 와야 하기에
      // 여기에서 ajax 통신을 한다.
      $.ajax({
        url:"{{route('assessments.load')}}",
        data:{
          year:value[2],
          month:value[0],
          week:week[0],
          day:value[1],
          date:week[1],
          childNum:{{ $childInfo->cId }},
          teacherNum:{{ Auth::user()->id }},
          create_date:create_date
        },
        dataType:"jsonp",
        success:function(result){
          console.log(result);
          if(result.result == 'stored'){
            //저장이 되어있다고 한다면 값을 들고와 체크
            // 여기에서 저장이 되어 있다고 한다면 basicCheck 항목과 평가항목 두가지를 의미
            // 여기에서 하나라도 저장이 되어 있으면 stored에 해당 하는 if문으로 
            // 그리고 안에 조건문을 더 만들어서 평가항목이 저장이 되어 있는지
            // basicCheck가 저장이 되어 있는지, 평가와 basic모두 저장이 되어 있는지 처리하기
            $('.assessed').remove();
            //basic checked box false
            $('#basicChecks').find('input:checked').prop('checked',false);


        // if 현재 평가항목의 값이 없으면
          if(result.not_assesseds){
            // 평가항목의 값이 없을떄
            for(var i=0;i<result.not_assesseds.length;i++){
              var tag =  '<div id="assessement'+i+'" class="form-horizontal assessed" style="width:700px; margin-left:0px; padding-top:2px; padding-bottom:2px;"><h2 style="margin-bottom:0px;">'+ result.not_assesseds[i].assContent +'</h2><div id = "assessed'+i+'"><label for="radio-one"><input type="radio" name="assessed'+i+'" id="radio-5" value="5"/><i></i> <span>5</span> </label><label for="radio-two"><input type="radio" name="assessed'+i+'" id = "radio-4" value="4"/><i></i> <span>4</span> </label><label for="radio-three"><input type="radio" name="assessed'+i+'"  id = "radio-3" value="3"/><i></i> <span>3</span></label><label for="radio-four"><input type="radio" name="assessed'+i+'" id = "radio-2" value="2"/><i></i> <span>2</span> </label><label for="radio-five"><input type="radio" name="assessed'+i+'" id="radio-1" value="1"/><i></i> <span>1</span> </label></div></div>';
              $('#assessChecks').append(tag);
            }
          }else{
            var i = 0;
          }

          for(var l=0+i;l<result.assesseds.length+i;l++){
              var tag =  '<div id="assessement'+l+'" class="form-horizontal assessed" style="width:700px; margin-left:0px; padding-top:2px; padding-bottom:2px;"><h2 style="margin-bottom:0px;">'+ result.assesseds[l-i].assContent +'</h2><div id = "assessed'+l+'"><label for="radio-one"><input type="radio" name="assessed'+l+'" id="radio-5" value="5"/><i></i> <span>5</span> </label><label for="radio-two"><input type="radio" name="assessed'+l+'" id = "radio-4" value="4"/><i></i> <span>4</span> </label><label for="radio-three"><input type="radio" name="assessed'+l+'"  id = "radio-3" value="3"/><i></i> <span>3</span></label><label for="radio-four"><input type="radio" name="assessed'+l+'" id = "radio-2" value="2"/><i></i> <span>2</span> </label><label for="radio-five"><input type="radio" name="assessed'+l+'" id="radio-1" value="1"/><i></i> <span>1</span> </label></div></div>';
              var score = result.assesseds[l-i].score;
              $('#assessChecks').append(tag);
              $("#assessed"+l).find('#radio-'+score).prop("checked",true);
              
            }
            
            
            $('#health').find('#check-'+result.basicCheck.health).prop('checked',true);
            $('#feel').find('#check-'+result.basicCheck.feels).prop('checked',true);

            $('#meal').find('#check-'+result.basicCheck.meals).prop('checked',true);
            $('#temperature').find('#check-'+result.basicCheck.temperature).prop('checked',true);

          }else{
            // 저장이 되어 있지 않으면 그냥 출력
              $('.assessed').remove();// 이전의 내용 삭제
              //basic checked box false
              $('#basicChecks').find('input:checked').prop('checked',false);
              
              // 평가항목의 총 갯수
              for(var i=0;i<result.assesseds.length;i++){
                // 추가 되는 평가항목의 항목은
                // 여기에서 추가가 되는 평가항목들은오름차순형식으로 
                var tag =  '<div id="assessement'+i+'" class="form-horizontal assessed" style="width:700px; margin-left:0px; padding-top:2px; padding-bottom:2px;"><h2 style="margin-bottom:0px;">'+result.assesseds[i].assContent +'</h2><label for="radio-one"><input type="radio" name="assessed'+i+'" id="radio-one" value="5"/><i></i> <span>5</span> </label><label for="radio-two"><input type="radio" name="assessed'+i+'" id="radio-two" value="4"/><i></i> <span>4</span> </label><label for="radio-three"><input type="radio" name="assessed'+i+'" id="radio-three" value="3"/><i></i> <span>3</span> </label><label for="radio-four"><input type="radio" name="assessed'+i+'" id="radio-four" value="2"/><i></i> <span>2</span> </label><label for="radio-five"><input type="radio" name="assessed'+i+'" id="radio-five" value="1"/><i></i> <span>1</span> </label></div>';
                $('#assessChecks').append(tag);
              }
          }
          
        },error:function(){
          swal({
              title:'サーバー接続エラー',
              text:'サーバー接続に問題があります。 しばらく後、再び実行お願いします。',
              type:'error'
            });
        }
      });
    }
    
    $("#daySch").change(function() {
      var value = document.getElementById('daySch').value;
      getDateInfo(value);
    });
    
    // icheck저장
    $('#upload_button').click(function(){
      
      var imgSrcInfo = $('.image_preview img').attr('src').split("/"); // img src 정보
      var imgSrcLength=imgSrcInfo.length; // img src배열의 총길이
      
      
      var diary_content = CKEDITOR.instances['diary_content'].getData() //
      console.log(diary_content);
      var diary_title = document.getElementById('title').value;
      var kindergardenName = "{{ $kindergardenInfo->kName }}"; // 유치원이름
      var className = "{{$classInfo->cName}}"; // 소속반이름
      var childName = "{{ $childInfo->cName }}"; // 해당 원아 이름
      var teacherName = "{{ Auth::user()->name }}"; // 선생이름
      
      var value = document.getElementById('daySch').value;
      value = value.split('/');
      
      var create_date = value[2]+"-"+value[0]+'-'+value[1];
      
      // basic check's info
      var basic_info = {
                        'feel':$('#feel').find('input[name="feel"]:checked').val(),
                        'healthy':$('#health').find('input[name="health"]:checked').val(),
                        'temperature':$('#temperature').find('input[name="temperature"]:checked').val(),
                        'meal':$('#meal').find('input[name="meal"]:checked').val()
                      };
      
      // assessments's info
      var assessCount = document.getElementById('assessChecks').childElementCount;
      var assessedScore = new Array();
      for(var i=0;i < assessCount;i++){
        assessedScore[i] = []; 
        assessedScore[i][0] = $('#assessement'+i).find('h2').text();
        assessedScore[i][1] = $('#assessement'+i).find('input[name="assessed'+i+'"]:checked').val();
      }
      
      $.ajaxSetup({ headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')} });
  
      $.ajax({
          url:"{{ route('icheck.store') }}",
          type:'POST',
          dataType:'jsonp',
          data:{
            title:diary_title,
            text:diary_content,
            memoType:1, // 글(1)로 된것인지, 그림(2)으로 된것인지
            childNum:{{ $childInfo->cId }},// 원아 넘버
            teacherNum:{{ Auth::user()->id }}, // 교사 넘버
            create_date:create_date,
            memoCategory:1, // 알림장(1)인지, 단순메모인지, 댓글인지, 메모의 그림()인가
            pageInfo:'iCheck_write',
            basicCheck:basic_info,
            assesseds:assessedScore, // 평가항목 명과, 평가점수가 들어있는 이차원 배열
            assessCount:assessCount,
            imgName:imgSrcInfo[imgSrcLength-1] // 서버에서 가져온 이미지 이름
          },
          success:function(data){
            swal({
              title:'作成完了',
              text:'発達日誌の作成を完了しました。',
              type:'success'
            });
            // 주완 푸시 알람 추가
            //var diary_title = document.getElementById('title').value;
            var push_title = kindergardenName + " " + className+"組" ;
            var push_contents = childName + "の発育日誌が来ました。\n"+ teacherName + "先生 : " + diary_title;
            // 원아아이디 => {{ $childInfo->cId }}, 원아이름=>childName(위에서 정의함), 원아사진주소, [알림장 작성 날짜 => create_date(위에 정의함)]
           
            var childImg = data.childInfo.imgName; // 원아사진 주소
            
            //push_title, push_message, push_id, push_name, push_photo, push_date
            connect(push_title, push_contents,{{ $childInfo->cId }},childName,childImg,create_date,diary_content, diary_title);
            console.log("타이틀"+diary_title);
            //////////주완 푸시 알람 끝/////////////
            
            // redirect 하기
            setTimeout(function(){
              location.href ="{{ route('icheck.show',['icheck'=>$childInfo->cId]) }}";
            },3000);
          },error:function(){
            swal({
              title:'全部作成しませんでした。',
              text:'もう一度確認してください。',
              type:'error'
            });
            // 실패 하였을 경우 지금 작성하고 있는 것 그대로
          }
      });
  });

    //주차와 요일 구하는 함수
    function weekAndDay(value) {
      var date = new Date(value);
      var click_date = value.split("/");
      var month_fdate = new Date(click_date[0]+"/01/"+click_date[2]); // click month's first date
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
  });
    
    
  $(function() {

				var $el = $( '#wi-el' ),
					windy = $el.windy( {
						// rotation and translation boundaries for the items transitions
						boundaries : {
							rotateX : { min : 40 , max : 90 },
							rotateY : { min : -15 , max : 45 },
							rotateZ : { min : -10 , max : 10 },
							translateX : { min : -400 , max : 400 },
							translateY : { min : -400 , max : 400 },
							translateZ : { min : 350 , max : 550 }
						}
					} ),
					allownavnext = false,
					allownavprev = false;

				$( '#nav-prev' ).on( 'mousedown', function( event ) {

					allownavprev = true;
					navprev();
				
				} ).on( 'mouseup mouseleave', function( event ) {

					allownavprev = false;
				
				} );

				$( '#nav-next' ).on( 'mousedown', function( event ) {

					allownavnext = true;
					navnext();
				
				} ).on( 'mouseup mouseleave', function( event ) {

					allownavnext = false;
				
				} );

				function navnext() {
					if( allownavnext ) {
						windy.next();
						setTimeout( function() {	
							navnext();
						}, 150 );
					}
				}

				function navprev() {
					if( allownavprev ) {
						windy.prev();
						setTimeout( function() {	
							navprev();
						}, 150 );
					}
				}

			});
			

	
</script>
</body>

</html>
@stop