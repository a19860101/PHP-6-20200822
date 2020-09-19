<?php include("template/header.php"); ?>
<?php include("template/nav.php"); ?>
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-8">
            <h2>新增分類</h2>
            <hr>
            <form action="" method="post">
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
    </div>
</div>
<?php include("template/footer.php"); ?>
