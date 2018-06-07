<?php
  include 'header.php';
?>
<body onload="cargarAnios()">
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
            <td>".$row[11]."</td>
            <td>".$row[12]."</td>
            <td>".$row[13]."</td>
            <td>".$row[14]."</td>
            <td>".$row[15]."</td>
            <td>".$row[24]."</td>
            </tr>";
          }
        ?>
      </tbody>
    </table>
  </div>
</body>
