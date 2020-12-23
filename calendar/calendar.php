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

        <div class="container pt-5" style="  width:80%">
        <form class="form-inline">

            <button type="button" class="btn mb-2" data-toggle="modal" data-target="#addevent" ><i class="fas fa-plus pr-2"></i>Add Event</button> 
            
            </form>
        </div>

        <div class="container" style="width:85%;">
            <div class="calendar_section1" >

                <div class="row mb-2">

                    <div class="col-lg-3 ">
                        <div class="text-center">
                            <h4 style="text-transform:uppercase;font-size: 35px;"><?php echo date("M") ?></h4>
                        </div>  
                    </div>

                    <div class="col-lg-6">
                        <div class="text-center">
                            <h4 style="text-transform:uppercase;font-size: 35px;">EVENT</h4>
                        </div>
                    </div>

                    <div class="col-lg-3">     
                      <div class="text-center">
                          <h4 style="text-transform:uppercase;font-size: 35px;">VENUE</h4>
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


                <div class="row view_event " data-toggle="modal"  data-target="#viewevent" style="cursor:pointer;" data-todo="<?php echo  $title?>">

                    <div class="col-lg-3 pr-5 pl-5 " style="border-right:solid 1px #D3D3D3">
                        <div class="text-center">
                            <h3><?php echo $start_date ?>-<?php echo $end_date ?></h3>
                        </div> 
                    </div>

                    <div class="col-lg-6 pr-5 pl-5" style="border-right:solid 1px #D3D3D3">
                        <div class="text-center ">
                          <h4 style="color:#696969;text-transform:capitalize; font-size:20px;font-style:italic;"><?php echo $title ?></h4> 
                        </div>
                    </div>

                    <div class="col-lg-3">   
                        <div class="text-center">
                          <h4 style="color:#696969;text-transform:capitalize;font-size:20px;font-style:italic;"><?php echo $venue ?></h4>  
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