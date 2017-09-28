<?php




/*
    // PDO 사용법 연습

    require_once "./DB_Manager.php";
    
    $dbo = connect();
    $data = array();
    $callback = $_GET['callback'];
    $user_num = $_GET['user_num'];

    $sql = "select * from memos where f_userId = :test";
    $stt = $dbo->prepare($sql, array(PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL));
    $stt->execute(array(':test'=>$user_num));
    $row = $stt->fetchAll();
    $data = $row;
    
    // length 구하기
    $rowCount = $stt->rowCount();
    echo "alert('서버에서 구한 rowCount = $rowCount');";
    
    
    
    $result = array('result' => $resultData, 'data' => $data);
    echo $callback."(".json_encode($result).")";
    
    // Atom에서 ajax의 success 안에서
    // (data로 $result를 반환 받은 후)
    // data.data[인덱스번호].colum명  
    // 으로 출력하면 됨
    
    // Atom에서 rowCount 구하기
    //  var cnt = data.data.length;
*/
?>