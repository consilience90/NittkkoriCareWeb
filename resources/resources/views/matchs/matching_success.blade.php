 @extends('master.matching')

 @section('main_content')
 
 
 <!-- MAIN SECTION -->
    <section class="mainContent full-width clearfix">
                              <div class="sectionTitle text-center">
         <h2>
            <span class="shape shape-left bg-color-4"></span>
            <span>抽選結果</span>
            <span class="shape shape-right bg-color-4"></span>
          </h2>
        </div>
      <div class="container">
        <div class="row">
          <div class="col-xs-7">
              <div class="table-responsive">



                <table class="table" style="vertical-align: middle;">
                  <thead>
                    <tr class="bg-color-1" style="vertical-align: middle;">
                      <th class="col-lg-2 col-xs-3" style="min-width: 190px; "></th>
                      <th class="col-lg-4 col-xs-3" style="vertical-align: middle;"><h3 style="color:black; margin-bottom:0px;">名前</h3></th>
                      <th class="col-lg-2 col-xs-2" style="vertical-align: middle;"><h3 style="color:; margin-bottom:0px;">クラス</h3></th>
                      <th class="col-lg-2 col-xs-2" style="vertical-align: middle;"><h3 style="color:; margin-bottom:0px;">歳</h3></th>
                      <th class="col-lg-2 col-xs-2" style="vertical-align: middle;"><h3 style="color:; margin-bottom:0px;">加算店</h3></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <h2>抽選合格園児　{{sizeof($includeChild)}}人</h2>
                    </tr>
                    @if(sizeof($includeChild) && gettype($includeChild) != 'integer')
                    
                        @foreach($includeChild as $incluChild)
                          <tr>
                            <td  style="vertical-align: middle;">
                              
                             <a href="{{ route('childInfo.show',['childNum'=>$incluChild->cId]) }}">
                              <button onclick="showChildInfo({{$incluChild->cId}})"style="border-style:none;" data-toggle="modal" data-target="#info" id="teamLink">
                               <span class="cartImage"><img src={!! asset("img/child/$incluChild->imgName") !!} alt="image" class="img-rounded" style="width:80px; height:80px;"></span>
                               </button>
                               
                            </td>
                            <td style="vertical-align: middle;"> <a href="{{ route('childInfo.show',['childNum'=>$incluChild->cId]) }}"> <h4 style="margin-bottom:0px;">{{ $incluChild->cName }}</h4></a> </td>
                            <td><h4 style="margin-bottom:0px; padding-top:27px;">{{$incluChild->className}}</h4></td>
                            <td>
                              <h4 style="margin-bottom:0px; padding-top:27px;">
                              {{$incluChild->age}}歳
                            </h4>
                            </td>
                              <td><h4 style="margin-bottom:0px; padding-top:27px;">{{$incluChild->score}}点</h4>
                            </td>
                          </tr>
                        @endforeach

                    @endif

                    
                  </tbody>
                </table>
              </div>
          </div>
          
          <div class="col-xs-5">
              <div class="table-responsive">



                <table class="table" style="vertical-align: middle;">
                  <thead>
                    <tr class="bg-color-1" style="vertical-align: middle;">
                      <th class="col-lg-2 col-xs-3"></th>
                      <th class="col-lg-4 col-xs-3" style="vertical-align: middle;"><h3 style="color:black; margin-bottom:0px;">名前</h3></th>
                      <th class="col-lg-2 col-xs-2" style="vertical-align: middle;"><h3 style="color:; margin-bottom:0px;">歳</h3></th>
                      <th class="col-lg-2 col-xs-2" style="vertical-align: middle;"><h3 style="color:; margin-bottom:0px;">候補順</h3></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <h2>候補園児　{{sizeof($refusedChild)}}人</h2>
                    </tr>
                    @if(sizeof($refusedChild) && gettype($refusedChild) != 'integer')
                    
                        @foreach($refusedChild as $key => $refuChild)
                          <tr>
                            <td  style="vertical-align: middle;">
                              
                             <a href="{{ route('childInfo.show',['childNum'=>$refuChild->cId]) }}">
                              <button onclick="showChildInfo({{$refuChild->cId}})"style="border-style:none;" data-toggle="modal" data-target="#info" id="teamLink">
                               <span class="cartImage"><img src={!! asset("img/child/$refuChild->imgName") !!} alt="image" class="img-rounded" style="width:80px; height:80px;"></span>
                               </button>
                            </td>
                            <td style="vertical-align: middle;"> <a href="{{ route('childInfo.show',['childNum'=>$refuChild->cId]) }}"> <h4 style="margin-bottom:0px;">{{ $refuChild->cName }}</h4></a> </td>
           
                            <td>
                              <h4 style="margin-bottom:0px; padding-top:27px;">
                               {{$refuChild->age}}歳
                            </h4>
                            </td>
                              <td><h4 style="margin-bottom:0px; padding-top:27px;">{{++$key}}順位</h4>

                            </td>
                          </tr>
                        @endforeach

                    @endif

                    
                  </tbody>
                </table>
                             <!--<a href="#" class="btn btn-primary input-group-addon" id="basic-addon2" style="width:100px;">메인으로</a>-->
              </div>
          </div>

        </div>
        </div>
      </div>
      
    </section>

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

            

      </script>

    </body>


@stop