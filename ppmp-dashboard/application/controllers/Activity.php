<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Activity extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->M_base->_make_sure_is_login();

    $data['activity'] = $this->M_crud->_get_data_join("c.displayName, a.created_at, CONCAT_WS(' ', b.category, b.item) AS description", 'bot_user_item as a', 'bot_item as b', 'a.item_id = b.id', 'bot_user as c', 'a.user_id = c.userId', NULL, NULL, NULL, NULL, 'a.created_at', 'desc');

    $this->load->view('activity/v_activity', $data);
  }

}
