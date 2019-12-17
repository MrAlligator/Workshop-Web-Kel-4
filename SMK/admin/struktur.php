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
							<li class="nav-item"><a class="nav-link" href="../admin/index.php">Home</a></li>
							<li class="nav-item active submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								aria-expanded="false">Profil</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="../admin/sambutan.php">Sambutan</a></li>
									<li class="nav-item"><a class="nav-link" href="../admin/sejarah.php">Sejarah</a></li>
									<li class="nav-item"><a class="nav-link" href="../admin/profilsingkat.php">Profil Singkat</a></li>
									<li class="nav-item"><a class="nav-link" href="../admin/visimisi.php">Visi dan Misi</a></li>
									<li class="nav-item"><a class="nav-link" href="../admin/struktur.php">Struktur</a></li>
								</ul>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								aria-expanded="false">Data</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="../admin/siswa.php">Siswa</a></li>
									<li class="nav-item"><a class="nav-link" href="../admin/guru.php">Guru</a></li>
									<li class="nav-item"><a class="nav-link" href="../admin/karyawan.php">Karyawan</a></li>
								</ul>
							</li>
							</li><li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								aria-expanded="false">Jurusan</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="../admin/multimedia.php">Multimedia</a></li>
									<li class="nav-item"><a class="nav-link" href="#">Teknik Pemesinan</a></li>
								</ul>
							</li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								aria-expanded="false">Ekstrakulikuler</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="../admin/pencak_silat.php">Pencak Silat</a></li>
									<li class="nav-item"><a class="nav-link" href="../admin/pramuka.php">Pramuka</a></li>
								</ul>
							</li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								aria-expanded="false">Galeri</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="../admin/photo.php">Foto</a></li>
									<li class="nav-item"><a class="nav-link" href="../admin/video.php">Video</a></li>
								</ul>
							</li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								aria-expanded="false">Info</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="../admin/pengumuman.php">Pengumuman</a></li>
									<li class="nav-item"><a class="nav-link" href="../admin/berita.php">Berita</a></li>
								</ul>
							</li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								aria-expanded="false">Prestasi</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="../admin/akademik.php">Akademik</a></li>
									<li class="nav-item"><a class="nav-link" href="../admin/nonakademik.php">Non - Akademik</a></li>
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
									<li class="nav-item"><a class="nav-link" href="../admin/aturdata.php">Edit Data</a></li>
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

	<!--================ Start Home Banner Area =================-->
	<section class="banner_area3">
        <div class="banner_inner d-flex align-items-center">
            <div class="overlay"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="banner_content text-center">
                            <h2>STRUKTUR</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<!--================ End Home Banner Area =================-->

	<!--================ Start Feature Area =================-->
	
	<!--================ End Feature Area =================-->

	<!--================ Start Department Area =================-->
	
	<!--================ End Department Area =================-->

	<!--================ Start Popular Courses Area =================-->
	<div class="whole-wrap">
		<div class="container">
			<div class="section-top-border">
				<div class="row">
					<div class="col-md-12 col-xs-12">
					<center><h3 class="mb-20 title_color">Struktur Organisasi</h3></center>
					<center><h3 class="mb-20 title_color">SMK Darus Salam Tahun Pelajaran 2019 / 2020</h3></center>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-xs-12">
						
					</div>
					<div class="col-md-6 col-xs-12">
						<div class="">
							<ol class="ordered-list">
								<li><span>Komite							:	Abdur Rahman S.Pd.</span></li>
								<li><span>Kepala Sekolah					:	Ahmad Mahfud S.Pd.</span></li>
								<li><span>Wakil Bidang Kurikulum			:	Nur Yuliana Dewi S.Pd.</span></li>
								<li><span>Wakil Bidang Humas				:	Abdul Muis S.Pd.</span></li>
								<li><span>Wakil Bidang Kesiswaan			:	Yosi Adi Ariesta S.Pd.</span></li>
								<li><span>Wakil Bidang Sarana dan Prasarana	:	Hanisah S.Pd.</span></li>
								<li><span>Kepala Departemen					:	Ansori</span></li>
								<li><span>Kepala Laboratorium				:	Selvia Yugus A</span></li>
								<li><span>Kepala Tata Usaha					:	Siti Hanafiah</span></li>
							</ol>
						</div>
					</div>
					<div class="col-md-2 col-xs-12">
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--================ End Popular Courses Area =================-->

	<!--================ Start Fact Area =================-->
	
	<!--================ End Fact Area =================-->

	<!--================ Start Testimonial Area =================-->
	
	<!--================ End Testimonial Area =================-->

	<!--================ Start Registration Area =================-->
	
	<!--================ End Registration Area =================-->

	<!--================ Start Events Area =================-->
	
    <!--================Contact Area =================-->

	<!--================ Start footer Area  =================-->
	<footer class="footer-area section_gap">
		<div class="row">
					<div class="col-md-12 text-center">
						<font size="3" color="#333333">&copy;2019 || SMK DARUS SALAM<br>All Rights Reserved<br>Powered by Kelompok 4 | Design by <a href="http://instagram.com/febreroaraya_" target="newtab"><u>Febrero Araya K</u></a></font>
					</div>
				</div>
	</footer>
	<!--================ End footer Area  =================-->

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/stellar.js"></script>
	<script src="js/countdown.js"></script>
	<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="js/owl-carousel-thumb.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="vendors/counter-up/jquery.counterup.js"></script>
	<script src="js/mail-script.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js"></script>
	<script src="js/gmaps.min.js"></script>
	<script src="js/theme.js"></script>
</body>

</html>