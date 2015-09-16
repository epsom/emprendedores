<!DOCTYPE html>
<html lang="ES es">
<head>
	<meta charset="UTF-8">
	<title>SavingLives</title>
	<!--- Cabecera comun (Enlace a todos los estilos y link)-->
	<?php include 'inc/header_common.php';?>
</head>
<body>
	<!--- Flotante login-->
	<div id="login">
		<div id="datos">
			<h3 align="center">Inicia sesión</h3>
			<form method="post" action="">
				<table align="center" class="table">
					<tr>
						<td align="left">Nick o e-mail</td>
						<td><input type="text" id="usuario" name="usuario"/></td>
					</tr>
					<tr>
						<td align="left">Contraseña</td>
						<td><input type="password" id="pass" name="pass"/></td>
					</tr>
					<tr align="center">
						<td colspan="2"><input type="submit" value="Inicio" id="is" name="entrar"></td>
					</tr>
				</table>
				<a id="regb"><h5 align="center">Registrate</h5></a>
			</form>
			<br>
			<div align="right" style="margin-right: 10px;" id="close"><a>Cancelar</a></div>
		</div>
	</div>
	<!--- Flotante Registro-->
	<div id="registro">
		<div id="datosr">
			<h3 align="center">Registrate</h3>
			<p align="center">Todos los campos son necesarios</p>
			<form method="post" action="">
				<table align="center" class="table">
					<tr>
						<td align="left">Nombre</td>
						<td><input type="text" id="nom" name="nom"/></td>
					</tr>
					<tr>
						<td align="left">Apellido Paterno</td>
						<td><input type="text" id="ap" name="ap"/></td>
					</tr>
					<tr>
						<td align="left">Apellido Materno</td>
						<td><input type="text" id="am" name="am"/></td>
					</tr>
					<tr>
						<td align="left">Nick</td>
						<td><input type="text" id="nick" name="nick"/></td>
					</tr>
					<tr>
						<td align="left">Correo</td>
						<td><input type="text" id="mail" name="mail"/></td>
					</tr>
					<tr>
						<td align="left">Contraseña</td>
						<td><input type="password" id="pass1" name="pass1"/></td>
					</tr>
					<tr>
						<td align="left">Repite la contraseña</td>
						<td><input type="password" id="pass2" name="pass2"/></td>
					</tr>
					<tr align="center">
						<td colspan="2"><input type="submit" value="Registro" id="is" name="regbut"></td>
					</tr>
				</table>
				<a id="backb"><h5 align="center">Volver</h5></a>
			</form>
			<br>
			<div align="right" style="margin-right: 10px;" id="closer"><a>Cancelar</a></div>
		</div>
	</div>
	<!--- Cabecera-->
	<?php include 'inc/header.php';?>

	<!--- Cuerpo-->
	<div id="cuerpo">
		<!-- Primera seccion/Carrusel-->
		<div class="container">
			<div class="row" id="inicio">
				<div id="carousel" class="carousel slide" data-ride="carousel" data-interval="3000">
					<ol class="carousel-indicators">
						<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-example-generic" data-slide-to="1"></li>
						<li data-target="#carousel-example-generic" data-slide-to="2"></li>
					</ol>

					<div class="carousel-inner">
						<div class="item active">
							<a href="#"><img src="img/img1.png" alt="img" id="car"></a>
							<div class="carousel-caption">
        						<h3>Nosotros</h3>
        						<p>Nombre de la empresa</p>
      						</div>
						</div>
						<div class="item">
							<a href="#"><img src="img/img2.png" alt="img" id="car"></a>
						</div>
						<div class="item">
							<a href="#"><img src="img/img3.png" alt="img" id="car"></a>
						</div>
						
						<a class="left carousel-control" href="#carousel" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left"></span>
						</a>
						<a class="right carousel-control" href="#carousel" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right"></span>
						</a>
					</div>
				</div>
			</div>
		</div>

		<!-- Segunda seccion Nosotros-->
		<div class="container">
			<div class="row" id="nosotros">
				<div class="col-xs-12" align="center">
					<h2>Nosotros</h2>
					<div id="carousel" class="carousel slide" data-ride="carousel" data-interval="9000">
						<div class="carousel-inner">
							<div class="item active">
								<h3>Saving Lives</h3>
        						<p id="bannernosotros">Somos una organización que se interesa en apoyar a tener una vida más segura a aquellas personas que padecen de enfermedades cronicas.</p>
							</div>
							<div class="item">
								<h3>Problematica</h3>
        						<p id="bannernosotros">Cada año mueren más personas por enfermedades cronicas que por cualquier otra causa, ofrecemos tecnologia que te ayuda.</p>
							</div>
							<div class="item">
								<h3>Te ayudamos</h3>
        						<p id="bannernosotros">Nuestro producto te comunica a los servicios de salud disponibles para ser atendido y alerta a tus familiares.</p>
							</div>
						</div>
					</div>
				</div>	
				<div class="col-xs-4" id="org1">
					<h4>Mision</h4>
					<p align="justify">
						Ser una empresa que se distinga por brindar el mejor servicio personalizado a personas con 
						necesidades especiales en el área de la salud, comprometiéndonos con el bienestar de nuestros 
						clientes.
					</p>
				</div>
				<div class="col-xs-4" id="org2">
					<h4>Vision</h4>
					<p align="justify">
						Ser reconocidos como una empresa comprometida y confiable, siempre ofreciendo servicios de calidad 
						con calidez basados en la especialización del negocio, ofreciendo satisfacción total a nuestros 
						clientes.
					</p>
				</div>
				<div class="col-xs-4" id="org3">
					<h4>Valores</h4>
					<ui align="justify">
						<li>CONFIANZA</li>
						<li>SERIEDAD</li>
						<li>SOLVENCIA</li>
						<li>HONESTIDAD</li>
						<li>RESPONSABILIDAD</li>
					</ui>
				</div>
				<div class="col-xs-12" align="center">
					Aqui va nuestro organigrama(De preferencia pequeño y claro)
				</div>
			</div>
		</div>

		<!-- Tercera seccion Servicios-->
		<div class="container">
			<div class="row" id="servicios">
				<div class="col-xs-12" align="center">
					<h3>Servicios</h3>
					<p align="justify">
						Aqui va la descripcion de nuestro servicio
					</p>	
				</div>
			</div>
		</div>

		<!-- Cuarta seccion proyectos futuros-->
		<div class="container">
			<div class="row" id="proyectos">
				<div class="col-xs-12" align="center">
					<h3>Proyectos</h3>
					<p align="justify">
						Aqui va la propuesta de nuevos proyectos
					</p>	
				</div>
			</div>
		</div>
	</div>

	<!--- Pie de pagina-->
	<?php include 'inc/footer.php';?>
</body>
<!--- Pie de pagina comun (Enlace a todos los JavaScripts)-->
</html>
<?php include 'inc/footer_common.php';?>
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-2.1.4.min.js"></script>