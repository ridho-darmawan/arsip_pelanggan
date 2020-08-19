<div class="content-wrapper">
	<section class="content">
		<?php foreach ($pelanggan as $pln) { ?>

			<?= form_open_multipart('pelanggan/update'); ?>

			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Edit Data</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->

				<div class="box-body">
					<div class="form-group">

						<label>Id Pelanggan</label>
						<input type="hidden" name="Id" class="form-control" value="<?php echo $pln->Id ?>">
						<input type="text" name="Id_pelanggan" class="form-control" value="<?php echo $pln->Id_pelanggan ?>">
					</div>
					<div class="form-group">
						<label>Nomor Agenda</label>
						<input type="text" name="nomor_agenda" class="form-control" value="<?php echo $pln->nomor_agenda ?>">
					</div>
					<div class="form-group">
						<label>Nama</label>
						<input type="text" name="nama" class="form-control" value="<?php echo $pln->nama ?>">
					</div>
					<div class="form-group">
						<label>Alamat</label>
						<input type="text" name="alamat" class="form-control" value="<?php echo $pln->alamat ?>">
					</div>

					<div class="form-group">
						<label>Tarif</label>
						<input type="text" name="tarif" class="form-control" value="<?php echo $pln->tarif ?>">
					</div>
					<div class="form-group">
						<label>Daya</label>
						<select class="form-control" name="daya">
							<option>450 VA</option>
							<option>900 VA</option>
							<option>1300 VA</option>
							<option>2200 VA</option>
							<option>3300 VA</option>
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
						<label>Tanggal Permohonan</label>
						<input type="date" name="tanggal_permohonan" class="form-control" value="<?php echo $pln->tanggal_permohonan ?>">
					</div>
					<div class="form-group">
						<label>Status Kelengkapan Berkas</label>
						<select class="form-control" name="status_kelengkapan_berkas">
							<option>Lengkap</option>
							<option>Belum Lengkap</option>
						</select>
					</div>
					<div class="form-group">
						<label>Nomor Lemari</label>
						<input type="text" name="nomor_lemari" class="form-control" value="<?php echo $pln->nomor_lemari ?>">
					</div>
					<div class="form-group">
						<label>Nomor Rak</label>
						<input type="text" name="nomor_rak" class="form-control" value="<?php echo $pln->nomor_rak ?>">
					</div>
					<div class="form-group">
						<label>Berkas <h6 style="color: red">*biarkan jika tidak ingin merubah</h6></label>
						<input type="file" name="berkas">
						<input style="width: 150px" type="text" class="form-control" value="<?php echo $pln->berkas ?>" readonly>
					</div>


					<a href="<?php echo base_url('pelanggan/index'); ?>" class="btn btn-primary">Kembali</a>

					<button type="submit" class="btn btn-primary">Simpan</button>
				</div>
			</div>
			<!-- /.box-body -->

			<?= form_close(); ?>

		<?php } ?>

	</section>
</div>