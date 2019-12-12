<?php
    include "koneksi.php";
    require_once 'PHPExcel/PHPExcel/IOFactory.php';
    if(isset($_POST['upload_excel']))
    {
        $file_info = $_FILES["file"]["name"];
        $file_directory = "excel/";
        $new_file_name = date("dmY").".". $file_info["extension"];
        move_uploaded_file($_FILES["file"]["tmp_name"], $file_directory . $new_file_name);
        $file_type	= PHPExcel_IOFactory::identify($file_directory . $new_file_name);
        $objReader	= PHPExcel_IOFactory::createReader($file_type);
        $objPHPExcel = $objReader->load($file_directory . $new_file_name);
        $sheet_data	= $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);

        foreach ($sheet_data as $row){
            mysqli_query($koneksi,'INSERT INTO tb_siswa VALUES ("","'.$row['A'].'","'.$row['B'].'","'.$row['C'].'","'.$row['D'].'","'.$row['E'].'","'.$row['F'].'","'.$row['G'].'","'.$row['H'].'","'.$row['I'].'","'.$row['J'].'","'.$row['A'].'") ');            
        }
        $updatemsg = "File Successfully Imported!";
        $updatemsgtype = 1;
    }
?>