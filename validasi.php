<?php
	
	session_start();

	include "connect.php";
  

    	$user = $_POST['user'];
    	$pass = $_POST['pass'];
    	$sql = "select * from usertable where pin = '$pass' and nama = '$user'";

    	$cek = mysqli_num_rows($connect, $sql);

    	if($cek > 0) {

    		header("location:login.php");

    	} else {

    		$_SESSION['user'] = $user;
    		header("location:home.php");
    	}

?>