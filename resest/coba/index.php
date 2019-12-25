	
<?php 
 
 if (session_status() == PHP_SESSION_NONE  || session_id() == '') {
         session_start();
     }
  
     require_once("koneksi.php");
     include("lib_function.php");
 ?>
  
 <--header-->
  <?php
 $email = $_SESSION['username'];
                   include "koneksi.php";
                   $query = mysqli_query($koneksi,"select * from tb_pengguna where username='".$username."'");
                   while($data = mysqli_fetch_array($query)){
                   
                   echo "Hello, " . $data['nama'] .  ").";
                   } ?>