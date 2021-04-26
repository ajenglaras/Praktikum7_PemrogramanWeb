<?php 
//pendeklarasian variabel untuk koneksi
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "praktikum";
    //koneksi pada database
	$koneksi = mysqli_connect($host, $user, $pass, $db);

	if(!$koneksi) { //jika koneksi gagal
		die("Koneksi gagal : ".mysql_connect_error());
	}
?>