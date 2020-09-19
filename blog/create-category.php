<?php
    include("function/category.php");
    include("function/user.php");
    $rows = showAllCategory();
?>
<?php include("template/header.php"); ?>
<?php include("template/nav.php"); ?>
<?php access_denied();?>
<div class="container py-4">
    <div class="row">
        <div class="col-8">
            <h2>新增分類</h2>
            <hr>
            <form action="store-category.php" method="post">
                <div class="form-group">
                    <label for="title">分類標題</label>
                    <input type="text" name="title" id="title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="slug">分類英文標題</label>
                    <input type="text" name="slug" id="slug" class="form-control">
                </div>
                <input type="submit" class="btn btn-primary" value="新增分類">
            </form>
        </div>
        <div class="col-4">
            <h2>分類列表</h2>
            <hr>
            <ul class="list-group">
                <?php foreach($rows as $row){ ?>
                <li class="list-group-item">
                    <?php echo $row["title"];?>
                    <form action="delete-category.php" method="post" class="float-right">
                        <input type="hidden" name="id" value="<?php echo $row["id"];?>">
                        <input type="submit" class="btn btn-danger btn-sm" value="刪除" onclick="return confirm('確認刪除？')">
                    </form>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>
<?php include("template/footer.php"); ?>
