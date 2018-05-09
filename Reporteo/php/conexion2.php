<?php
	class Conexion{//iniciamos la clase con la que nos conectaremos a la bd
		static public $con;//declaramos las variables
		static private	$server="localhost";//"192.168.137.1";//direccion del servidor
		static private $username="admin";//"Daniel";//usuario
		static private $password="7ygv(UHB";//contraseña
		static private $db='library';//base de datos
		static public function conectar(){//esta funcion es la que conecta con la bd (abrimos la conexion)
			self::$con = new mysqli(self::$server,self::$username,self::$password,self::$db);//aqui se almacena la conexion en la variable con
			if(self::$con->connect_errno){//si la conexion nos devuelve un error entonces
				echo("Error al conectar con la base de datos") .self::$con->connect_error;//mostrar mensaje incluyendo el error
			}//fin if
		}//fin funcion
		static public function desconectar(){//en esta funcion cerramos la conexion
			self::$con->close();//a qui cerramos la conexion
		}//fin de funcion
    }//fin de clase
    
?>
