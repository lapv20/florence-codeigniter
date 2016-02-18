<?php include_once(APPPATH.'views/header.php'); ?>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-sm-12 col-xs-12">
				<ol class="breadcrumb">
					<li><a href="<?php echo base_url().'inicio/asistencia'; ?>">Asistencia</a></li>
					<li class="active">Agregar Asistencia</li>
				</ol>
				<?php include_once(APPPATH.'views/Asistencia/agregar.php'); ?>
			</div>
		</div>
	</div>
<?php include_once(APPPATH.'views/footer.php'); ?>