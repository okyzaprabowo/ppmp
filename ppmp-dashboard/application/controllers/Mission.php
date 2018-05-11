<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mission extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->M_base->_make_sure_is_login();

    $data['mission'] = $data['volunteer'] = $this->M_crud->_get_data('*', 'bot_mission_detail', NULL, NULL, NULL, NULL, 'created_at', 'desc');

    $this->load->view('mission/v_mission', $data);
  }

  public function add_mission()
  {
    $this->M_base->_make_sure_is_login();
    //$data['arr_domisili'] = $this->M_crud->custom_query("SELECT domicile FROM bot_reg WHERE domicile <> '' GROUP BY domicile");
    $this->load->view('mission/v_mission_add');
  }

  public function send_mission()
  {
    include_once './vendor/autoload.php';

    $now = new DateTime ( NULL, new DateTimeZone('Asia/Jakarta'));
    $jml_relawan = 0;
    $jml_relawan_terkirim = 0;
    $tgl = $now->format('Y-m-d H:i:s');
    $description = $this->input->post('mission_detail', TRUE);
    $domicile = '';
    $education = "";
    $activities = '';
    $field_activity = '';
    $special_ability = '';
    $community = '';
    $var_education = "";
    $var_activities = '';
    $var_field_activity = '';
    $var_special_ability = '';
    $var_community = '';
    $query = '';
    $user_id = '';
    $item_id = '';

    if(!empty($_POST['domicile'])){
      $domicile = $this->input->post('domicile', TRUE);
      $query = "domicile like '%".$domicile."%' and ";
    }

    if(!empty($_POST['selPendidikan'])){
      foreach($_POST['selPendidikan'] as $selected){
        $education = $education."'".$selected."', ";
        $var_education = $var_education.$selected.", ";
      }
      $education = rtrim($education,", ");
      $var_education = rtrim($var_education,", ");
      $query = $query." education in(".$education.") and ";
    }

    if(!empty($_POST['selKegiatan'])){
      foreach($_POST['selKegiatan'] as $selected){
        $activities = $activities."'".$selected."', ";
        $var_activities = $var_activities.$selected.", ";
      }
      $activities = rtrim($activities,", ");
      $var_activities = rtrim($var_activities,", ");
      $query = $query." job in(".$activities.") and ";
    }

    if(!empty($_POST['selBidangKegiatan'])){
      foreach($_POST['selBidangKegiatan'] as $selected){
        $field_activity = $field_activity."'".$selected."', ";
        $var_field_activity = $var_field_activity.$selected.", ";
      }
      $field_activity = rtrim($field_activity,", ");
      $var_field_activity = rtrim($var_field_activity,", ");
      $query = $query." activity in(".$field_activity.") and ";
    }

    if(!empty($_POST['selKemampuan'])){
      foreach($_POST['selKemampuan'] as $selected){
        $special_ability = $special_ability."'".$selected."', ";
        $var_special_ability = $var_special_ability.$selected.", ";
      }
      $special_ability = rtrim($special_ability,", ");
      $var_special_ability = rtrim($var_special_ability,", ");
      $query = $query." skill in(".$special_ability.") and ";
    }

    if(!empty($_POST['selKomunitas'])){
      foreach($_POST['selKomunitas'] as $selected){
        $community = $community."'".$selected."', ";
        $var_community = $var_community.$selected.", ";
      }
      $community = rtrim($community,", ");
      $var_community = rtrim($var_community,", ");
      $query = $query." community in(".$community.") and ";
    }
    
    if(!empty($query)){
      $query = rtrim($query," and ");
      $query = 'select * from bot_reg where '.$query;
    }else{
      $query = 'select * from bot_reg';
    }

    $query = $this->M_crud->custom_query($query);

    $item_id = $this->M_crud->get_find_query("id FROM bot_item WHERE category = 'MISSION'")->id;

    foreach ($query as $res)
    {
      $jml_relawan = $jml_relawan + 1;
      $user_id = $res->user_id;

      if($this->M_crud->check_table('bot_user_state', 'user_id', $user_id, 'category', 'REG', 'state', '0') != NULL)
      {
        if($this->M_crud->check_table('bot_user_state', 'user_id', $user_id, 'category', 'REPORT', 'state', '0') != NULL)
        {
          if($this->M_crud->check_table('bot_user_state', 'user_id', $user_id, 'category', 'MISSION', 'state', '0') != NULL)
          {
            if($this->M_crud->check_table('bot_user_state', 'user_id', $user_id, 'category', 'CONTENT', 'state', '0') != NULL)
            {
              if($this->M_crud->check_table('bot_user_state', 'user_id', $user_id, 'category', 'FOLLOW', 'state', '1') != NULL)
              {
                $httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient(config_item('channelAccessToken'));
                $bot = new \LINE\LINEBot($httpClient, ['channelSecret' => config_item('channelSecret')]);

                $textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder($description);
                $response = $bot->pushMessage($user_id, $textMessageBuilder);
                if ($response->getHTTPStatus() == 200)
                {
                  $jml_relawan_terkirim = $jml_relawan_terkirim + 1;
                  $data_user_item = array(
                      'user_id' => $user_id,
                      'item_id' => $item_id,
                      'comment' => $description,
                      'status' => 1,
                      'created_at' => $tgl,
                      'updated_at' => $tgl,
                  );
                  $this->M_crud->_insert('bot_user_item', $data_user_item);

                  $data_bot_user_state = array(
                      'state' => 1,
                      'updated_at' => $tgl,
                  );
                  $this->M_crud->_update('bot_user_state', $user_id, 'user_id', $data_bot_user_state, 'category', 'MISSION');
                }
              }
            }
          }
        }
      }
    }

    if($jml_relawan > 0){
      if($jml_relawan_terkirim > 0){
        $data_detail = array(
            'description' => $description,
            'volunteer' => $jml_relawan_terkirim,
            'domicile' => $domicile,
            'education' => $var_education,
            'activities' => $var_activities,
            'field_activity' => $var_field_activity,
            'special_ability' => $var_special_ability,
            'community' => $var_community,
            'created_at' => $tgl,
            'updated_at' => $tgl,
        );
        $insert = $this->M_crud->_insert('bot_mission_detail', $data_detail);

        $data['pesan'] = "<div class='alert alert-success alert-dismissible fade in' role='alert'>
                          <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <span aria-hidden='true'>×</span>
                          </button>
                          <strong>Sukses</strong>, misi berhasil di kirim.
                        </div>";
        $data['status'] = TRUE;
      }else{
        $data['pesan'] = "<div class='alert alert-warning alert-dismissible fade in' role='alert'>
                          <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <span aria-hidden='true'>×</span>
                          </button>
                          <strong>Gagal</strong>, misi tidak terkirim.
                        </div>";
        $data['status'] = FALSE;
      }
    }else{
      $data['pesan'] = "<div class='alert alert-warning alert-dismissible fade in' role='alert'>
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                          <span aria-hidden='true'>×</span>
                        </button>
                        <strong>Gagal</strong>, tidak ada relawan sesuai filter.
                      </div>";
      $data['status'] = FALSE;
    }

    echo json_encode($data);

  }

  public function detail_mission($id)
  {
    $this->M_base->_make_sure_is_login();

    $query = $this->M_crud->_get_data('*', 'bot_mission_detail', 'id', $id);

    foreach ($query as $result){
      $data['tgl']		          = date('d F Y',strtotime($result->created_at));
      $data['description']	    = $result->description;
      $data['volunteer']		    = $result->volunteer;
      $data['domicile']			    = $result->domicile;
      $data['education']		    = $result->education;
      $data['activities']		    = $result->activities;
      $data['field_activity']   = $result->field_activity;
      $data['special_ability']  = $result->special_ability;
      $data['community']			  = $result->community;
    }

    $this->load->view('mission/v_mission_detail', $data);
  }

}
