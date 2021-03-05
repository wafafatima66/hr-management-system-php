
<?php

//import.php

include '../vendor/autoload.php';

$dbhost = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname="testing";

$conn = mysqli_connect($dbhost,$dbusername,$dbpassword,$dbname);

if($_FILES["import_excel"]["name"] != '')
{
 $allowed_extension = array('xls', 'csv', 'xlsx');
 $file_array = explode(".", $_FILES["import_excel"]["name"]);
 $file_extension = end($file_array);

 if(in_array($file_extension, $allowed_extension))
 {
  $file_name = time() . '.' . $file_extension;
  move_uploaded_file($_FILES['import_excel']['tmp_name'], $file_name);
  $file_type = \PhpOffice\PhpSpreadsheet\IOFactory::identify($file_name);
  $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader($file_type);

  $spreadsheet = $reader->load($file_name);

  unlink($file_name);

  $emp_first_name=$spreadsheet->getSheet(0)->getCell("A1")->getValue();
  $emp_last_name=$spreadsheet->getSheet(0)->getCell("A2")->getValue();
  $created_at=$spreadsheet->getSheet(0)->getCell("A3")->getValue();
  $updated_at=$spreadsheet->getSheet(0)->getCell("A4")->getValue();

   $sql = "
   INSERT INTO sample_datas 
   (first_name, last_name, created_at, updated_at) 
   VALUES ('$emp_first_name', '$emp_last_name', '$created_at', '$updated_at')
   ";

   if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
   //$statement = $connect->prepare($query);
  // $statement->execute($insert_data);
  
  $message = '<div class="alert alert-success">Data Imported Successfully</div>';

 }
 else
 {
  $message = '<div class="alert alert-danger">Only .xls .csv or .xlsx file allowed</div>';
 }
}
else
{
 $message = '<div class="alert alert-danger">Please Select File</div>';
}

echo $message;

?>