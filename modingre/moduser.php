<?php





?>
<!doctype html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Formulario de contacto</title>
		<link rel="stylesheet" href="css.css">
	</head>
<body>
	<h1>MODIFICACION DE USUARIO</h1>
	<form name='formulario' id='formulario' method='post' action='altuser.php' target='_self' enctype="multipart/form-data"> 
	<h3><u>Capture los datos a modificar del Usuario del Sitema</u></h3>
	
<!--inicio de los Datos -->
	<br>Nombre:   
	<input type='text' name='Nomuser' id='Nomuser' value="Nombre Completo"> 
	<br>
	<br>Apellidos: 
	<input type='text' name='Apeuser' id='Apeuser' value="Apellido Completo">
	<br>
	<br>Nombre de Usuario: 
	<input type='text' name='Username' id='Username' value="Solo Texto y Numeros"> 
	<br>
	<br>Clave de Acceso:
	<input type="Password" name='Numuser' id='Numuser' value="Solo Texto y Numeros">
	<br>
	<br>Ratificar Clave de Acceso:
	<input type="Password" name='Numuser' id='Numuser' value="Solo Texto y Numeros">
	<br>
	<br>E-MAIL:
	<input type='text' name='email' id='email' pattern="^[a-zA-Z0-9.!#$%'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" required	value="ejemplo@hotmail.com" onclick="if(this.value=='ejemplo@hotmail.com') this.value=''" onblur="if(this.value=='') this.value='ejemplo@hotmail.com'">
	<br>
	<br>
 	<br>
	<input  id=boton-enviar type='submit' value='Enviar'> 
	
</form>
</body>
</html>
