<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Volunteer extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->load->view('volunteer/v_volunteer');
  }

}
