<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CRUD dengan Bootstrap</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<h2>Data Mahasiswa</h2><a href="tambah.php" class="btn btn-success">Tambah Data</a>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8">
				<table class="table table-striped">
					<thead>
						<th>No</th>
						<th>Nama Mahasiswa</th>
						<th>Alamat</th>
						<th>Aksi</th>
					</thead>
					<?php 
					include "koneksi.php";
					
					$tampil = show('siswa');
						$no = 1;
						foreach ($tampil as $data) {
							?> 
							<td><?php echo $no++; ?></td>
							<td><?php echo $data['nama_siswa']; ?></td>
							<td><?php echo $data['alamat']; ?></td>
							<td>
								<a href="edit.php?id_siswa=<?php echo $data['id_siswa']; ?>" class="btn btn-info">Edit</a>
								<a href="hapus.php?id_siswa=<?php echo $data['id_siswa']; ?>" class="btn btn-danger" onclick='return confirm("Apakah Anda Yakin ingin Menghapus?")'>Hapus</a>
							</td>
							</tbody>
							<?php
						}
					
					 ?>
				</table>
			</div>
		</div>
		<footer>
			&copy; <a href="" target="_blank">CodeKudus</a> | <h3><a href="http://bocahdesa.com/1njci5">Back to Tutorial</a></h3>
		</footer>
	</div>
	

	<script src="js/bootstrap.min.js"></script>
</body>
</html>