<?php

    // callback 정의하지 않으면 서버실패 됨
    $callback = $_GET['callback'];
    
    // ajax에서 t 로 보낸 값을 GET방식으로 받음
    $value1 = $_GET['t'];


    $data = array();
    $data[0] = $value1;

    
    echo "alert('php파일임');";
    

    // ajax로 돌려줄 값들
    $result = array('data' => $data);
    echo $callback."(".json_encode($result).")";

?>


