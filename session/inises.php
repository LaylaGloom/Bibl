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
 
 #Clase que contienen los distintos metodos 

session_start();
if(isset($_SESSION['username']))
{
  //session iniciada y muestra el usuario logeado
  //echo "<br>sesion iniciada: ".$_SESSION['username'];
  echo "<br>si se tiene sesion iniciada";
  echo "<br>la sesion es de: ".$_SESSION['username'];
  //header("location: registro.php");

}
else
{  
// no se tiene sesion 
  echo "<br>no se tiene sesion";
}


?>