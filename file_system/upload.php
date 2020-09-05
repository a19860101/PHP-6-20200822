<?php
    // var_dump($_FILES);
    // var_dump($_FILES["img"]);
    $name = $_FILES["img"]["name"];
    $type = $_FILES["img"]["type"];
    $tmp_name = $_FILES["img"]["tmp_name"];
    $error = $_FILES["img"]["error"];
    $size = $_FILES["img"]["size"];

    $target = "images/{$name}";

    if($type != "image/jpeg" && $type != "image/png" && $type != "image/gif"){
        echo "檔案類型不正確";
        return;
    }

    if($error === 0){
        if(move_uploaded_file($tmp_name,$target)){
            echo  "上傳成功";
        }else{
            echo "上傳失敗";
        }
    }elseif($error === 4){
        echo "請選擇檔案";
    }else{
        echo "上傳錯誤";
    }