<?php

if(isset($_POST['emp_id'])){
    $emp_id = $_POST['emp_id'];


    require '../includes/conn.php';
    
    $query = "SELECT emp_first_name FROM pds WHERE  emp_id = '$emp_id' ";
          
    if($runquery = $conn -> query($query)){
    
      
   
while($mydata = $runquery -> fetch_assoc()){

    $emp_first_name = $mydata["emp_first_name"];
    }

    echo json_encode( array('emp_first_name'=>$emp_first_name));
}
}
?>