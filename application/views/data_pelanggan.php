<title>Halaman Data Pelanggan</title>
<div class="content-wrapper">
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

    <div class="box">
      <div class="box-header">

      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <table id="example" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>NO</th>
              <th>NO AGENDA</th>
              <th>ID PELANGGAN</th>
              <th>NAMA</th>
              <th>Alamat</th>
              <th>TARIF</th>
              <th>DAYA</th>
              <th>TGL PERMOHONAN</th>
              <th>STATUS KELENGKAPAN BERKAS</th>
              <th>NOMOR LEMARI</th>
              <th>NOMOR RAK</th>
              <th>AKSI DOWNLOAD</th>
            </tr>
          </thead>
          <tbody>


            <?php $no = 1;
            foreach ($pelanggan as $pln) : ?>
              <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $pln->nomor_agenda ?></td>
                <td><?php echo $pln->Id_pelanggan ?></td>
                <td><?php echo $pln->nama ?></td>
                <td><?php echo $pln->alamat ?></td>
                <td><?php echo $pln->tarif ?></td>
                <td><?php echo $pln->daya ?></td>
                <td><?php echo $pln->tanggal_permohonan ?></td>
                <td><?php echo $pln->status_kelengkapan_berkas ?></td>
                <td><?php echo $pln->nomor_lemari ?></td>
                <td><?php echo $pln->nomor_rak ?></td>
                <td><a href="<?= site_url('assets/berkas/') ?><?= $pln->berkas ?>">Berkas (<?php echo $pln->berkas ?>)</a></td>
              </tr>
            <?php endforeach; ?>

          </tbody>

        </table>
      </div>
      <!-- /.box-body -->
    </div>
  </section>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLabel">FORM INPUT DATA PELANGGAN</h4>
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

            </select>
          </div>
          <div class="form-group">
            <label>TANGGAL PERMOHONAN</label>
            <input type="date" name="tanggal_permohonan" class="form-control">
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