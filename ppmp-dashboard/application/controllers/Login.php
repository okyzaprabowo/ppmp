<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    if($_POST){
			$username    = $this->input->post('username', TRUE);
			$password 	 = $this->input->post('password', TRUE);

			$result = $this->M_login->authenticate($username, $password);
			if ($result == FALSE){
				$this->session->set_flashdata("notif",
        "<div class='alert alert-danger alert-dismissible fade in' role='alert'>
          <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>×</span>
          </button>
          <strong>Login Gagal !.</strong> Cek nama pengguna dan kata sandi anda.
        </div>");
			}
			else
			{
				$session_data = array(
						'ap_sid' 			     => $result[0]->id,
						'ap_name' 		     => $result[0]->display_name,
						'ap_image'			   => $result[0]->images,
						'ap_status_login'	 => 'Ok',
				);

				$this->session->set_userdata('ppmp', $session_data);

				redirect('Dashboard');
			}
		}

    $this->load->view('login/v_login');
  }

  public function logout()
  {
		$this->session->unset_userdata('ppmp');
		$this->session->sess_destroy();
		redirect("Login");
  }

  function hash($string){
		return hash('sha512', $string . config_item('encryption_key'));
	}

}
