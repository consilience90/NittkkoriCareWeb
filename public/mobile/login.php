<?php
    $callback = $_GET['callback']; //ajax callback var
     $user_id = $_GET['user_id'];// 모바일에서 넘어온 유저id
     $password = $_GET['password'];// 모바일에서 넘어온 유저 비번
    
    $connection = mysqli_connect("127.0.0.1", "root", "", "myapp");
    $connection->set_charset("utf8");


    $query = mysqli_query($connection, "SELECT * FROM users WHERE user_id = '$user_id'");
    
    $row = mysqli_fetch_array($query);  
   
    if(password_verify($password, $row['password'])){
        //userNum : 유저 고유번호, position :유저의직책, userName : 유저의 이름
        $result = array('result'=>'success','userNum'=>$row['id'],'userName'=>$row['name'],'position'=>$row['position']);

    }else{
      $result = array('result'=>'faild');
    }
       mysqli_close($connection);

    echo $callback."(".json_encode($result).")";

?>