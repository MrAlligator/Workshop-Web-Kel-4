<h3>Pengguna PhpSpreadsheet</h3>
<?php
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet ->setCellValue('A1','Hello World!');

$writer = new xlsx($spreadsheet);
$writer ->save('hello word.xlsx');
?>