<?php
$servidor="localhost";
$usuario="root";
$clave="";
$db="tr1";

$con=mysqli_connect($servidor,$usuario,$clave,$db);
if(!$con){
	die("Error al conectarse..".mysqli_connect_error());
}


?>