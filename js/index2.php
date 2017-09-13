,,<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">

	<title>home|BosanKuliah</title>
</head>

<body>
	<div id="pembungkus" class="container" >
		<div id="raiso" class="">
			<h1 class="judul"> SISTEM PENOMORRAN SURAT</h1>
			<h5 class="judul"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima vitae nesciunt reiciendis corrupti fugit sint illum, itaque natus nisi commodi praesentium, perferendis ipsum nulla laboriosam alias omnis soluta, labore autem.</h5>
		</div>
		<!-- <nav id="navbar">
			<ul  class="judul nav nav-pills">
				<li role="presentation" class="active"><a href="index.html">Beranda</a></li>
				<li role="presentation"><a href="tambahbaru.html">Tambah Baru</a></li>
				<li role="presentation"><a href="tampil.html">Tampilkan Semua</a></li>
			</ul>
		</nav> -->
		<ol class="breadcrumb marginnol">
			<li clas="active"><a href="index.php">Home</a></li>
			<li><a href="tambahbaru.php">Tambah baru</a></li>
			<li><a href="tampil.php">Tampilkan semua</a></li>
			
		</ol>
		<div id="konten" class="">
			<!-- isi kontan dimulai dari sini -->
			<h3 class="text-center">Nomor surat tersedia untuk hari ini : </h3>
			<br>
			<input class="form-control" type="text" placeholder="Readonly input here…" readonly>
			<br>
			<div class="text-center">
				<a type="button" class="btn btn-abang" href="tambahbaru.php">Tambah Baru</a>
			</div>
			<br>
			<!-- Nomor Surat Baru-baru ini : -->
			<br>
			<!-- <?php
				// instance object
			
				$data_approval = $approval->tampil_approval();
				print_r(count($data_approval));
			?> -->
			<!-- <table class="table table-striped">
				<thead>
					<tr>
						<th>ID</th>
						<th>NAMA</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($data_approval as $data): ?>
						<tr>
							<td><?php echo $data['id_approval']; ?></td>
							<td><?php echo $data['nama_approval']; ?></td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table> -->

			<?php
			 $data_surat = $surat->tampil_surat(); 
			 ?>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>No.</th>
						<th>Nomor Surat</th>
						<th>Aprov</th>
						<th>Prihal</th>
						<th>Bulan</th>
						<th>Tahun</th>
						<th></th>
						<th>PIC</th>
					</tr>
				</thead>
				<tbody>
					<!-- pengambilan database dimulai				 -->
				 	<?php foreach ($data_surat as $value): ?>
					<tr>
						<td>3</td>
						<td><?php echo $value['id_surat']; ?></td>
						<td><?php echo $value['nama_approval']; ?></td>
						<td><?php echo $value['prihal']; ?></td>
						<td><?php echo romanic_number(substr($value['tanggal'],5,2)); ?></td>
						<td><?php echo substr($value['tanggal'],0,4); ?></td>
						<td></td>
						<td><?php echo $value['nama']; ?></td>
					</tr>
				 	<?php endforeach ?>
				 	<!-- pengambilan database barakhir -->
					</tr>
				</tbody>
			</table>
			<div class="text-right">
				<a type="button" class="btn btn-abang" href="tampil.php">Tampilkan Semua</a>
			</div>
			<!-- akhir isi konten -->
		</div>
		<div id="footer">
			<p align="center">Copyright www.bosankuliah.com 2016</p>
		</div>
	</div>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.min.js"></script>
</body>
</html>