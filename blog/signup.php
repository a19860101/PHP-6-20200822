<?php
    include("function/user.php");
    register($_POST["user"],$_POST["pw"]);

    header("location:index.php");