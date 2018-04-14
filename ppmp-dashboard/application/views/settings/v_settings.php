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
      <section class="dashboard-counts section-padding">
        <div class="container-fluid">
          <div class="row">
            <div class="card">
              <div class="card-header d-flex align-items-center">
                <h4>SETTING</h4>
              </div>
            </div>
          </div>
        </div>
      </section>
      <?php $this->load->view('templates/v_copyright'); ?>
    </div>
  </body>
  <?php $this->load->view('templates/v_footer'); ?>
</html>
