
<?php
	session_start();
	require_once "../php/conexion.php";
	$conexion=conexion();

 ?>
<div class="row">
	<div class="col-sm-12">
		<h2>Tabla de Bloqueo</h2>
		<table id="clientes" class="table table-hover table-striped table-condensed table-bordered">

			<tr>
				<td>Matricula</td>
				<td>Nombre</td>
				<td>Area</td>
				<td>Estado</td>
				<td></td>
			</tr>

			<?php

				if(isset($_SESSION['consulta'])){
					if($_SESSION['consulta'] > 0){
						$idp=$_SESSION['consulta'];
						$sql="SELECT c.id, c.identification_Number, c.name, c.area, sp.status
						FROM client AS c, status_people AS sp
						WHERE c.status_People_id = sp.status AND c.id='$idp'
						ORDER BY c.id;";
					}else{
						$sql="SELECT c.id, c.identification_Number, c.name, c.area, sp.status
						FROM client AS c, status_people AS sp
						WHERE c.status_People_id = sp.status
						ORDER BY c.id;";
					}
				}else{
					$sql="SELECT c.id, c.identification_Number, c.name, c.area, sp.status
						FROM client AS c, status_people AS sp
						WHERE c.status_People_id = sp.status
						ORDER BY c.id;";
				}

				$result=mysqli_query($conexion,$sql);

				while($ver=mysqli_fetch_row($result)){

					$datos=$ver[0]."||".
						   $ver[1]."||".
						   $ver[2]."||".
						   $ver[3]."||".
						   $ver[4];
			 ?>


			<tr>
				<td><?php echo $ver[1] ?></td>
				<td><?php echo $ver[2] ?></td>
				<td><?php echo $ver[3] ?></td>
				<td><?php echo $ver[4] ?></td>
				<td style="width:250px">
					<button class="btn btn-success glyphicon glyphicon-ok-circle"
					onclick="preguntarDesbloquear('<?php echo $ver[0] ?>','<?php echo $ver[4] ?>')">
					Desbloquear
					</button>

					<button class="btn btn-danger glyphicon glyphicon-ban-circle"
					onclick="preguntarBloquear('<?php echo $ver[0] ?>','<?php echo $ver[4] ?>')">
					Bloquear
					</button>
				</td>
			</tr>
			<?php
				}
			 ?>
		</table>
	</div>
</div>
