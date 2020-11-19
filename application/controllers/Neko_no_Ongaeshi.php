<?php if (! defined('BASEPATH')) exit ('No direct script acess allowed');

class Neko_no_Ongaeshi extends CI_Controller {
  public function __construct() {
    parent:: __construct();
    $this->load->helper(array('getmenu', 'url'));
    $this->load->helper(array('getmovie', 'url'));
  }
  public function index() {
    $data['menu'] = main_menu();
    $data['movie'] = main_movie();
    $this->load->view('Neko_no_Ongaeshi', $data);
    $this->load->view('footer');
  }
}