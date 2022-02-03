<?php

include "database.php";

//mengecek koneksi
if (!$koneksi){
	echo "Koneksi database gagal : " . mysqli_connect_error();}

//nyimpan data ke dalam varibel
$id 			= $_POST['id'];
$nisn 			= $_POST['nisn'];
$nama_lengkap 	= $_POST['nama_lengkap'];
$nomer_hp		= $_POST['nomer_hp'];

//query SQL
$query = "UPDATE tbl_user SET nisn='$nisn',nama_lengkap='$nama_lengkap',nomer_hp='$nomer_hp' WHERE id='$id';

// var_dump($query);die;

//proses masuknya data
if (isset($_POST['simpan'])) {
	mysqli_query($koneksi, $query);
	echo "Berhasil Tersimpan";
	header("location: tampil.php");
}else{
	echo "data gagal disimpan";
}
?>