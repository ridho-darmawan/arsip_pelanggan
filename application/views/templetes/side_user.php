<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url() ?>assets/image/user.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>User</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">

        <li class="header">MAIN NAVIGATION</li> 
        <li class="active">
            <a href="<?=site_url('dashboard_user')?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
        </li>
        <li>
          <a href="<?=site_url('data_pelanggan')?>"><i class="fa fa-user"></i> <span>Data Pelanggan</span></a>
        </li>
        <li>
          <a href="<?=site_url('tentang')?>"><i class="fa fa-user"></i> <span>Tentang</span></a>
        </li>
        <li>
          <a href="<?=site_url('welcome')?>"><i class="fa fa-sign-out"></i> <span>Logout</span></a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
