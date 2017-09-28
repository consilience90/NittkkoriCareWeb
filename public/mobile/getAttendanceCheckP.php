<?php
	$result = array();
	$callback = $_GET['callback'];
	$childID = $_GET['childID'];
	$dateValue = $_GET['dateValue'];
	$todayHMS 	= date("Y-m-d");
	

	

	
	// 데이터베이스 연결
	$connection = mysqli_connect("localhost", "root", "", "myapp");
	mysqli_query("set names utf8");
	

	// 결과값을 담을 변수
	$data = array();

		$query = mysqli_query($connection, 
		"SELECT * FROM attendanceCheck 
		where childNum = $childID and regist_day = '$dateValue'");


	  mysqli_data_seek($i);
	  $row = mysqli_fetch_array($query);

	  $uploaderPosition = $row['uploaderPosition '];
	  $attendanceValue = $row['attendanceValue'];
	  $registDay = $row['regist_day '];

	  $data[$i] = array();

	  $data['id'] = $id;
	  $data['uploaderPosition'] = $uploaderPosition;
	  $data['attendanceValue'] = $attendanceValue;
	  $data['registDay'] = $registDay;
	
	  

	$result = array('data' => $data);
	mysqli_close($connection);
	echo $callback. "(" . json_encode($result) . ")";

?>