<!DOCTYPE html>
<head>
	<link rel="stylesheet" type=" text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/kustom.css">
	<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">
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
					<li class="active"><a href="photos.php">Photos</a></li>
					<li><a href="videos.php">Videos</a></li>
					<li><a href="fucktric.php">Fucktric</a></li>
					<li><a href="ommunity.php">Community</a></li>
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
							Photos
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
					<!-- Photo Galery -->
					<div class="col-md-4">
						<a href="foto/r5.jpg" rel="prettyPhoto[scratch]" title="Student Scratch 11">
							<img class="img-responsive" src="foto/r5.jpg" alt="">
						</a>
					</div>
					<div class="col-md-4">
						<a href="foto/r5.jpg" rel="prettyPhoto[scratch]" title="Student Scratch 11">
							<img class="img-responsive" src="foto/r5.jpg" alt="">
						</a>
					</div>
					<div class="col-md-4">
						<a href="foto/r5.jpg" rel="prettyPhoto[scratch]" title="Student Scratch 11">
							<img class="img-responsive" src="foto/r5.jpg" alt="">
						</a>
					</div>
					<div class="col-md-4">
						<a href="foto/r5.jpg" rel="prettyPhoto[scratch]" title="Student Scratch 11">
							<img class="img-responsive" src="foto/r5.jpg" alt="">
						</a>
					</div>
					<div class="col-md-4">
						<a href="foto/r5.jpg" rel="prettyPhoto[scratch]" title="Student Scratch 11">
							<img class="img-responsive" src="foto/r5.jpg" alt="">
						</a>
					</div>
					<div class="col-md-4">
						<a href="foto/r5.jpg" rel="prettyPhoto[scratch]" title="Student Scratch 11">
							<img class="img-responsive" src="foto/r5.jpg" alt="">
						</a>
					</div>
					<div class="col-md-4">
						<a href="foto/r5.jpg" rel="prettyPhoto[scratch]" title="Student Scratch 11">
							<img class="img-responsive" src="foto/r5.jpg" alt="">
						</a>
					</div>
					<div class="col-md-4">
						<a href="foto/r5.jpg" rel="prettyPhoto[scratch]" title="Student Scratch 11">
							<img class="img-responsive" src="foto/r5.jpg" alt="">
						</a>
					</div>
					<div class="col-md-4">
						<a href="foto/r5.jpg" rel="prettyPhoto[scratch]" title="Student Scratch 11">
							<img class="img-responsive" src="foto/r5.jpg" alt="">
						</a>
					</div>
					<!-- Photo Galery End -->
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
	<!-- Body end <-->
	<!-- footer -->
	<div id="footer">
		<h5>&copy; 2017 all wheels Indonesian.</h5>
	</div>

</div>
<!-- Scrip SLider -->
<script>
	var myIndex = 0;
// 	carousel();

// 	function carousel() {
// 		var i;
// 		var x = document.getElementsByClassName("mySlides");
// 		for (i = 0; i < x.length; i++) {
// 			x[i].style.display = "none";  
// 		}
// 		myIndex++;
// 		if (myIndex > x.length) {myIndex = 1}    
// 			x[myIndex-1].style.display = "block";  
//     setTimeout(carousel, 4000); // Change image every 2 seconds
// }
</script>
<!-- scrip slider end -->
<!-- JQuery -->
<script src="js/jquery-2.2.4.min.js"></script>
<!-- prettyPhoto -->
<script src="js/jquery.prettyPhoto.js"></script>

<script>
	$(document).ready(function(){
		$("a[rel^='prettyPhoto']").prettyPhoto({
			social_tools: ''
		});
	});
</script>
</body>
</html>