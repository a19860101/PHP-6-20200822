<?php
    include("function.php");
    include("function/category.php");

    $row = show($_GET["id"]);

    $categories = showAllCategory();
?>
<?php include("template/header.php"); ?>
<?php include("template/nav.php"); ?>
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-8">
            <h2>編輯文章</h2>
            <hr>
            <form action="update-post.php" method="post">
                <div class="form-group">
                    <label for="title">文章標題</label>
                    <input type="text" name="title" id="title" class="form-control" value="<?php echo $row["title"];?>">
                </div>
                <div class="form-group">
                    <label for="category_id">文章分類</label>
                    <select name="category_id" id="category_id" class="form-control">
                        <?php foreach($categories as $category){ ?>
                        <option value="<?php echo $category["id"];?>"><?php echo $category["title"];?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="content">文章內容</label>
                    <textarea name="content" id="content" rows="10" class="form-control"><?php echo $row["content"];?></textarea>
                </div>
                <input type="hidden" name="id" value="<?php echo $row["id"];?>">
                <input type="submit" class="btn btn-primary" value="儲存文章">
                
            </form>
            <br>
            <a href="index.php" class="btn btn-info">文章列表</a>
        </div>
    </div>
</div>
<?php include("template/footer.php"); ?>
<script src="https://cdn.ckeditor.com/4.15.0/full/ckeditor.js"></script>
<script>
     CKEDITOR.replace( 'content' );
</script>