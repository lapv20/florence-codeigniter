<?php
    include(APPPATH.'forms/nombre_form.php');
    $this->load->helper('email');
?>
<body>
    <?php if (isset($mensajes) && $mensajes) { echo "<div class='alert alert-danger' role='alert'>".$mensajes."</div>"; } ?>
    <?php //echo validation_errors(); ?>
    
    <?php echo form_open("signup/agregar", $form); ?>
    <table class="table table-bordered" width="63%" cellpadding="7" cellspacing="10">
        <tr>
            <td width="33%">Nombre</td>
            <td width="66%"><?php 
                echo form_error('nombre', '<p class="text-danger">', '</p>');
                /* Para repoblar los campos de form */
                $n = set_value('nombre');
                echo form_input($nombre, $n); ?></td>
        </tr>
        <tr>
            <td width="33%">Apellido</td>
            <td width="66%"><?php 
                echo form_error('apellido', '<p class="text-danger">', '</p>');
                $a = set_value('apellido');
                echo form_input($apellido, $a); ?></td>
        </tr>
        <tr>
            <td width="33%">Telefono</td>
            <td width="66%"><?php 
                echo form_error('telefono', '<p class="text-danger">', '</p>');
                $t = set_value('telefono');
                echo form_input($telefono, $t); ?></td>
        </tr>
        <tr>
            <td width="33%">Correo Electronico</td>
            <td width="66%"><?php 
                echo form_error('correo', '<p class="text-danger">', '</p>');
                $c = set_value('correo');
                echo form_input($correo, $c); ?></td>
        </tr>
        <tr>
            <td width="50%"><?php echo form_reset($reset); ?></td>
            <td width="50%"><?php echo form_submit($submit); ?></td>
        </tr>
    </table>
</body>