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
 #Modulo de consulta de usuarios de torniquete 
session_start();
 
  if(isset($_SESSION['username']))
  { }
  else {
   session_destroy();
   header("location:../index.php");}

if (! empty($_POST))
{//verifica las variables que envian desde el formulario

		$mytipuser=$_POST['tipuser'];
  		$mynumuser=$_POST['Numal'];
  		$mynomuser=$_POST['Nomal'];
  		$mytipcarr=$_POST['carr'];
  		$mynumadmi=$_POST['Numad'];
  		$mynomadmi=$_POST['Nomad'];
		$mynumcate=$_POST['Numca'];
		$mynomcate=$_POST['Nomca'];
		$mynumexte=$_POST['Numex'];
		$mynomexte=$_POST['Nomex'];
   		//creo una variable para control de la tabla
  		$con_reg=1;
}
?>	
<!doctype html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Formulario de contacto</title>
		<link rel="stylesheet" href="css.css" style type="text/css">
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
	function muesdiv()
	{
			var res=document.getElementById("tipuser").value;
			
			switch (res)
			{
				case "def":
					alert("Seleccione otra Opcion");
					document.getElementById('al').style.display='none';
					document.getElementById('ad').style.display='none';
					document.getElementById('ca').style.display='none';
					document.getElementById('ex').style.display='none';
					break;
				case "Alu":
					document.getElementById('al').style.display='block';
					document.getElementById('ad').style.display='none';
					document.getElementById('ca').style.display='none';
					document.getElementById('ex').style.display='none';
					break;
				case "Adm":
					document.getElementById('al').style.display='none';
					document.getElementById('ad').style.display='block';
					document.getElementById('ca').style.display='none';
					document.getElementById('ex').style.display='none';
					break;
				case "Cat":
					document.getElementById('al').style.display='none';
					document.getElementById('ad').style.display='none';
					document.getElementById('ca').style.display='block';
					document.getElementById('ex').style.display='none';
					break;
				case "Otr":
					document.getElementById('al').style.display='none';
					document.getElementById('ad').style.display='none';
					document.getElementById('ca').style.display='none';
					document.getElementById('ex').style.display='block';
					break;
			}			
	}
</script>
	</head>
<body>
	<form name='formulario' id='formulario' method='post' action='conusers.php' target='_self' enctype="multipart/form-data" onsubmit="FunEval()"> 
	<h3><u>Seleccione los Criterios de Busqueda de Información</u></h3>
<!--inicio de los Datos -->
	<br>SELECCIONE EL TIPO DE USUARIO 
	<select name="tipuser" id="tipuser" onchange="muesdiv()">
		<option value="def">Seleccione uno</option>
		<option value="Alu">Alumno</option>
		<option value="Adm">Administrativo</option>
		<option value="Cat">Catedratico</option>
		<option value="Otr">Externo</option>
	</select>   
	<br>
	<br>
	<!-- ***** Datos del Alumno **** -->
<div id="al" style="display: none;">
	CAPTURE ALGUN DATO DEL ALUMNO
	<br><br>
	Numero de Cuenta:
	<input type='text' name='Numal' id='Numal' placeholder="Solo Numeros">
	<br><br>
	Nombre del Alumno: 
	<input type='text' name='Nomal' id='Nomal' placeholder="Nombre Completo">
	<br><br>
	Catalogo de Carreras:
		<select name="carr" id="carr">
		<option value="default">Seleccione Carrera</option>
		<option value="%lic%ciru%">LICENCIATURA EN MEDICO CIRUJANO</option>
		<option value="%lic%tera%">LICENCIATURA EN TERAPIA FISICA</option>
		<option value="%ing%biom%">INGENIERIA EN BIOMEDICA</option>
		<option value="%ing%biot%">INGENIERIA EN BIOTECNOLOGIA</option>
		<option value="%ing%soft%">INGENIERIA EN SOFTWARE</option>
		<option value="%ing%tele%">INGENIERIA EN TELEMATICA</option>
		<option value="%ing%auto%">INGENIERIA MECANICA AUTOMOTRIZ</option>
		<option value="%ing%meca%">INGENIERIA MECATRONICA</option>
		<option value="%ing%rede%">INGENIERIA REDES Y TELEMATICA</option>
		<option value="%esp%biot%">ESPECIALIDAD EN BIOTECNOLOGIA</option>
		<option value="%esp%meca%">ESPECIALIDAD EN MECATRONICA</option>
		<option value="%esp%segu%">ESPECIALIDAD EN SEGURIDAD</option>
		<option value="%mae%biot%">MAESTRIA EN BIOTECNOLOGIA</option>
		<option value="%mae%cien%">MAESTRIA EN CIENCIAS</option>
		<option value="%mae%meca%">MAESTRIA EN MECATRONICA</option>
		<option value="%mae%info%">MAESTRIA EN TIC´S</option>
		<option value="%doc%biot%">DOCTORADO EN BIOTECNOLOGIA"</option>
		<option value="%doc%cien%">DOCTORADO EN CIENCIAS APLICADAS</option>
	</select>
</div>
<div id="ad" style="display: none;">
	CAPTURE ALGUN DATO DEL ADMINISTRATIVO
	<br><br>
	Numero de Trabajador:
	<input type='text' name='Numad' id='Numad' maxlength="10" placeholder="Solo Numeros" autofocus>
	<br><br>
	Nombre: 
	<input type='text' name='Nomad' id='Nomad' placeholder="Nombre Completo">
	<br><br>
</div>
<div id="ca" style="display: none;">
	CAPTURE ALGUN DATO DEL CATEDRATICO
	<br><br>
	Numero de Trabajador:
	<input type='text' name='Numca' id='Numca' maxlength="10" placeholder="Solo Numeros" autofocus>
	<br><br>
	Nombre: 
	<input type='text' name='Nomca' id='Nomca' placeholder="Nombre Completo">
	<br><br>	
</div>
<div id="ex" style="display: none;">
	CAPTURE ALGUN DATO DEL USUARIO EXTERNO
	<br><br>
	Numero de Trabajador:
	<input type='text' name='Numex' id='Numex' maxlength="10" placeholder="Solo Numeros" autofocus>
	<br><br>
	Nombre:
	<input type='text' name='Nomex' id='Nomex' placeholder="Nombre Completo">
	<br><br>
</div>
<br>
<center><input  id=boton-enviar type='submit' value='Enviar'></center>

</form>
<br>
<br>
<center>
<!-- ******seccion de la tabla por medio de un div *****-->
<u>Presione el link para modificar los datos</u>
<div class="ext1" >
<table border="0" width="100%" class="table table-bordered table-hover">
	<thead>
		<th width="5%">ID</th>
		<th width="10%">Numero de Cuenta</th>
		<th width="30%">Nombres</th>
		<th width="45%">Area</th>
		<th whdth="5%">Estatus</th>		
		<th width="5%">Modificar</th>
	 </thead>
<?php 

if ($con_reg==1) //se verifica la variable para saber si esta en el POST
{
	switch ($mytipuser) 
	{
	case 'Alu':
		$mynum="%".$mynumuser."%";
		$mynom="%".$mynomuser."%";
		if ($mytipcarr=="default")
		{$myare="%%";}
		else{
		$myare=$mytipcarr;}
		break;
	case 'Adm':
		$myareadmi="Adm";
		$mynum="%".$mynumadmi."%";
		$mynom="%".$mynomadmi."%";
		$myare="%".$myareadmi."%";
		break;
	case 'Cat':
		$myareacat="Acad";
		$mynum="%".$mynumcate."%";
		$mynom="%".$mynomcate."%";
		$myare="%".$myareacat."%";
		break;
	case 'Otr':
		$myareaext="Ext";
		$mynum="%".$mynumexte."%";
		$mynom="%".$mynomexte."%";
		$myare="%".$myareaext."%";
		break;
	}

/*echo "<br>valor numero ".$mynum;
echo "<br>valor nombre ".$mynom;
echo "<br>valor area ".$myare;*/

require_once '../include/conect.php';
	try
	{
		$sql1=$conn->prepare("SELECT * FROM client WHERE identification_Number LIKE  ? AND name LIKE ? AND area LIKE ?");

		$sql1->bindParam(1,$mynum);
		$sql1->bindParam(2,$mynom);
		$sql1->bindParam(3,$myare);
		$sql1->execute();
		$resultado=$sql1->fetchAll();
	}
  	catch (Exception $e)
	{//Si encuentra alguna excepcion muestra el error que produjo
  		echo "<br>Ha Fallado algo: " . $e->getMessage();}

	if ($sql1)
	{
		foreach ($resultado as $row)
		{
?>			
		<tr>
		<td><?php echo $row["id"];?></td>
		<td><?php echo $row["identification_Number"];?></td>
	 	<td><?php echo $row["name"];?></td>
	 	<td><?php echo $row["area"];?></td>
	 	<td><center><?php echo $row["status_People_id"];?></center></td>
	 	<td><center><a href="conuser.php?var1=1&id=<?php echo$row["id"];?>">Editar</a></center></td>
	 </tr>
<?php
		}
	}
	else
	{
		echo "<br> no se encontro registros";
	}
}
?>
</table>
</div>
</center>
</body>
</html>	