<?php
    //function
    function test($x){
        // echo "HELLO PHP!!!";
        return $x * $x;
    }

    if(test(11) > 100){
        echo 'success';
    }else{
        echo 'error';
    }
  

    function square($x){
        echo $x * $x;
    }
    function nt_us($x){
        echo $x / 32;
    }
    function us_nt($x){
        echo $x * 32;
    }

    // square(11);
    // nt_us(1000);
    us_nt(999);
    
    function setTitle($s="Default"){
        echo "<h1>{$s}</h1>";
    }

    setTitle("qwerty 1234!!");
    setTitle();

    function getUsers($x="HELLO",$y="USER"){
        echo $x.$y;
    }

    getUsers("HELLO","使用者");

    