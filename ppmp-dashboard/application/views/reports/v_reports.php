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
                     <h2>Grafik Laporan</h2>
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
                     <h2>Daftar Laporan</h2>
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
                        <?php
                          if($reports > 0)
                          {
                            $no = 1;
                            foreach($reports as $data)
                            {
                        ?>
                            <tr>
                              <td><?= $no ?></td>
                              <td><?= date('d F Y',strtotime($data->created_at)) ?></td>
                              <td><?= $data->displayName ?></td>
                              <td><?= $data->item ?></td>
                              <td><a class="btn btn-warning btn-xs" href="<?php echo site_url('Reports/detail_report').'/'.$data->id;?>">
    										           <i class="fa fa-binoculars" title="Detail"></i></a></td>
                            </tr>
                        <?php
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
      <input type="hidden" id="valIntoleransi" value="<?= $intoleransi ?>" />
      <input type="hidden" id="valHoax" value="<?= $hoax ?>" />
      <input type="hidden" id="valKecurangan" value="<?= $kecurangan ?>" />
      <input type="hidden" id="valKampanye" value="<?= $kampanye ?>" />
      <input type="hidden" id="valLainnya" value="<?= $lainnya ?>" />
    <?php $this->load->view('templates/v_footer'); ?>
  </body>
  <script type="text/javascript">
  $(document).ready(function(){

  });

      var valIntoleransi = $('#valIntoleransi').val();
      var valHoax = $('#valHoax').val();
      var valKecurangan = $('#valKecurangan').val();
      var valKampanye = $('#valKampanye').val();
      var valLainnya = $('#valLainnya').val();

      var numberWithCommas = function(x) {
                                return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                            };
      var dataIntoleransi = valIntoleransi.split(',').map(x => parseFloat(x, 10));
      var dataHoax = valHoax.split(',').map(x => parseFloat(x, 10));
      var dataKecurangan = valKecurangan.split(',').map(x => parseFloat(x, 10));
      var dataKampanye = valKampanye.split(',').map(x => parseFloat(x, 10));
      var dataLain = valLainnya.split(',').map(x => parseFloat(x, 10));
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
