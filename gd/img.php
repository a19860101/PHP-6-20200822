<?php
    $img = "img.jpg";

    $canvas = imagecreatefromjpeg($img);
    $canvas_w = imagesx($canvas);
    $canvas_h = imagesy($canvas);

    // $new_w = $canvas_w / 3;
    // $new_h = $canvas_h / 3;

    $new_w = 1000;
    $new_h = $canvas_h / $canvas_w * $new_w;

    $new_canvas = imagecreatetruecolor($new_w,$new_h);

    imagecopyresampled($new_canvas,$canvas,0,0,0,0,$new_w,$new_h,$canvas_w,$canvas_h);
    imagejpeg($new_canvas,"images/000.jpg");
    imagepng($new_canvas,"images/000.png");
    imagegif($new_canvas,"images/000.gif");