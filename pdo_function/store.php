<?php
    include("function.php");
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $mail = $_POST["mail"];
    $gender =$_POST["gender"];

    store($name,$phone,$mail,$gender);
    // $time = 1;
    // storeTest($_REQUEST,$time);
    // header("location:index.php");