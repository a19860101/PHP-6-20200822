<?php
    include("function.php");
    $title = $_POST["title"];
    $content = $_POST["content"];
    $id = $_POST["id"];
    update($title,$content,$id);

    header("location:edit-post.php?id=".$id);