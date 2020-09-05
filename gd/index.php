<?php
    $width = 800;
    $height = 600;
    $canvas = imagecreatetruecolor($width,$height);

    $red = imagecolorallocate($canvas,255,0,0);
    $blue = imagecolorallocate($canvas,0,0,255);
    $black = imagecolorallocate($canvas,0,0,0);
    $white = imagecolorallocate($canvas,255,255,255);

    imagefill($canvas,0,0,$white);
    imageline($canvas,0,0,800,600,$red);
    imageline($canvas,0,600,800,0,$blue);

    // header("content-type:image/jpeg");
    // imagejpeg($canvas);
    
    // header("content-type:image/gif");
    // imagegif($canvas);

    header("content-type:image/png");
    imagepng($canvas);
