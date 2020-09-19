<?php
    include("function/category.php");
    $id = $_POST["id"];
    deleteCategory($id);

    header("location:create-category.php");