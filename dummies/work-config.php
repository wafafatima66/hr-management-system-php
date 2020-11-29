
  
<?php 

session_start();


if(isset($_POST['submit'])){

    $emp_id = $_SESSION['emp_id'];

   
    $from_date=$_POST['from_date'];
    $to_date=$_POST['to_date'];
    $position=$_POST['position'];
    $employer=$_POST['employer'];
    $govt_service=$_POST['govt_service'];
    $monthly_sal=$_POST['monthly_sal'];
    $increment=$_POST['increment'];
    $status=$_POST['status'];
    


    require '../../includes/conn.php';
    
            
        if(isset($_SESSION['emp_first_name'])){
            
            $emp_first_name = $_SESSION['emp_first_name'];
            $emp_last_name = $_SESSION['emp_last_name'];
        


                $query = "SELECT office_assign FROM add_emp WHERE emp_first_name = '$emp_first_name' AND emp_last_name ='$emp_last_name'";
            
                $runquery = $conn -> query($query);
                if($runquery == true){
                    while($mydata = $runquery -> fetch_assoc()){
                

                        $office_assign = $mydata["office_assign"];

                        
                        
               

            $sql="INSERT INTO work_experience (from_date,to_date,position,employer,govt_service,monthly_sal,increment,status,office_assign,emp_id) VALUE (?,?,?,?,?,?,?,?,?,?)";

            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt,$sql)){
                header("Location:../emp_profile.php?error=sqlerror");
                exit();
            }
                else{


                    mysqli_stmt_bind_param($stmt,"sssssiissi",$from_date, $to_date, $position,$employer,$govt_service,$monthly_sal,$increment,$status,$office_assign,$emp_id);
                    mysqli_stmt_execute($stmt);
                    header("Location:../emp_profile.php?submit=work");
                            exit();
                }

                mysqli_stmt_close($stmt);
                mysqli_close($conn);
                     
            }
        }

        } 

            }
    


    else
    {
        header("Location:../emp_profile.php");
        exit();
    }
    
  
  ?>