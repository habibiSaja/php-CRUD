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
			<div class="col-md-8">
				<h3>Tambah Data</h3><a href="index.php" class="btn btn-success">Lihat Data</a><hr>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8">
				<form  role='form' action="" method="post">
					<div class="form-group">
						<label for="#nama">Nama</label>
						<input type="text" id="nama" class="form-control" name="nama" required autofocus>
					</div>
					<div class="form-group">
						<label for="#alm">Alamat</label>
						<input type="text" id="alm" class="form-control" name="alm" required>
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-primary" value="Simpan" name="simpan">
						<input type="reset" class="btn btn-danger" value="Reset">
					</div>
				</form>
						<?php  
							include "koneksi.php";
							if (isset($_POST['simpan'])) {
							 	$input = mysqli_query($db, "INSERT INTO siswa (nama_siswa, alamat) VALUES ('$_POST[nama]', '$_POST[alm]')");
							 	if ($input) {
							 		echo "Berhasil Disimpan, <a href='index.php' class='btn btn-info'>Lihat Data</a>";
							 	}
							 } else {

							 }
		 				?>
			</div>
		</div>

		<footer>
			&copy; <a href="" target="_blank">CodeKudus</a> | <h3><a href="http://bocahdesa.com/1njci5">Back to Tutorial</a></h3>
		</footer>
	</div>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>