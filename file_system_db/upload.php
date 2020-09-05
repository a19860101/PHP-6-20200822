<?php
    include("function.php");
    $type = $_FILES["img"]["type"];
    $tmp_name = $_FILES["img"]["tmp_name"];
    $error = $_FILES["img"]["error"];

    switch($type){
        case "image/jpeg":
            $name = md5(time()).".jpg";
        break;
        case "image/png":
            $name = md5(time()).".png";
        break;
        case "image/gif":
            $name = md5(time()).".gif";
        break;
        default:
            echo "檔案類型不正確";
            return;
    }
    $target = "images/{$name}";

    if($error === 0){
        if(move_uploaded_file($tmp_name,$target)){
            store($name,$_POST["title"]);
            echo  "上傳成功";
            header("Refresh:3;url=index.php");
        }else{
            echo "上傳失敗";
        }
    }elseif($error === 4){
        echo "請選擇檔案";
    }else{
        echo "上傳錯誤";
    }