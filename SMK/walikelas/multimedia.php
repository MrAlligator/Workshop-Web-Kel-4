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
								aria-expanded="false">Wali Kelas</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="aturdata.php">Edit Data</a></li>
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
	<style>
		.banner_area4 {
                                  position: relative;
                                  background: url(../img/mm.jpg) no-repeat center center;
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
	<!--================ Start Home Banner Area =================-->
	<section class="banner_area4">
        <div class="banner_inner d-flex align-items-center">
            <div class="overlay"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="banner_content text-center">
                            <h2>MULTIMEDIA</h2>
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
			<h3 class="text-heading title_color">PENGERTIAN MULTIMEDIA</h3>
			<p class="text-justify" style="font-family:Arial">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Multimedia secara utuh berarti kombinasi atau penggabungan dari beberapa media seperti teks, audio, video, animasi, gambar yang disajikan dalam penggunaan komputer dengan bantuan tool dan link sehingga menghasilkan presentasi yang menarik.
Kategori dalam multimedia terdapat 2 macam, yaitu Multimedia Communication dan  Multimedia Content Production. Pengertian dari Multimedia Communication adalah penggunaan media yang memiliki fungsi mempublikasikan informasi. Dalam kategori ini media yang digunakan adalah TV, Radio, Film, Game, Musik, Entertaiment, Tutorial, Internet, dan Media Cetak.</p><p class="text-justify" style="font-family:Arial">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Dengan adanya multimedia communication ini akan mempermudah penggua dalam menyampaikan dan mendapatkan informasi. Selanjutnya Multimedia Content Production adalah penggunaan beberapa media yang berbeda seperti Teks, Animasi, Audio, Video, gambar (grafik) yang dipadukan 
untuk mengasilkan produk multimedia seperti musik, game, film, entertainment, dll.</p>
		</div>
	</section>
	<div class="whole-wrap">
		<div class="container">
			<div class="section-top-border">
				<h3 class="mb-30 title_color">KETUA JURUSAN</h3>
				<div class="row">
					<div class="col-md-6">
						<div class="single-defination">
							<h4 class="mb-20">Profil Kajur</h4>
							<?php
								
							?>
						</div>
					</div>
					<div class="col-md-6">
						<div class="single-defination">
							<h4 class="mb-20">&nbsp;</h4>
							<table border="0" cellpadding="0" cellspacing="0" style="width:825px">
								<tbody>
									<tr>
										<td colspan="2" style="width:150px">
										<p>Nama Sekolah</p>
										</td>
										<td style="width:18px">
										<p>:</p>
										</td>
										<td colspan="3" style="width:462px">
										<p>SMK Darus Salam Bondowoso</p>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    <div class="whole-wrap">
		<div class="container">
						<h3 class="mb-20 title_color">Dalam kategori multimedia content production menggunakan media sebagai berikut : </h3>
						<div class="">
							<ul class="unordered-list">
								<li style="font-family:Arial"><p>Media tulisan (Teks)</li></p>
								<li style="font-family:Arial"><p>Media Suara (Audio)</li></p>
                                <li style="font-family:Arial"><p>Media Video</li></p>
                                <li style="font-family:Arial"><p>Media Gambar (Grafik)</li></p>
                                <li style="font-family:Arial"><p>Media Animasi</li>
                                <li style="font-family:Arial"><p>Media Efek Khusus (Special Effect)</li>
                                <li style="font-family:Arial"><p>Media Interaktif (Interactivity)</li>	
							</ul>
                    </div>
</div>
</div>
<section class="sample-text-area">
		<div class="container">
			<h3 class="text-heading title_color">Multimedia ini tak akan jauh dari seni dan imajinasi kita. Menurut Hofstetter (2001) Multimedia terdiri dari 5 unsur, yaitu :</h3>
            <p style="font-family:Arial"><b>Teks</b> merupakan unsur dasar untuk meyampaikan informasi. Dalam penempatan teks pun tidak sembarangan. Harus teliti mampu menemukan kunci empatik konsumen dengan imajinasi kita. Atau biasa dipelajari dalam materi Tipografi.</p></br>
            <p style="font-family:Arial"><b>Gambar (Grafik)</b> merupakan informasi yang tidak dijelaskan dengan kata-kata. Kadangkala ketika kita di berkendara di jalan raya melihat baligo besar berisi informasi hanya dengan melihat gambar saja tanpa membaca kata-katanya kita sudah dapat menyimpulkan isi dari baligo tersebut.</p></br>
            <p style="font-family:Arial"> <b>Audio</b> merupakan unsur yang bisa berupa percakapan, music atau efek suara. Multimedia tanpa audio akan terasa hambar seperti sayur tanpa garam. Hehehe … Format dasar audio ini biasanya WAVE dan MIDI.</p></br>
            <p style="font-family:Arial"><b>Video</b> merupakan unsur yang membuat suatu informasi tampak terasa hidup dan lebih jelas. Tentu diiringi dengan audionya.</p></br>
            <p style="font-family:Arial"><b>Animasi</b> merupakan simulasi gerakan yang dihasilkan  dengan menampilkan beberapa frame ke layer.</p>

</div>
<div class="whole-wrap">
		<div class="container">
       
						<h3 class="mb-20 title_color">Dalam jurusan multimedia ini kita akan mempelajari hal – hal berikut :</h3>
						<div class="">
							<ul class="unordered-list">
								<li style="font-family:Arial"><p>Dasar-dasar multimedia</li></p>
								<li style="font-family:Arial"><p>Pengenalan dan Perakitan PC</li></p>
                                <li style="font-family:Arial"><p>Etimologi Multimedia</li></p>
                                <li style="font-family:Arial"><p>Fotografi  dan Teknik Pengambilan Gambar</li></p>
                                <li style="font-family:Arial"><p>Belajar Animasi Dasar</li></p>
                                <li style="font-family:Arial"><p>Alir Produksi Multimedia</li></p>
                                <li style="font-family:Arial"><p>Pengelolaan Web</li></p>
                                <li style="font-family:Arial"><p>Desain Animasi</li></p>
                                <li style="font-family:Arial"><p>Video Shooting</li></p>
                                <li style="font-family:Arial"><p>Audio dan Video Editing</li></p>
                                <li style="font-family:Arial"><p>Menggambar Clean-up dan Sisip</li></p>
                                <li style="font-family:Arial"><p>Perawatan peralatan multimedia</li></p>
                                <li style="font-family:Arial"><p>Proposal pembuatan produk</li></p>
                                <li style="font-family:Arial"><p>Seni Grafis dan Gambar 2D</li></p>
                                <li style="font-family:Arial"><p>Stop Motion</li></p>
                                <li style="font-family:Arial"><p>Efek Khusus</li></p>
                                <li style="font-family:Arial"><p>Pembuatan Story Board</li></p>
                                <li style="font-family:Arial"><p>Instalasi Sistem Operasi Dasar</li></p>
                                <li style="font-family:Arial"><p>Final Project (Proyek Akhir pembuatan produk multimedia)</li></p>
							</ul>
						</div>
                    </div>

</div><br>
<br>
<br>
<br>
				<!-- single course -->
				
				
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