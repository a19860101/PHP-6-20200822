<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="img">
        <input type="submit" value="檔案上傳">
    </form>
    <div>
        <?php
            $imgs = glob("images/*");
            // var_dump($imgs);
            foreach($imgs as $img){
        ?>
        <img src="<?php echo $img; ?>" width="200">
        <a href="delete.php?img=<?php echo $img; ?>" onclick="return confirm('確認刪除？')">刪除</a>
        <?php } ?>
    </div>
</body>
</html>