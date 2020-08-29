<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新增學員資料</title>
</head>
<body>
    <h1>新增學員資料</h1>
    <form action="store.php" method="post">
        <div>
            <label for="name"">姓名</label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="phone"">電話</label>
            <input type="text" name="phone"" id="phone"">
        </div>
        <div>
            <label>性別</label>
            <label for="male">
                <input type="radio" name="gender" id="male" value="男">男
            </label>
            <label for="female">
                <input type="radio" name="gender" id="female" value="女">女
            </label>
        </div>
        <div>
            <label for="mail"">Mail</label>
            <input type="text" name="mail"" id="mail"">
        </div>
        <input type="submit" value="新增">
    </form>
</body>
</html>