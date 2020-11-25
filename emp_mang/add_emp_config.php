
<?php 
    session_start();

if(isset($_POST['submit'])){

    $emp_first_name=$_POST['emp_first_name'];
    $emp_last_name=$_POST['emp_last_name'];
    $emp_middle_name=$_POST['emp_middle_name'];
    $emp_ext=$_POST['emp_ext'];
    $emp_status=$_POST['emp_status'];
    $from_date=$_POST['from_date'];
    $to_date=$_POST['to_date'];
    $office_assign=$_POST['office_assign'];

    require '../includes/conn.php';

    if(empty($emp_first_name)|| empty($emp_last_name))
            {
                header("Location:emp_mang.php?error=emptyfields");
                exit();
     
            }
 
    else
        {
        
            $sql="INSERT INTO add_emp (emp_first_name, emp_last_name, emp_middle_name,emp_ext,emp_status,from_date,to_date,office_assign) VALUE (?,?,?,?,?,?,?,?)";
            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt,$sql)){
                header("Location:emp_mang.php?error=sqlerror");
                exit();
            }
                else{
                
                    mysqli_stmt_bind_param($stmt,"ssssssss", $emp_first_name, $emp_last_name, $emp_middle_name,$emp_ext,$emp_status,$from_date,$to_date,$office_assign);
                    mysqli_stmt_execute($stmt);

                  
                    $_SESSION['emp_first_name']= $emp_first_name;
                    $_SESSION['emp_last_name']= $emp_last_name;
                   
                   

                    header("Location:emp_profile.php?register=success&empfirstname=$emp_first_name");
                            exit();
                }
        } 
    

        mysqli_stmt_close($stmt);
        mysqli_close($conn);

   
   
}
    

    else
    {
        header("Location:emp_mang.php");
        exit();
    }
    
  
  ?>