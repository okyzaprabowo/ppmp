<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mission extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->M_base->_make_sure_is_login();
    
    $this->load->view('mission/v_mission');
  }

  public function add_mission()
  {
    $data['arr_domisili'] = $this->M_crud->custom_query("SELECT domicile FROM bot_reg WHERE domicile <> '' GROUP BY domicile");
    $this->load->view('mission/v_mission_add', $data);
  }

}
