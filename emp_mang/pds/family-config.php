
<?php 
session_start();

if(isset($_POST['submit'])){

    $emp_id = $_SESSION['emp_id'];

   
    $emp_sp_name=$_POST['emp_spouse_lastname,emp_spouse_firstname,emp_spouse_middlename,emp_spouse_extname'];
    $emp_sp_occupation=$_POST['emp_sp_occupation'];
    $emp_sp_employer=$_POST['emp_sp_employer'];
    $emp_sp_add=$_POST['emp_sp_add'];
    $emp_sp_tel=$_POST['emp_sp_tel'];
    $emp_child=$_POST['emp_child'];
    $emp_father_name=$_POST['emp_father_lastname,emp_father_firstname,emp_father_middlename,emp_father_extname'];
    $emp_mother_name=$_POST['emp_mother_lastname,emp_mother_firstname,emp_mother_middlename,emp_mother_extname'];
    
    require '../../includes/conn.php';


            $sql="INSERT INTO family_background (emp_sp_name,emp_sp_occupation,emp_sp_employer,emp_sp_add,emp_sp_tel,emp_father_name,emp_mother_name,emp_child,emp_id) VALUE (?,?,?,?,?,?,?,?,?)";
            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt,$sql)){
                header("Location:../emp_profile.php?error=sqlerror");
                exit();
            }
                else{


                    mysqli_stmt_bind_param($stmt,"ssssisssi",$emp_spouse_name, $emp_sp_occupation, $emp_sp_employer,$emp_sp_add,$emp_sp_tel,$emp_father_name,$emp_mother_name,$emp_child,$emp_id);
                    mysqli_stmt_execute($stmt);
                    header("Location:../emp_profile.php?submit=success");
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