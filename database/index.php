<?php
    require_once("conn.php");
    // require, require_once, include, include_once

    $sql = "SELECT * FROM students";
    $result = mysqli_query($conn,$sql);
    // $row = mysqli_fetch_assoc($result);
    // $row = mysqli_fetch_row($result);
    // $row = mysqli_fetch_array($result);

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
        </tr>
        <?php while($row = mysqli_fetch_assoc($result)){ ?>
            <tr>
                <td><?php echo $row["id"];?></td>
                <td><?php echo $row["name"];?></td>
                <td><?php echo $row["gender"];?></td>
                <td><?php echo $row["phone"];?></td>
                <td><?php echo $row["mail"];?></td>
            </tr>
        <?php } ?>

        <?php
            // while($row = mysqli_fetch_assoc($result)){
            //     echo "<tr>";
            //     echo "<td>".$row["id"]."</td>";
            //     echo "<td>".$row["name"]."</td>";
            //     echo "<td>".$row["gender"]."</td>";
            //     echo "<td>".$row["phone"]."</td>";
            //     echo "<td>".$row["mail"]."</td>";
            //     echo "</tr>";
            // }
        ?>
    </table>
</body>
</html>