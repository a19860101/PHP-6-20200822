<?php
    session_start();

    // $_SESSION["USER"] = $_POST["user"];

    // var_dump($_POST);
    $_SESSION["PROFILE"] = $_POST;

    $_SESSION["TEST"] = $_POST;

    header("location:index.php");