
        <!--body section of VOLUNTARY WORKS-->
        <div class="container">
        <div class=" emp_profile_section2 pt-4 mb-5 pb-3 " id="content-6">  
            
        <div class="container form-inline">
        
                <div class="form-group mx-sm-3 mb-2">
                    <div class="d-flex flex-column">
                        <label for="">NAME OF ORGANISATION</label>
                        <input type="text" class="form-control"  placeholder="<?php echo $name_org?>" style="width:200px;" name="name_org">
                    </div>
                </div>
                
                <div class="form-group mx-sm-3 mb-2">
                    <div class="d-flex flex-column">
                        <label for="">ADDRESS</label>
                        <input type="text" class="form-control" placeholder="<?php echo $org_add?>" style="width:200px;" name="org_add">
                    </div>
                </div>

                
                <div class="form-group mx-sm-3 mb-2">
                    <div class="d-flex flex-column">
                        <label for="">INCLUSIVE DATES</label>
                            <div class="d-flex justify-content-center">

                            <input type="date" class="form-control mx-sm-1" placeholder="" name="vol_from_date">

                            <input type="date" class="form-control mx-sm-1"  placeholder="" name="vol_to_date">
                        </div>
                    </div>
                </div>

                
         
            <div class="d-flex justify-content-center">
               

                    <div class="form-group mx-sm-3 mb-2">
                        <label for="">NO OF HOURS</label>
                        <input type="text" class="form-control"  placeholder="<?php echo $no_of_hrs?>" style="width:100px;" name="no_of_hrs">    
                    </div>

                    <div class="form-group mx-sm-3 mb-2">
                        <label for="">POSITION/ROLE</label>
                        <input type="text" class="form-control"  placeholder="<?php echo $position_vol?>" style="width:120px;" name="position">    
                    </div>
             
                  
            </div>


            <div class="container">
                    <div class="text-right">
                        <button class="btn m-2" style="background: #345587;color:#fff;" type="button" onclick="openpanel('content-5','wor')" >PREV</button>
                        <button  type ="button"  class="btn m-2" style="background: #345587; color:#fff" onclick="openpanel('content-7','ler')" >NEXT</button>
                    </div>
                    </div>
           
        </div>

        </div>

        </div>