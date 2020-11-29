   
    <!--body section of WORK EXPERIENCE-->
    <div class=" emp_profile_section2 pt-4 mb-5 pb-2 " id="content-5">  

    <?php
 if(isset($_POST['updatework'])){

    $emp_id = $_REQUEST["emp_id"];

       
if(isset($_POST["position"]) || isset($_POST["govt_service"]) || isset($_POST["monthly_sal"])  || isset($_POST["status"])){

 
    $from_date=$_POST['from_date'];
    $to_date=$_POST['to_date'];
    $position=$_POST['position'];
    $employer=$_POST['employer'];
    //$govt_service=$_POST['govt_service'];
    $monthly_sal=$_POST['monthly_sal'];
    $increment=$_POST['increment'];
    $status=$_POST['status'];
    
    $upquery = "UPDATE work_experience SET from_date= '$from_date', to_date ='$to_date' , position ='$position' , employer ='$employer' ,  monthly_sal ='$monthly_sal' ,increment ='$increment' , status ='$status'  WHERE emp_id = $emp_id";
    
    $runupquery = $conn -> query($upquery);
    if($runupquery==true){
        echo'<p class="alert alert-success h6">UPDATED </p>';
    } else echo'<p class="alert alert-danger h6"> NOT UPDATED </p>';
 
} 

} 
 ?>
            <form class="form-inline" method="post" post="" >
                
                <div class="form-group mx-sm-3 mb-2">
                    <div class="d-flex flex-column">
                        <label for="">INCLUSIVE DATES</label>
                        <div class="d-flex justify-content-center">
                        <input type="date" class="form-control mx-sm-1" id="" value="" style="width:100px;" name="from_date">
                        <input type="date" class="form-control mx-sm-1" id="" value="" style="width:100px;" name="to_date">
                        </div>
                    </div>
                </div>
                
                <div class="form-group mx-sm-3 mb-2">
                    <div class="d-flex flex-column">
                        <label for="">POSITION/TITLE</label>
                        <input type="text" class="form-control" id="" value="<?php echo $position?>" style="width:200px;" name="position">
                    </div>
                </div>

                <div class="form-group mx-sm-3 mb-2">
                    <div class="d-flex flex-column">
                        <label for="">EMPLOYER </label>
                        <input type="text" class="form-control" id="" value="<?php echo $employer?>" style="width:200px;" name="employer">
                    </div>
                </div>

                

                <div class="form-group mx-sm-3 mb-2">
                    <div class="d-flex flex-column">
                        <label for="">GOVERNMENT SERVICE</label>
                        <div class="d-flex justify-content-center">
                        <div class="form-check">
                            <label class="form-check-label" > Yes</label> 
                            <input class="form-check-input" type="checkbox" value="yes" name="govt_service">
                        </div>
                        <div class="form-check">
                            <label class="form-check-label"> No</label> <input class="form-check-input" type="checkbox" value="no" name="govt_service">
                        </div>
                        </div>
                    </div>
                </div>

                
            
            <div class="d-flex justify-content-center">
               

                    <div class="form-group mx-sm-3 mb-2">
                        <label for="">MONTHLY SALARY</label>
                        <input type="text" class="form-control" id="" value="<?php echo $monthly_sal?>" style="width:100px;" name="monthly_sal">    
                    </div>

                    <div class="form-group mx-sm-3 mb-2">
                        <label for="">INCREMENT</label>
                        <input type="text" class="form-control" id="" value="<?php echo $increment?>" style="width:100px;" name="increment">    
                    </div>
                    
                    <div class="form-group mx-sm-3 mb-2">
                        <label for="">STATUS</label>
                        <select class="form-control" style="width:100px;" name="status">
                            <option value = "">Status</option>
                            <option value="">...</option>
                        </select>  
                    </div>

                 

              
            </div>
            <div class="container">
                    <div class="text-right">
                    
                    <button  type ="submit" name="updatework" class="btn m-2" style="background: #345587; color:#fff";>UPDATE</button>

                    </div>
                    </form>
        </div>
        </div>