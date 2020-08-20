<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo base_url() ?>assets/image/admin.png" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>ADMIN</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">

      <li class="header">MAIN NAVIGATION</li>
      <li class="active">
        <a href="<?= site_url('dashboard') ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
      </li>
      <li>
        <a href="<?= site_url('pelanggan') ?>"><i class="fa fa-user"></i> <span>Data Pelanggan</span></a>
      </li>
      <li>
        <a href="<?php echo base_url('pelanggan/print') ?>"><i class="fa fa-print"></i><span>Print</a></span>
      </li>
      <li class="active treeview">
        <a href="#">
          <i class="fas fa-file-export"></i> <span>Laporan</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li>
            <a href="<?php echo base_url('pelanggan/cetak') ?>"><i class="fa fa-file-pdf-o"></i><span>Pdf</a></span>
          </li>
          <!-- <li>
            <a href="<?php echo base_url('pelanggan/pdf') ?>"><i class="fa fa-file-pdf-o"></i><span>Pdf</a></span>
          </li> -->
          <li>
            <a href="<?php echo base_url('pelanggan/excel') ?>"><i class="fa fa-file-excel-o"></i><span>Excel</a></span>
          </li>
        </ul>
      <li onclick="javascript:return confirm('Anda yakin ingin logout ?')">
        <a href="<?= site_url('auth/login') ?>"><i class="fa fa-sign-out"></i> <span>Logout</span></a>
      </li>
    </ul>
  </section>

  <!-- /.sidebar -->
</aside>