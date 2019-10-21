<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Export Database to Excel</title>
</head>
<body>
    <?php
        require 'vendor/autoload.php';

        $koneksi = mysqli_connect("127.0.0.1","root","","db_smk");

        use PhpOffice\PhpSpreadsheet\Spreadsheet;
        use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        $sheet->setTitle('Sheet 1');
        $sheet->setCellValue('A1', 'First Name');
        $sheet->setCellValue('B1', 'Last Name');

        $employee = mysqli_query($koneksi,"select * from tb_siswa");
        $row = 2;
            while($record = mysqli_fetch_array($employee))
            {
            $sheet->setCellValue('A'.$row, $record['nama']);
            $sheet->setCellValue('B'.$row, $record['nis']);
            $row++;
            }

        $writer = new Xlsx($spreadsheet);
        $writer->save('database.xlsx');
    ?>
</body>
</html>