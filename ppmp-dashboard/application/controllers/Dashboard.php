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
    // Key Mertric
    $data['volunteer_total'] = count($this->M_crud->_get_data('*','bot_reg'));
    $data['volunteer_reports'] = count($this->M_crud->_get_data('*','bot_user_item'));
    $data['volunteer_today'] = count($this->M_crud->custom_query('select * from bot_reg where created_at LIKE \'%'.date("Y-m-d").'%\''));
    $data['activity'] = count($this->M_crud->_get_data_join("c.displayName, a.created_at, CONCAT_WS(' ', b.category, b.item) AS description", 'bot_user_item as a', 'bot_item as b', 'a.item_id = b.id', 'bot_user as c', 'a.user_id = c.userId', NULL, NULL, NULL, NULL, 'a.created_at', 'desc'));
    $data['volunteer_mission'] = count($this->M_crud->_get_data('*', 'bot_mission_detail', NULL, NULL, NULL, NULL, 'created_at', 'desc'));

    $this->load->library('googlemaps');
    $config['center'] = "-2.6000285, 118.015776";
		$config['zoom'] = 5;
    $config['map_height'] = "300px";
    $this->googlemaps->initialize($config);
    $data['map'] = $this->googlemaps->create_map();
    $this->load->view('dashboard/v_dashboard', $data);
  }

}
