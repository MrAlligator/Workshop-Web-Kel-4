<?php
session_start(); // Start session nya
// Kita cek apakah user sudah login atau belum
// Cek nya dengan cara cek apakah terdapat session username atau tidak
if( ! isset($_SESSION['username'])){ // Jika tidak ada session username berarti dia belum login
  header("location: ../index.php"); // Kita Redirect ke halaman index.php karena belum login
}
?>
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/logosmk.png" type="image/png">
	<title>SMK Darus Salam</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../vendors/linericon/style.css">
	<link rel="stylesheet" href="../css/font-awesome.min.css">
	<link rel="stylesheet" href="../vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="../vendors/lightbox/simpleLightbox.css">
	<link rel="stylesheet" href="../vendors/nice-select/css/nice-select.css">
	<link rel="stylesheet" href="../vendors/animate-css/animate.css">
	<!-- main css -->
	<link rel="stylesheet" href="../css/style.css">
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
							<li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								aria-expanded="false">Profil</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="sambutan.php">Sambutan</a></li>
									<li class="nav-item"><a class="nav-link" href="sejarah.php">Sejarah</a></li>
									<li class="nav-item"><a class="nav-link" href="profilsingkat.php">Profil Singkat</a></li>
									<li class="nav-item"><a class="nav-link" href="visimisi.php">Visi dan Misi</a></li>
									<li class="nav-item"><a class="nav-link" href="struktur.php">Struktur</a></li>
								</ul>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								aria-expanded="false">Data</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="siswa.php">Siswa</a></li>
									<li class="nav-item"><a class="nav-link" href="guru.php">Guru</a></li>
									<li class="nav-item"><a class="nav-link" href="karyawan.php">Karyawan</a></li>
								</ul>
							</li>
							</li><li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								aria-expanded="false">Jurusan</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="multimedia.php">Multimedia</a></li>
								</ul>
							</li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								aria-expanded="false">Ekstrakurikuler</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="pencak_silat.php">Pencak Silat</a></li>
									<li class="nav-item"><a class="nav-link" href="pramuka.php">Pramuka</a></li>
								</ul>
							</li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								aria-expanded="false">Galeri</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="photo.php">Foto</a></li>
									<li class="nav-item"><a class="nav-link" href="video.php">Video</a></li>
								</ul>
							</li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								aria-expanded="false">Info</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="pengumuman.php">Pengumuman</a></li>
									<li class="nav-item"><a class="nav-link" href="berita.php">Berita</a></li>
								</ul>
							</li>
							<li class="nav-item"><a class="nav-link" href="akademik.php">Prestasi</a></li>
							<li class="nav-item">
								<a href="#" class="nav-link search" id="search">
									<i class="lnr lnr-magnifier"></i>
								</a>
							</li>
                            <li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								aria-expanded="false"><?php echo $_SESSION['nama']; ?></a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="../guru/aturdata.php">Edit Data</a></li>
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
	<section class="home_banner_area">
		<div class="banner_inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<div class="banner_content">
							<img src="img/logosmk.png" height="180px"><br><br>
							<font size="15" color="#fff" style="font-weight: bold">SELAMAT DATANG DI WEBSITE RESMI<BR><BR>SMK DARUS SALAM</font><BR><BR>
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
	<div class="popular_courses">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="main_title">
						<a href="pengumuman.php"><h2>PENGUMUMAN</h2></a>
					</div>
				</div>
			</div>
			<div class="row">
                <?php
                    include 'koneksi.php';
                    $data = mysqli_query($koneksi,"select * from tb_pengumuman");
                    while($d = mysqli_fetch_array($data)){
                ?>
				<!-- single course -->
				<div class="col-lg-3 col-md-6">
					<div class="single_course">
                        <div class="course_head overlay">
							<img class="img-fluid w-100" src="<?php echo "".$d['foto']; ?>" alt="">
						</div>
						<div class="course_content">
							<h4>
								<a href="lihatpengumuman.php?id_peng=<?php echo $d['id_peng'];?>"><?php echo $d['judul']?></a>
							</h4>
						</div>
					</div>
                </div>
				<?php
                    }
                ?>
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
	<div class="popular_courses lite_bg">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="main_title">
						<a href="berita.php"><h2>BERITA</h2></a>
					</div>
				</div>
			</div>
			<div class="row">
                <?php
                    include 'koneksi.php';
                    $data = mysqli_query($koneksi,"select * from tb_berita");
                    while($d = mysqli_fetch_array($data)){
                ?>
				<!-- single course -->
				<div class="col-lg-3 col-md-6">
					<div class="single_course">
                        <div class="course_head overlay">
							<img class="img-fluid w-100" src="<?php echo "".$d['foto']; ?>" alt="">
						</div>
						<div class="course_content">
							<h4>
								<a href="lihatberita.php?id_berita=<?php echo $d['id_berita']; ?>"><?php echo $d['judul']?></a>
							</h4>
						</div>
					</div>
				</div>
				<?php
                    }
                ?>
			</div>
		</div>
	</div>
	<!--================ End Events Area =================-->

    <!--================Home Banner Area =================-->
	<style>
	 .banner_area4 {
                                  position: relative;
                                  background: url(../img/sekolah.jpg) no-repeat center center;
                                  z-index: 1;
                                  min-height: 392px;
                                  padding-top: 0 !important; }
                                 .banner_area4 .banner_inner {
                                  position: relative;
                                  overflow: hidden;
                                  width: 100%;
                                  min-height: 392px;
                                  z-index: 1; }
                                  .banner_area4 .banner_inner .overlay {
                                    position: absolute;
                                    left: 0;
                                    right: 0;
                                    top: 0;
                                    bottom: 0;
                                    background: #000;
                                    opacity: 0.4; }
                                  .banner_area4 .banner_inner .banner_content {
                                    position: relative;
                                    z-index: 2;
                                    color: #fff; }
                                    .banner_area4 .banner_inner .banner_content h2 {
                                      color: #fff;
                                      font-size: 48px; }
                                    @media (max-width: 991px) {
                                      .banner_area4 .banner_inner .banner_content p {
                                        display: none; } }
                                    .banner_area4 .banner_inner .banner_content .page_link {
                                      display: inline-block;
                                      padding: 7px 20px;
                                      border-top: 1px solid #fff;
                                      border-bottom: 1px solid #fff;
                                      margin-top: 20px; }
                                      .banner_area4 .banner_inner .banner_content .page_link a {
                                        font-size: 14px;
                                        color: #fff;
                                        font-family: "Crimson Text", serif;
                                        margin-right: 32px;
                                        position: relative;
                                        text-transform: uppercase; }
                                        .banner_area4 .banner_inner .banner_content .page_link a:before {
                                          content: "\f178";
                                          font: normal normal normal 14px/1 FontAwesome;
                                          position: absolute;
                                          right: -25px;
                                          top: 50%;
                                          transform: translateY(-50%); }
                                        .banner_area4 .banner_inner .banner_content .page_link a:last-child {
                                          margin-right: 0px; }
                                          .banner_area4 .banner_inner .banner_content .page_link a:last-child:before {
                                            display: none; }
    </style>
    <!--================Contact Area =================-->
    <section class="contact_area section_gap">
        <div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="main_title">
						<a href="#"><h2>TENTANG KAMI</h2></a>
					</div>
				</div>
			</div>
            <div id="mapBox" class="mapBox" data-lat="-7.924831" data-lon="113.879707" data-zoom="17"
                data-mlat="-7.924831" data-mlon="113.879707">
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="contact_info">
                        <div class="info_item ml-2">
                          <i><img src="../img/loc.png" width="45px" ></i>
                            <h6 class="ml-2">Tangsil Wetan, Wonosari</h6>
                            <p class="ml-2">Bondowoso, Jawa Timur</p>
                        </div>
                    </div>
				</div>
				<div class="col-md-4">
					<div class="contact_info">
						<div class="info_item">
							<i><img src="../img/wa.png" width="45px" ></i>
        	                <h6 class="ml-2">(+62)8523 1821 348</h6>
            	            <p class="ml-2">Senin - Jumat (08.00 - 15.00 WIB)</p>
                	    </div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="contact_info">
						<div class="info_item">
							<i><img src="../img/gmail.png" width="45px" ></i>
                            <h6 class="ml-2">darussalamsmk11@yahoo.com</a></h6>
                            <p class="ml-2">Email</p>
                        </div>
					</div>
				</div>
			</div>
        </div>
    </section>
    <!--================Contact Area =================-->

	<!--================ Start footer Area  =================-->
	<footer class="footer-area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-2 col-md-6 single-footer-widget">
					<h4>Profil Sekolah</h4>
					<ul>
						<li><a href="sejarah.php">Sejarah</a></li>
						<li><a href="profilsingkat.php">Profil Singkat</a></li>
						<li><a href="visimisi.php">Visi dan Misi</a></li>
						<li><a href="struktur.php">Struktur</a></li>
					</ul>
				</div>
				<div class="col-lg-2 col-md-6 single-footer-widget">
					<h4>Data Sekolah</h4>
					<ul>
						<li><a href="siswa.php">Siswa</a></li>
						<li><a href="guru.php">Guru</a></li>
						<li><a href="karyawan.php">Karyawan</a></li>
					</ul>
				</div>
				<div class="col-lg-2 col-md-6 single-footer-widget">
					<h4>Jurusan</h4>
					<ul>
						<li><a href="multimedia.php">Multimedia</a></li>
					</ul>
				</div>
				<div class="col-lg-2 col-md-6 single-footer-widget">
					<h4>Ekstrakurikuler</h4>
					<ul>
						<li><a href="pramuka.php">Pramuka</a></li>
						<li><a href="pencak_silat.php">Pencak Silat</a></li>
					</ul>
				</div>
				<div class="col-lg-2 col-md-6 single-footer-widget">
					<h4>Info</h4>
					<ul>
						<li><a href="pengumuman.php">Pengumuman</a></li>
						<li><a href="berita.php">Berita</a></li>
					</ul>
				</div>
				<div class="col-lg-2 col-md-6 single-footer-widget">
					<h4>Prestasi</h4>
					<ul>
						<li><a href="akademik2.php">Prestasi</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 text-center">
				<font size="3" color="#333333">&copy;2019 || SMK DARUS SALAM<br>All Rights Reserved<br>Powered by Kelompok 4</font>
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