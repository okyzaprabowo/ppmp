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
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3></h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Detail Relawan</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Lengkap</label>
                        <div class="col-md-4 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" value="<?= $name; ?>" disabled>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tempat & Tanggal Lahir</label>
                        <div class="col-md-2 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" value="<?= $ttl; ?>" disabled>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin</label>
                        <div class="col-md-2 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" value="<?= $gender; ?>" disabled>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Alamat KTP</label>
                        <div class="col-md-6 col-sm-9 col-xs-12">
                          <textarea class="form-control" rows="3" disabled><?= $address; ?></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Alamat Domisili</label>
                        <div class="col-md-6 col-sm-9 col-xs-12">
                          <textarea class="form-control" rows="3" disabled><?= $domisili; ?></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Pendidikan Terakhir</label>
                        <div class="col-md-4 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" value="<?= $education; ?>" disabled>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Kegiatan</label>
                        <div class="col-md-4 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" value="<?= $job; ?>" disabled>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Bidang Kegiatan</label>
                        <div class="col-md-4 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" value="<?= $activity; ?>" disabled>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Detail Kegiatan</label>
                        <div class="col-md-6 col-sm-9 col-xs-12">
                          <textarea class="form-control" rows="3" disabled><?= $act_detail; ?></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Instansi Tempat Bekerja</label>
                        <div class="col-md-4 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" value="<?= $instansi; ?>" disabled>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Twitter</label>
                        <div class="col-md-4 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" value="<?= $twitter; ?>" disabled>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Instagram</label>
                        <div class="col-md-4 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" value="<?= $instagram; ?>" disabled>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Blog/Website</label>
                        <div class="col-md-4 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" value="<?= $blog; ?>" disabled>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Kemampuan Khusus</label>
                        <div class="col-md-4 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" value="<?= $skill; ?>" disabled>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Kelompok/Komunitas</label>
                        <div class="col-md-4 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" value="<?= $community; ?>" disabled>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Kelompok/Komunitas</label>
                        <div class="col-md-4 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" value="<?= $comm_name; ?>" disabled>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Harapan/Vision</label>
                        <div class="col-md-6 col-sm-9 col-xs-12">
                          <textarea class="form-control" rows="3" disabled><?= $hope; ?></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <a href="<?php echo base_url('Volunteer'); ?>" class="btn btn-success">Kembali</a>
                        </div>
                      </div>
                    </form>
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
