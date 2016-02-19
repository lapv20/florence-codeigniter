<?php include_once(APPPATH.'views/header.php'); ?>
<?php include_once(APPPATH.'forms/formulario_marcar_asistencia.php'); ?>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-sm-12 col-xs-12">
				<ol class="breadcrumb">
					<li><a href="<?php echo base_url().'inicio/'; ?>">Asistencia</a></li>
					<li class="active">Lista de Asistencias</li>
				</ol>
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Cédula</th>
							<th>Fecha</th>
						</tr>
					</thead>
					<tbody>
					<?php foreach ($asistencias as $asistencia) { ?>
					
						<tr>
							<td><?php echo $asistencia->cedula; ?></td>
							<td><?php echo $asistencia->fecha; ?></td>
						</tr>
					<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
<?php include_once(APPPATH.'views/footer.php'); ?>