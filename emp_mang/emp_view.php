<?php include '../includes/link.php'; ?>
<?php include '../includes/header.php'; ?>

<?php

if(isset($_REQUEST["emp_id"])){
    $emp_id = $_REQUEST["emp_id"];

    require '../includes/conn.php';

    $query = "SELECT * FROM add_emp WHERE emp_id = '$emp_id'";

    $runquery = $conn -> query($query);
    if($runquery == true){
     
        echo"ryt";
    while($mydata = $runquery -> fetch_assoc()){

        require 'variables/view_variables.php';


                  $emp_first_name = $mydata["emp_first_name"];
                  $emp_last_name = $mydata["emp_last_name"];
                  $emp_middle_name = $mydata["emp_middle_name"];
                  $office_assign = $mydata["office_assign"];
                  $emp_status = $mydata["emp_status"];

            
        ?> 
               
         
   
               
         

        <!--head section-->
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-9 ">
                    <h6 class="text-right pr-2"> 
                        <button  onclick="opentab('tab-1')" type="button" class="btn emp_profile_section1_tab active" >PDS | </button>
                        <button  onclick="opentab('tab-2')" type="button" class="btn emp_profile_section1_tab " >Leave Ledger | </button>
                        <button  onclick="opentab('tab-3')" type="button" class="btn emp_profile_section1_tab " >File 201</button>
                    </h6>
                    <h4> <?php echo $emp_first_name?> <?php echo $emp_middle_name?> <?php echo $emp_last_name?> </h4>
                    <p style="text-transform: uppercase;"><?php echo $emp_status?> > <span style="text-transform: capitalize;"><?php echo $office_assign?></span></p>
                </div>
        
                <div class="col-lg-3 p-0 m-0">
                    <div class="emp_profile_image"> </div>
                </div>
               
            </div>
        </div>
        
                 
        
        
                <?php include 'view-pds/pds.php';  ?>
                <?php include 'ledger.php'; ?>
                <?php include 'file.php'; ?>
        
              
                
                <?php
                        
                         
                    }//end of while
                } else {
                    echo "DATA NOT FETCHED PROPERLY";
                }
              
                //end of if
               // session_unset();
               // session_destroy();
               // header("Location:emp_mang.php");
            } //end of first if
        
        
            ?>      
            
          
                
        </div>  <!-- /#page-content-wrapper -->
          </div> <!-- /#wrapper -->


