<?php
	$callback = $_GET['callback'];
	$childNumArray = $_GET['childNumArray'];
	$uploader	   = $_GET['uploader'];
	$attendanceData = $_GET['attendanceData'];
	$todayHMS 	= date("Y-m-d");
	
	$cnt = sizeOf($childNumArray);

	// test
	// echo "alert('{$childNumArray[2]}');";
	// echo "alert('{$uploader}');";
	// echo "alert('{$attendanceData[2]}');";
	
	$connection = mysqli_connect("localhost", "root", "", "myapp");
	mysqli_query("set names utf8");

	// 오늘 등록한 값이 있는지 판별
	$query = mysqli_query($connection, 
		"select * from attendanceCheck where uploaderPosition = 2 AND regist_day = '$todayHMS'");

	$num = mysqli_num_rows($query);

    // **** test임, 완벽하지 않을수있음! ****  test : 해당position의 오늘값이 하나도 없다면 등록.
	if($num == 0){
		// (교사) 출석값 등록
		for($i = 0; $i < $cnt; $i++){
			mysqli_query($connection, "insert into 
			attendanceCheck(childNum, uploaderPosition, attendanceValue, regist_day) values
			($childNumArray[$i], $uploader, $attendanceData[$i], '$todayHMS')");
		}
	} else{
		// (교사) 출석값 업데이트
		for($i = 0; $i < $cnt; $i++){
			mysqli_query($connection, "update attendanceCheck 
			set childNum = $childNumArray[$i], uploaderPosition = $uploader, 
			    attendanceValue = $attendanceData[$i] 
				where regist_day = '$todayHMS' and childNum = $childNumArray[$i]");
		}
	}

	// $result = array('result' => $resultData);	
	mysqli_close($connection);
	echo $callback. "(" . json_encode($result) . ")";

?>