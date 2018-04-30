<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->M_base->_make_sure_is_login();

    $id = $this->session->userdata['ppmp']['ap_sid'];
    $query = $this->M_crud->_find_data('bot_login', 'id', $id);
		foreach ($query as $result){
			$data['user_id']		    = $id;
			$data['username']		    = $result->username;
			$data['display_name']		= $result->display_name;
			$data['pass']		        = $result->password;
			$data['user_photo']		  = $result->images;
		}

		$this->load->view('settings/v_settings',$data);
  }

  function users_profile($id)
	{
    $this->M_base->_make_sure_is_login();

		$query = $this->M_crud->_find_data('bot_login', 'id', $id);
		foreach ($query as $result){
			$data['user_id']		    = $id;
			$data['username']		    = $result->username;
			$data['display_name']		= $result->display_name;
			$data['user_photo']		  = $result->images;
		}

		$this->load->view('settings/v_settings',$data);
	}

  public function update_profile()
  {
    $inpt_pswd = $this->input->post('pass');
		$getdata = $this->M_crud->_get_by_id('bot_login', 'id', $this->input->post('id'));
		$exs_username = $getdata->username;
    $exs_display_name = $getdata->display_name;
		$status_username = TRUE;
		$id = $this->input->post('id', TRUE);

    if($exs_username <> $this->input->post('username', TRUE)){
			if($this->M_crud->check_table('bot_login', 'username', $this->input->post('username', TRUE)) != NULL){
        if($exs_display_name == $this->input->post('display_name', TRUE)){
          $status_username = TRUE;
        }else{
          $status_username = FALSE;
        }
			}else{
				$status_username = TRUE;
			}
		}

    if (!empty($_FILES['user_photo']['name']))
    {
        if(!empty($inpt_pswd))
        {
            if($status_username == FALSE)
            {
                $data = "<div class='alert alert-warning alert-dismissible fade in' role='alert'>
                          <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <span aria-hidden='true'>×</span>
                          </button>
                          <strong>Gagal</strong>, Nama pengguna ini sudah ada.
                        </div>";
                $this->session->set_flashdata("username", $this->input->post('username', TRUE));
                $this->session->set_flashdata("display_name", $this->input->post('display_name', TRUE));
                $this->session->set_flashdata("user_photo", $this->input->post('user_photo', TRUE));
                $this->session->set_flashdata('notif',$data);
                redirect("Settings/users_profile/$id");
            }
            else
            {
                if($this->input->post('pass') == $this->input->post('confirm_password'))
                {
                    if (!is_dir('assets/images/')) {
                      mkdir('./assets/images/');
                    }

                    $ext = explode(".", $_FILES['user_photo']['name']) ;

        						$fileName = time();
        						$config['upload_path'] = './assets/images';
        						$config['file_name'] = url_title($fileName);
        						$config['allowed_types'] = '*';
        						$config['max_size'] = config_item('max_image_size');
        						$this->upload->initialize($config);

                    $pathfile = "./assets/images/".url_title($fileName).'.'.$ext[1];
        						if (file_exists($pathfile)){
        							unlink($pathfile);
        						}

                    if($this->upload->do_upload('user_photo') )
        						{
        							$data = array(
        									'username' => $this->input->post('username', TRUE),
        									'display_name' => $this->input->post('display_name', TRUE),
                          'password' => $this->hash($this->input->post('pass', TRUE)),
        									'images'  => url_title($fileName).'.'.$ext[1],
        							);

        							if(!$this->M_crud->_update('bot_login', $id, 'id', $data))
        							{
                        $data = "<div class='alert alert-success alert-dismissible fade in' role='alert'>
                                  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                    <span aria-hidden='true'>×</span>
                                  </button>
                                  <strong>Sukses</strong>, anda berhasil mengubah data pengguna.
                                </div>";
                        $this->session->set_flashdata("username", $this->input->post('username', TRUE));
                        $this->session->set_flashdata("display_name", $this->input->post('display_name', TRUE));
              					$this->session->set_flashdata("user_photo", $this->input->post('user_photo', TRUE));
              					$this->session->set_flashdata('notif',$data);
        								redirect("Settings/users_profile/$id");
        							}
        							else
        							{
                        $data = "<div class='alert alert-warning alert-dismissible fade in' role='alert'>
                                  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                    <span aria-hidden='true'>×</span>
                                  </button>
                                  <strong>Gagal</strong>, Data yang anda masukan tidak terubah.
                                </div>";
                        $this->session->set_flashdata("username", $this->input->post('username', TRUE));
                        $this->session->set_flashdata("display_name", $this->input->post('display_name', TRUE));
              					$this->session->set_flashdata("user_photo", $this->input->post('user_photo', TRUE));
              					$this->session->set_flashdata('notif',$data);
        								redirect("Settings/users_profile/$id");
        							}
        						}
        						else
        						{
                      $data = "<div class='alert alert-warning alert-dismissible fade in' role='alert'>
                                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                  <span aria-hidden='true'>×</span>
                                </button>
                                <strong>".$this->upload->display_errors()."</strong>
                              </div>";
                      $this->session->set_flashdata("username", $this->input->post('username', TRUE));
                      $this->session->set_flashdata("display_name", $this->input->post('display_name', TRUE));
            					$this->session->set_flashdata("user_photo", $this->input->post('user_photo', TRUE));
            					$this->session->set_flashdata('notif',$data);
        							redirect("Settings/users_profile/$id");
        						}
                }
                else
                {
                  $data = "<div class='alert alert-warning alert-dismissible fade in' role='alert'>
                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                              <span aria-hidden='true'>×</span>
                            </button>
                            <strong>Gagal</strong>, Kata kunci dan konfirmasi kata kunci harus sesuai.
                          </div>";
                  $this->session->set_flashdata("username", $this->input->post('username', TRUE));
                  $this->session->set_flashdata("display_name", $this->input->post('display_name', TRUE));
        					$this->session->set_flashdata("user_photo", $this->input->post('user_photo', TRUE));
        					$this->session->set_flashdata('notif',$data);
      						redirect("Settings/users_profile/$id");
                }
            }
        }
        else
        {
            if($status_username == FALSE)
            {
                $data = "<div class='alert alert-warning alert-dismissible fade in' role='alert'>
                          <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <span aria-hidden='true'>×</span>
                          </button>
                          <strong>Gagal</strong>, Nama pengguna ini sudah ada.
                        </div>";
                $this->session->set_flashdata("username", $this->input->post('username', TRUE));
                $this->session->set_flashdata("display_name", $this->input->post('display_name', TRUE));
                $this->session->set_flashdata("user_photo", $this->input->post('user_photo', TRUE));
                $this->session->set_flashdata('notif',$data);
                redirect("Settings/users_profile/$id");
            }
            else
            {
                if (!is_dir('assets/images/')) {
                  mkdir('./assets/images/');
                }

                $ext = explode(".", $_FILES['user_photo']['name']) ;

                $fileName = time();
                $config['upload_path'] = './assets/images';
                $config['file_name'] = url_title($fileName);
                $config['allowed_types'] = '*';
                $config['max_size'] = config_item('max_image_size');
                $this->upload->initialize($config);

                $pathfile = "./assets/images/".url_title($fileName).'.'.$ext[1];
                if (file_exists($pathfile)){
                  unlink($pathfile);
                }

                if($this->upload->do_upload('user_photo'))
                {
                    $data = array(
                        'images'  => url_title($fileName).'.'.$ext[1],
                    );

                    if(!$this->M_crud->_update('bot_login', $id, 'id', $data))
                    {
                        $data = "<div class='alert alert-success alert-dismissible fade in' role='alert'>
                                  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                    <span aria-hidden='true'>×</span>
                                  </button>
                                  <strong>Sukses</strong>, anda berhasil mengubah data pengguna.
                                </div>";
                        $this->session->set_flashdata("username", $this->input->post('username', TRUE));
                        $this->session->set_flashdata("display_name", $this->input->post('display_name', TRUE));
                        $this->session->set_flashdata("user_photo", $this->input->post('user_photo', TRUE));
                        $this->session->set_flashdata('notif',$data);
                        redirect("Settings/users_profile/$id");
                    }
                    else
                    {
                        $data = "<div class='alert alert-warning alert-dismissible fade in' role='alert'>
                                  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                    <span aria-hidden='true'>×</span>
                                  </button>
                                  <strong>Gagal</strong>, Data yang anda masukan tidak terubah.
                                </div>";
                        $this->session->set_flashdata("username", $this->input->post('username', TRUE));
                        $this->session->set_flashdata("display_name", $this->input->post('display_name', TRUE));
                        $this->session->set_flashdata("user_photo", $this->input->post('user_photo', TRUE));
                        $this->session->set_flashdata('notif',$data);
                        redirect("Settings/users_profile/$id");
                    }
                }
                else
                {
                    $data = "<div class='alert alert-warning alert-dismissible fade in' role='alert'>
                              <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                <span aria-hidden='true'>×</span>
                              </button>
                              <strong>".$this->upload->display_errors()."</strong>
                            </div>";
                    $this->session->set_flashdata("username", $this->input->post('username', TRUE));
                    $this->session->set_flashdata("display_name", $this->input->post('display_name', TRUE));
                    $this->session->set_flashdata("user_photo", $this->input->post('user_photo', TRUE));
                    $this->session->set_flashdata('notif',$data);
                    redirect("Settings/users_profile/$id");
                }
            }
        }
    }
    else
    {
      if(!empty($inpt_pswd))
			{
				if($status_username == FALSE){
          $data = "<div class='alert alert-warning alert-dismissible fade in' role='alert'>
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                      <span aria-hidden='true'>×</span>
                    </button>
                    <strong>Gagal</strong>, Nama pengguna ini sudah ada.
                  </div>";
					$this->session->set_flashdata("username", $this->input->post('username', TRUE));
          $this->session->set_flashdata("display_name", $this->input->post('display_name', TRUE));
					$this->session->set_flashdata("user_photo", $this->input->post('user_photo', TRUE));
					$this->session->set_flashdata('notif',$data);
					redirect("Settings/users_profile/$id");
				}else{
					if($this->input->post('pass') == $this->input->post('confirm_password'))
					{

						$data = array(
								'username' => $this->input->post('username', TRUE),
								'display_name' => $this->input->post('display_name', TRUE),
								'password' => $this->hash($this->input->post('pass', TRUE)),
						);

						if(!$this->M_crud->_update('bot_login', $id, 'id', $data))
						{
              $data = "<div class='alert alert-success alert-dismissible fade in' role='alert'>
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                          <span aria-hidden='true'>×</span>
                        </button>
                        <strong>Sukses</strong>, anda berhasil mengubah data pengguna.
                      </div>";
              $this->session->set_flashdata("username", $this->input->post('username', TRUE));
              $this->session->set_flashdata("display_name", $this->input->post('display_name', TRUE));
    					$this->session->set_flashdata("user_photo", $this->input->post('user_photo', TRUE));
    					$this->session->set_flashdata('notif',$data);
							redirect("Settings/users_profile/$id");
						}
						else
						{
              $data = "<div class='alert alert-warning alert-dismissible fade in' role='alert'>
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                          <span aria-hidden='true'>×</span>
                        </button>
                        <strong>Gagal</strong>, Data yang anda masukan tidak terubah.
                      </div>";
              $this->session->set_flashdata("username", $this->input->post('username', TRUE));
              $this->session->set_flashdata("display_name", $this->input->post('display_name', TRUE));
    					$this->session->set_flashdata("user_photo", $this->input->post('user_photo', TRUE));
    					$this->session->set_flashdata('notif',$data);
							redirect("Settings/users_profile/$id");
						}
					}else{
            $data = "<div class='alert alert-warning alert-dismissible fade in' role='alert'>
                      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>×</span>
                      </button>
                      <strong>Gagal</strong>, Kata kunci dan konfirmasi kata kunci harus sesuai.
                    </div>";
            $this->session->set_flashdata("username", $this->input->post('username', TRUE));
            $this->session->set_flashdata("display_name", $this->input->post('display_name', TRUE));
  					$this->session->set_flashdata("user_photo", $this->input->post('user_photo', TRUE));
  					$this->session->set_flashdata('notif',$data);
						redirect("Settings/users_profile/$id");
					}
				}
			}
			else
			{
				if($status_username == FALSE)
				{
          $data = "<div class='alert alert-warning alert-dismissible fade in' role='alert'>
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                      <span aria-hidden='true'>×</span>
                    </button>
                    <strong>Gagal</strong>, Nama pengguna ini sudah ada.
                  </div>";
          $this->session->set_flashdata("username", $this->input->post('username', TRUE));
          $this->session->set_flashdata("display_name", $this->input->post('display_name', TRUE));
					$this->session->set_flashdata("user_photo", $this->input->post('user_photo', TRUE));
					$this->session->set_flashdata('notif',$data);
					redirect("Settings/users_profile/$id");
				}
				else
				{
					$data = array(
							'username' => $this->input->post('username', TRUE),
							'display_name' => $this->input->post('display_name', TRUE),
					);

					if(!$this->M_crud->_update('bot_login', $id, 'id', $data))
					{
            $data = "<div class='alert alert-success alert-dismissible fade in' role='alert'>
                      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>×</span>
                      </button>
                      <strong>Sukses</strong>, anda berhasil mengubah data pengguna.
                    </div>";
            $this->session->set_flashdata("username", $this->input->post('username', TRUE));
            $this->session->set_flashdata("display_name", $this->input->post('display_name', TRUE));
  					$this->session->set_flashdata("user_photo", $this->input->post('user_photo', TRUE));
  					$this->session->set_flashdata('notif',$data);
						redirect("Settings/users_profile/$id");
					}
					else
					{
            $data = "<div class='alert alert-warning alert-dismissible fade in' role='alert'>
                      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>×</span>
                      </button>
                      <strong>Gagal</strong>, Data yang anda masukan tidak berubah.
                    </div>";
            $this->session->set_flashdata("username", $this->input->post('username', TRUE));
            $this->session->set_flashdata("display_name", $this->input->post('display_name', TRUE));
  					$this->session->set_flashdata("user_photo", $this->input->post('user_photo', TRUE));
  					$this->session->set_flashdata('notif',$data);
						redirect("Settings/users_profile/$id");
					}
				}
			}
    }
  }

  function hash($string){
		return hash('sha512', $string . config_item('encryption_key'));
	}

}
