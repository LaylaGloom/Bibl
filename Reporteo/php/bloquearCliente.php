
<?php
	require_once "conexion.php";
	$conexion=conexion();
	$id=$_POST['id'];

	$sql="UPDATE client SET status_People_id='3' WHERE `id`='$id'";
	echo $result=mysqli_query($conexion,$sql);
 ?>
