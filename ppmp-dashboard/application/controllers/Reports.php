<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reports extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->M_base->_make_sure_is_login();
    
    $this->load->view('reports/v_reports');
  }

}
