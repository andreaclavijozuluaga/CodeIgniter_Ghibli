<?php if (! defined('BASEPATH')) exit ('No direct script acess allowed');

class consultar extends CI_Controller {

  public function __construct() {
    parent:: __construct();
    $this->load->helper(array('getmenu','url'));
    $this->load->helper(array('getmovie', 'url'));
    $this->load->model('usuario');
  }

  public function index() {
    $data['menu'] = main_menu();
    $data['movie'] = main_movie();
    $data['fetch_data'] = $this->usuario->fetch_data();
    $this->load->view('main_view', $data);
    $this->load->view('footer');
  }
}




