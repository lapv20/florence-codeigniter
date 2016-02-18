<?php
$form = array(
    'class' => 'form',
    'id' => 'fomulario',
    'name' => 'formulario'
 );

$nombre = array(
    'class' => 'form-control',
    'name'  => 'nombre',
    'id'    => 'nombre',
    'size'  => 30,
    'placeholder' => 'Primer Nombre'
 );
$apellido = array(
    'class' => 'form-control',
    'name'  => 'apellido',
    'id'    => 'apellido',
    'placeholder' => 'Primer Apellido'
 );
$telefono = array(
    'class' => 'form-control',
    'name'  => 'telefono',
    'id'    => 'telefono',
    'size'  => 30,
    'placeholder' => '0000000000'
 );
$correo = array(
    'class' => 'form-control',
    'name'  => 'correo',
    'id'    => 'correo',
    'placeholder' => 'example@gmail.com'
 );

$reset = array(
    'name' => 'reset',
    'type' => 'reset',
    'value' => 'Limpiar Formulario',
    'class' => 'btn btn-default',
    'role' => 'button'
 );
$submit = array(
    'name' => 'submit',
    'type' => 'submit',
    'value' => 'Agregar Nuevo Contacto',
    'class' => 'btn btn-primary'
     );
$submit_editar = array(
    'name' => 'submit',
    'type' => 'submit',
    'value' => 'Guardar Cambios',
    'class' => 'btn btn-success'
     );
?>