<?php
	
	$url      = "127.0.0.1";
	$database = "presensi";
	$username = "root";
	$password = "";

	$con = mysqli_connect($url, $username, $password, $database);

	if(!$con) {
		die("Koneksi gagal: ".$con->connect_error);
	}

	$method = $_SERVER['REQUEST_METHOD'];
	if($method == "GET"){
		$sql = "SELECT * FROM usertable";
		$hasil = mysqli_query($con, $sql);
		$rows = array();

		if(mysqli_num_rows($hasil) > 0){
			while($r = mysqli_fetch_assoc($hasil)){
				array_push($rows, $r);
			}
			print json_encode($rows);
		}else {
			echo "Tidak ada data";
		}
	}
	else if($method == "POST"){
		$name = $_POST['nama'];
		$pin  = $_POST['pin'];

		$sql_insert = "INSERT INTO usertable (nama, pin) values ('$name', '$password')";

		if(mysqli_query($con, $sql_insert)){
			echo "Datam berhasil ditambahkan ke database";
		}else{
			echo "ERROR: $sql_insert tidak jalan".mysqli_error($con);
		}
	}
	mysqli_close($con);

?>