
<?php session_start();?>

<?php include '../includes/link.php'; ?>
<?php include '../includes/header.php'; ?>

<?php



if(isset($_GET['register'])){
    if(($_GET['register']=="success")){
echo'<p class="alert alert-success h6">Registration done successfully</p>';
}

}

?>

<?php 
	if(isset($_GET['error'])){
		if($_GET['error']=="emptyfields"){
			echo'<p class="alert alert-danger h6">Fill in all fields</p>';
		}
		else if($_GET['error']=="invalidmail&user"){
			echo'<p class="alert alert-danger h6">Invalid Email</p>';
		}
	
		else if($_GET['error']=="sqlerror"){
			echo'<p class="alert alert-danger h6">Error in Creating account</p>';
		}
		else if($_GET['error']=="gotit"){
			echo'<p class="alert alert-danger h6">Email Taken</p>';
		}
	
	}	else if(isset($_GET['submit'])){
				if(($_GET['submit']=="successpds")){

                    echo'<p class="alert alert-success h6">PDS </p>';

                   /* if(isset($_GET['empid'])){
    
                        $emp_id=$_GET['empid'];

                        echo $emp_id;
                        
                        require '../includes/conn.php';
                       
                                         
                        $query = "SELECT * FROM pds WHERE emp_id = $emp_id";
                
                        $runquery = $conn -> query($query);
                        if($runquery == true){
                            echo"nice";
                        while($data = $runquery -> fetch_assoc()){
                     
                        
                
                       
                        $emp_civil_status = $data["emp_civil_status"];
                        $emp_height = $data["emp_height"];
                        echo $emp_height;
                     
                     }
                        }else echo "nothing";
                    } */
                }

                

                
                if(($_GET['submit']=="update")){
                    echo'<p class="alert alert-success h6">updated completed</p>';
                        }

                        if(($_GET['submit']=="notupdate")){
                            echo'<p class="alert alert-success h6">update fail</p>';
                                }

                                if(($_GET['submit']=="norows")){
                                    echo'<p class="alert alert-success h6">no rows</p>';
                                        }
    } else {
        $emp_gender = "Select";
        $emp_civil_status = "Civil status";
        $emp_height = "56";
    }

 
     
     
?>

<?php

require '../includes/conn.php';

if(isset($_SESSION['emp_first_name'])){

    
    
  $emp_first_name = $_SESSION['emp_first_name'];
  $emp_last_name = $_SESSION['emp_last_name'];
  //$emp_id = $_SESSION['emp_id'];
  

  
  
  //SELECT * FROM add_emp join pds ON add_emp.emp_id = pds.emp_id
  //join table3 ON table2.primarykey = table3.foreignkey

  
     

      $query = "SELECT * FROM add_emp WHERE emp_first_name = '$emp_first_name' AND emp_last_name ='$emp_last_name'";

       
       
        $runquery = $conn -> query($query);
        if($runquery == true){

           

              
         
                     while($mydata = $runquery -> fetch_assoc()){

                  $emp_first_name = $mydata["emp_first_name"];
                  $emp_last_name = $mydata["emp_last_name"];
                  $emp_middle_name = $mydata["emp_middle_name"];
                  $office_assign = $mydata["office_assign"];
                  $emp_status = $mydata["emp_status"];
                  $emp_id = $mydata["emp_id"];

                
                  $_SESSION['emp_id']= $emp_id;

                  
                
                

            
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

         


    <?php include 'pds/pds.php';  ?>



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