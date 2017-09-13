<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">

	<title>form|BosanKuliah</title>
</head>

<body>
	<div id="pembungkus" class="container" >
		<div id="raiso">
			<h1 class="judul"> SISTEM PENOMORRAN SURAT</h1>
			<h5 class="judul"><!-- Hari gini jangan ribet. --></h5>
		</div>
		<!-- <nav id="navbar">
			<ul  class="judul nav nav-pills">
				<li role="presentation"><a href="index.html">Beranda</a></li>
				<li role="presentation" class="active"><a href="tambahbaru.html">Tambah Baru</a></li>
				<li role="presentation"><a href="tampil.html">Tampilkan Semua</a></li>
			</ul>
		</nav> -->
		<ol class="breadcrumb marginnol">
			<li clas="active"><a href="index.php">Home</a></li>
			<li><a href="tambahbaru.php">Tambah baru</a></li>
			<li><a href="tampil.php">Tampilkan semua</a></li>
			
		</ol>
		<div id="konten">
			<h3>Penambahan Nomor surat Baru</h3>
<!-- 			<div class="row">
				<div class="col-md-4">
				</div>
				<div class="col-md-4">
				</div>
				<div class="col-md-4">
					<h5 class="text-left"> No.</h5>
					<input class="form-control table-no" type="text" placeholder="300" readonly>
				</div>
				<div class="clearfix"></div>
				<br>
				<div class="col-md-12">
					<form class="form-horizontal">
					 <div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">Tangal Surat</label>
							<div class="col-sm-10">
								<input class="form-control table-no" type="text" value="<?php echo date("d/m/Y"); ?>" readonly>
							</div>
						</div>
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">Nomor Surat</label>
							<div class="col-sm-10">
								<input class="form-control table-no" type="text" placeholder="300" readonly>
							</div>
						</div>
						<div class="form-group">
							<label for="inputPassword3" class="col-sm-2 control-label">Prihal</label>
							<div class="col-sm-10">
								<textarea class="form-control" rows="3px" placeholder="Mengenai apa surat ini
								"></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="inputPassword3" class="col-sm-2 control-label">Kepada</label>
							<div class="col-sm-10">
								<textarea class="form-control" rows="1px" placeholder="Kepada siapa surat akan dikirim"></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="inputPassword3" class="col-sm-2 control-label">Lampiran</label>
							<div class="col-sm-10">
								<input type="number" name="lampiran" placeholder="Masukan Jumlah lampiran" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<label for="inputPassword3" class="col-sm-2 control-label">Aprovall</label>	
							<div class="col-sm-10">
								<div class="radio">
									<label>
										<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
										General Manager
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
										Manager
									</label>
								</div>								
								<div class="radio">
									<label>
										<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
										Supervisor
									</label>
								</div>								
							</div>
						</div>
						<div class="form-group">
							<label for="inputPassword3" class="col-sm-2 control-label">PIC</label>
							<div class="col-sm-10">
								<input type="text" name="lampiran" placeholder="Pembuat Surat" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<label for="inputPassword3" class="col-sm-2 control-label">Keterangan</label>
							<div class="col-sm-10">
								<input type="text" name="lampiran" placeholder="Keterangan" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<label for="inputPassword3" class="col-sm-2 control-label">Preview</label>
							<div class="col-sm-10">
								<input type="text" name="lampiran" placeholder="300/GM/Bosankuliah/VIII/2016" class="form-control" readonly="">
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" class="btn btn-default">Tambah Baru</button>
							</div>
						</div>
					</form>
				</div>
			</div>
 -->			<!-- isi kontan dimulai dari sini -->
<?php
if (isset($_POST['tombol_input'])) {
	$surat->input_surat($_POST['aproval'], $_POST['prihal'], $_POST['pic']);
}
 ?>
 			<!-- koneksi tampil pic -->
 			<?php
			 $data_select = $pic->select_pic(); 
			 ?>
 			<div id="contact_form">
			<form action="" method="post">
				Prihal: <input type="text" name="prihal">
				Aproval: <input type="text" name="aproval">
				pic: 
				<select class="" name="pic">
				 <?php foreach ($data_select as $value): ?>
				 	<option value="<?php echo $value['id_pic']; ?>"><?php echo $value['nama']; ?></option>
				 <?php endforeach ?>
				</select>
				<input type="submit" name="tombol_input">
			</form> 				
 			</div>




			<!-- akhir isi konten -->
		</div>
		<div id="footer">
			<p align="center">Copyright by www.bosankuliah.com 2016</p>
		</div>
	</div>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
