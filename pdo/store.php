<?php
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $mail = $_POST["mail"];
    $gender =$_POST["gender"];

    try {
        require_once("pdo.php");
        $sql = "INSERT INTO students(name,phone,mail,gender)VALUES(?,?,?,?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$name,$phone,$mail,$gender]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    header("location:index.php");