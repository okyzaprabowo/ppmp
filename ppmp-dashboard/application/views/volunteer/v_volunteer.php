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
            <div class="x_panel tile">
              <div class="dashboard_graph">
                <div class="row x_title">
                  <div class="col-md-6">
                     <h3>Age & Gender Of Volunteer </h3>
                   </div>
                </div>
                <div class="x_content">
                  <canvas id="agechart" width="500" height="150"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>

        <br />

        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="x_panel tile fixed_height_320">
              <div class="dashboard_graph">
                <div class="row x_title">
                  <div class="col-md-6">
                     <h3>Location </h3>
                   </div>
                </div>
                <div class="x_content">
                  <div class="widget_summary">
                    <div class="w_left" style="width: 50%;">
                      <span>Solo, Jateng</span>
                    </div>
                    <div class="w_center" style="width: 50%;">
                      <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="widget_summary">
                    <div class="w_left" style="width: 50%;">
                      <span>Kuningan, Jabar</span>
                    </div>
                    <div class="w_center" style="width: 50%;">
                      <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="40"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                          <span class="sr-only">40% Complete</span>
                        </div>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="widget_summary">
                    <div class="w_left" style="width: 50%;">
                      <span>Jakarta, DKI</span>
                    </div>
                    <div class="w_center" style="width: 50%;">
                      <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="70"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                          <span class="sr-only">70% Complete</span>
                        </div>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="widget_summary">
                    <div class="w_left" style="width: 50%;">
                      <span>Palembang, Sumsel</span>
                    </div>
                    <div class="w_center" style="width: 50%;">
                      <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="20"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 20%;">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="widget_summary">
                    <div class="w_left" style="width: 50%;">
                      <span>Surabaya, Jatim</span>
                    </div>
                    <div class="w_center" style="width: 50%;">
                      <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="50"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                          <span class="sr-only">50% Complete</span>
                        </div>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="x_panel tile fixed_height_320">
              <div class="dashboard_graph">
                <div class="row x_title">
                  <div class="col-md-6">
                     <h3>Job </h3>
                   </div>
                </div>
                <div class="x_content">
                  <table class="" style="width:100%">
                    <tr>
                      <th style="width:37%;">
                      </th>
                      <th>
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
                              <p><i class="fa fa-square blue"></i>PNS </p>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class="fa fa-square green"></i>Karyawan Swasta </p>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class="fa fa-square purple"></i>Pelajar </p>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class="fa fa-square aero"></i>Mahasiswa </p>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class="fa fa-square red"></i>Wiraswasta </p>
                            </td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="x_panel tile fixed_height_320">
              <div class="dashboard_graph">
                <div class="row x_title">
                  <div class="col-md-6">
                     <h3>Channel </h3>
                   </div>
                </div>
                <div class="x_content">
                  <div class="widget_summary">
                    <div class="w_left" style="width: 50%;">
                      <span>Whatsapp</span>
                    </div>
                    <div class="w_center" style="width: 50%;">
                      <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="widget_summary">
                    <div class="w_left" style="width: 50%;">
                      <span>Line</span>
                    </div>
                    <div class="w_center" style="width: 50%;">
                      <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="40"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                          <span class="sr-only">40% Complete</span>
                        </div>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="widget_summary">
                    <div class="w_left" style="width: 50%;">
                      <span>Instagram</span>
                    </div>
                    <div class="w_center" style="width: 50%;">
                      <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="70"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                          <span class="sr-only">70% Complete</span>
                        </div>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="widget_summary">
                    <div class="w_left" style="width: 50%;">
                      <span>Facebook</span>
                    </div>
                    <div class="w_center" style="width: 50%;">
                      <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="20"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 20%;">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="widget_summary">
                    <div class="w_left" style="width: 50%;">
                      <span>Telegram</span>
                    </div>
                    <div class="w_center" style="width: 50%;">
                      <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="50"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                          <span class="sr-only">50% Complete</span>
                        </div>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <br />

        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel tile">
              <div class="dashboard_graph">
                <div class="row x_title">
                  <div class="col-md-6">
                     <h3>Volunteer Database</h3>
                   </div>
                </div>
                <div class="x_content">
                  <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th style="text-align: center; width: 5%;">No.</th>
                          <th style="text-align: center;">Nama Lengkap</th>
                          <th style="text-align: center;">Jenis Kelamin</th>
                          <th style="text-align: center;">Domisili</th>
                          <th style="text-align: center;">Kegiatan</th>
                          <th style="text-align: center; width: 5%;">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          if($volunteer > 0){
                            $no = 1;
                            foreach($volunteer as $data){
                        ?>
                            <tr>
                              <td><?= $no ?></td>
                              <td><?= $data->c1 ?></td>
                              <td><?= $data->c2 ?></td>
                              <td><?= $data->c4 ?></td>
                              <td><?= $data->c5 ?></td>
                              <td><a class="btn btn-warning btn-xs" href="<?php echo site_url('Volunteer/detail_volunteer').'/'.$data->user_id;?>">
    										           <i class="fa fa-binoculars" title="Detail"></i></a></td>
                            </tr>
                        <?php
                              $no++;
                            }
                          }
                        ?>
                      </tbody>
                    </table>
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
    var numberWithCommas = function(x) {
                              return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                          };

    var dataPack1 = [21000, 22000, 26000, 35000, 55000, 55000];
    var dataPack2 = [1000, 1200, 1300, 1400, 1060, 2030];
    var dates = ["18-24", "25-34", "35-44", "45-54", "55-64", "65+"];

    var bar_ctx = document.getElementById('agechart');
    var bar_chart = new Chart(bar_ctx, {
        type: 'bar',
        data: {
            labels: dates,
            datasets: [
            {
                label: 'Male',
                data: dataPack1,
                backgroundColor: "rgba(55, 160, 225, 0.7)",
                hoverBackgroundColor: "rgba(55, 160, 225, 0.7)",
                hoverBorderWidth: 2,
                hoverBorderColor: 'lightgrey'
            },
            {
                label: 'Female',
                data: dataPack2,
                backgroundColor: "rgba(225, 58, 55, 0.7)",
                hoverBackgroundColor: "rgba(225, 58, 55, 0.7)",
                hoverBorderWidth: 2,
                hoverBorderColor: 'lightgrey'
            },
            ]
        },
        options: {
            animation: {
              duration: 10,
            },
            tooltips: {
              mode: 'label',
              callbacks: {
              label: function(tooltipItem, data) {
                return data.datasets[tooltipItem.datasetIndex].label + ": " + numberWithCommas(tooltipItem.yLabel);
              }
              }
             },
            scales: {
              xAxes: [{
                stacked: true,
                gridLines: { display: false },
                }],
              yAxes: [{
                stacked: true,
                ticks: {
                  callback: function(value) { return numberWithCommas(value); },
                },
                }],
            }, // scales
            legend: {display: true}
        } // options
      }
    );
</script>
</html>
