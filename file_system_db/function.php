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
                imgResize($type,$target,$name);
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
    function imgResize($type, $target, $name){
        switch($type){
            case "image/jpeg":
                $canvas = imagecreatefromjpeg($target);
            break;
            case "image/png":
                $canvas = imagecreatefrompng($target);
            break;
            case "image/gif":
                $canvas = imagecreatefromgif($target);
            break;
        }
        $canvas_w = imagesx($canvas);
        $canvas_h = imagesy($canvas);

        $new_w = 600;
        $new_h = $canvas_h / $canvas_w * $new_w;

        $new_canvas = imagecreatetruecolor($new_w,$new_h);
        imagecopyresampled($new_canvas,$canvas,0,0,0,0,$new_w,$new_h,$canvas_w,$canvas_h);
        imagejpeg($new_canvas,"thumbs/".$name);
        imagepng($new_canvas,"thumbs/".$name);
        imagegif($new_canvas,"thumbs/".$name);

    }
    function delete($id,$path){
        require_once("pdo.php");
        unlink("images/{$path}");

        $sql = "DELETE FROM photos WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$id]);
    }