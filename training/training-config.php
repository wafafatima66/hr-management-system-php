
<?php 
   

if(isset($_POST['submit'])){

    $emp_id=$_POST['emp_id'];
    $title_of_training=$_POST['title_of_training'];
    $type=$_POST['type'];
    $from_date=$_POST['from_date'];
    $to_date=$_POST['to_date'];
    $no_of_hrs=$_POST['no_of_hrs'];
    $venue=$_POST['venue'];
    $province=$_POST['province'];
    $city=$_POST['city'];
    $barangay=$_POST['barangay'];
    $speaker_last_name=$_POST['speaker_last_name'];
    $speaker_first_name=$_POST['speaker_first_name'];
    $speaker_middle_name=$_POST['speaker_middle_name'];
    $speaker_ext=$_POST['speaker_ext'];
    $agency=$_POST['agency'];
    $title=$_POST['title'];
    $sponsor=$_POST['sponsor'];



    require '../includes/conn.php';

    
    $query = "SELECT office_assign , emp_gender , emp_first_name FROM pds WHERE  emp_id = '$emp_id' ";
      
    if($runquery = $conn -> query($query)){
    
    while($mydata = $runquery -> fetch_assoc()){

      $emp_first_name =   $mydata["emp_first_name"];
      $office_assign =   $mydata["office_assign"];
      $emp_gender =   $mydata["emp_gender"];
        }
    } 


            $sql="INSERT INTO training (emp_id, title_of_training, type,from_date,to_date,no_of_hrs,venue,province,city,barangay,speaker_last_name,speaker_first_name,speaker_middle_name,speaker_ext,agency,title,sponsor,emp_first_name,office_assign,emp_gender) VALUE (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt,$sql)){
                header("Location:training.php?submit=error");
                exit();
            }
                else{
                
                    mysqli_stmt_bind_param($stmt,"issssissssssssssssss", $emp_id, $title_of_training, $type,$from_date,$to_date,$no_of_hrs,$venue,$province,$city,$barangay,$speaker_last_name,$speaker_first_name,$speaker_middle_name,$speaker_ext,$agency,$title,$sponsor,$emp_first_name,$office_assign,$emp_gender);
                    mysqli_stmt_execute($stmt);

                  
                    header("Location:training.php?submit=success");
                            exit();
                }

                
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
        } 
    

    else
    {
        header("Location:training.php");
        exit();
    }
    
  
  ?>