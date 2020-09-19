<?php
    function showAllCategory(){
        try {
            require("pdo.php");
            $sql = "SELECT * FROM categories";
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
    function storeCategory($title,$slug){
        try {
            require_once("pdo.php");
            $sql = "INSERT INTO categories (title,slug,create_at)VALUES(?,?,?)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$title,$slug,$now]);
            
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    function deleteCategory($id){
        try {
            require_once("pdo.php");
            $sql = "DELETE FROM categories WHERE id = ?";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$id]);
            
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }