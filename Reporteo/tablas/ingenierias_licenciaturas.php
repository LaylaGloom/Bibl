<?php
  include 'header.php';
?>
<body onload="cargarAnios()">
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
          <th scope="col">Ingenierías Telecomunicaciones</th>
          <th scope="col">Fecha</th>
        </tr>
      </thead>
      <tbody>
        <?php
          echo llenarTablas::llenar();
          while($row = mysqli_fetch_array(llenarTablas::$tablas)){
            echo " <tr>
            <th scope=".'"row"'.">".$row[0]."</th>
            <td>".$row[9]."</td>
            <td>".$row[10]."</td>
            <td>".$row[1]."</td>
            <td>".$row[2]."</td>
            <td>".$row[5]."</td>
            <td>".$row[6]."</td>
            <td>".$row[7]."</td>
            <td>".$row[3]."</td>
            <td>".$row[4]."</td>
            <td>".$row[8]."</td>
            <td>".$row[24]."</td>
            </tr>";
          }
        ?>
      </tbody>
    </table>
  </div>
</body>
