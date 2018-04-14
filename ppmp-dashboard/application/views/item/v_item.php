<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
  <head>
    <?php $this->load->view('templates/v_header'); ?>
  </head>
  <body>
    <?php $this->load->view('templates/v_left_menu'); ?>
    <div class="page">
      <?php $this->load->view('templates/v_top_menu'); ?>
      <?php $this->load->view('templates/v_copyright'); ?>
    </div>
  </body>
  <?php $this->load->view('templates/v_footer'); ?>
</html>
