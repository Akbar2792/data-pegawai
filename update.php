<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$id_pegawai     = $_POST['id_pegawai'];
$nip            = $_POST['nip'];
$nama           = $_POST['nama'];
$jenis_kelamin  = $_POST['jenis_kelamin'];
$tempat_lahir   = $_POST['tempat_lahir'];
$tanggal_lahir  = $_POST['tanggal_lahir'];
$golongan       = $_POST['golongan'];
// query SQL untuk insert data
$query="UPDATE pegawai SET nip='$nip', nama='$nama', jenis_kelamin='$jenis_kelamin', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir' where id_pegawai='$id_pegawai'";
mysqli_query($conn, $query);
// mengalihkan ke halaman index.php
echo "<script>alert('Data berhasil di Ubah.');window.location='index.php';</script>";
?>