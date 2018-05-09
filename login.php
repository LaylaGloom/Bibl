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
 session_start();
 include('include/conect.php');
try
{//inicia evaluacion de sesion 
  if(isset($_SESSION['username']))
  { 
    header("location: registro.php");
  }
  else
  {
    //echo "no hay sesion iniciada";
  }
}//termina la evaluacion de la sesion

catch (Exception $e) {
  //Si encuentra alguna excepcion muestra el error que produjo
        echo "<br>Ha Fallado Algo: " . $e->getMessage();}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <link rel="stylesheet" href="css.css">
	<title>Login Sistema</title>

   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="styles.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
</head>
<body background="assets/img/1.png" onload='document.forms["reg"]["user_name"].focus()'>
    <center>
	      <h1>
          <span style="color: #FFFFFF">
            <span style="font-family: 'Courier New', Courier, monospace">
                  BIENVENIDO
            </span>
          </span>
        </h1>
    </center>
	 <center>
      <div id="login">
        <center> 
          <table> <!-- border="1" cellpadding="0" cellspacing="0" brdercolor="#FFFFFF" -->
            <tr>
              <td>
                <a href="http: //"><img src="assets/img/login2.png" width="235" height="235" style="border: 0" alt=""></a>
              </td> 
            </tr>
            <tr>
              <td>
                <center>
                <a>Login de Acceso</a>
                </center>
              </td>
            </tr>
          </table>
        </center> 
      </div>
       <div id="login2">
        <form name="reg" action="element/evalogin.php" method="POST">
         <table> <!-- border="1" cellpadding="0" cellspacing="0" brdercolor="#FFFFFF" -->
           <tr>
             <td>
                 <label for="nombre">Usuario</label> <!-- <span><em>.</em></span> -->
             </td>
           </tr>
           <tr align="center">
             <td>
              <input type="text" name="username" class="form-input" required/>
             </td>                
           </tr>
          <tr><td> </td></tr>
          <tr>
             <td>
                 <label for="apellido">Password</label> <!-- <span><em>.</em></span> -->
             </td>
           </tr>
           <tr align="center">
             <td>
                 <input type="Password" name="clave_user" class="form-input" required/> 
             </td>
           </tr>
           <tr><td> </td></tr>
           <tr>
             <td>
                <center> <input class="form-btn" name="submit" type="submit" value="Ingresar"/></center>
             </td>
           </tr>
          </table>  
        </form>
      </div>
    </center>
  <?php
      $error = filter_input(INPUT_GET, 'err', $filter = FILTER_SANITIZE_STRING);
      if (! $error) 
      {
        //si no hay un error al incio 
        //$error = 'Oops! Problema desconocido.';
      }
  ?>
  <div id="login2">
   <center> <p class="error"><?php echo $error; ?></p> </center>
  </div> 
</body>
</html>