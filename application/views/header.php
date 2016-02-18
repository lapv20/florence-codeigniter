<!DOCTYPE html>
<html lang="es-ve">
<head>
	<title>Mi primera pagina con Codeigniter</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/jumbotron-narrow.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/bootstrap.css' ?>">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<script src="<?php echo base_url().'js/jquery.min.js' ?>"></script>
	<script src="<?php echo base_url().'js/bootstrap.js' ?>"></script>
</head>
<body>
	<div class="container">
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo base_url().'inicio/'; ?>">Sistema Multicosas</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="<?php echo base_url().'inicio/'; ?>">Inicio</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Agenda Telefonica <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="<?php echo base_url().'signup/ver_nombres'; ?>">Ver Contactos</a></li>
								<li><a href="<?php echo base_url().'signup/agregar'; ?>">Agregar Contacto</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Asistencia <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="<?php echo base_url().'inicio/asistencia'; ?>">Agregar Asistencia</a></li>
							</ul>
						</li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
	</div>
</body>
</html>