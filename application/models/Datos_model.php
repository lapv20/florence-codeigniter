<?php defined('BASEPATH') OR exit('No direct script access allowed');

class datos_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }
 
    public function agregar_datos($nombre, $apellido, $telefono, $mail)
    {
        $sql = "INSERT INTO datos VALUES ('','".$nombre."', '".$apellido."', '".$telefono."', '".$mail."')";
        $this->db->query($sql);
        return true;
    }

    /*Para el editar de contacto recibe los datos nuevos y remplaza la entrada en la base de datos*/
    public function agregar_datos_modificados($nombre, $apellido, $telefono, $mail, $id)
    {
        $sql = "UPDATE 'datos' SET 'nombre'=".$nombre.",'apellido'=".$apellido.",'telefono'=".$telefono.",'correo'=".$mail." WHERE id='".$id."'";
        $this->db->query($sql);
        return true;
    }

    public function eliminar_contacto($id)
    {
        $sql = "DELETE FROM datos WHERE id='".$id."'";
        $this->db->query($sql);
        return true;
    }

    public function obtener_datos_contacto($id){
        $sql = "SELECT * FROM datos WHERE id='".$id."'";
        $query = $this->db->query($sql);
        $contacto = $query->result();
        return $contacto;
    }

    /* obtiene todos los registros de la que antes era la tabla
    nombre */
    public function obtener_nombres()
    {
        $sql = "SELECT * FROM datos";
        $query = $this->db->query($sql);
        $nombres = $query->result();

        return $nombres;
    }

    /* TRUE si el número existe en la base de datos */
    public function verificar_telefono($telefono){
        $sql = "SELECT * FROM datos WHERE telefono='".$telefono."' LIMIT 1";
        $row = $this->db->query($sql);

        if ($row->num_rows()==1) {
            return TRUE;
        }else{
            return FALSE;
        }
    }

    /* TRUE si el mail existe en la base de datos */
    public function verificar_correo($mail){
        $sql = "SELECT * FROM datos WHERE correo='".$mail."' LIMIT 1";
        $row = $this->db->query($sql);

        if ($row->num_rows() == 1) {
            return TRUE;
        }else{
            return FALSE;
        }
    }
 
}

?>