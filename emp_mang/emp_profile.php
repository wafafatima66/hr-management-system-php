

<?php include '../includes/header.php'; ?>
<?php include '../includes/local-link.php'; ?>


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
                if(($_GET['submit']=="leave")){
    
                  echo'<p class="alert alert-success h6"> LEAVE BALANCE UPGRADED</p>';
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
                  $emp_ext = $mydata["emp_ext"];
                  $office_assign = $mydata["office_assign"];
                  $emp_status = $mydata["emp_status"];

                  $emp_id = $mydata["emp_id"];

                  $emp_image = '../uploads/image/'.$mydata["emp_image"];


                  //$emp_id = $mydata["emp_id"];
                  $office_assign= $mydata["office_assign"];
                   $office_dept= $mydata["office_dept"];

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
            <p style="text-transform: uppercase; font-weight:bold;"><?php echo $emp_status?> > <span style="text-transform: capitalize;font-weight:bold;"><?php echo $office_assign?> > </span><span style="text-transform: capitalize;font-weight:bold;"><?php echo $office_dept?></span></p>
            <h4><?php echo $emp_id?></h4>

            
                <span id="messageform"></span>

                    <form method="post" id="import_excel_form" enctype="multipart/form-data" 
                    style="width:50px;" class="mt-3">
                        <input type="hidden" name="emp_id" value="<?php echo $emp_id?>">
                        
                        <input type="hidden" value="<?php echo $emp_first_name?>" id="emp_first_name" name="emp_first_name" >

                        <input type="hidden"  value="<?php echo  $emp_last_name ?>" id="emp_last_name" name="emp_last_name">

                          <input type="hidden" value="<?php echo  $emp_middle_name ?>" id="emp_middle_name" name="emp_middle_name">

                        <input type="hidden"  value="<?php echo $emp_ext ?>"  name="emp_ext">

                        <input type="hidden"  value="<?php echo $emp_status ?>"  name="emp_status">
                  
                        <input type="file" name="import_excel" id="import_excel" />

                        <input type="submit" name="import" id="import" class="btn mt-2" value="Import" style="background: #E6AD0F; color:#fff;" /> 
                    </form>
                

           
            
        </div>

       
       
    </div>
       
       
</div>


         


        <?php include 'pds/pds.php'; ?>
           
    
        <?php include 'leave-ledger/ledger.php'; ?>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>


<script>
$(document).ready(function(){
$('#import_excel_form').on('submit', function(event){
event.preventDefault();
$.ajax({
url:"includes/import.php",
method:"POST",
data:new FormData(this), emp_id : $("#emp_id").val() , emp_first_name : $("#emp_first_name").val() , emp_last_name : $("#emp_last_name").val() , emp_middle_name : $("#emp_middle_name").val() , emp_ext : $("#emp_ext").val() , emp_status : $("#emp_status").val(),
contentType:false,
cache:false,
processData:false,
beforeSend:function(){
$('#import').attr('disabled', 'disabled');
$('#import').val('Importing...');
},
success:function(data)
{
$('#messageform').html(data);
$('#import_excel_form')[0].reset();
$('#import').attr('disabled', false);
$('#import').val('Import');
}
})
});
});
</script>