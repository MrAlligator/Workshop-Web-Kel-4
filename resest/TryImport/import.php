<?php
include "koneksi.php";
if(isset($_POST['import'])){
$nama_file_baru = 'data.xlsx';
require_once 'PHPExcel/PHPExcel.php';
$excelreader = new PHPExcel_Reader_Excel2007();
$loadexcel = $excelreader->load('tmp/'.$nama_file_baru);
$sheet = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);
$numrow = 1;
foreach($sheet as $row){
    $nis = $row['A'];
    $nama = $row['B'];
    $jk = $row['C'];
    $agama = $row ['D'];
    $tmptlahir = $row ['E'];
    $tgllahir = $row ['F'];
    $telp = $row['G'];
    $alamat = $row['H'];
    if($nis == "" && $nama == "" && $jk == "" && $agama == "" && $tmptlahir == "" && $tgllahir == "" && $telp == "" && $alamat == "")
    continue;
    if($numrow > 1){
    $sql = $pdo->prepare("INSERT INTO tb_siswa VALUES(:nis,:nama,:jk,:agama,:tmptlahir,:tgllahir,:telp,:alamat)");
    $sql->bindParam(':nis', $nis);
    $sql->bindParam(':nama', $nama);
    $sql->bindParam(':jk', $jk);
    $sql->bindParam(':agama', $agama);
    $sql->bindParam(':tmptlahir', $tmptlahir);
    $sql->bindParam(':tgllahir', $tgllahir);
    $sql->bindParam(':telp', $telp);
    $sql->bindParam(':alamat', $alamat);
    $sql->execute();
    }
    $numrow++;
}
}
header('location: index.php');
?>