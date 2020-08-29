<?php
    //運算子
    $x = 100;
    $y = 60;

    //算術運算子
    echo $x + $y;
    echo "<br>";
    echo $x - $y;
    echo "<br>";
    echo $x * $y;
    echo "<br>";
    echo $x / $y;
    echo "<br>";
    echo $x % $y;
    echo "<br>";

    $a = 60;
    $b = "60";
    //比較運算子
    var_dump($x > $y);
    echo "<br>";
    var_dump($x < $y);
    echo "<br>";
    var_dump($x >= $y);
    echo "<br>";
    var_dump($x <= $y);
    echo "<br>";
    var_dump($a == $b);
    echo "<br>";
    var_dump($a === $b); //包含資料型別
    echo "<br>";
    var_dump($a != $b);
    echo "<br>";
    var_dump($a !== $b); //包含資料型別
    echo "<br>";
    
    //賦值運算子(指定運算子)
    var_dump($x = $y);
    echo "<br>";
    var_dump($x += $y);
    echo "<br>";
    var_dump($x -= $y);
    echo "<br>";
    var_dump($x *= $y);
    echo "<br>";
    var_dump($x /= $y);
    echo "<br>";
    var_dump($x %= $y);
    echo "<br>";

    //邏輯運算子

    /*
        AND &&
        OR  ||
        NOT !
    */
    var_dump(!$a);
    echo "<br>";
    var_dump(!$x);
    echo "<br>";
    //字串運算子  basic.php

    // 三元運算子
    
    $z = 654;
    echo $z === 0 ? "success" : "error";