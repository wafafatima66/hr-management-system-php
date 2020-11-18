
<?php 

if(isset($_POST['submit'])){

    

    $emp_first_name=$_POST['emp_first_name'];
    $emp_last_name=$_POST['emp_last_name'];
    $emp_middle_name=$_POST['emp_middle_name'];
    $emp_ext=$_POST['emp_ext'];
    $emp_status=$_POST['emp_status'];
    $emp_date_appointment=$_POST['emp_date_appointment'];

    require '../includes/conn.php';

    if(empty($emp_first_name)|| empty($emp_last_name)|| empty($emp_middle_name)|| empty($emp_ext)|| empty($emp_status)|| empty($emp_date_appointment)){

      echo "<script type='text/javascript'>alert('EMPTY FIELDS');</script>";
     
     
  }
 
    else{

   
     
                       
    
  $insertquery = "INSERT INTO add_emp (emp_first_name,emp_last_name,emp_middle_name,emp_ext,emp_status,emp_date_appointment) VALUES ('$emp_first_name','$emp_last_name','$emp_middle_name','$emp_ext','$emp_status','$emp_date_appointment')";
  

  if($conn -> query($insertquery)){
    echo "<script type='text/javascript'>alert('EMPLOYEE IS ADDED');</script>";
                          }
    
   

                }
            }
else{
  echo "<script type='text/javascript'>alert('SQL CONNECTION FAILED');</script>";
}
  
  
  ?>
  <!--button to add employye-->
      <!-- Modal -->
      <div class="modal fade addemployee " id="addemployee" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
          <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
              <div class="modal-content">

                <div class="modal-header">
                  <h3 class="modal-title">Add Employee</h3>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                      </button>
                </div>

                 <div class="modal-body">

                    <div class="pt-3">
                     <h6>Employee</h6>

                      <form class="form-inline " method="post" action="">

                        <div class="form-group mx-sm-2 mb-2">
                            <label for="">Name</label>
                          <input type="text" class="form-control" id="" placeholder="First Name" name="emp_first_name" required>
                        </div>

                        <div class="form-group mx-sm-2 mb-2">
                          <input type="text" class="form-control" id="" placeholder="Last name" name="emp_last_name" required>
                        </div>

                        <div class="form-group mx-sm-2 mb-2">
                          <input type="text" class="form-control" id="" placeholder="Middle name" name="emp_middle_name" required>
                        </div>

                        <div class="form-group mx-sm-2 mb-2">
                          <input type="text" class="form-control" id="" placeholder="Ext" name="emp_ext" required>
                        </div> 
                        
                         <h6 class="pt-4">Employment Information</h6>

                        <div class="form-group mx-sm-3 mb-2">
                            <label for="">Status</label>
                            <select class="form-control" name="emp_status" required>
                              <option value="0">Select</option>
                              <option value="permanent"> Permanent</option>
                              <option value="contractual" >contractual</option>
                              <option value="job_order" >job_order</option>
                          </select>
                        </div>




                      <div class="form-group mx-sm-2 mb-2">
                            <label for="">Today's date</label>
                          <input type="text" class="form-control" id="" placeholder="16/05/20" name="emp_date_appointment">
                      </div>



                        <div class="form-group mx-sm-2 mb-2">
                            <label for="">Inclusive dates</label>
                          <input type="text" class="form-control" id="" placeholder="16/05/20" name="from_date">
                        </div>

                        <div class="form-group mx-sm-2 mb-2">
                          <input type="text" class="form-control" id="" placeholder="16/05/20" name="to_date">
                        </div>


                     </div>
                  </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-one" disabled >Update Profile</button>
                   
                    <button type="submit" name="submit" class="btn btn-two" >Submit</button>

                
                </div>


                </form>
            </div>
        </div>
      </div>

    

   
    <script >
   
/*
    function myFunction() {
    $("form").on("submit", function (event) {
        event.preventDefault();
        $.ajax({
            url: "add_emp_config.php",
            type: "POST",
            data: $('form').serialize(),
            success: function (result) {
                console.log(result)
            }
        });
    })
    }
*/



        </script>
  