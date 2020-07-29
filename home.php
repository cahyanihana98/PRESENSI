<?php

session_start();

?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="Stylesheet02.css">
<head>
	<title>Home Page</title>
</head>
<body>

<!--	<h1>Selamat datang <?phpecho $_SESSIONuser]; ?> </h1> !-->

</br>
	<div class="tab" align="center">
		<h2>Absensi</h2>
		<div class="s311c" align="center"></div><br>
		<div class="card"><a href="tambahagenda.html" class="Menu">Buat Presensi</a></div>
		<div class="card"><a href="lihatagenda.php" class="Menu">Manage Presensi</a></div> 	
	</div>
	
	<div class="tab">
		<a href="logout.php" class="link" style="float: right; color: red;"> Log Out </a>	
	</div>
	

</body>
</html>
