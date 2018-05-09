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

    session_start(); //
    //session_destroy();  // Se destruye la session existente de esta forma no permite el duplicado.
    
?>

<!Doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sistema Biblioteca">
    <meta name="author" content="J. Francisco Moreno - jfmoreno78.is - blacktie.co">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title>Sistema Biblio</title>
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
    
    <script src="assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/modernizr.custom.js"></script>
 
  </head>

  <body data-spy="scroll" data-offset="0" data-target="#navbar-main">
  
   	<div id="navbar-main">
      <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon icon-shield" style="font-size:30px; color:#3498db;"></span>
          </button>
          <a class="navbar-brand hidden-xs hidden-sm" href="http://upp.edu.mx"><span class="icon icon-shield" style="font-size:18px; color:#3498db;"></span></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="#home" class="smoothScroll" > Inicio</a></li>
			<li> <a href="login.php" class="smoothScroll"> Login </a></li>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    </div>
   <br>
   <br>
   <br>
   <br>
		<!-- ==== HEADERWRAP ==== -->
	    <div id="headerwrap" id="home" name="home">
			<header class="clearfix">
	  		 		<h1><span class="icon icon-cube"></span></h1>
	  		 		<p>Entorno de Administración y Control.</p>
	  		 		<p>Biblioteca UPPachuca.</p>
	  		</header>

	    </div><!-- /headerwrap -->

		<!-- ==== SECTION DIVIDER6 ==== -->
		<section class="section-divider textdivider divider6 ">
			<div class="container">
				<p><b><h1 style="color: #f2f0f2;"> Elementos de Biblioteca </h1></b></p>
				
				<p><b><h1 style="color: #f2f0f2;"> Redes Sociaes </h1></b></p>
				<p><a class="icon icon-twitter" href="#"></a> | <a class="icon icon-facebook" href="#"></a></p>
			</div><!-- container -->
		</section><!-- section -->
		
		<div class="container" id="contact" name="contact">
			<div class="row">
			<br>
				<h1 class="centered">Elementos de Referencia</h1>
				<br>
				<div class="col-lg-4">
					<h3>Information de Contacto</h3>
					<p><span class="icon icon-home"></span>  Universidad Politécnica de Pachuca, Carretera Pachuca - Cd. Sahagún km 20 Ex-Hacienda de Santa Bárbara Zempoala Hidalgo, México. CP-43830<br/>
						<span class="icon icon-phone"></span> 01 (771) 54 77 510 <br/>
						<span class="icon icon-mobile"></span> Ext. 2219 <br/>
						<span class="icon icon-envelop"></span> <a href="#"> agency@blacktie.co</a> <br/>
						<span class="icon icon-twitter"></span> <a href="#"> @blacktie_co </a> <br/>
						<span class="icon icon-facebook"></span> <a href="#"> BlackTie Agency </a> <br/>
					</p>
				</div><!-- col -->
				
				<div class="col-lg-4">
					<h3>Jefe de Servicios Bibliotecarios</h3>
					<p>LPCC. Miguel A. Valdivieso Rodríguez.</p>
					<p><br/>
						<span class="icon icon-phone"></span> 01 (771) 54 77 510 <br/>
						<span class="icon icon-mobile"></span> Ext. 2219 <br/>
						<span class="icon icon-twitter"></span> <a href="#"> @blacktie_co </a> <br/>
						<br/>
					</p>
				</div><!-- col -->
				
				<div class="col-lg-4">
					<h3>Otros Elementos</h3>
					<p>Espacio libre.</p>
				</div><!-- col -->

			</div><!-- row -->
		
		</div><!-- container -->

		<div id="footerwrap">
			<div class="container">
				<h4>Creado por <a href="http://upp.edu.mx">Desarrollo de Sistemas</a> - Copyright 2018</h4>
			</div>
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
