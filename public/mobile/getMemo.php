<?php
   require_once "./DB_Manager.php";

   $dbo = connect();
   $data = array();
   $callback = $_GET['callback'];
   $childID    = $_GET['childID'];
   $memoType = $_GET['memoType'];
   $memoCategory = $_GET['memoCategory'];
   $user_num = $_GET['user_num'];
   $resultData = 'failed';
   $dateValue    = $_GET['dateValue'];
   $sqlDateValue = "%".$dateValue."%";
   $todayHMS    = date("Y-m-d H:i:s");

    

    if($memoType == 1){ // (텍스트타입 불러오기 PDO)
        if($memoCategory == 1){ // (알림장 내용 불러오기)
            $data0 = array();   // 알림장 제목
            $data1 = array();   // 알림장 내용
            $data2 = array();   // 알림장 사진
            
            
            // 알림장 memo
            $sql = "SELECT m.*, u.position FROM memos m, users u WHERE m.f_userId = u.id AND m.memoCategory = :memoCategory AND m.memoType = :memoType AND m.create_date LIKE :sqlDateValue AND f_childId = :childID ORDER BY memoId ASC";
            $stt = $dbo->prepare($sql, array(PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL));
            $stt->execute(array(
                                ':memoCategory'=>$memoCategory,
                                ':memoType'=>$memoType,
                                ':sqlDateValue'=>$sqlDateValue,
                                ':childID'=>$childID
                                )
                         );
            $row = $stt->fetchAll();
            $data1 = $row;
            $data0 = $data1[0]['title'];
            
            
            $t_id = $row[0]['f_userId'];
            
            
            // 알림장 album
            
            // 원본
            // $sql = "SELECT  a.* FROM albums a, memos m 
            //         WHERE a.f_childId = :childID
            //         AND a.f_memoId = 
            //         (SELECT memoId FROM memos 
            //         WHERE memoType = :memoType 
            //         AND memoCategory = :memoCategory 
            //         AND f_childId = :childID 
            //         AND f_userId = :user_num
            //         AND create_date LIKE :sqlDateValue 
            //         order by memoId desc limit 1) group by photoName";
            		
            		
            // $stt = $dbo->prepare($sql, array(PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL));
            // $stt->execute(array(
            //                     ':childID'      => $childID,
            //                     ':memoType'     => $memoType,
            //                     ':memoCategory' => $memoCategory,
            //                     ':user_num'     => $t_id,
            //                     ':sqlDateValue' => $sqlDateValue,
            //                     )
            //              );
            // $row = $stt->fetchAll();
            // $data2 = $row;
            
            
            // 수정
            // memoId에 해당하는 사진id 구하기
            $f_memoId = $row[0]['memoId'];
            
            $sql = "SELECT * FROM phoCmemos WHERE f_memoId = :f_memoId";
            		
            $stt = $dbo->prepare($sql, array(PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL));
            $stt->execute(array(
                                ':f_memoId'      => $f_memoId
                                )
                         );
            $row = $stt->fetchAll();
            
            
            // 사진 size 구하기
            $cnt = sizeof($row);
            // echo "alert('cnt 는 : $cnt');";
            for($i = 0; $i < $cnt; $i++){
                // echo "alert('i는 : $i');";
                
                $f_albumId = $row[$i]['f_albumId'];
                
                // echo "alert('사진아이디 $f_albumId');";
                
                $sql = "SELECT photoName FROM albums WHERE id = :id";
                $stt = $dbo->prepare($sql, array(PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL));
                $stt->execute(array(
                                    ':id' => $f_albumId // albumID가 아니라 for문밖에서 memoID로 검색해보자.
                                    )
                         );
                $temp = $stt->fetchAll();
                
                // echo "alert('Name직전 i값 $i');";
                
                $photoName = $temp[0]['photoName'];
                
                // echo "alert('서버쪽 $photoName');";
                
                $data2[$i]['photoName'] = $photoName;
            }
            
            
            
            // $sql = "SELECT * FROM albums WHERE id = :id";
            		
            // $stt = $dbo->prepare($sql, array(PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL));
            // $stt->execute(array(
            //                     ':f_memoId'      => $f_memoId
            //                     )
            //              );
            // $row = $stt->fetchAll();
            // $data2 = $row;
            
            
            
            
            $result = array('result' => $resultData, 'data0' => $data0, 'data1' => $data1, 'data2' => $data2);
            echo $callback."(".json_encode($result).")";
        } else if($memoCategory == 2){ // (알림장 댓글 불러오기)
            /*
            // $dsn = 'mysql:host=localhost; dbname=myapp; charset=utf8;';
            // $user = 'root';
            // $pass = '';
            // $db = new PDO($dsn, $user, $pass);
            
            // $sqlDateValue = "%".$dateValue."%";
            // $sql = "SELECT m.*, u.position FROM memos m, users u WHERE m.f_userId = u.id AND m.memoCategory = :memoCategory AND m.memoType = :memoType AND m.create_date LIKE ':sqlDateValue' AND f_childId = :childID ORDER BY memoId DESC";
            // $stt = $db->prepare($sql, array(PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL));
             
            // $stt->execute(array(
            //                     ':memoCategory'=>$memoCategory,
            //                     ':memoType'=>$memoType,
            //                     ':sqlDateValue'=>$sqlDateValue,
            //                     ':childID'=>$childID
            //                   ));
                              
            // $rowCount = $stt->rowCount();
            
            // echo "alert('$rowCount')";
            
            // $row = $stt->fetchAll();
            
            // return json_encode($row);
            */
            // echo "alert('$sqlDateValue');";
            $sql = "SELECT m.*, u.position FROM memos m, users u WHERE m.f_userId = u.id AND m.memoCategory = :memoCategory AND m.memoType = :memoType AND m.create_date LIKE :sqlDateValue AND f_childId = :childID ORDER BY memoId ASC";
            $stt = $dbo->prepare($sql, array(PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL));
            $stt->execute(array(
                                ':memoCategory'=>$memoCategory,
                                ':memoType'=>$memoType,
                                ':sqlDateValue'=>$sqlDateValue,
                                ':childID'=>$childID
                                )
                         );
            $row = $stt->fetchAll();
            $data = $row;
            
            $result = array('result' => $resultData, 'data' => $data);
            echo $callback."(".json_encode($result).")";
           
            
        } else if($memoCategory == 4){  // (단순 메모 불러오기)
            // $query = mysqli_query($connection, "SELECT * FROM memos WHERE f_userId = $user_num AND f_childId = $childID AND create_date = '$dateValue' AND memoType = $memoType AND memoCategory = $memoCategory ORDER BY memoId desc");
            $sql = "SELECT * FROM memos WHERE f_userId = :user_num AND f_childId = :childID AND create_date LIKE :sqlDateValue AND memoType = :memoType AND memoCategory = :memoCategory ORDER BY memoId desc";
            $stt = $dbo->prepare($sql, array(PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL));
            $stt->execute(array(
                                ':user_num' => $user_num,
                                ':childID' => $childID,
                                ':memoCategory'=>$memoCategory,
                                ':memoType'=>$memoType,
                                ':sqlDateValue'=>$sqlDateValue,
                                )
                         );
            $row = $stt->fetchAll();
            $data = $row;
            
            $result = array('result' => $resultData, 'data' => $data);
            echo $callback."(".json_encode($result).")";
        }
    }else{  // (그림타입 불러오기 mysqli)
        
        
        // 데이터베이스 연결
        $connection = mysqli_connect("localhost", "root", "", "myapp");
        $connection->set_charset("utf8");
        
        $query = mysqli_query($connection, "SELECT * FROM memos WHERE memoType = 2 AND f_userId = $user_num AND f_childId = $childID AND create_date = '$dateValue' AND memoType = $memoType AND memoCategory = $memoCategory ORDER BY memoId desc");
        $path = "/img/memo/child";
        // 폴더명
        $folderName = $path.$childID."/";
        
          if($query){
          $resultData = "success";
          $data = array();
    
          // DB값 갯수 (length)
          $num = mysqli_num_rows($query);
          
    
          for($i = 0; $i < $num; $i++){
            mysqli_data_seek($i);
            $row = mysqli_fetch_array($query);
             $id = $row['memoId'];
             $textValue = $row['comment'];
            
            if($row['memoType'] == 1){
                $data[$i] = array();
                $data[$i]['id'] = $id;
                $data[$i]['textValue'] = $textValue;
            }else{
                $data[$i] = array();
                $data[$i]['id'] = $id;
                $data[$i]['imageName'] = $textValue;
                $data[$i]['imgPath'] = $folderName;
            }
          }
            $result = array('result' => $resultData, 'data' => $data);
    
         }else{
            $result = array('result' => $resultData);
         }
    
      mysqli_close($connection);
      echo $callback. "(" . json_encode($result) . ")";
        
        
    }

?>