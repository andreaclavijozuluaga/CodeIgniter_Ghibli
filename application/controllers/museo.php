<?php if (! defined('BASEPATH')) exit ('No direct script acess allowed');

class museo extends CI_Controller {
  public function __construct() {
    parent:: __construct();
    // EN EL METODO CONSTRUCTOR SIEMPRE VAN LOS HELPER Y LOS MODELOS
    $this->load->helper(array('getmenu', 'url'));
    $this->load->helper(array('getmovie', 'url'));
    $this->load->model('usuario');
  }
  public function index() {
    $data['menu'] = main_menu();
    $data['movie'] = main_movie();
    $this->load->view('museo', $data);
    $this->load->view('footer');
  }

  public function guardar()//Creamos un metodo que declara las variables que necesita el modelo para ejecutarse
    {
        $nombre=$this->input->post('nombre');
        $correo=$this->input->post('correo');
        $fecha=$this->input->post('fecha');
        $mensaje_usuario=$this->input->post('mensaje_usuario');
        $datos=array(
            'nombre'=>$nombre,
            'correo'=>$correo,
            'fecha'=>$fecha,
            'mensaje_usuario'=>$mensaje_usuario,
        );
        if(!$this->usuario->almacenar($datos)) {
            $mensaje['msg']="Ocurrio un error al enviar la información";
            $this->load->view('museo',$mensaje,$data);
        }
        $mensaje['msg'] = "Información guardada correctamente";
        $this->load->view('museo',$mensaje,$data);
  }
}

