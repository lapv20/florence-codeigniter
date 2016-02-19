<?php include_once('header.php'); ?>
<?php
    include(APPPATH.'forms/nombre_form.php');
    $this->load->helper('email');
?>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-sm-12 col-xs-12">
				<h4>Modificar Datos</h4>
				<?php foreach ($datos as $dato) { ?>
                <?php echo form_open("signup/editar_guardar", $form); ?>
                	<?php 
                	$id_contacto = $dato->id;
                	echo form_input($id, $id_contacto); ?>
			    <table class="table table-bordered" width="63%" cellpadding="7" cellspacing="10">
			        <tr>
			            <td width="33%">Nombre</td>
			            <td width="66%"><?php 
			                echo form_error('nombre', '<p class="text-danger">', '</p>');
			                $n = $dato->nombre;
			                echo form_input($nombre, $n); ?></td>
			        </tr>
			        <tr>
			            <td width="33%">Apellido</td>
			            <td width="66%"><?php 
			                echo form_error('apellido', '<p class="text-danger">', '</p>');
			                $a = $dato->apellido;
			                echo form_input($apellido, $a); ?></td>
			        </tr>
			        <tr>
			            <td width="33%">Telefono</td>
			            <td width="66%"><?php 
			                echo form_error('telefono', '<p class="text-danger">', '</p>');
			                $t = $dato->telefono;
			                echo form_input($telefono, $t); ?></td>
			        </tr>
			        <tr>
			            <td width="33%">Correo Electronico</td>
			            <td width="66%"><?php 
			                echo form_error('correo', '<p class="text-danger">', '</p>');
			                $c = $dato->correo;
			                echo form_input($correo, $c); ?></td>
			        </tr>
			        <tr>
			            <td width="50%" colspan="2"><?php echo form_submit($submit_edit); ?></td>
			        </tr>
			    </table>
			    <?php } ?>
			</div>
		</div>
	</div>
<?php include_once('footer.php'); ?>