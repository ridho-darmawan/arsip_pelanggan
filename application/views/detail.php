<div class="content-wrapper">
	<section class="content">
		<h4><strong>DETAIL DATA PELANGGAN</strong></h4><br>
		<table class="table table-bordered table-striped">
			<tr>
				<th>ID PELANGGAN</th>
				<td><?php echo $detail->Id_pelanggan ?></td>
			</tr>
			<tr>
				<th>NOMOR AGENDA</th>
				<td><?php echo $detail->nomor_agenda ?></td>
			</tr>
			<tr>
				<th>NAMA</th>
				<td><?php echo $detail->nama ?></td>
			</tr>
			<tr>
				<th>ALAMAT</th>
				<td><?php echo $detail->alamat ?></td>
			</tr>
			<tr>
				<th>TARIF</th>
				<td><?php echo $detail->tarif ?></td>
			</tr>
			<tr>
				<th>DAYA</th>
				<td><?php echo $detail->daya ?></td>
			</tr>
			<tr>
				<th>TANGGAL PERMOHONAN</th>
				<td><?php echo tgl($detail->tanggal_permohonan) ?></td>
			</tr>
			<tr>
				<th>STATUS KELENGKAPAN BERKAS</th>
				<td><?php echo $detail->status_kelengkapan_berkas ?></td>
			</tr>
			<tr>
				<th>NOMOR LEMARI</th>
				<td><?php echo $detail->nomor_lemari ?></td>
			</tr>
			<tr>
				<th>NOMOR RAK</th>
				<td><?php echo $detail->nomor_rak ?></td>
			</tr>
			<tr>
				<th>BERKAS</th>
				<td onclick="javascript:return confirm('Anda yakin ingin mendownload berkas ?')"><a href="<?= site_url('assets/berkas/') ?><?= $detail->berkas ?>"><?php echo $detail->berkas ?></a></td>
			</tr>






		</table>




		<a href="<?php echo base_url('pelanggan/index'); ?>" class="btn btn-primary">Kembali</a>



	</section>
</div>