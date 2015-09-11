<!DOCTYPE html>
<html lang="ES es">
<head>
	<meta charset="UTF-8">
	<title>Empresa</title>
	<!--- Cabecera comun (Enlace a todos los estilos y link)-->
	<?php include 'inc/header_common.php';?>
</head>
<body>
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
			<div class="row">
				<div class="col-xs-12">
					Emprendedores
					<p>
						Aqui va la descripcion de nuestro proyecto
					</p>
				</div>
				<div class="col-xs-4" id="org1">
					Aqui va la mision de la empresa
				</div>
				<div class="col-xs-4" id="org2">
					Aqui va la vision de la empresa
				</div>
				<div class="col-xs-4" id="or3g">
					Aqui van los valores de la empresa
				</div>
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