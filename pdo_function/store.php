<?php
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $mail = $_POST["mail"];
    $gender =$_POST["gender"];

    try {
        require_once("pdo.php");
        $sql = "INSERT INTO students(name,phone,mail,gender,create_at)VALUES(?,?,?,?,?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$name,$phone,$mail,$gender,$now]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    // try {
    //     require_once("pdo.php");
    //     $sql = "INSERT INTO students(name,phone,mail,gender)VALUES(:name,:phone,:mail,:gender)";
    //     $stmt = $pdo->prepare($sql);
    //     $stmt->bindParam(":name",$name);
    //     $stmt->bindParam(":phone",$phone);
    //     $stmt->bindParam(":mail",$mail);
    //     $stmt->bindParam(":gender",$gender);
    //     $stmt->execute();
    // }catch(PDOException $e){
    //     echo $e->getMessage();
    // }
    
    header("location:index.php");