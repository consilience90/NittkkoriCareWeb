<?php
    $callback = $_GET['callback'];
    $user_num = $_GET['user_num'];
    $childID = $_GET['childID'];
    $dateValue = $_GET['dateValue'];
    
    $data = array();
    
    	// 데이터베이스 연결
	$connection = mysqli_connect("localhost", "root", "", "myapp");
	$connection->set_charset("utf8");

	    // 오늘날짜의 값 있는지 확인하기
	$query = mysqli_query($connection, "SELECT * FROM basicChecks WHERE create_date = '$dateValue' AND f_cId = $childID");
    $num = mysqli_num_rows($query);
    
    
    
        //오늘날짜의 값이 있다면
    if($num > 0 ){
        $data = mysqli_fetch_array($query);
        $resultData = "success";
    }  else{
        $resultData = "faild";
    }
    
    $result = array('result' => $resultData, 'data' => $data);
	mysqli_close($connection);
	echo $callback. "(" . json_encode($result) . ")";

?>