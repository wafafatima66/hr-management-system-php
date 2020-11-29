<?php include '../includes/link.php'; ?>
<?php include '../includes/header.php'; ?>
<?php include '../emp_mang/add_emp_modal.php'; ?>

  
<!---Main body-->
<div class="container-fluid">
      <!---section 1-->
      
     
      <div class="container">

      <div class="row p-3">

          <div class="col-lg-5 section1-box"> 
            <div class="row">
              <div class="col-lg-6">
                Male
                <h2 class="text-right pr-5">100</h2>
              </div>
              <div class="col-lg-6">
                Female
                <h2 class="text-right pr-5">130</h2>
              </div>
            </div>
              <h1 class="text-center">240</h1>
              <p class="text-center">REQULAR EMPLOYEES</p>
          </div>

          <div class="col-lg-5 section1-box ml-auto"> 
            <div class="row">
              <div class="col-lg-6">
                Male
                <h2 class="text-right pr-5">100</h2>
              </div>
              <div class="col-lg-6">
                Female
                <h2 class="text-right pr-5">130</h2>
              </div>
            </div>
              <h1 class="text-center">240</h1>
              <p class="text-center">CONTRACTUAL EMPLOYEES</p>
          </div>

      </div> 

      </div> <!----end of section 1-->

        <!--section 2-->

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

       

      <!---section 3 -->

      <div class="container">

        <!--Table-->
        <table class="table table-striped w-auto table-bordered">

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

    $query = "SELECT * FROM pds WHERE emp_id = '$search_id' AND emp_first_name = '$search_name' ";

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

  $query = "SELECT * FROM pds LIMIT 5 ";

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
</div>

        <!---section 4 -->
        <!---first coluum--->
        <div class="container">

        <div class="row mt-5">

            <div class="col-lg-4 p-3">
              <div class="card section4-card">
                <div class="cart-title section4-card-title"><h2>Personal Profile</h2></div>
                <div class="card-list p-4">

                <div class="list-group">
                  <h6>DOCTORATE</h6>
                   <div class="progress">
                      <div class="progress-bar progress-bar-less" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                      <div class="progress-bar" role="progressbar" style="width: 75%;font-weight:bold;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">75%</div>
                    </div>
                 </div>
                 
                <div class="list-group">
                  <h6>DOCTORATE</h6>
                   <div class="progress">
                      <div class="progress-bar progress-bar-less" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                      <div class="progress-bar" role="progressbar" style="width: 75%;font-weight:bold;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">75%</div>
                    </div>
                 </div>
                 
                <div class="list-group">
                  <h6>DOCTORATE</h6>
                   <div class="progress">
                      <div class="progress-bar progress-bar-less" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                      <div class="progress-bar" role="progressbar" style="width: 75%;font-weight:bold;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">75%</div>
                    </div>
                 </div>
             
                </div>
              </div>
            </div>
         

        <!--second-->
         
            <div class="col-lg-4 p-3">
              <div class="card section4-card">
                <div class="cart-title section4-card-title"><h2>On leave</h2></div>

                <table class="section4-table">

                  <tr class="section4-table-strip">
                    <td>Female</td>
                    <td>office of the president</td>
                  </tr>

                  <tr>
                    <td>Female</td>
                    <td>office of the president</td>
                  </tr>

                  <tr class="section4-table-strip">
                    <td>Female</td>
                    <td>office of the president</td>
                  </tr>

                  <tr>
                    <td>Female</td>
                    <td>office of the president</td>
                  </tr>
                  
                </table>

              </div>
            </div>

            <!--Third-->
            <div class="col-lg-4 p-3">
              <div class="card section4-card">
                <div class="cart-title section4-card-title"><h2>Calendar | Activities | Events </h2></div>
                  <div class="row p-3">
                    <div class="col-lg-7">
                      <list-group>
                        <h6 style="font-size:18px;">Admin counsil</h6>
                        <p style="font-size:12px;">Discusion on a meeting</p>
                      </list-group>
                    </div>
                    <div class="col-lg-5">
                      <div class="list-group">
                        <h6 style="margin:0;" >January</h6>
                        <h1 style="color:#E6AD0F; margin:0;">26</h1>
                        <h6 style="margin:0;">Thursday</h6>
                      </div>
                    </div>
                  </div>
              </div>
            </div>

          </div>
        </div>

      </div><!---end of Main body-->
      
      </div>  <!-- /#page-content-wrapper -->
  </div> <!-- /#wrapper -->