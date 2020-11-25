
<?php 
session_start();

if(isset($_POST['submit'])){

    $emp_id = $_SESSION['emp_id'];

   
    $ref_full_name_arr=$_POST['ref_full_name'];
    $ref_add_arr=$_POST['ref_add'];
    $ref_tel_arr=$_POST['ref_tel'];
    $emp_gov_id=$_POST['emp_gov_id'];
    $emp_passport_no=$_POST['emp_passport_no'];
    $emp_place_of_insurance=$_POST['emp_place_of_insurance'];
   
    
    $ref_full_name = implode(',',$ref_full_name_arr);
    $ref_add = implode(',',$ref_add_arr);
    $ref_tel = implode(',',$ref_tel_arr);
    

   
    
    require '../../includes/conn.php';


            $sql="INSERT INTO emp_references (ref_full_name,ref_add,ref_tel,emp_gov_id,emp_passport_no,emp_place_of_insurance,emp_id) VALUE (?,?,?,?,?,?,?)
                ON DUPLICATE KEY UPDATE
                emp_gov_id = '$emp_gov_id',
                emp_passport_no = '$emp_passport_no',
                emp_place_of_insurance = '$emp_place_of_insurance',
                ref_full_name = '$ref_full_name',
                ref_add = '$ref_add',
                ref_tel = '$ref_tel'";

            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt,$sql)){
                header("Location:../emp_profile.php?error=sqlerror");
                exit();
            }
                else{


                    mysqli_stmt_bind_param($stmt,"sssiisi",$ref_full_name, $ref_add, $ref_tel,$emp_gov_id,$emp_passport_no,$emp_place_of_insurance,$emp_id);
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