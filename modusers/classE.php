<?php
 #Sistema de Gestion de Acceso a Biblioteca (Torniquete)
 #Copyright: (c) 2018 Universidad Politecnica de Pachuca - Todos los derechos Reservados.
 #Realizado por el Departemento de Tecnologia de la Informacion y Telecomunicaciones
 #Fecha de Inicio: 14/03/2018
 #Fecha de Modificación: 28/05/2018
 #Version 1.3
 #Proyecto y Documentacion a cargo del L.S.C. Juvencio Francisco Moreno Vargas
 #Alumnos de Servicio Social que apoyan en el desarrollo y Programacion de Modulos Torniquete
 #Autor1: Juan Daniel Soto Dimas
 #Autor2: José Elias Lopéz Duran
 
 //se definen algunos valores que se utilizaran en la clase

define('method', 'AES-256-CBC');
define('secret_k','PacoDriloUPP78');
define('secret_v', '150518');

/**
* ***** Class para enciptar y desencriptar***** 
*/
class EncDesc
{
	public static function encryption($string)
	{
		$Salida=FALSE;
		$Key=hash('sha256',secret_k);
		$Iv=substr(hash('sha256',secret_v),0,16);
		$Salida=openssl_encrypt($string, method, $Key, 0 , $Iv);
		$Salida=base64_encode($Salida);
		return $Salida;
	}

	public static function descryption($string)
	{
		$Key=hash('sha256', secret_k);
		$Iv=substr(hash('sha256', secret_v), 0,16);
		$Salida=openssl_decrypt(base64_decode($string), method, $Key, 0,$Iv);
		return $Salida;
	}
}

?>