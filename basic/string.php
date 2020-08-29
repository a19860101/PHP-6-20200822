<?php
    //String
    $s = "看來七六人也要跟隨籃網提前放假回家腳步了！
    塞爾提克22日靠著最後關頭打出10比0收尾猛攻，
    終場102比94逆轉擊退七六人，
    在季後賽首輪取得3勝0敗聽牌，
    雙方G4將於23日凌晨1點進行，
    七六人「有望」比籃網更早淘汰！";
    // echo $s;
    // echo substr($s,0,12);
    // echo mb_substr($s,0,12,"utf-8");

    echo nl2br($s);

    $s2 = "<h1>title</h1>";

    echo $s2;
    echo strip_tags($s2);

    echo "<br>";
    $pw = "12345";
    echo "<br>";
    echo md5($pw);
    echo "<br>";
    echo sha1($pw);
    echo "<br>";
    echo md5(md5($pw));
    echo "<br>";
    echo sha1(sha1($pw));
    echo "<br>";
    echo md5(sha1($pw));
    echo "<br>";
    echo sha1(md5($pw));
