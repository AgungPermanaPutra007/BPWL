<?php 

$databaseHost = 'localhost';
$databaseName = 'pmb';
$databaseUsername = 'root';
$datababePassword = '';

$conn = new mysqli($databaseHost, $databaseUsername, $datababePassword, $databaseName);
if ($conn -> connect_errno){
	echo die ("Gagal Menghubungkan ke Database ".$conn->connect_error);
}

 ?>