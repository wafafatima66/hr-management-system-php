
        <!--body section of VOLUNTARY WORKS-->
        <div class=" emp_profile_section2 pt-4 mb-5 pb-3 " id="content-6">  

        
   <?php
 if(isset($_POST['updatevol'])){

    $emp_id = $_REQUEST["emp_id"];

       
if(isset($_POST["name_org"]) || isset($_POST["org_add"]) || isset($_POST["no_of_hrs"])  || isset($_POST["position"])){

 

    $name_org=$_POST['name_org'];
    $org_add=$_POST['org_add'];
    $from_date=$_POST['from_date'];
    $to_date=$_POST['to_date'];
    $no_of_hrs=$_POST['no_of_hrs'];
    $position=$_POST['position'];

    $upquery = "UPDATE voluntary_works SET name_org= '$name_org', org_add ='$org_add' , from_date ='$from_date' , to_date ='$to_date' , no_of_hrs ='$no_of_hrs' , position ='$position'  WHERE emp_id = $emp_id";
    
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
                        <label for="">NAME OF ORGANISATION</label>
                        <input type="text" class="form-control" id="" value="<?php echo $name_org?>" style="width:200px;" name="name_org">
                    </div>
                </div>
                
                <div class="form-group mx-sm-3 mb-2">
                    <div class="d-flex flex-column">
                        <label for="">ADDRESS</label>
                        <input type="text" class="form-control" id="" value="<?php echo $org_add?>" style="width:200px;" name="org_add">
                    </div>
                </div>

                
                <div class="form-group mx-sm-3 mb-2">
                    <div class="d-flex flex-column">
                        <label for="">INCLUSIVE DATES</label>
                            <div class="d-flex justify-content-center">

                            <input type="date" class="form-control mx-sm-1" id="" value="" name="from_date">

                            <input type="date" class="form-control mx-sm-1" id="" value="" name="to_date">
                        </div>
                    </div>
                </div>

                
         
            <div class="d-flex justify-content-center">
               

                    <div class="form-group mx-sm-3 mb-2">
                        <label for="">NO OF HOURS</label>
                        <input type="text" class="form-control" id="" value="<?php echo $no_of_hrs?>" style="width:100px;" name="no_of_hrs">    
                    </div>

                    <div class="form-group mx-sm-3 mb-2">
                        <label for="">POSITION/ROLE</label>
                        <input type="text" class="form-control" id="" value="<?php echo $position_vol?>" style="width:120px;" name="position">    
                    </div>
             
                  
            </div>

            <div class="container">
                    <div class="text-right">
                    
                    <button  type ="submit" name="updatevol" class="btn m-2" style="background: #345587; color:#fff";>UPDATE</button>

                    </div>

                    </form>
               </div>

           
        </div>