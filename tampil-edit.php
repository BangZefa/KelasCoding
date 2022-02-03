<html>
	<head>
		<title>Coding</title>
	</head>
	<body><center>
		<h2>Edit Data</h2>


<?php 
include 'database.php';

$id 		= $_GET['id'];
$data 		= mysqli_query($koneksi, "SELECT * FROM tbl_user WHERE id='$id'") ;
while($data_lama = mysqli_fetch_array($data)){ 
	?>

		<form method="post" action="">
			<input type="number" name="nisn" value="<?= $data_lama['nisn'];?>"><br><br>
			<input type="text" name="nama_lengkap" value="<?= $data_lama['nama_lengkap']?>"><br><br>
			<input type="number" name="nomer_hp" value="<?= $data_lama['nomer_hp']?>"><br><br>
			<button type="submit" name="simpan">Simpan</button>
		</form>
		<a href="tampil.php">Data</a>
	</center></body>
</html>

<?php
}
?>