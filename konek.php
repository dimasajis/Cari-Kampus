<?php
$host = "localhost"; 
$user = "root"; 
$pass = "";
$db = "univ";

$connect = mysqli_connect($host,$user,$pass,$db);
/*
if (mysqli_connect_error()) {
	# code...
	echo "Gagal Koneksi".mysqli_connect_error();
}else{
	echo "Terhubung ke Database";
}*/
?>