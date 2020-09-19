<?php
    include("function/category.php");
    include("function/user.php");
    $rows = showAllCategory();
    
?>
<?php include("template/header.php"); ?>
<?php include("template/nav.php"); ?>
<?php
    access_denied();
?>
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-8">
            <h2>新增文章</h2>
            <hr>
            <form action="store-post.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="title">文章標題</label>
                    <input type="text" name="title" id="title" class="form-control">
                </div>
                <div>
                    <label for="cover">封面</label>
                    <input type="file" name="cover" id="cover">
                </div>
                <div class="form-group">
                    <label for="category_id">分類</label>
                    <select name="category_id" id="category_id" class="form-control">
                        <?php foreach($rows as $row){ ?>
                        <option value="<?php echo $row["id"]?>"><?php echo $row["title"]?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="content">文章內容</label>
                    <textarea name="content" id="content" rows="10" class="form-control"></textarea>
                </div>
                <input type="submit" class="btn btn-primary" value="新增文章">
            </form>
        </div>
    </div>
</div>
<?php include("template/footer.php"); ?>
<script src="https://cdn.ckeditor.com/4.15.0/full/ckeditor.js"></script>
<script>
     CKEDITOR.replace( 'content' );
</script>