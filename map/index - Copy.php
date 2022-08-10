<?php
header("Content-Type: image/png");

if( isset($_GET["x"]) && isset($_GET["y"]) ) {
	$x = $_GET["x"];
	$y = $_GET["y"];
	
	$icox = -($x - 3000) - 5910;
	$icoy = $y + 3000 - 5950;

	$img = imagecreatefromjpeg("map.jpg");
	$red = imagecolorallocate($img, 255, 0, 0);
	
	if(isset($_GET["ico"]))
	{
		$ico = $_GET["ico"];
		$im2 = imagecreatefrompng("$ico.png");
		imagecopy($img, $im2, (imagesx($img)/2)-(imagesx($im2)/2) + $x, (imagesy($img)/2)-(imagesy($im2)/2) - $y, 0, 0, imagesx($im2), imagesy($im2));
		imagedestroy($im2);
	}
	$image_p = imagecreatetruecolor(200, 100);
	imagecopyresampled($image_p, $img, 0, 0, 2900 + $x, 2950 - $y, 200 , 100, 200, 100);

	imagepng($image_p);

	imagedestroy($img);
	imagedestroy($image_p);
}
?>