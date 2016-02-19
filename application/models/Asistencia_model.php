<?php defined('BASEPATH') OR exit('No direct script access allowed');

class asistencia_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function asistencia_agregar($cedula)
    {
    	$fecha = date('Y-m-d H:m:s');
        $sql = "INSERT INTO asistencia VALUES ('".$cedula."', '".$fecha."')";
        $this->db->query($sql);
        return true;
    }

    public function consultar_asistencias()
    {
    	$sql = "SELECT * FROM asistencia";
        $query = $this->db->query($sql);
        $asistencias = $query->result();

        return $asistencias;
    }
 
}

?>