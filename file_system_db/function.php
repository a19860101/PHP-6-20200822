<?php 
    function store($path,$title){
        require_once("pdo.php");
        $sql = "INSERT INTO photos(path,title,create_at)VALUES(?,?,?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$path,$title,$now]);
    }