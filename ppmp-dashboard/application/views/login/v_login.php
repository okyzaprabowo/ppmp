<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge" >
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link  rel="shortcut icon" type="image/x-icon" href="<?php echo config_item('owner_icon'); ?>" />
  <title><?php echo config_item('web_title'); ?></title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url('assets/vendors/bootstrap/dist/css/bootstrap.min.css');?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/vendors/font-awesome/css/font-awesome.min.css');?>">
  <!-- NProgress -->
  <link rel="stylesheet" href="<?php echo base_url('assets/vendors/nprogress/nprogress.css');?>">
  <!-- Animate.css -->
  <link rel="stylesheet" href="<?php echo base_url('assets/vendors/animate.css/animate.min.css');?>">
  <!-- Custom Theme Style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/custom.min.css');?>">
</head>
<body class="login">
  <div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>
    <div class="login_wrapper">
      <div class="animate form login_form">
        <section class="login_content">
          <form>
              <h1>Login</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="#">Log in</a>
                <a class="reset_pass" href="#">Forgot password?</a>
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
</body>
</html>
