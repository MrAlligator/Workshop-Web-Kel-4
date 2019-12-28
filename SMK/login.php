<!DOCTYPE html>
<html>
<head>
    <link rel="icon" href="img/logosmk.png" type="image/png">
    <title>SMK Darus Salam</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/stylelogin.css" rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Oxygen:400,300,700|Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
</head>
<body>
    <div class="main">
        <div class="user">
            <img src="images/user.png" alt="">
        </div>
        <div class="login">
            <div class="inset">
                <form action="cek_log.php" method="POST">
                <select name="status" required>  
								<option value="" >Status</option>  
								<option value="admin">Admin</option>  
								<option value="guru">Guru</option>
								<option value="siswa">Siswa</option>
                                <option value="karyawan">Karyawan</option>
							</select><br><br>
                    <div>
                        <span><label>Username</label></span>
                        <span><input type="text" class="textbox" name="username" placeholder="NIM / NIP" ></span>
                    </div>
                    <div>
                        <span><label>Password</label></span>
                        <span><input type="password" name="password" class="password" placeholder="Password"></span>
                    </div>
                    <hr>
                    <div class="sign">
                        <div class="submit">
                            <input type="submit" value="LOGIN" >
                        </div>
                        <span class="forget-pass">
                            <a class="genric-btn danger circle" href="index.php" >Kembali</a>
                        </span>
                        <div class="clear"> </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>