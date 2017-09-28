<?php

 require_once "./DB_Manager.php";

 $dbo = connect(); // connect db
 $callback = $_GET['callback']; 
 $teacher_num = $_GET['user_num']; // user's num
 $resultData = 'failed';
 
 
 // 원아정보를 가져온다.
 // 디바이스의 고유ID도 들고 온다.
 
 try{
  
    //query
    // $sql = "SELECT d.*, c.cName as 'childName', c.imgName as 'childPhoto' FROM devices d, ";
    // $sql+= "(SELECT * FROM childrens WHERE f_classId = (SELECT cId FROM classrooms WHERE mainTname = ";
    // $sql+= "(SELECT name FROM users WHERE id = :mainTid) OR subTname = (SELECT name FROM users WHERE id = :subTid))) c";
    // $sql+= " WHERE d.f_cId = c.cId";
    
    $sql = "SELECT d.*, c.cName as 'childName', c.imgName as 'childPhoto' FROM devices d, 
    (SELECT * FROM childrens WHERE f_classId = (SELECT cId FROM classrooms WHERE mainTname = 
    (SELECT name FROM users WHERE id = :mainTid) OR subTname = (SELECT name FROM users WHERE id = :subTid))) c
    WHERE d.f_cId = c.cId";
 
    //
    $stt = $dbo->prepare($sql,array(PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL));
    $stt->execute(array(
              ':mainTid' => $teacher_num,
              ':subTid'  => $teacher_num
    ));
  
    $data = $stt->fetchAll();
    
    $resultData = 'true';
    $result = array('result'=> $resultData,'data'=>$data);
   }catch(PDOException $e){
    exit("접속불가 : {".$e->getMessage()."}");
  }
 
  $dbo = null; // PDO connection closing
  echo $callback."(".json_encode($result).")";
?>