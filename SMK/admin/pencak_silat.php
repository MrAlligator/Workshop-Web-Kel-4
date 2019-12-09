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
							<li class="nav-item submenu dropdown">
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
							<li class="nav-item active submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								aria-expanded="false">Ekstrakurikuler</a>
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
	<section class="banner_area2">
        <div class="banner_inner d-flex align-items-center">
            <div class="overlay"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="banner_content text-center">
                            <h2>PENCAK SILAT</h2>
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
	<section class="sample-text-area">
		<div class="container">
			<h3 class="text-heading title_color">Pengertian Pencak Silat</h3>
			<p class="text-justify" style="font-family:Arial">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;   Kata “silat” sendiri merupakan istilah yang terkenal secara luas di kawasan Asia Tenggara untuk menyebut seni bela diri ini.
Meski demikian, masing-masing negara juga mempunyai sebutannya sendiri sesuai dengan bahasa lokal mereka seperti gayong dan cekak (Malaysia dan Singapura), bersilat (Thailand), dan pasilat (Filipina).
Pencak silat berasal dari dua kata, yakni pencak dan silat. Pengertian pencak ialah gerak dasar bela diri dan terikat dengan peraturan. 
Sedangkan silat berarti gerak beladiri sempurna yang bersumber dari kerohanian.
Dalam perkembangannya, silat ini lebih mengutamakan unsur seni dalam penampilan keindahan gerakan, sementara itu silat ialah inti dari ajaran bela diri dalam pertarungan.
<p class="text-justify" style="font-family:Arial">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Pengurus Besar IPSI menyebutkan pengertian pencak silat sebagai :
“Pencak silat ialah hasil budaya manusia di Indonesia untuk membela, lalu mempertahankan eksistensi (kemandiriannya) serta integritasnya (manunggal) untuk lingkungan hidup sekitarnya guna mencapai keselarasan hidup dalam meningkatkan iman & taqwa terhadap Tuhan YME”.
Sementara itu, berdasarkan KBBI, menyebutkan bahwa pengertian pencak silat yaitu sebagai permainan (keahlian) dalam mempertahankan diri dengan keahlian menangkis, menyerang serta membela diri menggunakan ataupun tanpa senjata.

           

		</div>
    </section>
    <div class="whole-wrap">
		<div class="container">
						<h3 class="mb-20 title_color">Beberapa istilah resmi yang berkaitan dengan silat dari berbagai daerah di Indonesia, diantaranya yaitu:</h3>
						<div class="">
							<ul class="unordered-list">
								<li style="font-family:Arial"><p>Di provinsi Sumatera Barat terdapat istilah Silek & Gayuang</li></p>
								<li style="font-family:Arial"><p>Pesisir timur provinsi Sumatra Barat serta Malaysia terdapat istilah Bersilat</li></p>
                                <li style="font-family:Arial"><p>Di Jawa Barat terdapatistilah Maempok serta Penca</li></p>
                                <li style="font-family:Arial"><p>Di Jawa Tengah, Yogyakarta, provinsi Jawa Timur terdapat istilah Pencak</li></p>
                                <li style="font-family:Arial"><p>Di Madura dengan Pulau Bawean terdapat istilah Mancak</li>
                                <li style="font-family:Arial"><p>Di Bali terdapat istilah Mancak ataupun Encak</li>
                                <li style="font-family:Arial"><p>Di NTB dan Dompu terdapat istilah Mpaa Sila</li>	
							</ul>
                    </div>
</div>
</div>
<section class="sample-text-area">
		<div class="container">
			<h3 class="text-heading title_color">Sejarah Pencak silat</h3>
			<p class="text-justify" style="font-family:Arial">Sejarah perkembangan pencak silat sudah dimulai sejak perkembangan zaman kerajaan, kemudian zaman penjajahan Belanda, sampai zaman pendudukan Jepang, dan yang terakhir ketika zaman kemerdekaan.
Selain seabgai upaya untuk mempertahankan diri, seni bela diri ini juga menjadi salah satu seni budaya yang terus dilestarikan hingga sekarang.
Dan seperti yang telah kita ketahui, silat ini tak hanya berkembang di negara Indonesia saja.
Melainkan hingga menyebar ke negara tetangga seperti Malaysia, Brunei Darusalam, Singapura, ataupun negara lainnya.

            </p>

</div>
<div class="whole-wrap">
		<div class="container">
       
						<h3 class="mb-20 title_color">Organiasi silat lainnya diantaranya sebagai berikut:</h3>
						<div class="">
							<ul class="unordered-list">
								<li style="font-family:Arial"><p>IPSI (Ikatan Pencak Silat Indonesia) di Indonesia</li></p>
								<li style="font-family:Arial"><p>PESAKA (Persekutuan Silat Kebangsaan Malaysia) di Malaysia</li></p>
                                <li style="font-family:Arial"><p>PERSIS (Persekutuan Silat Singapore) di Singapura</li></p>
                                <li style="font-family:Arial"><p>PERSIB (Persekutuan Silat Bruei Darussalam) di Brunei Darussalam</li></p>
							</ul>
						</div>
                    </div>

</div>
				<!-- single course -->
				
				
	<!--================ End Popular Courses Area =================-->

	<!--================ Start Fact Area =================-->
	
	<!--================ End Fact Area =================-->

	<!--================ Start Testimonial Area =================-->
	
	<!--================ End Testimonial Area =================-->

	<!--================ Start Registration Area =================-->
	
	<!--================ End Registration Area =================-->

	<!--================ Start Events Area =================-->
	<div class="whole-wrap">
		<div class="container">
			<div class="section-top-border">
				<h3 class="title_color">Image Gallery</h3>
				<div class="row gallery-item">
					<div class="col-md-4">
						<a href="img/logosmk.png" class="img-gal">
							<div class="single-gallery-image" style="background: url(img/logosmk.png);"></div>
						</a>
					</div>
					<div class="col-md-4">
						<a href="img/logosmk.png" class="img-gal">
							<div class="single-gallery-image" style="background: url(img/logosmk.png);"></div>
						</a>
					</div>
					<div class="col-md-4">
						<a href="img/logosmk.png" class="img-gal">
							<div class="single-gallery-image" style="background: url(img/logosmk.png);"></div>
						</a>
					</div>
					<div class="col-md-6">
						<a href="img/logosmk.png" class="img-gal">
							<div class="single-gallery-image" style="background: url(img/logosmk.png);"></div>
						</a>
					</div>
					<div class="col-md-6">
						<a href="img/logosmk.png" class="img-gal">
							<div class="single-gallery-image" style="background: url(img/logosmk.png);"></div>
						</a>
					</div>
					<div class="col-md-4">
						<a href="img/logosmk.png" class="img-gal">
							<div class="single-gallery-image" style="background: url(img/logosmk.png);"></div>
						</a>
					</div>
					<div class="col-md-4">
						<a href="img/logosmk.png" class="img-gal">
							<div class="single-gallery-image" style="background: url(img/logosmk.png);"></div>
						</a>
					</div>
					<div class="col-md-4">
						<a href="img/logosmk.png" class="img-gal">
							<div class="single-gallery-image" style="background: url(img/logosmk.png);"></div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
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