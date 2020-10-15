<?php
header("Content-type: image/jpeg");
$kep= imagecreatefromjpeg("kep.jpg");
	$font = dirname(__FILE__) . '/arialbd.ttf';
	$feher  = imagecolorallocate($kep, 255, 255, 255);
	$asd = 'asd';
	imagettftext($kep, 15, 1, 50, 0, $feher, $font, $asd);
imagejpeg($kep);
?>