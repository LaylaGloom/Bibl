<?php
  include ("php/periodos.php");
  include('php/obtenerEstadisticas.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Estadisticas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/estilo.css">
    <script src="main.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script  src="js/funciones.php"></script>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js'></script>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.debug.js" integrity="sha384-CchuzHs077vGtfhGYl9Qtc7Vx64rXBXdIAZIPbItbNyWIRTdG0oYAqki3Ry13Yzu" crossorigin="anonymous"></script>
    <script src="js/pdf.js"></script>
    <script type="text/javascript" src="js/llenarselect.js"></script>
  </head>
  <body onload="cargarAnios()">
    <header>
      <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link active" href="index.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tablas/ingenierias_licenciaturas.php">Ingenierias y Licenciaturas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tablas/maestrias_doctorados.php">Maestrias y Doctorados</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tablas/especialidades.php">Especialidades</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tablas/docentes_administrativos.php">Docentes y Administrativos</a>
        </li>
      </ul>
    </header>
    <div id="contenedorGrafica">
      <canvas  id="myChart" width="1000" height="300"></canvas>
      <script src="js/grafica2.php"></script>
    </div>
    <div id="datosGrafica">
      <form actio="admin.php" method="post">
        <div class="form-row align-items-center">
          <div class="col-auto my-1">
            <label class="mr-sm-2" for="inlineFormCustomSelect">Periodo</label>
            <select class="custom-select mr-sm-2" id="reportes" name="reportes" onclick="agregarMeses()">
              <option selected>Seleccione</option>
              <option value="mensual">Mensual</option>
              <option value="trimestral">Trimestral</option>
              <option value="cuatrimestral">Cuatrimestral</option>
              <option value="anual">Anual</option>
            </select>
          </div>
          <div class="col-auto my-1">
            <label class="mr-sm-2" for="inlineFormCustomSelect">Mes</label>
            <select class="custom-select mr-sm-2" id="Mes" name="Mes">
              <option selected>Seleccione</option>
            </select>
          </div>
          <div class="col-auto my-1">
            <label class="mr-sm-2" for="inlineFormCustomSelect">Año</label>
            <select class="custom-select mr-sm-2" id="Anio" name="Anio">
              <option selected>Seleccione</option>
            </select>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Cargar datos</button>
        <button class="btn btn-primary" onclick="savePDF();">Pdf</button>
      </form>
    </div>
  </body>
</html>
