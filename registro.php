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

  session_start();// se inicia metodo de sesiones
try 
{
  // evaluacion del if de sesion 
  if(isset($_SESSION['username'])){
    //cuendo se tiene una sesion iniciada 
    if ($_SESSION['tipo']=="Administrador")
      {
        
      }
      else
      {
        
      }  
    
   }
   else{
    //cuando no se tienen una sesion iniciada se manda al login
    header("location:login.php?err=Tu nombre de Usuario o Password son Incorrectos");}
  // termina evaluacion del if sesion
}

catch (Exception $e) {
  //Si encuentra alguna excepcion muestra el error que produjo
        echo "<br>Failed: " . $e->getMessage();}
?>

<!Doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sistema Biblioteca">
    <meta name="author" content="J. Francisco Moreno - jfmoreno78.upp.edu.mx - blacktie.co">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title>Sistema Biblioteca</title>

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  	<script src="js/jquery.min.js"></script>
    <!-- Nucleo CSS para Bootstrap -->
 
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Estilos personalizados para esta plantilla -->
    <link href="assets/css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/icomoon.css">
    <link href="assets/css/animate-custom.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
    
    <!-- estilo para el javascript -->
   <style>
      .hidden {
        display: none;
      }
    </style>
  <script src="assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/modernizr.custom.js"></script>
 </head>
  <body data-spy="scroll" data-offset="0" data-target="#navbar-main">
<!-- Fixed navbar -->
  <br>
<div class="navbar navbar-inverse navbar-fixed-top">
<div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" href="http://upp.edu.mx>
      <span class="icon icon-shield" style="font-size:30px; color:#3498db;"></span>
      </button>
      <a class="navbar-brand hidden-xs hidden-sm" href="index.php"><span class="icon icon-shield" style="font-size:18px; color:#ab68a2;"></span></a>
    </div>
      
  <div class="navbar-collapse collapse">
    <ul class="nav navbar-nav">

<li><a href="default.html" target="default" class="smoothScroll" > Inicio</a></li>
<li><a href="http://189.204.122.115/ejemp/index.php" class="smoothScroll"> Reg Acceso(Torniquete)</a></li>

<?php if ($_SESSION['tipo']=="Administrador"){?>
<li><a href="modusers/index.php" target="default" class="smoothScroll">Control Usuarios </a></li>
<li><a href="modingre/index.php" target="default" class="smoothScroll">Control de Ingreso</a></li>
<li><a href="Reporteo/index.php" target="default" class="smoothScroll">Estaditicas</a></li>
<?php } ?>
<li><a class="smoothScroll">Usu: <?php echo "".$_SESSION['username']; echo " Tip: ".$_SESSION['tipo'];?></a></li>
<li><a href="cierre.php" class="smoothScroll"> Cerrar Sesion</a></li>
    
    </ul>      
  </div> 
</div>
</div>
<!--/.nav-collapse -->
    <br>
    <br>
<!-- ==== HEADERWRAP ==== -->
<center><iframe name="default" src="default.html" width="1240" height="710" frameborder="1">Tu Navegador no soporta Iframes</iframe></center>

    
    <div id="footerwrap">
        <div class="container">
          <h4>Creado por <a href="http://upp.edu.mx">Desarrollo de Sistemas</a> - Copyright 2018</h4>
         <br>
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/retina.js"></script>
	<script type="text/javascript" src="assets/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="assets/js/smoothscroll.js"></script>
	<script type="text/javascript" src="assets/js/jquery-func.js"></script>
  </body>
</html>
