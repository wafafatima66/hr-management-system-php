<?php  
//export.php  

require '../includes/conn.php';
$output = '';

if(isset($_POST["emp_summary"]))
{

    
 $query = "SELECT a.emp_id, a.emp_first_name, a.emp_middle_name , a.emp_last_name, a.emp_ext ,a.emp_status, a.from_date , a.to_date , a.office_assign , a.office_dept , a.emp_salary , p.emp_dob , p.emp_height, p.emp_weight , p.emp_blood, p.emp_gender , p.emp_email , p.emp_tel_no , p.emp_mb_no ,p.emp_sex from add_emp a , pds p where a.emp_id = p.emp_id ";
 $result = mysqli_query($conn, $query);


 $fileName = "Emp Summary-".date('d/m/Y').".xls";

 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
        <table class="table" bordered="1"> 

        <thead >EMPLOYEE SUMMARY</thead>
                    <tr>  
                        <th>EMPLOYEE ID </th>  
                        <th>FIRST NAME</th>  
                        <th>MIDDLE NAME</th>  
                        <th>LAST NAME</th>
                        <th>EXT</th>
                        <th>STATUS</th>
                        <th>FROM </th>
                        <th>TO </th>
                        <th>OFFICE ASSIGNMENT </th>
                        <th>DEPARTMENT </th>
                        <th>SALARY </th>
                        <th>DATE OF BIRTH </th>
                        <th>HEIGHT </th>
                        <th>WEIGHT </th>
                        <th>BLOOD </th>
                        <th>GENDER </th>
                        <th>EMAIL </th>
                        <th>TELEPHONE NO </th>
                        <th>MOBILE NO </th>
                        <th>SEX </th>
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
                        <td>'.$row["from_date"].'</td>
                        <td>'.$row["to_date"].'</td>
                        <td>'.$row["office_assign"].'</td>
                        <td>'.$row["office_dept"].'</td>
                        <td>'.$row["emp_salary"].'</td>
                        <td>'.$row["emp_dob"].'</td>
                        <td>'.$row["emp_height"].'</td>
                        <td>'.$row["emp_weight"].'</td>
                        <td>'.$row["emp_blood"].'</td>
                        <td>'.$row["emp_gender"].'</td>
                        <td>'.$row["emp_email"].'</td>
                        <td>'.$row["emp_tel_no"].'</td>
                        <td>'.$row["emp_mb_no"].'</td>
                        <td>'.$row["emp_sex"].'</td>
                    </tr>
                ';
                }
                $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment ; filename='.$fileName);
  echo $output;
 
 }

 
}


if(isset($_POST['leave_summary'])){

    $query = "SELECT a.emp_id, a.emp_first_name, a.emp_middle_name , a.emp_last_name, a.emp_ext ,a.emp_status,  a.office_assign , a.office_dept , a.emp_salary , l.type_of_leave , l.leave_from_date , l.leave_to_date  from add_emp a , emp_leaves l where a.emp_id = l.emp_id ";

 $result = mysqli_query($conn, $query);


 $fileName = "Leave Summary-".date('d/m/Y').".xls";

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


 $fileName = "Training Conducted-".date('d/m/Y').".xls";

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