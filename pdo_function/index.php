<?php
    include("function.php");
    $row = showAll();
    var_dump($row);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>學員資料表</title>
</head>
<body>
    <h1>學員資料</h1>
    <a href="create.php">新增學員資料</a>
    <table border="1" width="600">
        <tr>
            <th>#</th>
            <th>姓名</th>
            <th>性別</th>
            <th>電話</th>
            <th>MAIL</th>
            <th>建立時間</th>
            <th></th>
        </tr>
        <?php while($row = $stmt->fetch()){ ?>
            <tr>
                <td><?php echo $row["id"];?></td>
                <td><?php echo $row["name"];?></td>
                <td><?php echo $row["gender"];?></td>
                <td><?php echo $row["phone"];?></td>
                <td><?php echo $row["mail"];?></td>
                <td><?php echo $row["create_at"];?></td>
                <td>
                    <form action="delete.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $row["id"];?>">
                        <input type="submit" value="刪除" onclick="return confirm('確認刪除？')">
                    </form>
                    <a href="edit.php?id=<?php echo $row["id"]?>">編輯</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>