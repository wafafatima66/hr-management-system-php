<?php

require '../vendor/autoload.php';


use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


$file_name = "employee-summary.xlsx";
$render  = IOfactory::createReader("Xlsx");
$spreadsheet = $render -> load($file_name);


/*

header('Content-Type: application/xlsx'); //application/vnd.openxmlformats-officedocument.spreadsheetml.sheet
  header('Content-Disposition: attachment ; filename=emp.xlsx');

  use PhpOffice\PhpSpreadsheet\IOFactory;
 
// Creating a new sheet in Excel file
$spreadsheet = new PhpOffice\PhpSpreadsheet\Spreadsheet();
 
// Create a write object to save the file and pass spreadsheet instance as parameter
$writer = new PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);

// Save the file named "Test.xlsx"
//$writer->save("Test.xlsx");


$file_name = "employee-summary.xlsx";
//$render  = IOfactory::createReader('xlsx');

//$reader = PhpOffice\PhpSpreadsheet\IOFactory::createReader("xlsx");
$writer->load('reports/' . $file_name);

header('Content-Type: application/xlsx'); //application/vnd.openxmlformats-officedocument.spreadsheetml.sheet
  header('Content-Disposition: attachment ; filename=emp.xlsx');

  
  $inputFileType = 'xlsx'; // Xlsx - Xml - Ods - Slk - Gnumeric - Csv
$inputFileName = 'employee-summary.xlsx';

$spreadsheet = new PhpOffice\PhpSpreadsheet\Spreadsheet();
 $writer = new PhpOffice\PhpSpreadsheet\Reader\Xlsx($spreadsheet);
 $writer->load($inputFileName);

  */

//use  PhpOffice\PhpSpreadsheet\Writer\Xlsx;
 //use  PhpOffice\PhpSpreadsheet\IOFactory\Xlsx;

 



/**  Create a new Reader of the type defined in $inputFileType  **/
//$reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader($inputFileType);
/**  Load $inputFileName to a Spreadsheet Object  **/
//$spreadsheet = $reader->load($inputFileName);

//$spreadsheet = PhpOffice\PhpSpreadsheet\IOFactory::load($inputFileName);



header('Content-Type: application/Xlsx'); //application/vnd.openxmlformats-officedocument.spreadsheetml.sheet
  header('Content-Disposition: attachment ; filename = "emp.xlsx"');

?>