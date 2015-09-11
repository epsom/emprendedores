<!--- Conexion con la base de datos-->
<?php	
	$mysqli=new mysqli("localhost","root","","iot");
	
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}
?>