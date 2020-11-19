<?php if (! defined('BASEPATH')) exit ('No direct script acess allowed');

class Kaguya_hime extends CI_Controller {
  public function __construct() {
    parent:: __construct();
    $this->load->helper(array('getmenu', 'url'));
    $this->load->helper(array('getmovie', 'url'));
  }
  public function index() {
    $data['menu'] = main_menu();
    $data['movie'] = main_movie();
    $this->load->view('Kaguya_hime', $data);
    $this->load->view('footer');
  }
}