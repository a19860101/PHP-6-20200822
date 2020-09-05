<?php
    include("function.php");
    $rows = showAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="upload.php" method="post" enctype="multipart/form-data">
        <div>
            <label for="title">圖片標題</label>
            <input type="text" name="title">
        </div>
        <div>
            <input type="file" name="img">
        </div>
        <input type="submit" value="檔案上傳">
    </form>
    <?php foreach($rows as $row){ ?>
        <div>
            <img src="images/<?php echo $row["path"];?>" width="200">
            <h2><?php echo $row["title"];?></h2>
        </div>
    <?php } ?>
</body>
</html>