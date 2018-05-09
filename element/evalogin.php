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
 #Modulo de evaluacion de parametros de login y sesion (si esta o no deshabilitado)
session_start();

   //recibe las variables enviadas por el formulario
$myusername=$_POST['username'];
$mypassword=$_POST['clave_user'];
  // inicia revision de sesion
//echo "<br>variable: ".$myusername;
//echo "<br>variable: ".$mypassword;

if(isset($_SESSION['username']))
{ //session iniciada y muestra el usuario logeado
   echo "<br>sesion iniciada: ".$_SESSION['username'];
   header("location: ../registro.php");
}
else
{ //no se ha iniciado sesion y se evalua captando las variables del formulario
  try{//se realiza la consulta a la Base de Datos 
        //se invoca al archivo que contiene la conexion a la base de datos    
        require_once '../include/conect.php';
        $login = $conn->prepare("SELECT * FROM user WHERE username=? AND password=?");
        $login->bindParam(1,$myusername);
        $login->bindParam(2,$mypassword);
        $login->execute();
        $resultado=$login->fetchAll();
        //se verifica que la consulta arroje registros
        if ($login)
        {//si existen varios registros 
          foreach ($resultado as $row) 
            { //registra las variables para su proxia evaluacion
              $myusr= $row['username'];
              $mypas= $row['password'];
              $mydes= $row['status_People_id'];
            }//evaluacion de las variables enviadas por el formulario vs con las variables de consulta
              if ($myusername==$myusr AND $mypassword==$mypas)
              {//se crea la variable de session al verificar que el login fue correcto para el administrador
                switch ($mydes) 
                {
                  case 1: //cuando la opcion es 1 es Administrador
                    $_SESSION['username']=$myusername;
                    $_SESSION['tipo']="Administrador";
                    echo "<br>sesion iniciada: ".$_SESSION['username'];
                    header("location: ../registro.php");    
                    break;
                  case 2: //cuando la opcion es 2 es Usuario
                    $_SESSION['username']=$myusername;
                    $_SESSION['tipo']="Usuario";
                    echo "<br>sesion iniciada: ".$_SESSION['username'];
                    header("location: ../registro.php");            
                  case 3:
                    header("location: ../login.php?err=Usuario Deshabilitado");
                } //cierra el switch
              } //cierra el if de la verificacion de usuarios
              else 
              {
                  header("location:../login.php?err=Tu nombre de Usuario o Password son Incorrectos");
              }//se cierra el else if que evalua las variables
        }//se cierra el if que evalua si hay registros
        else{ //si no hay registros es que no esta el usuario dado de Alta 
          header("location:../login.php?err=No se Encuentra Registrado el Usuario");}
     }//se cierra el try a la consulta a la base de datos
  catch (Exception $e) 
     {//Si encuentra alguna excepcion muestra el error que produjo
        echo "<br>Ha Fallado Algo: " . $e->getMessage();
     }//se cierra el catch de excepcion
}//se cierra el if que evalua su existe sesion 
?>