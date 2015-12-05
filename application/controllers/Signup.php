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
        $this->form_validation->set_rules('nombre', 'Nombre', 'trim|required|alpha');
        $this->form_validation->set_rules('apellido', 'Apellido', 'trim|required|alpha');
        $this->form_validation->set_rules('telefono', 'Telefono', 'trim|required|numeric|callback_check_telefono');
        $this->form_validation->set_rules('correo', 'Email', 'trim|callback_check_email');
        /* trim para remover data benigna */

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('signup');
        }else{
            /* Obteniendo los datos del formulario */
            $nombre = $this->input->post('nombre');
            $apellido = $this->input->post('apellido');
            $telefono = $this->input->post('telefono');
            $correo = $this->input->post('correo');

            /* Pasando los datos del formulario al modelo para ingresarlos en la base de datos */
            $varl = $this->datos_model->agregar_datos($nombre, $apellido, $telefono, $correo);

            if ($varl) {
                redirect('/signup/ver_nombres');
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

    public function eliminar()
    {
        $url = $this->uri->uri_to_assoc();
        $id = $url['contacto'];
        $this->datos_model->eliminar_contacto($id);

        redirect('/signup/ver_nombres');
    }

    /**
    Obtiene los datos para cargar en el formulario de editar y redirige al formulario
    **/
    public function editar(){
        $url = $this->uri->uri_to_assoc();
        $id = $url['contacto'];
        $datos['datos'] = $this->datos_model->obtener_datos($id);

        $this->load->view('editar_contacto', $datos);
    }

    /**
    Obtiene los datos editados, los verifica y guarda en la base de datos
    **/
    public function editar_guardar()
    {
        $datos['datos'] = $this->datos_model->obtener_datos($this->input->post('id'));
        $datos['datos'][0]->nombre = $this->input->post('nombre');
        $datos['datos'][0]->apellido = $this->input->post('apellido');
        $datos['datos'][0]->telefono = $this->input->post('telefono');
        $datos['datos'][0]->correo = $this->input->post('correo');

        /* Aqui se colocan las validaciones del formulario */
        $this->form_validation->set_rules('nombre', 'Nombre', 'trim|required');
        $this->form_validation->set_rules('apellido', 'Apellido', 'trim|required');
        $this->form_validation->set_rules('telefono', 'Telefono', 'trim|required|numeric');
        $this->form_validation->set_rules('correo', 'Email', 'trim');
        /* trim para remover data benigna */

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('editar_contacto', $datos);
        }else{
            /* Obteniendo los datos del formulario */
            $id = $this->input->post('id');
            $nombre = $this->input->post('nombre');
            $apellido = $this->input->post('apellido');
            $telefono = $this->input->post('telefono');
            $correo = $this->input->post('correo');

            /* Pasando los datos del formulario al modelo para ingresarlos en la base de datos */
            $varl = $this->datos_model->agregar_datos_editados($id, $nombre, $apellido, $telefono, $correo);

            if ($varl) {
                redirect('/signup/ver_nombres');
            }else{
                $datos['mensajes'] = "Ha ocurrido un inconveniente al procesar la información.";
                $this->load->view('signup', $datos);
            }
        }
    }

    /** ** ** ** ** ** ** **
    * CALLBACK FUNCTIONS 
    ** ** ** ** ** ** ** **/
    function check_email($mail)
    {
        if ($mail == "") {
            return TRUE;
        }
        if(stristr($mail, "@gmail.com") == FALSE){
            $this->form_validation->set_message('check_email', 'El correo debe ser perteneciente a Google.');
            return FALSE;
        }
        if ($this->datos_model->verificar_correo($mail)) {
            $this->form_validation->set_message('check_email', 'Ya existe un contacto con este correo.');
            return FALSE;
        }
        if(preg_match('/\s/',$mail)){
            $this->form_validation->set_message('check_email', 'El correo no debe contener espacios en blanco');
            return FALSE;
        }
        return TRUE;
    }

    function check_telefono($tel){
        if ($this->datos_model->verificar_telefono($tel)) {
            $this->form_validation->set_message('check_telefono', 'El número ya existe en nuestros registros.');
            return FALSE;
        }
        return TRUE;
    }
    /** ** ** ** ** ** ** **
    * END CALLBACK FUNCTIONS
    ** ** ** ** ** ** ** **/
}