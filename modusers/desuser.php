<?php
 #Sistema de Gestion de Acceso a Biblioteca (Torniquete)
 #Copyright: (c) 2018 Universidad Politecnica de Pachuca - Todos los derechos Reservados.
 #Realizado por el Departemento de Tecnologia de la Informacion y Telecomunicaciones
 #Fecha de Inicio: 14/03/2018
 #Fecha de Modificación: 28/03/2018
 #Version 1.3
 #Proyecto y Documentacion a cargo del L.S.C. Juvencio Francisco Moreno Vargas
 #Alumnos de Servicio Social que apoyan en el desarrollo y Programacion de Modulos Torniquete
 #Autor1: Juan Daniel Soto Dimas
 #Autor2: José Elias Lopéz Duran
 #Modulo de dehabilitacion de usuarios del sistema 

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

//recibo las variables que se envian desde el metodo get
if ( ! empty($_GET))
{
	$DesId=$_GET['id'];
	$var1=$_GET['var1'];

	//se evalua la opcion que envia la tabla 
	if ($var1==1)
	{	
		echo "<script>
				if(confirm('Deseas DESHABILITAR al Usuario?')){
				document.location.href='desuser.php?var1=3&id=$DesId';}
				else{ 
				alert('Operacion Cancelada');}</script>";
	}
	if ($var1==2)
	{
		//static $VarFil=$DesId;
		echo "<script>if(confirm('Deseas ELIMINAR al Usuario?')){
				document.location.href='desuser.php?var1=4&id=$DesId';}
				else{ 
				alert('Operacion Cancelada');}</script>";
	}
	if ($var1==3)
	{
		try	{
		$Estatus=3;
		//parte para la actualizacion del registro
		$desh = $conn->prepare("UPDATE user SET status_People_id = ? WHERE user . id =?");
		$desh->bindParam(1,$Estatus);
		$desh->bindParam(2,$DesId);
		$desh->execute();}
		catch (Exception $e) 
		{//Si encuentra alguna excepcion muestra el error que produjo
        echo "<br>Ha Fallado algo: " . $e->getMessage();}
		echo "<script> alert('Usuario DESHABILITADO con Exito'); </script>";
	}
	if ($var1==4)
	{
		try
		{
		$elim=$conn->prepare("DELETE FROM user WHERE id=?");
		$elim->bindParam(1,$DesId);
		$elim->execute();}
		catch (Exception $e) 
		{//Si encuentra alguna excepcion muestra el error que produjo
        echo "<br>Ha Fallado algo: " . $e->getMessage();}
		echo "<script> alert('Usuario ELIMINADO con Exito'); </script>";
	}
}
try
{
  $user_id=null;
  $sql1="select * from user";
  $sql1=$conn->prepare($sql1);
  $sql1->execute();
  $resultado=$sql1->fetchAll();
}
catch (Exception $e)
{//Si encuentra alguna excepcion muestra el error que produjo
  echo "<br>Ha Fallado algo: " . $e->getMessage();
}
?>
<!doctype html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Formulario de contacto</title>
		<link rel="stylesheet" href="css.css">
<script language="javascript" type="text/javascript">
</script>
	</head>
<body>
	<h1>DESHABILITAR O ELLIMINAR USUARIO</h1>
  <div class="ext1">
	<h3><u>Seleccione la opcion deseada</u></h3>	 
	<?php if ($sql1): ?>
	<table border="1" width="100%" class="table table-bordered table-hover">
	<thead>
		<th width="3%">ID</th>
		<th width="15%">Login</th>
		<th width="20%">Nombres</th>
		<th width="20%">Apellidos</th>
		<th width="22%">Email</th>
		<th width="6%">Tip User</th>
		<th width="7%">Dehabilitar</th>
		<th width="7%">Eliminar</th>
	</thead>
	<?php foreach ($resultado as $row){ ?>
	<tr>
		<td><?php echo $row["id"];?></td>
		<td><?php echo $row["username"];?></td>
		<td><?php echo $row["name"];?></td>
		<td><?php echo $row["lastname"];?></td>
		<td><center><?php echo $row["email"];?></center></td>
		<td><center><?php echo $row["status_People_id"];?></center></td>
		<td><center><a href="desuser.php?var1=1&id=<?php echo$row["id"];?>">Deshabilitar</a></center></td>
		<td><center><a href="desuser.php?var1=2&id=<?php echo$row["id"];?>">Eliminar</a></center></td>
	</tr>
    <?php }?>
    </table>
  </div>
<?php else:?>
	<p><br>no hay resultados</p>
<?php endif;?>

	<br>
	<br>
 	<br>
</body>
</html>
