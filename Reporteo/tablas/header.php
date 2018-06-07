<?php
  include ("../php/periodos.php");
  include('../php/obtenerEstadisticas.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Estadisticas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/estilo.css">
    <script src="../main.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script  src="../js/funciones.php"></script>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js'></script>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script type="text/javascript" src="../js/llenarselect.js"></script>
  </head>
  <body onload="cargarAnios()">
    <header>
      <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link <?php if(basename($_SERVER['PHP_SELF']) == "index.php"){echo "active";} ?>" href="../index.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if(basename($_SERVER['PHP_SELF']) == "ingenierias_licenciaturas.php"){echo "active";} ?>" href="../tablas/ingenierias_licenciaturas.php">Ingenierias y Licenciaturas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if(basename($_SERVER['PHP_SELF']) == "maestrias_doctorados.php"){echo "active";} ?>" href="../tablas/maestrias_doctorados.php">Maestrias y Doctorados</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if(basename($_SERVER['PHP_SELF']) == "especialidades.php"){echo "active";} ?>" href="../tablas/especialidades.php">Especialidades</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if(basename($_SERVER['PHP_SELF']) == "docentes_administrativos.php"){echo "active";} ?>" href="../tablas/docentes_administrativos.php">Docentes y Administrativos</a>
        </li>
      </ul>
    </header>
    <?php
      class llenarTablas extends Estadisticas{
        public static $tablas;
        static function llenar(){
          self::conectar();
          self::$tablas=self::$con->query("select * from visits;");
        }
      }
    ?>
  </body>
</html>
