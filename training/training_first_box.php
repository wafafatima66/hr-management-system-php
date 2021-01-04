

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
  
<div style="height:300px ; overflow-x: hidden; 
  overflow-y: scroll;">
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

          require '../includes/conn.php';

          if(isset($_POST['search'])){

                $search_query=$_POST['search_query'];

                  $query = "SELECT training.emp_id, training.title_of_training , training.from_date , training.to_date , training.venue , training.sponsor , add_emp.emp_first_name , add_emp.emp_last_name, add_emp.emp_middle_name, add_emp.emp_image, add_emp.office_assign, add_emp.office_dept , pds.emp_gender from training 
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
                          $office_dept =   $mydata["office_dept"];

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

                <td scope="row"><?php echo $office_dept ?></td>
                
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

          <?php require "first_box-config/training_tr_script.php"?>

          </tbody>
         
         

          </table>

          <?php } else {

            

          
                  $query = "SELECT training.emp_id,  training.title_of_training , training.from_date , training.to_date , training.venue , training.sponsor , add_emp.emp_first_name , add_emp.emp_last_name, add_emp.emp_middle_name, add_emp.emp_image , add_emp.office_assign, add_emp.office_dept  , pds.emp_gender from training 
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
                        $office_dept =   $mydata["office_dept"];

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

                        <td scope="row"><?php  echo $office_dept?></td>

                        <td style="text-transform: capitalize;"><div class="d-flex flex-row "><img src="<?php echo $emp_image?>" alt="" style="width:50px; height:50px; border-radius: 50%;"><div class="d-flex flex-column ml-3"><div><?php echo $emp_name ?></div><div><?php echo $office_assign ?></div></div></td>

                        <td><?php echo $emp_gender ?></div></td>
                        <td><?php echo $title_of_training ?></td>
                        <td><?php echo $from_date ?> - <?php echo $to_date ?></td>
                        <td><?php echo $venue ?></td>
                        <td><?php echo $sponsor ?></td>

                        <?php require "first_box-config/training_tr_script.php"?>

                        <?php   } }  ?>


                     </tr>

                
            </tbody>
         
            </table>


           <?php     } ?>


          

           </div>

</div>
