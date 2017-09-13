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
					<li class="active"><a href="videos.php">Videos</a></li>
					<li><a href="fucktric.php">Fucktric</a></li>
					<li><a href="community.php">Community</a></li>
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
					Videos
				</li>
			</ul>
		</div>			
		</div>
		</div>
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