<?php if (! defined('BASEPATH')) exit ('No direct script acess allowed');

class historia extends CI_Controller {
  //construct es el metodo que necesitamos para acceder, llamar a los modelos, link
  public function __construct() {
    parent:: __construct();
    $this->load->helper(array('getmenu','url'));
    $this->load->helper(array('getmovie', 'url'));
  }
  //CREAR METODO QUE MUESTRE LAS VISTAS
  public function index() {
    $data['menu'] = main_menu();
    $data['movie'] = main_movie();
    //CARGAR, MOSTRAR O EJECUTAR LA VISTA MECESITAMOS A LOAD
    $this->load->view('historia', $data);
    $this->load->view('footer');
  }
}