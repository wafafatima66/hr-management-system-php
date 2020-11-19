
<?php include '../includes/link.php'; ?>
<?php include '../includes/header.php'; ?>

<?php
if(isset($_GET['register'])){
    if(($_GET['register']=="success")){
echo'<p class="alert alert-success h6">Registration done successfully</p>';
}
}

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
            <h4>WARREN DR AFICHAO</h4>
            <p>Permanent > Senior Programmer</p>
        </div>

        <div class="col-lg-3 p-0 m-0">
            <div class="emp_profile_image"> </div>
        </div>
       
    </div>
</div>

<?php include 'pds/pds.php'; ?>
<?php include 'ledger.php'; ?>
<?php include 'file.php'; ?>


                 <div class="text-right">
                        <button class="btn m-2" style="background: #345587;color:#fff;";>PREV</button>
                        <button class="btn m-2" style="background: #345587; color:#fff";>NEXT</button>
                    </div>

                           
                    </div>  <!-- /#page-content-wrapper -->
  </div> <!-- /#wrapper -->


 
