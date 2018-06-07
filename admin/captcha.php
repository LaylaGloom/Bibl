<?php
	#crea la imagen y establece el color de fondo
	$captcha = imagecreatetruecolor(120,35);
	$color = rand(128,160);
	$background_color = imagecolorallocate($captcha, $color, $color, $color);
	imagefill($captcha, 0, 0, $background_color);
	
	#dibuja solo las lineas
	for($i=0;$i<10;$i++){
		$color = rand(48,96);
		imageline($captcha, rand(0,130),rand(0,35), rand(0,130), rand(0,35),imagecolorallocate($captcha, $color, $color, $color));
	}
	
	#generar una cadena aleatoria de 5 caracteres
	$string = substr(md5(rand()*time()),0,5);

	#hacer una cadena mayúscula y reemplazar "O" y "0" para evitar errores
	$string = strtoupper($string);
	$string = str_replace("O","B", $string);
	$string = str_replace("0","C", $string);

	#guardar cadena en la clave de sesión "captcha"
	session_start();
	$_SESSION["captcha"]=$string;

	#coloca cada caracter en una posición aleatoria
	putenv('GDFONTPATH=' . realpath('.'));
	$font = 'arial.ttf';
	for($i=0;$i<5;$i++){
		$color = rand(0,32);
		if(file_exists($font)){
			$x=4+$i*23+rand(0,6);
			$y=rand(18,28);
			imagettftext  ($captcha, 15, rand(-25,25), $x, $y, imagecolorallocate($captcha, $color, $color, $color), $font, $string[$i]);
		}else{
			$x=5+$i*24+rand(0,6);
			$y=rand(1,18);
			imagestring($captcha, 5, $x, $y, $string[$i], imagecolorallocate($captcha, $color, $color, $color));
		}
	}
	
	#aplica la distorsión a la imagen
	$matrix = array(array(1, 1, 1), array(1.0, 7, 1.0), array(1, 1, 1));
	imageconvolution($captcha, $matrix, 16, 32);

	#Evitamos que capten el captcha
	header("Expires: 0");
	header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
	header("Cache-Control: private",false); 

	#regresamos la imagen
	header("Content-type: image/gif");
	imagejpeg($captcha);
?>