<?php
    function showAll(){
        try {
            require_once("pdo.php");
            $sql = "SELECT * FROM students";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $rows = array();
            while($row = $stmt->fetch()){
                $rows[] = $row;
            }
            return $rows;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    function show($id){
        try {
            require_once("pdo.php");
            $sql = "SELECT * FROM students WHERE id = ?";
            $stmt = $pdo->prepare($sql);
            $stmt ->execute([$id]);
            $row = $stmt->fetch();
            return $row;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    function store($name,$phone,$mail,$gender){
        try {
            require_once("pdo.php");
            $sql = "INSERT INTO students(name,phone,mail,gender,create_at)VALUES(?,?,?,?,?)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$name,$phone,$mail,$gender,$now]);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    function delete($id){
        try{
            require_once("pdo.php");
            $sql = "DELETE FROM students WHERE id = ?";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$id]);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    function update($name,$phone,$mail,$gender,$id){ 
        try {
            require_once("pdo.php");
            $sql = "UPDATE students SET name=?,phone=?,mail=?,gender=? WHERE id = ?";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$name,$phone,$mail,$gender,$id]);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    function storeTest($request,$time){
        require_once("pdo.php");
        if($time === 1){
            $request["create_at"] = $now;
        }
        // var_dump($request);
        $key = implode(",",array_keys($request));
        $value = array_values($request);
        function q(){
            return '?';
        }
        $q = implode(",",array_map('q',$request));
        
        var_dump($q);



        try {
            $sql = "INSERT INTO students({$key})VALUES({$q})";
            $stmt = $pdo->prepare($sql);
            $stmt->execute($value);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }