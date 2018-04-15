<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
  <div class="menu_section">
    <ul class="nav side-menu">
      <li id="mnDashboard"><a href="<?php echo base_url('Dashboard'); ?>"><i class="fa fa-desktop"></i> Overview </a></li>
      <li id="mnVolunteer"><a href="<?php echo base_url('Volunteer'); ?>"><i class="fa fa-user"></i> Volunteer </a></li>
      <li id="mnMission"><a href="<?php echo base_url('Mission'); ?>"><i class="fa fa-star-half-o"></i> Mission </a></li>
      <li id="mnContent"><a href="<?php echo base_url('Content'); ?>"><i class="fa fa-newspaper-o"></i> Content </a></li>
      <li id="mnActvity"><a href="<?php echo base_url('Activity'); ?>"><i class="fa fa-tasks"></i> Activity </a></li>
      <li id="mnReport"><a href="<?php echo base_url('Reports'); ?>"><i class="fa fa-file-o"></i> Report </a></li>
      <li id="mnItem"><a href="<?php echo base_url('Item'); ?>"><i class="fa fa-cubes"></i> Item </a></li>
      <li id="mnSetting"><a href="<?php echo base_url('Settings'); ?>"><i class="fa fa-wrench"></i> Setting </a></li>
    </ul>
  </div>
</div>
