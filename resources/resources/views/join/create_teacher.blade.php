@extends('master.join')

 @section('main_content')

 <form action="{{route('users.store')}}" name="userInfo" method="POST" role="form" class="form" enctype="multipart/form-data">
   {!! csrf_field() !!}
   <!--@@@@@@@@@@@@@ JOIN 1 @@@@@@@@@@@@@@@@@@@@@  -->
   <input type="hidden" name="position" value="{{ $position }}" >
   <section class="mainContent full-width clearfix" id="join_1">
     <h1 class="bg-color-4" style="text-align:center; color:white;">교사 회원가입</h1>
     <hr>
     <div class="container">
       <div class="row progress-wizard" style="border-bottom:0;">

         <div class="col-sm-4 col-xs-12 progress-wizard-step active">
           <div class="progress">
             <div class="progress-bar"></div>
           </div>
           <a class="progress-wizard-dot">
           <i class="fa fa-user" aria-hidden="true"></i>
         </a>
           <div class="progressInfo">1. 개인정보 입력</div>
         </div>

         <div class="col-sm-4 col-xs-12 progress-wizard-step incomplete">
           <div class="progress">
             <div class="progress-bar"></div>
           </div>
           <a class="progress-wizard-dot">
           <i class="fa fa-usd" aria-hidden="true"></i>
         </a>
           <div class="progressInfo">2. 유치원 정보 입력</div>
         </div>

  
       </div>

       <div class="row">

         <div class="col-sm-4 col-sm-push-8 col-xs-12" st>
           <div class="panel-heading bg-color-3 border-color-3">
             <h3 style="font-size:x-large; color:white;" class="panel-title">선생님 사진</h3>
           </div>
           <div class="thumbnail image_preview" style="max-width: 100%; height: auto;">
             <img class="img-responsive img-rounded" width="100%;">
             <div class="caption">
               <p><a href="#" class="btn btn-primary" role="button">삭제</a></p>
             </div>
           </div>

         </div>



         <div class="col-sm-8  col-sm-pull-4 col-xs-12">

           <div class="panel panel-default checkoutInfo">
             <div class="panel-heading bg-color-3 border-color-3">
               <h3 class="panel-title">개인 정보</h3>
             </div>
             <div class="panel-body">
               <div class="form-group">
                 <div class="col-sm-8 col-xs-12">
                   <label for="">선생님 이름</label>
                   <input type="text" name="name" class="form-control border-color-1" id="" required="">
                 </div>
               </div>
                 <div class="form-group">
                   <div class="col-sm-4 col-xs-12">
                     <label for="">성별</label>
                     <div class="bookingDrop">
                       <select name="gender" class="select-drop">
                         <option value="female">여성</option>
                         <option value="male">남성</option>
                       </select>
                     </div>
                   </div>
                 </div>

               <div class="form-group">
                 <div class="col-sm-6 col-xs-12">
                   <label for="">ID 입력</label>
                   <input type="text" name="user_id" class="form-control border-color-3" id="" required="">
                 </div>
               </div>
               <div class="form-group">
                 <div class="col-sm-6 col-xs-12">
                   <label for="">Paswword 입력</label>
                   <input type="password" name="password" class="form-control border-color-3" id="" required="">
                 </div>
               </div>

               <div class="form-group">
                 <div class="col-sm-12 col-xs-12">
                   <label for="">선생님 연락처</label>
                   <input type="text" class="form-control border-color-5" name='phoneNum' id="">
                 </div>
               </div>

               <div class="form-group">
                 <div class="col-xs-12">
                   <hr>
                   <label for="">선생님 사진을 선택해주세요</label>
                   <input type="file" name="user_image" id="image" required="">
                 </div>
               </div>
             </div>
           </div>

           <div class="continueBtnArea">
             <ul class="list-inline">
               <li class="pull-right"><a class="btn btn-primary" onclick="show();">next</a></li>
             </ul>
           </div>
         </div>
       </div>
     </div>
   </section>

   <section class="mainContent full-width clearfix" id="join_2" style="display:none;">
     <h1 class="bg-color-4" style="text-align:center; color:white;">교사 회원가입</h1>
     <hr>
     <div class="container">
       <div class="row progress-wizard" style="border-bottom:0;">

         <div class="col-sm-4 col-xs-12 progress-wizard-step complete">
           <div class="progress">
             <div class="progress-bar"></div>
           </div>
           <a class="progress-wizard-dot">
               <i class="fa fa-user" aria-hidden="true"></i>
             </a>
           <div class="progressInfo">1. 개인정보 입력</div>
         </div>

         <div class="col-sm-4 col-xs-12 progress-wizard-step active">
           <div class="progress">
             <div class="progress-bar"></div>
           </div>
           <a class="progress-wizard-dot">
               <i class="fa fa-usd" aria-hidden="true"></i>
             </a>
           <div class="progressInfo">2. 유치원 정보 입력</div>
         </div>

       </div>

       <div class="row">

         <div class="col-sm-1 col-xs-12"> </div>
         <div class="col-sm-10 col-xs-12">

           <div class="panel panel-default checkoutInfo">
             <div class="panel-heading bg-color-3 border-color-3">
               <h3 class="panel-title">유치원 선택</h3>
             </div>
             <div class="panel-body">

               <div class="form-group">
                 <div class="col-sm-6 col-xs-12">
                   <label for="address">주소</label>
                   <div class="bookingDrop">
                     <select id = "select_area" name="address" class="" onchange="areaSelect();">
                           <option value="서울">서울</option>
                           <option value="대구">대구</option>
                           <option value="부산">부산</option>
                           <option value="경기도">경기도</option>
                           <option value="제주도">제주도</option>
                           <option value="강원도">강원도</option>
                         </select>
                   </div>
                 </div>
               </div>

               <div class="form-group">
                 <div class="col-sm-4 col-xs-12">
                   <label for="">유치원 명</label>
                   <div class="bookingDrop">
                     <select id = "select_kindergarden" name="kgName" class="">
                       <option value="">::선택::</option>
                     </select>
                   </div>
                 </div>
               </div>

             </div>
           </div>
           <div class="continueBtnArea">
             <ul class="list-inline">
               <li><a onclick="show();" class="btn btn-primary">back</a></li>
                  <li class="pull-right"><input class="btn btn-primary" type="submit"></li>
             </ul>
           </div>

         </div>
       </div>
     </div>
   </section>
</form>

  @stop
