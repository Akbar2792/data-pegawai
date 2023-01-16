<?php
include 'koneksi.php';
//simpan data ke variabel
$nip 			= $_POST['nip'];
$nama 			= $_POST['nama'];
$jenis_kelamin 	= $_POST['jenis_kelamin'];
$tempat_lahir 		= $_POST['tempat_lahir'];
$tanggal_lahir      = $_POST['tanggal_lahir'];
$golongan 		= $_POST['golongan'];

$query = "INSERT INTO pegawai (nip, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, golongan)
          VALUES ('$nip','$nama','$jenis_kelamin','$tempat_lahir', '$tanggal_lahir', '$golongan')";
$result = mysqli_query($conn, $query);

     // periksa query apakah ada error
if(!$result){
     die ("Query gagal dijalankan: ".mysqli_error($conn).
          " - ".mysqli_error($conn));
     }else{
     echo "<script>alert('Data berhasil ditambah.');window.location='index.php';</script>";
     }
?>