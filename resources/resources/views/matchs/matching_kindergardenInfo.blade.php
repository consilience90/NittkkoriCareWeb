 @extends('master.matching')

 @section('main_content')
 
  <!-- MAIN SECTION -->
    <section class="mainContent full-width clearfix courseSingleSection">
      <div class="container">
        <div class="row">
          <div class="col-md-9 col-sm-8 col-xs-12 block pull-right">
            <div class="thumbnail thumbnailContent alt">
              <img src="../img/kindergardens/yo{{$kinderInfo->kId}}.jpg" style="height:500px;" alt="image" class="img-responsive">
              <div class="sticker bg-color-1">{{ $kinderInfo->address }}</div>
              <div class="caption border-color-1">
                <h3 class="color-1">{{$kinderInfo->kName}} 소개</h3>
                <p>영진전문대학 부설유치원은 본 대학의 건학이념에 따라 우리나라의 미래를 주도할 주인공을 길러내고 유아교육을 담당할 전문인을 양성하고자 1989년 설립되었습니다.
                전국 최우수 전문대학의 명예와 자부심을 가지고 질 높은 유아교육을 실현하고자 노력하는 영진유치원은 오늘도 끊임없는 연구와 개발을 계속하고 있습니다.</p>
                
               <p>영진유치원은 다음과 같은 교육에 역점을 두고 있습니다.</p>
               <p>
               <b>첫째,</b>본 대학 유아교육과 교수진들의 영역별 교육과정, 교육방법, 교육환경 연구와 연계된 교육프로그램을 통하여 유아들의 발달적 특성과 흥미를 최대한 존중하는 통합교육을 실시하고 있습니다.</p>
               <p>
               <b>둘째,</b>본 대학 부설 아동창의성계발연구소에서 각 영역 전문가들이 연구ㆍ개발한 창의성 교육 프로그램을 적용함으로써 유아들의 무한한 잠재력과 창의성을 최대한 계발할 수 있도록 돕고 있습니다.</p>
               <p>
               <b>셋째,</b>대학의 부설기관으로서, 본 대학 유아교육과 재학생에게는 실습 및 참관의 기회를 제공하고 유아교육 관련 종사자들에게는 교육환경 및 교육과정을 공개함으로써 유아교육 전문인을 양성하는데 기여하고 있습니다.</p>
<hr>
                <h3 class="color-1">예시) 만 3세반 시간표</h3>
                <div class="table-responsive">
                  <table class="table table-curved">
                    <thead>
                      <tr>
                        <th class="col-sm-2 bg-color-1">시간 <i class="fa fa-arrow-down" aria-hidden="true"></i></th>
                        <th class="col-sm-2 bg-color-2">월요일</th>
                        <th class="col-sm-2 bg-color-3">화요일</th>
                        <th class="col-sm-2 bg-color-4">수요일</th>
                        <th class="col-sm-2 bg-color-5">목요일</th>
                        <th class="col-sm-2 bg-color-6">금요일</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>9.00 - 10.00 AM</td>
                        <td>
                          <span class="color-2">국어</span>
                          글자 놀이
                        </td>
                        <td>
                          <span class="color-3">수학</span>
                          숫자 맞추기
                        </td>
                        <td>
                          <span class="color-4">촉감놀이</span>
                          흙 만지기
                        </td>
                        <td>
                          <span class="color-5">영어</span>
                          원어민 선생님과 수업
                        </td>
                        <td>
                          <span class="color-6">미술</span>
                          친구 그리기
                        </td>
                      </tr>
                      <tr>
                        <td>10.00 - 11.00 AM</td>
                                          <td>
                          <span class="color-2">국어</span>
                          글자 놀이
                        </td>
                        <td>
                          <span class="color-3">수학</span>
                          숫자 맞추기
                        </td>
                        <td>
                          <span class="color-4">촉감놀이</span>
                          흙 만지기
                        </td>
                        <td>
                          <span class="color-5">영어</span>
                          원어민 선생님과 수업
                        </td>
                        <td>
                          <span class="color-6">미술</span>
                          친구
                      </tr>
                      <tr>
                        <td>11.00 - 11.30 AM</td>
                                              <td>
                          <span class="color-2">국어</span>
                          글자 놀이
                        </td>
                        <td>
                          <span class="color-3">수학</span>
                          숫자 맞추기
                        </td>
                        <td>
                          <span class="color-4">촉감놀이</span>
                          흙 만지기
                        </td>
                        <td>
                          <span class="color-5">영어</span>
                          원어민 선생님과 수업
                        </td>
                        <td>
                          <span class="color-6">미술</span>
                          친구
                      </tr>
                      <tr>
                        <td>11.30 - 12.30 PM</td>
                                              <td>
                          <span class="color-2">국어</span>
                          글자 놀이
                        </td>
                        <td>
                          <span class="color-3">수학</span>
                          숫자 맞추기
                        </td>
                        <td>
                          <span class="color-4">촉감놀이</span>
                          흙 만지기
                        </td>
                        <td>
                          <span class="color-5">영어</span>
                          원어민 선생님과 수업
                        </td>
                        <td>
                          <span class="color-6">미술</span>
                          친구
                      </tr>
                      <tr>
                        <td>12.30 - 1.30 PM</td>
                                              <td>
                          <span class="color-2">국어</span>
                          글자 놀이
                        </td>
                        <td>
                          <span class="color-3">수학</span>
                          숫자 맞추기
                        </td>
                        <td>
                          <span class="color-4">촉감놀이</span>
                          흙 만지기
                        </td>
                        <td>
                          <span class="color-5">영어</span>
                          원어민 선생님과 수업
                        </td>
                        <td>
                          <span class="color-6">미술</span>
                          친구
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            
            <!--<div class="btnArea">-->
            <!--  <a class="btn btn-primary">입학 신청하기</a>-->
            <!--</div>-->
          </div>
          
          <div class="col-md-3 col-sm-4 col-xs-12 pull-left">
            <aside>
              <div class="rightSidebar">
                <div class="panel panel-default">
                  <div class="panel-heading bg-color-1 border-color-1">
                    <h3 class="panel-title">커리큘럼 정보</h3>
                  </div>
                  <div class="panel-body">
                    <ul class="media-list">
                      <li class="media">
                        <div class="media-left iconContent bg-color-2">
                          <i class="fa fa-calendar" aria-hidden="true"></i>
                        </div>
                        <div class="media-body iconContent">
                          <h4 class="media-heading color-2">모집기간</h4>
                          <p id="recuPeriod"></p>
                        </div>
                      </li>
                      <li class="media">
                        <div class="media-left iconContent bg-color-3">
                          <i class="fa fa-child" aria-hidden="true"></i>
                        </div>
                        <div class="media-body iconContent">
                          <h4 class="media-heading color-3">입학 경쟁률</h4>
                          <p id="boyRate"><br></p>
                          <p id="girlRate"></p>
                        </div>
                      </li>
                      <li class="media iconContet">
                        <div class="media-left iconContent bg-color-4">
                          <i class="fa fa-users" aria-hidden="true"></i>
                        </div>
                        <div class="media-body iconContent">
                          <h4 class="media-heading color-4">반 최대인원</h4>
                          <p id="maxChild"></p>
                        </div>
                      </li>
                      <li class="media">
                        <div class="media-left iconContent bg-color-5">
                          <i class="fa fa-venus-mars" aria-hidden="true"></i>
                        </div>
                        <div class="media-body iconContent">
                          <h4 class="media-heading color-5">남녀 구성</h4>
                          <p id="genderCount">男:5 | 女:6</p>
                        </div>
                      </li>

                      
                    </ul>
                  </div>
                </div>
                
      
                
                <div class="panel panel-default">
                  <div class="panel-heading bg-color-5 border-color-5">
                    <h3 class="panel-title">행사 사진</h3>
                  </div>
                  <div class="panel-body">
                    <ul class="media-list blogListing">
                      <li class="media">
                        <div class="media-left">
                      <img src="{{ asset('img/director-main02.jpg') }}" style="width:80px;" alt="image" class="img-rounded">
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading"><a href="#">작품 전시회</a></h4>
                          <p>2016년도 12월 12일</p>
                        </div>
                      </li>
                                            <li class="media">
                        <div class="media-left">
                         <img src="{{ asset('img/director-main01.jpg') }}" style="width:80px;" alt="image" class="img-rounded">
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading"><a href="#">공개수업</a></h4>
                          <p>2017년도 05월 04일</p>
                        </div>
                      </li>
                                            <li class="media">
                        <div class="media-left">
                         <img src="{{ asset('img/director-main03.jpg') }}" style="width:80px;" alt="image" class="img-rounded">
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading"><a href="#">발표회</a></h4>
                          <p>2017년도 06월 12일</p>
                        </div>
                      </li>
                      
                    
 
                    </ul>
                  </div>
                </div>
                
                          <div class="btnPart">
                  <button  class="btn btn-primary btn-block bg-color-6 join_kinder">입학 신청하기</button>
                </div> 
                
                
              </div>
            </aside>
          </div>
        </div>
      </div>
    </section>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <script>
    $(function(){
      // 모집 기간 설정
      var startTime_value = "{{$classRecruitInfo->startTime}}";
      
      var value1= startTime_value.split("-");
      var value2 = value1[2].split(" ");
      
      var startTime = value1[0]+"년"+value1[1]+"월"+value2[0]+"일";
      
      var endTime_value = "{{$classRecruitInfo->endTime}}";
      var value1= endTime_value.split("-");
      var value2 = value1[2].split(" ");
      
      var endTime= value1[1]+"월"+value2[0]+"일";

      var recuPeriod = startTime+" ~ "+endTime;
      $("#recuPeriod").text(recuPeriod);
      
      
      //입학 경쟁률 설정
      // 모집 원아수
      var recuTotal = ({{$classRecruitInfo->boy}}+{{$classRecruitInfo->girl}});
      
      // 남자 수
      var recuBoy = {{$classRecruitInfo->boy}};
      // 여자 수
      var recuGirl = {{$classRecruitInfo->girl}};

      // 해당 반에 소속된 원아수
      var inclTotal = {{$numberOfClass->childTotal}};
      
      // 소속된 남자 원아수
      var inclBoy = {{($numberOfBoy)?$numberOfBoy->boyTotal:0}};

      // 소속된 여자 원아 수
      var inclGirl = {{($numberOfGirl)?$numberOfGirl->girlTotal:0}};

      
      var boyRate = (50/recuBoy).toFixed(2);
      var girlRate = (65/recuGirl).toFixed(2);
      $("#boyRate").text("男: "+boyRate+" : 1");
      $("#girlRate").text("女: "+girlRate+" : 1");
      $("#maxChild").text(recuTotal+"명");
      $("#genderCount").text("男:"+recuBoy+" | 女:"+recuGirl);
    });
    
      function now() {
	         var date = new Date();
	         var m = date.getMonth()+1;
	         var d = date.getDate();
	         var h = date.getHours();
           var i = date.getMinutes();
	         var s = date.getSeconds();
      	  
      	  return date.getFullYear()+'-'+(m>9?m:'0'+m)+'-'+(d>9?d:'0'+d)+' '+(h>9?h:'0'+h)+':'+(i>9?i:'0'+i)+':'+(s>9?s:'0'+s);
      }
        
      document.querySelector('.join_kinder').onclick = function(){
        
        var kinderNum = {{ $kinderInfo->kId }};
        var parentNum = {{ Auth::user()->id }};
        
        //신청을 한 날짜
        var createTime = now();
        
        // 추가 예정부분
        // 형제유무, 맞벌이 유무, 사회적약자 유무
        // 위의 각 항목을 하나씩 있을 경우 1점씩 추가 됨
        // 위의 항목이 하나도 추가 되지 않을 경우 기본 점수인 1점으로 서버에 넘긴다.
        // alert(createTime);
        //         alert(kinderNum);
        // alert(parentNum);

        $.ajax({
          url:"{{ route('permit.store') }}",
          dataType:"jsonp",
          data:{
            parentNum:parentNum,
            kinderId:kinderNum,
            create_date:createTime,
            score:1 // 점수
          },success:function(data){
            if(data.result == 'success'){
              if(data.state == 'stored')
                window.alert('이미 신청이 되어 있습니다.');
              else
                window.alert('모집신청을 하였습니다.');
            }else{
              window.alert('디비오류');
            }
          },error:function(){
            window.alert('서버접속 오류가 발생하였습니다.');

          }
        });
      }
      
    </script>
   @stop