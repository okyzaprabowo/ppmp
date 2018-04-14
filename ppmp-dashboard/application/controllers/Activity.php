<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Activity extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->load->view('activity/v_activity');
  }

}
