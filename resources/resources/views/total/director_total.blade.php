 @extends('master.total')

 @section('main_content')

    <section class="mainContent full-width clearfix">
      <div class="container">
        <div class="row">
         
   

    <div id="page-wrapper" style="margin-left:0px; border-left:0px;">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header color-4">영진유치원</h1>
        </div>
        <!-- /.col-lg-12 -->
      </div>
      <!-- /.row -->
      <div class="row">

        <div class="col-lg-3 col-md-6">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <div class="row">
                <div class="col-xs-3">
                  <i class="fa fa-users fa-5x"></i>
                </div>
                <div class="col-xs-9 text-right">
                  <div class="huge" style="padding-top:5px;">{{sizeof($childrensInfo)}}명</div><br>
                  <div><b>총 원아수</b></div>
                </div>
              </div>
            </div>

          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="panel panel-green">
            <div class="panel-heading">
              <div class="row" style="height:72px;">
                <div class="col-xs-3">
                  <i class="glyphicon glyphicon-time fa-5x"></i>
                </div>
                <div class="col-xs-9 text-right">
                  <div>
                    <h3 style="margin-bottom:0px; margin-top:0px; color:white;">
                      <?php
                        $val1 = explode("-",$storedRecuNumber->startTime);
                        $val2 = explode(' ',$val1[2]);
                        $startTime = $val1[1].'/'.$val2[0];

                        $val1 = explode("-",$storedRecuNumber->endTime);
                        $val2 = explode(' ',$val1[2]); 
                        $endTime = $val1[1].'/'.$val2[0];
                        
                        echo $startTime.'~ '.$endTime;
                      ?>
                    </h3></div>
                  <div style="padding-top:20px;"><b>모집기간</b></div>
                </div>
              </div>
            </div>
            <a href="#">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="panel panel-yellow">
            <div class="panel-heading">
              <div class="row">
                <div class="col-xs-3">
                  <i class="fa fa-line-chart fa-5x"></i>
                </div>
                <div class="col-xs-9 text-right">
                  <div class="huge" style="padding-top:5px;">{{sizeof($recuChildInfo)}}건</div><br>
                  <div><b>모집신청 건수</b></div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="panel panel-red">
            <div class="panel-heading">
              <div class="row">
                <div class="col-xs-3">
                  <i class="fa fa-child   fa-5x"></i>
                </div>

                <div class="col-xs-9 text-right">
                  <div class="huge" style="padding-top:5px;">
                  <?php
                    $recuTotal = ($storedRecuNumber->boy + $storedRecuNumber->girl);
                    echo $recuTotal - $storedChild;
                  ?>
                  </div><br>
                  <div><b>현재 남은 공석</b></div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
      <!-- /.row -->

      <div class="row">
        <div class="col-sm-12">
          <div class="panel panel-default">
            <div class="panel-heading">
              <i class="fa fa-bar-chart-o fa-fw"></i>모집신청 건수
            </div>
            <div class="panel-body">
              <div id="morris-area-chart"></div>
            </div>
          </div>
        </div>

        <div class="col-sm-12">
          <div class="panel panel-default">
            <div class="panel-heading">
              <i class="fa fa-bar-chart-o fa-fw"></i> 원아 수
            </div>
            <div class="panel-body">
              <div class="row">

                <div class="col-lg-4">
                  <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped" style="text-align:center;">
                      <thead>
                        <tr>
                          <th>년도</th>
                          <th>성별</th>
                          <th>인원</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>2014</td>
                          <td>남</td>
                          <td>60명</td>
                        </tr>
                        <tr>
                          <td>2014</td>
                          <td>여</td>
                          <td>54명</td>
                        </tr>
                                                <tr>
                          <td>2015</td>
                          <td>남</td>
                          <td>58명</td>
                        </tr>
                        <tr>
                          <td>2015</td>
                          <td>여</td>
                          <td>59명</td>
                        </tr>
                                               <tr>
                          <td>2016</td>
                          <td>남</td>
                          <td>65명</td>
                        </tr>
                        <tr>
                          <td>2016</td>
                          <td>여</td>
                          <td>60명</td>
                        </tr>
                                                <tr>
                          <td>2017</td>
                          <td>남</td>
                          <td>64명</td>
                        </tr>
                        <tr>
                          <td>2017</td>
                          <td>여</td>
                          <td>65명</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>

                <div class="col-sm-8">
                  <div id="morris-bar-chart"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <i class="fa fa-clock-o fa-fw"></i> 타임라인
          </div>
          <!-- /.panel-heading -->
          <div class="panel-body">
    
              @foreach($recuChildInfo as $childInfo)
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <p>
                    <small class="text-muted">
                    <i class="fa fa-clock-o"></i>
                    <?php
                      $val1 = explode("-",$childInfo->recuDate);
                      $val2 = explode(" ",$val1[2]);
                      $val3 = explode(":",$val2[1]);
                      
                      echo $val1[0]."년도 ".$val1[1]."월 ".$val2[0]."일 ".$val2[1];
                    ?>
                    </small></p>
                  </div>
                  <div class="timeline-body">
                    <a><p>{{$childInfo->parentName}}님이 {{$childInfo->childName}}원아를 입원 신청하였습니다</p></a>
                  </div>
                </div>
                <hr>
             @endforeach

          </div>
   
        </div>
  
      </div>


    </div>

  </div>
  
      </div>

 
 </section>
 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 <!-- 그래프 데이터 넣는 곳-->
 <script type="text/javascript">
  $(function() {

    Morris.Area({
        element: 'morris-area-chart',
        data: [{
            period: '2016 Q1',
            male: 11,
            female: 15
        }, {
            period: '2016 Q2',
            male: 5,
            female: 2
        }, {
            period: '2016 Q3',
            male: 4,
            female: 5
        }, {
            period: '2016 Q4',
            male: 7,
            female: 8
        }, {
            period: '2017 Q1',
            male: 16,
            female: 18
        }, {
            period: '2017 Q2',
            male: 1,
            female: 1
        }, {
            period: '2017 Q3',
              male: 1,
            female: 1
        }],
        
        xkey: 'period',
        ykeys: ['male', 'female'],
        labels: ['여자', '남자'],
        pointSize: 2,
        hideHover: 'auto',
        resize: true
    });



    Morris.Bar({
        element: 'morris-bar-chart',
        data: [ {
            y: '2013',
            a: 60,
            b: 54
        }, {
            y: '2014',
            a: 58,
            b: 59
        }, {
            y: '2015',
            a: 65,
            b: 60
        }, {
            y: '2016',
            a: 69,
            b: 60
        }, {
            y: '2017',
            a: 64,
            b: 65
        }],
        xkey: 'y',
        ykeys: ['a', 'b'],
        labels: ['남자', '여자'],
        hideHover: 'auto',
        resize: true
    });
   
});

  
 </script>
 
     @stop
