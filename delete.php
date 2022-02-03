<?php
include 'database.php';

//delete file
$id 		= $_GET['id'];
$delete 	= "DELETE FROM tbl_user WHERE id='$id'";
mysqli_query($koneksi, $delete);

header("location:tampil.php");

?>