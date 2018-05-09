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
 #modulo de Alta de Usuarios de Sistema
/*
session_start();
 
  if(isset($_SESSION['username']))
  { 
    
  }
  else
  {
   session_destroy();
   header("location:../index.php");
  }
*/



if ( ! empty($_POST))
{
  //se requiere hacer la conexión a la base de datos
  require_once '../include/conect.php';
  
  $mytius=$_POST['tipuser'];
  $myniv=$_POST['NivE'];
  $mylic=$_POST['td'];
  $mying=$_POST['In'];
  $myesp=$_POST['Es'];
  $mymas=$_POST['Ma'];
  $mydoc=$_POST['Do'];
  $mynum=$_POST['NumCuen'];
  $mynom=$_POST['NomCli'];

  switch ($mytius) 
  {
  	case 'Alu':
  		switch ($mylic)
        { //coloca el valor de la licenciatura
  			case 'Med':
  				$myarea="LICENCIATURA EN MEDICO CIRUJANO";
  				break;
  			case 'Ted':
          $myarea="LICENCIATURA EN TERAPIA FISICA";
  				break;}
      switch ($mying)
        {//coloca el valor de la Ingenieria
        case 'Bmed':
          $myarea="INGENIERIA EN BIOMEDICA";
          break;
        case 'Btec':
          $myarea="INGENIERIA EN BIOTECNOLOGIA";
          break;
        case 'Sofw':
          $myarea="INGENIERIA EN SOFTWARE";
          break;
        case 'Tele':
          $myarea="INGENIERIA EN TELEMATICA";
          break;
        case 'Fina':
          $myarea="INGENIERIA MECANICA AUTOMOTRIZ";
          break;
        case 'Meca':
          $myarea="INGENIERIA MECATRONICA";
          break;}
      switch ($myesp) 
        {// coloca el valor de la Especialidad
        case 'Ebio':
          $myarea="ESPECIALIDAD EN BIOTECNOLOGIA";
          break;
        case 'Emec':
          $myarea="ESPECIALIDAD EN MECATRONICA";
          break;
        case 'Eseg':
          $myarea="ESPECIALIDAD EN SEGURIDAD";
          break;}
      switch ($mymas) 
        {// coloca el valor de la Maestria
        case 'Mbio':
          $myarea="MAESTRIA EN BIOTECNOLOGIA";
          break;
        case 'Mcie':
          $myarea="MAESTRIA EN CIENCIAS ";
          break;
        case 'Mmec':
          $myarea="MAESTRIA EN MECATRONICA ";
          break;        
        case 'Mtic':
          $myarea="MAESTRIA EN TIC´S ";
          break;}
        switch ($mydoc) {
          case 'Ddio':
            $myarea="DOCTORADO EN BIOTECNOLOGIA";
            break;}
  		break;
  	case 'Adm':
      $myarea="ADMINISTRATIVO";
      break;
    case 'Cat':
      $myarea="ACADEMICO";
      break;
    case 'Otr':
      $myarea="EXTERNO";
      break;
  }
    //Se realiza la consulta para verificar si el numero ingresado no esta registrado
    $login = $conn->prepare("SELECT * FROM client WHERE identification_Number=?");
    $login->bindParam(1,$mynum); //le decimos a la consulta cuál es el parámetro a pasar 
    $login->execute(); //ejecutamos la consulta
    if ($login->rowCount()==1) //evaluamos si encuentra filas (0 filas-> no hay reg, 1 fila-> si hay reg) 
    {
        echo '<script language="javascript" type="text/javascript"> alert("Numero de Cuenta ya existe");
        </script>';
    }
    else
    {
    //******* SI NO SE ENCUENTRA EL NUMERO DE CUENTA SE REGISTRAN LOS DATOS
      //SELECT * FROM `client` ORDER BY id DESC LIMIT 1
      $login = $conn->prepare("SELECT * FROM client ORDER BY id DESC LIMIT 1");
      $login->execute(); //ejecutamos la consulta
      $row=$login->fetch();
      $Id_user=$row['id']+1;

      $Estatus=1;
      $myrealy="false";
      echo "<br>tipo: ".$mytius;
      echo "<br>nivel: ".$myniv;
      echo "<br>lic: ".$mylic;
      echo "<br>ing: ".$mying;
      echo "<br>esp: ".$myesp;
      echo "<br>maes: ".$mymas;
      echo "<br>doct: ".$mydoc;
      echo "<br>numero: ".$mynum;
      echo "<br>nombre: ".$mynom;
      echo "<br>id: ".$Id_user;
      echo "<br>area ".$myarea;
      echo "<br>ref: ".$myrealy;
      echo "<br>Estatus: ".$Estatus;
/*
      try
      {
      require_once '../include/conect.php';
      $Id_user=NULL;
      $Estatus=1;
      $myrealy="false";
      $Inlogin=$conn->prepare("INSERT INTO client (id,identification_Number,name,area,already_Entered,status_People_id) VALUES (?,?,?,?,?,?)");

      $Inlogin->bindParam(1,$Id_user); //ID DE USUARIO
      $Inlogin->bindParam(2,$mynum);  //NUMERO DE IDENTIFICACION
      $Inlogin->bindParam(3,$mynom);  //NOMBRE DEL USUARIO
      $Inlogin->bindParam(4,$myarea); //NOMBRE DE LA AREA
      $Inlogin->bindParam(5,$myrealy);//VALOR FALSO DE INGRESO
      $Inlogin->bindParam(6,$Estatus); //NUMERO DE ESTATUS 1.->ALTA 2.->INACTIVO 3.->BLOQUEADO
      $Inlogin->execute();

      }
      
      catch (Exception $e) 
      {//Si encuentra alguna excepcion muestra el error que produjo
         echo "<br>Ha Fallado algo: " . $e->getMessage();
       }
*/
      //se manda una alerta a la pagina indicando que el usuario se ingreso correctamente
      echo '<script language="javascript" type="text/javascript"> alert("Usuario Registrado con Exito"); </script>';
    }
} //cierre de if que indica si se mandan los datos del formulario

?>
<!doctype html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Formulario de Usuario del Torniquete</title>
		<link rel="stylesheet" href="css.css">

<script language="javascript" type="text/javascript">
	
	function FunEval()
	{
		var valnom=document.submit.NomCli.value; //valor del nombre
		var valclv1=document.submit.NumCuen.value; //valor Numero cuenta
		var res=document.getElementById("tipuser").value; //tipo de usuaio
		var res1=document.getElementById("NivE").value; //tipo de Nivel
		var res2=document.getElementById("td").value; //
		var res3=document.getElementById("In").value; //
		var res4=document.getElementById("Es").value; // 
		var res5=document.getElementById("Ma").value; //
		var res6=document.getElementById("Do").value; //


		if (valnom=="Nombre Completo")
			{	alert("Capture Correctamente el Nombre: Intente Nuevamente");
			return false;}
		if (valnom.length>=35)
			{	alert("Tu nombre es demasiado grande. Redúcelo.");
      		return false;}
    if (res=="Alu")
      {
        if (valclv1.length<8) {alert("El Numero de Cuenta es muy corta. Diez Numeros."); return false;}
      }
      else
      {
        if (valclv1.length>5) {alert("El Numero de Cuenta debe tener 5 Numeros."); return false;}
      }
       	if (valclv1=="Solo Numeros")
      		{	alert("No Capturo el Numero de Cuenta.");
      		return false;}
      	if (res=="def")
      		{	alert("No selecciono el tipo de Usuario.: ");
      		return false;}
      	if (res1=="def")
      		{	alert("No selecciono el Nivel de Estudios?. ");
      		return false;}
      	if (res=="Alu")	//si el valor es alumno se evalua si selecciono lo demas
      	{
      		if (res2=="def"&&res3=="def"&&res4=="def"&&res5=="def"&&res6=="def")
      		{alert("Falta seleccionar Informacion de Carreras");
      		return false;}
      	}
 	}
	function muesdiv() //para iniciar la interaccion
	{
		var res=document.getElementById("tipuser").value;
		switch (res){
		case "Alu":			
			document.getElementById('DivNiv').style.display='block';
			document.getElementById('Lic').style.display='none';
			
			break;
		case "Adm":
			document.getElementById('DivNiv').style.display='none';
			document.getElementById('Lic').style.display='none';
			document.getElementById('Ing').style.display='none';
			document.getElementById('Esp').style.display='none';
			document.getElementById('Mas').style.display='none';
			document.getElementById('Doc').style.display='none';
			
			break;
		case "Cat":
			document.getElementById('DivNiv').style.display='none';
			document.getElementById('Lic').style.display='none';
			document.getElementById('Lic').style.display='none';
			document.getElementById('Ing').style.display='none';
			document.getElementById('Esp').style.display='none';
			document.getElementById('Mas').style.display='none';
			document.getElementById('Doc').style.display='none';
			
			break;
		case "def":
			document.getElementById('DivNiv').style.display='none';
			document.getElementById('Lic').style.display='none';
			document.getElementById('Lic').style.display='none';
			document.getElementById('Ing').style.display='none';
			document.getElementById('Esp').style.display='none';
			document.getElementById('Mas').style.display='none';
			document.getElementById('Doc').style.display='none';
			
			break;}
	}
	function Select2(niv) //Interaccion con la licenciatura
	{
		switch(niv){
			case "lic":
				document.getElementById('Lic').style.display='block'; 				
				document.getElementById('Ing').style.display='none'; 
				document.getElementById('Esp').style.display='none';
				document.getElementById('Mas').style.display='none';
				document.getElementById('Doc').style.display='none';
				break;
			case "Ing":
				document.getElementById('Ing').style.display='block';
				document.getElementById('Lic').style.display='none'; 
				document.getElementById('Esp').style.display='none';
				document.getElementById('Mas').style.display='none';
				document.getElementById('Doc').style.display='none';
				break;
			case "Esp":
				document.getElementById('Esp').style.display='block';
				document.getElementById('Ing').style.display='none';
				document.getElementById('Lic').style.display='none';
				document.getElementById('Mas').style.display='none';
				document.getElementById('Doc').style.display='none';
				break;
			case "Mas":
				document.getElementById('Mas').style.display='block';
				document.getElementById('Esp').style.display='none';
				document.getElementById('Ing').style.display='none';
				document.getElementById('Lic').style.display='none';
				document.getElementById('Doc').style.display='none';
				break;
			case "Doc":
				document.getElementById('Doc').style.display='block';
				document.getElementById('Lic').style.display='none';
				document.getElementById('Ing').style.display='none';
				document.getElementById('Esp').style.display='none';
				document.getElementById('Mas').style.display='none';
				break;
			}
	}
</script>
	</head>
<body>
<h1>ALTA DE USUARIO (TORNIQUETE) </h1>
<form name='submit' id='submit' method='post' action='altuser.php' target='_self' enctype="multipart/form-data" onsubmit="return FunEval()"> 
	
	<h3><u>Capture los datos del Nuveo Usuario</u></h3>
	<!--inicio de los Datos -->
	<!-- Opciones del tipo de Usuario a dar de Alta-->
	<br>Seleccione el Tipo de Usuario: 
	<select name="tipuser" id="tipuser" onchange="muesdiv()">
		<option value="def">Seleccione uno</option>
		<option value="Alu">Alumno</option>
		<option value="Adm">Administrativo</option>
		<option value="Cat">Catedratico</option>
		<option value="Otr">Externo</option>
	</select>

	<br> <!-- Opciones para el tipo de Alumnos -->
  <div id="DivNiv" style="display:none;">
	<br><b>Seleccione el Nivel de Estudio</b> 
	<br>
	<input type='radio' name='NivE' id='NivE' value="lic" onclick="Select2(this.value)">Licenciatura:
	<input type='radio' name='NivE' id='NivE' value="Ing" onclick="Select2(this.value)">Ingenieriea:
	<input type='radio' name='NivE' id='NivE' value="Esp" onclick="Select2(this.value)">Especialidad:
	<input type='radio' name='NivE' id='NivE' value="Mas" onclick="Select2(this.value)">Maestria: 
	<input type='radio' name='NivE' id='NivE' value="Doc" onclick="Select2(this.value)">Doctorado:
  </div>
	<!-- Opciones para la licenciatura -->
  <div name="Lic" id="Lic" style="display:none;">
	<br><b>Seleccione la Licienciatura</b>
	<select name="td" id="td" onchange="licen()">
		<option value="def">Seleccione uno</option>
		<option value="Med">Medico Cirujano</option>
		<option value="Ted">Terapia Fisica</option>
	</select>
  </div>

  <div name="Ing" id="Ing" style="display:none;">
  	<br><b>Seleccione la Ingenieria</b> 
  	<select name="In" id="In" onchange="Inger()">
  		<option value="def">Seleccione uno</option>
  		<option value="Bmed">Ingenieria Biomedica</option>
  		<option value="Btec">Ingenieria Biotecnologia</option>
  		<option value="Sofw">Ingenieria Software</option>
  		<option value="Tele">Ingenieria Telematica</option>
  		<option value="Fina">Ingenieria Financiera</option>
  		<option value="Auto">Ingenieria Automotriz</option>
  		<option value="Meca">Ingenieria Mecatronica</option>
  	</select>
  </div>
  
  <div name="Esp" id="Esp" style="display:none">
  	<br><b>Seleccione la Especialidad</b>
  	<select name="Es" id="Es" onchange="Espec()">
  		<option value="def">Seleccione uno</option>
  		<option value="Ebio">Especialidad en Biotecnologia</option>
  		<option value="Emec">Especialidad en Mecatronica</option>
  		<option value="Eseg">Especialidad en Seguridad</option>
  	</select>
  </div>

  <div name="Mas" id="Mas" style="display:none">
  	<br><b>Seleccione la Maestria</b>
  	<select name="Ma" id="Ma" onchange="Maest()">
  		<option value="def">Seleccione uno</option>
  		<option value="Mbio">Maestria en Biotecnologia</option>
  		<option value="Mcie">Maestria en Ciencias</option>
  		<option value="Mmec">Maestria en Mecatronica</option>
  		<option value="Mtic">Maestria en TIC'S</option>
   	</select>
  </div>

  <div name="Doc" id="Doc" style="display:none">
  	<br><b>Seleccione el Doctorado</b>
  	<select name="Do" id="Do" onchange="Doctor()">
  		<option value="def">Seleccione uno</option>
  		<option value="Dbio">Doctorado en Biotecnologia</option>
  	</select>
  </div>	

	<br>Numero de Cuenta:   
	<input type='text' name='NumCuen' id='NumCuen' autofocus value="Solo Numeros" maxlength="10" required/> 
	<br>
	<br>Nombre Completo: 
	<input type='text' name='NomCli' id='NomCli' value="Nombre Completo" size="35" required/>
	<br>
	<br>
<input  id=boton-enviar type='submit' value='Enviar' >
</form>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
</body>
</html>
