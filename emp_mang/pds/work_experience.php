   
    <!--body section of WORK EXPERIENCE-->
    <div class="container">
    <div class=" emp_profile_section2 pt-4 mb-5 pb-2 " id="content-5">  
           
    <div class="container form-inline">
                <div class="form-group mx-sm-3 mb-2">
                    <div class="d-flex flex-column">
                        <label for="">INCLUSIVE DATES</label>
                        <div class="d-flex justify-content-center">
                        <input type="date" class="form-control mx-sm-1" id="" value="<?php echo $work_from_date?>" style="width:140px;" name="work_from_date">
                        <input type="date" class="form-control mx-sm-1" id="" value="<?php echo $work_to_date?>" style="width:140px;" name="work_to_date">
                        </div>
                    </div>
                </div>
                
                <div class="form-group mx-sm-3 mb-2">
                    <div class="d-flex flex-column">
                        <label for="">POSITION/TITLE</label>
                        <input type="text" class="form-control" id="" value="<?php echo $work_position?>" style="width:200px;" name="work_position">
                    </div>
                </div>

                <div class="form-group mx-sm-3 mb-2">
                    <div class="d-flex flex-column">
                        <label for="">EMPLOYER </label>
                        <input type="text" class="form-control" id="" value="<?php echo $employer?>" style="width:200px;" name="employer">
                    </div>
                </div>

                

                <div class="form-group mx-sm-3 mb-2">
                    <div class="d-flex flex-column">
                        <label for="">GOVERNMENT SERVICE</label>
                        <div class="d-flex justify-content-center">
                        <div class="form-check">
                            <label class="form-check-label" > Yes</label> 
                            <input class="form-check-input" type="checkbox" value="yes" name="govt_service" <?php echo $govt_service_yes?>>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label"> No</label> <input class="form-check-input" type="checkbox" value="no" name="govt_service" <?php echo $govt_service_no?>>
                        </div>
                        </div>
                    </div>
                </div>

                
            
            <div class="d-flex justify-content-center">
               

                    <div class="form-group mx-sm-3 mb-2">
                        <label for="">MONTHLY SALARY</label>
                        <input type="text" class="form-control" id="" value="<?php echo $monthly_sal?>" style="width:100px;" name="monthly_sal">    
                    </div>

                    <div class="form-group mx-sm-3 mb-2">
                        <label for="">INCREMENT</label>
                        <input type="text" class="form-control" id="" value="<?php echo $increment?>" style="width:100px;" name="increment">    
                    </div>
                    
                    <div class="form-group mx-sm-3 mb-2">
                        <label for="">STATUS</label>
                        <select class="form-control" style="width:100px;" name="work_status">
                            <option value = "">Status</option>
                            <option value="">...</option>
                        </select>  
                    </div>

            </div>

            <div class="container">
                    <div class="text-right">
                        <button class="btn m-2" style="background: #345587;color:#fff;" type ="button" onclick="openpanel('content-4','ser')" >PREV</button>
                        <button  type ="button" class="btn m-2" style="background: #345587; color:#fff" onclick="openpanel('content-6','vol')" >NEXT</button>
                    </div>
                    </div>
           
        </div>

            
        </div>

            
        </div>