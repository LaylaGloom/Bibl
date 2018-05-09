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
	<h1>CONSULTA DE USUARIO</h1>
	<form name='formulario' id='formulario' method='post' action='altuser.php' target='_self' enctype="multipart/form-data"> 
	<h3><u>Seleccione los Criterios de Busaqueda de Información</u></h3>
	
<!--inicio de los Datos -->
	<br>DATOS DEL USUARIO   
	<br>
	<input type='radio' name='alt' id='AreaA' value="Solo Texto y Numeros" required/>Por Numero de Cuenta:   
	<input type='text' name='Nomuser' id='Nomuser' value="Solo Numeros">
	<br>
	<input type='radio' name='alt' id='AreaA' value="Solo Texto y Numeros" required/>Por Nombre: 
	<input type='text' name='Nomuser' id='Nomuser' value="Nombre Completo">
	<br>
	<br>DATOS DE LA CARRERA
	<br>
	<input type='radio' name='alt' id='AreaA' value="Solo Texto y Numeros" required/>Licenciatura: 
	<input type='radio' name='alt' id='AreaA' value="Solo Texto y Numeros" required/>Ingenieriea:
	<input type='radio' name='alt' id='AreaA' value="Solo Texto y Numeros" required/>Especialidad:
	<input type='radio' name='alt' id='AreaA' value="Solo Texto y Numeros" required/>Maestria:
	<input type='radio' name='alt' id='AreaA' value="Solo Texto y Numeros" required/>Doctorado:

	<br>
	<table border="1" width="100%" class="table table-bordered table-hover">
	<thead>
		<th width="5%">ID</th>
		<th width="18%">Numero Cuenta</th>
		<th width="28%">Nombres</th>
		<th width="44%">Area</th>
		<th width="5%">Estatus</th>
	</thead>
	<br>
	<thead>
		<th width="5%">4405</th>
		<th width="18%">1731114966</th>
		<th width="28%">HERNANDEZ CUEVAS HECTOR DE JESUS</th>
		<th width="44%">INGENIERIA EN BIOTECNOLOGIA- PLAN 2017</th>
		<th width="5%">Activo</th>
	</thead>



<!--
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
	<br>Clave de Acceso:
	<input type="Password" name='Numuser' id='Numuser' value="Solo Texto y Numeros">
	<br>
	<br>E-MAIL:
	<input type='text' name='email' id='email' pattern="^[a-zA-Z0-9.!#$%'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" required	value="ejemplo@hotmail.com" onclick="if(this.value=='ejemplo@hotmail.com') this.value=''" onblur="if(this.value=='') this.value='ejemplo@hotmail.com'">
	--><br>
 		<input  id=boton-enviar type='submit' value='Enviar'> 
	
</form>
</body>
</html>
