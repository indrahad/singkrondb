<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">

	<title>Tampil|BosanKuliah</title>
</head>

<body>
	<div id="pembungkus" class="container" >
		<div id="raiso">
			<h1 class="judul"> SISTEM PENOMORRAN SURAT</h1>
			<h5 class="judul">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda voluptatem dolore consequuntur sapiente veritatis, iste consequatur consectetur libero porro. Ad totam ea, doloribus tenetur quod accusantium molestias enim fugiat tempore.</h5>
		</div>
		<!-- <nav id="navbar">
			<ul  class="judul nav nav-pills">
				<li role="presentation"><a href="index.html">Beranda</a></li>
				<li role="presentation"><a href="tambahbaru.html">Tambah Baru</a></li>
				<li role="presentation" class="active"><a href="tampil.html">Tampilkan Semua</a></li>
			</ul>
		</nav> -->
		<ol class="breadcrumb marginnol">
			<li clas="active"><a href="index.php">Home</a></li>
			<li><a href="tambahbaru.php">Tambah baru</a></li>
			<li><a href="tampil.php">Tampilkan semua</a></li>
			
		</ol>
		<div id="konten">
			<!-- isi kontan dimulai dari sini -->
			<h3 align="cen">Pratampil Nomor surat :</h3>
			<div class="row">
			<div class="col-sm-2"></div>
			<div class="col-sm-2"></div>
			<div class="col-sm-2"></div>
			<div class="col-sm-2"></div>
			<div class="col-sm-2">
				<input type="text" class="form-control" placeholder="Search">
				</div>			
				<div class="col-sm-10">
				<br>
				<table class=" table table-striped">						
						<thead>
							<tr>
								<th>No.</th>
								<th>Nomor Surat</th>
								<th>Aprov</th>
								<th>Corp</th>
								<th>Bulan</th>
								<th>Tahun</th>
								<th></th>
								<th>PIC</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1.</td>
								<td>0865</td>
								<td>SPV</td>
								<td>Bosankuliah</td>
								<td>VIII</td>
								<td>2016</td>
								<td></td>
								<td>Noname</td>
							</tr>
							<tr>
								<td>2.</td>
								<td>0865</td>
								<td>SPV</td>
								<td>Bosankuliah</td>
								<td>VIII</td>
								<td>2016</td>
								<td></td>
								<td>Noname</td>
							</tr>
							<tr>
								<td>3.</td>
								<td>0865</td>
								<td>SPV</td>
								<td>Bosankuliah</td>
								<td>VIII</td>
								<td>2016</td>
								<td></td>
								<td>Noname</td>
							</tr>
							<tr>
								<td>4.</td>
								<td>0865</td>
								<td>SPV</td>
								<td>Bosankuliah</td>
								<td>VIII</td>
								<td>2016</td>
								<td></td>
								<td>Noname</td>
							</tr>
							<tr>
								<td>5.</td>
								<td>0865</td>
								<td>SPV</td>
								<td>Bosankuliah</td>
								<td>VIII</td>
								<td>2016</td>
								<td></td>
								<td>Noname</td>
							</tr>
						</tbody>

					</table>
				</div>
			</div>
			<button type="button" class="btn btn-abang">Cetak Nomor Surat</button>
			<button type="button" class="btn btn-abang">Cetak Seluruh Nomor Surat</button>
		</div>
		<div id="footer">
			<p align="center">Copyright @epurworejo.com</p>
		</div>
	</div>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.min.js"></script>
</body>
</html>