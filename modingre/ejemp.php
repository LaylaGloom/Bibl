<?php

require_once '../include/conect.php';

echo "entra al ejercicio";

$login = $conn->prepare("SELECT * FROM client ORDER BY id DESC LIMIT 1");
$login->execute();
$row=$login->fetch();

$rows_for_page = 15;
if ($login)
{
	
	echo "<br>si hay respuesta y el resultado: ".$row['id'];
	$mynum=$row['id']/$rows_for_page;
}
else
{
	echo "<br>NO hay respuesta";
}
echo "<br>nuevo valor es: ".$mynum;





?>
