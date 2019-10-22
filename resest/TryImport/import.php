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
    $telp = $row['D'];
    $alamat = $row['E'];
    if($nis == "" && $nama == "" && $jk == "" && $telp == "" && $alamat == "")
    continue;
    if($numrow > 1){
    $sql = $pdo->prepare("INSERT INTO tb_siswa VALUES(:nis,:nama,:jk,:telp,:alamat)");
    $sql->bindParam(':nis', $nis);
    $sql->bindParam(':nama', $nama);
    $sql->bindParam(':jk', $jk);
    $sql->bindParam(':telp', $telp);
    $sql->bindParam(':alamat', $alamat);
    $sql->execute();
    }
    $numrow++;
}
}
header('location: index.php');
?>