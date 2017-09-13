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
					<li class="active"><a href="article.php">Article</a></li>
					<li><a href="photos.php">Photos</a></li>
					<li><a href="videos.php">Videos</a></li>
					<li><a href="fucktric.php">Fucktric</a></li>
					<li><a href="community.php">Community</a></li>
				</ul>
			</div>
		</nav>
		<!-- nav end -->
		<!-- konten -->
		<div class="container" >
			<div class="row">
				<ul class="breadcrumbs breadcrumb">
					<li>
						Beranda
					</li>
					<li>
						Article
					</li>
				</ul>
				<div id="konten" class="col-md-8">
				</div>			
			</div>
		</div>
		<!-- Judul artikel -->
		<div class="container" id="artikel" >
			<div class="row">
				<div class="col-md-9">
					<h2 class="remove"> 
						<a href="artikel.php" class="fontartikel">Honda Civic Nouva Memang Istimewaa </a>
					</h2>
					<p class="afterr"></p>
					<h4>
						<img src="foto/re2.jpg" class="ctr" alt="">
						<p class="paragraf">
							Mobil civic nova menjadi idola bagi para kaum muda yang suka dengan dunia sporty, karena memang desain mobil civic nova ini dibuat dengan konsep sporty. Hal itu dapat dilihat dari tampilan mobil civic nova yang ceper dan panjang serta di dukung dengan 2 pintu mobil. Mobil 2 pintu sudah pasti didesain untuk penggemar mobil sport, seperti mobil civic nova yang memang asli 2 pintu dari pabrikannya.
							<br>
							<br>
							Mobil civic nova menjadi idola bagi para kaum muda yang suka dengan dunia sporty, karena memang desain mobil civic nova ini dibuat dengan konsep sporty. Hal itu dapat dilihat dari tampilan mobil civic nova yang ceper dan panjang serta di dukung dengan 2 pintu mobil. Mobil 2 pintu sudah pasti didesain untuk penggemar mobil sport, seperti mobil civic nova yang memang asli 2 pintu dari pabrikannya.
							<br>
							<br>
							Mobil civic nova menjadi idola bagi para kaum muda yang suka dengan dunia sporty, karena memang desain mobil civic nova ini dibuat dengan konsep sporty. Hal itu dapat dilihat dari tampilan mobil civic nova yang ceper dan panjang serta di dukung dengan 2 pintu mobil. Mobil 2 pintu sudah pasti didesain untuk penggemar mobil sport, seperti mobil civic nova yang memang asli 2 pintu dari pabrikannya.
							<br>
							<br>
							Mobil civic nova menjadi idola bagi para kaum muda yang suka dengan dunia sporty, karena memang desain mobil civic nova ini dibuat dengan konsep sporty. Hal itu dapat dilihat dari tampilan mobil civic nova yang ceper dan panjang serta di dukung dengan 2 pintu mobil. Mobil 2 pintu sudah pasti didesain untuk penggemar mobil sport, seperti mobil civic nova yang memang asli 2 pintu dari pabrikannya.
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
										<a class="fontsatu" href="#">Civic Nouva memang Istimewa</a>
									</h3>
									<span class="post-date"> 
										21 Juni 2017
									</span>
								</div>							
							</div>
						</article>
						<article class="post">
							<div class="post-content">
								<div class="post-title">
									<h2>
										<a class="fontsatu" href="#">New Facelite Honda Vario 125</a>
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
										<a class="fontsatu" href="#">Retorika Bersama MObil Tua</a>
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
										<a class="fontsatu" href="#">Penjualan All New Avansa Kian Melonjak</a>
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
	</div>

	<!-- Judul artikel end? -->
	<!-- end konten -->
	<!-- anyar end -->
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