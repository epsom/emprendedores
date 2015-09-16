<table>
	<thead>
		<th>ID</th><th>Dato 1</th><th>Dato 2</th>
	</thead>
	<?php
	require('inc/conexion.php');
	$sql="SELECT * FROM pruebadatos";
	$datos=$mysqli->query($sql);				
	while($row=mysqli_fetch_array($datos)){ ?>
	<tr>
		<td><?php echo $row['id'];?></td>
		<td><?php echo $row['d1'];?></td>
		<td><?php echo $row['d2'];?></td>
	</tr>
	<?php }?>
</table>	