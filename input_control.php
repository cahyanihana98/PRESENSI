<?php
	
	include "connect.php";

	
	$id 	 = $_POST['id'];
	$nama    = $_POST['nama'];
	$alamat  = $_POST['alamat'];
	$mysqli  = "INSERT INTO pengguna (id, nama, alamat) VALUES ('$id', '$nama', '$alamat')";
	$result  = mysqli_query($connect, $mysqli);
	if ($result) {
    	header('Location: presensi.php?status=sukses');
	} else {
    	header('Location: presensi.php?status=gagal');
	}
	mysqli_close($connect);
?>
