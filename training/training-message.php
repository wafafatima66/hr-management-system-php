<?php


if(isset($_POST['emp_id'])){
    $emp_id = $_POST['emp_id'];


require '../includes/conn.php';

$query = "SELECT office_assign , emp_gender , emp_first_name FROM pds WHERE  emp_id = '$emp_id' ";
      
if($runquery = $conn -> query($query)){

   

    $rowcount=mysqli_num_rows($runquery);
    if($rowcount == 0 ){

        echo'<p class="alert alert-danger p-1 m-0" style="font-size:12px";> EMPLOYEE NOT FOUND ! </p>';
        //echo json_encode( array('message'=>$message));
    }
   
}
}

?>