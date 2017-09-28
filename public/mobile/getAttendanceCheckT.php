<?php
	$result = array();
	$callback = $_GET['callback'];
	$childIdArray 	= $_GET['childIdArray'];
	$todayHMS 	= date("Y-m-d");
	$cnt = $_GET['cnt'];


	// 데이터베이스 연결
	$connection = mysqli_connect("localhost", "root", "", "myapp");
	mysqli_query("set names utf8");
	

	// 결과값을 담을 변수
	$data = array();

	
	for($i = 0; $i < $cnt; $i++){
		
  	  $query = mysqli_query($connection, 
		"SELECT * FROM attendanceCheck 
		where childNum = $childIdArray[$i] and regist_day = '$todayHMS'");
	  mysqli_data_seek($i);
	  $row = mysqli_fetch_array($query);

	  $id = $row['id'];
	  $childID = $row['childNum'];
	  $uploaderPosition = $row['uploaderPosition'];
	  $attendanceValue = $row['attendanceValue'];
	  $registDay = $row['regist_day '];

	  $data[$i] = array();

	  $data[$i]['id'] = $id;
	  $data[$i]['childID'] = $childID;
	  $data[$i]['uploaderPosition'] = $uploaderPosition;
	  $data[$i]['attendanceValue'] = $attendanceValue;
	  $data[$i]['registDay'] = $registDay;
	}
	  

	$result = array('data' => $data);
	mysqli_close($connection);
	echo $callback. "(" . json_encode($result) . ")";

?>