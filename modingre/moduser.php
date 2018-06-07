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
	$reg_pag=$_GET['regv'];  //Numero de registros a visualizar
	$reg_bot=$_GET['regi'];  //Numero registro de inicio
	$reg_bot=intval($reg_bot);
	 
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
	
	//inicio la consulta con los valores de el salto de filas
  	$sql1=$conn->prepare("SELECT * FROM client ORDER BY id ASC LIMIT $reg_bot,$reg_pag");
  	$sql1->execute();
  	$resultado=$sql1->fetchAll();	

}
else
{
//inicializo las variables de la barra de navegacion
   
   $login = $conn->prepare("SELECT * FROM client ORDER BY id DESC LIMIT 1");
   $login->execute();
   $row=$login->fetch();

try
{
  //se entiende que si no se recibe datos es el inicio 
	$reg_pag=12; //Se inicializa la variable, numero de registros que se desplegaran por pagina
	$reg_bot=0; //Se inicializa la variable, numero inicial del boton 
    
  //inicio la consulta con los valores de el salto de filas
  $sql1=$conn->prepare("SELECT * FROM client ORDER BY id ASC LIMIT $reg_bot,$reg_pag");
  $sql1->execute();
  $resultado=$sql1->fetchAll();
}
catch (Exception $e)
{//Si encuentra alguna excepcion muestra el error que produjo
  echo "<br>Ha Fallado algo: " . $e->getMessage();
}

}
?>
<!doctype html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Formulario de contacto</title>
		<link rel="stylesheet" href="css.css">
<script language="javascript" type="text/javascript">
//***********   FUNCION QUE RECIBE LOS ELEMENTOS HTML ************
var vcont=0;
var vaux=0;
  function RevMen(elemt,clr)
	{
		localStorage.setItem('pag',12);
		localStorage.setItem('cont',12);
		
		switch (clr)
		  {
			case 1:
				//siempre tendra el valor del inicio 12 reg pag y 
				reg_pag=12;
				reg_ini=0;
				localStorage.ini=0;
				localStorage.pag=12;
				window.location.href='moduser.php?regv='+reg_pag+'&regi='+reg_ini
				break;
			case 2:
				// se tiene que evaluar si es el inicio de los registros
				var reg_pag=localStorage.getItem('pag');
				var reg_bot=localStorage.getItem('cont');
				var reg_ini=localStorage.getItem('ini');
				if (reg_ini<=0){
					localStorage.ini=1 }
				if (reg_ini==null || reg_ini==NaN){
					localStorage.ini=1 }
				else{
					vaux=localStorage.getItem('ini');
					vaux=Number(vaux)-1;
					localStorage.ini=vaux
				}
				reg_ini=localStorage.getItem('ini');
				reg_ini=reg_ini*12;
				reg_ini=parseInt(reg_ini);
				window.location.href='moduser.php?regv='+reg_pag+'&regi='+reg_ini
				break;
			case 3:
				var reg_pag=localStorage.getItem('pag');
				var reg_bot=localStorage.getItem('cont');
				var reg_ini=localStorage.getItem('ini');
				var opt=document.getElementById("n3").value;

				if (opt>5410)
				{
					opt=450;
					opt=opt*12;
				}
				opt=Number(opt);
				reg_ini=opt;
				opt=opt/12;
				localStorage.ini=opt
				window.location.href='moduser.php?regv='+reg_pag+'&regi='+reg_ini
				break;
			case 4:
				var reg_pag=localStorage.getItem('pag');
				var reg_bot=localStorage.getItem('cont');
				var reg_ini=localStorage.getItem('ini');
				if (reg_ini==null || reg_ini==NaN) {
					localStorage.ini=1 }
				else{
					vaux=localStorage.getItem('ini');
					vaux=Number(vaux)+1;
					localStorage.ini=vaux
				}
				reg_ini=localStorage.getItem('ini');
				reg_ini=reg_ini*12;
				window.location.href='moduser.php?regv='+reg_pag+'&regi='+reg_ini
				break;
			case 5:
				reg_pag=12;
				localStorage.ini=450;
				vaux=localStorage.ini;
				reg_ini=vaux*12;
				localStorage.pag=12;
				window.location.href='moduser.php?regv='+reg_pag+'&regi='+reg_ini
				break;
		  }
	}
</script>
	</head>
<body>
  <div class="ext1">
	<u>Seleccione el usuario a Dehabilitar</u>
	<?php if ($sql1): ?>	 
	<table border="1" width="100%" class="table table-bordered table-hover">
	<thead>
		<th width="3%">ID</th>
		<th width="10%">Num.Cuenta</th>
		<th width="35%">Nombre</th>
		<th width="41%">Area</th>
		<th width="3%">Tipo</th>
		<th width="8%">Dehabilitar</th>
	</thead>
	<?php foreach ($resultado as $row){ ?>
	<tr>
	  <td><?php echo $row["id"];?></td>
	  <td><?php echo $row["identification_Number"];?></td>
	  <td><?php echo $row["name"];?></td>
	  <td><?php echo $row["area"];?></td>
	  <td><center><?php echo $row["status_People_id"];?></center></td>
	  <td><center><a href="conuser.php?var1=1&id=<?php echo $row["id"];?>"> Editar </center></td>
	</tr>
<?php }?>

    </table>
  </div>
<?php else:?>
	<p><br>no hay resultados</p>
<?php endif;
?>

<div class="ext2">
<center>
<table>
<thead>
	<tr>
	<td><button class="button1" name="ini" id="n1" value="1" onclick="RevMen(this,1)">Inicio</button></td>
	<td><button class="button1" name="ret" id="n2" value="2" onclick="RevMen(this,2)"><<</button></td>
	<td>
		<select name="opt" id="n3" onchange="RevMen(this,3)">
		<option>10</option>
		<option>50</option>
		<option>100</option>
		<option>500</option>
		<option>1000</option>
		<option>2000</option>
		<option>3000</option>
		<option>4000</option>
		<option>5000</option>
		<option>6000</option>
		</select>
	</td>
	<td><button class="button1" name="sig" id="n4" value="4" onclick="RevMen(this,4)">>></a></td>
	<td><button class="button1" name="fin" id="n5" value="5" onclick="RevMen(this,5)">Ultimo</a></td>
	</tr>
 </thead>
</table>
</center>
</div>
</body>
</html>