<?php

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$servername = "localhost";
$username = "root_1";
$password = "Had@74172";
$dbname = "leave_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$date_start = $_GET['date_start'];
$date_end = $_GET['date_end'];

$sql = "SELECT * FROM leaves WHERE (date(date_start) BETWEEN '$date_start' and '$date_end') OR (date(date_end) BETWEEN '$date_start' and '$date_end') ) order by unix_timestamp(date_start) asc,unix_timestamp(date_end) asc";
$qry = $conn->query($sql);

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

$sheet->setCellValue('A1', 'I#');
$sheet->setCellValue('B1', 'Employee');
$sheet->setCellValue('C1', 'Leave Type');
$sheet->setCellValue('D1', 'Date');
$sheet->setCellValue('E1', 'Status');
$sheet->setCellValue('F1', 'Reason');

$row = 2;
while($data = $qry->fetch_assoc()){
    $lt_qry = $conn->query("SELECT meta_value FROM employee_meta where user_id = '{$data['user_id']}' and meta_field = 'employee_id' ");
    $data['employee_id'] = ($lt_qry->num_rows > 0) ? $lt_qry->fetch_assoc()['meta_value'] : 'N/A';

    $sheet->setCellValue('A' . $row, $data['employee_id']);
    $sheet->setCellValue('B' . $row, $data['fullname']);
    $sheet->setCellValue('C' . $row, $data['leave_type']);
    $sheet->setCellValue('D' . $row, $data['date_start'] . " to " . $data['date_end']);
    $sheet->setCellValue('E' . $row, $data['status']);
    $sheet->setCellValue('F' . $row, $data['reason']);
    $row++;
}

$writer = new Xlsx($spreadsheet);
$filename = 'leave_application_reports.xlsx';
$writer->save($filename);

header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment; filename="' . $filename . '"');
header('Cache-Control: max-age=0');

$writer->save('php://output');

exit;