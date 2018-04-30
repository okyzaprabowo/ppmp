<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Content extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->M_base->_make_sure_is_login();
    
    $data['val_category']	= "";
    $data['arr_category'] = $this->M_crud->_get_data('*', 'bot_content_item', 'parent_id', '0', 'item', 'asc');
    $this->load->view('content/v_content', $data);
  }

  public function _get_topic()
  {

  }

}
