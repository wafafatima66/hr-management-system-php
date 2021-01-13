<?php  
//export.php  

require '../includes/conn.php';

// Including all files from library
require "../vendor/autoload.php";
 
// Creating a new sheet in Excel file
$spreadsheet = new PhpOffice\PhpSpreadsheet\Spreadsheet();
 
// Create a write object to save the file and pass spreadsheet instance as parameter
$writer = new PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);






$output = '';

if(isset($_POST["emp_summary"]))
{

    //merge cells 
    $spreadsheet->getActiveSheet()->mergeCells("A1:K1");
    $spreadsheet->getActiveSheet()->mergeCells("L1:N1");
    $spreadsheet->getActiveSheet()->mergeCells("O1:Q1");
    $spreadsheet->getActiveSheet()->mergeCells("R1:S1");

    //SET HEADINGS
    $spreadsheet->getActiveSheet()->setCellValue("A1", "BASIC INFORMATION");
    $spreadsheet->getActiveSheet()->setCellValue("L1", "EDUCATIONAL ATTAINMENT");
    $spreadsheet->getActiveSheet()->setCellValue("O1", "TRAINING AND SEMINARS");
    $spreadsheet->getActiveSheet()->setCellValue("R1", "ELIGIBILITIES");
    
    //SETTING SUB HEADINGS
    $spreadsheet->getActiveSheet()->setCellValue("A2", "NO.");
    $spreadsheet->getActiveSheet()->setCellValue("B2", "ID NO.");
    $spreadsheet->getActiveSheet()->setCellValue("C2", "NAME");
    $spreadsheet->getActiveSheet()->setCellValue("D2", "DATE OF BIRTH");
    $spreadsheet->getActiveSheet()->setCellValue("E2", "AGE");
    $spreadsheet->getActiveSheet()->setCellValue("F2", "SEX");
    $spreadsheet->getActiveSheet()->setCellValue("G2", "GENDER");
    $spreadsheet->getActiveSheet()->setCellValue("H2", "POSITION");
    $spreadsheet->getActiveSheet()->setCellValue("I2", "OFFICE/UNIT");
    $spreadsheet->getActiveSheet()->setCellValue("J2", "STATUS");
    $spreadsheet->getActiveSheet()->setCellValue("K2", "MONTHLY SALARY");
    $spreadsheet->getActiveSheet()->setCellValue("L2", "BACCALAUREATE DEGREE ");
    $spreadsheet->getActiveSheet()->setCellValue("M2", "GRADUATE STUDIES");
    $spreadsheet->getActiveSheet()->setCellValue("N2", "POST GRADUATE");
    $spreadsheet->getActiveSheet()->setCellValue("O2", "NO. OF TECHNICAL TRAININGS");
    $spreadsheet->getActiveSheet()->setCellValue("P2", "NO. OF MANAGERIAL TRAININGS");
    $spreadsheet->getActiveSheet()->setCellValue("Q2", "NO. OF SUPERVISORIAL TRAININGS");
    $spreadsheet->getActiveSheet()->setCellValue("R2", "CIVIL SERVICE EXAMINATION");
    $spreadsheet->getActiveSheet()->setCellValue("S2", "BOARD EXAMINATIONS");

    //SET ROW HEIGHT
     $spreadsheet->getActiveSheet()->getRowDimension('1')->setRowHeight(40);
     $spreadsheet->getActiveSheet()->getRowDimension('2')->setRowHeight(40);

    //TO SET VERTICAL AND HORIZONTAL CENTER
    $spreadsheet->getActiveSheet()->getStyle('A:S')->getAlignment()->setHorizontal('center');
    $spreadsheet->getActiveSheet()->getStyle('A:S')->getAlignment()->setVertical('center');
    //$spreadsheet->getActiveSheet()->getStyle('A1:S1')->getAlignment()->setWrapText(true);

    //STYLING
    $styles = [
        'font' => [
            'bold' => true,
        ]
    ];

    $spreadsheet->getActiveSheet()
        ->getStyle("A1:S1")
        ->applyFromArray($styles);

    
    //SET AUTOSIZE FOR ALL COLUMNS 
        foreach(range('A','S') as $columnID) {
            $spreadsheet->getActiveSheet()->getColumnDimension($columnID)
                ->setAutoSize(true);
        }
 

    
  
 $query = "SELECT p.sno , p.emp_id , a.emp_first_name, a.emp_middle_name , a.emp_last_name, a.emp_ext , p.emp_dob , p.emp_sex , p.emp_gender , a.office_assign , a.office_dept,a.emp_status,a.emp_salary , e.coll_degree , e.gra_degree,e.post_degree from pds p , add_emp a , edu_background e where p.emp_id = a.emp_id and p.emp_id = e.emp_id ";

 $result = mysqli_query($conn, $query);


 $fileName = "Employee-Summary-".date('d/m/Y').".xlsx";


 
// Start from second row
$count = 3;
while ($row = mysqli_fetch_object($result))

{

    $emp_first_name = $row->emp_first_name;//$row["emp_first_name"];
    $emp_last_name = $row->emp_last_name;//$row["emp_last_name"];
    $emp_middle_name = $row->emp_middle_name;//$row["emp_middle_name"];
    $emp_ext = $row->emp_ext;//$row["emp_ext"];

    $emp_id =  $row->emp_id ;/// $row["emp_id"];
    $resultarray [] =  $emp_id;

    $age  = floor((time() - strtotime($row->emp_dob)) / 31556926);//$row["emp_dob"]

    $emp_name =  $emp_first_name . ' ' . $emp_last_name . ' '. $emp_middle_name.' '. $emp_ext;

   
    // Add required data
    $spreadsheet
        ->getSheet(0)
        ->setCellValue("A" . $count, $row->sno);
 
    $spreadsheet
        ->getSheet(0)
        ->setCellValue("B" . $count, $row->emp_id);
     
    $spreadsheet
        ->getSheet(0)
        ->setCellValue("C" . $count, $emp_name);
     
    $spreadsheet
        ->getSheet(0)
        ->setCellValue("D" . $count, $row->emp_dob);
     
    $spreadsheet
        ->getSheet(0)
        ->setCellValue("E" . $count, $age);

    $spreadsheet
        ->getSheet(0)
        ->setCellValue("F" . $count, $row->emp_sex);

    $spreadsheet
        ->getSheet(0)
        ->setCellValue("G" . $count, $row->emp_gender);

    $spreadsheet
        ->getSheet(0)
        ->setCellValue("H" . $count, $row->office_assign);

    $spreadsheet
        ->getSheet(0)
        ->setCellValue("I" . $count, $row->office_dept);

    $spreadsheet
        ->getSheet(0)
        ->setCellValue("J" . $count, $row->emp_status);

    $spreadsheet
        ->getSheet(0)
        ->setCellValue("K" . $count, $row->emp_salary);

    $spreadsheet
        ->getSheet(0)
        ->setCellValue("L" . $count, $row->coll_degree);

    $spreadsheet
        ->getSheet(0)
        ->setCellValue("M" . $count, $row->gra_degree);

    $spreadsheet
        ->getSheet(0)
        ->setCellValue("N" . $count, $row->post_degree);

        $count++;
    }
    // Move to next row
   
    $count = 3;
    for ($i = 0 ; $i < count($resultarray) ; $i++) // running the loop as many id stored in array
    {
        $emp_id = $resultarray[$i];

        $query="select name_of_exam ,type_of from civil_service where emp_id = $emp_id and type_of = 'Civil Service Examination'";
        $result = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_object($result))
        {    
            $spreadsheet
                ->getSheet(0)
                ->setCellValue("R" . $count, $row->name_of_exam);
          } 


        $query="select name_of_exam ,type_of from civil_service where emp_id = $emp_id and type_of = 'Board Examination'";
        $result = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_object($result))
        {    
            $spreadsheet
                ->getSheet(0)
                ->setCellValue("S" . $count, $row->name_of_exam);
        } 

        $query="SELECT COUNT(type_of_position) as tech FROM emp_learning WHERE emp_id = $emp_id and type_of_position = 'technical'";
        $result = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_object($result))
        {    
            $spreadsheet
                ->getSheet(0)
                ->setCellValue("O" . $count, $row->tech);
        } 

        $query="SELECT COUNT(type_of_position) as tech FROM emp_learning WHERE emp_id = $emp_id and type_of_position = 'managerial'";
        $result = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_object($result))
        {    
            $spreadsheet
                ->getSheet(0)
                ->setCellValue("P" . $count, $row->tech);
        } 

        $query="SELECT COUNT(type_of_position) as tech FROM emp_learning WHERE emp_id = $emp_id and type_of_position = 'supervisory'";
        $result = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_object($result))
        {    
            $spreadsheet
                ->getSheet(0)
                ->setCellValue("Q" . $count, $row->tech);
        } 

        
        $count++;
    }

 
    /*
  $output .= '
        <table class="table" bordered="1"> 

     
                    <tr>  
                        <th>NO.</th>  
                        <th>ID NO.</th>  
                        <th>NAME</th>  
                        <th>DATE OF BIRTH</th>
                        <th>AGE</th>
                        <th>SEX</th>
                        <th>GENDER </th>
                        <th>POSITION </th>
                        <th>OFFICE/UNIT </th>
                        <th>STATUS</th>
                        <th>MONTHLY SALARY</th>
                        <th>BACCALAUREATE DEGREE </th>
                        <th>GRADUATE STUDIES</th>
                        <th>POST GRADUATE</th>
                        <th>NO. OF TECHNICAL TRAININGS </th>
                        <th>NO. OF MANAGERIAL TRAININGS</th>
                        <th>NO. OF SUPERVISORIAL TRAININGS</th>
                        <th>CIVIL SERVICE EXAMINATION</th>
                        <th>BOARD EXAMINATIONS</th>
                    </tr>
                ';
                while($row = mysqli_fetch_array($result))
                {
                    

                    $emp_first_name = $row["emp_first_name"];
                    $emp_last_name = $row["emp_last_name"];
                    $emp_middle_name = $row["emp_middle_name"];
                    $emp_ext = $row["emp_ext"];

                    $emp_id =   $row["emp_id"];
                    $resultarray [] =  $emp_id; // creating array to store all the employees applied for leave

                    $age  = floor((time() - strtotime($row["emp_dob"])) / 31556926);

                    $emp_name =  $emp_first_name . ' ' . $emp_last_name . ' '. $emp_middle_name.' '. $emp_ext;
                        $output .= '
                    <tr>  
                        <td>'.$row["sno"].'</td>  
                        <td>'.$emp_id.'</td>  
                        <td>'.$emp_name.'</td>  
                        <td>'.$row["emp_dob"].'</td>  
                        <td>'.$age.'</td>  
                        <td>'.$row["emp_sex"].'</td>
                        <td>'.$row["emp_gender"].'</td>
                        <td>'.$row["office_assign"].'</td>
                        <td>'.$row["office_dept"].'</td>
                        <td>'.$row["emp_status"].'</td>
                        <td>'.$row["emp_salary"].'</td>
                        <td>'.$row["coll_degree"].'</td>
                        <td>'.$row["gra_degree"].'</td>
                        </tr>
                ';
            
                }        
         
               
            }

         
                $output .= '</table>';

              */  

// Save the file named "Test.xlsx"

//$writer->save("Test.xlsx");
//print_r($resultarray);

 header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
 header('Content-Disposition: attachment ; filename='.$fileName);
 $writer->save('php://output');
 // echo $output;
 
 }

 



if(isset($_POST['leave_summary'])){

    $query = "SELECT a.emp_id, a.emp_first_name, a.emp_middle_name , a.emp_last_name, a.emp_ext ,a.emp_status,  a.office_assign , a.office_dept , a.emp_salary , l.type_of_leave , l.leave_from_date , l.leave_to_date  from add_emp a , emp_leaves l where a.emp_id = l.emp_id ";

 $result = mysqli_query($conn, $query);


 $fileName = "Leave-Summary-".date('d/m/Y').".xls";

 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
        <table class="table" bordered="1"> 

        <thead >LEAVE SUMMARY</thead>
                    <tr>  
                        <th>EMPLOYEE ID </th>  
                        <th>FIRST NAME</th>  
                        <th>MIDDLE NAME</th>  
                        <th>LAST NAME</th>
                        <th>EXT</th>
                        <th>STATUS</th>
                        <th>OFFICE ASSIGNMENT </th>
                        <th>DEPARTMENT </th>
                        <th>SALARY </th>
                        <th>TYPE OF LEAVE </th>
                        <th>LEAVE FROM DATE</th>
                        <th>LEAVE TO DATE </th>
                    </tr>
                ';
                while($row = mysqli_fetch_array($result))
                {
                $output .= '
                    <tr>  
                        <td>'.$row["emp_id"].'</td>  
                        <td>'.$row["emp_first_name"].'</td>  
                        <td>'.$row["emp_middle_name"].'</td>  
                        <td>'.$row["emp_last_name"].'</td>  
                        <td>'.$row["emp_ext"].'</td>
                        <td>'.$row["emp_status"].'</td>
                        <td>'.$row["office_assign"].'</td>
                        <td>'.$row["office_dept"].'</td>
                        <td>'.$row["emp_salary"].'</td>
                        <td>'.$row["type_of_leave"].'</td>
                        <td>'.$row["leave_from_date"].'</td>
                        <td>'.$row["leave_to_date"].'</td>
                    </tr>
                ';
                }
                $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment ; filename='.$fileName);
  echo $output;
}
}


if(isset($_POST['training_cond'])){

    $query = "SELECT title_of_training , type_of_training , from_date , to_date , no_of_hrs , venue , province from training ";

 $result = mysqli_query($conn, $query);


 $fileName = "Training-Conducted-".date('d/m/Y').".xls";

 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
        <table class="table" bordered="1"> 

        <h4 class="text-center p-5 m-5>LEAVE SUMMARY</h4>
                    <tr>  
                        <th>TITLE OF TRAINING </th>  
                        <th>TYPE OF TRAINING</th>  
                        <th>FROM DATE</th>  
                        <th>TO DATE</th>
                        <th>NO OF HOURS</th>
                        <th>VENUE</th>
                        <th>ADDRESS </th>
                    </tr>
                ';
                while($row = mysqli_fetch_array($result))
                {
                $output .= '
                    <tr>  
                        <td>'.$row["title_of_training"].'</td>  
                        <td>'.$row["type_of_training"].'</td>  
                        <td>'.$row["from_date"].'</td>  
                        <td>'.$row["to_date"].'</td>  
                        <td>'.$row["no_of_hrs"].'</td>
                        <td>'.$row["venue"].'</td>
                        <td>'.$row["province"].'</td>
                    </tr>
                ';
                }
                $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment ; filename='.$fileName);
  echo $output;
            }
}

?>