<?php

//criando uma imagem usando php

header("content-Type: image/png");
//cria uma inagem tamanho daimagem
$image = imagecreate(256,256);

//primeira cor criada vira cor de fundo
//imagecolorallocate($image,red,green,blue)
$black = imagecolorallocate($image,0,0,0);

$red = imagecolorallocate($image,255,0,0);

//escre algo na imagem

//imagestring($image,tamanho fonte,x,y,string,color);
imagestring($image,5,10,120,"Ola essa imagem foi gerada ",$red);
imagestring($image,5,90,140,"pelo PHP",$red);

//gera a imagem
imagepng($image);

//destroi a variavel da imagem
imagedestroy($image);