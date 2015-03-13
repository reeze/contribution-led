<?php

// This will be used to generate a git repo contains the text you want to say.


$text = "I LOVE PHP";

if (!function_exists("imagecreatetruecolor")) {
	die("GD extension required");
}

// Github's dashboard size 10 x 10 per pixel
// TODO width should not be fixed
$img = imagecreatetruecolor("530", "70");
$color = imagecolorallocate($im, 0, 0, 0);


imagettftext($img, 70, 0, 0, 0, $color);

imagepng($img);
imagedestroy($img);