<?php 
//memulai session yang disimpan pada browser
session_start();

//cek apakah sesuai status sudah login? kalau belum akan kembali ke form login
if($_SESSION['status']!="sudah_login"){
//melakukan pengalihan
header("location:indexadmin.php");
} 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
    <link rel="stylesheet" href="style.css"> <!--memanggil file css untuk style-->
</head>
<body>
    <section>
	<h1>Selamat datang : <?php echo $_SESSION['nama']; ?></h1>
	<br>
	<h2>List Kontak</h2>
	<table border="1">
		<tr><th>NO</th><th>ID</th><th>NAMA</th><th>JENIS KELAMIN</th>
		<th>EMAIL</th><th>ALAMAT</th><th>KOTA</th><th>PESAN</th></tr>
	<?php
	//menghubungkan dengan file lain
	include 'koneksi.php';
	//mengirim query pada database
	$kontak = mysqli_query($koneksi,"SELECT * from kontak");
	$no=1;
	//menampilkan data
	foreach($kontak as $row){
	    $jkel = $row['jkel']=='P'?'Perempuan':'Laki-laki';
	    echo "<tr>
	    <td>$no</td>
	    <td>".$row['id']."</td>
	    <td>".$row['nama']."</td>
	    <td>".$jkel."</td>
	    <td>".$row['email']."</td>
	    <td>".$row['alamat']."</td>
	    <td>".$row['kota']."</td>
	    <td>".$row['pesan']."</td>
	    </tr>";
	    $no++;
	}
	?>
	</table>

	<br>
	<a href="logout.php">Klik disini untuk logout.</a>
    </section>
</body>
</html>