<?php
    require_once "./DB_Manager.php";
    $dbo = connect();

    $callback= $_GET['callback'];
    $today = date('Y-m-d');
    $user_num = $_GET['user_num'];
    $childID = $_GET['childID'];
    $developValueYear = $_GET['developValueYear'];
    $developValueMonthText = $_GET['developValueMonthText'];
    $developValueDay = $_GET['developValueDay'];
    $dateValue = $_GET['dateValue'];
    $data = array();
    
    // 해당 날짜에 저장한 값이 있는지 판단하는 쿼리
    $sql = "select * from assesseds where f_tId = :user_num AND f_cId = :childID AND create_date = :dateValue";
    $stt = $dbo->prepare($sql, array(PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL));
    $stt->execute(array(
                        ':user_num' => $user_num,
                        ':childID' => $childID,
                        ':dateValue' => $dateValue
                        )
                );
    
    // 해당 날짜의 저장한 값의 행 수
    $rowCount = $stt->rowCount();
    
    
    // 저장 안되있을때 빈껍데기 부를 쿼리
    if($rowCount == 0 ){
        // $sql = "select assId as mentsAssId, assContent, f_actId from assessments where assId IN( select f_assId from actContents where actId IN (select dp.f_actId from monthPlans m, weekPlans w, dayPlans d, dayContSums dp where m.mid = w.f_mId AND w.wId = d.f_wId and d.dId = dp.f_dId AND d.dayInfo = :developValueDay AND m.yearInfo = :developValueYear AND m.monthInfo = :developValueMonthText))";
        
        $sql = "select assId as mentsAssId, assContent, f_actId from assessments where 
                assId IN( select f_assId 
                from actContents 
                where actId 
                IN  ( select dp.f_actId 
                      from monthPlans m, weekPlans w, dayPlans d, dayContSums dp 
                      where m.mid = w.f_mId 
                      AND w.wId = d.f_wId 
                      and d.dId = dp.f_dId 
                      AND d.dayInfo =  :developValueDay
                      AND m.yearInfo = :developValueYear
                      AND m.monthInfo = :developValueMonthText))";
        $stt = $dbo->prepare($sql, array(PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL));
        $stt->execute(array(
                            // ':user_num' => $user_num,
                            // ':childID' => $childID,
                            ':developValueYear' => $developValueYear,
                            ':developValueMonthText' => $developValueMonthText,
                            ':developValueDay' => $developValueDay,
                            // ':dateValue' => $dateValue
                            )
                    );
        $data = $stt->fetchAll();
    
    }
    
    // 값이 저장되어 있을때 알맹이 부를 쿼리
    else{
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
        $data = $stt->fetchAll();    
        
    }
                                                                            
    
    
    $result = array('data' => $data);
    echo $callback. "(" . json_encode($result) . ")";
 
  
   

?>