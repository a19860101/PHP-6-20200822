<?php
    $width = 1200;
    $height = 600;
    $canvas = imagecreatetruecolor($width,$height);

    $red = imagecolorallocate($canvas,255,0,0);
    $blue = imagecolorallocate($canvas,0,0,255);
    $black = imagecolorallocate($canvas,0,0,0);
    $white = imagecolorallocate($canvas,255,255,255);

    imagefill($canvas,0,0,$white);

    header("content-type:image/jpeg");
    imagejpeg($canvas);
