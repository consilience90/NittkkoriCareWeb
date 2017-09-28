
@extends('master.classroom')

 @section('main_content')

    <!-- PAGE TITLE SECTION-->
    <section class="pageTitleSection">
      <div class="container">
        <div class="pageTitleInfo">
          <h2>반 관리</h2>
          <ol class="breadcrumb">
            <li>T-Supporter</li>
            <li class="active">반 이름</li>
            <li class="active">{{ $s_classInfo->cName }}</li>
          </ol>
        </div>
      </div>
    </section>


    <!-- MAIN SECTION -->
    <section class="mainContent full-width clearfix">
      <div class="container">
        <div class="row">
          <div class="col-md-9 col-sm-8 col-xs-12 block pull-right">
            <div class="thumbnail thumbnailContent">
              <img src="{{ asset('img/blog/single-blog.jpg') }}" alt="image" class="img-responsive">
              <div class="sticker-round bg-color-1" style="width:150px;">만 {{ $s_classInfo->ages }}세반</div>
              <div class="caption border-color-1 singleBlog">
                <h3 class="color-1">{{ $s_classInfo->cName }}</h3>
              </div>
            </div>

            <div class="col-xs-12">
              <!-- <div class="sectionTitle text-center">
                          <h2 style="font-size:26px;">
                            <span class="shape shape-left bg-color-4"></span>
                            <span>교사 정보</span>
                            <span class="shape shape-right bg-color-4"></span>
                          </h2>
                        </div> -->

            </div>

            <div class="col-sm-6 col-xs-12">
                <div class="teamContent teamAdjust">
                  <div class="teamImage">
                    <img src="{{ asset('./img/user_img/user_2.jpg') }}" alt="img" class="img-circle img-responsive">
                  </div>
                  <div class="teamInfo teamTeacher">
                    <h3><a>{{ $s_classInfo->mainTname }}</a></h3>
                    <p>담임 교사</p>
                  </div>
                </div>
            </div>

            <div class="col-sm-6 col-xs-12">
                <div class="teamContent teamAdjust">
                  <div class="teamImage">
                    <img src="{{ asset('./img/user_img/user_3.jpg') }}" alt="img" class="img-circle img-responsive">
                  </div>
                  <div class="teamInfo teamTeacher">
                    <h3><a>{{ $s_classInfo->subTname }}</a></h3>
                    <p>부 담임 교사</p>
                  </div>
                </div>
            </div>



          </div>

          <div class="col-md-3 col-sm-4 col-xs-12 pull-left">
            <aside>
              {{-- @if(count($waitList))
              <div class="rightSidebar">
                <div class="panel panel-default">
                  <div class="panel-heading bg-color-5 border-color-5">
                    <h3 class="panel-title">가입 신청 대기중 <small>&nbsp; - &nbsp; {{ count($waitList) }}건</small></h3>
                  </div>
                  <div class="panel-body">
                    <ul class="media-list blogListing">
                      @foreach($waitList as $data)
                      <li class="media">
                        <div class="media-left">
                          <a href="course-single-left-sidebar.html"><img src='{{ asset("img/child/$data->childImg") }}' alt="image" width="70px" height="70px"></a>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading"><a href="course-single-left-sidebar.html">{{ $data->childName }} 원아</a></h4>
                          <p style="padding-top:15px;">신청일: 2017.07.20</p>
                        </div>
                      </li>
                      @endforeach

                    </ul>
                    <a href="{{ route('permit.update',['id'=>'all_yes']) }}"><div class="btn btn-primary btn-block bg-color-1 border-color-3" id="all_yes">전부 수락</div></a>
                    <a href="{{ route('permit.destroy',['id'=>'all_no']) }}"><div class="btn btn-primary btn-block bg-color-3 border-color-3" id="all_no">전부 거절</div></a>
                  </div>
                </div>
              </div>
              @endif --}}
              <div class="panel panel-default courseSidebar">
                <div class="panel-heading bg-color-2 border-color-2">
                  <h3 class="panel-title">메뉴</h3>
                </div>
                <div class="panel-body">
                  <ul class="list-unstyled categoryItem">
                    <li><a href="{{route('childrensList.show',['classNum'=>$classNum])}}">원아 목록</a></li>
                    <li><a href="{{route('classEdit.show',['classNum'=>$classNum])}}">반 정보 수정</a></li>
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
    @stop
