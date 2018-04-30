<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="top_nav">
  <div class="nav_menu">
    <nav>
      <div class="nav toggle">
        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
      </div>
      <ul class="nav navbar-nav navbar-right">
        <li class="">
          <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            <img src="<?php echo base_url('assets/images/').$this->session->userdata['ppmp']['ap_image'];?>" alt=""><?php echo $this->session->userdata['ppmp']['ap_name'];?>
            <span class=" fa fa-angle-down"></span>
          </a>
          <ul class="dropdown-menu dropdown-usermenu pull-right">
            <li><a href="<?php echo site_url('Settings/users_profile/').$this->session->userdata['ppmp']['ap_sid'];?>"> Pengaturan Pengguna</a></li>
            <li><a href="<?= site_url('Login/Logout');?>"><i class="fa fa-sign-out pull-right"></i> Keluar</a></li>
          </ul>
        </li>
      </ul>
    </nav>
  </div>
</div>
