<?php

$file = "certificado.jpg";
$font1 = __DIR__.DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR."Bevan".DIRECTORY_SEPARATOR."Bevan-Regular.ttf";
$font2 = __DIR__.DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR."Playball".DIRECTORY_SEPARATOR."Playball-Regular.ttf";
$titulo = "CERTIFICADO DE PHP";
$nome = "Romário Santos";
$data = utf8_decode("concluído em: ".date("d/m/Y"));



//função que calcula tamanho que o texto vai oculpar  width pixel

 function calculaTexto($texto,$font,$tamanho){

list($esquerda,, $direita) = imageftbbox($tamanho, 0, $font, $texto);

$width =$direita - $esquerda;
return  $width;
}

//função centraliza texto 

function centralizaTexto($file,$texto,$fonte,$tamanho){
    list($old_width,$old_height) = getimagesize($file);
    return ($old_width - calculaTexto($texto,$fonte,$tamanho) ) /2;
}



$tituloCentralizado =  centralizaTexto($file,$titulo,$font1,32);


function alinhaDireita($file,$porcentagem,$texto,$fonte,$tamanho){
    list($old_width,$old_height) = getimagesize($file);
    $adireita = ($old_width * $porcentagem)/100;
    return ($old_width - calculaTexto($texto,$fonte,$tamanho)) - $adireita;


}

$nomeAdireita =  alinhaDireita($file,20,$nome,$font2,32);
$dataAdireita =  alinhaDireita($file,20,$data,$font2,10);



header("Content-type: image/jpeg");
$image = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($image,0,0,0);
 #$titleColor = imagecolorallocate($image,110,110,110);

imagettftext($image,32,0,$tituloCentralizado,150,$titleColor,$font1,$titulo);
imagettftext($image,32,0,$nomeAdireita,350,$titleColor,$font2,$nome);
imagettftext($image,10,0,$dataAdireita,370,$titleColor,$font2,$data);
//imagestring($image,3,440,370,$data,$titleColor);



imagejpeg($image);

imagedestroy($image);