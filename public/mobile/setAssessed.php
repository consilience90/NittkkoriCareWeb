<?php

    require_once "./DB_Manager.php";
    $dbo = connect();

    $callback=$_GET['callback'];
    $user_num = $_GET['user_num']; // 선생의 고유번호
    $child_num = $_GET['childID']; // 원생의 고유번호
    $developCheckArrayId = $_GET['developCheckArrayID']; 
    $developCheckArrayValue = $_GET['developCheckArrayValue']; // 평가항목의 평가점수 -> 배열로 넘어온다.
    $basicCheck = $_GET['basicChecks'];
    $feels = $basicCheck[0]; // basic check 감정평가 점수
    $health = $basicCheck[1]; // basic check 건강평가 점수
    $temperature = $basicCheck[2]; // basic check 체온 점수
    $meals = $basicCheck[3]; // basic check 식사량
    $dateValue = $_GET['dateValue'];

    $cnt = sizeof($developCheckArrayId);
    // echo "alert('서버 for문카운팅(항목length) : $cnt');";

    

    // assesseds 해당 날짜의 값이 있는지없는지 구하기
    $sql = "SELECT * FROM assesseds where create_date = :dateValue AND f_cId = :child_num AND f_tId = :user_num";
            $stt = $dbo->prepare($sql, array(PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL));
            $stt->execute(array(
                                ':dateValue' => $dateValue,
                                ':child_num' => $child_num,
                                ':user_num' => $user_num
                                )
                         );
    $rowCount = $stt->rowCount();

    // echo "alert('서버쪽 인설트 cnt : $cnt');";
    
    if($rowCount == 0){ // 오늘 값이 없다면
      for($i = 0; $i < $cnt; $i++){

      $asId = (int)$developCheckArrayId[$i]; // 평가항목 id
      $score = (int)$developCheckArrayValue[$i];    // 평가항목의 점수



      $sql = "INSERT INTO assesseds(f_tId, f_cId, f_asId, score, create_date) VALUES(:user_num, :child_num, :asId, :score, :dateValue)";
      $stt = $dbo->prepare($sql, array(PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL));
      $stt->execute(array(
                          ':user_num' => $user_num,
                          ':child_num' => $child_num,
                          ':asId' => $asId,
                          ':score' => $score,
                          ':dateValue' => $dateValue
                          )
                  );
      }

    }
    else{ // 오늘값이 있다면

        // echo "alert('유저넘버 : $user_num');";
        // echo "alert('애번호 : $child_num');";
        // echo "alert('날값 : $dateValue');";
        // echo "alert('cnt값 : $cnt');";
        
        
      for($i = 0; $i < $cnt; $i++){

        $asId = (int)$developCheckArrayId[$i]; // 평가항목 id
        $score = (int)$developCheckArrayValue[$i];    // 평가항목의 점수
        // echo "alert('항목번호 : $asId');";
        // echo "alert('값 : $score');";

          $sql = "UPDATE assesseds SET
          f_tId = :user_num, f_cId = :child_num, f_asId = :asId, score = :score, create_date = :dateValue
          WHERE create_date = :dateValue AND f_cId = :child_num AND f_asId = :asId AND f_tId = :user_num";

          $stt = $dbo->prepare($sql, array(PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL));
          $stt->execute(array(
                              ':user_num' => $user_num,
                              ':child_num' => $child_num,
                              ':asId'=>$asId,
                              ':score'=>$score,
                              ':dateValue'=>$dateValue,
                              )
                       );
       }
    }




/////////////////

    // 베이직체크 해당 날짜의 값이 있는지없는지 구하기
    $sql = "SELECT * FROM basicChecks where create_date = :dateValue AND f_cId = :child_num";
            $stt = $dbo->prepare($sql, array(PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL));
            $stt->execute(array(
                                ':dateValue' => $dateValue,
                                ':child_num' => $child_num,
                                )
                         );

    $rowCount = $stt->rowCount();

    // // 해당날짜의 값이 없다면 insert
    if($rowCount == 0){

        $user_num = (int)$user_num;
        $child_num  = (int)$child_num;

        $feels = (int)$feels;
        $health = (int)$health;
        $temperature = (int)$temperature;
        $meals = (int)$meals;

        $sql = "INSERT INTO basicChecks(feels,health,temperature,meals,f_cId,create_date)
        VALUES(:feels,:health, :temperature, :meals, :child_num, :dateValue)";
        $stt = $dbo->prepare($sql, array(PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL));
        $stt->execute(array(
                            ':feels' => $feels,
                            ':health' => $health,
                            ':temperature'=>$temperature,
                            ':meals'=>$meals,
                            ':child_num'=>$child_num,
                            ':dateValue'=>$dateValue
                            )
                     );
    }
    else{ // 해당 날짜의 값이 있다면 업데이트
        $user_num = (int)$user_num;
        $child_num  = (int)$child_num;

        $feels = (int)$feels;
        $health = (int)$health;
        $temperature = (int)$temperature;
        $meals = (int)$meals;

        $sql = "UPDATE basicChecks SET
        feels = :feels, health = :health, temperature = :temperature, meals = :meals ,f_cId = :child_num, create_date = :dateValue
        WHERE create_date = :dateValue AND f_cId = :child_num";
            $stt = $dbo->prepare($sql, array(PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL));
            $stt->execute(array(
                                ':feels' => $feels,
                                ':health' => $health,
                                ':temperature'=>$temperature,
                                ':meals'=>$meals,
                                ':child_num'=>$child_num,
                                ':dateValue'=>$dateValue
                                )
                         );
    }









//////////





    $result = array('result' => $resultData, 'data' => $data);
    echo $callback."(".json_encode($result).")";
?>