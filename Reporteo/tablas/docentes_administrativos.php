<?php
  include 'header.php';
?>
<body onload="cargarAnios()">
  <br>
  <div id="admin">
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">id</th>
          <th scope="col">Administrativos</th>
          <th scope="col">Academicos</th>
          <th scope="col">Externos</th>
          <th scope="col">Fecha</th>
        </tr>
      </thead>
      <tbody>
        <?php
          echo llenarTablas::llenar();
          while($row = mysqli_fetch_array(llenarTablas::$tablas)){
            echo " <tr>
            <th scope=".'"row"'.">".$row[0]."</th>
            <td>".$row[20]."</td>
            <td>".$row[21]."</td>
            <td>".$row[22]."</td>
            <td>".$row[24]."</td>
            </tr>";
          }
        ?>
      </tbody>
    </table>
  </div>
</body>
