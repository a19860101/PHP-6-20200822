<?php
    function showAll(){
        try {
            require_once("pdo.php");
            // $sql = "SELECT * FROM posts ORDER BY id DESC";
            $sql = "SELECT posts.* , users.user FROM posts
                    LEFT JOIN users ON posts.user_id = users.id
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
    function store($title,$content,$user_id){
        try {
            require_once("pdo.php");
            $sql = "INSERT INTO posts(title,content,user_id,create_at,update_at)VALUES(?,?,?,?,?)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$title,$content,$user_id,$now,$now]);
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
    function update($title,$content,$id){ 
        try {
            require_once("pdo.php");
            $sql = "UPDATE posts SET title=?,content=?,update_at=? WHERE id = ?";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$title,$content,$now,$id]);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }