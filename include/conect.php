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

 #Verificacion de la Conexion a MYSQL

require_once 'config.php';

try{ 
	//Evalua los parametros para el metodo de la conexion a MYSQL
	$conn = new PDO("mysql:host=$db_host;dbname=$db_databas",$db_user,$db_pass);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	//echo "si entra a conect";
	return $conn;
	} //retorno la variable de la conexion a la BD
	//Si existe alguna excepcion muestra el error
catch(PDOException $e) {
	echo "ERROR CONECTANDO CON LA BASE DE DATOS: " . $e->getMessage();}
?>