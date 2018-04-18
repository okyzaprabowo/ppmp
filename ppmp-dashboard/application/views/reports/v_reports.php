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
                     <h2>Chart Report</h2>
                     <ul class="nav navbar-right panel_toolbox">
                       <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                     </ul>
                     <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <canvas id="reportchart" width="500" height="150"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <br/>

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel tile">
                <div class="dashboard_graph">
                  <div class="row x_title">
                     <h2>List of Reports</h2>
                     <ul class="nav navbar-right panel_toolbox">
                       <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                     </ul>
                     <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th style="text-align: center; width: 5%;">No.</th>
                          <th style="text-align: center;">Tanggal</th>
                          <th style="text-align: center;">Relawan</th>
                          <th style="text-align: center;">Kategori</th>
                          <th style="text-align: center; width: 5%;">Detail</th>
                        </tr>
                      </thead>
                      <tbody>
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

      var dataIntoleransi = [51, 30, 40, 28, 92, 50, 45, 20, 35, 45, 55, 35];
      var dataHoax = [41, 56, 25, 48, 72, 34, 12, 51, 30, 40, 28, 92];
      var dataKecurangan = [51, 30, 40, 28, 92, 50, 45, 20, 35, 45, 55, 35];
      var dataKampanye = [41, 56, 25, 48, 72, 34, 12, 51, 30, 40, 28, 92];
      var dataLain = [51, 30, 40, 28, 92, 50, 45, 20, 35, 45, 55, 35];
      var months = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "Nopember", "Desember"];

      var bar_ctx = document.getElementById('reportchart');
      var bar_chart = new Chart(bar_ctx, {
          type: 'bar',
          data: {
              labels: months,
              datasets: [
              {
                  label: 'Intoleransi',
                  data: dataIntoleransi,
                  backgroundColor: "#B7B74E",
                  hoverBackgroundColor: "#B7B74E",
                  hoverBorderWidth: 2,
                  hoverBorderColor: 'lightgrey'
              },
              {
                  label: 'Hoax',
                  data: dataHoax,
                  backgroundColor: "#00FF00",
                  hoverBackgroundColor: "#00FF00",
                  hoverBorderWidth: 2,
                  hoverBorderColor: 'lightgrey'
              },
              {
                  label: 'Kecurangan Pemilu',
                  data: dataKecurangan,
                  backgroundColor: "#0000FF",
                  hoverBackgroundColor: "#0000FF",
                  hoverBorderWidth: 2,
                  hoverBorderColor: 'lightgrey'
              },
              {
                  label: 'Kampanye Negatif',
                  data: dataKampanye,
                  backgroundColor: "#FF00FF",
                  hoverBackgroundColor: "#FF00FF",
                  hoverBorderWidth: 2,
                  hoverBorderColor: 'lightgrey'
              },
              {
                  label: 'Lain-Lain',
                  data: dataLain,
                  backgroundColor: "#00FFFF",
                  hoverBackgroundColor: "#00FFFF",
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
