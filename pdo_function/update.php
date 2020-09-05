<?php
    include("function.php");
    $name = $_POST["name"];
    $mail = $_POST["mail"];
    $gender = $_POST["gender"];
    $phone = $_POST["phone"];
    $id = $_POST["id"];

    update($name,$phone,$mail,$gender,$id);

    header("location:index.php");