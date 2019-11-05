<!DOCTYPE html>
<html lang="en">
<head>
    <title>Belajar Composer</title>
</head>
<body>
    <h3>penggunaan PHP spreadsheet</h3>

    <?php
        require 'vendor/autoload.php';

        use PhpOffice\PhpSpreadsheet\Spreadsheet;
        use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
        
        $spreadsheet = new spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellvalue('A1', 'Hello World!');

        $writer = new Xlsx($spreadsheet);
        $writer->save('hello world.xlsx')
    
    ?>

    
</body>
</html>