<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Volunteer extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $data['volunteer'] = $this->M_crud->_get_data('*', 'bot_reg');
    $this->load->view('volunteer/v_volunteer', $data);
  }

  public function detail_volunteer($id)
  {
    $this->load->view('volunteer/v_detail_volunteer');
  }

}
