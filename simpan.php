<?php
include 'konek.php';
 
	$id_kampus = $_GET['id'];
	// $id_follow = $_POST['id_follow'];
	// $nama_kampus = $_POST['nama_kampus'];
	// $status = $_POST['status'];
	// $akreditas = $_POST['akreditasi'];
	// $alamat = $_POST['alamat'];
		// echo $id_customer." dan ".$nomor_telepon." dan ".$nama." dan ".$alamat;

	// die("file tidak ditemukan $id_kampus");

	// mysqli_query($connect,"UPDATE kampus set id_follow='0' WHERE nama_kampus='$nama_kampus'");
	mysqli_query($connect,"UPDATE kampus set id_follow = '0' where id_kampus = '$id_kampus'");
 
// mengalihkan halaman kembali ke index.php
header("location:home.php");
 
?>