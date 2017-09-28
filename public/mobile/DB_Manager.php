<?php

  function connect() {
    $dsn = 'mysql:host=localhost; dbname=myapp; charset=utf8;';
    $user = 'root';
    $pass = '';

    try{
      $db = new PDO($dsn, $user, $pass);
    } catch(PDOException $e){
      exit("接続できません　: {$e->getMessage()}");
    }

    return $db;

  }

 ?>
