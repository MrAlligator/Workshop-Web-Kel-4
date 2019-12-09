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
							<li class="nav-item"><a class="nav-link" href="../guru/index.php">Kembali</a></li>
							<li class="nav-item">
								<a href="siswa2.php" class="nav-link" role="button" aria-haspopup="true"
								aria-expanded="false">Daftar Siswa</a>
							</li>
							<li class="nav-item"><a class="nav-link" href="../guru/tampilcalonsiswa.php">Calon Siswa</a></li>
							<li class="nav-item">
								<a href="nilaisiswa.php" class="nav-link" role="button" aria-haspopup="true"
								aria-expanded="false">Nilai Siswa</a>
							</li>
							<li class="nav-item">
								<a href="uploadmateri.php" class="nav-link" role="button" aria-haspopup="true"
								aria-expanded="false">Upload Materi</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link search" id="search">
									<i class="lnr lnr-magnifier"></i>
								</a>
							</li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								aria-expanded="false">GURU</a>
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
	<style>
	 .banner_area4 {
                                position: relative;
                                background: url(../guru/img/guru.png) no-repeat center center;
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
    <section class="banner_area4">
        <div class="banner_inner d-flex align-items-center">
            <div class="overlay"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="banner_content text-center">
                            <h2>Selamat Datang Guru</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->


	<!-- Start Sample Area -->
	<div class="popular_courses lite_bg3">
		<div class="container">
			<div class="row justify-content-center">
				<div class="card mb-3" style="max-width: 540px;">
  					<div class="row no-gutters">
    					<div class="col-md-4">
      					<img src="..." class="card-img" alt="...">
    					</div>
    					<div class="col-md-8">
							<div class="card-body">
								<h5 class="card-title">Card title</h5>
								<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
							</div>
    					</div>
  					</div>
				</div>
			</div>
		</div>
	</div>								

	<!-- End Sample Area -->
	<!-- Start Button -->
	<!-- End Button -->
	<!-- Start Align Area -->
	<!-- End Align Area -->

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