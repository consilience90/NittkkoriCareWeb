<?php
    require_once "./DB_Manager.php";
    
    $dbo = connect();
    $callback=$_GET['callback'];
    $data1 = array();
    $data2 = array();
    $user_num = $_GET['user_num']; // 선생의 고유번호
    $childID = $_GET['childID']; // 원생의 고유번호
    $dateValue = $_GET['dateValue'];    // 달력에서 받아오는 값
    $todayHMS  = date("Y-m-d"); // 오늘의 날짜를 가지고 옴
    $sqlDateValue = "%".$dateValue."%";
    $developValueYear = $_GET['developValueYear'];
    $developValueMonthText = $_GET['developValueMonthText'];
    $developValueDay = $_GET['developValueDay'];
    $position = $_GET['position'];


    // assesseds
    // assessments

    // int화 하지않으면 쿼리에 안들어가는듯하다....
    // $user_num = (int)$user_num;
    // $child_num = (int)$child_num;
    
    
    // 수업 체크항목 값 가져오기

    
    // $sql = "select m.assContent, e.* from assessments m, assesseds e 
    //         where f_cId = :childID 
    //         AND create_date = :dateValue 
    //         AND e.f_asId = m.assId";
    // $stt = $dbo->prepare($sql, array(PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL));
    // $stt->execute(array(
    //                     // ':user_num' => $user_num,
    //                     ':childID' => $childID,
    //                     ':dateValue' => $dateValue,
                        
    //                     )
    //              );
    // $row1 = $stt->fetchAll();
    
        // echo "alert('$position');";
    
    if($position == "parents"){
        $sql = "select ad.assId, ad.f_tId, ad.f_cId, ad.f_asId, ad.score, ad.create_date, am.assId as mentsAssId, am.assContent, am.f_actId from assesseds ad, (select * from assessments where assId IN( select f_assId from actContents where actId IN (select dp.f_actId from monthPlans m, weekPlans w, dayPlans d, dayContSums dp where m.mid = w.f_mId AND w.wId = d.f_wId and d.dId = dp.f_dId AND d.dayInfo = :developValueDay AND m.yearInfo = :developValueYear AND m.monthInfo = :developValueMonthText))) am WHERE ad.f_cId = :childID AND ad.f_asId = am.assId AND ad.create_date = :dateValue";
        
            $stt = $dbo->prepare($sql, array(PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL));
            $stt->execute(array(
                                
                                ':childID' => $childID,
                                ':developValueYear' => $developValueYear,
                                ':developValueMonthText' => $developValueMonthText,
                                ':developValueDay' => $developValueDay,
                                ':dateValue' => $dateValue
                                )
                        );
            $row1= $stt->fetchAll();    
        $data1 = $row1;
    } else{
        $sql = "select ad.assId, ad.f_tId, ad.f_cId, ad.f_asId, ad.score, ad.create_date, am.assId as mentsAssId, am.assContent, am.f_actId from assesseds ad, (select * from assessments where assId IN( select f_assId from actContents where actId IN (select dp.f_actId from monthPlans m, weekPlans w, dayPlans d, dayContSums dp where m.mid = w.f_mId AND w.wId = d.f_wId and d.dId = dp.f_dId AND d.dayInfo = :developValueDay AND m.yearInfo = :developValueYear AND m.monthInfo = :developValueMonthText))) am WHERE ad.f_tId = :user_num AND ad.f_cId = :childID AND ad.f_asId = am.assId AND ad.create_date = :dateValue";
        
            $stt = $dbo->prepare($sql, array(PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL));
            $stt->execute(array(
                                ':user_num' => $user_num,
                                ':childID' => $childID,
                                ':developValueYear' => $developValueYear,
                                ':developValueMonthText' => $developValueMonthText,
                                ':developValueDay' => $developValueDay,
                                ':dateValue' => $dateValue
                                )
                        );
            $row1= $stt->fetchAll();    
        $data1 = $row1;
    }
    
    // 원아 상태 체크항목 값 가져오기
    $sql = "SELECT * FROM basicChecks WHERE f_cId = :childID AND create_date = :dateValue";
    $stt = $dbo->prepare($sql, array(PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL));
    $stt->execute(array(
                        ':childID' => $childID,
                        ':dateValue'=>$dateValue
                        )
                 );
    $row2 = $stt->fetchAll();
    $data2 = $row2;
    
    
    
    
    $result = array('data1' => $data1, 'data2' => $data2);
    echo $callback."(".json_encode($result).")";
?>

