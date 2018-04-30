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
              <div class="x_panel tile">
                <div class="dashboard_graph">
                  <div class="row x_title">
                     <h2>Pengaturan Pengguna</h2>
                     <ul class="nav navbar-right panel_toolbox">
                       <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                     </ul>
                     <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <?php
                      if(!empty($this->session->flashdata('notif'))){
                        echo $this->session->flashdata('notif');
                      }
                    ?>
                    <form data-parsley-validate class="form-horizontal form-label-left" method="post" action="<?php echo base_url('Settings/update_profile'); ?>" enctype="multipart/form-data">
                      <input type="hidden" name="id" value="<?= $user_id ?>">
                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="registrasi">Nama Pengguna<span class="required">*</span>
                        </label>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                          <input type="text" name="username" id="username" required="required" value="<?php echo (isset($username) ? $username : ''); ?>" class="form-control col-md-7 col-xs-12" placeholder="Masukan Nama Pengguna">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="registrasi">Nama Lengkap<span class="required">*</span>
                        </label>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                          <input type="text" name="display_name" id="display_name" required="required" value="<?php echo (isset($display_name) ? $display_name : ''); ?>" class="form-control col-md-7 col-xs-12" placeholder="Masukan Nama Lengkap">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="report">Kata Kunci<span class="required">*</span>
                        </label>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                          <input type="password" name="pass" id="pass" required="required" value="" class="form-control col-md-7 col-xs-12" placeholder="Masukan Kata Kunci" onblur="cekpassword()">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="report">Konfirmasi Kata Kunci<span class="required">*</span>
                        </label>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                          <input type="password" name="confirm_password" id="confirm_password" required="required" value="" class="form-control col-md-7 col-xs-12" placeholder="Masukan Konfirmasi Kata Kunci">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="report">Photo<span class="required">*</span>
                        </label>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                          <div class="input-group">
    												<input type="file" name="user_photo" accept="image/*" class="form-control" id="image-source" onchange="previewImage();">
    									 			<br />
    												<img width="150px" height="150px" id="image-preview" alt="image preview" src="<?php echo base_url().'assets/images/'.$user_photo; ?>"/>
    											</div>
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-2">
                          <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                      </div>
                    </form>
                  </div>
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
  </body>
  <script type="text/javascript">
  $(document).ready(function() {
      $('#notif').delay(10000).fadeOut("slow");
  });

  function cekpassword()
  {
    var pswd = $('#pass').val();
    if(pswd != ""){
    	$("#confirm_password").attr('required', '');
    }else{
      $("#pass").removeAttr('required');
    	$("#confirm_password").removeAttr('required');
    }
  }

  function previewImage()
  {
	   document.getElementById("image-preview").style.display = "block";
	   var oFReader = new FileReader();
				oFReader.readAsDataURL(document.getElementById("image-source").files[0]);
			  oFReader.onload = function(oFREvent) {
				document.getElementById("image-preview").src = oFREvent.target.result;
		};
	};
  </script>
</html>
