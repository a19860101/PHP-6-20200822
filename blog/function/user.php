<?php
    function auth($user,$pw){
        try{
            require("pdo.php");
            session_start();
            $sql = "SELECT * FROM users WHERE user = ?";
            $stmt = $pdo->prepare($sql);
            $stmt -> execute([$user]);
            $row = $stmt -> fetch();
            if($row["pw"] === $pw){
                $_SESSION["AUTH"] = $row;
            }else{
                echo "帳號或密碼錯誤";
            }
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }