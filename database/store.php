<?php
    require_once("conn.php");

    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $mail = $_POST["mail"];
    $gender =$_POST["gender"];
    $sql = "INSERT INTO students(name,phone,mail,gender)VALUES('$name','$phone','$mail','$gender')";
    mysqli_query($conn,$sql);

    header("location:index.php");