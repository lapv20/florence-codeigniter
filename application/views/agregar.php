<?php
    include("nombre_form.php");
?>
<body>
    <?php echo validation_errors(); ?>
    <?php echo form_open("/Signup/agregar", $form); ?>
    <table width="63%" cellpadding="7" cellspacing="10">
        <tr>
            <td width="33%">Nombre</td>
            <td width="66%"><?php echo form_input($nombre); ?></td>
        </tr>
        <tr>
            <td width="50%"><?php echo form_reset($reset); ?></td>
            <td width="50%"><?php echo form_submit($submit); ?></td>
        </tr>
    </table>
</body>