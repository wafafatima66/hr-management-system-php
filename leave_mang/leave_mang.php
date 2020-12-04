<?php include '../includes/link.php'; ?>
<?php include '../includes/header.php'; ?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
$(document).ready(function(){
    $("#emp_id").keyup(function(){
        $.ajax({
            url:'leave_mang-config.php',
            type : 'post',
            data: {emp_id : $(this).val()},
            dataType: 'json',
            success : function(result){
                
                $('#emp_first_name').val(result.emp_first_name);
                $('#emp_middle_name').val(result.emp_middle_name);
                $('#emp_last_name').val(result.emp_last_name);
                $('#emp_ext').val(result.emp_ext);

            }
        });
    });
});

</script>

<div class="leave_mang_section">
    
        <div class="col-lg-9 leave_mang_header ">
            <h4>LEAVE FORM</h4>
        </div>
   
      

   
    <div class="leave_mang_section1_body leave_mang_section_body">
         <form class="form-inline" method="post" action="leave_mang-config.php">
                    
            <div class="form-group mx-sm-1 mb-2">
                <input type="text" class="form-control" placeholder="Type Employer ID" name="emp_id" id="emp_id">
                
            </div>
            <div class="form-group mx-sm-1 mb-2">
                <label for="">NAME</label>
                <input type="text" class="form-control"  placeholder="Surname" style="width:100px;" id="emp_last_name">
            </div>
            <div class="form-group mx-sm-1 mb-2">
                <input type="text" class="form-control"  placeholder="First" style="width:100px;" id="emp_first_name">
            </div>
            <div class="form-group mx-sm-1 mb-2">
                <input type="text" class="form-control" id="" placeholder="Middle" style="width:80px;" id="emp_middle_name">
            </div>
            <div class="form-group mx-sm-1 mb-2">
                <input type="text" class="form-control" id="" placeholder="ext" style="width:50px;" id="emp_ext">
            </div>
            <div class="form-group mx-sm-1 mb-2">
                <label for="">POSITION</label>
                <input type="text" class="form-control" id="" placeholder="Auto" style="width:100px;">
            </div>
            <div class="form-group mx-sm-1 mb-2">
                <label for="">SALARY</label>
                <input type="text" class="form-control" id="" placeholder="" name="emp_salary" style="width:100px;">
            </div>

            <div class="form-group mx-sm-3 mb-2">
                <label for="">TYPE OF LEAVE</label>
              <select class="form-control" style="width:100px;" name="type_of_leave">
                <option value="0">Select</option>
                <option value="vacation leave">Vacation Leave</option>
                <option value="sick leave">Sick Leave</option>
                <option value="special priviledge leave">Special priviledge Leave</option>
                <option value="others">Others</option>
            </select>
            </div>

                <div class="form-group mx-sm-2 mb-2">
                        <label >INCLUSIVE DATES</label>
                        <div class="d-flex flex-column">
                            <label style="color:#C3CFD5;" >From </label>
                            <input type="date" class="form-control" name="leave_from_date" style="width:140px">
                        </div>   
                </div>

                <div class="form-group mx-sm-2 mb-2">
                        <div class="d-flex flex-column">
                            <label style="color:#C3CFD5;" >To</label>
                            <input type="date" class="form-control" name="leave_to_date" style="width:140px">
                        </div>   
                </div>

                <div class="form-group mx-sm-3 mb-2">
                    <label for="">COMMUNICATION</label>
                    <select class="form-control" style="width:100px;" name="communication">
                        <option selected>Select</option>
                        <option>...</option>
                    </select>
                 </div>

                 <div class="form-group mx-sm-3 mb-2">
                        <textarea class="form-control" rows="3" placeholder="Please Specify" name="description"></textarea>
                </div>

                <div class="form-group mx-sm-3 mb-2">
                        <label for="">CERTIFICATE OF LEAVE CREDITS</label>
                           <div class="d-flex flex-column">
                           <label style="color:#C3CFD5;" >As of </label>
                            <input type="date" class="form-control"  style="width:140px">
                            </div>
                </div>

                <div class="col-lg-4 ">
                    <table class="table table-bordered table-sm" >
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody >
                            <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            </tr>
                            <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            </tr>
                            <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

        

    </div>  
                        <div class="container mt-2">
                            <div class="text-right">
                                <button class="btn" type="submit" style="background: #345587;color:#EFE20A;;" name="submit">SUBMIT</button>
                            </div>
                    </div>

                    </form>
</div>


    <div class="leave_mang_section">
        
                        <div class="form-inline">
                        
                        <div class="col-lg-9 leave_mang_header ">
                            <h4>LEAVE SUMMARY</h4>
                        </div>

                        <div class="col-lg-2 d-flex align-items-center">
                            <form  class="form-inline">
                                <div class="form-group mx-sm-1">
                                    <div class="d-flex justify-content-center">
                                        <input type="text" class="form-control" id="" placeholder="" style="width:50px">
                                        <button class="btn mx-sm-1" style="background:#345587;"></button>
                                        <input type="text" class="form-control" id="" placeholder="" style="width:50px">
                                        <button class="btn mx-sm-1" style="background:#345587;"></button>
                                    </div>
                                </div>
                            
                        </div>
                        </div>
                  
    

    
        <div class="leave_mang_section_body">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10">
                    <table class="table table-bordered table-sm" >
                        <thead class="table-head">
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                            <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody >
                            <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            </tr>
                            <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <td>@mdo</td>
                            </tr>
                            <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                    </div>

                    <div class="col-lg-2">
                        <div class="d-flex flex-column">
                            <div class="text-center">
                                <span>Vacation Leave</span>
                                <h2>6</h2>
                                <span>Vacation Leave</span>
                                <h2>6</h2>
                                <span>Vacation Leave</span>
                                <h2>6</h2>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

    </div>


</div>  <!-- /#page-content-wrapper -->
  </div> <!-- /#wrapper -->