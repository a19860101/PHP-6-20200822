<?php
    $img = $_GET["img"];
    unlink($img);
    header("location:index.php");
    