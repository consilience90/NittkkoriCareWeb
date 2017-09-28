<?php
	

	$result = array();
	$callback = $_GET['callback'];
	$childID = $_POST['childID'];
	$user_num = $_POST['user_num'];
	$photoMemo = $_POST['photoMemo'];
	$viewPhotoDataUrl = $_POST['viewPhotoDataUrl'];
	$today = date("Y-m-d");
	$todayHMS = date("Y-m-d H:i:s");
	$fileName = "childID_".$childID."_".$todayHMS.".jpg";

	

	// 현재php파일의 경로 찾기
	$p = dirname(__FILE__);	// /home/ubuntu/workspace/laravel/public/mobile
	
	// 이미지 저장할 베이스 폴더경로
	$basePath = "/home/ubuntu/workspace/laravel/public/img/album";   // /home/ubuntu/workspace/laravel/public/img/album
	

	// 원아에 따라 다른 폴더명 생성하기 위한 폴더경로 및 폴더이름 변수
	$folderPath 	 = $basePath."/childID_".$childID."/";	 // ......../img/album/childID_2/
// 	$todayFolderName = $FolderName.$childID."_".$today."/";  // /workspace/MyProject/ni/album/folder1/1_20170611/

	// 최종적으로 생성되는 이미지파일 경로 및 이름
	$filePath = $folderPath.$fileName;
		
	// 폴더 권한변경
	system("mkdir $basePath");
	system("chmod 777 $basePath");

	system("mkdir $folderPath");
	system("chmod 777 $folderPath");

	$searchName = ";base64";
		
	// Url에 ;base64 라는 문자열이 포함되는지 판단하기
	if(strpos($viewPhotoDataUrl, $searchName) !== false) {
			// 이미지 base64코드에서 필요한 부분만 잘라내기
		$imgex = explode(";base64,", $viewPhotoDataUrl);
		$data = base64_decode($imgex[1]);
		
		file_put_contents($folderPath.$fileName, $data);	
		// chmod($todayFolderNameS.$fileName, 0777);
		system("chmod 777 $filePath");

		$connection = mysqli_connect("localhost", "root", "", "myapp");
		$connection->set_charset("utf8");

		$query = mysqli_query($connection, 
		"INSERT INTO albums(photoName, f_childId, create_date, photoMemo)
		VALUES('$fileName', $childID, '$todayHMS', '$photoMemo')");

		if($query){
			// echo "alert('ttttttt');";
			$resultData = "success";
		}
		else{
			// echo "alert('ffffffff');";
			unlink($folderPath.$fileName);
		}
		
	} else {
		// base64 코드가 아니면 업로드 할 수 없다
		echo "alert('アップロードできません（is not base64_Code）');";
		$resultData = "failed";
	}	  


	$result = array('result' => $resultData);

	
	mysqli_close($connection);
	
    echo $callback."(".json_encode($result).")";


?>
