<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>

	<h1>Selamat datang, <?php echo $_SESSION['user']; ?> </h1>
</br>
	<a href="tambahagenda.html"><h2 align="center">Tambah Agenda</h2></a>
</br>
	<a href="lihatagenda.php"><h2 align="center">Lihat Agenda</h2></a>	
</br>
	<a href="logout.php"> Logout </a>

</body>
</html>
