<?php

    // $a = array();
    // $a[0] = "Apple";
    // $a[1] = "Banana";
    // $a[2] = "Cat";
    // $a[3] = "Dog";
    // $a[4] = "Egg";

    // $a = array("Apple","Banana","Cat","Dog","Egg");

    $a = ["Banana","Egg","Cat","Apple","Fly","Dog"];

    // var_dump($a);
    // echo "<br>";
    // echo $a[0]."<br>";
    // echo $a[1]."<br>";
    // echo $a[2]."<br>";
    // echo $a[3]."<br>";
    // echo $a[4]."<br>";
    
    // 陣列長度
    // echo count($a) . "<br>";
    
    // 陣列迭代
    // for($i=0;$i<count($a);$i++){
    //     echo $a[$i]."<br>";
    // }

    // foreach($a as $data){
    //     echo $data."<br>";
    // }

    // 關聯陣列
    $drinks = [
        "珍珠奶茶" => 40,
        "紅茶" => 20,
        "奶茶" => 25,
        "綠茶" => 20
    ];
    // var_dump($drinks);
    // echo count($drinks);
    
    // foreach($drinks as $key => $value){
        // echo $key."<br>";
        // echo $value."<br>";
        // echo $key.":".$value."元<br>";
    // }

    // in_array()
    var_dump(in_array("apple",$a));
    echo "<br>";

    // is_array()
    $s = 'hello';
    var_dump(is_array($s));
    echo "<br>";

    // 陣列排序
    // sort($a);
    // rsort($a);
    // shuffle($a);
    foreach($a as $data){
        echo $data."<br>";
    }

    // asort($drinks);
    // arsort($drinks);
    // ksort($drinks);
    // krsort($drinks);
    foreach($drinks as $key => $value){
        echo $key.":".$value."元<br>";
    }

    $user = "John";
    $mail = "asdf@gmail.com";
    $age = 18;
    // $user_info = [$user,$mail,$age];
    $user_info = compact("user","mail","age");
    // var_dump($user_info);
    echo $user_info["user"]."<br>";
    echo $user_info["mail"]."<br>";
    echo $user_info["age"]."<br>";

    //陣列轉字串

    $a_string = implode(",",$a);
    echo $a_string;
    echo "<br>";
    
    //字串轉陣列
    $s = "Apple,Cat,Fly";
    $s_array = explode(",",$s);

    var_dump($s_array);
    foreach($s_array as $ss){
        echo $ss."<br>";
    }