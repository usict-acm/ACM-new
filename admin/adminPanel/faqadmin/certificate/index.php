<?php 
header('Content-type: image/jpeg');
$font=realpath('arial.ttf');
$image=imagecreatefromjpeg("format.jpeg");
$color=imagecolorallocate($image, 51, 51, 102);
$date=date('d F, Y');
imagettftext($image, 18, 0, 880, 188, $color,$font, $date);
$name="YOUTUBE";
imagettftext($image, 48, 0, 120, 520, $color,$font, $name);
//imagejpeg($image,"certificate/$name.jpg");
imagejpeg($image);
imagedestroy($image);
?>