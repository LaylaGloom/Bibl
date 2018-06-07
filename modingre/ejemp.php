<?php

/*require_once '../include/conect.php';

echo "entra al ejercicio";

$login = $conn->prepare("SELECT * FROM client ORDER BY id DESC LIMIT 1");
$login->execute();
$row=$login->fetch();

$rows_for_page = 12;
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




/*

try
{
  //se entiende que si no se recibe datos es el inicio 
	$reg_pag=12; //Se inicializa la variable, numero de registros que se desplegaran por pagina
	$reg_bot=0; //Se inicializa la variable, numero inicial del boton 
  //consulta el numero de registros
  $login = $conn->prepare("SELECT * FROM client ORDER BY id DESC LIMIT 1");
  $login->execute();
  $row=$login->fetch();
  
  //inicio la consulta con los valores de el salto de filas
  $sql1=$conn->prepare("SELECT * FROM client ORDER BY id ASC LIMIT $reg_bot,$reg_pag");
  $sql1->execute();
  $resultado=$sql1->fetchAll();
}
catch (Exception $e)
{//Si encuentra alguna excepcion muestra el error que produjo
  echo "<br>Ha Fallado algo: " . $e->getMessage();
}

*/



?>
<!DOCTYPE html>
<html>
<head>
<script>
function clickCounter() {
    if(typeof(Storage) !== "undefined") {
        if (localStorage.clickcount) {
            localStorage.clickcount = Number(localStorage.clickcount)+1;
        } else {
            localStorage.clickcount = 1;
        }
        document.getElementById("result").innerHTML = "You have clicked the button " + localStorage.clickcount + " time(s).";
    } else {
        document.getElementById("result").innerHTML = "Sorry, your browser does not support web storage...";
    }
}
</script>
</head>
<body>
<p><button onclick="clickCounter()" type="button">Click me!</button></p>
<div id="result"></div>
<p>Click the button to see the counter increase.</p>
<p>Close the browser tab (or window), and try again, and the counter will continue to count (is not reset).</p>
</body>
</html>