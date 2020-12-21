<?php
   include('../index/session.php');
?>


<?php include '../includes/link.php'; ?>
<?php include '../includes/header.php'; ?>
<?php include '../emp_mang/add_emp_modal.php'; ?>



  
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

        <!--section 2-->
        <div class="container">

        <div class="container-table form-inline">

        
        <button type="button" class="btn mb-2" data-toggle="modal" data-target="#addemployee" ><i class="fas fa-plus pr-2"></i>Add Employee</button> 

        <form class="form-inline" method="post" action="">
          
            <div class="form-group mx-sm-2 mb-2">
              <input type="text" class="form-control" id="" placeholder="Employee ID" name="search_id">
            </div>

            <div class="form-group mx-sm-2 mb-2">
              <input type="text" class="form-control" id="" placeholder="Employee name" name="search_name">
            </div>

            <div class="form-group mx-sm-2 mb-2">
              <select class="form-control" name="search_status">
                    <option value="0">Select</option>
                    <option value="permanent"> Permanent</option>
                    <option value="contractual" >contractual</option>
                    <option value="job_order" >job_order</option>
            </select>
            </div>

            <button type="submit" name="submit" class="btn btn-search mb-2 pr-5 pl-5">SEARCH</button> 
        </form>
        </div>

</div>
       

      <!---section 3 -->

    
<div class="container" style="height:300px ; overflow-x: hidden; 
  overflow-y: scroll;"  >
        <!--Table-->
        <table class="table table-striped table-bordered" style="width:100%;">

          <!--Table head-->
          <thead class="table-head">
            <tr>
              <th>Name</th>
              <th>Employee ID</th>
              <th>Sex</th>
              <th>Department/Unit</th>
              <th>Contact No</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <!--Table head-->

          

          <?php

if(isset($_POST['submit'])){



    $search_id=$_POST['search_id'];
    $search_name=$_POST['search_name'];
    $search_status=$_POST['search_status'];

    require '../includes/conn.php';

    $query = "SELECT * FROM pds WHERE  emp_id = '$search_id' OR emp_first_name = '$search_name' OR emp_status = '$search_status'";

    $runquery = $conn -> query($query);
    if($runquery == true){
     
       
    while($mydata = $runquery -> fetch_assoc()){

?>

          <!--Table body-->
          <tbody>

            <tr class="table-strip clickable-row" data-href='../emp_mang/emp_profile.php?emp_id=<?php echo $mydata["emp_id"];?>'>
             
              <td><?php echo $mydata["emp_first_name"]?></td>
              <td><?php echo $mydata["emp_id"]?></td>
              <td><?php echo $mydata["emp_gender"]?></td>
              <td><?php echo $mydata["office_assign"]?></td>
              <td><?php echo $mydata["emp_tel_no"]?></td>
              <td><?php echo $mydata["emp_status"]?></td>
                <td class="text-center">
                <a href="../emp_mang/emp_profile.php?emp_id=<?php echo $mydata["emp_id"];?>"><i class="fas fa-edit"></i></a> 
                <a href="../emp_mang/emp_mang.php?emp_id=<?php echo $mydata["emp_id"];?>"> <i class="fas fa-trash-alt"></i></a>
              </td>
            </tr>
           
            
          </tbody>
          <!--Table body-->


          

      
   

    <?php
  }}else {
    echo'<p class="alert alert-danger h6">EMPLOYEE ID NOT FOUND</p>';
  }
}

else {

  require '../includes/conn.php';

  $query = "SELECT * FROM pds ";

  $runquery = $conn -> query($query);
  if($runquery == true){
   
     
  while($mydata = $runquery -> fetch_assoc()){

?>


          <!--Table body-->
          <tbody>
        
          <tr class="table-strip clickable-row" data-href='../emp_mang/emp_profile.php?emp_id=<?php echo $mydata["emp_id"];?>'>
           
            <td><?php echo $mydata["emp_first_name"]?></td>
            <td><?php echo $mydata["emp_id"]?></td>
            <td><?php echo $mydata["emp_gender"]?></td>
            <td><?php echo $mydata["office_assign"]?></td>
            <td><?php echo $mydata["emp_tel_no"]?></td>
            <td><?php echo $mydata["emp_status"]?></td>
              <td class="text-center">
              <a href="../emp_mang/emp_profile.php?emp_id=<?php echo $mydata["emp_id"];?>"><i class="fas fa-edit"></i></a> 
              <a href="../emp_mang/emp_mang.php?emp_id=<?php echo $mydata["emp_id"];?>"> <i class="fas fa-trash-alt"></i></a>
            </td>
          </tr>
         
          </tbody>
          <!--Table body-->
      


    

    
 

  <?php
  }
  }
  }

  ?>

</table>

</div>
      <!--Table-->


        <!---section 4 -->
        <!---first coluum--->
        <div class="container">

        <div class="row mt-5">

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