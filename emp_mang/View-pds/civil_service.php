 
 
   <!--body section of Civil service eligibility-->
   <div class=" emp_profile_section2 pt-4 mb-5 pb-2 " id="content-4">  

   <?php
 if(isset($_POST['update'])){

    $emp_id = $_REQUEST["emp_id"];

       
if(isset($_POST["type_of"]) || isset($_POST["name_of_exam"]) || isset($_POST["rating"])  || isset($_POST["exam_place"])){

    $type_of=$_POST['type_of'];
    $name_of_exam=$_POST['name_of_exam'];
    $rating=$_POST['rating'];
    $exam_date=$_POST['exam_date'];
    $exam_place=$_POST['exam_place'];
    $licence_no=$_POST['licence_no'];
    $licence_val=$_POST['licence_val'];

    $upquery = "UPDATE civil_service SET type_of= '$type_of', name_of_exam ='$name_of_exam' , rating ='$rating' , exam_date ='$exam_date' , exam_place ='$exam_place' , licence_no ='$licence_no' , licence_val ='$licence_val' WHERE emp_id = $emp_id";
    
    $runupquery = $conn -> query($upquery);
    if($runupquery==true){
        echo'<p class="alert alert-success h6">UPDATED </p>';
    } else echo'<p class="alert alert-danger h6"> NOT UPDATED </p>';
 
} 

} 
 ?>


            <form  class="form-inline" method="post" action="">
                
                    <div class="form-group mx-sm-3 mb-2">
                        <div class="d-flex flex-column">
                            <label for="">TYPE</label>
                            <select class="form-control" style="width:200px;" name="type_of" value="<?php echo $type_of?>" >
                                <option value = "">Select type</option>
                                <option value = "">...</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group mx-sm-3 mb-2">
                        <div class="d-flex flex-column">
                            <label for="">NAME OF EXAMINATION</label>
                            <input type="text" class="form-control" id="" value="<?php echo $name_of_exam?>" name ="name_of_exam" value="<?php echo $name_of_exam?>">
                        </div>
                    </div>

                    <div class="form-group mx-sm-3 mb-2">
                        <div class="d-flex flex-column">
                            <label for="">RATING <span class="text-muted"> (if applicable) </span></label>
                            <input type="text" class="form-control" id="" value="<?php echo $rating?>" name="rating">
                        </div>
                    </div>

                    <div class="form-group mx-sm-3 mb-2">
                        <div class="d-flex flex-column">
                            <label for="">EXAMINATION DATE</label>
                            <input type="date" class="form-control" id="" value="<?php echo $exam_date?>"  name="exam_date">
                        </div>
                    </div>

                    <div class="form-group mx-sm-3 mb-2">
                        <div class="d-flex flex-column">
                            <label for="">PLACE OF EXAMINATION</label>
                            <input type="text" class="form-control" id="" value="<?php echo $exam_place?>"  name="exam_place">
                        </div>
                    </div>

                    
             
                <div class="d-flex justify-content-center">
                   

                        <div class="form-group mx-sm-3 mb-2">
                            <label for="">LICENCE <span class="text-muted">(If Applicable)</span></label>    
                        </div>

                        <div class="form-group mx-sm-3 mb-2">
                        <div class="d-flex flex-column">
                            <label for="">NUMBER</label>
                            <input type="text" class="form-control" id="" value="<?php echo $licence_no?>"  name="licence_no">
                        </div>
                    </div>

                    <div class="form-group mx-sm-3 mb-2">
                        <div class="d-flex flex-column">
                            <label for="">VALIDITY</label>
                            <input type="date" class="form-control" id="" value="<?php echo $licence_val?>" name="licence_val">
                        </div>
                    </div>

                  
                </div>

                <div class="container">
                    <div class="text-right">
                    
                    <button  type ="submit" name="update" class="btn m-2" style="background: #345587; color:#fff";>UPDATE</button>

                    </div>
               </div>

               

                </form>
        </div>