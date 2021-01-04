
<?php

//to delete employee from training 


if(isset($_POST['emp_id'])){
    

   require '../../includes/conn.php';
  
  
    $emp_id =   $_POST['emp_id'];
    $title_of_training =   $_POST['title_of_training'];

    $runquery = $conn -> query("DELETE FROM training WHERE emp_id = $emp_id and title_of_training = '$title_of_training'");
    $runquery = $conn -> query("DELETE FROM emp_learning WHERE emp_id = $emp_id and title_of_training = '$title_of_training'");

    if($runquery==true){
        echo'<p class="alert alert-danger h6">Employee deleted</p>';
      }
      else   echo'<p class="alert alert-danger h6">Employee not  deleted</p>';
      
 
     
    
    

}


?>