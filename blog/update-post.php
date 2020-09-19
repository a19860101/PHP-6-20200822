<?php
    include("function.php");
    $title = $_POST["title"];
    $content = $_POST["content"];
    $category_id = $_POST["category_id"];
    $id = $_POST["id"];

    if($_FILES["cover"]["name"]){
        $cover = uploadImg($_FILES["cover"]);
    }else{
        $cover = "";
    }
    update($title,$cover,$content,$category_id,$id);

    // header("location:edit-post.php?id=".$id);