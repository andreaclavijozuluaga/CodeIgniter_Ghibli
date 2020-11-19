<?php if (! defined('BASEPATH')) exit ('No direct script acess allowed');

class actualizar extends CI_Controller {

  public function __construct() {
    parent :: __construct();
    $this->load->helper(array('getmenu','url'));
    $this->load->helper(array('getmovie', 'url'));
    $this->load->model('usuario');
  }

  public function update(){
    $id = $this->input->post('id');
    $nombre = $this->input->post('nombre');
    $correo = $this->input->post('correo');
    $fecha = $this->input->post('fecha');
    $mensaje_usuario = $this->input->post('mensaje_usuario');

    $data = array(
      'id'=>$id,
      'nombre'=>$nombre,
      'correo'=>$correo,
      'fecha'=>$fecha,
      'mensaje_usuario'=>$mensaje_usuario,
    );
    if(!$this->usuario->update($data)) {
      echo "no se actualizo el registro";
      $this->load->view('formularioactualizar');
    }
      echo "se actualizo el registro";
      $this->load->view('formularioactualizar');
  }

  public function index() {
    $data['menu'] = main_menu();
    $data['movie'] = main_movie();
    $this->load->view('formularioactualizar',$data);
    $this->load->view('footer');

    $data['get_registro'] = $this->usuario->get_registro();
  }
}
