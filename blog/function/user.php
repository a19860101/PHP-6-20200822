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