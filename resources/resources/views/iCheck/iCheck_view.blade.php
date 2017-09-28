@extends('master.iCheck')

 @section('main_content')

    <!-- PAGE TITLE SECTION-->
    <section class="pageTitleSection">
      <div class="container">
        <div class="pageTitleInfo">
          <h2>ひまわり - iCheck</h2>
          <ol class="breadcrumb">
            <li>T-Supporter</li>
            <a href="{{route('icheck.index')}}" ><li class="active">ひまわりのクラス</li></a>
            <a href="{{ route('icheck.show',['icheck'=>$childInfo->cId]) }}"><li class="active">「{{ $childInfo->cName}}」</li></a>
          </ol>
        </div>
      </div>
    </section>


    <section class="mainContent full-width clearfix">
          <div class="container">
            <div class="row">
              <div class="col-md-9 col-sm-8 col-xs-12 block pull-right">
                <div class="thumbnail thumbnailContent">
                  @if($photoCheck == 'include')
                  <img src="{{asset($folderName.$article->photoName)}}" alt="image" class="img-responsive" style=" height:500px;">
                  @else
                  <img src="{{asset($folderName.$article->imgName)}}" alt="image" class="img-responsive" style=" height:500px;">
                  @endif
                  <div class="sticker-round bg-color-1">
                     <?php
                       $date=explode("-",explode(" ",$article->create_date)[0]);
                       echo $date[1]."月 <br>";
                       echo $date[2]."日 ";
                     ?>
                  </div>
                  <div class="caption border-color-1 singleBlog">
                    <h3 class="color-1">{{$article->title}}</h3>
                    <ul class="list-inline blogInfo">
                      <li><i class="fa fa-user" aria-hidden="true"></i>{{$article->name}}</li>
                      <li><i class="fa fa-comments-o" aria-hidden="true"></i>コメント数 {{$comment_counts}}</li>
                    </ul>
                    {!! $article->comment !!}
                    <hr/>

     
                         <canvas id="bar-chart-horizontal" width="300" height="150"></canvas>
                         
                         
                        
                  </div>
                </div>
                <div class="blogComments">
                  <h3>コメント数：{{ $comments->total()}}</h3>
                  <ul class="media-list commentsList">
                   @foreach($comments as $comment)
                    <li class="media">
                      <div class="media-left">
                        <img src="{{ asset('img/user_img/'.$comment->user_img)}}" alt="image" class="img-circle">
                      </div>
                      <div class="media-body">
                        <h4 class="media-heading">{{$comment->name}} {{$comment->pName}}様</h4>
                        <p>{{$comment->create_date}}</p>
                        <p>{{$comment->comment}}</p>
                      </div>
                    </li>
                  @endforeach
                        {{ $comments->render() }}
                    
                  </ul>
                </div>
                <div class="blogComments">
                  <h3>コメント作成</h3>
                  <div class="homeContactContent">
                      <div class="row">
                        <div class="col-xs-12">
                          <div class="form-group">
                            <i class="fa fa-comments" aria-hidden="true"></i>
                            <textarea id="comment" class="form-control border-color-4" placeholder="コメントメッセージ"></textarea>
                          </div>
                        </div>
                        <div class="col-xs-12">
                          <div class="formBtnArea pull-left">
                            <button class="btn btn-primary" onclick = "commentUpload();">登録</button>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-4 col-xs-12 pull-left">
                <aside>
                  <div class="panel panel-default courseSidebar">
                    <div class="panel-heading bg-color-2 border-color-2">
                      <h3 class="panel-title">カテゴリ</h3>
                    </div>
                    <div class="panel-body">
                      <ul class="list-unstyled categoryItem">
                        <li><a href="category.html"></a></li>
                        <li><a href="category.html">計画案確認する</a></li>
                      </ul>
                    </div>
                  </div>

                  <div class="rightSidebar">
                    <div class="panel panel-default">
                      <div class="panel-heading bg-color-5 border-color-5">
                        <h3 class="panel-title">チェック項目</h3>
                      </div>
                      <div class="panel-body">
                     @if(sizeof($basicCheck))

                        <ul class="media-list blogListing">
          
                          <li class="media">
                            <div class="media-body">
                            @if($basicCheck[0]->health == 1)
                               健康  : 良い
                            @elseif($basicCheck[0]->health == 2)
                               健康  : 普通
                            @else
                               健康  : 悪い
                            @endif
                            </div>
                          </li>
                          <li class="media">
                            <div class="media-body">
                            @if($basicCheck[0]->feels == 1)
                              気持ち  : 良い
                            @elseif($basicCheck[0]->feels == 2)
                             気持ち  : 普通
                            @else
                              気持ち  : 悪い
                            @endif
                            </div>
                          </li>
                          
                          
                          <li class="media">
                            <div class="media-body">
                          @if($basicCheck[0]->temperature == 1)
                            体温 : 正常
                          @elseif($basicCheck[0]->temperature == 2)
                            体温  : 微熱
                          @elseif($basicCheck[0]->temperature == 3)
                            体温  : 高熱
                          @else
                            体温 : その他
                          @endif
                            </div> 
                          </li>
                          
                        <li class="media">
                            <div class="media-body">
                              @if($basicCheck[0]->meals == 1)
                                食事  : 定量
                              @elseif($basicCheck[0]->meals == 2)
                                食事  : 少なく
                              @elseif($basicCheck[0]->meals == 3)
                                食事  : 多い
                              @else
                                食事  : なし
                              @endif
                            </div>
                          </li>
                        </ul>
                        @endif
                      </div>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js" /></script>
      <script>
         function now() {
	         var date = new Date();
	         var m = date.getMonth()+1;
	         var d = date.getDate();
	         var h = date.getHours();
           var i = date.getMinutes();
	         var s = date.getSeconds();
      	  
      	  return date.getFullYear()+'-'+(m>9?m:'0'+m)+'-'+(d>9?d:'0'+d)+' '+(h>9?h:'0'+h)+':'+(i>9?i:'0'+i)+':'+(s>9?s:'0'+s);
        }
        var commentUpload = function (){
           var comment = document.getElementById('comment').value;
           var nowTime = now();
          $.ajaxSetup({ headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')} });
        if(comment){
          $.ajax({
          url:"{{ route('icheck.store') }}",
          type:'POST',
          dataType:'jsonp',
          data:{
            pageInfo:"iCheck_view",
            childId:{{$childInfo->cId}},// 원아 고유값
            userId:{{ Auth::user()->id }},// 유저고유값
            articleNum:{{$article->memoId}}, // 현재 알림장의 고유번호
            memoCategory:2, // 업로드하는 종류 : 댓글
            memoType:1,   // 글자
            comment:comment, // 댓글 내용
            create_date:nowTime
          },
          success:function(date){
            swal({
              title:'コメントが登録されました。',
              type:'success'
            });
            // redirect 하기
            // console.log(date.test);
            location.replace("{{ route('icheck.view',['id'=>$article->memoId]) }}");
          },error:function(){
             swal({
              title:'サーバー失敗。',
              type:'error'
            });
            // 실패 하였을 경우 지금 작성하고 있는 것 그대로
          }
          });
        }else{
          swal({
              title:'文字を入力してください。',
              type:'error'
            });
        }
      
        }
        var assesseds = <?php echo json_encode( $assesseds ); ?>;
        var assScore = new Array();
        for(var i=0;i < assesseds.length;i++){
          assScore[i] = assesseds[i].score;
        }
        var assContent = new Array(); 
        for(var i=0;i < assesseds.length;i++){
          assContent[i] = assesseds[i].assContent;
        }
        

        new Chart(document.getElementById("bar-chart-horizontal"), {
    type: 'horizontalBar',
    data: {
      labels: assContent,
      datasets: [
        {
          label: "今日の授業評価",
          backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
          data: assScore
        }
      ]
    },
    options: {
    	legend: { display: false },
    	 title: {
        display: true,
        fontSize: 25,
        fontColor: "#424242",
        text: '「{{ $childInfo->cName}}」の授業評価'
      },
      
scales: {
            xAxes: [{
                ticks: {
                    min: 0 // Edit the value according to what you need
                }
            }],
            yAxes: [{
                          ticks: {
                  fontSize: 15
                },
                stacked: true
            }]
        }
        
    }
});

      </script>
</body>

</html>
 @stop