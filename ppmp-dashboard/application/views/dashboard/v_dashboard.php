<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
  <?php $this->load->view('templates/v_header'); ?>
  <?php echo $map['js']; ?>
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
                <img src="<?php echo base_url('assets/images/avatar-1.jpg');?>" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>User</h2>
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
                  <h2>Key Metrics</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </ul>
                  <div class="clearfix"></div>
               </div>
               <div class="x_content">
                 <div class="row tile_count">
                   <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                     <span class="count_top"><i class="fa fa-user"></i> Unique Volunteers</span>
                     <div class="count">235K</div>
                   </div>
                   <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                     <span class="count_top"><i class="fa fa-male"></i> New Volunteers</span>
                     <div class="count">1500</div>
                   </div>
                   <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                     <span class="count_top"><i class="fa fa-newspaper-o"></i> Content Amount</span>
                     <div class="count">1900</div>
                   </div>
                   <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                     <span class="count_top"><i class="fa fa-flag-o"></i> Sessions</span>
                     <div class="count">97.0K</div>
                   </div>
                   <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                     <span class="count_top"><i class="fa fa-shield"></i> Finished Mission</span>
                     <div class="count">2,500</div>
                   </div>
                   <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                     <span class="count_top"><i class="fa fa-file-o"></i> Reports</span>
                     <div class="count">4,000</div>
                   </div>
                 </div>
               </div>
             </div>
           </div>
        </div>

        <br />

        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                 <h2>Spread Map</h2>
                 <ul class="nav navbar-right panel_toolbox">
                   <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                 </ul>
                 <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <?php echo $map['html']; ?>
              </div>
            </div>
          </div>
        </div>

        <br />

        <div class="row">
          <div class="col-md-6 col-sm-4 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                 <h2>Popular Topics</h2>
                 <ul class="nav navbar-right panel_toolbox">
                   <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                 </ul>
                 <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <table class="" style="width:100%">
                  <tr>
                    <th style="width:37%;">
                      <p>Top 5</p>
                    </th>
                    <th>
                      <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                        <p class="">Topics</p>
                      </div>
                      <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                        <p class="">Percentage</p>
                      </div>
                    </th>
                  </tr>
                  <tr>
                    <td>
                      <canvas class="canvasDoughnut" height="140" width="140" style="margin: 15px 10px 10px 0"></canvas>
                    </td>
                    <td>
                      <table class="tile_info">
                        <tr>
                          <td>
                            <p><i class="fa fa-square blue"></i>Political </p>
                          </td>
                          <td>30%</td>
                        </tr>
                        <tr>
                          <td>
                            <p><i class="fa fa-square green"></i>Social </p>
                          </td>
                          <td>10%</td>
                        </tr>
                        <tr>
                          <td>
                            <p><i class="fa fa-square purple"></i>Economic </p>
                          </td>
                          <td>20%</td>
                        </tr>
                        <tr>
                          <td>
                            <p><i class="fa fa-square aero"></i>Elections </p>
                          </td>
                          <td>15%</td>
                        </tr>
                        <tr>
                          <td>
                            <p><i class="fa fa-square red"></i>Others </p>
                          </td>
                          <td>30%</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                </table>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-sm-4 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                 <h2>Popular Media</h2>
                 <ul class="nav navbar-right panel_toolbox">
                   <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                 </ul>
                 <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <div class="widget_summary">
                  <div class="w_left w_25">
                    <span>kumparan.com</span>
                  </div>
                  <div class="w_center w_55">
                    <div class="progress">
                      <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60"
                                  aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                        <span class="sr-only">60% Complete</span>
                      </div>
                    </div>
                  </div>
                  <div class="w_right w_20">
                    <span>23k</span>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="widget_summary">
                  <div class="w_left w_25">
                    <span>kapanlagi.com</span>
                  </div>
                  <div class="w_center w_55">
                    <div class="progress">
                      <div class="progress-bar bg-green" role="progressbar" aria-valuenow="40"
                                  aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                        <span class="sr-only">40% Complete</span>
                      </div>
                    </div>
                  </div>
                  <div class="w_right w_20">
                    <span>23k</span>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="widget_summary">
                  <div class="w_left w_25">
                    <span>detik.com</span>
                  </div>
                  <div class="w_center w_55">
                    <div class="progress">
                      <div class="progress-bar bg-green" role="progressbar" aria-valuenow="70"
                                  aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                        <span class="sr-only">70% Complete</span>
                      </div>
                    </div>
                  </div>
                  <div class="w_right w_20">
                    <span>23k</span>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="widget_summary">
                  <div class="w_left w_25">
                    <span>google.com</span>
                  </div>
                  <div class="w_center w_55">
                    <div class="progress">
                      <div class="progress-bar bg-green" role="progressbar" aria-valuenow="20"
                                  aria-valuemin="0" aria-valuemax="100" style="width: 20%;">
                        <span class="sr-only">20% Complete</span>
                      </div>
                    </div>
                  </div>
                  <div class="w_right w_20">
                    <span>23k</span>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="widget_summary">
                  <div class="w_left w_25">
                    <span>yahoo.com</span>
                  </div>
                  <div class="w_center w_55">
                    <div class="progress">
                      <div class="progress-bar bg-green" role="progressbar" aria-valuenow="50"
                                  aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                        <span class="sr-only">50% Complete</span>
                      </div>
                    </div>
                  </div>
                  <div class="w_right w_20">
                    <span>23k</span>
                  </div>
                  <div class="clearfix"></div>
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
  </div>
<?php $this->load->view('templates/v_footer'); ?>
</body>
</html>
