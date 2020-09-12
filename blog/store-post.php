<?php
    include("function.php");

    $title = $_POST["title"];
    $content = $_POST["content"];

    store($title,$content);

    header("location:index.php");