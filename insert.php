<?php

include "database.php";

//mengecek koneksi
if (!$koneksi){
	echo "Koneksi database gagal : " . mysqli_connect_error();}

//nyimpan data ke dalam varibel
$nisn 			= $_POST['nisn'];
$nama_lengkap 	= $_POST['nama_lengkap'];
$nomer_hp		= $_POST['nomer_hp'];

//query SQL
$query = "INSERT INTO tbl_user (nisn,nama_lengkap,nomer_hp) VALUES ('$nisn','$nama_lengkap','$nomer_hp')";

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