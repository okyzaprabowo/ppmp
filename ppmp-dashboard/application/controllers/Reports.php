<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reports extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->M_base->_make_sure_is_login();

    $idIntoleransi = "";
    $idHoax = "";
    $idKecurangan = "";
    $idKampanye = "";
    $idLain = "";

    $query = $this->M_crud->custom_query("SELECT id, item FROM bot_item WHERE category = 'REPORT' GROUP BY item");
    foreach ($query as $res){
        if(strtolower($res->item) == "intoleransi"){
          $idIntoleransi = $res->id;
        }
        else if(strtolower($res->item) == "hoax"){
          $idHoax = $res->id;
        }
        else if(strtolower($res->item) == "kecurangan pemilu"){
          $idKecurangan = $res->id;
        }
        else if(strtolower($res->item) == "kampanye negatif"){
          $idKampanye = $res->id;
        }
        else if(strtolower($res->item) == "lain-lain"){
          $idLain = $res->id;
        }
    }

    if($idIntoleransi <> ""){
      $qry1 = $this->M_crud->get_find_query("COUNT(id) as cnt FROM bot_user_item WHERE YEAR(created_at) = YEAR(CURDATE()) AND MONTH(created_at) = 1 AND item_id = ".$idIntoleransi."")->cnt;
      $qry2 = $this->M_crud->get_find_query("COUNT(id) as cnt FROM bot_user_item WHERE YEAR(created_at) = YEAR(CURDATE()) AND MONTH(created_at) = 2 AND item_id = ".$idIntoleransi."")->cnt;
      $qry3 = $this->M_crud->get_find_query("COUNT(id) as cnt FROM bot_user_item WHERE YEAR(created_at) = YEAR(CURDATE()) AND MONTH(created_at) = 3 AND item_id = ".$idIntoleransi."")->cnt;
      $qry4 = $this->M_crud->get_find_query("COUNT(id) as cnt FROM bot_user_item WHERE YEAR(created_at) = YEAR(CURDATE()) AND MONTH(created_at) = 4 AND item_id = ".$idIntoleransi."")->cnt;
      $qry5 = $this->M_crud->get_find_query("COUNT(id) as cnt FROM bot_user_item WHERE YEAR(created_at) = YEAR(CURDATE()) AND MONTH(created_at) = 5 AND item_id = ".$idIntoleransi."")->cnt;
      $qry6 = $this->M_crud->get_find_query("COUNT(id) as cnt FROM bot_user_item WHERE YEAR(created_at) = YEAR(CURDATE()) AND MONTH(created_at) = 6 AND item_id = ".$idIntoleransi."")->cnt;
      $qry7 = $this->M_crud->get_find_query("COUNT(id) as cnt FROM bot_user_item WHERE YEAR(created_at) = YEAR(CURDATE()) AND MONTH(created_at) = 7 AND item_id = ".$idIntoleransi."")->cnt;
      $qry8 = $this->M_crud->get_find_query("COUNT(id) as cnt FROM bot_user_item WHERE YEAR(created_at) = YEAR(CURDATE()) AND MONTH(created_at) = 8 AND item_id = ".$idIntoleransi."")->cnt;
      $qry9 = $this->M_crud->get_find_query("COUNT(id) as cnt FROM bot_user_item WHERE YEAR(created_at) = YEAR(CURDATE()) AND MONTH(created_at) = 9 AND item_id = ".$idIntoleransi."")->cnt;
      $qry10 = $this->M_crud->get_find_query("COUNT(id) as cnt FROM bot_user_item WHERE YEAR(created_at) = YEAR(CURDATE()) AND MONTH(created_at) = 10 AND item_id = ".$idIntoleransi."")->cnt;
      $qry11 = $this->M_crud->get_find_query("COUNT(id) as cnt FROM bot_user_item WHERE YEAR(created_at) = YEAR(CURDATE()) AND MONTH(created_at) = 11 AND item_id = ".$idIntoleransi."")->cnt;
      $qry12 = $this->M_crud->get_find_query("COUNT(id) as cnt FROM bot_user_item WHERE YEAR(created_at) = YEAR(CURDATE()) AND MONTH(created_at) = 12 AND item_id = ".$idIntoleransi."")->cnt;
      $data['intoleransi'] = ''.$qry1.','.$qry2.','.$qry3.','.$qry4.','.$qry5.','.$qry6.','.$qry7.','.$qry8.','.$qry9.','.$qry10.','.$qry11.','.$qry12.'';
    }else{
      $data['intoleransi'] = "[0,0,0,0,0,0,0,0,0,0,0,0]";
    }

    if($idHoax <> ""){
      $qry1 = $this->M_crud->get_find_query("COUNT(id) as cnt FROM bot_user_item WHERE YEAR(created_at) = YEAR(CURDATE()) AND MONTH(created_at) = 1 AND item_id = ".$idHoax."")->cnt;
      $qry2 = $this->M_crud->get_find_query("COUNT(id) as cnt FROM bot_user_item WHERE YEAR(created_at) = YEAR(CURDATE()) AND MONTH(created_at) = 2 AND item_id = ".$idHoax."")->cnt;
      $qry3 = $this->M_crud->get_find_query("COUNT(id) as cnt FROM bot_user_item WHERE YEAR(created_at) = YEAR(CURDATE()) AND MONTH(created_at) = 3 AND item_id = ".$idHoax."")->cnt;
      $qry4 = $this->M_crud->get_find_query("COUNT(id) as cnt FROM bot_user_item WHERE YEAR(created_at) = YEAR(CURDATE()) AND MONTH(created_at) = 4 AND item_id = ".$idHoax."")->cnt;
      $qry5 = $this->M_crud->get_find_query("COUNT(id) as cnt FROM bot_user_item WHERE YEAR(created_at) = YEAR(CURDATE()) AND MONTH(created_at) = 5 AND item_id = ".$idHoax."")->cnt;
      $qry6 = $this->M_crud->get_find_query("COUNT(id) as cnt FROM bot_user_item WHERE YEAR(created_at) = YEAR(CURDATE()) AND MONTH(created_at) = 6 AND item_id = ".$idHoax."")->cnt;
      $qry7 = $this->M_crud->get_find_query("COUNT(id) as cnt FROM bot_user_item WHERE YEAR(created_at) = YEAR(CURDATE()) AND MONTH(created_at) = 7 AND item_id = ".$idHoax."")->cnt;
      $qry8 = $this->M_crud->get_find_query("COUNT(id) as cnt FROM bot_user_item WHERE YEAR(created_at) = YEAR(CURDATE()) AND MONTH(created_at) = 8 AND item_id = ".$idHoax."")->cnt;
      $qry9 = $this->M_crud->get_find_query("COUNT(id) as cnt FROM bot_user_item WHERE YEAR(created_at) = YEAR(CURDATE()) AND MONTH(created_at) = 9 AND item_id = ".$idHoax."")->cnt;
      $qry10 = $this->M_crud->get_find_query("COUNT(id) as cnt FROM bot_user_item WHERE YEAR(created_at) = YEAR(CURDATE()) AND MONTH(created_at) = 10 AND item_id = ".$idHoax."")->cnt;
      $qry11 = $this->M_crud->get_find_query("COUNT(id) as cnt FROM bot_user_item WHERE YEAR(created_at) = YEAR(CURDATE()) AND MONTH(created_at) = 11 AND item_id = ".$idHoax."")->cnt;
      $qry12 = $this->M_crud->get_find_query("COUNT(id) as cnt FROM bot_user_item WHERE YEAR(created_at) = YEAR(CURDATE()) AND MONTH(created_at) = 12 AND item_id = ".$idHoax."")->cnt;
      $data['hoax'] = ''.$qry1.','.$qry2.','.$qry3.','.$qry4.','.$qry5.','.$qry6.','.$qry7.','.$qry8.','.$qry9.','.$qry10.','.$qry11.','.$qry12.'';
    }else{
      $data['hoax'] = "[0,0,0,0,0,0,0,0,0,0,0,0]";
    }

    if($idKecurangan <> ""){
      $qry1 = $this->M_crud->get_find_query("COUNT(id) as cnt FROM bot_user_item WHERE YEAR(created_at) = YEAR(CURDATE()) AND MONTH(created_at) = 1 AND item_id = ".$idKecurangan."")->cnt;
      $qry2 = $this->M_crud->get_find_query("COUNT(id) as cnt FROM bot_user_item WHERE YEAR(created_at) = YEAR(CURDATE()) AND MONTH(created_at) = 2 AND item_id = ".$idKecurangan."")->cnt;
      $qry3 = $this->M_crud->get_find_query("COUNT(id) as cnt FROM bot_user_item WHERE YEAR(created_at) = YEAR(CURDATE()) AND MONTH(created_at) = 3 AND item_id = ".$idKecurangan."")->cnt;
      $qry4 = $this->M_crud->get_find_query("COUNT(id) as cnt FROM bot_user_item WHERE YEAR(created_at) = YEAR(CURDATE()) AND MONTH(created_at) = 4 AND item_id = ".$idKecurangan."")->cnt;
      $qry5 = $this->M_crud->get_find_query("COUNT(id) as cnt FROM bot_user_item WHERE YEAR(created_at) = YEAR(CURDATE()) AND MONTH(created_at) = 5 AND item_id = ".$idKecurangan."")->cnt;
      $qry6 = $this->M_crud->get_find_query("COUNT(id) as cnt FROM bot_user_item WHERE YEAR(created_at) = YEAR(CURDATE()) AND MONTH(created_at) = 6 AND item_id = ".$idKecurangan."")->cnt;
      $qry7 = $this->M_crud->get_find_query("COUNT(id) as cnt FROM bot_user_item WHERE YEAR(created_at) = YEAR(CURDATE()) AND MONTH(created_at) = 7 AND item_id = ".$idKecurangan."")->cnt;
      $qry8 = $this->M_crud->get_find_query("COUNT(id) as cnt FROM bot_user_item WHERE YEAR(created_at) = YEAR(CURDATE()) AND MONTH(created_at) = 8 AND item_id = ".$idKecurangan."")->cnt;
      $qry9 = $this->M_crud->get_find_query("COUNT(id) as cnt FROM bot_user_item WHERE YEAR(created_at) = YEAR(CURDATE()) AND MONTH(created_at) = 9 AND item_id = ".$idKecurangan."")->cnt;
      $qry10 = $this->M_crud->get_find_query("COUNT(id) as cnt FROM bot_user_item WHERE YEAR(created_at) = YEAR(CURDATE()) AND MONTH(created_at) = 10 AND item_id = ".$idKecurangan."")->cnt;
      $qry11 = $this->M_crud->get_find_query("COUNT(id) as cnt FROM bot_user_item WHERE YEAR(created_at) = YEAR(CURDATE()) AND MONTH(created_at) = 11 AND item_id = ".$idKecurangan."")->cnt;
      $qry12 = $this->M_crud->get_find_query("COUNT(id) as cnt FROM bot_user_item WHERE YEAR(created_at) = YEAR(CURDATE()) AND MONTH(created_at) = 12 AND item_id = ".$idKecurangan."")->cnt;
      $data['kecurangan'] = ''.$qry1.','.$qry2.','.$qry3.','.$qry4.','.$qry5.','.$qry6.','.$qry7.','.$qry8.','.$qry9.','.$qry10.','.$qry11.','.$qry12.'';
    }else{
      $data['kecurangan'] = "[0,0,0,0,0,0,0,0,0,0,0,0]";
    }

    if($idKampanye <> ""){
      $qry1 = $this->M_crud->get_find_query("COUNT(id) as cnt FROM bot_user_item WHERE YEAR(created_at) = YEAR(CURDATE()) AND MONTH(created_at) = 1 AND item_id = ".$idKampanye."")->cnt;
      $qry2 = $this->M_crud->get_find_query("COUNT(id) as cnt FROM bot_user_item WHERE YEAR(created_at) = YEAR(CURDATE()) AND MONTH(created_at) = 2 AND item_id = ".$idKampanye."")->cnt;
      $qry3 = $this->M_crud->get_find_query("COUNT(id) as cnt FROM bot_user_item WHERE YEAR(created_at) = YEAR(CURDATE()) AND MONTH(created_at) = 3 AND item_id = ".$idKampanye."")->cnt;
      $qry4 = $this->M_crud->get_find_query("COUNT(id) as cnt FROM bot_user_item WHERE YEAR(created_at) = YEAR(CURDATE()) AND MONTH(created_at) = 4 AND item_id = ".$idKampanye."")->cnt;
      $qry5 = $this->M_crud->get_find_query("COUNT(id) as cnt FROM bot_user_item WHERE YEAR(created_at) = YEAR(CURDATE()) AND MONTH(created_at) = 5 AND item_id = ".$idKampanye."")->cnt;
      $qry6 = $this->M_crud->get_find_query("COUNT(id) as cnt FROM bot_user_item WHERE YEAR(created_at) = YEAR(CURDATE()) AND MONTH(created_at) = 6 AND item_id = ".$idKampanye."")->cnt;
      $qry7 = $this->M_crud->get_find_query("COUNT(id) as cnt FROM bot_user_item WHERE YEAR(created_at) = YEAR(CURDATE()) AND MONTH(created_at) = 7 AND item_id = ".$idKampanye."")->cnt;
      $qry8 = $this->M_crud->get_find_query("COUNT(id) as cnt FROM bot_user_item WHERE YEAR(created_at) = YEAR(CURDATE()) AND MONTH(created_at) = 8 AND item_id = ".$idKampanye."")->cnt;
      $qry9 = $this->M_crud->get_find_query("COUNT(id) as cnt FROM bot_user_item WHERE YEAR(created_at) = YEAR(CURDATE()) AND MONTH(created_at) = 9 AND item_id = ".$idKampanye."")->cnt;
      $qry10 = $this->M_crud->get_find_query("COUNT(id) as cnt FROM bot_user_item WHERE YEAR(created_at) = YEAR(CURDATE()) AND MONTH(created_at) = 10 AND item_id = ".$idKampanye."")->cnt;
      $qry11 = $this->M_crud->get_find_query("COUNT(id) as cnt FROM bot_user_item WHERE YEAR(created_at) = YEAR(CURDATE()) AND MONTH(created_at) = 11 AND item_id = ".$idKampanye."")->cnt;
      $qry12 = $this->M_crud->get_find_query("COUNT(id) as cnt FROM bot_user_item WHERE YEAR(created_at) = YEAR(CURDATE()) AND MONTH(created_at) = 12 AND item_id = ".$idKampanye."")->cnt;
      $data['kampanye'] = ''.$qry1.','.$qry2.','.$qry3.','.$qry4.','.$qry5.','.$qry6.','.$qry7.','.$qry8.','.$qry9.','.$qry10.','.$qry11.','.$qry12.'';
    }else{
      $data['kampanye'] = "[0,0,0,0,0,0,0,0,0,0,0,0]";
    }

    if($idLain <> ""){
      $qry1 = $this->M_crud->get_find_query("COUNT(id) as cnt FROM bot_user_item WHERE YEAR(created_at) = YEAR(CURDATE()) AND MONTH(created_at) = 1 AND item_id = ".$idLain."")->cnt;
      $qry2 = $this->M_crud->get_find_query("COUNT(id) as cnt FROM bot_user_item WHERE YEAR(created_at) = YEAR(CURDATE()) AND MONTH(created_at) = 2 AND item_id = ".$idLain."")->cnt;
      $qry3 = $this->M_crud->get_find_query("COUNT(id) as cnt FROM bot_user_item WHERE YEAR(created_at) = YEAR(CURDATE()) AND MONTH(created_at) = 3 AND item_id = ".$idLain."")->cnt;
      $qry4 = $this->M_crud->get_find_query("COUNT(id) as cnt FROM bot_user_item WHERE YEAR(created_at) = YEAR(CURDATE()) AND MONTH(created_at) = 4 AND item_id = ".$idLain."")->cnt;
      $qry5 = $this->M_crud->get_find_query("COUNT(id) as cnt FROM bot_user_item WHERE YEAR(created_at) = YEAR(CURDATE()) AND MONTH(created_at) = 5 AND item_id = ".$idLain."")->cnt;
      $qry6 = $this->M_crud->get_find_query("COUNT(id) as cnt FROM bot_user_item WHERE YEAR(created_at) = YEAR(CURDATE()) AND MONTH(created_at) = 6 AND item_id = ".$idLain."")->cnt;
      $qry7 = $this->M_crud->get_find_query("COUNT(id) as cnt FROM bot_user_item WHERE YEAR(created_at) = YEAR(CURDATE()) AND MONTH(created_at) = 7 AND item_id = ".$idLain."")->cnt;
      $qry8 = $this->M_crud->get_find_query("COUNT(id) as cnt FROM bot_user_item WHERE YEAR(created_at) = YEAR(CURDATE()) AND MONTH(created_at) = 8 AND item_id = ".$idLain."")->cnt;
      $qry9 = $this->M_crud->get_find_query("COUNT(id) as cnt FROM bot_user_item WHERE YEAR(created_at) = YEAR(CURDATE()) AND MONTH(created_at) = 9 AND item_id = ".$idLain."")->cnt;
      $qry10 = $this->M_crud->get_find_query("COUNT(id) as cnt FROM bot_user_item WHERE YEAR(created_at) = YEAR(CURDATE()) AND MONTH(created_at) = 10 AND item_id = ".$idLain."")->cnt;
      $qry11 = $this->M_crud->get_find_query("COUNT(id) as cnt FROM bot_user_item WHERE YEAR(created_at) = YEAR(CURDATE()) AND MONTH(created_at) = 11 AND item_id = ".$idLain."")->cnt;
      $qry12 = $this->M_crud->get_find_query("COUNT(id) as cnt FROM bot_user_item WHERE YEAR(created_at) = YEAR(CURDATE()) AND MONTH(created_at) = 12 AND item_id = ".$idLain."")->cnt;
      $data['lainnya'] = ''.$qry1.','.$qry2.','.$qry3.','.$qry4.','.$qry5.','.$qry6.','.$qry7.','.$qry8.','.$qry9.','.$qry10.','.$qry11.','.$qry12.'';
    }else{
      $data['lainnya'] = "[0,0,0,0,0,0,0,0,0,0,0,0]";
    }

    $data['reports'] = $this->M_crud->_get_data_join('a.id, a.created_at, b.displayName, c.item', 'bot_user_item as a', 'bot_user as b', 'a.user_id=b.userId', 'bot_item as c', 'a.item_id=c.id', NULL, NULL, NULL, NULL, 'a.created_at', 'desc');

    $this->load->view('reports/v_reports', $data);
  }

  public function detail_report($id)
  {
    $this->M_base->_make_sure_is_login();
    include_once './vendor/autoload.php';

    $query = $this->M_crud->_get_data_join('a.id, a.created_at, a.comment, a.image, b.displayName, c.item', 'bot_user_item as a', 'bot_user as b', 'a.user_id=b.userId', 'bot_item as c', 'a.item_id=c.id', 'a.id', $id);

    foreach ($query as $result){
      $data['tgl']		       = date('d F Y',strtotime($result->created_at));
      $data['nama']			     = $result->displayName;
      $data['item']			     = $result->item;
      $data['comment']			 = $result->comment;

      $httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient(config_item('channelAccessToken'));
      $bot = new \LINE\LINEBot($httpClient, ['channelSecret' => config_item('channelSecret')]);
      $response = $bot->getMessageContent($result->image);
      if ($response->isSucceeded()) {
         $imgsrc = base64_encode($response->getRawBody());
      } else {
         $imgsrc = "";
      }
      $data['imagecontent']	  = $imgsrc;
    }

    $this->load->view('reports/v_report_detail', $data);
  }

}
