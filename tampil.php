<h2>Data User</h2>

<table border="2">
 <tr>
 	<th>No</th>
 	<th>NISN</th>
 	<th>Nama</th>
 	<th>No Hp</th>
   <th>Aksi</th>
 </tr>

<?php 
include 'database.php';

$no=1;
$ambil_data = mysqli_query ($koneksi, "SELECT * FROM tbl_user");
while ($tampil = mysqli_fetch_array($ambil_data)){
?>

 <tr>
 	<td><?php echo $no++ ?></td>
 	<td><?= $tampil['nisn']?></td>
 	<td><?= $tampil['nama_lengkap']?></td>
 	<td><?= $tampil['nomer_hp']?></td>
   <td>
      <a href="tampil-edit.php?id=<?= $tampil['id']?>">Edit</a> | 
      <a href="delete.php?id=<?= $tampil['id']?>">Hapus</a>
   </td>
 </tr>

<?php
    };
?>
</table>
<a href="index.html">back</a>
