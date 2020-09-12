<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>
<body>
    <form action="store.php" method="post">
        <input type="text" name="user">
        <input type="submit" value="新增session">
    </form>
    <?php
        session_start();
        if($_SESSION){
            echo $_SESSION["USER"];
        }
    ?>
</body>
</html>