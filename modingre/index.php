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
 #Modulo para la caratula o el index del modulo 

session_start();
 
  if(isset($_SESSION['username']))
  { 
    
  }
  else
  {
   session_destroy();
   header("location:../index.php");
  }


?>

<!doctype html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Menu de Usuarios</title>
		<link rel="stylesheet" href="css.css">
	</head>
	<style>
body {
    font-family: "Segoe UI", sans-serif;
    font-size:100%;
}

.sidebar {
    position: fixed;
    height: 100%;
    width: 0;
    top: 0;
    left: 0;
    z-index: 1;
    background-color: #00324b;
    overflow-x: hidden;
    transition: 0.4s;
    padding: 1rem 0;
    box-sizing:border-box;
}

.sidebar .boton-cerrar {
    position: absolute;
    top: 0.5rem;
    right: 1rem;
    font-size: 2rem;
    display: block;
    padding: 0;
    line-height: 1.5rem;
    margin: 0;
    height: 32px;
    width: 32px;
    text-align: center;
    vertical-align: top;
}

.sidebar ul, .sidebar li{
    margin:0;
    padding:0;
    list-style:none inside;
}

.sidebar ul {
    margin: 4rem auto;
    display: block;
    width: 80%;
    min-width:200px;
}

.sidebar a {
    display: block;
    font-size: 120%;
    color: #eee;
    text-decoration: none;
    
}

.sidebar a:hover{
    color:#fff;
    background-color: #8a6796;

}

h1 {
    color:#d0b2db;
    font-size:180%;
    font-weight:normal;
}
#contenido {
    transition: margin-left .4s;
    padding: 1rem;
}

.abrir-cerrar {
    color: #8904B1;
    font-size:1rem;   
}

#abrir {
    
}
#cerrar {
    display:none;
}
</style>

</head>
<body>

<div id="sidebar" class="sidebar">
    <a href="#" class="boton-cerrar" onclick="ocultar()">&times;</a>
<center>
    <p><h1>MENU DE OPCIONES</h1></p>
  <ul class="menu">
    <li><img src="img/Alta.png"><a href="altuser.php" target="UserPanel">Alta de Usuarios</a></li>
    <li><img src="img/Desh.png"><a href="desuser.php" target="UserPanel">Deshabilitar Usuario</a></li>
    <li><img src="img/Modi.png"><a href="moduser.php" target="UserPanel">Modificacion de Usuario</a></li>
    <li><img src="img/Cons.png"><a href="conuser.php" target="UserPanel">Consulta de Usuario</a></li>
  </ul>
</center>
</div>



<div id="contenido">
  <center>
  	
    <iframe name="UserPanel" src="default.html" width="1140" height="520" frameborder="1">Tu Navegador no soporta Iframes</iframe>
  <!--
  <p><a href="http://upp.edu.mx" target="_blank"><img src="img/LogoUPP.png" alt="campusMVP" style="border-width: 0px"/></a></p>
  <h1>Control de Usuarios</h1>
    -->
    <br>
    <center>
  <a id="abrir" class="abrir-cerrar" href="javascript:void(0)" onclick="mostrar()">ABRIR MENU</a><a id="cerrar" class="abrir-cerrar" href="#" onclick="ocultar()">CERRAR MENU</a>
  <center>

</center>
</div>

<!--
<center><iframe name="default" src="default.html" width="700" height="500" frameborder="1">Tu Navegador no soporta Iframes</iframe></center>
-->

<script>
function mostrar() {
    document.getElementById("sidebar").style.width = "300px";
    document.getElementById("contenido").style.marginLeft = "300px";
    document.getElementById("abrir").style.display = "none";
    document.getElementById("cerrar").style.display = "inline";
}

function ocultar() {
    document.getElementById("sidebar").style.width = "0";
    document.getElementById("contenido").style.marginLeft = "0";
    document.getElementById("abrir").style.display = "inline";
    document.getElementById("cerrar").style.display = "none";
}
</script>
     
</body>
</html> 