
<div class="leave_mang_section">
    
        <div class="col-lg-9 leave_mang_header ">
            <h4>LEAVE FORM</h4>
        </div>
   
      <div id="space"></div>


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
                <input type="text" class="form-control"  placeholder="Middle" style="width:80px;" id="emp_middle_name">
            </div>
            <div class="form-group mx-sm-1 mb-2">
                <input type="text" class="form-control"  placeholder="ext" style="width:50px;" id="emp_ext">
            </div>
            <div class="form-group mx-sm-1 mb-2">
                <label for="">POSITION</label>
                <input type="text" class="form-control"  placeholder="Auto" style="width:100px;" id="emp_status">
            </div>
            <div class="form-group mx-sm-1 mb-2">
                <label for="">SALARY</label>
                <input type="text" class="form-control"  placeholder="" name="emp_salary" id="emp_salary" style="width:100px;">
            </div>

            <div class="form-group mx-sm-3 mb-2">
                <label for="">TYPE OF LEAVE</label>
              <select class="form-control" style="width:190px;" name="type_of_leave" id="type_of_leave" required>
                <option value="0">Select</option>
                <option value="vacation leave">Vacation Leave</option>
                <option value="sick leave">Sick Leave</option>
                <option value="special priviledge leave">Special priviledge Leave</option>
                <option value="force leave">Force Leave</option>
                <option value="leave without pay">Leave without pay</option>
            </select>
            </div>

                <div class="form-group mx-sm-2 mb-2">
                        <label >INCLUSIVE DATES</label>
                        <div class="d-flex flex-column">
                            <label style="color:#C3CFD5;" >From </label>
                            <input type="date" class="form-control" name="leave_from_date" style="width:140px" id="leave_from_date" required>
                            
                        </div>   
                </div>

                <div class="form-group mx-sm-2 mb-2">
                        <div class="d-flex flex-column">
                            <label style="color:#C3CFD5;" >To</label>
                            <input type="date" class="form-control" name="leave_to_date" style="width:140px" id="leave_to_date" required>
                        </div>   
                </div>
             

                <div class="form-group mx-sm-3 mb-2">
                    <label for="">COMMUNICATION</label>
                    <select class="form-control" style="width:100px;" name="communication" id="communication">
                        <option selected>Select</option>
                        <option>...</option>
                    </select>
                 </div>

                 <input type="hidden" id="sno" name="sno">


                <div class="col-lg-4 ">
                    <table class="table table-bordered table-sm" >
                        <thead>
                            <tr>
                            <th scope="col"></th>
                            <th scope="col">Vacation</th>
                            <th scope="col">Sick</th>
                            <th scope="col">Total</th>
                            </tr>
                        </thead>

                        <tbody >
                            <tr>
                            
                                <th>Last Balance</th>
                                <td id="vl_pts"></td>
                                <td id = "sl_pts"></td>
                                <td id="pts_total"></td>
                            
                            </tr>

                            <tr>
                                <th>Less this Leave</th>
                                <td id="vl_now_pts"></td>
                                <td id = "sl_now_pts"></td>
                                <td id="total_pts_now"></td>
                           
                            </tr>

                            <tr>
                                <th >Balance</th>
                                <td id="vl_bal"></td>
                                <td id="sl_bal"></td>
                                <td id="total_bal"></td>
                           
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


