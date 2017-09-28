<?php
	$result 		= array();
	$resultData 	= "failed";
	$callback 		= $_GET['callback'];
	$childID 		= $_GET['childID'];
	$uploader	    = $_GET['uploader'];
	$comment 		= $_GET['comment'];
	$attendanceData = $_GET['attendanceData'];
	$dateValue		= $_GET['dateValue'];
	// $todayHMS 	= date("Y-m-d");
	
	// test
	// echo "alert('{$childNumArray[2]}');";
	// echo "alert('{$uploader}');";
	// echo "alert('{$attendanceData[2]}');";
	
	$connection = mysqli_connect("localhost", "root", "", "myapp");
	mysqli_query("set names utf8");

	// 오늘 등록한 값이 있는지 판별
	$query = mysqli_query($connection, 
		"select * from attendanceCheck where childNum = $childID and regist_day = '$dateValue'");

	$num = mysqli_num_rows($query);

	// **** test임, 수정해야됨! ****  test : 오늘값이 하나도 없다면 등록.
	if($num == 0){
		// (학부모) 출석값 등록
			mysqli_query($connection, "insert into 
			attendanceCheck(childNum, uploaderPosition, attendanceValue, regist_day) values
			($childID, $uploader, $attendanceData, '$dateValue')");
		
		mysqli_query($connection, "insert into 
			comments(childNum, teacherTrue, comment, regist_day) values
			($childID, $uploader, '$comment', '$dateValue')");
	} else{
		// (학부모) 출석값 업데이트
			mysqli_query($connection, "update attendanceCheck 
			set uploaderPosition = $uploader, attendanceValue = $attendanceData
				where regist_day = '$dateValue' and childNum = $childID");
		
			mysqli_query($connection, "insert into 
			comments(childNum, teacherTrue, comment, regist_day) values
			($childID, $uploader, '$comment', '$dateValue')");
				
	}

	$result = array('result' => $resultData);	
	mysqli_close($connection);
	echo $callback. "(" . json_encode($result) . ")";

?>