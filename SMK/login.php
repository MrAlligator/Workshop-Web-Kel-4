<?php
session_start();
include 'koneksi.php';
require 'function.php';
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
    <div class="section-top-border">
		<div class="row">
			<div class="col-lg-4 col-sm-6">
				<h1 class="mb-30 title_color">Login</h1>
                <form action="" method="post">
                    <ul>
                        <li>
                            <label for="username">Username :</label>
                            <input type="text" name="username" id="username">
                        </li>
                        <li>
                            <label for="password">Password :</label>
                            <input type="password" name="password" id="password">
                        </li>
                        <li>
                            <button type="submit" name="login">LOGIN</button>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </div>
</body>
</html>