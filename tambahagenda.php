<?php


	$con = mysqli_connect('localhost', 'root', '');
	mysqli_select_db($con, 'presensi');

	$npresensi = $_POST['npresensi'];
	$pj = $_POST['pj'];
	$tanggal = $_POST['tanggal'];

	$sql = "select * from agenda where namaagenda = '$npresensi'";
    
	$result = mysqli_query($con, $sql);
	$nm = mysqli_num_rows($result);

	if($nm == true){
		echo "<h2> Presensi telah ada </h2> </br><a href = 'lihatagenda.php'> Lihat </a>";
	}
	else{
		$in = "insert into agenda (namaagenda, pj, tanggal ) values ('$npresensi', '$pj', '$tanggal')";
		mysqli_query($con, $in);
		echo "<h2> Presensi Berhasil Dibuat </h2> </br> Silahkan <a href = 'lihatagenda.php'> Lihat </a>";
	}


?>