<?php
	
	include "connect.php";

	$id      = $_POST['id'];
	$nama 	 = $_POST['npresensi'];
	$pj		 = $_POST['pj'];
	$tanggal = $_POST['tanggal'];
	mysqli_query($connect, "UPDATE agenda SET namaagenda = '$nama', pj = '$pj', tanggal = '$tanggal' where id = '$id'");

	header("location:lihatagenda.php?pesan=update");
?>