 @extends('master.matching')

 @section('main_content')
 
    <!-- PAGE TITLE SECTION-->
    <section class="pageTitleSection">
      <div class="container">
        <div class="pageTitleInfo">
            @if(session('positionName') == '원장님')
              <h2>유치원 목록</h2>
            @else
              <h2>모집 신청</h2>
            @endif
          <ol class="breadcrumb">
            <li>메인</li>
            @if(session('positionName') == '원장님')
              <li class="active">모집관리</li>
            @else
              <li class="active">모집신청</li>
            @endif
          </ol>
        </div>
      </div>
    </section>

    <!-- MAIN SECTION -->
    <section class="mainContent full-width clearfix coursesSection">
      <div class="container">
        <div class="row">
          <div class="col-md-9 col-sm-7 col-xs-12 pull-right">
            <div class="row">
              <!--1st-->
              @foreach($kinderInfos as $kinderInfo)
                <div class="col-md-4 col-sm-6 col-xs-12 block">
                  <div class="thumbnail thumbnailContent">
                    <a href="{{ route('kinderInfo.show',['kinderNum'=>$kinderInfo->kId]) }}"><img src="../img/kindergardens/yo{{$kinderInfo->kId}}.jpg" alt="image" class="img-responsive" 
                    style="height:230px;"></a>
                    <!--<div class="sticker bg-color-1">대구</small></div>-->
                    <div class="caption border-color-1">
                      <h3><a href="{{ route('kinderInfo.show',['kinderNum'=>$kinderInfo->kId]) }}" class="color-1">{{ $kinderInfo->kName }}<small><b> &nbsp;&nbsp;{{ $kinderInfo->address }}</b></small></a></h3>
                      <ul class="list-unstyled">
                        <li><i class="fa fa-calendar-o" aria-hidden="true"></i>만 2세부터 만 4세까지</li>
                        <li><i class="fa fa-clock-o" aria-hidden="true"></i>9.00AM-11.00AM</li>
                      </ul>
                      <p>
                        {{ $kinderInfo->kName }}은 우리나라의 미래를 주도할 주인공을 길러내고
                        유아교육을 담당할 전문인을 양성하고자 1989년 설립되었습니다.
                      </p>
                      <ul class="list-inline btn-yellow">
                       @if(session('position') == 'parents')
                          <li><a href="" class="btn btn-primary join_kinder">입학 신청하기</a></li>
                        @endif
                        <li><a href="" class="btn btn-link"><i class="fa fa-angle-double-right" aria-hidden="true"></i> More</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                @endforeach
            </div>
          </div>
          
          <div class="col-md-3 col-sm-5 col-xs-12 pull-left">
            <aside>
              <div class="panel panel-default courseSidebar">
                <div class="panel-heading bg-color-1 border-color-1">
                  <h3 class="panel-title">검색</h3>
                </div>
                <div class="panel-body">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="유치원명 입력" aria-describedby="basic-addon2">
                    <span class="input-group-addon" id="basic-addon2"><input class="btn btn-primary bg-color-1" type="submit" value="검색"></span>
                  </div>
                </div>
              </div>
              <div class="panel panel-default courseSidebar">
                <div class="panel-heading bg-color-2 border-color-2">
                  <h3 class="panel-title">지역 찾기</h3>
                </div>
                <div class="panel-body">
             
                  <div class="lightDrop">
                    <select name="guiest_id5" id="guiest_id5" class="select-drop">
                      <option value="0">지역</option>
                      <option value="서울">서울</option>
                      <option value="대구">대구</option>
                      <option value="부산">부산</option>             
                      <option value="울산">울산</option>
                      <option value="대전">대전</option>
                      <option value="광주">광주</option>
                      <option value="인천">인천</option>    
                      <option value="제주도">제주도</option>    
                    </select>
                  </div>
                  

                </div>
              </div>
              
     
            </aside>
          </div>
        </div>
        
        <div class="pagerArea text-center">
          <ul class="pager">
            <li class="prev"><a href="#"><i class="fa fa-arrow-left" aria-hidden="true"></i>Prev</a></li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li class="next"><a href="#">Next<i class="fa fa-arrow-right" aria-hidden="true"></i></a></li>
          </ul>
        </div>
          
      </div>
    </section>
    
  
    
    <script> 
      document.querySelector('.join_kinder').onclick = function(){
        $.ajax({
          url:"{{ route('permit.store') }}",
          data:{
            parentNum:{{ Auth::user()->id }},
            kinderId:{{ $kinderInfo->kId }}
          },dataType:"jsonp"
          ,success:function(data){
            if(data.result == 'success'){
              alert('모집 신청이 되었습니다.');
              swal("모집 신청을 하였습니다.", "해당 유치원에서 승인을 하여야만 해당 유치원의 정보를 볼수 있습니다.", "success");
              // 확인을 눌렀을 경우 부모의 메인 화면으로 부탁드립니다. 
            }else{
              alert('디비접속 오류');
              swal("디비접속 오류", "이전 화면으로 돌아갑니다.", "error");
            }
          },error:function(){
            alert('서버오류');
              swal("서버접속 오류", "이전 화면으로 돌아갑니다.", "error");
          }
        });
      }
    </script>
    @stop
