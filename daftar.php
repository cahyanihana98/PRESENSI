<?php

	session_start();

	include "connect.php";

	$name	  = $_POST['name'];
	$password = md5($_POST['pin']);

	$n = "select * from usertable where nama = '$name'";
    
	$result = mysqli_query($connect, $n);
	$nm = mysqli_num_rows($result);

	if($nm == true){
		echo "<h2> Pengguna telah ada </h2> </br><a href = 'daftar.html'> Kembali </a>";
	}
	else{
		$reg = "insert into usertable (nama, pin) values ('$name', '$password')";
		mysqli_query($connect, $reg);
		echo "<h2> Registrasi Sukses </h2> </br> Silahkan <a href = 'login.html'> Login </a>";
	}


?>