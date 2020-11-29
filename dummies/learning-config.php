
<?php 
session_start();

if(isset($_POST['submit'])){

    $emp_id = $_SESSION['emp_id'];

   
    $title_of_training=$_POST['title_of_training'];
    $type_of_position=$_POST['type_of_position'];
    $no_of_hrs=$_POST['no_of_hrs'];
    $from_date=$_POST['from_date'];
    $to_date=$_POST['to_date'];
    $conducted_by=$_POST['conducted_by'];
    
    


   
    
    require '../../includes/conn.php';


            $sql="INSERT INTO emp_learning (title_of_training,type_of_position,no_of_hrs,from_date,to_date,conducted_by,emp_id) VALUE (?,?,?,?,?,?,?) ";

            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt,$sql)){
                header("Location:../emp_profile.php?error=sqlerror");
                exit();
            }
                else{


                    mysqli_stmt_bind_param($stmt,"ssisssi",$title_of_training, $type_of_position, $no_of_hrs,$from_date,$to_date,$conducted_by,$emp_id);
                    mysqli_stmt_execute($stmt);
                    header("Location:../emp_profile.php?submit=learn");
                            exit();
                }

                mysqli_stmt_close($stmt);
                mysqli_close($conn);
            }
    


    else
    {
        header("Location:../emp_profile.php");
        exit();
    }
    
  
  ?>