<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('datos_model');
    }

    public function index()
    {
        $this->load->view('signup');
    }

    public function agregar()
    {
        /* Aqui se colocan las validaciones del formulario */
        $this->form_validation->set_rules('nombre', 'nombre persona', 'required');
        $this->form_validation->set_rules('apellido', 'apellido persona', 'required');
        $this->form_validation->set_rules('telefono', 'telefono persona', 'required');
        $this->form_validation->set_rules('telefono', 'telefono', 'numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('signup');
        }else{
            /* Obteniendo los datos del formulario */
            $nombre = $this->input->post('nombre');
            $apellido = $this->input->post('apellido');
            $telefono = $this->input->post('telefono');

            /* Pasando los datos del formulario al modelo para ingresarlos en la base de datos */
            $varl = $this->datos_model->agregar_datos($nombre, $apellido, $telefono);

            if ($varl) {
                $this->ver_nombres();
            }else{
                $datos['mensajes'] = "Ha ocurrido un inconveniente al procesar la información.";
                $this->load->view('signup', $datos);
            }
        }
    }

    public function ver_nombres()
    {
        $datos['datos'] = $this->datos_model->obtener_nombres();
        $this->load->view('ver_nombres', $datos);
    }
}