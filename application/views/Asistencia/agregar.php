<?php include_once(APPPATH.'views/header.php'); ?>
<?php include_once(APPPATH.'forms/formulario_marcar_asistencia.php'); ?>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-sm-12 col-xs-12">
				<ol class="breadcrumb">
					<li><a href="<?php echo base_url().'inicio/asistencia'; ?>">Asistencia</a></li>
					<li class="active">Agregar Asistencia</li>
				</ol>
				<?php echo form_open('asistencia/asistenciaAgregar', $form); ?>
					<table class="table">
						<tr class="text-center">
							<td>
								<div class="input-group input-group-lg">
									<span class="input-group-addon" id="sizing-addon1">Cédula de Identidad</span>
									<?php echo form_input('cedula','','class="form-control"'); ?>
								</div>
							</td>
						</tr>
					</table>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
<?php include_once(APPPATH.'views/footer.php'); ?>
