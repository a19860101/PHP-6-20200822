<?php

    session_start();
    
    session_destroy();
    // unset($_SESSION["PROFILE"]);

    header("location:index.php");