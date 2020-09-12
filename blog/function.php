<?php
    function showAll(){
        try {
            require_once("pdo.php");
            $sql = "SELECT * FROM posts";
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
            $sql = "SELECT * FROM students WHERE id = ?";
            $stmt = $pdo->prepare($sql);
            $stmt ->execute([$id]);
            $row = $stmt->fetch();
            return $row;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    function store($title,$content){
        try {
            require_once("pdo.php");
            $sql = "INSERT INTO posts(title,content,create_at,update_at)VALUES(?,?,?,?)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$title,$content,$now,$now]);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    function delete($id){
        try{
            require_once("pdo.php");
            $sql = "DELETE FROM students WHERE id = ?";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$id]);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    function update($name,$phone,$mail,$gender,$id){ 
        try {
            require_once("pdo.php");
            $sql = "UPDATE students SET name=?,phone=?,mail=?,gender=? WHERE id = ?";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$name,$phone,$mail,$gender,$id]);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }