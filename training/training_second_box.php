
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
            
            </form>
             
        </div>

    </div>
       

    <div id="printableArea_training_summary">
         
    <div class="training_section_2_body">

        <div class="container" style="height:300px ; overflow-x: hidden; overflow-y: scroll;">

            <table class="table table-bordered table-sm" >

                <thead class="table-head">
                    <tr>
                    <th scope="col">Name of Training</th>
                    <th scope="col">No. of Participants</th>
                    <th scope="col">No. of Hours</th>
                    <th scope="col">Venue</th>
                    <th scope="col">Sponsors/Office In-Charge</th>
                    <th scope="col">Action</th>
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
               <td class="text-center">
                <a href="../emp_mang/emp_profile.php?emp_id=<?php echo $mydata["emp_id"];?>"><i class="fas fa-edit"></i></a> 
                <a href="../emp_mang/emp_mang.php?emp_id=<?php echo $mydata["emp_id"];?>"> <i class="fas fa-trash-alt"></i></a>
              </td>
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

               <td class="text-center">
                <a  data-toggle="modal" data-id="<?php echo $title_of_training ?>" data-target="#edit_training" class="edit_training" ><i class="fas fa-edit"></i></a> 

                <a href="sec_box-config/delete.php?title=<?php echo $title_of_training?>"> <i class="fas fa-trash-alt"></i></a>

              </td>

             </tr>
         </tbody>

        
<?php
       }    } ?>
       </table>
     
    <?php }


?>

   

     </div>

    

</div>

</div>

<div class="container mt-2 mb-5">
             <div class="text-right">
                 <button class="btn" style="background: #345587;color:#EFE20A;" onclick="printDiv('printableArea_training_summary')" >PRINT</button>
             </div>
     </div>

</div>

<?php //edit training modal
  require "sec_box-config/edit_training_modal.php" ?>