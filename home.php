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
  <style >
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
    <ul class="nav navbar-nav" >
      <li class="active"><a href="home.php">Home</a></li>
      <li><a href=#></a></li>
      <li><a href=#></a></li>
    </ul>
  </div>
</nav>

<div class="container" align="center">
  <h1 align="center"><b>Cari Kampus Impianmu</b></h1>
          <div class="bg-dark">	
          	<form action="home.php" method="post">
    <div class="form-group">
        <?php
        $key="";
        if (isset($_POST['key'])) {
            $key=$_POST['key'];
            echo "Kata Kunci = $key";
        }
        ?>
        <!-- <label for="sel1">Kata Kunci :</label> -->
        <input type="text" placeholder="Cari Nama Kampus" name="key" value="<?php echo $key;?>" class="form-control"required/>
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Cari">
    </div>
    </form>
	
		<?php
		include 'konek.php';
		if (isset($_POST['key'])) {
		$key = $_POST['key'];?>
  <table class="table">
		 <thead>
		<tr >
			<th >Nama Kampus</th>
			<th >Alamat</th>
			<th >Akreditasi</th>
			<th >status</th>
			<th>
			</th>
			<!-- <th><a href="plus.php?id=<?php echo $row['NIK']; ?>" class="btn btn-primary btn-sm "><span class="glyphicon glyphicon-plus"></span> Tambah</a></th> -->
		</tr>
		 </thead>
    <tbody>
		 <?php
		$query = mysqli_query($connect,"SELECT *FROM kampus WHERE nama_kampus LIKE '%$key%' order by nama_kampus asc");

while ($row = mysqli_fetch_array($query)) {
		?>
		 <tr>
			<td ><?php echo $row['nama_kampus'];?></td><!--namaatribut-->
			<td ><?php echo $row['alamat'];?></td>
			<td ><?php echo $row['akreditasi'];?></td>
			<td ><?php echo $row['status'];?></td>
			<td >

       <a href="save.php?id=<?php echo $row['id_kampus']; ?>" class="btn btn-primary btn-sm">
          <span class="glyphicon glyphicon-plus"></span> Ikuti</a>
          <a href="jurusan.php?id=<?php echo $row['id_kampus']; ?>" class="btn btn-success btn-sm">
          <span class="glyphicon glyphicon-list-alt"></span> Lihat Jurusan	</a>
          	</td></tr>
		<?php
	}?>
			 </tbody>
	</table>
	<?php
		}
	?>
			</div>
	</div>	
		
<?php 
		$query = mysqli_query($connect,"SELECT count(*) as total FROM kampus WHERE id_follow = '1'");
		$row=mysqli_fetch_assoc($query);
		if ($row['total']>0) {
			// code...
 ?>
<div class="container" align="center">
<h1><b>Kampus Yang Kamu Ikuti</b></h1>
          <div class="bg-dark">
	<table class="table">
	
		<?php
		include 'konek.php';?>
		 <thead>
		<tr >
			<th >Nama Kampus</th>
			<th >status</th>
			<th >Akreditasi</th>
			<th >Alamat</th>
			<th>
			</th>
			<!-- <th><a href="plus.php?id=<?php echo $row['NIK']; ?>" class="btn btn-primary btn-sm "><span class="glyphicon glyphicon-plus"></span> Tambah</a></th> -->
		</tr>
		 </thead>
    <tbody>
		 <?php  
		$query = mysqli_query($connect,"SELECT *FROM kampus WHERE id_follow = '1'");

		while ($row = mysqli_fetch_array($query)) {
		?>
		 <tr>
			<td ><?php echo $row['nama_kampus'];?></td><!--namaatribut-->
			<td ><?php echo $row['status'];?></td>
			<td ><?php echo $row['akreditasi'];?></td>
			<td ><?php echo $row['alamat'];?></td>
			<td >

				<a href="simpan.php?id=<?php echo $row['id_kampus']; ?>" class="btn btn-danger btn-sm">
          <span class="glyphicon glyphicon-remove"></span> Batal Ikuti	</a>
          <a href="jurusan.php?id=<?php echo $row['id_kampus']; ?>" class="btn btn-success btn-sm">
          <span class="glyphicon glyphicon-list-alt"></span> Lihat Jurusan	</a></td>
		</tr>
		<?php

	}
	?>
			 </tbody>
	</table>
	</div>
	</div>
		<?php  }?>
</body>
</html>