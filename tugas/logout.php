<?php 
// mengaktifkan sesi
session_start();
 
// menghapus semua sesi
session_destroy();
 
// mengalihkan halaman login
header("location:indexadmin.php?pesan=anda berhasil logout.");
?>