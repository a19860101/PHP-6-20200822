<?php
    include("function.php");
    
    $file = $_FILES["img"];
    $path = uploadImg($file);
    store($path,$_POST["title"]);