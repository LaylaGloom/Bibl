<?php
  include 'header.php';
?>
<body onload="cargarAnios()">
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
            <td>".$row[17]."</td>
            <td>".$row[18]."</td>
            <td>".$row[19]."</td>
            <td>".$row[24]."</td>
            </tr>";
          }
        ?>
      </tbody>
    </table>
  </div>
</body>
