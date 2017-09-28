<?php
header("Access-Control-Allow-Origin: *");
    $callback = $_GET['callback'];
    
    $result = array('result'=>'test');
    echo $callback."(".json_encode($result).")";
?>