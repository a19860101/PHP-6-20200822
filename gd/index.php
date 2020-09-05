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
    imagestring($canvas,1,50,50,"HELLO PHP",$black);
    imagestring($canvas,2,50,70,"HELLO PHP",$red);
    imagestring($canvas,3,50,90,"HELLO PHP",$blue);
    imagestring($canvas,4,50,110,"HELLO PHP",$black);
    imagestring($canvas,5,50,130,"HELLO PHP",$black);
    // header("content-type:image/jpeg");
    // imagejpeg($canvas);
    
    // header("content-type:image/gif");
    // imagegif($canvas);

    header("content-type:image/png");
    imagepng($canvas,"images/".time().".png");
