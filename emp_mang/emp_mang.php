<?php include '../includes/header.php'; ?>
<?php include '../includes/local-link.php'; ?>


  
<?php include 'add_emp_modal.php'; ?>

<?php 
	if(isset($_GET['error'])){
		if($_GET['error']=="emptyfields"){
			echo'<p class="alert alert-danger h6">Fill in all fields</p>';
		}
		else if($_GET['error']=="invalidmail&user"){
			echo'<p class="alert alert-danger h6">Invalid Email</p>';
		}
	
		else if($_GET['error']=="sqlerror"){
			echo'<p class="alert alert-danger h6">Error in Creating account</p>';
		}
		else if($_GET['error']=="duplicateid"){
			echo'<p class="alert alert-danger h6">Employee Id taken</p>';
		}
	
	}	

         

            
if(isset( $_REQUEST["emp_id"])){

  $emp_id = $_REQUEST["emp_id"];

  require '../includes/conn.php';

//$dltquery = "DELETE FROM pds WHERE emp_id = $emp_id"; 

$runquery = $conn -> query("DELETE FROM pds WHERE emp_id = $emp_id");

$runquery = $conn -> query("DELETE FROM family_background WHERE emp_id = $emp_id");

$runquery = $conn -> query("DELETE FROM edu_background WHERE emp_id = $emp_id");

$runquery = $conn -> query("DELETE FROM emp_references WHERE emp_id = $emp_id");

$runquery = $conn -> query("DELETE FROM other_inf WHERE emp_id = $emp_id");

$runquery = $conn -> query("DELETE FROM skills WHERE emp_id = $emp_id");

if($runquery==true){
  echo'<p class="alert alert-danger h6">Employee deleted</p>';
}
else   echo'<p class="alert alert-danger h6">Employee not  deleted</p>';
}
?>

<div class="container pt-5 form-inline">

<?php

require "view_employee.php";

?>

</div>