<!--section 2-->

   
        <div class="container">

        <div class="container-table form-inline">

        
        <button type="button" class="btn mb-2" data-toggle="modal" data-target="#addemployee" ><i class="fas fa-plus pr-2"></i>Add Employee</button> 

        <form class="form-inline" method="post" action="">
          
            <div class="form-group mx-sm-2 mb-2">
              <input type="text" class="form-control"  placeholder="Employee ID" name="search_id">
            </div>

            <div class="form-group mx-sm-2 mb-2">
              <input type="text" class="form-control" placeholder="Employee name" name="search_name">
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

    $query = "SELECT * FROM add_emp a , pds p WHERE  a.emp_id = '$search_id' OR a.emp_first_name = '$search_name' OR a.emp_status = '$search_status'  OR a.emp_last_name = '$search_name' OR CONCAT( a.emp_first_name, ' ', a.emp_last_name )  = '$search_name' having a.emp_id = p.emp_id";

    $runquery = $conn -> query($query);
    if($runquery == true){
     
       
    while($mydata = $runquery -> fetch_assoc()){

      $emp_id =   $mydata["emp_id"];
      $emp_first_name =   $mydata["emp_first_name"];
      $emp_last_name =   $mydata["emp_last_name"];
      $emp_middle_name =   $mydata["emp_middle_name"];
      $emp_image = '../uploads/image/'.$mydata["emp_image"];
      $office_assign =   $mydata["office_assign"];
      $office_dept =   $mydata["office_dept"];

      $emp_name =  $emp_first_name . ' ' . $emp_last_name . ' '. $emp_middle_name;

?>

          <!--Table body-->
          <tbody>

            <tr class="table-strip clickable-row" data-href='../emp_mang/emp_profile.php?emp_id=<?php echo $mydata["emp_id"];?>'>
             
            <td style="text-transform: capitalize;">
                <div class="d-flex flex-row "><img src="<?php echo $emp_image?>" alt="" style="width:50px; height:50px; border-radius: 50%;"><div class="d-flex flex-column ml-3"><div style="font-weight:bold;"><?php echo $emp_name ?></div><div><?php echo $office_assign ?></div></div>
            </td>
             
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

  $query = "SELECT * FROM pds p , add_emp a where p.emp_id = a.emp_id ";

  $runquery = $conn -> query($query);
  if($runquery == true){
   
     
  while($mydata = $runquery -> fetch_assoc()){

    $emp_id =   $mydata["emp_id"];
    $emp_first_name =   $mydata["emp_first_name"];
    $emp_last_name =   $mydata["emp_last_name"];
    $emp_middle_name =   $mydata["emp_middle_name"];
    $emp_image = '../uploads/image/'.$mydata["emp_image"];
    $office_assign =   $mydata["office_assign"];
    $office_dept =   $mydata["office_dept"];

    $emp_name =  $emp_first_name . ' ' . $emp_last_name . ' '. $emp_middle_name;

?>


          <!--Table body-->
          <tbody>
        
          <tr class="table-strip clickable-row" data-href='../emp_mang/emp_profile.php?emp_id=<?php echo $mydata["emp_id"];?>'>
           
          <td style="text-transform: capitalize;">
                <div class="d-flex flex-row "><img src="<?php echo $emp_image?>" alt="" style="width:50px; height:50px; border-radius: 50%;"><div class="d-flex flex-column ml-3"><div style="font-weight:bold;"><?php echo $emp_name ?></div><div><?php echo $office_assign ?></div></div>
            </td>
            
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