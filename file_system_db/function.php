<?php 
    function showAll(){
        require_once("pdo.php");
        $sql = "SELECT * FROM photos";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $rows = array();
        while($row = $stmt->fetch()){
            $rows[] = $row;
        }
        return $rows;

    }
    function store($path,$title){
        require_once("pdo.php");
        $sql = "INSERT INTO photos(path,title,create_at)VALUES(?,?,?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$path,$title,$now]);
    }
    function uploadImg($file){
        $type = $file["type"];
        $tmp_name = $file["tmp_name"];
        $error = $file["error"];

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
                echo  "上傳成功";
                header("Refresh:3;url=index.php");
                return $name;
            }else{
                echo "上傳失敗";
            }
        }elseif($error === 4){
            echo "請選擇檔案";
        }else{
            echo "上傳錯誤";
        }
    }