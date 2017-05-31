<?php

function LoadJpeg($imgname) {
    /* Attempt to open */
    $src = imagecreatefrompng($imgname) or die('Problem with source');;
    $out = ImageCreateTrueColor(imagesx($src),imagesy($src)) or die('Problem In Creating image');

    for ($x = 0; $x < imagesx($src); $x++) {

        for ($y = 0; $y < imagesy($src); $y++) {

            $src_pix = imagecolorat($src,$x,$y);
            $src_pix_array = rgb_to_array($src_pix);

            if ($src_pix_array[0] > 100 && $src_pix_array[1] >100 && $src_pix_array[2] > 100) {
                $src_pix_array[0] = 255;
                $src_pix_array[1] = 255;
                $src_pix_array[2] = 255;
            } else{
                $src_pix_array[0] = 0;
                $src_pix_array[1] = 0;
                $src_pix_array[2] = 0;
            }

            imagesetpixel($out, $x, $y, imagecolorallocate($out, $src_pix_array[0], $src_pix_array[1], $src_pix_array[2]));

        }

    }

    imagejpeg($out, 'output.jpg',100) or die('Problem saving output image');

    for($fx = 0; $fx <60 ;$fx++){
        imagesetpixel($out, $fx, 0, imagecolorallocate($out, 255, 255, 255));
    }

    for($fy = 0; $fy < 20;$fy++){
        imagesetpixel($out, 59, $fy, imagecolorallocate($out, 255, 255, 255));
    }

    for($fx = 0; $fx <60 ;$fx++){
        imagesetpixel($out, $fx, 19, imagecolorallocate($out, 255, 255, 255));
    }

    for($fy = 0;$fy < 20;$fy++){
        imagesetpixel($out, 0, $fy, imagecolorallocate($out, 255, 255, 255));
    }

}

$img = LoadJpeg('gerarCaptcha.asp.png');


function rgb_to_array($rgb) {
    $a[0] = ($rgb >> 16) & 0xFF;
    $a[1] = ($rgb >> 8) & 0xFF;
    $a[2] = $rgb & 0xFF;

    return $a;
}


?>
