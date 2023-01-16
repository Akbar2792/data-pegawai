<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <link rel="stylesheet" href="">

        <!-- bootstrap link -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
            crossorigin="anonymous">
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>

    </head>
    <body class="bg-info text-dark">
        <div class="container-sm">
            <h3 class="display-5 text-center mt-4 fw-bold">Daftar Pegawai</h3>
            <h4 class="text-center">Kantor Kementrian Kelautan dan Perikanan</h4>
            <hr>

            <br><br>
            <a href="input.php" class="btn btn-primary btn-sm">[+] Tambah Data
            </a>
            <br><br>

            <table class="table table-secondary">
                <thead class="table-dark">
                    <tr>
                        <th>NO</th>
                        <th>NIP</th>
                        <th>NAMA</th>
                        <th>JENIS KELAMIN</th>
                        <th>TEMPAT LAHIR</th>
                        <th>TEMPAT LAHIR</th>
                        <th>GOLONGAN</th>
                        <th colspan="2">AKSI</th>
                    </tr>
                </thead>
                <?php
include 'koneksi.php';
$pegawai = mysqli_query($conn, "select * FROM pegawai");

$no=1;
 foreach ($pegawai as $isi){
 	$jenis_kelamin = $isi['jenis_kelamin']=='P'?'Perempuan':'Laki-laki';
 	echo " <tr>
		    	<td>$no</td>
		    	<td>".$isi['nip']."</td>
		    	<td>".$isi['nama']."</td>
		    	<td>".$jenis_kelamin."</td>
		    	<td>".$isi['tempat_lahir']."</td>
                <td>".$isi['tanggal_lahir']."</td>
		    	<td>".$isi['golongan']."</td>
		    	<td>
		    		<a href='edit.php?id_pegawai=$isi[id_pegawai]'>Edit</a>
		    		<a href='delete.php?id_pegawai=$isi[id_pegawai]'>Delete</a>
		    	</td>
   		   </tr>";
  	$no++;
    }
  ?>
            </table>

            <script
                src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
                integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
                crossorigin="anonymous"></script>
            <script
                src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
                integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
                crossorigin="anonymous"></script>
        </div>
    </body>
</html>