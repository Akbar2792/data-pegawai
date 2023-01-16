<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	
	<!-- bootstrap link -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<body class="bg-info text-dark">
<div class="container-sm">
	<!-- Form Inputan -->
	<br>
	<h1 class="display-6 fw-bold text-center mt-4">Form Tambah Data Pegawai</h1>
	
	<Form action="aksi.php" method="POST" class="solid">
		<div class="mb-3">	
		  <label for="nip" class="form-label">NIP</label>
		  <input type="text" onkeyup="isi_otomatis()" name="nip" class="form-control" id="nip" placeholder="Masukkan NIP" required="nip">
		</div>
		<div class="mb-3">	
		  <label for="nama" class="form-label">NAMA </label>
		  <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan Nama" required="nama">
		</div>
		<div class="col- mb-3">	
			<legend class="col-form-label">JENIS KELAMIN</legend>
			<div class="form-check">
		  		<input type="radio" class="form-check-input" name="jenis_kelamin" value="L"> Laki-Laki
			</div>
			<div class="form-check">
				<input type="radio" class="form-check-input" name="jenis_kelamin"  value="P"> Perempuan 
			</div>		  
		</div>
		<div class="mb-3">	
		  <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
		  <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" placeholder="Masukkan Tempat Lahir" required="tempat_lahir">
		</div>
		<div class="mb-3">	
		  <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
		  <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" required="tanggal_lahir">
		</div>
		<div class="mb-3">
		  <label for="jumlah" class="form-label">GOLONGAN</label>
		  <select class="form-control" name="golongan">
		  	<option value="Golongan I">Golongan I</option>
		  	<option value="Golongan II">Golongan II</option>
		  	<option value="Golongan III">Golongan III</option>
		  	<option value="Golongan IV">Golongan IV</option>
		  </select>
		</div>
		<input class="btn btn-sm btn-primary" type="submit" value="Simpan">
		<input class="btn btn-sm btn-outline-primary" type="reset" value="Ulangi">
	</Form>
	<!-- batas Form Inputan -->
</div>



<!-- js bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>