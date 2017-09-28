<?php
     $callback=$_GET['callback'];
    //  $resultData = 'failed';    // 
    //  $teacher_num = $_GET['user_num']; // 선생의 고유번호
    // $child_num = $_GET['childID']; // 원생의 고유번호
    // $assessed = $_GET['developCheckArray']; // 평가항목의 평가점수 -> 배열로 넘어온다.
    
    // $basicCheck = $_GET['basicChecks']; //체온, 건강, 감정 ,식사 을 평가한 값 -> 배열로 넘어온다.
    // $feels = $basicCheck['feels']; // basic check 감정평가 점수
    // $health = $basicCheck['health']; // basic check 건강평가 점수
    // $temperature = $basicCheck['temperature']; // basic check 체온 점수
    // $meals = $basicCheck['eat']; // basic check 식사량 
    
    // $todayHMS  = date("Y-m-d"); // 오늘의 날짜를 가지고 옴
    // // 데이터베이스 연결
    // $connection = mysqli_connect("localhost", "root", "", "myapp");
    // $connection->set_charset("utf8");
    
    // //값을 해당 디비에 넣는다.
    // // 먼저 넣을 table -> 평가 된다 table
    // // 다음에 넣을 table -> 기본 체크 table

    // for($i = 0;$i<count($assessed[key]);$i++){
    //     $asId=$assessed['id'][$i]; // 평가항목 id
    //     $score=$assessed['value'][$i];    // 평가항목의 점수
    //     $query = mysqli_query($connection,"INSERT INTO assesseds (f_tId,f_cId,f_asId,score,create_date) VALUES($teacher_num,$child_num,$asId,$score,'$todayHMS')");
    // }
    //     $query = mysqli_query($connection,"INSERT INTO basicChecks (feels,health,temperature,meals,f_cId,create_date) VALUES($feels,$health,$temperature,$meals,$child_num,'$todayHMS')")
    // if($query){
    //     $result = {'result'=>'success'};
    // }else{
    //     $result = {'result'=>'failed'};
    // }
    $result = {'result'=>'test'};
//   mysqli_close($connection);
   echo $callback. "(" . json_encode($result) . ")";
    
?>