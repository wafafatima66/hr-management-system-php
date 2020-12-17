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
  }else  if($_GET['submit']=="update"){
    echo'<p class="alert alert-success h6"> TRAINING FORM UPDATED ! </p>';
}else  if($_GET['submit']=="notupdate"){
  echo'<p class="alert alert-danger h6"> TRAINING FORM NOT UPDATED  ! </p>';
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

                  $query = "SELECT training.emp_id, training.title_of_training , training.from_date , training.to_date , training.venue , training.sponsor , add_emp.emp_first_name , add_emp.emp_last_name, add_emp.emp_middle_name, add_emp.emp_image, add_emp.office_assign , pds.emp_gender from training 
                  inner join add_emp on training.emp_id = add_emp.emp_id
                   inner join pds on   pds.emp_id = training.emp_id 
                   WHERE  training.title_of_training = '$search_query' OR add_emp.emp_first_name like '%$search_query%'";

                  
                
                 
              if($runquery = $conn -> query($query)){

                
                    while($mydata = $runquery -> fetch_assoc())
                        { 
                          $emp_first_name =   $mydata["emp_first_name"];
                          $emp_last_name =   $mydata["emp_last_name"];
                          $emp_middle_name =   $mydata["emp_middle_name"];
                          $emp_image = '../uploads/image/'.$mydata["emp_image"];
                          $office_assign =   $mydata["office_assign"];

                          $emp_name =  $emp_first_name . ' ' . $emp_last_name . ' '. $emp_middle_name;
                       
             
                          $emp_gender =   $mydata["emp_gender"];
                          $title_of_training =   $mydata["title_of_training"];
                          $from_date =   $mydata["from_date"];
                          $to_date =   $mydata["to_date"];
                          $venue =   $mydata["venue"];
                          $sponsor =   $mydata["sponsor"];

                          $from_date = date("d M y", strtotime($from_date));
                          $to_date = date("d M y", strtotime($to_date));
                        
                ?>

              <tbody >
              <tr data-toggle="modal" data-id="<?php echo $mydata["emp_id"] ?>" data-target="#viewtraining" data-todo="<?php echo $mydata["title_of_training"] ?>" class="view_training">

                  <td scope="row"><?php echo $office_assign ?></td>
                  <td style="text-transform: capitalize;"><div class="d-flex flex-row "><img src="<?php echo $emp_image?>" alt="" style="width:50px; height:50px; border-radius: 50%;"><div class="d-flex flex-column ml-3"><div><?php echo $emp_name ?></div><div><?php echo $office_assign ?></div></div></td>

                  <td><?php echo $emp_gender ?></td>
                  <td><?php echo $title_of_training ?></td>
                  <td><?php echo $from_date ?>-<?php echo $to_date ?></td>
                  <td><?php echo $venue ?></td>
                  <td><?php echo $sponsor ?></td>
                </tr>
                
           

           <?php   
           }} 

           ?>

          <?php require "training_tr_script.php"?>

          </tbody>
         
           </table>

         

          <?php } else {

              require '../includes/conn.php';

          
                  $query = "SELECT training.emp_id,  training.title_of_training , training.from_date , training.to_date , training.venue , training.sponsor , add_emp.emp_first_name , add_emp.emp_last_name, add_emp.emp_middle_name, add_emp.emp_image , add_emp.office_assign , pds.emp_gender from training 
                  inner join add_emp on training.emp_id = add_emp.emp_id
                   inner join pds on   pds.emp_id = training.emp_id  ";
                
                    if($runquery = $conn -> query($query)){

                    
                    while($mydata = $runquery -> fetch_assoc()){

                     // $emp_id =   $mydata["emp_id"];
                        $emp_first_name =   $mydata["emp_first_name"];
                        $emp_last_name =   $mydata["emp_last_name"];
                        $emp_middle_name =   $mydata["emp_middle_name"];
                        $emp_image = '../uploads/image/'.$mydata["emp_image"];
                        $office_assign =   $mydata["office_assign"];

                        $emp_name =  $emp_first_name . ' ' . $emp_last_name . ' '. $emp_middle_name;
                   
                    
                        $emp_gender =   $mydata["emp_gender"];
                          $title_of_training =   $mydata["title_of_training"];
                          $from_date =   $mydata["from_date"];
                          $to_date =   $mydata["to_date"];
                          $venue =   $mydata["venue"];
                          $sponsor =   $mydata["sponsor"];
                         // $emp_image = '../uploads/image/'.$mydata["emp_image"];

              
                $from_date = date("d M y", strtotime($from_date));
                $to_date = date("d M y", strtotime($to_date));
                     

                       
                    ?>



               <tbody >
                        <tr data-toggle="modal" data-id="<?php echo $mydata["emp_id"] ?>" data-target="#viewtraining" data-todo="<?php echo $mydata["title_of_training"] ?>" class="view_training">

                        <td scope="row">Office of the president</td>
                          <td style="text-transform: capitalize;"><div class="d-flex flex-row "><img src="<?php echo $emp_image?>" alt="" style="width:50px; height:50px; border-radius: 50%;"><div class="d-flex flex-column ml-3"><div><?php echo $emp_name ?></div><div><?php echo $office_assign ?></div></div></td>
                  <td><?php echo $emp_gender ?></div></td>
                  <td><?php echo $title_of_training ?></td>
                  <td><?php echo $from_date ?> - <?php echo $to_date ?></td>
                  <td><?php echo $venue ?></td>
                  <td><?php echo $sponsor ?></td>

                  <?php require "training_tr_script.php"?>

                  <?php   } }  ?>


                </tr>

                
            </tbody>
         
          


           <?php     } ?>
           </table>

</div>

    <div class=" training_section_2 pt-5 container">


        
               <div class="form-inline">

            
               
                         <div class="col-lg-7 training_section_2_header ">
                            <h4>SUMMARY OF TRAINING</h4>
                        </div>

                        <div class="col-lg-5" >

                        <form action="" method="post" class="form-inline ">

                            <div class="form-group mx-sm-1 ">
                              <div class="d-flex flex-column">
                                  <label style="color:#C3CFD5;" >From </label>
                                  <input type="date" class="form-control" name="training_from_date" style="width:140px;">
                              </div>   
                            </div>

                              <div class="form-group mx-sm-1  ">
                                  <div class="d-flex flex-column">
                                      <label style="color:#C3CFD5;" >To</label>
                                      <input type="date" class="form-control" name="training_to_date" style="width:140px;" >
                                  </div>   
                              </div>

                          
                          <button class="btn btn-search mx-sm-3" type="submit" name="search_date">Search</button>
                         
                           
                            
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

                        if(isset($_POST['search_date'])){

require '../includes/conn.php';

$training_from_date = $_POST['training_from_date'];
$training_to_date = $_POST['training_to_date'];

$query = "select count(title_of_training) , title_of_training , no_of_hrs , venue , sponsor from training WHERE from_date = '$training_from_date' and to_date = '$training_to_date' GROUP by title_of_training "; 

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
                      }    }  ?>
                      
                      
                      </table>

                      <?php   }


else {
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
                      }    } ?>
                      </table>
                    
                   <?php }


?>

                  

                    </div>

                   

               </div>

               <div class="container mt-2 mb-5">
                            <div class="text-right">
                                <button class="btn" style="background: #345587;color:#EFE20A;" >PRINT</button>
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

   <?php require "training_modal.php"; ?>
   <?php require "view_training_modal.php"; ?>