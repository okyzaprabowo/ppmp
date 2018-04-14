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
          <header>
            <h1 class="h3 display">Key Metrics</h1>
          </header>
          <div class="row">

            <!-- Count item widget-->
            <div class="col-xl-2 col-md-4 col-2">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="icon-user"></i></div>
                <div class="name"><strong class="text-uppercase">Unique Relawan</strong>
                  <div class="count-number">235K</div>
                </div>
              </div>
            </div>

            <div class="col-xl-2 col-md-4 col-2">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="icon-user"></i></div>
                <div class="name"><strong class="text-uppercase">Relawan &nbsp; Baru</strong>
                  <div class="count-number">1500</div>
                </div>
              </div>
            </div>

            <div class="col-xl-2 col-md-4 col-2">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="icon-user"></i></div>
                <div class="name"><strong class="text-uppercase">Jumlah Konten</strong>
                  <div class="count-number">1900</div>
                </div>
              </div>
            </div>

            <div class="col-xl-2 col-md-4 col-2">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="icon-user"></i></div>
                <div class="name"><strong class="text-uppercase">Sessions<br>&nbsp;</strong>
                  <div class="count-number">97.0K</div>
                </div>
              </div>
            </div>

            <div class="col-xl-2 col-md-4 col-2">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="icon-user"></i></div>
                <div class="name"><strong class="text-uppercase">Finished Mission</strong>
                  <div class="count-number">2,500</div>
                </div>
              </div>
            </div>

            <div class="col-xl-2 col-md-4 col-2">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="icon-user"></i></div>
                <div class="name"><strong class="text-uppercase">Reports<br>&nbsp;</strong>
                  <div class="count-number">4,000</div>
                </div>
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
