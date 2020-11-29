
<?php 
session_start();

if(isset($_POST['submit'])){

    $emp_id = $_SESSION['emp_id'];

   
    $name_org=$_POST['name_org'];
    $org_add=$_POST['org_add'];
    $from_date=$_POST['from_date'];
    $to_date=$_POST['to_date'];
    $no_of_hrs=$_POST['no_of_hrs'];
    $position=$_POST['position'];
   
    


   
    
    require '../../includes/conn.php';


            $sql="INSERT INTO voluntary_works (name_org,org_add,from_date,to_date,no_of_hrs,position,emp_id) VALUE (?,?,?,?,?,?,?)";

            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt,$sql)){
                header("Location:../emp_profile.php?error=sqlerror");
                exit();
            }
                else{


                    mysqli_stmt_bind_param($stmt,"ssssisi",$name_org, $org_add, $from_date,$to_date,$no_of_hrs,$position,$emp_id);
                    mysqli_stmt_execute($stmt);
                    header("Location:../emp_profile.php?submit=vol");
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