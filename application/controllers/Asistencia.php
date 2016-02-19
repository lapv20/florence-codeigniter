<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asistencia extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('asistencia_model');
    }

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('Asistencia/principal');
	}

	public function agregar()
	{
		$this->load->view('Asistencia/agregar');
	}

	public function asistenciaAgregar()
	{
		$cedula = $this->input->post('cedula');
        $this->asistencia_model->asistencia_agregar($cedula);
        redirect('/asistencia/agregar');
	}

	public function verAsistencias(){
		$datos['asistencias'] = $this->asistencia_model->consultar_asistencias();
		$this->load->view('Asistencia/asistencias', $datos);
	}
}
