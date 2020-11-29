 
   <!--body section of Civil service eligibility-->
   <div class="container">
   <div class=" emp_profile_section2 pt-4 mb-5 pb-2 " id="content-4">  
            
                
                  <div class="container form-inline">
                  
                  <div class="form-group mx-sm-3 mb-2">
                        <div class="d-flex flex-column">
                            <label for="">TYPE</label>
                            <select class="form-control" style="width:200px;" name="type_of" value="<?php echo $type_of?>" >
                                <option value = "0">Select</option>
                                <option value = "Board Examination">Board Examination</option>
                                <option value = "Civil Service Examination">Civil Service Examination</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group mx-sm-3 mb-2">
                        <div class="d-flex flex-column">
                            <label for="">NAME OF EXAMINATION</label>
                            <input type="text" class="form-control" id="" value="<?php echo $name_of_exam?>" name ="name_of_exam">
                        </div>
                    </div>

                    <div class="form-group mx-sm-3 mb-2">
                        <div class="d-flex flex-column">
                            <label for="">RATING <span class="text-muted"> (if applicable) </span></label>
                            <input type="text" class="form-control" id="" value="<?php echo $rating?>" name="rating">
                        </div>
                    </div>

                    <div class="form-group mx-sm-3 mb-2">
                        <div class="d-flex flex-column">
                            <label for="">EXAMINATION DATE</label>
                            <input type="date" class="form-control" id="" value="<?php echo $exam_date?>"  name="exam_date">
                        </div>
                    </div>

                    <div class="form-group mx-sm-3 mb-2">
                        <div class="d-flex flex-column">
                            <label for="">PLACE OF EXAMINATION</label>
                            <input type="text" class="form-control" id="" value="<?php echo $exam_place?>"  name="exam_place"style="width:200px;">
                        </div>
                    </div>

                    
             
                <div class="d-flex justify-content-center">
                   

                        <div class="form-group mx-sm-3 mb-2">
                            <label for="">LICENCE <span class="text-muted">(If Applicable)</span></label>    
                        </div>

                        <div class="form-group mx-sm-3 mb-2">
                        <div class="d-flex flex-column">
                            <label for="">NUMBER</label>
                            <input type="text" class="form-control" id="" value="<?php echo $licence_no?>"  name="licence_no" style="width:160px;">
                        </div>
                    </div>

                    <div class="form-group mx-sm-3 mb-2">
                        <div class="d-flex flex-column">
                            <label for="">VALIDITY</label>
                            <input type="date" class="form-control" id="" value="<?php echo $licence_val?>" name="licence_val">
                        </div>
                    </div>

                  
                </div>
                  
                  
                  </div>

               <div class="container">
                    <div class="text-right">
                        <button class="btn m-2" style="background: #345587;color:#fff;" onclick="openpanel('content-4','ser')" >PREV</button>
                        <button  type ="button"  class="btn m-2" style="background: #345587; color:#fff" onclick="openpanel('content-5','wor')" >NEXT</button>
                    </div>
               </div>

                
        </div>
        </div>