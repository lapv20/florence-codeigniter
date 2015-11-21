<!DOCTYPE html>
<html>
	<head>
		<title>Mi primera pagina con Codeigniter</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/bootstrap.css' ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/jumbotron-narrow.css' ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/bootstrap-theme.css' ?>">
	</head>
	<body>
	<div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation"><a href="<?php echo base_url().'signup/ver_nombres'; ?>">Ver Todos</a></li>
            <li role="presentation"><a href="<?php echo base_url().'signup/agregar'; ?>">Agregar Nuevo</a></li>
          </ul>
        </nav>
        <h3 class="text-muted">Agenda Teléfonica</h3>
      </div>
    </div>