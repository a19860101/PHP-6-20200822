<?php
    include("function.php");
    $row = show($_GET["id"]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>編輯學員資料</title>
</head>
<body>
    <h1>編輯學員資料</h1>
    <form action="update.php" method="post">
        <div>
            <label for="name"">姓名</label>
            <input type="text" name="name" id="name" value="<?php echo $row["name"]; ?>">
        </div>
        <div>
            <label for="phone"">電話</label>
            <input type="text" name="phone"" id="phone" value="<?php echo $row["phone"]; ?>">
        </div>
        <div>
            <label>性別</label>
            <label for="male">
                <input type="radio" name="gender" id="male" value="男" <?php echo $row["gender"]==="男" ? "checked":""; ?>>男
            </label>
            <label for="female">
                <input type="radio" name="gender" id="female" value="女" <?php echo $row["gender"]==="女" ? "checked":""; ?>>女
            </label>
        </div>
        <div>
            <label for="mail"">Mail</label>
            <input type="text" name="mail"" id="mail" value="<?php echo $row["mail"]; ?>">
        </div>
        <input type="hidden" name="id" value="<?php echo $row["id"];?>">
        <input type="submit" value="編輯">
        <input type="button" value="取消" onclick="history.back()">
    </form>
</body>
</html>