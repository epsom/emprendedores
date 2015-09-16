<?php
function datosboton($d1, $d2){
	require('conexion.php');
	$sql="INSERT INTO pruebadatos (d1, d2) VALUES ('$d1', '$d2')";
	$r=$mysqli->query($sql);
}


?>