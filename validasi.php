<?php
	
	session_start();

	$con = mysqli_connect('localhost', 'root', '');
	mysqli_select_db($con, 'presensi');
  

    	$user = $_POST['user'];
    	$pass = $_POST['pass'];
    	$sql = "select * from usertable where pin = '$pass' and nama = '$user'";

    	$cek = mysqli_num_rows($sql);

    	if($cek > 0) {

    		header("location:login.php");

    	} else {

    		$_SESSION['user'] = $user;
    		header("location:home.php");
    	}

?>