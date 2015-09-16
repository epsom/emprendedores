<!--- Conexion con la base de datos-->
<?php	
	$mysqli=new mysqli("localhost","root","","savinglivesempr");
	
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}
?>