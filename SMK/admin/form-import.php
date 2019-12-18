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
    <script src="js/jquery-3.2.1.min.js"></script>
    
    <script>
    $(document).ready(function(){
        $("#kosong").hide();
    });
    </script>
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
							<li class="nav-item active submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								aria-expanded="false">Data</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="siswa2.php">Siswa</a></li>
									<li class="nav-item"><a class="nav-link" href="guru2.php">Guru</a></li>
									<li class="nav-item"><a class="nav-link" href="karyawan2.php">Karyawan</a></li>
									<li class="nav-item"><a class="nav-link" href="tampilcalonsiswa.php">Siswa Baru</a></li>
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
							<li class="nav-item"><a class="nav-link" href="../admin/akademik.php">Prestasi</a></li>
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
	<style media="screen">
		.button{
			width: 100%;
			height: 50px;
		}
		.left{
			float: left;
			display: block;
		}
		.right{
			float: right;
			display: block;
		}
		.button ul a{
		padding: 8px;
		background: rgb(0, 101, 255);
		color: white;
		}
	</style>
    <!--================Home Banner Area =================-->
    
    <!--================End Home Banner Area =================-->


	<!-- Start Sample Area -->
	<!-- End Sample Area -->
	<!-- Start Button -->
	<!-- End Button -->
    <!-- Start Align Area -->
    <div class="whole-wrap">
		<div class="container">
			<div class="section-top-border">
                <style type="text/css">
                    body{
                        font-family: sans-serif;
                    }
                    p{
                        color: green;
                    }
                    #loading{
                        background: whitesmoke;
                        position: absolute;
                        top: 140px;
                        left: 82px;
                        padding: 5px 10px;
                        border: 1px solid #ccc;
                    }
                </style>
                <div style="padding: 0 15px;">
                    <a href="siswa2.php" class="btn btn-danger pull-right">
                        <span class="glyphicon glyphicon-remove"></span> Cancel
                    </a>
                    
                    <h3>Form Import Data</h3>
                    <hr>
                    
                    <form method="post" action="" enctype="multipart/form-data">
                        <a href="Format.xlsx" class="btn btn-default">
                        <span class="glyphicon glyphicon-download"></span>
                        Download Format
                        </a><br><br>
                        
                        <input type="file" name="file" class="pull-left">
                        
                        <button type="submit" name="preview" class="btn btn-success btn-sm">
                        <span class="glyphicon glyphicon-eye-open"></span> Preview
                        </button>
                    </form>
                    
                    <hr>
                    
                    <?php
                    if(isset($_POST['preview'])){
                        $nama_file_baru = 'data.xlsx';
                        
                        if(is_file('tmp/'.$nama_file_baru))
                        unlink('tmp/'.$nama_file_baru);
                        
                        $ext = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
                        $tmp_file = $_FILES['file']['tmp_name'];

                        if($ext == "xlsx"){
                        move_uploaded_file($tmp_file, 'tmp/'.$nama_file_baru);
                        
                        require_once 'PHPExcel/PHPExcel.php';
                        
                        $excelreader = new PHPExcel_Reader_Excel2007();
                        $loadexcel = $excelreader->load('tmp/'.$nama_file_baru); 
                        $sheet = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);
                        
                        echo "<form method='post' action='import.php'>";
                        
                        echo "<div class='alert alert-danger' id='kosong'>
                        Semua data belum diisi, Ada <span id='jumlah_kosong'></span> data yang belum diisi.
                        </div>";
                        
                        echo "<table class='table table-bordered'>
                        <tr>
                            <th colspan='10' class='text-center'>Preview Data</th>
                        </tr>
                        <tr>
                            <th>NIS</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Jenis Kelamin</th>
                            <th>Agama</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Alamat</th>
                            <th>Telepon</th>
                            <th>Status</th>
                        </tr>";
                        
                        $numrow = 1;
                        $kosong = 0;
                        foreach($sheet as $row){ 
                            $nis = $row['A'];
                            $nama = $row['B'];
                            $kelas = $row['C'];
                            $jk = $row['D'];
                            $agama = $row ['E'];
                            $tmptlahir = $row ['F'];
                            $tgllahir = $row ['G'];
                            $alamat = $row['H']; 
                            $telp = $row['I'];
                            $status = $row['J'];

                            if($nis == "" && $nama == "" && $kelas == "" && $jk == "" && $agama == "" && $tmptlahir == "" && $tgllahir == "" && $alamat == "" && $telp == "" && $status == "")
                            continue; 
                            if($numrow > 1){
                                $nis_td = ( ! empty($nis))? "" : " style='background: #E07171;'"; // Jika NIS kosong, beri warna merah
                                $nama_td = ( ! empty($nama))? "" : " style='background: #E07171;'"; // Jika Nama kosong, beri warna merah
                                $jk_td = ( ! empty($jk))? "" : " style='background: #E07171;'"; // Jika Jenis Kelamin kosong, beri warna merah
                                $agama_td = ( ! empty($agama))? "" : " style='background: #E07171;'";
                                $tmptlahir_td = ( ! empty($tmptlahir))? "" : " style='background: #E07171;'";
                                $tgllahir_td = ( ! empty($tgllahir))? "" : " style='background: #E07171;'";
                                $telp_td = ( ! empty($telp))? "" : " style='background: #E07171;'";
                                $alamat_td = ( ! empty($alamat))? "" : " style='background: #E07171;'"; // Jika Alamat kosong, beri warna merah
                                $kelas_td = ( ! empty($kelas))? "" : " style='background: #E07171;'";
                                $status_td = ( ! empty($status))? "" : " style='background: #E07171;'";

                            if($nis == "" or $nama == "" or $kelas == "" or $jk == "" or $agama == "" or $tmptlahir == "" or $tgllahir == "" or $alamat == "" or $telp == "" or $status == ""){
                                $kosong++; 
                            }
                            
                            echo "<tr>";
                            echo "<td".$nis_td.">".$nis."</td>";
                            echo "<td".$nama_td.">".$nama."</td>";
                            echo "<td".$kelas_td.">".$kelas."</td>";
                            echo "<td".$jk_td.">".$jk."</td>";
                            echo "<td".$agama_td.">".$agama."</td>";
                            echo "<td".$tmptlahir_td.">".$tmptlahir."</td>";
                            echo "<td".$tgllahir_td.">".$tgllahir."</td>";
                            echo "<td".$alamat_td.">".$alamat."</td>";
                            echo "<td".$telp_td.">".$telp."</td>";
                            echo "<td".$status_td.">".$status."</td>";
                            echo "</tr>";
                            }
                            
                            $numrow++;
                        }
                        
                        echo "</table>";
                        
                        if($kosong > 0){
                        ?>  
                            <script>
                            $(document).ready(function(){
                            $("#jumlah_kosong").html('<?php echo $kosong; ?>');
                            
                            $("#kosong").show(); // Munculkan alert validasi kosong
                            });
                            </script>
                        <?php
                        }else{ // Jika semua data sudah diisi
                            echo "<hr>";
                            
                            echo "<button type='submit' name='import' class='btn btn-primary'><span class='glyphicon glyphicon-upload'></span> Import</button>";
                        }
                        
                        echo "</form>";
                        }else{ 
                        echo "<div class='alert alert-danger'>
                        Hanya File Excel 2007 (.xlsx) yang diperbolehkan
                        </div>";
                        }
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