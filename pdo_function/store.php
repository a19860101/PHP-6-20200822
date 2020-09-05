<?php
    include("function.php");
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $mail = $_POST["mail"];
    $gender =$_POST["gender"];

    store($name,$phone,$mail,$gender);
    
    header("location:index.php");