<?php
	//기본은 최근순 정렬
	$result = array();
	$childID = $_GET['childID'];
  	$callback = $_GET['callback'];
  	$resultData = 'failed';
	$registDay = date("Y-m-d");

	
    // 오래된순 정렬
  	$asc = $_GET['asc'];


	// 현재php파일의 경로 찾기
	$p = dirname(__FILE__);	// /home/ubuntu/workspace/laravel/public/mobile
	
	// 이미지 저장할 베이스 폴더경로
	$basePath = "/home/ubuntu/workspace/laravel/public/img/album";   // /home/ubuntu/workspace/laravel/public/img/album
            
        // uploadPhoto.php에서 생성하는 사진파일명        	
    // $fileName = "childID_".$childID."_".$todayHMS.".jpg";        
    
    // 원아에 따라 다른 폴더명 생성하기 위한 폴더경로 및 폴더이름 변수
    $folderPath 	 = $basePath."/childID_".$childID."/";	 // ......../img/album /childID_2/
    // 	$todayFolderName = $FolderName.$childID."_".$today."/";  // /workspace/MyProject/ni/album/folder1/1_20170611/
    
    // 최종적으로 생성되는 이미지파일 경로 및 이름
    $filePath = $folderPath.$fileName;
    
              	
  	

    // 현재php파일의 경로 찾기
	$p = dirname(__FILE__);	// /home/ubuntu/workspace/laravel/public/mobile
	
	// 이미지 저장할 베이스 폴더경로
	$basePath = "/home/ubuntu/workspace/laravel/public/img/album";   // /home/ubuntu/workspace/laravel/public/img/album

	
	
////////////////////////////////////

	// 데이터베이스 연결
	$connection = mysqli_connect("localhost", "root", "", "myapp");
	$connection->set_charset("utf8");

	// 오래된순 값이 있다면
	if(isset($asc)){
	$query = mysqli_query($connection, 
"select * from albums where f_childId = $childID order by id asc");
	} else{
			$query = mysqli_query($connection, 
"select * from albums where f_childId = $childID order by id desc");
	}

	// echo "alert('test');";

///////////////////
	if($query){
		
		// echo "alert('성공');";
		
		$resultData = "success";
    	$data = array();

		// DB값 갯수 (length)
		$num = mysqli_num_rows($query);

		for($i = 0; $i < $num; $i++){
		  mysqli_data_seek($i);
		  $row = mysqli_fetch_array($query);

		  $id = $row['id'];
		  $photoName = $row['photoName'];
		  $photoMemo = $row['photoMemo'];
		
		  $folderPath = explode("(", $row['photoName']);
		  $folderPath = $folderPath[0];
			
		  $data[$i] = array();
		  $data[$i]['id'] = $id;
		  $data[$i]['photoName'] = $photoName;
		  $data[$i]['photoMemo'] = $photoMemo;
		
				//파일명에서 registDay 추출하기
		  $registDay = explode("_", $photoName);
				// 년-월-일 시:분:초.jpg 에서 .jpg 떼어내기
		  $registDay = explode(".", $registDay[2]);
		
			
		  $data[$i]['registDay'] = $registDay[0];
		
		}
	  }
else{
	
}

	$result = array('result' => $resultData, 'data' => $data);
	mysqli_close($connection);
	echo $callback. "(" . json_encode($result) . ")";

?>