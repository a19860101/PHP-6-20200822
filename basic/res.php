<?php
    var_dump($_POST);
    echo "<br>";
    echo $_POST["user"];
    echo "<br>";
    echo $_POST["pw"];
    echo "<br>";
    echo $_POST["gender"];
    echo "<br>";
    echo $_POST["edu"];
    echo "<br>";
    echo implode(",",$_POST["skills"]);
    echo "<br>";
    echo nl2br($_POST["comment"]);



    // if($_POST){
    //     var_dump($_POST);
    //     echo "<br>";
    //     echo $_POST["user"];
    //     echo "<br>";
    //     echo $_POST["pw"];
    // }else{
    //     var_dump($_GET);
    //     echo "<br>";
    //     echo $_GET["user"];
    //     echo "<br>";
    //     echo $_GET["pw"];
    // }

    // var_dump($_REQUEST);
    // echo "<br>";
    // echo $_REQUEST["user"];
    // echo "<br>";
    // echo $_REQUEST["pw"];