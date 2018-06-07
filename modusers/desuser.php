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
  //evaluacion de inicio de sesion
  if(isset($_SESSION['username']))
  { }else{
   session_destroy();
   header("location:../index.php");}

require_once '../include/conect.php';

//recibo las variables que se envian desde el metodo get
if ( ! empty($_GET))
{
	$DesId=$_GET['id'];  //valor del id que se selecciono
	$var1=$_GET['var1']; //valor de la accion que se realizara
	$pant=$_GET['bot'];  //valor del boton que se selecciono

	if ($pant) //se evalua si tienen valor de algun boton 
	{ $reg_bot=(15*($pant-1));} //si es verdadero se calcula el numero de renglones 

	if ($var1==1) //se evalua la opcion que envia la tabla 
	{	
		echo "<script>
				if(confirm('Deseas DESHABILITAR al Usuario?')){
				document.location.href='desuser.php?var1=3&id=$DesId';}
				else{ 
				alert('Operacion Cancelada');}</script>";
	}	
	if ($var1==3)//se evalua la accion de deshabilitar
	{
		try	{
		$Estatus=3; //parte para la actualizacion del registro
		$desh = $conn->prepare("UPDATE user SET status_People_id = ? WHERE user . id =?");
		$desh->bindParam(1,$Estatus);
		$desh->bindParam(2,$DesId);
		$desh->execute();}
		catch (Exception $e) 
		{//Si encuentra alguna excepcion muestra el error que produjo
        echo "<br>Ha Fallado algo: " . $e->getMessage();}
		echo "<script> alert('Usuario DESHABILITADO con Exito'); </script>";
	}
}
try
{
  //se entiende que si no se recibe datos es el inicio 
	$reg_pag=50; //Se inicializa la variable, numero de registros que se desplegaran por pagina
	$reg_bot=0; //Se inicializa la variable, numero inicial del boton 
  //consulta el numero de registros
  $login = $conn->prepare("SELECT * FROM user ORDER BY id DESC LIMIT 1");
  $login->execute();
  $row=$login->fetch();

  //inicio la consulta con los valores de el salto de filas
  $sql1=$conn->prepare("SELECT * FROM user ORDER BY id ASC LIMIT $reg_bot,$reg_pag");
  $sql1->execute();
  $resultado=$sql1->fetchAll();

  /*$user_id=null;
  $sql1="select * from user";
  $sql1=$conn->prepare($sql1);
  $sql1->execute();
  $resultado=$sql1->fetchAll();*/
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
	
  <div class="ext1">
	<h3><u>Seleccione la opcion deseada</u></h3>	 
	<?php if ($sql1): ?>
	<table border="1" width="100%" class="table table-bordered table-hover">
	<thead>
		<th width="5%">ID</th>
		<th width="15%">Login</th>
		<th width="21%">Nombres</th>
		<th width="22%">Apellidos</th>
		<th width="24%">Email</th>
		<th width="6%">Tip User</th>
		<th width="7%">Dehabilitar</th>
		
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
