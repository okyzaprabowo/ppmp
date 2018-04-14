<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Content extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->load->view('content/v_content');
  }

}
