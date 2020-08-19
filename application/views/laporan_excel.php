<!DOCTYPE html>
<html>
<head>
	<title>Laporan Pelanggan</title>
</head>
<body>
	<style type="text/css">
	body{
		font-family: sans-serif;
	}
	table{
		margin: 20px auto;
		border-collapse: collapse;
	}
	table th,
	table td{
		border: 1px solid #3c3c3c;
		padding: 3px 8px;

	}
	a{
		background: blue;
		color: #fff;
		padding: 8px 10px;
		text-decoration: none;
		border-radius: 2px;
	}
	</style>

	<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data Pelanggan.xls");
	?>

	<table border="1">
		<tr>
			<th>No</th>
			<th>ID PELANGGAN</th>
			<th>NOMOR AGENDA</th>
			<th>NAMA</th>
            <th>ALAMAT</th>
            <th>TARIF</th>
            <th>DAYA</th>
            <th>TANGGAL PERMOHONAN</th>
            <th>STATUS KELENGKAPAN BERKAS</th>
            <th>NOMOR LEMARI</th>
            <th>NOMOR RAK</th>
		</tr>
        <?php 
        $no = 1;
        foreach($pelanggan as $value): ?>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $value['Id_pelanggan'] ?></td>
                <td><?= $value['nomor_agenda'] ?></td>
                <td><?= $value['nama'] ?></td>
                <td><?= $value['alamat'] ?></td>
                <td><?= $value['tarif'] ?></td>
                <td><?= $value['daya'] ?></td>
                <td><?= $value['tanggal_permohonan'] ?></td>
                <td><?= $value['status_kelengkapan_berkas'] ?></td>
                <td><?= $value['nomor_lemari'] ?></td>
                <td><?= $value['nomor_rak'] ?></td>
                
            </tr>
        <?php $no++;  endforeach; ?>
	</table>
</body>
</html>