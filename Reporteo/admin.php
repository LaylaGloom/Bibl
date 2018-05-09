<?php 
    include ("php/periodos.php");
    include('php/obtenerEstadisticas.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
    <script src="main.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script  src="js/funciones.php"></script>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js'></script>
    <script src="http://code.jquery.com/jquery-latest.js"></script> 
  </head>
<body>
    <header>
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" href="#">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="bloquear.php">Bloquear</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><?php echo($_SESSION['User']); ?></a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Tiempo real</a>
                      <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Cerrar Sesion</a>
                </div>
            </li>
        </ul>       
    </header>
    <div>
<canvas  id="myChart" width="1000" height="300"></canvas>
 <script src="js/grafica2.php">
 
 </script>
 </div>
<form actio="admin.php" method="post">
  <div class="form-row align-items-center">
    <div class="col-auto my-1">
      <label class="mr-sm-2" for="inlineFormCustomSelect">Periodo</label>
      <select class="custom-select mr-sm-2" id="reportes" name="reportes">
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
        <option value="01">Enero</option>
        <option value="02">Febrero</option>
        <option value="03">Marzo</option>
        <option value="04">Abril</option>
        <option value="05">Mayo</option>
        <option value="06">Junio</option>
        <option value="07">Julio</option>
        <option value="08">Agosto</option>
        <option value="09">Septirmbre</option>
        <option value="10">Octubre</option>
        <option value="11">Noviembre</option>
        <option value="12">Diciembre</option>
      </select>
    </div>
  </div>
      <button type="submit" class="btn btn-primary">Submit</button>
</form>
 <?php 
    class llenarTablas extends Estadisticas{
      public static $tablas;
        static function llenar(){
           self::conectar();
        self::$tablas=self::$con->query("select * from visits;");

        }
    }
    ?>
    <br>
    <div id="ingenieros-lic">
      <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Licenciaturas Médico Cirujano</th>
      <th scope="col">Licenciaturas Terapia Física</th>
      <th scope="col">Ingenierías Biomédica</th>
      <th scope="col">Ingenierías Biotecnología</th>
      <th scope="col">Ingenierías Financiera</th>
      <th scope="col">Ingenierías Mecánica Automotriz</th>
      <th scope="col">Ingenierías Mecatrónica</th>
      <th scope="col">Ingenierías Software</th>
      <th scope="col">Ingenierías Telemática</th>
      <th scope="col">Fecha</th>           
    </tr>
  </thead>
  <tbody>
   <?php
    echo llenarTablas::llenar();
    while($row = mysqli_fetch_array(llenarTablas::$tablas)){
    echo " <tr>
      <th scope=".'"row"'.">".$row[0]."</th>
      <td>".$row[8]."</td>
      <td>".$row[9]."</td>
      <td>".$row[1]."</td>
      <td>".$row[2]."</td>
      <td>".$row[5]."</td>
      <td>".$row[6]."</td>
      <td>".$row[7]."</td>
      <td>".$row[3]."</td>
      <td>".$row[4]."</td>
      <td>".$row[20]."</td>
    </tr>";
  }
    ?>
  </tbody>
</table>
    </div>
<br>
    <div id="especialidades">
      <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Especialidades Biotecnología Ambiental</th>
      <th scope="col">Especialidades Mecatrónica</th>
      <th scope="col">Especialidades Seguridad Informática</th>
      <th scope="col">Fecha</th>  
    </tr>
  </thead>
  <tbody>
   <?php
    echo llenarTablas::llenar();
    while($row = mysqli_fetch_array(llenarTablas::$tablas)){
    echo " <tr>
      <th scope=".'"row"'.">".$row[0]."</th>
      <td>".$row[15]."</td>
      <td>".$row[16]."</td>
      <td>".$row[17]."</td>
      <td>".$row[20]."</td>
    </tr>";
  }
    ?>
  </tbody>
</table>
    </div>
    <br>
    <div id="maestrias">
      <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Maestrías Biotecnología</th>
      <th scope="col">Maestrías Enseñanza de la Ciencias</th>
      <th scope="col">Maestrías Mecatrónica</th>
      <th scope="col">Maestrías TICs</th>
      <th scope="col">Doctorado Biotecnología</th>
      <th scope="col">Fecha</th>    
    </tr>
  </thead>
  <tbody>
   <?php
    echo llenarTablas::llenar();
    while($row = mysqli_fetch_array(llenarTablas::$tablas)){
    echo " <tr>
      <th scope=".'"row"'.">".$row[0]."</th>
      <td>".$row[10]."</td>
      <td>".$row[11]."</td>
      <td>".$row[12]."</td>
      <td>".$row[13]."</td>
      <td>".$row[14]."</td>
      <td>".$row[20]."</td>
    </tr>";
  }
    ?>
</table>
</div>
    <br>
   <div id="admin">
      <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">First</th>
      <th scope="col">Fecha</th>    
    </tr>
  </thead>
  <tbody>
   <?php
    echo llenarTablas::llenar();
    while($row = mysqli_fetch_array(llenarTablas::$tablas)){
    echo " <tr>
      <th scope=".'"row"'.">".$row[0]."</th>
      <td>".$row[8]."</td>
      <td>".$row[20]."</td>
    </tr>";
  }
    ?>
  </tbody>
</table>
   </div>    
</body>
</html>
