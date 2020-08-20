<title>Halaman Data Pelanggan</title>
<!-- <style type="text/css">
  table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 120% !important;
  }

  th,
  td {
    text-align: left;
    padding: 8px;
  }

  tr:nth-child(even) {
    background-color: #f2f2f2
  }
</style> -->
<div class="content-wrapper">
  <div style="overflow-x:auto;">
    <section class="content-header">

      <h1>
        Data Pelanggan Pasang Baru
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Data Pelanggan Pasang Baru</li>
      </ol>
    </section>

    <section class="content">

      <?php echo $this->session->flashdata('message'); ?>
      <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>Tambah Data Pelanggan</button>



      <div class="navbar-form navbar-right">
        <?php echo form_open('pelanggan/search') ?>
        <input type="text" name="keyword" class="form-control" placeholder="search">
        <button type="submit" class="btn btn-success">Cari</button>

        <?php echo form_close() ?>

      </div>



      <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>NO</th>
            <th>ID PELANGGAN</th>
            <th>NOMOR AGENDA</th>
            <th>TANGGAL PERMOHONAN</th>
            <th>NAMA</th>
            <th>TARIF</th>
            <th>DAYA</th>
            <th colspan="3">AKSI</th>
          </tr>

        </thead>
        <tbody>
          <?php

          $no = 1;

          foreach ($pelanggan as $pln) : ?>
            <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo $pln->Id_pelanggan ?></td>
              <td><?php echo $pln->nomor_agenda ?></td>
              <td><?php echo tgl($pln->tanggal_permohonan) ?></td>
              <td><?php echo $pln->nama ?></td>
              <td><?php echo $pln->tarif ?></td>
              <td><?php echo $pln->daya ?></td>
              <td><?php echo anchor('pelanggan/detail/' . $pln->Id, '<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>') ?></td>
              <td onclick="javascript:return confirm('Anda yakin ingin menghapus?')"><?php echo anchor('pelanggan/hapus/' . $pln->Id, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
              <td><?php echo anchor('pelanggan/edit/' . $pln->Id, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>

            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
  </div>

  <div class="row">
    <div class="col">

      <?php echo $pagination; ?>
    </div>
  </div>

  </section>
  <!-- Modal -->

  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header" style="background-color: #43afcb; color:white;font-family:'Courier New', Courier, monospace ">
          <h4 class="modal-title" id="exampleModalLabel" style="float: left">FORM INPUT DATA PELANGGAN</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <?php echo form_open_multipart('pelanggan/tambah_aksi'); ?>

          <div class="form-group">
            <label>ID PELANGGAN</label>
            <input type="text" name="Id_pelanggan" class="form-control">
          </div>
          <div class="form-group">
            <label>NOMOR AGENDA</label>
            <input type="text" name="nomor_agenda" class="form-control">
          </div>
          <div class="form-group">
            <label>NAMA</label>
            <input type="text" name="nama" class="form-control">
          </div>
          <div class="form-group">
            <label>ALAMAT</label>
            <input type="text" name="alamat" class="form-control">
          </div>
          <div class="form-group">
            <label>TARIF</label>
            <input type="text" name="tarif" class="form-control">

          </div>
          <div class="form-group">
            <label>DAYA</label>
            <select class="form-control" name="daya">
              <option>450 VA</option>
              <option>900 VA</option>
              <option>1300 VA</option>
              <option>2200 VA</option>
              <option>3500 VA</option>
              <option>4400 VA</option>
              <option>5500 VA</option>
              <option>6600 VA</option>
              <option>7700 VA</option>
              <option>10600 VA</option>
              <option>11000 VA</option>
              <option>13200 VA</option>
              <option>16500 VA</option>
              <option>23000 VA</option>
              <option>33000 VA</option>
              <option>41500 VA</option>
              <option>53000 VA</option>
              <option>66000 VA</option>
              <option>82500 VA</option>
              <option>105000 VA</option>
              <option>131000 VA</option>
              <option>147000 VA</option>
              <option>164000 VA</option>
              <option>197000 VA</option>


            </select>
          </div>
          <div class="form-group">
            <label>TANGGAL PERMOHONAN</label>
            <input type="date" name="tanggal_permohonan" class="form-control" data-date="" data-date-format="DD MMM YYY">
          </div>
          <div class="form-group">
            <label>STATUS KELENGKAPAN BERKAS</label>
            <select class="form-control" name="status_kelengkapan_berkas">
              <option>Lengkap</option>
              <option>Belum Lengkap</option>
            </select>
          </div>
          <div class="form-group">
            <label>NOMOR LEMARI</label>
            <input type="text" name="nomor_lemari" class="form-control">
          </div>
          <div class="form-group">
            <label>NOMOR RAK</label>
            <input type="text" name="nomor_rak" class="form-control">
          </div>
          <div class="form-group">
            <label>UPLOAD BERKAS</label>
            <input type="file" name="berkas" class="form-control">
          </div>

          <a href="<?php echo base_url('pelanggan/index'); ?>" class="btn btn-primary">Kembali</a>

          <button type="submit" class="btn btn-primary">Simpan</button>

          <?php echo form_close(); ?>
        </div>
      </div>
    </div>
  </div>
</div>