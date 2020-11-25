 
   <!--body section of Civil service eligibility-->
   <div class=" emp_profile_section2 pt-4 " id="content-4">  
            <form method="post" action="pds/civil-config.php" class="form-inline">
                
                    <div class="form-group mx-sm-3 mb-2">
                        <div class="d-flex flex-column">
                            <label for="">TYPE</label>
                            <select class="form-control" style="width:200px;" name="type_of" placeholder="<?php echo $type_of?>" >
                                <option value = "">Select type</option>
                                <option value = "">...</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group mx-sm-3 mb-2">
                        <div class="d-flex flex-column">
                            <label for="">NAME OF EXAMINATION</label>
                            <input type="text" class="form-control" id="" placeholder="<?php echo $name_of_exam?>" name ="name_of_exam">
                        </div>
                    </div>

                    <div class="form-group mx-sm-3 mb-2">
                        <div class="d-flex flex-column">
                            <label for="">RATING <span class="text-muted"> (if applicable) </span></label>
                            <input type="text" class="form-control" id="" placeholder="<?php echo $rating?>" name="rating">
                        </div>
                    </div>

                    <div class="form-group mx-sm-3 mb-2">
                        <div class="d-flex flex-column">
                            <label for="">EXAMINATION DATE</label>
                            <input type="text" class="form-control" id="" placeholder="<?php echo $exam_date?>"  name="exam_date">
                        </div>
                    </div>

                    <div class="form-group mx-sm-3 mb-2">
                        <div class="d-flex flex-column">
                            <label for="">PLACE OF EXAMINATION</label>
                            <input type="text" class="form-control" id="" placeholder="<?php echo $exam_place?>"  name="exam_place">
                        </div>
                    </div>

                    
             
                <div class="d-flex justify-content-center">
                   

                        <div class="form-group mx-sm-3 mb-2">
                            <label for="">LICENCE <span class="text-muted">(If Applicable)</span></label>    
                        </div>

                        <div class="form-group mx-sm-3 mb-2">
                        <div class="d-flex flex-column">
                            <label for="">NUMBER</label>
                            <input type="text" class="form-control" id="" placeholder="<?php echo $licence_no?>"  name="licence_no">
                        </div>
                    </div>

                    <div class="form-group mx-sm-3 mb-2">
                        <div class="d-flex flex-column">
                            <label for="">VALIDITY</label>
                            <input type="text" class="form-control" id="" placeholder="<?php echo $licence_val?>" name="licence_val">
                        </div>
                    </div>

                  
                </div>

                <div class="text-right">
                        <button class="btn m-2" style="background: #345587;color:#fff;";>PREV</button>
                        <button  type ="submit" name="submit" class="btn m-2" style="background: #345587; color:#fff";>NEXT</button>
                    </div>

                </form>
        </div>