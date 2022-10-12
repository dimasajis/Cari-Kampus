<!DOCTYPE html>
<html lang="en">

<head>
	<title>Bootstrap Example</title>
	<link href="desain.css" rel="stylesheet">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style type="">
		.bg-dark {
  			background-color: #252525;
  			color: white;
  		}
  </style>
</head>

<body>

	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="home.php">Cari Kampus</a>
			</div>
		</div>
	</nav>

	<div class="container" align="center">
		<h1 align="center"><b>List Jurusan</b> </h1>
			<?php 
				include 'konek.php';
					$id_kampus = $_GET['id'];
					$query = mysqli_query($connect, "SELECT * FROM kampus where id_kampus='$id_kampus'");
					while ($row = mysqli_fetch_array($query)) {
			 ?>
			 		<h3><b><?= $row['nama_kampus'] ?></b> </h3>
			 	<?php  }?>
		<div class="bg-dark">
			<table ALIGN="center" class="table">

				<thead>
					<tr>
						<th>Jurusan</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$id_kampus = $_GET['id'];
					$query = mysqli_query($connect, "SELECT kampus.nama_kampus as nama_kampus,jurusan.nama_jurusan as nama_jurusan FROM kampus JOIN jurusan ON kampus.id_kampus = jurusan.id_kampus where kampus.id_kampus='$id_kampus'");
					while ($row = mysqli_fetch_array($query)) {
					?>
						<tr>
							<td><?php echo $row['nama_jurusan']; ?></td>
						</tr>
					<?php

					}
					?>
				</tbody>
			</table>
		</div>
		<a href="home.php?id=<?php echo $row['id_kampus']; ?>" class="btn btn-primary btn-sm">
          <span class="glyphicon glyphicon-chevron-left"></span>Kembali</a>
</body>

</html>