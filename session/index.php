<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>
<body>
    <form action="store.php" method="post">
        user
        <input type="text" name="user">
        <br>
        mail
        <input type="text" name="mail">
        <br>
        phone
        <input type="text" name="phone">
        <br>
        <input type="submit" value="新增session">
    </form>
    <a href="delete.php">delete</a>
    <br>
    <?php
        session_start();
        if($_SESSION){
            // var_dump($_SESSION["PROFILE"]);

            // foreach($_SESSION["PROFILE"] as $profile){
                // echo $profile;
            // }
            echo $_SESSION["PROFILE"]["user"];
            echo $_SESSION["PROFILE"]["mail"];
            echo $_SESSION["PROFILE"]["phone"];
            echo "<br>";
            echo $_SESSION["TEST"]["user"];
            echo $_SESSION["TEST"]["mail"];
            echo $_SESSION["TEST"]["phone"];

        }else{
            echo "Session 已刪除";
        }
    ?>
</body>
</html>