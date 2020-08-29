<?php
    $x = 100;
    if($x > 0){
        echo "success";
    }
    
    echo "<br>";
    
    if($x < 0){
        echo "< 0";
    }else{
        echo "error";
    }

    echo "<br>";
    
    if($x > 1000){
        echo "> 1000";
    }elseif($x > 100){
        echo "> 100";
    }else{
        echo "ERROR";
    }
    echo "<br>";
    
    //switch
    $a = 100;
    switch($a){
        case 0:
            echo 0;
        break;
        case 1:
            echo 1;
        break;
        case 2:
            echo 2;
        break;
        default:
            echo "error";
    }
    echo "<br>";
    switch(true){
        case $a > 0:
            echo "正數";
        break;
        case $a < 0:
            echo "負數";
        break;
        case $a === 0:
            echo 0;
        break;
        default:
            echo 'Error'; 
    }