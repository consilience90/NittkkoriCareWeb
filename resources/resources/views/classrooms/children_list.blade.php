
@extends('master.classroom')

 @section('main_content')
    <!-- PAGE TITLE SECTION-->
    <section class="pageTitleSection">
      <div class="container">
        <div class="pageTitleInfo">
          <h2>원아 목록</h2>
          <ol class="breadcrumb">
            <li><a href="./main.html">T-Supporter</a></li>
            <li class="active"><a href="./class.html">해바라기반</a></li>
            <li class="active">원아 목록</li>
          </ol>
        </div>
      </div>
    </section>


    <!-- MAIN SECTION -->
    <section class="mainContent full-width clearfix productSection">
      <div class="container">
        <div class="row">
          <div class="col-md-9 col-sm-7 col-xs-12 pull-right">
            <div id="childList" class="row">
            @if(!empty($childrenInfo))
              @foreach($childrenInfo as $childInfo)
              <div class="col-md-4 col-xs-6">
                <div class="text-center">
                  <a href="single-product.html">
                    <img src="{{ asset('img/child/'.$childInfo->imgName)}}" alt="..." class="img-circle" width="200px" height="200px">
                    <h3 style="padding-top:20px;">{{$childInfo->cName}}</h3>
                  </a>
                </div>
              </div>
              @endforeach
              <center>{{$childrenInfo->render()}}</center>
            @endif
            
            </div>
          </div>


          <div class="col-md-3 col-sm-5 col-xs-12 pull-left">
            <aside>
              <div class="panel panel-default courseSidebar">
                <div class="panel-heading bg-color-1 border-color-1">
                  <h3 class="panel-title">원아 검색</h3>
                </div>
                <div class="panel-body">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="원아이름 입력" aria-describedby="basic-addon2">
                    <span class="input-group-addon" id="basic-addon2"><input class="btn btn-primary bg-color-1" type="submit" value="검색"></span>
                  </div>
                </div>
              </div>
              <div class="panel panel-default courseSidebar">
                <div class="panel-heading bg-color-2 border-color-2">
                  <h3 class="panel-title">정렬</h3>
                </div>
                <div class="panel-body">
                  <div class="lightDrop">
                    <select name="gender" id="gender" class="select-drop">
                         <option value="0">성별</option>
                         <option value="1">남</option>
                         <option value="2">여</option>
                       </select>
                  </div>
                  <div class="lightDrop">
                    <select name="guiest_id5" id="guiest_id5" class="select-drop">
                         <option value="0">등록일 순</option>
                       </select>
                  </div>


                </div>
              </div>
              <div class="panel panel-default courseSidebar">
                <div class="panel-heading bg-color-5 border-color-5">
                  <h3 class="panel-title">메뉴</h3>
                </div>
                <div class="panel-body">
                  <ul class="list-unstyled categoryItem">
                    <li><a href="category.html">-</a></li>
                    <li><a href="category.html">-</a></li>
                    <li><a href="category.html">-</a></li>
                  </ul>
                </div>
              </div>
            </aside>
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
<script>
var src = "{{ asset('img/child/') }}";
  $(function(){
    $('#gender').change(function(){
          var gender = this.value;
      $.ajax({
        url:"{{route('genderList.show')}}",
        dataType:'jsonp',
        data:{
          classNum:{{$classNum}},
          gender:gender
        },success:function(data){
          $('#childList').empty();
          for(var i=0;i<data.childrenInfo.length;i++){
            var insertSource = '<div class="col-md-4 col-xs-6"><div class="text-center"><a href="#">';
                insertSource += '<img src= "'+src+'/'+data.childrenInfo[i].imgName+'" alt="..." class="img-circle" width="200px" height="200px">';
                insertSource += '<h3 style="padding-top:20px;">'+data.childrenInfo[i].cName+'</h3></a></div></div>';
              $('#childList').append(insertSource);
          }
        },error:function(){
          alert('실패');
        }
      });
    });
  });
</script>
    @stop
