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
 #Modulo de Modificacion de Registros de usuarios del sistema 
session_start();
 
  if(isset($_SESSION['username']))
  { 
    
  }
  else
  {
   session_destroy();
   header("location:../index.php");
  }


require_once '../include/conect.php';

if ( ! empty($_GET))
{//verifica si se reciben variables
	$DesId=$_GET['id'];
	$var1=$_GET['var1'];

	//se evalua la opcion que envia la tabla 
	if ($var1==1)
	{   //opcion 1 es modificacion de datos de usuario
		try	{
		$Cons=$conn->prepare("SELECT * FROM user WHERE id=?");
		$Cons->bindParam(1,$DesId);
		$Cons->execute();
		$resultado=$Cons->fetchAll();}
		catch (Exception $e)
		{//Si encuentra alguna excepcion muestra el error que produjo
  		echo "<br>Ha Fallado algo: " . $e->getMessage();}
  		if ($Cons){
  			foreach ($resultado as $row)
  			{
  				$myid= $row["id"];

  			}
			}else{
  			echo "No hay resultados";}
  	}
}//fin de la verificacion de la opcion que envia la tabla

if (! empty($_POST))
{//verifica las variables que envian desde el formulario

		$mynomuser=$_POST['Nomuser'];
  		$myapeuser=$_POST['Apeuser'];
  		$myloguser=$_POST['Username'];
  		$myclvuser=$_POST['Pasuser'];
  		$myrlvuser=$_POST['Repuser'];
  		$myestatus=$_POST['r1'];
  		$mycoruser=$_POST['email'];
  		$myid=$_POST['id'];

  		switch ($myestatus) 
		{	case "Adm":
				$myEstatus=1;
				break;
			case "Use":
				$myEstatus=2;
				break;}
		//Encriptar el password que se captura, se invoca el archivo,se tiene la clase y la funcion
                include 'classE.php';
                //se llama la funcion encriptar de la clase EncDesc
                $myclvuser=EncDesc::encryption($myclvuser);
 		try	{
  		$Actu = $conn->prepare("UPDATE user SET name=?,lastname=?,username=?,email=?,password=?, status_People_id=? WHERE user . id =?");
		$Actu->bindParam(1,$mynomuser);
		$Actu->bindParam(2,$myapeuser);
		$Actu->bindParam(3,$myloguser);
		$Actu->bindParam(4,$mycoruser);
		$Actu->bindParam(5,$myclvuser);
		$Actu->bindParam(6,$myEstatus);
		$Actu->bindParam(7,$myid);
		$Actu->execute();}
		
		catch (Exception $e)
		{//Si encuentra alguna excepcion muestra el error que produjo
  		echo "<br>Ha Fallado algo: " . $e->getMessage();}
  		echo "<script> alert('Los datos del Usuario se han MODIFICADO con Exito'); </script>";
}
?>
<!doctype html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Formulario de contacto</title>
		<link rel="stylesheet" href="css.css">
<!-- scipt para evaluar los datos del formulario antes de enviarlo -->
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
	}
</script>
	</head>
<body>
	
	<form name='formulario' id='formulario' method='post' action='conuser.php' target='_self' enctype="multipart/form-data" > 
	<h3><u>Modifique los datos.</u></h3>
	
<!--inicio de los Datos -->
	Numero de Registro:
	<input type='text' name='id' id='id' value="<?php echo $row["id"];?>" readonly="readonly">
	<br>
	<br>Nombre:   
	<input type='text' name='Nomuser' id='Nomuser' value="<?php echo $row["name"];?>"> 
	<br>
	<br>Apellidos: 
	<input type='text' name='Apeuser' id='Apeuser' value="<?php echo $row["lastname"];?>">
	<br>
	<br>Nombre de Usuario: 
	<input type='text' name='Username' id='Username' value="<?php echo $row["username"];?>"> 
	<br>
	<br>Clave de Acceso:
	<input type="text" name='Pasuser' id='Pasuser' value="<?php echo $row["password"];?>">
	<br>
	<br>Confirme la clave de Acceso:
	<input type="text" name='Repuser' id='Repuser' value="<?php echo $row["password"];?>">
	<br>
	<br>Tipo de Cuenta.
	<input type="radio" name="r1" id="r1" value="Adm" required>Administrador
	<input type="radio" name="r1" id="r1" value="Use" required>Usuario
	<br>
	<br>E-MAIL:
	<input type='text' name='email' id='email' pattern="^[a-zA-Z0-9.!#$%'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" required	value="<?php echo $row["email"];?>" onclick="if(this.value=='ejemplo@hotmail.com') this.value=''" onblur="if(this.value=='') this.value='ejemplo@hotmail.com'">
	<br>
 	<br>
 	<br>
	<input id=boton-enviar type='submit' value='Enviar'> 
	
</form>
</body>
</html>
