<?php
		
function conectar(){
$servidor="localhost";
$usuario="root";
$clave="";
$db="ch";
$con=mysql_connect($servidor,$usuario,$clave);
mysql_select_db($db,$con);
return $con;
}


$mysqli = new MySQLi("localhost", "root","", "ch");
		if ($mysqli -> connect_errno) {
			die( "Fallo la conexión a MySQL: (" . $mysqli -> mysqli_connect_errno() 
				. ") " . $mysqli -> mysqli_connect_error());
		}
		else{}



?>
