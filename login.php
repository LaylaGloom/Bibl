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
    //header("location: registro.php");
  }
  else{/*echo "<br>no hay sesion iniciada"; */}
}//termina la evaluacion de la sesion

catch (Exception $e) {
  //Si encuentra alguna excepcion muestra el error que produjo
        echo "<br>Ha Fallado Algo: " . $e->getMessage();}
?>
<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <link rel="stylesheet" href="styles.css">
     
  <script language="javascript" type="text/javascript">
    function FunEval()
     {
      var dat1=document.reg.idCaptcha.value;

        //alert("entra a la funcion "+dat1);
        if(dat1=="login")
        {
          alert=("No ha colocado el correo correctamente");
          return false;
        }
      }
  </script>
<title>Login Sistema</title> 
</head>
<body background="assets/img/f4.jpg">
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
                <a><img src="assets/img/login2.png" width="235" height="235" style="border: 0" alt=""></a>
              </td> 
            </tr>
            <tr>
              <td>
                <center>
                <a>Login de Acceso</a>
                <br>
                </center>
              </td>
            </tr>
          </table>
        </center> 
      </div>
       <div id="login2">
        <form name="reg" id="reg" method="POST" action="element/evalogin.php" target='_self' enctype="multipart/form-data" onsubmit="return FunEval()">
        <table  > <!--border="1" cellpadding="0" cellspacing="0" brdercolor="#FFFFFF" -->
           <tr>
             <td>
                 <label for="nombre">Correo Electronico</label> <!-- <span><em>.</em></span> -->
             </td>
           </tr>
           <tr align="center">
             <td>
              <input type="text" id="email" name="email" placeholder="Login" autofocus required/>
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
        </table>        
      </div>
      <div>
        <table > <!--border="1" cellpadding="0" cellspacing="0" brdercolor="#FFFFFF"  -->
          <tr>
             <p>CAPTCHA</p>
             <p><img src="admin/captcha.php" alt="captcha" width="260" height="105"></p>
          </tr>  
          <tr>
            <p><input type="text" id="idCaptcha" name="captcha" required/></p>
          </tr>
          <tr>
            <td>
                <center> <input class="form-btn" name="submit" type="submit" value="Ingresar"></center>
             </td>
          </tr>
        </table>
      </div>
      </form>
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