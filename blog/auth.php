<?php
    include("function/user.php");

    auth($_POST["user"],$_POST["pw"]);

    header("location:index.php");