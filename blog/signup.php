<?php
    include("function/user.php");
    $result = register($_POST["user"],$_POST["pw"]);

    // header("location:index.php");
    switch($result){
        case 0:
            echo "<script>alert('申請成功，請重新登入');</script>";
            header("refresh:0;url=login.php");
        break;
        case 1:
            echo "<script>alert('帳號已被使用，請重新設定');</script>";
            header("refresh:1;url=register.php");
        break;
    }