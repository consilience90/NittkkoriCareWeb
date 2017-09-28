
@extends('master.classroom')

 @section('main_content')
    <!-- PAGE TITLE SECTION-->
    <section class="pageTitleSection">
      <div class="container">
        <div class="pageTitleInfo">
          <h2>반 관리</h2>
          <ol class="breadcrumb">
            <li>T-Supporter</li>
            <li class="active">반 목록</li>
          </ol>
        </div>
      </div>
    </section>

    <!-- MAIN SECTION -->
    <section class="mainContent full-width clearfix coursesSection">
      <div class="container">
        <div class="row">
          @if(count($class_datas))
          @foreach($class_datas as $class_data)
           <div class='col-sm-4 col-xs-12 block'>
             <div class='thumbnail thumbnailContent'>
               <a href="{{route('classroom.show',['classroom'=>$class_data->cId])}}"><img src='img/home/courses/flower.JPG' alt='image' class='img-responsive'></a>
               <div class='sticker-round bg-color-1'>{{ $class_data->ages }}세 반</div>
               <div class="caption border-color-1">
                 <h3><a href="#" class='color-1'>{{ $class_data->cName }}</a></h3>
                 <ul class="list-inline">
                   <li><i class='fa fa-user' aria-hidden='true'></i>담임교사 {{ $class_data->mainTname }}</li>
                   <li><i class='fa fa-user' aria-hidden='true'></i>부담임 교사 {{ $class_data->subTname }}</li>
                 </ul>
               </div>
             </div>
           </div>
           @endforeach
           @else
             <h3>현재 유지원에 등록된 반이 없습니다.</h3>
           @endif


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
     <a href="{{ route('classroom.create') }}" class="backToTop" id="backToTop"><i class="fa fa-plus-square fa-3x" aria-hidden="true"></i></a>
   </div>
   
@stop
