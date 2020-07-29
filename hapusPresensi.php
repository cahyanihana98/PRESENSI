<?php

include "connect.php";

$id = $_GET['id'];
$query = "DELETE FROM pengguna WHERE id='$id'";
mysqli_query($connect, $query);
header('location:presensi.php');

?>
