<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
  <head>
    <?php $this->load->view('templates/v_header'); ?>
    <style>
    .button_top {
                width: 100%;
                border-bottom: 1px solid #ddd;
                padding: 10px 5px;
                text-align: right;
                margin-top: 10px;
            }
    </style>
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
              <div class="x_panel">
                <div class="x_title">
                   <h2>Misi</h2>
                   <ul class="nav navbar-right panel_toolbox">
                     <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                   </ul>
                   <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <div class="button_top">
                    <a href="<?php echo base_url('Mission/add_mission'); ?>" class="buttonPrevious btn btn-primary"><i class="fa fa-plus"></i> Tambah Misi</a>
                  </div>
                  <br/>
                  <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th style="text-align: center; width: 5%;">No.</th>
                          <th style="text-align: center;">Misi</th>
                          <th style="text-align: center;">Tanggal</th>
                          <th style="text-align: center;">Wilayah</th>
                          <th style="text-align: center; width: 5%;">Detail</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        if($mission > 0){
                          $no = 1;
                          foreach($mission as $data){
                        ?>
                          <tr>
                            <td><?= $no ?></td>
                            <td><?= $data->description ?></td>
                            <td><?= date('d F Y',strtotime($data->created_at)) ?></td>
                            <td><?= $data->domicile ?></td>
                            <td><a class="btn btn-warning btn-xs" href="<?php echo site_url('Mission/detail_mission').'/'.$data->id;?>">
                                 <i class="fa fa-binoculars" title="Detail"></i></a></td>
                          </tr>
                        <?php                        
                          $no++;
                          }
                        }
                        ?>
                      </tbody>
                  </table>
                </div
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
