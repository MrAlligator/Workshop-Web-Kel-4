<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/logosmk.png" type="image/png">
    <title>SMK Darus Salam</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="vendors/linericon/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="vendors/animate-css/animate.css">
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!--================ Start Header Menu Area =================-->
    <header class="header_area">
		<div class="main_menu">
			<div class="search_input" id="search_input_box">
				<div class="container">
					<form class="d-flex justify-content-between" method="" action="">
						<input type="text" class="form-control" id="search_input" placeholder="Cari">
						<button type="submit" class="btn"></button>
						<span class="lnr lnr-cross" id="close_search" title="Tutup"></span>
					</form>
				</div>
			</div>

			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.php"><img src="img/logo2.png" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
						aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item"><a class="nav-link" href="../admin/aturdata.php">KEMBALI</a></li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								aria-expanded="false">Data</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="siswa2.php">Siswa</a></li>
									<li class="nav-item"><a class="nav-link" href="guru2.php">Guru</a></li>
									<li class="nav-item"><a class="nav-link" href="karyawan2.php">Karyawan</a></li>
								</ul>
							</li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								aria-expanded="false">Jurusan</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="multimedia2.php">Multimedia</a></li>
									<li class="nav-item"><a class="nav-link" href="#">Teknik Pemesinan</a></li>
								</ul>
							</li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								aria-expanded="false">Galeri</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="photo2.php">Foto</a></li>
									<li class="nav-item"><a class="nav-link" href="video2.php">Video</a></li>
								</ul>
							</li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								aria-expanded="false">Info</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="pengumuman2.php">Pengumuman</a></li>
									<li class="nav-item"><a class="nav-link" href="berita2.php">Berita</a></li>
								</ul>
							</li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								aria-expanded="false">Prestasi</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="akademik2.php">Akademik</a></li>
									<li class="nav-item"><a class="nav-link" href="nonakademik2.php">Non - Akademik</a></li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link search" id="search">
									<i class="lnr lnr-magnifier"></i>
								</a>
							</li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								aria-expanded="false">ADMIN</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
    <!--================ End Header Menu Area =================-->

    <!--================Home Banner Area =================-->
    
    <!--================End Home Banner Area =================-->
	<!-- Start Sample Area -->
	<!-- End Sample Area -->
	<!-- Start Align Area -->
	<div class="whole-wrap">
		<div class="container">
			<div class="section-top-border">
				<h3 class="title_color text-center">GALERI FOTO</h3>
				<form action="aksi.php" method="post" enctype="multipart/form-data">
					<input type="file" name="file">
					<input type="submit" name="upload" value="Upload">
				</form>
				<div class="row gallery-item">
				<?php
				include 'koneksi.php';
				$data = mysqli_query($koneksi,"select * from tb_foto ");
				while($d = mysqli_fetch_array($data)){
				?>
					<div class="col-md-4">
						<a href="<?php echo "img/gallery/".$d['nama_file']; ?>" class="img-gal">
							<div class="single-gallery-image" style="background: url(<?php echo "img/gallery/".$d['nama_file']; ?>);"></div>
						</a>
						<a href="hapus-gambar.php?id_foto=<?php echo $d['id_foto'];?>" onClick="return confirm('Hapus Foto?')"/><button type="button" class="btn btn-danger btn-sm">Hapus</button></a>
					</div>
				<?php
				}
				?>
				</div>
			</div>
		</div>
	</div>
	<!-- End Align Area -->

	<!--================ Start footer Area  =================-->
    
		<!--================ End footer Area  =================-->
	
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="js/popper.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/stellar.js"></script>
		<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
		<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
		<script src="js/owl-carousel-thumb.min.js"></script>
		<script src="js/jquery.ajaxchimp.min.js"></script>
		<script src="vendors/counter-up/jquery.counterup.js"></script>
		<script src="js/mail-script.js"></script>
		<!--gmaps Js-->
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
		<script src="js/gmaps.min.js"></script>
		<script src="js/theme.js"></script>
	</body>
	
	</html>