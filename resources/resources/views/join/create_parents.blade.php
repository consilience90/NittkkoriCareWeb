@extends('master.join')

 @section('main_content')

 <form action="{{route('users.store')}}" name="userInfo" method="POST" role="form" class="form" enctype="multipart/form-data">
   <!--<form action="#" name="userInfo" method="POST" role="form" class="form" enctype="multipart/form-data">-->

   {!! csrf_field() !!}
   <!--@@@@@@@@@@@@@ JOIN 1 @@@@@@@@@@@@@@@@@@@@@  -->
   <input type="hidden" name="position" value="{{ $position }}" >
   <section class="mainContent full-width clearfix" id="join_1">
     <h1 class="bg-color-4" style="text-align:center; color:white;">부모님 회원가입</h1>
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
           <div class="progressInfo">2. 원아 정보 입력</div>
         </div>




       </div>

       <div class="row">

         <div class="col-sm-4 col-sm-push-8 col-xs-12" st>
           <div class="panel-heading bg-color-3 border-color-3">
             <h3 style="font-size:x-large; color:white;" class="panel-title">부모님 사진</h3>
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
                   <label for="">부모님 이름</label>
                   <input type="text" name='name' class="form-control border-color-1" id="" required="">
                 </div>
               </div>

               <div class="form-group">
                 <div class="col-sm-4 col-xs-12">
                   <label for="">관계</label>
                   <div class="bookingDrop">
                     <select name="gender" class="select-drop">
                             <option value="female">모</option>
                             <option value="male">부</option>
                     </select>
                   </div>
                 </div>
               </div>

               <div class="form-group">
                 <div class="col-sm-6 col-xs-12">
                   <label for="">email 입력</label>
                   <input type="email" name='user_id' class="form-control border-color-3" id="" required="">
                 </div>
               </div>
               <div class="form-group">
                 <div class="col-sm-6 col-xs-12">
                   <label for="">Password 입력</label>
                   <input type="password" name='password' class="form-control border-color-3" id="" required="">
                 </div>
               </div>

               <div class="form-group">
                 <div class="col-sm-6 col-xs-12">
                   <label for="p_address">거주지</label>
                   <div class="bookingDrop">
                     <select name="p_address" class="select-drop">
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
                 <div class="col-sm-6 col-xs-12">
                   <label for="">보호자 연락처</label>
                   <input type="text" name='phoneNum' class="form-control border-color-5" id="">
                 </div>
               </div>

               <div class="form-group">
                 <div class="col-xs-12">
                   <hr>
                   <label for="">부모님 사진을 선택해주세요</label>
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

   <!--@@@@@@@@@@@@@ JOIN 2 @@@@@@@@@@@@@@@@@@@@@  -->
   <section class="mainContent full-width clearfix" id="join_2" style="display:none;">
     <h1 class="bg-color-4" style="text-align:center; color:white;">부모님 회원가입</h1>
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
           <div class="progressInfo">2. 원아 정보 입력</div>
         </div>


       </div>

       <div class="row">
         <div class="col-sm-4 col-sm-push-8 col-xs-12" st>
           <div class="panel-heading bg-color-3 border-color-3">
             <h3 style="font-size:x-large; color:white;" class="panel-title">원아 사진</h3>
           </div>
           <div class="thumbnail image_preview2" style="max-width: 100%; height: auto;">
             <img class="img-responsive img-rounded" width="100%;">
             <div class="caption">
               <p><a href="#" class="btn btn-primary" role="button">remove</a></p>
             </div>
           </div>

         </div>



         <div class="col-sm-8  col-sm-pull-4 col-xs-12">
           <div class="panel panel-default checkoutInfo">
             <div class="panel-heading bg-color-3 border-color-3">
               <h3 class="panel-title">원아 정보</h3>
             </div>
             <div class="panel-body">
               <div class="form-group">
                 <div class="col-sm-4 col-xs-12">
                   <label for="">원아 이름</label>
                   <input type="text" name='cName' class="form-control border-color-1" id="">
                 </div>
               </div>
               <div class="form-group">
                 <div class="col-sm-4 col-xs-12">
                   <label for="">나이 (만)</label>
                   <input type="date" name='cBirth' class="form-control border-color-2" id="">
                 </div>
               </div>

               <div class="form-group">
                 <div class="col-sm-4 col-xs-12">
                   <label for="">성별</label>
                   <div class="bookingDrop">
                     <select name="cGender" class="select-drop">
                             <option value="girl">여자</option>
                             <option value="boy">남자</option>
                           </select>
                   </div>
                 </div>
               </div>



               <div class="form-group">
                 <div class="col-xs-12">
                   <label for="">원아에 관한 간단한 설명 및 특이사항</label>
                   <textarea name='kExplain' class="form-control border-color-4"></textarea>
                 </div>
               </div>
               
               <div class="form-inline">
                 <div class="col-xs-12">
                <div class="checkbox">
    <label>
      <input type="checkbox"> 유치원에 혈연有 &nbsp;&nbsp;
    </label>
  </div>
                  <div class="checkbox">
    <label>
      <input type="checkbox"> 맞벌이 부부 &nbsp;&nbsp;
    </label>
  </div>                <div class="checkbox">
    <label>
      <input type="checkbox"> 사회 취약층
    </label>
  </div>


  </div>
                 </div>
               </div>

               <div class="form-group">
                 <div class="col-xs-12">
                   <hr>
                   <label for="">아이의 사진을 선택해주세요</label>
                   <input type="file" name="k_image" id="image2">
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
