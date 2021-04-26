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