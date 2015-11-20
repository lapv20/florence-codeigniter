<?php
$form = array(
    'class' => 'form',
    'id' => 'fomulario',
    'name' => 'formulario'
 );

$nombre = array(
    'name'  => 'nombre',
    'id'    => 'nombre',
    'value' => '',
    'size'  => 30,
    'placeholder' => 'Primer Nombre'
 );
$apellido = array(
    'name'  => 'apellido',
    'id'    => 'apellido',
    'value' => '',
    'placeholder' => 'Primer Apellido'
 );
$telefono = array(
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
 );
$submit = array(
    'name' => 'submit',
    'type' => 'submit',
    'value' => 'Agregar Nombre',
     );
?>