<?php defined('BASEPATH') OR exit('No direct script access allowed');

class datos_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }
 
    public function agregar_datos($nombre)
    {
        $sql = "INSERT INTO nombre VALUES ('".$nombre."')";
        $this->db->query($sql);
    }
 
}

?>
