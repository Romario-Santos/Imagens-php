<?php
header("Content-type: image/jpeg");
$image = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($image,0,0,0);
 #$titleColor = imagecolorallocate($image,110,110,110);

imagettftext($image,32,0,330,150,$titleColor,__DIR__.DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR."Bevan".DIRECTORY_SEPARATOR."Bevan-Regular.ttf","CERTIFICADO");
imagettftext($image,32,0,390,350,$titleColor,__DIR__.DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR."Playball".DIRECTORY_SEPARATOR."Playball-Regular.ttf","Rogerio Santos");
imagestring($image,3,440,370,utf8_decode("concluído em: ".date("d/m/Y")),$titleColor);



imagejpeg($image);

imagedestroy($image);