<?php
    $id = $_POST["id"];
    try{
        require_once("pdo.php");
        $sql = "DELETE FROM students WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    // try{
    //     require_once("pdo.php");
    //     $sql = "DELETE FROM students WHERE id = :id";
    //     $stmt = $pdo->prepare($sql);
    //     $stmt->bindParam(":id",$id);
    //     $stmt->execute();
    // }catch(PDOException $e){
    //     echo $e->getMessage();
    // }
    header("location:index.php");