<!DOCTYPE html>
<head>
	<link rel="stylesheet" type=" text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/kustom.css">
	<title>
		Homepage	
	</title>
</head>
<body>
	<!-- body -->
	<div>
		<!-- header -->
		<div id="header" >
			<div class="container paddingbawah">
					<img src="foto/logo2.png" alt="">
			</div>
		</div>
		<!-- navbar -->
		<nav id="navbarlass" class="navbar navbar-default">
			<div class="container">
				<div class="navbar-header">
					<a class="navbar-brand" href="index.php">HOME </a>
				</div>
				<ul class="nav navbar-nav">
					<li><a href="article.php">Article</a></li>
					<li><a href="photos.php">Photos</a></li>
					<li><a href="videos.php">Videos</a></li>
					<li><a href="fucktric.php">Fucktric</a></li>
					<li class="active"><a href="community.php">Community</a></li>
				</ul>
			</div>
		</nav>
		<!-- nav end -->
		<!-- konten -->
		<div class="container">
		<div class="row">
		<div id="konten" class="col-md-8">
			<ul class="breadcrumbs breadcrumb">
				<li>
					Beranda
				</li>
				<li>
					Community
				</li>
			</ul>
		</div>			
		</div>
		</div>
		<!-- anyar end -->
		<!-- Body -->
		<div class="container" id="artikel" >
			<div class="row">
				<div class="col-md-9">
					<h2 class="remove"> 
						<a href="artikel.php" class="fontartikel">Komunitas RX-King Jakarta Tembus 1.000 Anggota</a>
					</h2>
					<p class="afterr"></p>
					<h4>
						<img src="foto/rx.jpg" class="ctr" alt="">
						<p class="paragraf">
							Salah komunitas sepeda motor yang cukup lama keberadaanya di Ibu Kota, King’s Club Djakarta (KCDj) mampu menggenapkan jumlah anggota menjadi 1.000 member. Jumlah tersebut didapat setelah para pengurus berhasil menjaring dan meluluskan 62 dari 73 orang calon anggota KCDj.
							<br>
							<br>
							“KCDj gak ada matinya!” teriak Ahok selaku Sekretaris Panitia Pelantikan. “Pelantikan Angkatan 28 ini, pesertanya sangat antusias mengikuti jalannya acara pelantikan anggota ke-1000. Kami juga mengajarkan apa itu safety riding yang wajib dan menjadi ciri khas KCDj,” tambah Ahok.

							<br>
							<br>
							Sementara itu Teja selaku Ketua Panitia acara menyatakan, kegiatan pelantikan di KCDj tidak ubahnya seperti sebuah proses kelahiran seorang Kinger dalam organisasi yang jelas aturan mainnya untuk menjadi keluarga besar KCDj yang santun dan patuh hukum, melalui proses perkenalan, persabahatan dan persaudaraan.
							<br>
							<br>
							Sebelum melantik 62 anggota baru, rombongan KCDj berangkat secara konvoi dari basecamp komunitas di Parkir Timur Senayan. Para pengurus mengatur calon anggota baru agar iring-iringan berlangsung tertib dan tidak mengganggu penguna jalan lain.							
							<br>
							<br>
							Acara pelantikan sendiri berlangsung secara sederhana di Villa Bukit Zaitun Cilember, yang mampu menampung ratusan RX-King dan puluhan Mobil. Pasalnya banyak para anggota yang membawa serta keluarga.
							<br>
						</p>
					</h4>
					<ul class="medsos">
						<li><a href=""><img src="foto/fb.jpg" alt=""></a></li>
						<li><a href=""><img src="foto/twitter.jpg" alt=""></a></li>
						<li><a href=""><img src="foto/wa.jpg" alt=""></a></li>
						</u>
					</div>
					<div class="col-md-3">
						<div>
							<img src="foto/iklan.jpg" class="ctriklan" alt="">
						</div>
					</div>
					<div class="col-md-4">
						<h2 class="videotitle">
							Artikel Terkait
						</h2>	
						<p class="afterr"></p>
						<article class="post">
							<div class="post-content">
								<div class="post-title">
									<h3>
										<a class="fontsatu" href="#">Brio Indonesia </a>
									</h3>
									<span class="post-date"> 
										30 Juni 2017
									</span>
								</div>							
							</div>
						</article>
						<article class="post">
							<div class="post-content">
								<div class="post-title">
									<h2>
										<a class="fontsatu" href="#">Honda Varios Vario</a>
									</h2>
									<span class="post-date"> 
										09 Mei 2017
									</span>
								</div>							
							</div>
						</article>
						<article class="post">
							<div class="post-content">
								<div class="post-title">
									<h2>
										<a class="fontsatu" href="#">Vegator Jawa Barat</a>
									</h2>
									<span class="post-date"> 
										17 April 2017
									</span>
								</div>							
							</div>
						</article>
						<article class="post">
							<div class="post-content">
								<div class="post-title">
									<h2>
										<a class="fontsatu" href="#">Si Pitung Wonosobo</a>
									</h2>
									<span class="post-date"> 
										28 Maret 2017
									</span>
								</div>							
							</div>
						</article>					
					</div>

				</div>
			</div>	
		</div>
		<!-- Body end -->
		<!-- footer -->
		<div id="footer">
			<h5>&copy; 2017 all wheels Indonesian.</h5>
		</div>

	</div>
	<!-- Scrip SLider -->
	<script>
		var myIndex = 0;
		carousel();

		function carousel() {
			var i;
			var x = document.getElementsByClassName("mySlides");
			for (i = 0; i < x.length; i++) {
				x[i].style.display = "none";  
			}
			myIndex++;
			if (myIndex > x.length) {myIndex = 1}    
				x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 4000); // Change image every 2 seconds
}
</script>
<!-- scrip slider end -->
</body>
</html>