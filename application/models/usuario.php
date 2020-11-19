<?php
class usuario extends CI_Model
{
    public function __construct()
    {
        $this->load->database();//Carga la base de datos
    }
    public function almacenar($datos)//Crea la consulta
    {
        $datos= array(
            'nombre'=>$datos['nombre'],
            'correo'=>$datos['correo'],
            'fecha'=>$datos['fecha'],
            'mensaje_usuario'=>$datos['mensaje_usuario'],
        );
        if(!$this->db->insert('registro',$datos))//$conexion,'INSERT INTO nombretabla VALUES valor1,valor2'
        {
            return false;
        }
        return true;
    }

    public function fetch_data() {
        $query = $this->db->get('registro');
        //SELECT * FROM registro
        return $query;
    }

    public function get_registro() {
        $query = $this->db->get('registro');
        return $query;
    }

    public function update($data) {

        $data = array(
            'id' => $data['id'],
            'nombre' => $data['nombre'],
            'correo'=>$data['correo'],
            'fecha'=>$data['fecha'],
            'mensaje_usuario'=>$data['mensaje_usuario']
        );
        $this->db->where('id',$data['id']);
        if(!$this->db->update('registro', $data)) {
            return false;
        }
        return true;
    }
}