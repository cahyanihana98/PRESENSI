<?php

	session_start();

	$con = mysqli_connect('localhost', 'root', '');
	mysqli_select_db($con, 'presensi');

	$name = $_POST['name'];
	$password = $_POST['pin'];

	$n = "select * from usertable where nama = '$name'";
    
	$result = mysqli_query($con, $n);
	$nm = mysqli_num_rows($result);

	if($nm == true){
		echo "<h2> Pengguna telah ada </h2> </br><a href = 'daftar.html'> Kembali </a>";
	}
	else{
		$reg = "insert into usertable (nama, pin) values ('$name', '$password')";
		mysqli_query($con, $reg);
		echo "<h2> Registrasi Sukses </h2> </br> Silahkan <a href = 'login.html'> Login </a>";
	}


?>