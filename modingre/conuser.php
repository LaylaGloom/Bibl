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
  { }
  else
  {
   session_destroy();
   header("location:../index.php");
  }
require_once '../include/conect.php';

if ( ! empty($_GET))
{//verifica si se reciben variables
	$ValId=$_GET['id'];
	$var1=$_GET['var1'];
	
	//se evalua la opcion que envia la tabla 
	if ($var1==1)
	{   //opcion 1 es modificacion de datos de usuario
		try	{
		$Cons=$conn->prepare("SELECT * FROM client WHERE id=?");
		$Cons->bindParam(1,$ValId);
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

		$mynumuser=$_POST['Numuser'];
  		$mynamuser=$_POST['nameuser'];
  		$myareuser=$_POST['areauser'];
  		$myestatus=$_POST['r1'];
  		$myid=$_POST['id'];
  		$myEntered="true";

  		if ($myEstatus="hab"){
  			$myestatus=1;}
  		else{
  			$myestatus=3;}

	try	{
  		$Actu = $conn->prepare("UPDATE client SET identification_Number=?, name=?, area=?, already_Entered=?, status_People_id=? WHERE client . id =?");
		$Actu->bindParam(1,$mynumuser);
		$Actu->bindParam(2,$mynamuser);
		$Actu->bindParam(3,$myareuser);
		$Actu->bindParam(4,$myEntered);
		$Actu->bindParam(5,$myestatus);
		$Actu->bindParam(6,$myid);
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
		var valnum=document.submit.Numuser.value;
		var valnom=document.submit.nameuser.value;
		var valare=document.submit.areauser.value;
		
		
		if (valnum.length>10)
		{	alert("Numero de cuenta es demasiado grande. Diez digitos");
			return false;}	
		if (valnom.length>=35)
		{	alert("Nombre de Usuario es demasiado grande. Redúcelo.");
      		return false;} 
      	if (valnom.length<=5)
		{	alert("Nombre de Usuario es demasiado Corto.");
      		return false;} 
		if (valare.length<8)
		{	alert("Area o Adscripcion Incorrecta, Intenta Nuevamente.");
      		return false;}
		
		if(confirm('Deseas MODIFICAR LOS DATOS de Usuario?'))
		{
		  document.location.href='conuser.php';
		}
		else
		{ 
		  alert('Operacion Cancelada');
		  document.location.href='moduser.php'; 
		  alert('Operacion Cancelada');
		 }

	}
</script>
	</head>
<body>
	
	<form name='submit' id='submit' method='post' action='conuser.php' target='_self' enctype="multipart/form-data" onsubmit="return FunEval()" > 
	<h3><u>Modifique los datos.</u></h3>
	<!--inicio de los Datos -->
	Numero de Registro:
	<input type='text' name='id' id='id' value="<?php echo $row["id"];?>" readonly="readonly" />
	<br>
	<br>Numero de Cuenta:   
	<input type='text' name='Numuser' id='Numuser' value="<?php echo $row["identification_Number"];?>" size="10" > 
	<br>
	<br>Nombre: 
	<input type='text' name='nameuser' id='nameuser' size="45" value="<?php echo $row["name"];?>">
	<br>
	<br>Carrera o Area del Usuario: 
	<input type='text' name='areauser' id='areauser' size="70" value="<?php echo $row["area"];?>"> 
	<br>
	<br>Estatus de Usuario:
	<input type="radio" name="r1" id="r1" value="hab" required>Habilitado
	<input type="radio" name="r1" id="r1" value="des" required>Deshabilitado
	<br>
	<br>
	<br>
 	<br>
 	<br>
	<input id=boton-enviar type='submit' value='Enviar'"> 
	
</form>
</body>
</html>
