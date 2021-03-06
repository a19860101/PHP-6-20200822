<?php
    include("function.php");
    $row = show($_GET["id"]);
?>
<?php include("template/header.php"); ?>
<?php include("template/nav.php"); ?>
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-8">
            <?php if($row["cover"] === ""){ ?>
                <img src="https://via.placeholder.com/600x300?text=No+Cover" class="w-100">
                <?php }else{ ?>
                <img src="thumbs/<?php echo $row["cover"];?>" class="w-100">
            <?php } ?>
            <h2><?php echo $row["title"];?></h2>
            <div class="content">
                <?php echo $row["content"];?>
            </div>
            <div>
                建立時間 <?php echo $row["create_at"];?>
            </div>
            <div>
                修改時間 <?php echo $row["update_at"]; ?>
            </div>
            <a href="index.php" class="btn btn-primary">文章列表</a>
            <?php if($_SESSION && $_SESSION["AUTH"]["id"] === $row["user_id"]){ ?>
            <form action="delete-post.php" method="post" class="d-inline-block">
                <input type="hidden" name="id" value="<?php echo $row["id"];?>">
                <input type="submit" class="btn btn-danger" value="刪除文章" onclick="return confirm('確認刪除？')">
            </form>
            <a href="edit-post.php?id=<?php echo $row["id"];?>" class="btn btn-success">編輯文章</a>
            <?php } ?>
        </div>
    </div>
</div>
<?php include("template/footer.php"); ?>