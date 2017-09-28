<?php
   require_once "./DB_Manager.php";
   $dbo = connect();
   
   $result = array();
   $memoType = $_GET['memoType'];

    
   // 데이터베이스 연결
   $connection = mysqli_connect("localhost", "root", "", "myapp");
    $connection->set_charset("utf8");

   if($memoType == 1){
      $callback = $_GET['callback'];
      $childID  = $_GET['childID'];
      $user_num = $_GET['user_num'];
      $textMemo = $_GET['textMemo'];
      $textTitleMemo = $_GET['textTitleMemo'];
      $memoType = $_GET['memoType'];
      $memoCategory = $_GET['memoCategory'];
      $todayHMS = date("Y-m-d (H:i:s)");
      $today = date("Y-m-d");
      $sqlToday = "%".$today."%";
      $dateValue = $_GET['dateValue'];
      $sqlDateValue = "%".$dateValue."%";
      
      $photoNamesArray = $_GET['photoNamesArray'];
      
      
      
      
      if($memoCategory == 1){
         
            // 오늘 날짜의 값이 있는지없는지 구하기
         $sql = "SELECT * FROM memos WHERE f_childId = :childID AND memoCategory = :memoCategory AND memoType = :memoType AND create_date LIKE :sqlDateValue";
                  $stt = $dbo->prepare($sql, array(PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL));
                  $stt->execute(array(
                                       ':childID' => $childID,
                                       ':memoCategory' => 1,
                                       ':memoType' => 1,
                                       ':sqlDateValue'=>$sqlDateValue
                                       ));
         $rowCount = $stt->rowCount();
         
         $qqq = sizeof($textMemo);
          

            // echo "alert('$todayHMS');";
            // echo "alert('$dateValue');";
          
                  // 알림장 insert메모 관련, 오늘작성한 글이 없다면 insert
         if($rowCount == 0) {
            // echo "alert($dateValue);";
            
            // echo "alert('$textMemo');";
            // echo "alert('$memoType');";
            // echo "alert('$childID');";
            // echo "alert('$user_num');";
            // echo "alert('$dateValue');";
            // echo "alert('$memoCategory');";
            // echo "alert('$textTitleMemo');";
            
               
            
               $query = mysqli_query($connection, 
               "INSERT INTO memos(comment, memoType, f_childId, f_userId, create_date, memoCategory, title) VALUES('$textMemo', $memoType, $childID, $user_num, '$dateValue',$memoCategory, '$textTitleMemo')");
            
                     // 가장 최근에 등록된 memo의 Id값 가져오기   
               $cnt =  sizeof($photoNamesArray);
               $query = mysqli_query($connection, "SELECT memoId from memos where memoCategory = 1 AND memoType = 1 order by memoId desc limit 1");
               mysqli_data_seek($i);
               $row = mysqli_fetch_array($query);
               
               // 가장 최근에 등록한 알림장의 알림내용memoId
               $f_memoId = $row['memoId'];
               
         
               // 사진 memoId 변경
               
               // insert 하기 전에 기존의 사진데이터 삭제
               $query = mysqli_query($connection,
               "DELETE FROM phoCmemos WHERE f_memoId = $f_memoId");
               
               
               for($i = 0; $i < $cnt; $i++){
               $photoName = $photoNamesArray[$i];
               
               // $query = mysqli_query($connection,
               // "UPDATE albums SET 
               // f_memoId = $f_memoId where photoName = '$photoName'");
               
               // 여기에서 메모와 사진관의 관계를 정의
               // 현재 새롭게 만든 phoCmemos라는 테이블에 
               // memo와 사진의 관계를 insert한다.
               // 만약 해당 날짜에 있는 사진을 변경을 하고 싶다면
               // update를 하도록 하고
               // 만약 사진을 추가를 하는것이라고 하면
               // insert한다.
               
               $query_Photo = mysqli_query($connection,
               "SELECT id FROM albums
               WHERE photoName = '$photoName'");
               
               $photoId = mysqli_fetch_array($query_Photo);
               $photoId = $photoId['id'];
               
               // phoCmemos 에 insert 하기
               $query = mysqli_query($connection,
               "INSERT INTO phoCmemos VALUES($f_memoId, $photoId)");
            }
            
                  /* 참조키,외래키 특성 때문에 memo를 업데이트하면 이미 업로드한 사진은 지울수없는듯하다.
                   업데이트가아니라 새로운 레코드를 생성하는것이 더 나을지도 모르겠다.  */
                  // 오늘 작성한 글이 있다면 update
         } else{
            $cnt =  sizeof($photoNamesArray);
            // echo "alert('uuuuupu');";
            
            // $query = mysqli_query($connection, "SELECT memoId from memos where memoCategory = 1 AND memoType = 1 AND f_childId = $childID AND create_date = $sqlDateValue");
            // mysqli_data_seek($i);
            // $row = mysqli_fetch_array($query);
            
            
            // 가장 최근에 등록한 알림장의 알림내용memoId
            $sql = "SELECT memoId from memos where memoCategory = 1 AND memoType = 1 AND f_childId = :childID AND create_date like :sqlDateValue";
            $stt = $dbo->prepare($sql, array(PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL));
            $stt->execute(array(
                                       ':childID'  => $childID,
                                       ':sqlDateValue' => $sqlDateValue
                                    )
                               );
            
            $f_memoId = $stt->fetchAll();
            $f_memoId = $f_memoId[0]['memoId'];
            
            
            // echo "alert('메모아이디 : $f_memoId');";
            
            
            $sql = "UPDATE memos SET
                   comment = :textMemo, create_date = :dateValue, title = :textTitleMemo
                   where f_childId = :childID 
                   AND f_userId = :user_num 
                   AND memoCategory = :memoCategory
                   AND memoType = :memoType
                   AND create_date like :sqlToday";
                  $stt = $dbo->prepare($sql, array(PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL));
                  $stt->execute(array(
                                       ':textMemo' => $textMemo,
                                       ':dateValue' => $dateValue,
                                       ':childID'  => $childID,
                                       ':memoCategory' =>$memoCategory,
                                       ':memoType' => $memoType,
                                       ':user_num' => $user_num,
                                       ':sqlToday' => $sqlDateValue,
                                       ':textTitleMemo' => $textTitleMemo
                                       
                                    )
                               );
                               
              
               
               // 사진 memoId 변경
               $cnt =  sizeof($photoNamesArray);
               
               // insert 하기 전에 기존의 사진데이터 삭제
               $query = mysqli_query($connection,
               "DELETE FROM phoCmemos WHERE f_memoId = $f_memoId");
               
               for($i = 0; $i < $cnt; $i++){
               $photoName = $photoNamesArray[$i];
               
               // $query = mysqli_query($connection,
               // "UPDATE albums SET 
               // f_memoId = $f_memoId where photoName = '$photoName'");
               
               // 여기에서 메모와 사진관의 관계를 정의
               // 현재 새롭게 만든 phoCmemos라는 테이블에 
               // memo와 사진의 관계를 insert한다.
               // 만약 해당 날짜에 있는 사진을 변경을 하고 싶다면
               // update를 하도록 하고
               // 만약 사진을 추가를 하는것이라고 하면
               // insert한다.
               
               $query_Photo = mysqli_query($connection,
               "SELECT id FROM albums
               WHERE photoName = '$photoName'");
               
               $photoId = mysqli_fetch_array($query_Photo);
               $photoId = $photoId['id'];
               
               // phoCmemos 에 insert 하기
               $query = mysqli_query($connection,
               "INSERT INTO phoCmemos VALUES($f_memoId, $photoId)");
            }
         }
        
         
         
      } else{
         
         // echo "alert('댓글작성');";
         // echo "alert('$dateValue');";
         
         $query = mysqli_query($connection, "INSERT INTO memos(comment, memoType, f_childId, f_userId, create_date, memoCategory) 
         VALUES('$textMemo', $memoType, $childID, $user_num,'$dateValue',$memoCategory)");
      }

      if($query){
         $resultData = "success";
      }

      $result = array('result' => $resultData);
   }else{
      $callback = $_GET['callback'];
      $childID  = $_POST['childID'];
      $user_num = $_POST['user_num'];
      $memoType = $_POST['memoType'];
      $memoCategory = $_POST['memoCategory'];
      // (이 php파일이 존재하는 현재 경로)
      $img = $_POST['imgUpload'];   // 캔버스에서 가져오는 그림
      $childID = $_POST['childID'];         // 원아 ID값
      // 사진
      $todayHMS = date("Y-m-d H:i:s");
      $registDay = date("Y-m-d");
      $fileName = $todayHMS . ".png";

      $imgex = explode(";base64,", $img);
      $data = base64_decode($imgex[1]);

      // 폴더명
      $folderName ="../img/memo/child".$childID;
      // php로 터미널명령어 사용해서 폴더 만들기
      // 생성되는 폴더의 사용권한을 설정해야한다.

      // 해당 이름의 폴더가 이미 있다면 그냥 넘어간다.
      
      system("mkdir $folderName");
      system("chmod 777 $folderName");

     
      // 폴더 경로
      $folderPath = $folderName."/";
   
      $success = file_put_contents($folderPath.$fileName, $data);



      $query = mysqli_query($connection, "INSERT INTO memos(comment, memoType, f_childId, f_userId, create_date,memoCategory) values('$fileName', $memoType, $childID, $user_num,'$registDay',$memoCategory)");

      if($query){
         $resultData = "success";
      } else{
         $resultData = "faild";
      }

      $result = array('result' => $resultData,'user_num'=>$user_num,'memoCategory'=>$childID);   
      
   }
   
   mysqli_close($connection);
   echo $callback. "(" . json_encode($result) . ")";
?>
