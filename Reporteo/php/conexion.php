

<?php
		function conexion(){
			$servidor="localhost";
			$usuario="admin";
			$password="7ygv(UHB";
			$bd="library";

			$conexion=mysqli_connect($servidor,$usuario,$password,$bd);

			return $conexion;
		}

 ?>
