<?php
    session_start();

    $_SESSION["USER"] = $_POST["user"];

    header("location:index.php");