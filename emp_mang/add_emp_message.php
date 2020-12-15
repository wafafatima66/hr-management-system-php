<?php

if(isset($_POST['emp_id'])){


    $emp_id = $_POST['emp_id'];


    require '../includes/conn.php';

    $query = "SELECT emp_id FROM add_emp WHERE  emp_id = '$emp_id' ";
        
    if($runquery = $conn -> query($query)){

        $rowcount=mysqli_num_rows($runquery);
        if($rowcount != 0 ){
            echo'<p class="alert alert-danger p-1 m-0" style="font-size:12px";> EMPLOYEE ID TAKEN </p>';
        }
}



}

?>