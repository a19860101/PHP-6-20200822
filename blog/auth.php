<?php
    include("function/user.php");

    $result = auth($_POST["user"],$_POST["pw"]);

    // header("location:index.php");

    switch($result){
        case 0:
            echo "<script>alert('登入成功');</script>";
            header("refresh:0;url=index.php");
        break;
        case 1:
            echo "<script>alert('帳號或密碼錯誤');</script>";
            header("refresh:1;url=index.php");
        break;
        case 2:
            echo "<script>alert('請輸入帳號密碼');</script>";
            header("refresh:1;url=index.php");
        break;
        default:
            echo "<script>alert('發生錯誤，請稍後再試');</script>";
            header("refresh:1;url=index.php");
    }