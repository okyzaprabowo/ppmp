<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!-- Side Navbar -->
<nav class="side-navbar">
  <div class="side-navbar-wrapper">
    <!-- Sidebar Header    -->
    <div class="sidenav-header d-flex align-items-center justify-content-center">
      <!-- User Info-->
      <div class="sidenav-header-inner text-center">
        <img src="<?php echo base_url('assets/images/avatar-1.jpg');?>" alt="person" class="img-fluid rounded-circle">
        <h2 class="h5">Daniel Daniarta</h2>
      </div>
      <!-- Small Brand information, appears on minimized sidebar-->
      <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"> <strong>B</strong><strong class="text-primary">D</strong></a></div>
    </div>

    <!-- Sidebar Navigation Menus-->
    <div class="main-menu">
      <h5 class="sidenav-heading"></h5>
      <ul id="side-main-menu" class="side-menu list-unstyled">
        <li><a href="<?php echo base_url('Dashboard'); ?>"><i class="icon-home"></i>Overview</a></li>
        <li><a href="<?php echo base_url('Volunteer'); ?>"><i class="icon-user"></i>Relawan</a></li>
        <li><a href="<?php echo base_url('Content'); ?>"><i class="icon-interface-windows"></i>Content</a></li>
        <li><a href="<?php echo base_url('Activity'); ?>"><i class="icon-picture"></i>Activity</a></li>
        <li><a href="<?php echo base_url('Items'); ?>"><i class="icon-grid"></i>Items</a></li>
      </ul>
    </div>

  </div>
</nav>
