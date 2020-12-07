<?php
   


if(isset($_POST['upload'])){

   
    
    require '../includes/conn.php';

    $doc_date = date("Y-m-d");
    

    $doc_name =  $_FILES['upload_file']['name'];
    $doc_loc = $_FILES['upload_file']['tmp_name'];
    $doc_size = $_FILES['upload_file']['size'];
    $doc_type = $_FILES['upload_file']['type'];
    $path="../uploads/";

 
$query = "SELECT * FROM doc WHERE doc_name = '$doc_name' ";

  $runquery = $conn -> query($query);
  $rowcount=mysqli_num_rows($runquery);
  if($rowcount == 0 ){


 
         if(move_uploaded_file($doc_loc,$path.$doc_name)) {
  

    

        $sql="INSERT INTO doc (doc_name, doc_type, doc_size,doc_date,doc_no) VALUE (?,?,?,?,?)";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("Location:doc.php?upload=error");
            exit();
        }
            else{
            
                mysqli_stmt_bind_param($stmt,"ssisi", $doc_name, $doc_type, $doc_size,$doc_date,$doc_no);
                mysqli_stmt_execute($stmt);

              
                header("Location:doc.php?upload=success");
                exit();
    
                
                          
                  
            }

                
            

            mysqli_stmt_close($stmt);
            mysqli_close($conn);

        } header("Location:doc.php?upload=failed");
        exit();
           
        } 
        header("Location:doc.php?upload=exist");
        exit();


                  

        
       
}

 else { 

    header("Location:doc.php");
    exit();
                        
}



?>

      