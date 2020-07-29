<?php
	
	session_start();

	include "connect.php";
	
	$id		   = $_POST['id'];
	$npresensi = $_POST['npresensi'];
	$pj 	   = $_POST['pj'];
	$tanggal   = $_POST['tanggal'];

	$sql = "select * from agenda where id = '$id'";
    
	$result = mysqli_query($connect, $sql);
	$nm = mysqli_num_rows($result);

	if ($nm == true) {
		echo "<h2> ID Presensi telah ada </h2> </br><a href = 'lihatagenda.php'> Lihat </a>";
	} else {
		$in = "INSERT INTO agenda (id, namaagenda, pj, tanggal ) VALUES ('$id', '$npresensi', '$pj', '$tanggal')";
		mysqli_query($connect, $in);
    	header('Location: Look.php?status=sukses');
	}

?>