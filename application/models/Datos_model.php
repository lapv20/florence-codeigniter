<?php defined('BASEPATH') OR exit('No direct script access allowed');

class datos_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }
 
    public function agregar_datos($nombre, $apellido, $telefono)
    {
        $sql = "SELECT * FROM nombre WHERE telefono='".$telefono."' LIMIT 1";
        $row = $this->db->query($sql);

        if ($row->num_rows()>0) {
            return false;
        }else{
            $sql = "INSERT INTO nombre VALUES ('".$nombre."', '".$apellido."', '".$telefono."')";
            $this->db->query($sql);
            return true;
        }
        
    }

    public function obtener_nombres()
    {
        $sql = "SELECT * FROM nombre";
        $query = $this->db->query($sql);
        $nombres = $query->result();

        return $nombres;
    }
 
}

?>