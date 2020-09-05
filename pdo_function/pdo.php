<?php
    $db_host = "localhost";
    $db_user = "admin";
    $db_pw = "admin";
    $db_name = "sat";
    $db_charset = "utf8mb4";

    //時區設定
    date_default_timezone_set("Asia/Taipei");
    $now = date("Y-m-d H:i:s");
    //例外處理

    try {
        $dsn = "mysql:host={$db_host};dbname={$db_name};charset={$db_charset}";
        // $dsn = "mysql:host=localhost;dbname=sat;charset=utf8mb4";
        $pdo = new PDO($dsn,$db_user,$db_pw);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
