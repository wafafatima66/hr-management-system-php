
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

                      <form class="form-inline " method="post" action="add_emp_config.php">

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
                            <label for="">Inclusive dates</label>
                          <input type="text" class="form-control" id="" placeholder="16/05/20" name="from_date">
                        </div>

                        <div class="form-group mx-sm-2 mb-2">
                          <input type="text" class="form-control" id="" placeholder="16/05/20" name="to_date">
                        </div>

                        <div class="form-group mx-sm-3 mb-2">
                            <label for="">Office Assignment</label>
                            <select class="form-control" name="office_assign" required>
                              <option value="0">Select</option>
                              <option value="permanent"> Permanent</option>
                              <option value="contractual" >contractual</option>
                              <option value="job_order" >job_order</option>
                          </select>
                        </div>


                     </div>
                  </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-one" disabled >Update Profile</button>
                   
                    <button type="submit" name="submit" class="btn btn-two" href="">Submit</button>

                
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
  