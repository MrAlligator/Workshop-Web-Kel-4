<?php
    include "koneksi.php";

    $hapus = mysqli_query($koneksi, "delete from tb_absen");
    if($hapus) { 
        echo '<script type="text/javascript">document.location.href="../admin/absensi.php"</script>';
    } else {
        echo '<script type="text/javascript">document.location.href="../admin/absensi.php"</script>';
    }
?>