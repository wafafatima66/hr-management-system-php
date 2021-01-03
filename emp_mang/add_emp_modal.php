<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
$(document).ready(function(){
    $("#emp_id").keyup(function(){
        $.ajax({
            url:'../emp_mang/add_emp_message.php',
            type : 'post',
            data: {emp_id : $(this).val()},
            //dataType: 'json',
            success : function(result){
                
                $('#space').html(result);
              

            }
        });
    });

});


</script>


  <!--button to add employye-->
      <!-- Modal -->
      <div class="modal fade addemployee " id="addemployee" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
          <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
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


                      <form class="form-inline " method="post" action="../emp_mang/add_emp_config.php" enctype="multipart/form-data">

                     

                      <div class="form-group mx-sm-2 mb-2 mt-2">
                          <label for="">Employer ID</label>
                            <input type="text" name="emp_id"  class="form-control"  id="emp_id">
                      </div>  

                      <div id="space"></div>  

                      </div>

                      <div class="form-inline pt-2">

                        <div class="form-group mx-sm-2 mb-2">
                            <label for="">Name</label>
                          <input type="text" class="form-control"  placeholder="First Name" name="emp_first_name" required>
                        </div>

                        <div class="form-group mx-sm-2 mb-2">
                          <input type="text" class="form-control"  placeholder="Last name" name="emp_last_name" required>
                        </div>

                        <div class="form-group mx-sm-2 mb-2">
                          <input type="text" class="form-control"  placeholder="Middle name" name="emp_middle_name" >
                        </div>

                        <div class="form-group mx-sm-2 mb-2">
                          <input type="text" class="form-control"  placeholder="Ext" name="emp_ext" value="">
                        </div> 
                        
                      
                        </div>

                         <div class="pt-3">
                         
                         <h6 >Employment Information</h6>

                         <div class="form-inline">

                        <div class="form-group mx-sm-3 ">
                            <label for="">Status</label>
                            <select class="form-control" name="emp_status" style="font-size:12px" required>
                            
                              <option value="permanent"> Permanent</option>
                              <option value="contractual" >contractual</option>
                              <option value="job_order" >job_order</option>
                          </select>
                        </div>

                        <div class="form-group mx-sm-2">
                        <label for="">Inclusive dates</label>
                        </div>

                        <div class="form-group mx-sm-2 mb-2">
                          <div class="d-flex flex-column">
                            <label for="" style="color:#AEAEAE; font-style: italic;">From</label>
                          <input type="date" class="form-control"  placeholder="" name="from_date">
                          </div>
                        </div>

                        <div class="form-group mx-sm-2 mb-2">
                          <div class="d-flex flex-column">
                            <label for="" style="color:#AEAEAE; font-style: italic;">To</label>
                          <input type="date" class="form-control"  placeholder="" name="to_date">
                          </div>
                        </div>

                        <div class="form-group mx-sm-3 mb-2 mt-2">
                            <label for="">Office Assignment</label>
                            <input type="text" class="form-control"  name="office_assign" required>
                        </div>

                        <div class="form-group mx-sm-3 mb-2">
                            <label for="">Department</label>
                            <input type="text" class="form-control"  name="office_dept" required>
                        </div>

                          <div class="form-group mx-sm-3 mb-2 mt-2">
                          <label for="">Employer Image</label>
                            <input type="file" name="emp_image">
                            </div>    

                                              
                            
                      </div>
                         </div>


                    
                  </div>

                <div class="modal-footer">
                    
                   
                    <button type="submit" name="submit" class="btn btn-two">Submit</button>

                
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
  