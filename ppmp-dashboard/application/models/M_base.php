<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_base extends CI_Model{

  public function _make_sure_is_login()
	{
		$user_id = $this->_get_user_id();
		if(empty($user_id)){
			redirect('Login');
		}
	}

  function _get_user_id()
	{
		$CI= & get_instance();
		$user_id = "";
		if(isset($CI->session->userdata['ppmp']))
		{
			$user_id = $CI->session->userdata['ppmp']['ap_sid'];
		}

		return $user_id;
	}

}
