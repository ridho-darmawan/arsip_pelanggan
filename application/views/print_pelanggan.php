<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
		<tr>
			<th>NO</th>
			<th>ID PELANGGAN</th>
			<th>NOMOR AGENDA</th>
      		<th>TANGGAL PERMOHONAN</th>
			<th>NAMA</th>
			<th>TARIF</th>
			<th>DAYA</th>
			<th>STATUS KELENGKAPAN BERKAS</th>
			<th>NOMOR LEMARI</th>
			<th>NOMOR RAK</th>
		</tr>
		<?php
		$no = 1;

    		foreach ($pelanggan as $pln) : ?>
    		<tr>
    			<td><?php echo $no++ ?></td>
    			<td><?php echo $pln->Id_pelanggan?></td>
    			<td><?php echo $pln->nomor_agenda?></td>
          <td><?php echo $pln->tanggal_permohonan?></td>
    			<td><?php echo $pln->nama?></td>
    			<td><?php echo $pln->tarif?></td>
    			<td><?php echo $pln->daya?></td>
    			<td><?php echo $pln->status_kelengkapan_berkas?></td>
    			<td><?php echo $pln->nomor_lemari?></td>
    			<td><?php echo $pln->nomor_rak?></td>

    		</tr>
    	<?php endforeach; ?>
	</table>

	<script type="text/javascript">
		window.print();
	</script>
</body>
</html>