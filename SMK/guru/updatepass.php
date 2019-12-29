<?php
    session_start(); // Start session nya
    // Kita cek apakah user sudah login atau belum
    // Cek nya dengan cara cek apakah terdapat session username atau tidak
    if( ! isset($_SESSION['username'])){ // Jika tidak ada session username berarti dia belum login
      header("location: ../index.php"); // Kita Redirect ke halaman index.php karena belum login
    }
    
    include "koneksi.php";
    $passbaru = $_POST['pass'];
    $id = $_SESSION['no'];
    
    mysqli_query($koneksi,"update tb_siswa set password='$passbaru' where id_siswa='$id'");
    echo "<script>alert('Password Berhasil Diubah, Silahkan login kembali');document.location.href='../guru/logout.php'</script>";
?>