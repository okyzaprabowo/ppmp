<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
  <head>
    <?php $this->load->view('templates/v_header'); ?>
  </head>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="javascript.void(0);" class="site_title"><span>Simpul Relawan</span></a>
            </div>
            <div class="clearfix"></div>
            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?php echo base_url('assets/images/').$this->session->userdata['ppmp']['ap_image'];?>" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $this->session->userdata['ppmp']['ap_name'];?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->
            <br />
            <!-- sidebar menu -->
            <?php $this->load->view('templates/v_left_menu'); ?>
            <!-- sidebar menu -->
          </div>
        </div>

        <!-- top nav -->
        <?php $this->load->view('templates/v_top_menu'); ?>
        <!-- top nav -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                   <h2>Misi</h2>
                   <ul class="nav navbar-right panel_toolbox">
                     <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                   </ul>
                   <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <div id="notifikasi"></div>
                  <br />
                  <form class="form-horizontal form-label-left" action="#" id="frmAdd">
                  <!-- <form class="form-horizontal form-label-left" action="</?php echo base_url('Mission/send_mission'); ?>" id="frmAdd" method="post"> -->
                    <div class="form-group">
                      <label class="control-label col-md-2 col-sm-3 col-xs-12">Misi</label>
                      <div class="col-md-8 col-sm-9 col-xs-12">
                        <textarea class="form-control" rows="3" id="mission_detail" name="mission_detail" required></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-2 col-sm-3 col-xs-12">Domisili</label>
                      <div class="col-md-5 col-sm-9 col-xs-12">
                        <input type="text" class="form-control" id="domicile" name="domicile">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-2 col-sm-3 col-xs-12">Pendidikan</label>
                      <div class="col-md-5 col-sm-9 col-xs-12">
                         <select class="multiselect-ui form-control" multiple="multiple" id="selPendidikan" name="selPendidikan[]">
                           <option value="SD">SD</option>
                           <option value="SMP">SMP</option>
                           <option value="SMA">SMA</option>
                           <option value="S1">S1</option>
                           <option value="S2">S2</option>
                           <option value="S3">S3</option>
                           <option value="Tidak menempuh pendidikan">Tidak menempuh pendidikan</option>
                         </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-2 col-sm-3 col-xs-12">Kegiatan</label>
                      <div class="col-md-8 col-sm-9 col-xs-12">
                        <select class="multiselect-ui form-control" multiple="multiple" id="selKegiatan" name="selKegiatan[]">
                          <option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
                          <option value="Pegawai Negeri">Pegawai Negeri</option>
                          <option value="Pegawai Swasta">Pegawai Swasta</option>
                          <option value="Pegawai BUMN">Pegawai BUMN</option>
                          <option value="Wiraswasta">Wiraswasta</option>
                          <option value="Pensiunan">Pensiunan</option>
                          <option value="Pekerja Lepas (Freelance)">Pekerja Lepas (Freelance)</option>
                          <option value="TNI/POLRI">TNI/POLRI</option>
                          <option value="Mengurus Rumah Tangga">Mengurus Rumah Tangga</option>
                          <option value="Belum/Tidak Bekerja">Belum/Tidak Bekerja</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-2 col-sm-3 col-xs-12">Bidang Kegiatan</label>
                      <div class="col-md-8 col-sm-9 col-xs-12">
                        <select class="multiselect-ui form-control" multiple="multiple" id="selBidangKegiatan" name="selBidangKegiatan[]">
                          <option value="Pendidikan">Pendidikan</option>
                          <option value="Pertanian dan Perkebunan">Pertanian dan Perkebunan</option>
                          <option value="Peternakan">Peternakan</option>
                          <option value="Perikanan">Perikanan</option>
                          <option value="Kesehatan">Kesehatan</option>
                          <option value="Hukum">Hukum</option>
                          <option value="Manufaktur">Manufaktur</option>
                          <option value="Konstruksi">Konstruksi</option>
                          <option value="Consumer Goods">Consumer Goods</option>
                          <option value="Energi">Energi</option>
                          <option value="Media">Media</option>
                          <option value="Pertambangan">Pertambangan</option>
                          <option value="IT">IT</option>
                          <option value="Startup">Startup</option>
                          <option value="Keuangan">Keuangan</option>
                          <option value="Logistik">Logistik</option>
                          <option value="Transportasi">Transportasi</option>
                          <option value="Pemasaran">Pemasaran</option>
                          <option value="Properti">Properti</option>
                          <option value="Telekomunikasi">Telekomunikasi</option>
                          <option value="Seni">Seni</option>
                          <option value="Entertainment">Entertainment</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-2 col-sm-3 col-xs-12">Kemampuan Khusus</label>
                      <div class="col-md-8 col-sm-9 col-xs-12">
                        <select class="multiselect-ui form-control" multiple="multiple" id="selKemampuan" name="selKemampuan[]">
                          <option value="Menulis">Menulis</option>
                          <option value="Programming">Programming</option>
                          <option value="Fotografi">Fotografi</option>
                          <option value="Video">Video</option>
                          <option value="Desain Grafis">Desain Grafis</option>
                          <option value="Public Speaking">Public Speaking</option>
                          <option value="Event Organizer">Event Organizer</option>
                          <option value="Musisi">Musisi</option>
                          <option value="Engineering">Engineering</option>
                          <option value="Logistik / Distribusi">Logistik / Distribusi</option>
                          <option value="Pemasaran">Pemasaran</option>
                          <option value="Lainnya">Lainnya</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-2 col-sm-3 col-xs-12">Komunitas</label>
                      <div class="col-md-8 col-sm-9 col-xs-12">
                        <select class="multiselect-ui form-control" multiple="multiple" id="selKomunitas" name="selKomunitas[]">
                          <option value="Olahraga">Olahraga</option>
                          <option value="Kecantikan">Kecantikan</option>
                          <option value="Gaya Hidup">Gaya Hidup</option>
                          <option value="Seni">Seni</option>
                          <option value="Musik">Musik</option>
                          <option value="Budaya">Budaya</option>
                          <option value="Budaya Popular">Budaya Popular</option>
                          <option value="Film">Film</option>
                          <option value="Kuliner">Kuliner</option>
                          <option value="Travel">Travel</option>
                          <option value="Literatur">Literatur</option>
                          <option value="Teknologi">Teknologi</option>
                          <option value="Bisnis">Bisnis</option>
                          <option value="Kerja Sosial/Amal">Kerja Sosial/Amal</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-8 col-sm-9 col-xs-12 col-md-offset-2">
                          <button type="button" class="btn btn-primary" id="btnSimpan" onclick="sendmission()">Kirim Misi</button>
                          <!-- <button type="submit" class="btn btn-primary" id="btnSimpan">Kirim Misi</button> -->
                          <a href="<?php echo base_url('Mission'); ?>" class="btn btn-success">Kembali</a>
                          <a href="<?php echo base_url('Mission/add_mission'); ?>" class="btn btn-warning">Reset</a>
                        </div>
                      </div>
                  <form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- page content -->

        <!-- footer content -->
        <?php $this->load->view('templates/v_copyright'); ?>
        <!-- footer content -->
      </div>
    <?php $this->load->view('templates/v_footer'); ?>

    <script>
        $(document).ready(function(){
          $(document).ajaxStart(function () {
            if (dontBlock){
              $.blockUI();
            }
          }).ajaxStop($.unblockUI);

          $('.multiselect-ui').multiselect({
              includeSelectAllOption: true
          });

          $('#selDomisili').change(function(data){
            var id_paket = data.target.value;
            alert(id_paket);
          });

          //$('#notifikasi').delay(10000).fadeOut("slow");
        });

        function sendmission()
        {
          var mision = $('#mission_detail').val();

          if(mision == ''){
            alert('Silahkan isi dulu misi yang akan di kirim.');
            e.preventDefault();
          }else{
            dontBlock = true;
            $.ajax({
              url : "<?php echo site_url('Mission/send_mission')?>",
              type: "POST",
              data:$('#frmAdd').serialize(),
              dataType: "JSON",
              success: function(data)
              {
                if(data.status){
                  dontBlock = false;
                  document.getElementById("notifikasi").innerHTML = data.pesan;
                  $('#mission_detail').val('');
                  $('#domicile').val('');
                  $('#selPendidikan').val('');
                  $('#selKegiatan').val('');
                  $('#selBidangKegiatan').val('');
                  $('#selKemampuan').val('');
                  $('#selKomunitas').val('');
                }else{
                  dontBlock = false;
                  document.getElementById("notifikasi").innerHTML = data.pesan;
                }
                $(window).scrollTop(0);
              },
              error: function (jqXHR, textStatus, errorThrown)
              {
                dontBlock = false;
                var msg = "<div class='alert alert-warning alert-dismissible fade in' role='alert'>"+
                          "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>"+
                          "<span aria-hidden='true'>×</span>"+
                          "</button><strong>Kirim misi gagal !</strong>, silahkan coba lagi.</div>";
                document.getElementById("notifikasi").innerHTML = msg;
              }
            });
          }
        }
    </script>
  </body>
</html>
