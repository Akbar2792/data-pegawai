<?php
$servername = "localhost";
$database 	= "db_pegawai";
$username 	= "root";
$password 	= "";

$conn = mysqli_connect($servername, $username, $password, $database);

if(mysqli_connect_error()){
	die("Gagal koneksi ke database:".mysqli_connect_error());
}
?>