<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Volunteer extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $data['volunteer'] = $this->M_crud->_get_data('*', 'bot_reg');
    $data['whatsapp'] = 0;
    $data['line'] = $this->M_crud->get_find_query("count(id) as cnt from bot_reg")->cnt;
    $data['instagram'] = $this->M_crud->get_find_query("count(id) as cnt from bot_reg where instagram <> ''")->cnt;
    $data['twitter'] = $this->M_crud->get_find_query("count(id) as cnt from bot_reg where twitter <> ''")->cnt;
    $data['telegram'] = 0;
    $data['location'] = $this->M_crud->custom_query("SELECT domicile, count(*) AS cnt FROM bot_reg WHERE domicile <> '' GROUP BY domicile ORDER BY count(*) DESC LIMIT 5");

    $data['lelaki1'] = $this->M_crud->get_find_query("count(id) as cnt FROM bot_reg WHERE (YEAR(CURDATE()) - YEAR(ttl)) > 17 AND (YEAR(CURDATE()) - YEAR(ttl)) < 25 AND gender = 'L'")->cnt;
    $data['lelaki2'] = $this->M_crud->get_find_query("count(id) as cnt FROM bot_reg WHERE (YEAR(CURDATE()) - YEAR(ttl)) > 24 AND (YEAR(CURDATE()) - YEAR(ttl)) < 35 AND gender = 'L'")->cnt;
    $data['lelaki3'] = $this->M_crud->get_find_query("count(id) as cnt FROM bot_reg WHERE (YEAR(CURDATE()) - YEAR(ttl)) > 34 AND (YEAR(CURDATE()) - YEAR(ttl)) < 45 AND gender = 'L'")->cnt;
    $data['lelaki4'] = $this->M_crud->get_find_query("count(id) as cnt FROM bot_reg WHERE (YEAR(CURDATE()) - YEAR(ttl)) > 44 AND (YEAR(CURDATE()) - YEAR(ttl)) < 55 AND gender = 'L'")->cnt;
    $data['lelaki5'] = $this->M_crud->get_find_query("count(id) as cnt FROM bot_reg WHERE (YEAR(CURDATE()) - YEAR(ttl)) > 54 AND (YEAR(CURDATE()) - YEAR(ttl)) < 65 AND gender = 'L'")->cnt;
    $data['lelaki6'] = $this->M_crud->get_find_query("count(id) as cnt FROM bot_reg WHERE (YEAR(CURDATE()) - YEAR(ttl)) > 64 AND gender = 'L'")->cnt;

    $data['perempuan1'] = $this->M_crud->get_find_query("count(id) as cnt FROM bot_reg WHERE (YEAR(CURDATE()) - YEAR(ttl)) > 17 AND (YEAR(CURDATE()) - YEAR(ttl)) < 25 AND gender = 'P'")->cnt;
    $data['perempuan2'] = $this->M_crud->get_find_query("count(id) as cnt FROM bot_reg WHERE (YEAR(CURDATE()) - YEAR(ttl)) > 24 AND (YEAR(CURDATE()) - YEAR(ttl)) < 35 AND gender = 'P'")->cnt;
    $data['perempuan3'] = $this->M_crud->get_find_query("count(id) as cnt FROM bot_reg WHERE (YEAR(CURDATE()) - YEAR(ttl)) > 34 AND (YEAR(CURDATE()) - YEAR(ttl)) < 45 AND gender = 'P'")->cnt;
    $data['perempuan4'] = $this->M_crud->get_find_query("count(id) as cnt FROM bot_reg WHERE (YEAR(CURDATE()) - YEAR(ttl)) > 44 AND (YEAR(CURDATE()) - YEAR(ttl)) < 55 AND gender = 'P'")->cnt;
    $data['perempuan5'] = $this->M_crud->get_find_query("count(id) as cnt FROM bot_reg WHERE (YEAR(CURDATE()) - YEAR(ttl)) > 54 AND (YEAR(CURDATE()) - YEAR(ttl)) < 65 AND gender = 'P'")->cnt;
    $data['perempuan6'] = $this->M_crud->get_find_query("count(id) as cnt FROM bot_reg WHERE (YEAR(CURDATE()) - YEAR(ttl)) > 64 AND gender = 'P'")->cnt;

    $this->load->view('volunteer/v_volunteer', $data);
  }

  public function detail_volunteer($id)
  {
    $query = $this->M_crud->_get_data('*', 'bot_reg','user_id',$id);
		foreach ($query as $result){
			$data['name']			     = $result->name;
			$data['ttl']		       = date('d F Y',strtotime($result->ttl));
      if($result->gender == 'L'){
        $data['gender'] = "Laki-Laki";
      }else{
        $data['gender'] = "Perempuan";
      }
			$data['address']			 = $result->address;
		  //$data['domisili']			 = $this->_getAddress($result->latitude,$result->longitude);
      $data['domisili']			 = $result->domicile;
      $data['instansi']			 = $result->instance;
		  $data['education']		 = $result->education;
		  $data['job']			     = $result->job;
		  $data['activity']			 = $result->activity;
		  $data['act_detail']		 = $result->act_detail;
		  $data['twitter']		   = $result->twitter;
		  $data['instagram']		 = $result->instagram;
		  $data['blog']		       = $result->blog;
		  $data['skill']		     = $result->skill;
		  $data['community']		 = $result->community;
		  $data['comm_name']		 = $result->comm_name;
		  $data['hope']		       = $result->hope;
		}
    $this->load->view('volunteer/v_detail_volunteer', $data);
  }

  public function getPendidikan()
  {
    $query = $this->M_crud->custom_query("select count(user_id) as cnt, education from bot_reg group by education");
    $data['SD'] = 0;
    $data['SMP'] = 0;
    $data['SMA'] = 0;
    $data['S1'] = 0;
    $data['S2'] = 0;
    $data['S3'] = 0;
    $data['TIDAK'] = 0;

    foreach ($query as $res) {
      if(strtoupper($res->education) == "SD"){
        $data['SD']    = $res->cnt;
      }
      else if(strtoupper($res->education) == "SMP"){
        $data['SMP']   = $res->cnt;
      }
      else if(strtoupper($res->education) == "SMA"){
        $data['SMA']   = $res->cnt;
      }
      else if(strtoupper($res->education) == "S1"){
        $data['S1']    = $res->cnt;
      }
      else if(strtoupper($res->education) == "S2"){
        $data['S2']    = $res->cnt;
      }
      else if(strtoupper($res->education) == "S3"){
        $data['S3']    = $res->cnt;
      }
      else if(strtoupper($res->education) == "TIDAK MENEMPUH PENDIDIKAN"){
        $data['TIDAK'] = $res->cnt;
      }
		}

    echo json_encode($data);
  }

  public function getKomunitas()
  {
    $query = $this->M_crud->custom_query("select count(id) as cnt, community from bot_reg group by community");
    $data['olahraga'] = 0;
    $data['kecantikan'] = 0;
    $data['gaya'] = 0;
    $data['seni'] = 0;
    $data['musik'] = 0;
    $data['budaya'] = 0;
    $data['popular'] = 0;
    $data['film'] = 0;
    $data['kuliner'] = 0;
    $data['travel'] = 0;
    $data['literatur'] = 0;
    $data['teknologi'] = 0;
    $data['bisnis'] = 0;
    $data['amal'] = 0;

    foreach ($query as $res) {
      if(strtolower($res->community) == "olahraga"){
        $data['olahraga']    = $res->cnt;
      }
      else if(strtolower($res->community) == "kecantikan"){
        $data['kecantikan']   = $res->cnt;
      }
      else if(strtolower($res->community) == "gaya hidup"){
        $data['gaya']   = $res->cnt;
      }
      else if(strtolower($res->community) == "seni"){
        $data['seni']    = $res->cnt;
      }
      else if(strtolower($res->community) == "musik"){
        $data['musik']    = $res->cnt;
      }
      else if(strtolower($res->community) == "budaya"){
        $data['budaya']    = $res->cnt;
      }
      else if(strtolower($res->community) == "budaya popular"){
        $data['popular']    = $res->cnt;
      }
      else if(strtolower($res->community) == "film"){
        $data['film']    = $res->cnt;
      }
      else if(strtolower($res->community) == "kuliner"){
        $data['kuliner']    = $res->cnt;
      }
      else if(strtolower($res->community) == "travel"){
        $data['travel']    = $res->cnt;
      }
      else if(strtolower($res->community) == "literatur"){
        $data['literatur']    = $res->cnt;
      }
      else if(strtolower($res->community) == "teknologi"){
        $data['teknologi']    = $res->cnt;
      }
      else if(strtolower($res->community) == "bisnis"){
        $data['bisnis']    = $res->cnt;
      }
      else if(strtolower($res->community) == "kerja sosial/amal"){
        $data['amal']    = $res->cnt;
      }
		}
    echo json_encode($data);
  }

  public function getKemampuan()
  {
    $query = $this->M_crud->custom_query("select count(id) as cnt, skill from bot_reg group by skill");
    $data['menulis'] = 0;
    $data['programming'] = 0;
    $data['fotografi'] = 0;
    $data['video'] = 0;
    $data['desain'] = 0;
    $data['public'] = 0;
    $data['event'] = 0;
    $data['musisi'] = 0;
    $data['engineering'] = 0;
    $data['logistik'] = 0;
    $data['pemasaran'] = 0;
    $data['lainnya'] = 0;

    foreach ($query as $res) {
      if(strtolower($res->skill) == "menulis"){
        $data['menulis']    = $res->cnt;
      }
      else if(strtolower($res->skill) == "programming"){
        $data['programming']   = $res->cnt;
      }
      else if(strtolower($res->skill) == "fotografi"){
        $data['fotografi']   = $res->cnt;
      }
      else if(strtolower($res->skill) == "video"){
        $data['video']    = $res->cnt;
      }
      else if(strtolower($res->skill) == "desain grafis"){
        $data['desain']    = $res->cnt;
      }
      else if(strtolower($res->skill) == "public speaking"){
        $data['public']    = $res->cnt;
      }
      else if(strtolower($res->skill) == "event organizer"){
        $data['event']    = $res->cnt;
      }
      else if(strtolower($res->skill) == "musisi"){
        $data['musisi']    = $res->cnt;
      }
      else if(strtolower($res->skill) == "engineering"){
        $data['engineering']    = $res->cnt;
      }
      else if(strtolower($res->skill) == "logistik / distribusi"){
        $data['logistik']    = $res->cnt;
      }
      else if(strtolower($res->skill) == "pemasaran"){
        $data['pemasaran']    = $res->cnt;
      }
      else if(strtolower($res->skill) == "lainnya"){
        $data['lainnya']    = $res->cnt;
      }
		}
    echo json_encode($data);
  }

  public function getKegiatan()
  {
    $query = $this->M_crud->custom_query("select count(id) as cnt, job from bot_reg group by job");
    $data['pelajar'] = 0;
    $data['pns'] = 0;
    $data['swasta'] = 0;
    $data['bumn'] = 0;
    $data['wiraswasta'] = 0;
    $data['pensiunan'] = 0;
    $data['freelance'] = 0;
    $data['tni'] = 0;
    $data['irt'] = 0;
    $data['tidak'] = 0;

    foreach ($query as $res) {
      if(strtolower($res->job) == "pelajar/mahasiswa"){
        $data['pelajar']    = $res->cnt;
      }
      else if(strtolower($res->job) == "pegawai negeri"){
        $data['pns']   = $res->cnt;
      }
      else if(strtolower($res->job) == "pegawai swasta"){
        $data['swasta']   = $res->cnt;
      }
      else if(strtolower($res->job) == "Pegawai bumn"){
        $data['bumn']    = $res->cnt;
      }
      else if(strtolower($res->job) == "wiraswasta"){
        $data['wiraswasta']    = $res->cnt;
      }
      else if(strtolower($res->job) == "pensiunan"){
        $data['pensiunan']    = $res->cnt;
      }
      else if(strtolower($res->job) == "pekerja lepas (freelance)"){
        $data['freelance']    = $res->cnt;
      }
      else if(strtolower($res->job) == "tni/polri"){
        $data['tni']    = $res->cnt;
      }
      else if(strtolower($res->job) == "mengurus rumah tangga"){
        $data['irt']    = $res->cnt;
      }
      else if(strtolower($res->job) == "belum/tidak bekerja"){
        $data['tidak']    = $res->cnt;
      }
		}
    echo json_encode($data);
  }

  public function getBidang()
  {
    $query = $this->M_crud->custom_query("select count(id) as cnt, activity from bot_reg group by activity");
    $data['pendidikan'] = 0;
    $data['pertanian'] = 0;
    $data['peternakan'] = 0;
    $data['perikanan'] = 0;
    $data['kesehatan'] = 0;
    $data['hukum'] = 0;
    $data['manufaktur'] = 0;
    $data['konstruksi'] = 0;
    $data['consumer'] = 0;
    $data['energi'] = 0;
    $data['media'] = 0;
    $data['pertambangan'] = 0;
    $data['politik'] = 0;
    $data['it'] = 0;
    $data['startup'] = 0;
    $data['keuangan'] = 0;
    $data['pariwisata'] = 0;
    $data['logistik'] = 0;
    $data['transportasi'] = 0;
    $data['pemasaran'] = 0;
    $data['properti'] = 0;
    $data['telekomunikasi'] = 0;
    $data['seni'] = 0;
    $data['entertainment'] = 0;

    foreach ($query as $res) {
      if(strtolower($res->activity) == "pendidikan"){
        $data['pendidikan']    = $res->cnt;
      }
      else if(strtolower($res->activity) == "pertanian dan perkebunan"){
        $data['pertanian']   = $res->cnt;
      }
      else if(strtolower($res->activity) == "peternakan"){
        $data['peternakan']   = $res->cnt;
      }
      else if(strtolower($res->activity) == "perikanan"){
        $data['perikanan']    = $res->cnt;
      }
      else if(strtolower($res->activity) == "kesehatan"){
        $data['kesehatan']    = $res->cnt;
      }
      else if(strtolower($res->activity) == "hukum"){
        $data['hukum']    = $res->cnt;
      }
      else if(strtolower($res->activity) == "manufaktur"){
        $data['manufaktur']    = $res->cnt;
      }
      else if(strtolower($res->activity) == "konstruksi"){
        $data['konstruksi']    = $res->cnt;
      }
      else if(strtolower($res->activity) == "consumer goods"){
        $data['consumer']    = $res->cnt;
      }
      else if(strtolower($res->activity) == "energi"){
        $data['energi']    = $res->cnt;
      }
      else if(strtolower($res->activity) == "media"){
        $data['media']    = $res->cnt;
      }
      else if(strtolower($res->activity) == "pertambangan"){
        $data['pertambangan']    = $res->cnt;
      }
      else if(strtolower($res->activity) == "politik"){
        $data['politik']    = $res->cnt;
      }
      else if(strtolower($res->activity) == "it"){
        $data['it']    = $res->cnt;
      }
      else if(strtolower($res->activity) == "startup"){
        $data['startup']    = $res->cnt;
      }
      else if(strtolower($res->activity) == "keuangan"){
        $data['keuangan']    = $res->cnt;
      }
      else if(strtolower($res->activity) == "pariwisata"){
        $data['pariwisata']    = $res->cnt;
      }
      else if(strtolower($res->activity) == "logistik"){
        $data['logistik']    = $res->cnt;
      }
      else if(strtolower($res->activity) == "transportasi"){
        $data['transportasi']    = $res->cnt;
      }
      else if(strtolower($res->activity) == "pemasaran"){
        $data['pemasaran']    = $res->cnt;
      }
      else if(strtolower($res->activity) == "properti"){
        $data['properti']    = $res->cnt;
      }
      else if(strtolower($res->activity) == "telekomunikasi"){
        $data['telekomunikasi']    = $res->cnt;
      }
      else if(strtolower($res->activity) == "seni"){
        $data['seni']    = $res->cnt;
      }
      else if(strtolower($res->activity) == "entertainment"){
        $data['entertainment']    = $res->cnt;
      }
		}
    echo json_encode($data);
  }

  function _getAddress($latitude,$longitude)
  {
    if(!empty($latitude) && !empty($longitude)){
        $geocodeFromLatLong = file_get_contents('http://maps.googleapis.com/maps/api/geocode/json?latlng='.trim($latitude).','.trim($longitude).'&sensor=false');
        $output = json_decode($geocodeFromLatLong);
        $status = $output->status;
        $address = ($status=="OK")?$output->results[1]->formatted_address:'';
        if(!empty($address)){
            return $address;
        }else{
            return false;
        }
    }else{
        return false;
    }
  }

}
