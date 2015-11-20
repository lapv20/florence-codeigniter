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
    'value' => '',
    'size'  => 30,
    'placeholder' => 'Primer Nombre'
 );
$apellido = array(
    'class' => 'form-control',
    'name'  => 'apellido',
    'id'    => 'apellido',
    'value' => '',
    'placeholder' => 'Primer Apellido'
 );
$telefono = array(
    'class' => 'form-control',
    'name'  => 'telefono',
    'id'    => 'telefono',
    'value' => '',
    'size'  => 30,
    'placeholder' => '0000000000'
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
    'value' => 'Agregar Nombre',
    'class' => 'btn btn-primary'
     );
?>