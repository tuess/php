<?php
	header("Content-type:image/png");
	$image=imagecreate(200, 200);
	$background=imagecolorallocate($image, 255, 255, 0);
	$red=imagecolorallocate($image, 255, 0, 0);
	imagearc($image, 80, 100, 100, 40, 180, 270, $red);
	imagearc($image, 80, 100, 100, 170, 90, 180, $red);
	imagearc($image, 80, 100, 100, 170, 0, 90, $red);
	imagepng($image);
	imagedestroy($image);
?>