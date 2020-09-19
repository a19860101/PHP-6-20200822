<?php
    include("function.php");
    $title = $_POST["title"];
    $content = $_POST["content"];
    $category_id = $_POST["category_id"];
    $id = $_POST["id"];

    if($_FILES["cover"]["name"]){
        $cover = uploadImg($_FILES["cover"]);
        // echo 1;
    }else if($_POST["cover"]){
        $cover = $_POST["cover"];
        // echo 2;
    }else{
        $cover = "";
        // echo 3;
    }
    update($title,$cover,$content,$category_id,$id);

    header("location:edit-post.php?id=".$id);