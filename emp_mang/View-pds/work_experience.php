   
    <!--body section of WORK EXPERIENCE-->
    <div class=" emp_profile_section2 pt-4 " id="content-5">  
            <form class="form-inline" >
                
                <div class="form-group mx-sm-3 mb-2">
                    <div class="d-flex flex-column">
                        <label for="">INCLUSIVE DATES</label>
                        <div class="d-flex justify-content-center">
                        <input type="text" class="form-control" id="" placeholder="" style="width:100px;" name="from_date">
                        <input type="text" class="form-control" id="" placeholder="" style="width:100px;" name="to_date">
                        </div>
                    </div>
                </div>
                
                <div class="form-group mx-sm-3 mb-2">
                    <div class="d-flex flex-column">
                        <label for="">POSITION/TITLE</label>
                        <input type="text" class="form-control" id="" placeholder="<?php echo $position?>" style="width:200px;" name="position">
                    </div>
                </div>

                <div class="form-group mx-sm-3 mb-2">
                    <div class="d-flex flex-column">
                        <label for="">EMPLOYER </label>
                        <input type="text" class="form-control" id="" placeholder="<?php echo $employer?>" style="width:200px;" name="employer">
                    </div>
                </div>

                

                <div class="form-group mx-sm-3 mb-2">
                    <div class="d-flex flex-column">
                        <label for="">GOVERNMENT SERVICE</label>
                        <div class="d-flex justify-content-center">
                        <div class="form-check">
                            <label class="form-check-label" > Yes</label> 
                            <input class="form-check-input" type="checkbox" value="yes" name="govt_service">
                        </div>
                        <div class="form-check">
                            <label class="form-check-label"> No</label> <input class="form-check-input" type="checkbox" value="no" name="govt_service">
                        </div>
                        </div>
                    </div>
                </div>

                
            
            <div class="d-flex justify-content-center">
               

                    <div class="form-group mx-sm-3 mb-2">
                        <label for="">MONTHLY SALARY</label>
                        <input type="text" class="form-control" id="" placeholder="<?php echo $monthly_sal?>" style="width:100px;" name="monthly_sal">    
                    </div>

                    <div class="form-group mx-sm-3 mb-2">
                        <label for="">INCREMENT</label>
                        <input type="text" class="form-control" id="" placeholder="<?php echo $increment?>" style="width:100px;" name="increment">    
                    </div>
                    
                    <div class="form-group mx-sm-3 mb-2">
                        <label for="">STATUS</label>
                        <select class="form-control" style="width:100px;" name="status">
                            <option value = "">Status</option>
                            <option value="">...</option>
                        </select>  
                    </div>

                 

              
            </div>
            </form>
        </div>