   <!--body section of learning and development-->
   <div class=" emp_profile_section2 pt-4 mb-5 pb-2" id="content-7" style="background-color:#E6F7FF">  
            <form class="form-inline" method="post" action="includes/learning-config.php">
                
                <div class="form-group mx-sm-3 mb-2">
                    <div class="d-flex flex-column">
                        <label for="">TITLE OF TRAINING PROGRAMS ATTENDED</label>
                        <input type="text" class="form-control" id="" placeholder="<?php echo $title_of_training?>" style="width:300px;" name="title_of_training">
                    </div>
                </div>
                
                <div class="form-group mx-sm-2 mb-2">
                    <div class="d-flex flex-column">
                        <label for="">TYPE OF PROGRAM</label>
                        <input type="text" class="form-control" id="" placeholder="<?php echo $type_of_position?>" style="width:150px;" name="type_of_position">
                    </div>
                </div>

                <div class="form-group mx-sm-2 mb-2">
                    <div class="d-flex flex-column">
                        <label for="">NO. OF HOURS</label>
                        <input type="text" class="form-control" id="" placeholder="<?php echo $no_of_hrs?>" style="width:50px;" name="no_of_hrs">
                    </div>
                </div>

                
                <div class="form-group mx-sm-2 mb-2">
                    <div class="d-flex flex-column">
                        <label for="">INCLUSIVE DATES</label>
                            <div class="d-flex justify-content-center">

                            <input type="date" class="form-control mx-sm-1 mb-2" id="" placeholder="<?php echo $from_date?>" name="from_date" >
                            
                            <input type="date" class="form-control mx-sm-1 mb-2" id="" placeholder="<?php echo $to_date?>" name="to_date" >
                            
                        </div>
                    </div>
                </div>

                
            
          <div class="container text-center">
          <div class="d-flex justify-content-center">
                    <div class="form-group mx-sm-3 mb-2">
                        <label for="">CONDUCTED/SPONSORED BY</label>
                        <input type="text" class="form-control" id="" placeholder="<?php echo $conducted_by?>" style="width:300px;" name="conducted_by">    
                    </div>
            </div>
          </div>

          <div class="container">
             <div class="text-right">
                        <button class="btn m-2" style="background: #345587;color:#fff;";>PREV</button>
                        <button  type ="submit" name="submit" class="btn m-2" style="background: #345587; color:#fff";>NEXT</button>
                </div>
             </div>

            </form>
        </div>