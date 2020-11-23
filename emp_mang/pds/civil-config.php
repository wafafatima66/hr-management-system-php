
<?php 
session_start();

if(isset($_POST['submit'])){

    $emp_id = $_SESSION['emp_id'];

   
    $type_of=$_POST['type_of'];
    $name_of_exam=$_POST['name_of_exam'];
    $rating=$_POST['rating'];
    $exam_date=$_POST['exam_date'];
    $exam_place=$_POST['exam_place'];
    $licence_no=$_POST['licence_no'];
    $licence_val=$_POST['licence_val'];
    


   
    
    require '../../includes/conn.php';


            $sql="INSERT INTO civil_service (type_of,name_of_exam,rating,exam_date,exam_place,licence_no,licence_val,emp_id) VALUE (?,?,?,?,?,?,?,?)
                ON DUPLICATE KEY UPDATE
                type_of = '$type_of',
                name_of_exam = '$name_of_exam',
                rating = '$rating',
                exam_date = '$exam_date',
                exam_place = '$exam_place',
                licence_no = '$licence_no',
                licence_val = '$licence_val' ";

            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt,$sql)){
                header("Location:../emp_profile.php?error=sqlerror");
                exit();
            }
                else{


                    mysqli_stmt_bind_param($stmt,"ssissisi",$type_of, $name_of_exam, $rating,$exam_date,$exam_place,$licence_no,$licence_val,$emp_id);
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