   <!--body section of learning and development-->
   <div class="container">

   <div class=" emp_profile_section2 pt-4 mb-5 pb-2 form-inline" id="content-7" style="background-color:#E6F7FF">  
           
                  <div class="container form-inline">

                <div class="form-group mx-sm-2 mb-2">
                    <div class="d-flex flex-column">
                        <label for="">TITLE OF TRAINING PROGRAMS ATTENDED</label>
                        <input type="text" class="form-control" id="" value="<?php echo $title_of_training?>" style="width:300px;" name="title_of_training">
                    </div>
                </div>
                
                <div class="form-group mx-sm-1 mb-2">
                    <div class="d-flex flex-column">
                        <label for="">TYPE OF PROGRAM</label>
                        <input type="text" class="form-control" id="" value="<?php echo $type_of_position?>" style="width:150px;" name="type_of_position">
                    </div>
                </div>

                <div class="form-group mx-sm-1 mb-2">
                    <div class="d-flex flex-column">
                        <label for="">NO. OF HOURS</label>
                        <input type="text" class="form-control"  value="<?php echo $no_of_hrs?>" style="width:50px;" name="no_of_hrs">
                    </div>
                </div>

                
                <div class="form-group mx-sm-1 mb-2">
                    <div class="d-flex flex-column">
                        <label for="">INCLUSIVE DATES</label>
                            <div class="d-flex justify-content-center">

                            <input type="date" class="form-control mx-sm-1 mb-2"  style="width:140px;" value="<?php echo $from_date?>" name="learn_from_date" >
                            
                            <input type="date" class="form-control mx-sm-1 mb-2"  style="width:140px;" value="<?php echo $to_date?>" name="learn_to_date" >
                            
                        </div>
                    </div>
                </div>

                
            
          <div class="container text-center">
          <div class="d-flex justify-content-center">
                    <div class="form-group mx-sm-3 mb-2">
                        <label for="">CONDUCTED/SPONSORED BY</label>
                        <input type="text" class="form-control" id="" value="<?php echo $conducted_by?>" style="width:300px;" name="conducted_by">    
                    </div>
            </div>
          </div>

          <div class="container">
             <div class="text-right">
                        <button class="btn m-2" style="background: #345587;color:#fff;" type="button" onclick="openpanel('content-7','ler')" >PREV</button>
                        <button  type ="button" class="btn m-2" style="background: #345587; color:#fff" onclick="openpanel('content-8','spe')" >NEXT</button>
                </div>
             </div>

           
        </div>

        </div>

        </div>