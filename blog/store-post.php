<?php
    include("function.php");
    session_start();
    $title = $_POST["title"];
    $content = $_POST["content"];
    $user_id = $_SESSION["AUTH"]["id"];

    store($title,$content,$user_id);

    header("location:index.php");