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
  }else  if($_GET['submit']=="update"){
    echo'<p class="alert alert-success h6"> EVENT UPDATED ! </p>';
}else  if($_GET['submit']=="notupdate"){
  echo'<p class="alert alert-danger h6"> EVENT NOT UPDATED ! </p>';
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
                          $query = "select  end, start , title , venue FROM table_events  WHERE MONTH(start) = '$month' AND YEAR(start) = '$year' "; 

                          if($runquery = $conn -> query($query)){

                            while($mydata = $runquery -> fetch_assoc()){

                              $start =   $mydata["start"];
                              $end =   $mydata["end"];
                              $title =   $mydata["title"];
                              $venue =   $mydata["venue"];

                             // $date1 = strtotime($start);
                             // $date = date_format($date1,"d");
                             $start_date = date("d", strtotime($start));
                              $end_date = date("d", strtotime($end));


              ?>


                <div class="row view_event" data-toggle="modal"  data-target="#viewevent" style="cursor:pointer;" data-todo="<?php echo  $title?>">

                    <div class="col-lg-2">
                        <div class="text-center">
                            <h3><?php echo $start_date ?>-<?php echo $end_date ?></h3>
                        </div> 
                    </div>

                    <div class="col-lg-7">
                        <div class="text-center ">
                          <h3 style="color:#B3B3B3;"><?php echo $title ?></h3> 
                        </div>
                    </div>

                    <div class="col-lg-3">   
                        <div class="text-center">
                          <h3 style="color:#B3B3B3;"><?php echo $venue ?></h3>  
                        </div>
                    </div>

                </div>

                <script>
                        $('.view_event').click(function(){
                          
                          //var emp_id = $(this).data('id');
                          //$('.modal-body .view_emp_id').val(emp_id);
                          $.ajax({
                              url:'view_event.php?',
                              type : 'post',
                              data: {
                                title : $(this).data("todo") 
                              },
                               dataType: 'json',
                              success : function(result){

                                  $('#title').val(result.title);
                                  $('#start').val(result.start);
                                  $('#end').val(result.end);
                                  $('#venue').val(result.venue);
                                  $('#address').val(result.address);
                                  $('#city').val(result.city);
                                  $('#barangay').val(result.barangay);
                                  $('#sp_last_name').val(result.sp_last_name);
                                  $('#sp_first_name').val(result.sp_first_name);
                                  $('#sp_middle_name').val(result.sp_middle_name);
                                  $('#sp_ext').val(result.sp_ext);
                                 
                            
                                //$('#space').html(result);
                              }
                          });
                          
                        });
                    </script>


                            <?php    }} ?>

                   

                
            </div>
        </div>
 <!---
    
            
           
            <div class="calendar_section2_header ">
                
            </div>
          

            <div class="calendar_section2_body">
                
            
                      </div>

                  
  -->
                  
  <div class="calendar_section2 mx-auto" style="width:80%;" >
            <div id="calendar" ></div>
            </div>


            <?php require "calendar_modal.php";?>
     <?php require "calendar_view_modal.php";?>