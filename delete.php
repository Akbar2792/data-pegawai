<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$id_pegawai   = $_GET['id_pegawai'];
// query SQL untuk insert data
$query="DELETE from pegawai WHERE id_pegawai='$id_pegawai'";
mysqli_query($conn, $query);

// mengalihkan ke halaman index.php
header("location:index.php");
?>