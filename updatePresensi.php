<?php
	
	include "connect.php";

	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	mysqli_query($connect, "UPDATE pengguna SET nama='$nama', alamat='$alamat' where id = '$id'");

	header("location:presensi.php?pesan=update");
?>