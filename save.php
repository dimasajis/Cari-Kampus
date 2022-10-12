<?php
include 'konek.php';
 
 	$id_kampus = $_GET['id'];
	// $nama_kampus = $_POST['nama_kampus'];
	// $id_follow = $_POST['id_follow'];
		// echo $id_customer." dan ".$nomor_telepon." dan ".$nama." dan ".$alamat;

	// die("$id_kampus");

mysqli_query($connect,"UPDATE kampus set id_follow='1' where id_kampus='$id_kampus'");
 
// mengalihkan halaman kembali ke index.php
header("location:home.php");
 
?>