<?php
  session_start();

try
{//inicia evaluacion de sesion 
  if(isset($_SESSION['username']))
    { 
      echo "<script> alert('Sesion Cerrada'); </script>";
      session_destroy();
      header("location:index.php");
    }
    else
    {
      echo "<script> alert('No hay sesion Iniciada'); </script>";
      header("location:index.php");
    }  
}//termina la evaluacion de la sesion

catch (Exception $e) {
  //Si encuentra alguna excepcion muestra el error que produjo
        echo "<br>Failed: " . $e->getMessage();}
?>