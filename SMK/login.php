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
    <title>Login</title>
</head>
<body>
    <h1>LOGIN</h1>

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
</body>
</html>