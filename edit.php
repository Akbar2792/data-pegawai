<?php
include 'koneksi.php';
$id = $_GET['id_pegawai'];
$query = "select * from pegawai where id_pegawai='$id'";
$result = mysqli_query($conn, $query);
$isi = mysqli_fetch_array($result);

$golongan = array('GOLONGAN I','GOLONGAN II','GOLONGAN III','GOLONGAN IV');
//fungsi set aktif radio button
function active_radio_button($value, $input){
	$result = $value==$input?'checked':'';
	return $result;
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Edit Pegawai</title>
	
	<!-- bootstrap link -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body class="bg-info text-dark">
<div class="container-sm">
	<h1 class="display-6 mt-4 fw-bold text-center">Form Perubahan Data Pegawai</h1>
	<form action="update.php" method="post">
		<input type="hidden" value="<?php echo $isi['id_pegawai'];?>" name="id_pegawai">
			<div class="mb-3">
				<label for="NIP" class="form-label">NIP</label>
		    	<input type="text" class="form-control" id="NIP" value="<?php echo $isi['nip'];?>" name="nip">
		  	</div>
		   	<div class="mb-3">	
				<label for="nama" class="form-label">NAMA </label>
				<input type="text" class="form-control"  value="<?php echo $isi['nama'];?>" name="nama">
			</div>
			<div class="mb-3">	
				<legend class="col-form-label">JENIS KELAMIN</legend>
				<input type="radio" name="jenis_kelamin" class="form-check-input" value="L" <?php echo active_radio_button("L", $isi['jenis_kelamin'])?>> Laki-laki
				<input type="radio" name="jenis_kelamin" class="form-check-input" value="P" <?php echo active_radio_button("P", $isi['jenis_kelamin'])?>> Perempuan
			</div>
			<div class="mb-3">	
				<legend class="col-form-label">GOLONGAN</legend>
				<input type="radio" name="golongan" class="form-check-input" value="gol 1" <?php echo active_radio_button("gol 1", $isi['golongan'])?>> Golongan I
				<input type="radio" name="golongan" class="form-check-input" value="gol 2" <?php echo active_radio_button("gol 2", $isi['golongan'])?>> Golongan II
				<input type="radio" name="golongan" class="form-check-input" value="gol 3" <?php echo active_radio_button("gol 3", $isi['golongan'])?>> Golongan III
				<input type="radio" name="golongan" class="form-check-input" value="gol 4" <?php echo active_radio_button("gol 4", $isi['golongan'])?>> Golongan IV
			</div>
			<div class="mb-3">	
				<label for="tempat_lahir" class="form-label">Tempat Lahir</label>
				<input type="text" class="form-control"  value="<?php echo $isi['tempat_lahir'];?>" name="tempat_lahir">
			</div>
			<div class="mb-3">	
				<label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
				<input type="date" class="form-control"  value="<?php echo $isi['tanggal_lahir'];?>" name="tanggal_lahir">
			</div>
			<div class="mb-3">	
				<input class="btn btn-sm btn-primary" type="submit" value="Simpan">
				<a href="index.php" class="btn btn-sm btn-outline-primary" type="reset" value="Kembali">Kembali</a>
		    </div>
	</form>
</div>
</body>
</html>