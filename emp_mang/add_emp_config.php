
<?php 




if(isset($_POST['submit'])){

    

    $emp_first_name=$_POST['emp_first_name'];
    $emp_last_name=$_POST['emp_last_name'];
    $emp_middle_name=$_POST['emp_middle_name'];
    $emp_ext=$_POST['emp_ext'];
    $emp_status=$_POST['emp_status'];
    $from_date=$_POST['from_date'];
    $to_date=$_POST['to_date'];
    $office_assign=$_POST['office_assign'];
    $emp_id=$_POST['emp_id'];
    
    // File upload path
    $emp_image = $_FILES["emp_image"]["name"]; 
    $tempname = $_FILES["emp_image"]["tmp_name"];     
        $folder = "../uploads/image/".$emp_image; 




    require '../includes/conn.php';

    $query = "SELECT * FROM add_emp WHERE emp_id = '$emp_id'";
                           
    $runquery = $conn -> query($query);
    $rowcount=mysqli_num_rows($runquery);
    if($rowcount == 0 ){

    if(empty($emp_first_name)|| empty($emp_last_name))
            {
                header("Location:emp_mang.php?error=emptyfields");
                exit();
     
            }
 
    else
        {
        
            $sql="INSERT INTO add_emp (emp_first_name, emp_last_name, emp_middle_name,emp_ext,emp_status,from_date,to_date,office_assign,emp_image,emp_id) VALUE (?,?,?,?,?,?,?,?,?,?)";
            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt,$sql)){
                header("Location:emp_mang.php?error=sqlerror");
                exit();
            }
                else{
                
                    mysqli_stmt_bind_param($stmt,"sssssssssi", $emp_first_name, $emp_last_name, $emp_middle_name,$emp_ext,$emp_status,$from_date,$to_date,$office_assign,$emp_image,$emp_id);
                    mysqli_stmt_execute($stmt);

                  
                

                    if (move_uploaded_file($tempname, $folder))  { 
                        $msg = "Image uploaded successfully"; 
                    }else{ 
                        $msg = "Failed to upload image"; 
                        }

                    header("Location:emp_profile.php?register=success&emp_id=$emp_id");
                            exit();
                }

               

        } 

    

        mysqli_stmt_close($stmt);
        mysqli_close($conn);

    }else {
        header("Location:emp_mang.php?error=duplicateid");
                exit();
    }
   
}
    

    else
    {
        header("Location:emp_mang.php");
        exit();
    }
    
  
  ?>