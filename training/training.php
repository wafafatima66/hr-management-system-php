<?php include '../includes/link.php'; ?>
<?php include '../includes/header.php'; ?>




<?php
if(isset($_GET['submit'])){
    if($_GET['submit']=="error"){
        echo'<p class="alert alert-danger h6">TRAINING NOT ADDEDD SUCCESSFULLY ! TRY AGAIN</p>';
    }else  if($_GET['submit']=="success"){
        echo'<p class="alert alert-success h6"> TRAINING ADDEDD SUCCESSFULLY </p>';
    }else  if($_GET['submit']=="noid"){
      echo'<p class="alert alert-danger h6"> EMPLOYEE NOT FOUND ! </p>';
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

                $emp_name =   $mydata["emp_name"];
                $office_assign =   $mydata["office_assign"];
                $emp_gender =   $mydata["emp_gender"];
                $title_of_training =   $mydata["title_of_training"];
                $from_date =   $mydata["from_date"];
                $to_date =   $mydata["to_date"];
                $venue =   $mydata["venue"];
                $sponsor =   $mydata["sponsor"];
                $emp_image = '../uploads/image/'.$mydata["emp_image"];
?>

                <tbody >
                <tr>
                <td scope="row"><?php echo $office_assign ?></td>
                <td style="text-transform: capitalize;"><div class="d-flex flex-row "><img src="<?php echo $emp_image?>" alt="" style="width:50px; height:50px; border-radius: 50%;"><div class="d-flex flex-column ml-3"><div><?php echo $emp_name ?></div><div><?php echo $office_assign ?></div></div></td>
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

                $emp_name =   $mydata["emp_name"];
                $office_assign =   $mydata["office_assign"];
                $emp_gender =   $mydata["emp_gender"];
                $title_of_training =   $mydata["title_of_training"];
                $from_date =   $mydata["from_date"];
                $to_date =   $mydata["to_date"];
                $venue =   $mydata["venue"];
                $sponsor =   $mydata["sponsor"];
                $emp_image = '../uploads/image/'.$mydata["emp_image"];

               // $date = date_format( $from_date , "d/M/y");
                $from_date = date("d M y", strtotime($from_date));
                $to_date = date("d M y", strtotime($to_date));
?>
                <tbody >
                <tr>
                <td scope="row">Office of the president</td>
                  <td style="text-transform: capitalize;"><div class="d-flex flex-row "><img src="<?php echo $emp_image?>" alt="" style="width:50px; height:50px; border-radius: 50%;"><div class="d-flex flex-column ml-3"><div><?php echo $emp_name ?></div><div><?php echo $office_assign ?></div></div></td>
                  <td><?php echo $emp_gender ?></div></td>
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


<div class=" training_section_2 pt-5">
        
               <div class="form-inline">
               
                         <div class="col-lg-8 training_section_2_header ">
                            <h4>SUMMARY OF TRAINING</h4>
                        </div>

                        <div class="col-lg-4" >

                        <form action="" method="post" class="form-inline ">

                            <div class="form-group mx-sm-1 mb-2">
                              <div class="d-flex flex-column">
                                  <label style="color:#C3CFD5;" >From </label>
                                  <input type="date" class="form-control" name="training_from_date" style="width:140px;">
                              </div>   
                            </div>

                              <div class="form-group mx-sm-1 mb-2 ">
                                  <div class="d-flex flex-column">
                                      <label style="color:#C3CFD5;" >To</label>
                                      <input type="date" class="form-control" name="training_to_date" style="width:140px;" >
                                  </div>   
                              </div>


                            <button class="btn">Filter</button>

                            </div>

                            </form>

                        
                        
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

<?php

require '../includes/conn.php';

$query = "select count(title_of_training) , title_of_training , no_of_hrs , venue , sponsor from training GROUP by title_of_training "; 

if($runquery = $conn -> query($query)){

  while($mydata = $runquery -> fetch_assoc()){

    $title_of_training =   $mydata["title_of_training"];
    $no_of_hrs =   $mydata["no_of_hrs"];
    $venue =   $mydata["venue"];
    $sponsor =   $mydata["sponsor"];
    $no_of_participants =   $mydata["count(title_of_training)"];
  ?>


                        <tbody >
                            <tr>
                              <th scope="row"><?php echo $title_of_training ?></th>
                              <td><?php echo $no_of_participants ?></td>
                              <td><?php echo $no_of_hrs ?></td>
                              <td><?php echo $venue ?></td>
                              <td><?php echo $sponsor ?></td>
                            </tr>
                        </tbody>
<?php
                      }    }


?>

                    </table>

                    </div>
               </div>
            
</div>


<!--button to add training-->
            <!-- Modal -->

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
$(document).ready(function(){
    $("#emp_id").keyup(function(){
        $.ajax({
            url:'training-message.php',
            type : 'post',
            data: {emp_id : $(this).val()},
            success : function(result){
                
                $('#space').html(result);
                

            }
        });
    });

});

</script>

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
                      <input type="text" class="form-control"  placeholder="Employee Id" style="width:250px" name="emp_id" id="emp_id">
                      </div>

                      <div id="space"></div>
                     
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


             
      </div>  <!-- /#page-content-wrapper -->
  </div> <!-- /#wrapper -->