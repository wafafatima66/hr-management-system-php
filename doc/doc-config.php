<?php
   
if(isset($_POST['upload'])){

   
    require '../includes/conn.php';

    $total = count($_FILES['upload_file']['name']);

   


    for( $i=0 ; $i < $total ; $i++ ) {
  
        $doc_date = date("Y-m-d");
    $doc_name =  $_FILES['upload_file']['name'][$i];
    $doc_loc = $_FILES['upload_file']['tmp_name'][$i];
    $doc_size = $_FILES['upload_file']['size'][$i];
    $doc_type = $_FILES['upload_file']['type'][$i];
    $path="../uploads/";

 
$query = "SELECT * FROM emp_file WHERE doc_name = '$doc_name' ";

  $runquery = $conn -> query($query);
  $rowcount=mysqli_num_rows($runquery);
  if($rowcount == 0 ){



 
         if(move_uploaded_file($doc_loc,$path.$doc_name)) {
  

    

        $sql="INSERT INTO emp_file (file_name, file_type, file_size,file_date) VALUE (?,?,?,?)";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("Location:doc.php?upload=error");
            exit();
        }
            else{
            
                mysqli_stmt_bind_param($stmt,"ssis", $doc_name, $doc_type, $doc_size,$doc_date);
                mysqli_stmt_execute($stmt);
            
                         
                  
            }
        
            

        } else {
            header("Location:doc.php?upload=failed");
            exit();

        }

    }else {
        header("Location:doc.php?upload=exist");
        exit();
}

   
   
}
     
       
     
header("Location:doc.php?upload=success");
exit();

mysqli_stmt_close($stmt);
mysqli_close($conn);
      


                

        
       
}

 else { 

    header("Location:doc.php");
    exit();
  


}



?>

      