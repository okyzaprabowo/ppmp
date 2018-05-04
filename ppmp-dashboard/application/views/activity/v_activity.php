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
                     <h2>Aktivitas</h2>
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
                            <th style="text-align: center;">Nama Lengkap</th>
                            <th style="text-align: center;">Tanggal</th>
                            <th style="text-align: center;">Aktivitas</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                            if($activity > 0)
                            {
                              $no = 1;
                              foreach($activity as $data)
                              {
                          ?>
                             <tr>
                                <td><?= $no ?></td>
                                <td><?= $data->displayName ?></td>
                                <td><?= date('d F Y',strtotime($data->created_at)) ?></td>
                                <td><?= $data->description ?></td>
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
    <?php $this->load->view('templates/v_footer'); ?>
  </body>
</html>
