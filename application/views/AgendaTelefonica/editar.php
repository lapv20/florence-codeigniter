<?php include_once(APPPATH.'views/header.php'); ?>
<?php
	include(APPPATH.'forms/formulario_contacto.php');
	$this->load->helper('email');
?>
<div class="container">
	<div class="row">
		<div class="col-lg-12 col-sm-12 col-xs-12">
			<?php foreach ($datos as $dato) { ?>
				<ol class="breadcrumb">
					<li><a href="<?php echo base_url().'signup/ver_nombres'; ?>">Agenda Telefónica</a></li>
					<li><a href="#">Editar Contacto</a></li>
					<li class="active"><?php echo $dato->nombre.' '.$dato->apellido; ?></li>
				</ol>
				<?php if (isset($mensajes) && $mensajes) { echo "<div class='alert alert-danger' role='alert'>".$mensajes."</div>"; } ?>
				
			<?php echo form_open("signup/actualizarContacto", $form); ?>
			<?php 
				$d = $dato->id;
				echo form_input($id, $d);
			?>
			<table class="table">
				<tr>
					<th>Nombre</th>
					<td><?php 
						/* Para repoblar los campos de form */
						$n = $dato->nombre;
						echo form_input($nombre, $n);
						echo form_error('nombre', '<small><p class="text-danger">', '</p></small>');
						?></td>
				</tr>
				<tr>
					<th>Apellido</th>
					<td><?php 
						$a = $dato->apellido;
						echo form_input($apellido, $a); 
						echo form_error('apellido', '<small><p class="text-danger">', '</p></small>');
					?></td>
				</tr>
				<tr>
					<th>Teléfono</th>
					<td><?php 
						$t = $dato->telefono;
						echo form_input($telefono, $t); 
						echo form_error('telefono', '<small><p class="text-danger">', '</p></small>');
					?></td>
				</tr>
				<tr>
					<th>Cédula de Identidad</th>
					<td><?php 
						$cd = set_value('cedula');
						echo form_input($cedula, $cd); 
						echo form_error('cedula', '<small><p class="text-danger">', '</p></small>');
					?></td>
				</tr>
				<tr>
					<th>Correo Electrónico</th>
					<td><?php 
						$c = $dato->correo;
						echo form_input($correo, $c); 
						echo form_error('correo', '<small><p class="text-danger">', '</p></small>');
					?></td>
				</tr>
			</table>

			<button class="btn btn-success" type="submit"><span class="glyphicon glyphicon-save" aria-hidden="true"></span> Guardar Cambios</button>

			<a class="btn btn-danger" href="<?php echo base_url().'signup/eliminar/id/'.$dato->id; ?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Eliminar a <?php echo $dato->nombre; ?></a>
			<?php } ?>
		</div>
	</div>
</div>
<?php include_once(APPPATH.'views/footer.php'); ?>