<?php
include 'koneksi.php';
//menyimpan data ke dalam variabel
$id     =$_POST['id'];
$nama   =$_POST['nama'];
$jkel   =$_POST['jkel'];
$email  =$_POST['email'];
$alamat =$_POST['alamat'];
$kota   =$_POST['kota'];
$pesan  =$_POST['pesan'];
//query sql untuk insert data
$query="INSERT INTO kontak SET id='$id', 
nama='$nama', jkel='$jkel', email='$email', 
alamat='$alamat', kota='$kota', pesan='$pesan'";
mysqli_query($koneksi, $query);
//mengalihkan ke halaman index.php
header ("location:index.php");
?>