<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
  <?php $this->load->view('templates/v_header'); ?>
</head>
<body class="login">
  <div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>
    <div class="login_wrapper">
      <div class="animate form login_form">
        <section class="login_content">
          <?php
            if(!empty($this->session->flashdata('notif'))){
              echo $this->session->flashdata('notif');
            }
          ?>
          <form action="<?php site_url('Login');?>" method="post">
              <h1>PPMP</h1>
              <div>
                <input type="text" class="form-control" placeholder="Nama Pengguna" required="" name="username" id="username"/>
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Kata Kunci" required="" name="password" id="password"/>
              </div>
              <div>
                <button type="submit" class="btn btn-default submit">Masuk</button>
                <!-- <a class="reset_pass" href="#">Forgot password?</a> -->
              </div>

              <div class="clearfix"></div>

              <div class="separator">

                <div class="clearfix"></div>
                <br />

                <div>
                  <p><?php echo config_item('web_footer'); ?></p>
                </div>
              </div>
            </form>
        </section>
      </div>
    </div>
  </div>
  <?php $this->load->view('templates/v_footer'); ?>
</body>
<script type="text/javascript">
$(document).ready(function() {
    $('#notif').delay(10000).fadeOut("slow");
});
</script>
</html>
