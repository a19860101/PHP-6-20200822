<?php
    include("function.php");
    session_start();
    $title = $_POST["title"];
    $content = $_POST["content"];
    $category_id = $_POST["category_id"];
    $user_id = $_SESSION["AUTH"]["id"];

    if($_FILES["cover"]["name"]){
        $cover = uploadImg($_FILES["cover"]);
    }else{
        $cover = "";
    }

    // 

    store($title,$cover,$content,$category_id,$user_id);


    header("location:index.php");