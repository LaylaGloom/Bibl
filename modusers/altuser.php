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
 #modulo de Alta de Usuarios de Sistema

session_start();
 
  if(isset($_SESSION['username']))
  { }else{
   session_destroy();
   header("location:../index.php");}

$myestatus="";

if ( ! empty($_POST))
{
  require_once '../include/conect.php';
  $mynomuser=$_POST['Nomuser'];
  $myapeuser=$_POST['Apeuser'];
  $myloguser=$_POST['Username'];
  $myclvuser=$_POST['Pasuser'];
  $myrlvuser=$_POST['Repuser'];
  $mycoruser=$_POST['email'];
  $myestatus=$_POST['r1'];

switch ($myestatus) 
	{ case "Adm":
		$Estatus=1;
		break;
	  case "Use":
		$Estatus=2;
		break;}

  	//se realiza la consulta a la Base de Datos del login de Usuario para saber si ya esta registrado
    $login = $conn->prepare("SELECT * FROM user WHERE username=?");
    $login->bindParam(1,$myloguser); //le decimos a la consulta cuál es el parámetro a pasar 
    $login->execute(); //ejecutamos la consulta
    //evaluamos si encuentra filas (0 filas-> no hay reg, 1 fila-> si hay reg)
  	if($login->rowCount()==1)
  	{   //se manda una alerta a la pagina indicando que el usuario ya existe
  		echo '<script language="javascript" type="text/javascript"> alert("Usuario ya Registrado");
  			</script>';
  	}
  	//se realiza la consulta a la Base de Datos de correo de Usuario para saber si ya esta registrado
  	$login = $conn->prepare("SELECT * FROM user WHERE email=?");
    $login->bindParam(1,$mycoruser); //le decimos a la consulta cuál es el parámetro a pasar 
    $login->execute(); //ejecutamos la consulta
    //evaluamos si encuentra filas (0 filas-> no hay reg, 1 fila-> si hay reg)
  	if($login->rowCount()==1)
  	{   //se manda una alerta a la pagina indicando que el usuario ya existe
  		echo '<script language="javascript" type="text/javascript"> alert("Correo ya Registrado");
  			</script>';
  	}
  	echo "<br>la clave sin encrptar es: ".$myclvuser;
  	//se invoca el archivo donde se encuentra la clase para encriptar y desencriptar
  	include 'classE.php';
  	//se llama la funcion encriptar de la clase EncDesc
  	$myclvuser=EncDesc::encryption($myclvuser);
  	echo "<br>la varibale encriptada es: ".$myclvuser;

  	//condicion que se envia al usuario para confirmar el registro o cancelarlo
  	
  	try { //elemento try que permite evaluar el registro
  		$Id_user=NULL; //variable null para registrar el id en automatico
  		
  		$Inlogin=$conn->prepare("INSERT INTO user (id,name,lastname,username,email,Password,status_People_id) VALUES (?,?,?,?,?,?,?)");
  		//le asiganmos los valores de las variables a los elementos 
  		$Inlogin->bindParam(1,$Id_user);
  		$Inlogin->bindParam(2,$mynomuser);
  		$Inlogin->bindParam(3,$myapeuser);
  		$Inlogin->bindParam(4,$myloguser);
  		$Inlogin->bindParam(5,$mycoruser);
  		$Inlogin->bindParam(6,$myclvuser);
  		$Inlogin->bindParam(7,$Estatus);
			$Inlogin->execute();
  		}
		catch (Exception $e) {//Si encuentra alguna excepcion muestra el error que produjo
         echo "<br>Ha Fallado algo: " . $e->getMessage();}
  		//se manda una alerta a la pagina indicando que el usuario se ingreso correctamente
  		
  		echo '<script language="javascript" type="text/javascript"> alert("Usuario Registrado con Exito");
  			</script>';
  	
} //cierre de if que indica si se mandan los datos del formulario

?>
<!doctype html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Formulario de contacto</title>
		<link rel="stylesheet" href="css.css">

<script language="javascript" type="text/javascript">
	function FunEval()
	{
		var valnom=document.submit.Nomuser.value;
		var Apeuser=document.submit.Apeuser.value;
		var valclv1=document.submit.Pasuser.value;
		var valclv2=document.submit.Repuser.value;
		var vallog=document.submit.Username.value;
		var email=document.submit.email.value;
		
		if (valnom.length>=25)
		{	alert("Tu nombre es demasiado grande. Redúcelo.");
      		return false;} 
		if (vallog.length<8)
		{	alert("Tu Nombre de Usuario es demasiado corto. Ocho Caracteres Minimo.");
      		return false;}
		if (valclv1.length<8)
		{	alert("La contraseña es muy corta. Ocho Caracteres Minimo.");
      		return false;}
		if (valclv1!=valclv2)
		{	alert("Las Claves de Acceso No son identicas: Intente Nuevamente");
			return false;}
		if (valnom=="Nombre Completo")
			{	alert("Capture Correctamente el Nombre: Intente Nuevamente");
			return false;}
		if (Apeuser=="Apellido Completo")
			{	alert("Capture Correctamente los Apellidos: Intente Nuevamente");
			return false;}
		if (vallog=="Solo Texto y Numeros")
			{	alert("Capture Correctamente el Login: Intente Nuevamente");
			return false;}
		if (valclv1=="Solo Texto y Numeros")
			{	alert("Capture Correctamente la clave: Intente Nuevamente");
			return false;}
		if (email=="ejemplo@upp.edu.mx")
			{	alert("Capture Correctamente el Correo: Intente Nuevamente");
			return false;}

		//if(this.value=='ejemplo@upp.edu.mx') this.value=''" onblur="if(this.value=='') this.value='ejemplo@hotmail.com'
	}
</script>
	</head>
<body>
	
	<form name='submit' id='submit' method='post' action='altuser.php' target='_self' enctype="multipart/form-data" onsubmit="return FunEval()"> 
	<h3><u>Capture los datos del nuevo Usuario del Sitema</u></h3>
<!--inicio de los Datos -->
	<br>Nombre:   
	<input type='text' name='Nomuser' id='Nomuser' autofocus placeholder="Nombre Completo" required/> 
	<br>
	<br>Apellidos: 
	<input type='text' name='Apeuser' id='Apeuser' placeholder="Apellido Completo" required/>
	<br>
	<br>Nombre de Usuario: 
	<input type='text' name='Username' id='Username' placeholder="Solo Texto y Numeros" required/> 
	<br>
	<br>Clave de Acceso:
	<input type="Password" name='Pasuser' id='Pasuser' placeholder="Solo Texto y Numeros" required/>
	<br>
	<br>Ratificar Clave de Acceso:
	<input type="Password" name='Repuser' id='Repuser' placeholder="Solo Texto y Numeros" required/>
	<br>
	<br>E-MAIL:
	<input type='text' name='email' id='email' pattern="^[a-zA-Z0-9.!#$%'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" placeholder="ejemplo@upp.edu.mx" onclick="return FunEval()" required >
	<br><br>Tipo de cuenta:
	
	<input type="radio" name="r1" id="r1" value="Adm" required>Administrador
	<input type="radio" name="r1" id="r1" value="Use" required>Usuario
 	<br><br>
	<input  id=boton-enviar type='submit' value='Guardar' > 
</form>
</body>
</html>