<?php


define('CAPTCHA_STRENGTH', 5);


session_start();

// Md5 to generate the random string
$random_str = md5(microtime());



$captcha_str = substr($random_str, 0, CAPTCHA_STRENGTH);

$width = (CAPTCHA_STRENGTH * 10)+10;
$height = 20;

$captcha_img =ImageCreate($width, $height);


$back_color = ImageColorAllocate($captcha_img, 0, 0, 0);


$text_color = ImageColorAllocate($captcha_img, 255, 255, 255);


$line_color = ImageColorAllocate($captcha_img, 255, 0, 0);

ImageFill($captcha_img, 0, 0, $back_color);

for($i = 0; $i < $width; $i += 5)
    ImageLine($captcha_img, $i, 0, $i, 20, $line_color);

for($i = 0; $i < 20; $i += 5)
    ImageLine($captcha_img, 0, $i, $width, $i , $line_color);


ImageString($captcha_img, 5, 5, 2, $captcha_str, $text_color);


$_SESSION['key'] = $captcha_str;


header("Content-type: image/jpeg");

// Output image to browser
ImageJPEG($captcha_img);
ImageDestroy($captcha_img);
?>
