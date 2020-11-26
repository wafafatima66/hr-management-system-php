   <!--body section of learning and development-->
   <div class=" emp_profile_section2 pt-4 mb-5 pb-2" id="content-7" style="background-color:#E6F7FF">  

   <?php
        if(isset($_POST['updatelearn'])){

        $emp_id = $_REQUEST["emp_id"];


        if(isset($_POST["title_of_training"]) || isset($_POST["type_of_position"]) || isset($_POST["no_of_hrs"])  || isset($_POST["conducted_by"])){

            $title_of_training=$_POST['title_of_training'];
            $type_of_position=$_POST['type_of_position'];
            $no_of_hrs=$_POST['no_of_hrs'];
            $from_date=$_POST['from_date'];
            $to_date=$_POST['to_date'];
            $conducted_by=$_POST['conducted_by'];
         
    $upquery = "UPDATE emp_learning SET title_of_training= '$title_of_training', type_of_position ='$type_of_position' , no_of_hrs ='$no_of_hrs' , from_date ='$from_date' , to_date ='$to_date' , conducted_by ='$conducted_by' WHERE emp_id = $emp_id";
    
    $runupquery = $conn -> query($upquery);
    if($runupquery==true){
        echo'<p class="alert alert-success h6">UPDATED </p>';
    } else echo'<p class="alert alert-danger h6"> NOT UPDATED </p>';

    }
}

    ?>   
            <form class="form-inline" method="post" action="">
                
                <div class="form-group mx-sm-3 mb-2">
                    <div class="d-flex flex-column">
                        <label for="">TITLE OF TRAINING PROGRAMS ATTENDED</label>
                        <input type="text" class="form-control" id="" value="<?php echo $title_of_training?>" style="width:300px;" name="title_of_training">
                    </div>
                </div>
                
                <div class="form-group mx-sm-2 mb-2">
                    <div class="d-flex flex-column">
                        <label for="">TYPE OF PROGRAM</label>
                        <input type="text" class="form-control" id="" value="<?php echo $type_of_position?>" style="width:150px;" name="type_of_position">
                    </div>
                </div>

                <div class="form-group mx-sm-2 mb-2">
                    <div class="d-flex flex-column">
                        <label for="">NO. OF HOURS</label>
                        <input type="text" class="form-control" id="" value="<?php echo $no_of_hrs?>" style="width:50px;" name="no_of_hrs">
                    </div>
                </div>

                
                <div class="form-group mx-sm-2 mb-2">
                    <div class="d-flex flex-column">
                        <label for="">INCLUSIVE DATES</label>
                            <div class="d-flex justify-content-center">

                            <input type="date" class="form-control mx-sm-1 mb-2" id="" value="<?php echo $from_date?>" name="from_date" >
                            
                            <input type="date" class="form-control mx-sm-1 mb-2" id="" value="<?php echo $to_date?>" name="to_date" >
                            
                        </div>
                    </div>
                </div>

                
            
          <div class="container text-center">
          <div class="d-flex justify-content-center">
                    <div class="form-group mx-sm-3 mb-2">
                        <label for="">CONDUCTED/SPONSORED BY</label>
                        <input type="text" class="form-control" id="" value="<?php echo $conducted_by?>" style="width:300px;" name="conducted_by">    
                    </div>
            </div>
          </div>


          <div class="container">
                    <div class="text-right">
                    
                    <button  type ="submit" name="updatelearn" class="btn m-2" style="background: #345587; color:#fff";>UPDATE</button>

                    </div>
                    </form>
        </div>

      

        </div>