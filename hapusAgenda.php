<?php

include "connect.php";

$id = $_GET['id'];
$query = "DELETE FROM agenda WHERE id='$id'";
mysqli_query($connect, $query);
header('location:lihatagenda.php');

?>
