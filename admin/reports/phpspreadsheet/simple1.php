<?php
//call the autoload
require 'vendor/autoload.php';
//load spreadsheet class using namespaces
use PhpOffice\PhpSpreadsheet\Spreadsheet;
//call xsls writer class to make an xlsl file
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

//make a new spreadsheet object
$spreadsheet = new Spreadsheet();
//get current active sheet (first sheet)
$activeWorksheet = $spreadsheet->getActiveSheet();
//set the value of cell al to "Hello world!"
$activeWorksheet->setCellValue('A1', 'Hello World !');

//make an xlsx writer object using above spreadsheet
$writer = new Xlsx($spreadsheet);

//Write the file in current directory
$writer->save('hello world.xlsx');