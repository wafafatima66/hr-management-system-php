<?php include '../includes/link.php'; ?>
<?php include '../includes/header.php'; ?>
<?php include 'script.php'; ?>


<?php
if(isset($_GET['submit'])){
    if($_GET['submit']=="error"){
        echo'<p class="alert alert-danger h6">EVENT NOT ADDEDD SUCCESSFULLY ! TRY AGAIN</p>';
    }else  if($_GET['submit']=="success"){
        echo'<p class="alert alert-success h6"> EVENT ADDEDD SUCCESSFULLY </p>';
    }else  if($_GET['submit']=="noid"){
      echo'<p class="alert alert-danger h6"> EMPLOYEE NOT FOUND ! </p>';
  }
}
?>

        <div class="container pt-5" style=" padding: 5px; margin: 20px;">
        <form class="form-inline">

            <button type="button" class="btn mb-2" data-toggle="modal" data-target="#addevent" ><i class="fas fa-plus pr-2"></i>Add Event</button> 
            
            </form>
        </div>

        <div class="calendar_section1">
            <div class="container">

                <div class="row">

                    <div class="col-lg-2">
                        <div class="text-center">
                            <h4 style="text-transform:uppercase;"><?php echo date("M") ?></h4>
                        </div>  
                    </div>

                    <div class="col-lg-7">
                        <div class="text-center">
                            <h4>EVENT</h4>
                        </div>
                    </div>

                    <div class="col-lg-3">     
                      <div class="text-center">
                          <h4>VENUE</h4>
                      </div>
                    </div>

                </div>

              <?php   

                                            
                          require '../includes/conn.php';

                           $month = date("m") ;
                           $year = date("Y");
                          $query = "select  start , title , venue FROM table_events  WHERE MONTH(start) = '$month' AND YEAR(start) = '$year' "; 

                          if($runquery = $conn -> query($query)){

                            while($mydata = $runquery -> fetch_assoc()){

                              $start =   $mydata["start"];
                              $title =   $mydata["title"];
                              $venue =   $mydata["venue"];

                             // $date1 = strtotime($start);
                             // $date = date_format($date1,"d");
                             $date = date("d", strtotime($start));


              ?>


                <div class="row">

                    <div class="col-lg-2">
                        <div class="text-center">
                            <h3><?php echo $date ?></h3>
                        </div> 
                    </div>

                    <div class="col-lg-7">
                        <div class="text-center">
                          <p><?php echo $title ?></p> 
                        </div>
                    </div>

                    <div class="col-lg-3">   
                        <div class="text-center">
                          <p><?php echo $venue ?></p>  
                        </div>
                    </div>

                </div>

                            <?php    }} ?>

                   

                
            </div>
        </div>
 <!---
    
            
           
            <div class="calendar_section2_header ">
                
            </div>
          

            <div class="calendar_section2_body">
                
            
                      </div>

                  
  -->
                  
  <div class="calendar_section2">
            <div id="calendar"></div>
            </div>



        
 <!--button to add event-->
            <!-- Modal -->

           
        <div class="modal fade addevent" id="addevent" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">

                     <div class="modal-header">
                        <h3 class="modal-title">ADD EVENT</h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                    </div>

                <div class="modal-body">
                   <div class="pt-3">
                   <h6>EVENT INFORMATION</h6>


                    <form class="form-inline" method="post" action="add_event.php">
                    
            <div class="form-group mx-sm-2 mb-2">
                <label for="">Title of Event</label>
              <input type="text" class="form-control"  style="width:500px" name="title">
            </div>

            <div class="form-group mx-sm-2 mb-2">
                <label for="">Inclusive dates</label>
              <input type="date" class="form-control" name="start" >
            </div>
            <div class="form-group mx-sm-2 mb-2">
              <input type="date" class="form-control" name="end" >
            </div>

            <div class="form-group mx-sm-2 mb-2">
                <label for="">Venue</label>
              <input type="text" class="form-control"  style="width:200px" name="venue">
            </div>

            <div class="form-group mx-sm-3 mb-2">
                <label for="">Address</label>
              <input class="form-control" style="width:200px" name="address">
                
            </div>

            <div class="form-group mx-sm-3 mb-2">
              <input class="form-control" style="width:200px" placeholder="City/Municility" name="city">
                
            </div>

            <div class="form-group mx-sm-3 mb-2">
              <input class="form-control" style="width:200px" placeholder="Barangay" name="barangay">
                
            </div>

            <div class="form-group mx-sm-2 mb-2">
            <label for="">Speaker/s</label>
              <input type="text" class="form-control"  placeholder="LastName" style="width:100px" name="sp_last_name">
            </div>

            <div class="form-group mx-sm-2 mb-2">
              <input type="text" class="form-control"  placeholder="FirstName" style="width:100px" name="sp_first_name">
            </div>

            <div class="form-group mx-sm-2 mb-2">
              <input type="text" class="form-control"  placeholder="MiddleName" style="width:100px" name="sp_middle_name">
            </div>

            <div class="form-group mx-sm-2 mb-2">
              <input type="text" class="form-control"  placeholder="Ext" style="width:60px" name="sp_ext">
            </div>
           
          
      
                </div>
  
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn " name="submit">Submit</button>
                </div>
                </div>
            </div>

            </form>
        </div>
    
     