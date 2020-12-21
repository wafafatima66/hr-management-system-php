
<?php include '../includes/link.php'; ?>
<?php include '../includes/header.php'; ?>

  
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

          <button type="button" class="btn mb-2 " data-toggle="modal" data-target="#addemployee"  data-backdrop="static" data-keyboard="false" ><i class="fas fa-plus pr-2"></i>Add Employee</button> 

          <form class="form-inline" method="post" action="">
          
            <div class="form-group mx-sm-2 mb-2">
              <input type="text" class="form-control"  placeholder="Employee ID" name="search_id">
            </div>

            <div class="form-group mx-sm-2 mb-2">
              <input type="text" class="form-control"  placeholder="Employee name" name="search_name">
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
      <div class="container" style="height:300px ; overflow-x: hidden; 
  overflow-y: scroll;">

        <!--Table-->
        <table class="table table-striped  table-bordered mt-3">

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


    require '../includes/conn.php';

   
      $search_id=$_POST['search_id'];

    
    $search_name=$_POST['search_name'];

      
    $search_status=$_POST['search_status'];

        

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

          <?php } ?>

        </table>
        <!--Table-->
      
      
    </div>

    

    <?php
  }else {
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
  <div class="container">
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

<?php } ?>
      </table>
      <!--Table-->

    
  </div>
  

  <?php
  
  }
  }

  ?>

    </div>  <!-- /#page-content-wrapper -->
  </div> <!-- /#wrapper -->