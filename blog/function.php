<?php
    function showAll(){
        try {
            require_once("pdo.php");
            // $sql = "SELECT * FROM posts ORDER BY id DESC";
            //別名
            $sql = "SELECT posts.* , users.user ,categories.title AS category_title FROM posts
                    LEFT JOIN users ON posts.user_id = users.id
                    LEFT JOIN categories ON posts.category_id = categories.id
                    ORDER BY id DESC"; 
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $rows = array();
            while($row = $stmt->fetch()){
                $rows[] = $row;
            }
            return $rows;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    function showPostsWithCategory($id){
        try {
            require_once("pdo.php");
            $sql = "SELECT posts.* , users.user ,categories.title AS category_title FROM posts
                    LEFT JOIN users ON posts.user_id = users.id
                    LEFT JOIN categories ON posts.category_id = categories.id
                    WHERE posts.category_id = ?
                    ORDER BY id DESC"; 
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$id]);
            $rows = array();
            while($row = $stmt->fetch()){
                $rows[] = $row;
            }
            return $rows;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    function show($id){
        try {
            require_once("pdo.php");
            $sql = "SELECT * FROM posts WHERE id = ?";
            $stmt = $pdo->prepare($sql);
            $stmt ->execute([$id]);
            $row = $stmt->fetch();
            return $row;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    function store($title,$cover,$content,$category_id,$user_id){
        try {
            require_once("pdo.php");
            $sql = "INSERT INTO posts(title,cover,content,category_id,user_id,create_at,update_at)VALUES(?,?,?,?,?,?,?)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$title,$cover,$content,$category_id,$user_id,$now,$now]);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    function delete($id){
        try{
            require_once("pdo.php");
            $sql = "DELETE FROM posts WHERE id = ?";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$id]);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    function update($title,$cover,$content,$category_id,$id){ 
        try {
            require_once("pdo.php");
            $sql = "UPDATE posts SET title=?,cover=?,content=?,category_id=?,update_at=? WHERE id = ?";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$title,$cover,$content,$category_id,$now,$id]);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
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
    function deleteCover($id,$cover){
        try {
            require("pdo.php");
            $sql = "UPDATE posts SET cover = ?,update_at = ? WHERE id = ?";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$cover,$now,$id]);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }