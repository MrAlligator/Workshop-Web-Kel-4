<?php
session_start();
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>SMK DARUS SALAM</title>
    <link rel="stylesheet" type="text/css" href="css/stylelogin2.css">
</head>
<body>
    <div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>
        <form action="" method="post">
            <label>Username</label>
            <input type="text" name="user" class="form_login" placeholder="Masukkan Username" required="required">
            <label>Password</label>
            <input type="password" name="pass" class="form_login" placeholder="Masukkan Password" required="required">
            <input type="submit" name="login" class="tombol_login" value="LOGIN" />
            <br/>
            <br/>
            <center>
                <a class="link" href="index.php">KEMBALI</a>
            </center>
        </form>
    </div>

    <?php
    if(isset($_POST['login'])){
        $user = $_POST['username'];
        $pass = $_POST['password'];
        $data = mysqli_query($koneksi, "SELECT * FROM tb_userlevel WHERE username = '$user' AND password = '$pass'");
        
        $r = mysqli_fetch_array($data);
        $username = $r['username'];
        $password = $r['password'];
        $level = $r['level'];
        if($user == $username && $pass == $password){
            $_SESSION['level'] = $level;
            header('location:admin/index.php');
        }else{
            echo 'Username atau Password salah!!!';
        }    
    }
    ?>
</body>
</html>