<?php include_once(APPPATH.'views/header.php'); ?>
<?php
	include(APPPATH.'forms/formulario_contacto.php');
	$this->load->helper('email');
?>
<div class="container">
	<div class="row">
		<div class="col-lg-12 col-sm-12 col-xs-12">
			<ol class="breadcrumb">
				<li><a href="<?php echo base_url().'signup/ver_nombres'; ?>">Agenda Telefónica</a></li>
				<li class="active">Agregar Contacto</li>
			</ol>
			<?php if (isset($mensajes) && $mensajes) { echo "<div class='alert alert-danger' role='alert'>".$mensajes."</div>"; } ?>
			<?php //echo validation_errors(); ?>
			
			<?php echo form_open("signup/agregar", $form); ?>
			<table class="table">
				<tr>
					<th>Nombre</th>
					<td><?php 
						/* Para repoblar los campos de form */
						$n = set_value('nombre');
						echo form_input($nombre, $n);
						echo form_error('nombre', '<small><p class="text-danger">', '</p></small>');
						?></td>
				</tr>
				<tr>
					<th>Apellido</th>
					<td><?php 
						$a = set_value('apellido');
						echo form_input($apellido, $a); 
						echo form_error('apellido', '<small><p class="text-danger">', '</p></small>');
					?></td>
				</tr>
				<tr>
					<th>Teléfono</th>
					<td><?php 
						$t = set_value('telefono');
						echo form_input($telefono, $t); 
						echo form_error('telefono', '<small><p class="text-danger">', '</p></small>');
					?></td>
				</tr>
				<tr>
					<th>Correo Electrónico</th>
					<td><?php 
						$c = set_value('correo');
						echo form_input($correo, $c); 
						echo form_error('correo', '<small><p class="text-danger">', '</p></small>');
					?></td>
				</tr>
			</table>
			<?php echo form_reset($reset); ?><?php echo form_submit($submit); ?>
		</div>
	</div>
</div>
<?php include_once(APPPATH.'views/footer.php'); ?>