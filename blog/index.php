<?php
    include("function.php");
    $rows = showAll();
?>
<?php include("template/header.php"); ?>
<?php include("template/nav.php"); ?>
<div class="container py-4">
    <div class="row justify-content-center">
        <?php foreach($rows as $row){ ?>
        <div class="col-lg-8 col-12 py-3">
            <h2><?php echo $row["title"];?></h2>
            <div class="content py-2">
                <?php echo strip_tags(mb_substr($row["content"],0,100,"utf-8")); ?>
            </div>
            <a href="show-post.php?id=<?php echo $row["id"];?>" class="btn btn-primary">繼續閱讀...</a>
            <div>
                建立時間 <?php echo $row["create_at"]; ?>
            </div>
            <hr>
        </div>
        <?php } ?>
    </div>
            <?php 
                session_start();
                var_dump($_SESSION["AUTH"]);
            ?>
</div>
<?php include("template/footer.php"); ?>