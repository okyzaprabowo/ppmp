<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model{

  function __construct(){
		parent::__construct();
	}

  function authenticate($username, $password) {
		$this->db->select("id,display_name,images");
		$result = $this->db->get_where('bot_login', array('username' => $username, 'password' => $this->hash($password), 'status' => 'AKTIF'));
		if ($result->num_rows() == 1) {
			$user_info = $result->row();
			return $result->result();
		}else{
			return FALSE;
		}
	}

  function hash($string){
		return hash('sha512', $string . config_item('encryption_key'));
	}

}
