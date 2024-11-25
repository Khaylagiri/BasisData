<?php 
	$hostname = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'sky';

	$conn = mysqli_connect($hostname, $username, $password, $dbname) or die ('gagal terhubung ke databae');
?>