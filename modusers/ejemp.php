<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ejemplo</title>
</head>
<body>
	<?php
	//**** ejemplo de encriptar y desencriptar ****
	include "classE.php";
	$clave="ekNIVzErUkd0SG9FNWZIOCtLZExpZz09";
	echo "<br>valor jfmoreno78 encriptada: ".$clave;
	$clave2="eGdtMDZSME1nMk8rYXZZVE1xVUZwZz09 ";
	echo "<br>valor joseupp123456 encriptada: ".$clave2;

	$clave3=EncDesc::descryption($clave);
	$clave4=EncDesc::descryption($clave2);

	echo "<br>valor clave desencriptada :".$clave3;
	echo "<br>valor clave2 desencriptada :".$clave4;
?>
</body>
</html>