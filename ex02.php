<?php
$image = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($image,0,0,0);
$gray = $titleColor = imagecolorallocate($image,110,110,110);

imagestring($image,5,320,150,"CERTIFICADO DE CONCLUSAO DO CURSO JAVASCRIPT",$titleColor);
imagestring($image,5,440,350,"Rogerio Santos",$gray);
imagestring($image,3,440,370,utf8_decode("concluído em: ".date("d/m/Y")),$titleColor);

header("Content-type: image/jpeg");

imagejpeg($image,"certificado".date("Y-m-d").".jpg",50);

imagedestroy($image);