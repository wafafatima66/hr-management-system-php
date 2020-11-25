
<?php 
session_start();

if(isset($_POST['submit'])){

    $emp_id = $_SESSION['emp_id'];

   
    $emp_special_skills_arr=$_POST['emp_special_skills'];
    $non_academic_arr=$_POST['non_academic'];
    $membership_arr=$_POST['membership'];

    $emp_special_skills= implode(',',  $emp_special_skills_arr);
    $non_academic= implode(',',  $non_academic_arr);
    $membership= implode(',',  $membership_arr);
    


   
    
    require '../../includes/conn.php';


            $sql="INSERT INTO skills (emp_special_skills,non_academic,membership,emp_id) VALUE (?,?,?,?) ";

            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt,$sql)){
                header("Location:../emp_profile.php?error=sqlerror");
                exit();
            }
                else{


                    mysqli_stmt_bind_param($stmt,"sssi",$emp_special_skills, $non_academic, $membership,$emp_id);
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