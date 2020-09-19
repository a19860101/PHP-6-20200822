<?php
    include("function/category.php");
    $title = $_POST["title"];
    $slug = $_POST["slug"];
    storeCategory($title,$slug);

    header("location:create-category.php");