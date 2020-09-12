<?php
    include("function.php");
    $row = show($_GET["id"]);
?>
<?php include("template/header.php"); ?>
<?php include("template/nav.php"); ?>
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-8">
            <h2><?php echo $row["title"];?></h2>
            <div class="content">
                <?php echo $row["content"];?>
            </div>
            <div>
                建立時間 <?php echo $row["create_at"];?>
            </div>
        </div>
    </div>
</div>
<?php include("template/footer.php"); ?>