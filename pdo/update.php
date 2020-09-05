<?php
    $name = $_POST["name"];
    $mail = $_POST["mail"];
    $gender = $_POST["gender"];
    $phone = $_POST["phone"];
    $id = $_POST["id"];

    try {
        require_once("pdo.php");
        $sql = "UPDATE students SET name=?,phone=?,mail=?,gender=? WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$name,$phone,$mail,$gender,$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    header("location:index.php");