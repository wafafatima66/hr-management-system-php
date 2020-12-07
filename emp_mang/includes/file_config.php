<?php
   
session_start();

if(isset($_POST['upload'])){

    $emp_id = $_SESSION['emp_id'];  
    
    require '../../includes/conn.php';

    $file_date = date("l jS \of F Y ");
    $file_folder = $_POST["folder"];

    $file_name =  $emp_id."-".$_FILES['upload_file']['name'];
    $file_loc = $_FILES['upload_file']['tmp_name'];
    $file_size = $_FILES['upload_file']['size'];
    $file_type = $_FILES['upload_file']['type'];
    $path="../../uploads/";

 
$query = "SELECT * FROM emp_file WHERE file_name = '$file_name' ";

  $runquery = $conn -> query($query);
  $rowcount=mysqli_num_rows($runquery);
  if($rowcount == 0 ){


 
         if(move_uploaded_file($file_loc,$path.$file_name)) {
  

    

        $sql="INSERT INTO emp_file (file_name, file_type, file_size,file_folder,file_date,emp_id) VALUE (?,?,?,?,?,?)";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("Location:../emp_profile.php?upload=error&emp_id=$emp_id");
            exit();
        }
            else{
            
                mysqli_stmt_bind_param($stmt,"ssissi", $file_name, $file_type, $file_size,$file_folder,$file_date,$emp_id);
                mysqli_stmt_execute($stmt);

              
                header("Location:../emp_profile.php?upload=success&emp_id=$emp_id");
                exit();
    
                
                          
                  
            }

                
            

            mysqli_stmt_close($stmt);
            mysqli_close($conn);

        } header("Location:../emp_profile.php?upload=failed&emp_id=$emp_id");
        exit();
           
        } 
        header("Location:../emp_profile.php?upload=exist&emp_id=$emp_id");
        exit();


                  

        
       
}

 else { 

    header("Location:../emp_mang.php");
    exit();
                        
}



?>

      