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
        $this->form_validation->set_rules('nombre', 'nombre persona', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('signup');
        }else{
            $nombre = $this->input->post('nombre');
            $varl = $this->datos_model->agregar_datos($nombre);
            if ($varl) {
                echo "Los datos han sido agregado a la base de datos con exito.";
            }else{
                echo "Ha ocurrido un inconveniente al procesar la información.";
            }
        }
    }
}