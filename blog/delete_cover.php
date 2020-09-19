<?php
    include("function.php");

    unlink("images/".$_GET["cover"]);
    unlink("thumbs/".$_GET["cover"]);
    
    deleteCover($_GET["id"],"");
    header("location:edit-post.php?id=".$_GET["id"]);
