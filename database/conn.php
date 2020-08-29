<?php
    $db_host = "localhost";
    $db_user = "admin";
    $db_pw = "admin";
    $db_name = "sat";

    $conn = mysqli_connect($db_host,$db_user,$db_pw,$db_name)or die("資料庫連接錯誤!");
    // $conn = mysqli_connect("localhost","admin","admin","sat");
    mysqli_query($conn,"SET NAMES utf8mb4");