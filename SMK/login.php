<?php
session_start();
include 'koneksi.php';
if( isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($koneksi, "SELECT * FROM tb_admin WHERE username = '$username'");

    $cek =  mysqli_num_rows($result);
    if($cek > 0){
    	$_SESSION['username'] = $username;
	    $_SESSION['status'] = "login";
            header("Location: admin.php");
            exit;

        }
    
}
?>
<!DOCTYPE html>
<html>
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
    <div class="fact_area overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_fact">
    <h1 class="mb-30 title_color text-center">LOGIN</h1>

<form action="" method="post">
    <ul>
        <div class="form-group">
           <i class="fa fa-user"> username </i>
            <input type="text" name="username" id="username" placeholder="Masukkan username">
        </div>
         <div class="form-group">
            <i class="fa fa-lock"> password</i>
            <input type="password" name="password" id="password" placeholder="Masukkan password">
         </div>

            <button class="mt-3" type="submit" name="login">LOGIN</button>
        
    </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
</form>
</body>
</html>