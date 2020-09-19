<?php
    function auth($user,$pw){
        try{
            if(empty($user) || empty($pw)){
                return 2;
            }
            require("pdo.php");
            session_start();
            $sql = "SELECT * FROM users WHERE user = ?";
            $stmt = $pdo->prepare($sql);
            $stmt -> execute([$user]);
            $row = $stmt -> fetch(PDO::FETCH_ASSOC);
            if($row["pw"] === $pw){
                $_SESSION["AUTH"] = $row;
                return 0;
            }else{
                return 1;
            }
        }catch(PDOException $e){
            return $e->getMessage();
        }
    }
    function logout(){
        session_start();
        unset($_SESSION["AUTH"]);
    }
    function register($user,$pw){
        try {
            require_once("pdo.php");

            $sql_check = "SELECT * FROM users WHERE user = ?";
            $stmt_check = $pdo->prepare($sql_check);
            $stmt_check -> execute([$user]);
            $row_num = $stmt_check->rowCount();
            
            if($row_num > 0){
                return 1;
            }

            $sql = "INSERT INTO users(user,pw,create_at)VALUES(?,?,?)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$user,$pw,$now]);
            return 0;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    function access_denied(){
        if(!$_SESSION){
            header("location:index.php");
        }
    }