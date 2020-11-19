<?php if (! defined('BASEPATH')) exit ('No direct script acess allowed');

class pagina extends CI_Controller {
  //construct es el metodo que necesitamos para acceder, llamar a los modelos, link
  public function __construct() {
    parent:: __construct();
    $this->load->helper(array('getmenu', 'url'));
    $this->load->helper(array('getmovie', 'url'));
  }
  //CREAR METODO QUE MUESTRE LAS VISTAS
  public function index() {
    //CARGAR, MOSTRAR O EJECUTAR LA VISTA MECESITAMOS A LOAD


    // $this->load->model('usuario');
    // $data['fetch_data'] = $this->usuario->fetch_data();

    // $this->load->view('main_view', $data);


    $data['menu'] = main_menu();
    $data['movie'] = main_movie();//La funcion esta en el archivo de helper
    $this->load->view('principal', $data);//data se envia a principal
    $this->load->view('footer');
  }
}
