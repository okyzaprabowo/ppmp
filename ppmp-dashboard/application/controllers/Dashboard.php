<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller{

  public function __construct()
	{
		parent::__construct();
	}

  public function index()
  {
    $this->M_base->_make_sure_is_login();
    
    $this->load->library('googlemaps');
    $config['center'] = "-2.6000285, 118.015776";
		$config['zoom'] = 5;
    $config['map_height'] = "300px";
    $this->googlemaps->initialize($config);
    $data['map'] = $this->googlemaps->create_map();
    $this->load->view('dashboard/v_dashboard', $data);
  }

}
