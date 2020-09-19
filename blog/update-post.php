<?php
    include("function.php");
    $title = $_POST["title"];
    $content = $_POST["content"];
    $category_id = $_POST["category_id"];
    $id = $_POST["id"];
    update($title,$content,$category_id,$id);

    header("location:edit-post.php?id=".$id);