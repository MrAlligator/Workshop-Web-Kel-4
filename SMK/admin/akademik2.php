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
							<li class="nav-item"><a class="nav-link" href="../admin/index.php">KEMBALI</a></li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								aria-expanded="false">Data</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="siswa.php">Siswa</a></li>
									<li class="nav-item"><a class="nav-link" href="guru.php">Guru</a></li>
									<li class="nav-item"><a class="nav-link" href="karyawan.php">Karyawan</a></li>
								</ul>
							</li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								aria-expanded="false">Kehadiran</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="absensi.php">Daftar Hadir</a></li>
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
							<li class="nav-item active submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								aria-expanded="false">Info</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="pengumuman.php">Pengumuman</a></li>
									<li class="nav-item"><a class="nav-link" href="berita.php">Berita</a></li>
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

	<!--================ Start Home Banner Area =================-->
    <section class="banner_area3">
        <div class="banner_inner d-flex align-items-center">
            <div class="overlay"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="banner_content text-center">
                            <h2>PRESTASI</h2>
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
	
				<!-- single course -->
				<!-- single course -->
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
                        <a href="#"><h2>Prestasi Akademik</h2></a>
                    </div>
                </div>
			</div>
            <table>
			<form method="POST"> 
						<tr>
							<td><label>Pilih Prestasi</label></td>
						</tr>
						<tr>
							<td>
								<select name="jenis_p">
								<option value="">Jenis Prestasi</option>
								<option value="akademik">Akademik</option>  
								<option value="non-akademik">Non-Akademik</option>
								</select>
							</td>
							<td><input type="submit" name ="submit" value="Saring"></td>
						</tr>
					</table>
					</form>
					
			<div class="row">
                <?php
                    include 'koneksi.php';
                    $data = mysqli_query($koneksi,"select * from tb_prestasi");
                    while($d = mysqli_fetch_array($data)){
                    }	
                ?>
                <?php
					
				  include 'koneksi.php';
				  if(isset($_POST['submit'])){
				  	$jenis_p = $_POST['jenis_p'];
				  	$sql = mysqli_query($koneksi,"select * from tb_prestasi where jenis_p='$jenis_p'");
				  }else{
				  	$sql = mysqli_query($koneksi,"select * from tb_prestasi");
				  }
				  while($d = mysqli_fetch_array($sql)){
				  
				?>
				
				<!-- single course -->
				<div class="col-lg-3 col-md-6">
					<div class="single_course">
                        <div class="course_head overlay">
							<img class="img-fluid w-100" style="height=150px;" src="<?php echo "".$d['foto_prestasi']; ?>" alt="">
						</div>
						<div class="course_content">
							<h4>
								<a href="lihat-akademik.php?id_prestasi=<?php echo $d['id_prestasi']; ?>"><?php echo $d['judul_prestasi']?> <?php echo $d['jenis_p']?></a>
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

    <!--================Contact Area =================-->
	
    <!--================Contact Area =================-->

	<!--================ Start footer Area  =================-->
	
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