<?php include '../includes/link.php'; ?>
<?php include '../includes/header.php'; ?>

<?php
if(isset($_GET['submit'])){
    if($_GET['submit']=="error"){
        echo'<p class="alert alert-danger h6">TRAINING NOT ADDEDD SUCCESSFULLY ! TRY AGAIN</p>';
    }else  if($_GET['submit']=="success"){
        echo'<p class="alert alert-success h6"> TRAINING ADDEDD SUCCESSFULLY </p>';
    }
}
?>

<div class="container pt-5 training_section_1">

  
  
  <div class="form-inline" >
          <button type="button" class="btn mb-2" data-toggle="modal" data-target="#addtraining" ><i class="fas fa-plus pr-2"></i>Add Training</button> 
           
            <div class="ml-auto">
              <form method="post" action="">
                <div class="form-group mx-sm-3 mb-2">
                    <input type="text" class="form-control"  placeholder="Search Employee or Name of Training" style="width:250px" name="search_query">
                    <button type="submit" class="btn btn-search mx-sm-3" name="search">SEARCH</button> 
                </div>
              </form>
            </div>
            
            
        </div>
  

        <table class="table table-bordered table-sm" >

                        <thead class="table-head">
                            <tr>
                              <th scope="col">Department/Unit</th>
                              <th scope="col">Participant</th>
                              <th scope="col">Sex</th>
                              <th scope="col">Title of Training</th>
                              <th scope="col">Date</th>
                              <th scope="col">Venue</th>
                              <th scope="col">Sponsoring Agency</th>
                            </tr>
                        </thead>

          <?php

          if(isset($_POST['search'])){


              require '../includes/conn.php';

            
                $search_query=$_POST['search_query'];

                  $query = "SELECT * FROM training WHERE  title_of_training = '$search_query' OR emp_first_name = '$search_query' ";
                
              if($runquery = $conn -> query($query)){
              
              while($mydata = $runquery -> fetch_assoc()){

                $emp_first_name =   $mydata["emp_first_name"];
                $office_assign =   $mydata["office_assign"];
                $emp_gender =   $mydata["emp_gender"];
                $title_of_training =   $mydata["title_of_training"];
                $from_date =   $mydata["from_date"];
                $to_date =   $mydata["to_date"];
                $venue =   $mydata["venue"];
                $sponsor =   $mydata["sponsor"];
?>

                <tbody >
                <tr>
                <th scope="row"><?php echo $office_assign ?></th>
                  <td><?php echo $emp_first_name ?></td>
                  <td><?php echo $emp_gender ?></td>
                  <td><?php echo $title_of_training ?></td>
                  <td><?php echo $from_date ?>-<?php echo $to_date ?></td>
                  <td><?php echo $venue ?></td>
                  <td><?php echo $sponsor ?></td>
                </tr>
                
            </tbody>

           <?php   }} else echo '<p class="alert alert-success h6"> NO EMPLOYEE OR TRAINING FOUND </p>';


            } else {

              require '../includes/conn.php';

          
                  $query = "SELECT * FROM training ";
                
              if($runquery = $conn -> query($query)){
              
              while($mydata = $runquery -> fetch_assoc()){

                $emp_first_name =   $mydata["emp_first_name"];
                $office_assign =   $mydata["office_assign"];
                $emp_gender =   $mydata["emp_gender"];
                $title_of_training =   $mydata["title_of_training"];
                $from_date =   $mydata["from_date"];
                $to_date =   $mydata["to_date"];
                $venue =   $mydata["venue"];
                $sponsor =   $mydata["sponsor"];

               // $date = date_format( $from_date , "d/M/y");
                $from_date = date("d M y", strtotime($from_date));
                $to_date = date("d M y", strtotime($to_date));
?>
                <tbody >
                <tr>
                <th scope="row"><?php echo $office_assign ?></th>
                  <td><?php echo $emp_first_name ?></td>
                  <td><?php echo $emp_gender ?></td>
                  <td><?php echo $title_of_training ?></td>
                  <td><?php echo $from_date ?> - <?php echo $to_date ?></td>
                  <td><?php echo $venue ?></td>
                  <td><?php echo $sponsor ?></td>
                </tr>
                
            </tbody>

           <?php   }}

            }

          ?>
          


                    </table>
                   
</div>


<div class=" container training_section_2 pt-5">
        
               <div class="container">
                   <div class="row">
                         <div class="col-lg-9 training_section_2_header ">
                            <h4>SUMMARY OF TRAINING</h4>
                        </div>

                        <div class="col-lg-2 d-flex align-items-center">
                            <form  class="form-inline">
                                <div class="form-group mx-sm-1">
                                    <div class="d-flex justify-content-center">
                                        <input type="text" class="form-control" id="" placeholder="" style="width:80px">
                                        <button class="btn mx-sm-1" style="background:#345587;"></button>
                                        <input type="text" class="form-control" id="" placeholder="" style="width:80px">
                                        <button class="btn mx-sm-1" style="background:#345587;"></button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        
                   </div>
               </div>

               <div class="training_section_2_body">
                    <div class="container">
                    <table class="table table-bordered table-sm" >
                        <thead class="table-head">
                            <tr>
                            <th scope="col">Name of Training</th>
                            <th scope="col">No. of Participants</th>
                            <th scope="col">No. of Hours</th>
                            <th scope="col">Venue</th>
                            <th scope="col">Sponsors/Office In-Charge</th>
                            </tr>
                        </thead>
                        <tbody >
                            <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            </tr>
                            <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <td>@mdo</td>
                            </tr>
                            <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                    </div>
               </div>
        

        
</div>


<!--button to add training-->
            <!-- Modal -->

    <div class="modal fade addtraining" id="addtraining" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">ADD TRAINING</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                </div>

                <form method="post" action="training-config.php"> 

                <div class="modal-body ">

                
                 

                   <h6>TRAINEES/ATTENDESS</h6>

                   
                     <div class="form-inline">
                     <div class="form-group mx-sm-3 mb-2">
                          <label for="">Employee ID</label>
                      <input type="text" class="form-control"  placeholder="Employee Id" style="width:250px" name="emp_id">
                      </div>
                     
                     </div>
                  

        
        <h6 class="pt-2">TRAINING INFORMATION</h6>

        <div class="form-inline">
      
            <div class="form-group mx-sm-3 mb-2">
                <label  style="width:100px">Title of training</label>
              <input type="text" class="form-control" style="width:300px;" name="title_of_training">
            </div>


            <div class="form-group mx-sm-3 mb-2">
                <label >Type</label>
              <select class="form-control" style="width:180px" name="type">
                <option value ="status">Status</option>
                <option>...</option>
            </select>
            </div>


            <div class="form-group mx-sm-3 mb-2">
            <label style="width:100px">Inclusive Dates</label>
              <input type="date" class="form-control" name="from_date" >
            </div>

            <div class="form-group mx-sm-3 mb-2">
              <input type="date" class="form-control" name="to_date" >
            </div>


            <div class="form-group mx-sm-3 mb-2">
            <label style="width:100px">No. of Hours</label>
              <input type="text" class="form-control"  style="width:80px" name="no_of_hrs">
            </div>

            <div class="form-group mx-sm-3 mb-2">
            <label style="width:100px">Venue</label>
              <input type="text" class="form-control" style="width:450px" name="venue">
            </div>
           
            <div class="form-group mx-sm-3 mb-2">
                <label style="width:100px">Address</label>
              <input class="form-control" style="width:160px" name="province"> 
            </div>

            <div class="form-group mx-sm-3 mb-2">
              <input class="form-control" style="width:160px" name="city">
               
            </div>

            <div class="form-group mx-sm-3 mb-2">
              <input class="form-control" style="width:160px" name="barangay">
              
            </div>

            <div class="form-group mx-sm-3 mb-2">
            <label style="width:100px">Speaker/s</label>
              <input type="text" class="form-control"  placeholder="LastName" style="width:140px" name="speaker_last_name">
            </div>

            <div class="form-group mx-sm-3 mb-2">
              <input type="text" class="form-control"  placeholder="FirstName" style="width:140px" name="speaker_first_name">
            </div>

            <div class="form-group mx-sm-3 mb-2">
              <input type="text" class="form-control" placeholder="MiddleName" style="width:140px" name="speaker_middle_name">
            </div>

            <div class="form-group mx-sm-3 mb-2">
              <input type="text" class="form-control" placeholder="Ext" style="width:100px" name="speaker_ext">
            </div>

            <div class="form-group mx-sm-3 mb-2">
            <label style="width:100px">Agency</label>
              <input type="text" class="form-control"  style="width:300px" name="agency">
            </div>

            <div class="form-group mx-sm-3 mb-2">
            <label >Title</label>
              <input type="text" class="form-control" style="width:250px" name="title">
            </div>

            <div class="form-group mx-sm-3 mb-2">
            <label >Sponsor Agency/ies</label>
              <input type="text" class="form-control" style="width:350px" name="sponsor">
            </div>
          
        </div>

    </div>
                <div class="modal-footer">
                    <button type="submit" class="btn " name="submit">Submit</button>
                </div>

         </form>

                </div>
            </div>
            </div>