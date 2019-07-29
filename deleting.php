<?php

$id=$_GET["id"];
$dbc = mysqli_connect('localhost','archirew_academy','academy','archirew_admins');
$q = "DELETE FROM homework WHERE id='$id'";
	mysqli_query($dbc,$q);
	header('Location:homework.php');
?>