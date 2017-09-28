<?php
  $result = array();
  $callback = $_GET['callback'];
  $user_num = $_GET['user_num'];
  $user_name = $_GET['user_name'];
  $resultData = 'failed';


  // 데이터베이스 연결
  $connection = mysqli_connect("localhost", "root", "", "myapp");
  $connection->set_charset("utf8");


  // users 의 position 값 뽑기
  $query = mysqli_query($connection, "SELECT position FROM users WHERE id = $user_num");
  $row = mysqli_fetch_array($query);
  
  
  // position 으로 교사 라고 판단될 경우
  if($row['position'] == 2){
    $query = mysqli_query($connection, 
  "SELECT * FROM childrens 
  WHERE f_classId = 
                    (SELECT cId FROM classrooms 
                    WHERE f_kId = 
                                    (SELECT f_kId FROM users 
                                    WHERE id = $user_num) 
                                    AND (mainTname = '$user_name' 
                                    OR subTname='$user_name'))");
     
  } 
  // position 으로 학부모 라고 판단될 경우
  else {
    $query = mysqli_query($connection,"SELECT * FROM childrens WHERE f_pId = $user_num");
    
    }

  
   
   
  if($query){
    $resultData = "success";
    $data = array();

  // DB값 갯수 (length)
    $num = mysqli_num_rows($query);

    for($i = 0; $i < $num; $i++){
      mysqli_data_seek($i);
      $row = mysqli_fetch_array($query);

     $childNum    = $row['cId'];
      $imageName = $row['imgName'];
     $childName = $row['cName'];
      $data[$i] = array();
      $data[$i]['imageName'] = $imageName;
      $data[$i]['childNum'] = $childNum;
      $data[$i]['childName'] = $childName;
    }
  }

  $result = array('result' => $resultData, 'data' => $data);
//   $result = array('result' =>'test');

  mysqli_close($connection);
  echo $callback. "(" . json_encode($result) . ")";

?>