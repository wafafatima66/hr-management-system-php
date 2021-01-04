<?php      
if(isset( $_REQUEST["title"])){

$title = $_REQUEST["title"];

require '../../includes/conn.php';

//$dltquery = "DELETE FROM pds WHERE emp_id = $emp_id"; 

$runquery = $conn -> query("DELETE FROM training WHERE title_of_training = '$title'");
//$runquery = $conn -> query("DELETE FROM per_emp_leaves WHERE emp_id = $emp_id");


if($runquery==true){
    header("Location:../training.php?delete=success");
    exit();
}
    else   {
     header("Location:../training.php?delete=error");
    exit();
    }
}
