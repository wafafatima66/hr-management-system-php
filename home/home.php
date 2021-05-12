<?php include '../includes/header.php'; ?>
<?php include '../includes/local-link.php'; ?>

<?php include '../emp_mang/add_emp_modal.php'; ?>

<?php

if(isset($_GET['photo'])){
		if($_GET['photo']=="notchanged"){
			echo'<p class="alert alert-danger h6">Please insert your photo again !</p>';
    }else if($_GET['photo']=="changed"){
			echo'<p class="alert alert-success h6">Admin Photo updated Successfully !</p>';
    }else if($_GET['photo']=="wrongextension"){
			echo'<p class="alert alert-danger h6">Extension must br JPEG,JPG or PNG file !</p>';
    }
  }

if(isset($_GET['pass'])){
      if($_GET['pass']=="notchanged"){
        echo'<p class="alert alert-danger h6">Password not changed !</p>';
      } else  if($_GET['pass']=="changed"){
        echo'<p class="alert alert-sucess h6">Password  changed !</p>';
      } 
    }
?>
  
<!---Main body-->
<div class="container-fluid">
      <!---section 1-->
      
     
      <div class="container">

      <div class="row p-3">

      <?php
      
      require '../includes/conn.php';

      $query = "SELECT count(emp_gender) as cont_male , emp_status from pds WHERE emp_gender = 'male' and emp_status = 'contractual'"  ;

      if($runquery = $conn -> query($query)) {
              while($mydata = $runquery -> fetch_assoc()){
              $cont_male=$mydata["cont_male"];
             
              }}

              $query = "SELECT count(emp_gender) as perm_male , emp_status from pds WHERE emp_gender = 'male' and emp_status = 'permanent'"  ;

      if($runquery = $conn -> query($query)) {
              while($mydata = $runquery -> fetch_assoc()){
              $perm_male=$mydata["perm_male"];
             
              }}

              $query = "SELECT count(emp_gender) as cont_female , emp_status from pds WHERE emp_gender = 'female' and emp_status = 'contractual'"  ;

      if($runquery = $conn -> query($query)) {
              while($mydata = $runquery -> fetch_assoc()){
              $cont_female=$mydata["cont_female"];
             
              }}


              $query = "SELECT count(emp_gender) as perm_female , emp_status from pds WHERE emp_gender = 'female' and emp_status = 'permanent'"  ;

      if($runquery = $conn -> query($query)) {
              while($mydata = $runquery -> fetch_assoc()){
              $perm_female=$mydata["perm_female"];
             
              }}

              $total_cont = $cont_female + $cont_male;
              $total_perm = $perm_female + $perm_male ; 
      
      ?>

          <div class="col-lg-5 section1-box"> 
            <div class="row">
              <div class="col-lg-6">
                Male
                <h2 class="text-right pr-5"><?php echo $perm_male?></h2>
              </div>
              <div class="col-lg-6">
                Female
                <h2 class="text-right pr-5"><?php echo $perm_female?></h2>
              </div>
            </div>
              <h1 class="text-center"><?php echo $total_perm?></h1>
              <p class="text-center">REQULAR EMPLOYEES</p>
          </div>

          <div class="col-lg-5 section1-box ml-auto"> 
            <div class="row">
              <div class="col-lg-6">
                Male
                <h2 class="text-right pr-5"><?php echo $cont_male?></h2>
              </div>
              <div class="col-lg-6">
                Female
                <h2 class="text-right pr-5"><?php echo $cont_female?></h2>
              </div>
            </div>
              <h1 class="text-center"><?php echo $total_cont?></h1>
              <p class="text-center">CONTRACTUAL EMPLOYEES</p>
          </div>

      </div> 

      </div> <!----end of section 1-->



<?php   require "../emp_mang/view_employee.php";?>



      <!--Table-->

     
        <!---section 4 -->
        <!---first coluum--->
        <div class="container">

        <div class="row mt-5 mb-5">

            <div class="col-lg-4 p-3">
             <?php require "first_report.php"?>
            </div>
         

        <!--second-->
         
            <div class="col-lg-4 p-3">
              <?php require "second_report.php"?>
            </div>

            <!--Third-->
            <div class="col-lg-4 p-3">
              <?php require "third_report.php"?>
            </div>

          </div>

        </div>

      </div><!---end of Main body-->
      
      </div>  <!-- /#page-content-wrapper -->
  </div> <!-- /#wrapper -->