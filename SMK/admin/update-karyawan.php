<?php 
ini_set("display_errors", "off");
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$nip = $_POST['nip'];
$alamat = $_POST['alamat'];
$jk = $_POST['jk'];
$agama = $_POST['agama'];
$tmptlahir = $_POST['tempat'];
$tgllahir = $_POST['tanggal'];
$telp = $_POST['telepon'];
$pass = $_POST['pass'];
$status = $_POST['jabatan'];
$status2 = $_POST['status2'];
$namafolder="img/guru/";

            if ($status2== 'admin'){
                mysqli_query($koneksi,"update tb_admin set nip_admin='$nip',nama_admin='$nama',jk_admin='$jk',tmpt_admin='$tmptlahir',tgl_admin='$tgllahir',agama_admin='$agama',telp_admin='$telp',alamat_admin='$alamat',password='$pass',status='$status2' where nip_admin ='$id'");
                mysqli_query($koneksi,"update tb_guru set nip='$nip',nama_guru='$nama',jk_guru='$jk',tmptlahir='$tmptlahir',tgllahir='$tgllahir',agama_guru='$agama',alamat_guru='$alamat',telp_guru='$telp',status='$status',password='$pass' where nip ='$id'");
                echo "<script>alert('Data Berhasil diupload');document.location.href='../admin/karyawan2.php'</script>";
            }else{
                  mysqli_query($koneksi,"update tb_guru set nip='$nip',nama_guru='$nama',jk_guru='$jk',tmptlahir='$tmptlahir',tgllahir='$tgllahir',agama_guru='$agama',alamat_guru='$alamat',telp_guru='$telp',status='$status',password='$pass' where nip ='$id'");
                  echo "<script>alert('Data Berhasil diupload');document.location.href='../admin/karyawan2.php'</script>";
                }
           
         
  


?>