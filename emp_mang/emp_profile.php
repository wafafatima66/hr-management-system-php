
<?php// session_start();?>

<?php include '../includes/link.php'; ?>
<?php include '../includes/header.php'; ?>

<?php


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
        if(($_GET['submit']=="pds")){
    
                    echo'<p class="alert alert-success h6"> EMPLOYEE INFORMATION UPDATED SUCCESSFULLY</p>';
                } 
              }
  
              if(isset($_GET['upload'])){
                if($_GET['upload']=="success"){
                  echo'<p class="alert alert-success h6">FILE UPLOADED SUCCESSFULLY</p>';
                }
                if($_GET['upload']=="exist"){
                    echo'<p class="alert alert-danger h6">FILE EXIST IN THE FOLDER</p>';
                  } if($_GET['upload']=="failed"){
                    echo'<p class="alert alert-danger h6">FILE FAILED TO UPLOAD</p>';
                  }if($_GET['upload']=="error"){
                    echo'<p class="alert alert-danger h6">ERROR TO UPLOAD FILE</p>';
                  }
               
                }

                if(isset($_GET['image'])){
                  if($_GET['upload']=="update"){
                    echo'<p class="alert alert-success h6">EMPLOYEE IMAGE UPDATED</p>';
                  }else  if($_GET['upload']=="notupdate"){
                    echo'<p class="alert alert-success h6">EMPLOYEE IMAGE NOT UPDATED</p>';
                  }
                }
     
?>

<?php

if(isset( $_REQUEST["emp_id"])){

    $emp_id = $_REQUEST["emp_id"];
    
       

if(isset($_GET['register'])){
    if(($_GET['register']=="success")){
        echo'<p class="alert alert-success h6">Registration done successfully</p>';
    }
}
if(isset($_GET['submit'])){
    if(($_GET['submit']=="success")){

                echo'<p class="alert alert-success h6"> EMPLOYEE INFORMATION UPDATED SUCCESSFULLY</p>';
            } 
          }

         

    require '../includes/conn.php';

    $query = "SELECT * FROM add_emp WHERE emp_id = '$emp_id'";

    $runquery = $conn -> query($query);
    if($runquery == true){
        while($mydata = $runquery -> fetch_assoc()){

                  $emp_first_name = $mydata["emp_first_name"];
                  $emp_last_name = $mydata["emp_last_name"];
                  $emp_middle_name = $mydata["emp_middle_name"];
                  $office_assign = $mydata["office_assign"];
                  $emp_status = $mydata["emp_status"];

                  $emp_id = $mydata["emp_id"];

                  $emp_image = '../uploads/image/'.$mydata["emp_image"];


                  //$emp_id = $mydata["emp_id"];
                  $office_assign= $mydata["office_assign"];

                /*
                  $_SESSION['emp_id']= $emp_id;
                  $_SESSION['emp_first_name']= $emp_first_name;
                  $_SESSION['emp_last_name']= $emp_last_name;
                  $_SESSION['office_assign']= $office_assign;
                  $_SESSION['emp_status']= $emp_status;

                */

                  $query = "SELECT * FROM pds WHERE emp_id = '$emp_id'";
                  $runquery = $conn -> query($query);
                  $rowcount=mysqli_num_rows($runquery);
                  if($rowcount == 0 ){
                    require '../emp_mang/variables/variables.php';
                
                  }else require '../emp_mang/variables/view_variables.php';

                 
                

            
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
            <h4 style="text-transform: uppercase;"> <?php echo $emp_first_name?> <?php echo $emp_middle_name?> <?php echo $emp_last_name?> </h4>
            <p style="text-transform: uppercase; font-weight:bold;"><?php echo $emp_status?> > <span style="text-transform: capitalize;font-weight:bold;"><?php echo $office_assign?></span></p>
            <h4><?php echo $emp_id?></h4>

           
            
        </div>

       
       
    </div>
       
       
</div>


         


        <?php include 'pds/pds.php'; ?>
           
    
        <?php include 'ledger.php'; ?>
        <?php include 'file.php'; ?>

      
        
      
  
        
</div>  <!-- /#page-content-wrapper -->
  </div> <!-- /#wrapper -->

  <?php
                
                 
            }//end of while
        } else {
            echo "DATA NOT FETCHED PROPERLY";
        }
      
        
    } 

    

    ?>   