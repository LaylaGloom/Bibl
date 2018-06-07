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

try
{
  $user_id=null;
  $sql1="SELECT * FROM user ";
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
		<style> 
			
		</style>
<script language="javascript" type="text/javascript">
</script>	
	</head>
<body>
	
<div class="ext1">
  	<h3><u>Seleccione el Usuario a modificar.</u></h3> 
  	<?php if ($sql1): ?>
	<table border="1" width="100%" class="table table-bordered table-hover">
	<center>
	<thead>
		<th width="3%">ID</th>
		<th width="15%">Login</th>
		<th width="23%">Nombres</th>
		<th width="22%">Apellidos</th>
		<th width="5%">Tip User </th>
		<th width="24%">Email</th>
		<th width="10%">Modificar</th>
	 </thead>
	 <?php foreach ($resultado as $row){ ?>
	 <tr>
		<td><?php echo $row["id"];?></td>
		<td><?php echo $row["username"];?></td>
		<td><?php echo $row["name"];?></td>
		<td><?php echo $row["lastname"];?></td>
		<td><center><?php echo $row["status_People_id"];?></center></td>
		<td><center><?php echo $row["email"];?></center></td>
		<td><center><a href="conuser.php?var1=1&id=<?php echo $row["id"];?>" class="button"> Editar </center></td>
	 </tr>
     <?php }?>
     </center>

   </table>
   <?php else:?>
   <p><br>no hay resultados</p>
  <?php endif;?>
  <div class="der">Codificacion 1:->Administrativo 2:->Usuario 3:->Deshabilitado </div>
 </div>
</div> 
 	<br>
</script>
</body>
</html>
