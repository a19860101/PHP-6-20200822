<?php
    include("function.php");

    delete($_POST["id"],$_POST["path"]);

    header("location:index.php");