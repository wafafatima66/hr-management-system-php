   
    <!--body section of WORK EXPERIENCE-->
    <div class="container">

    <div class=" emp_profile_section2 pt-4 mb-5 pb-2 " id="content-5">  
           
    <div class="container work_wrapper">

    <?php 
                             
                             $query = "SELECT * FROM emp_work WHERE emp_id = '$emp_id'";
                           
                             $runquery = $conn -> query($query);
                             $rowcount=mysqli_num_rows($runquery);

                             if($rowcount != 0 ){

                                

                             for($i= 0; $i <=  $rowcount ; $i++ )
                             {
                                    
                                    while($data = $runquery -> fetch_assoc()){

                                        $work_from_date[$i] = $data["work_from_date"];
                                        $work_to_date[$i] = $data["work_to_date"];
                                        $work_position[$i] = $data["work_position"];
                                        $employer[$i] = $data["employer"];
                                        $monthly_sal[$i] = $data["monthly_sal"];
                                        $increment[$i] = $data["increment"];
                                        $govt_service[$i] = $data["govt_service"];
                                        $work_status[$i] = $data["work_status"];

                                        $govt_service_yes[$i] ="";
                                        $govt_service_no[$i] ="";
                                    
                                    
                                      
                                        if( $govt_service[$i] =="yes"){
                                          $govt_service_yes[$i]  ="checked='checked'";
                                        } else if( $govt_service[$i] =="no") {
                                          $govt_service_no[$i]  ="checked='checked'";
                                        } else {
                                            $govt_service_yes[$i] ="";
                                            $govt_service_no[$i] ="";
                                        }
                                
                           
                           ?>


                           

    <div class="form-inline">

    

                <div class="form-group mx-sm-3 mb-2">
                    <div class="d-flex flex-column">
                        <label for="">INCLUSIVE DATES</label>
                        <div class="d-flex justify-content-center">
                        <input type="date" class="form-control mx-sm-1"  value="<?php echo $work_from_date[$i]?>" style="width:140px;" name="work_from_date[$i]">
                        <input type="date" class="form-control mx-sm-1"  value="<?php echo $work_to_date[$i]?>" style="width:140px;" name="work_to_date[$i]">
                        </div>
                    </div>
                </div>
                
                <div class="form-group mx-sm-3 mb-2">
                    <div class="d-flex flex-column">
                        <label for="">POSITION/TITLE</label>
                        <input type="text" class="form-control"  value="<?php echo $work_position[$i]?>" style="width:200px;" name="work_position[$i]">
                    </div>
                </div>

                <div class="form-group mx-sm-3 mb-2">
                    <div class="d-flex flex-column">
                        <label for="">EMPLOYER </label>
                        <input type="text" class="form-control"  value="<?php echo $employer[$i]?>" style="width:200px;" name="employer[$i]">
                    </div>
                </div>

                

                <div class="form-group mx-sm-3 mb-2">
                    <div class="d-flex flex-column">
                        <label for="">GOVERNMENT SERVICE</label>
                        <div class="d-flex justify-content-center">
                        <div class="form-check">
                            <label class="form-check-label" > Yes</label> 
                            <input class="form-check-input" type="checkbox" value="yes" name="govt_service[$i]" <?php echo $govt_service_yes[$i] ?>>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label"> No</label> <input class="form-check-input" type="checkbox" value="no" name="govt_service[$i]" <?php echo $govt_service_no[$i] ?>>
                        </div>
                        </div>
                    </div>
                </div>

                
            
            <div class="d-flex justify-content-center">
               

                    <div class="form-group mx-sm-3 mb-2">
                        <label for="">MONTHLY SALARY</label>
                        <input type="text" class="form-control"  value="<?php echo $monthly_sal[$i]?>" style="width:100px;" name="monthly_sal[$i]">    
                    </div>

                    <div class="form-group mx-sm-3 mb-2">
                        <label for="">INCREMENT</label>
                        <input type="text" class="form-control"  value="<?php echo $increment[$i]?>" style="width:100px;" name="increment[$i]">    
                    </div>
                    
                    <div class="form-group mx-sm-3 mb-2">
                        <label for="">STATUS</label>
                        <select class="form-control" style="width:100px;" name="work_status[$i]">
                            <option value = "<?php echo $work_status[$i]?>"><?php echo $work_status[$i]?></option>
                            <option value="permanent">Permanent</option>
                            <option value="contractual">Contractual</option>
                            <option value="job_order">Job order</option>
                        </select>  
                    </div>

            </div>

        </div> 
        
        

      <?php  } } ?>

<a href="javascript:void(0);" class="add_work_button" title="Add field"  ><i class="fa fa-plus"></i></a>
      
  <?php  } else { ?>


        <div class="form-inline">

                <div class="form-group mx-sm-3 mb-2">
                    <div class="d-flex flex-column">
                        <label for="">INCLUSIVE DATES</label>
                        <div class="d-flex justify-content-center">
                        <input type="date" class="form-control mx-sm-1"  style="width:140px;" name="work_from_date[]">
                        <input type="date" class="form-control mx-sm-1"  style="width:140px;" name="work_to_date[]">
                        </div>
                    </div>
                </div>
                
                <div class="form-group mx-sm-3 mb-2">
                    <div class="d-flex flex-column">
                        <label for="">POSITION/TITLE</label>
                        <input type="text" class="form-control"   style="width:200px;" name="work_position[]">
                    </div>
                </div>

                <div class="form-group mx-sm-3 mb-2">
                    <div class="d-flex flex-column">
                        <label for="">EMPLOYER </label>
                        <input type="text" class="form-control"   style="width:200px;" name="employer[]">
                    </div>
                </div>

                

                <div class="form-group mx-sm-3 mb-2">
                    <div class="d-flex flex-column">
                        <label for="">GOVERNMENT SERVICE</label>
                        <div class="d-flex justify-content-center">
                        <div class="form-check">
                            <label class="form-check-label" > Yes</label> 
                            <input class="form-check-input" type="checkbox" value="yes" name="govt_service[]" >
                        </div>
                        <div class="form-check">
                            <label class="form-check-label"> No</label> <input class="form-check-input" type="checkbox" value="no" name="govt_service[]" >
                        </div>
                        </div>
                    </div>
                </div>

                
            
            <div class="d-flex justify-content-center">
               

                    <div class="form-group mx-sm-3 mb-2">
                        <label for="">MONTHLY SALARY</label>
                        <input type="text" class="form-control"   style="width:100px;" name="monthly_sal[]">    
                    </div>

                    <div class="form-group mx-sm-3 mb-2">
                        <label for="">INCREMENT</label>
                        <input type="text" class="form-control"  style="width:100px;" name="increment[]">    
                    </div>
                    
                    <div class="form-group mx-sm-3 mb-2">
                        <label for="">STATUS</label>
                        <select class="form-control" style="width:100px;" name="work_status[]">
                            <option value =0>Select</option>
                            <option value="permanent">Permanent</option>
                            <option value="contractual">Contractual</option>
                            <option value="job_order">Job order</option>
                        </select>  
                    </div>

            </div>

        </div> 
        <a href="javascript:void(0);" class="add_work_button" title="Add field"><i class="fa fa-plus"></i></a>

        <?php

    }
     
?>
       

        </div>

     

                    <div class="container">
                    <div class="text-right">
                        <button class="btn m-2" style="background: #345587;color:#fff;" type ="button" onclick="openpanel('content-4','ser')" >PREV</button>
                        <button  type ="button" class="btn m-2" style="background: #345587; color:#fff" onclick="openpanel('content-6','vol')" >NEXT</button>
                    </div>
                    </div>

            
        </div>
    
            
        </div>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){
var maxField = 10; //Input fields increment limitation
var addButton = $('.add_work_button'); //Add button selector
var wrapper = $('.work_wrapper'); //Input field wrapper
var fieldHTML = 
' <div><div class="form-inline"><div class="form-group mx-sm-3 mb-2"><div class="d-flex flex-column"><label for="">INCLUSIVE DATES</label><div class="d-flex justify-content-center"><input type="date" class="form-control mx-sm-1"  style="width:140px;" name="work_from_date[]"><input type="date" class="form-control mx-sm-1"  style="width:140px;" name="work_to_date[]"></div></div></div><div class="form-group mx-sm-3 mb-2"><div class="d-flex flex-column"><label for="">POSITION/TITLE</label><input type="text" class="form-control"   style="width:200px;" name="work_position[]"></div></div><div class="form-group mx-sm-3 mb-2"><div class="d-flex flex-column"><label for="">EMPLOYER </label><input type="text" class="form-control"   style="width:200px;" name="employer[]"></div></div><div class="form-group mx-sm-3 mb-2"> <div class="d-flex flex-column"> <label for="">GOVERNMENT SERVICE</label> <div class="d-flex justify-content-center"> <div class="form-check"> <label class="form-check-label" > Yes</label> <input class="form-check-input" type="checkbox" value="yes" name="govt_service[]" > </div> <div class="form-check"> <label class="form-check-label"> No</label> <input class="form-check-input" type="checkbox" value="no" name="govt_service[]" > </div> </div> </div> </div><div class="d-flex justify-content-center"> <div class="form-group mx-sm-3 mb-2"> <label for="">MONTHLY SALARY</label> <input type="text" class="form-control"   style="width:100px;" name="monthly_sal[]"> </div> <div class="form-group mx-sm-3 mb-2"> <label for="">INCREMENT</label> <input type="text" class="form-control"  style="width:100px;" name="increment[]"> </div> <div class="form-group mx-sm-3 mb-2"> <label for="">STATUS</label> <select class="form-control" style="width:100px;" name="work_status[]"> <option value = "0">Select</option> <option value="permanent">Permanent</option> <option value="contractual">Contractual</option> <option value="job_order">Job order</option> </select> </div> </div>  </div><a href="javascript:void(0);" class="remove_work_button"><i class="fa fa-minus"></i></a></div>'; 

//New input field html 
var x = 1; //Initial field counter is 1

//Once add button is clicked
$(addButton).click(function(){
    //Check maximum number of input fields
    if(x < maxField){ 
        x++; //Increment field counter
        $(wrapper).append(fieldHTML); //Add field html
    }
});

//Once remove button is clicked
$(wrapper).on('click', '.remove_work_button', function(e){
    e.preventDefault();
    $(this).parent('div').remove(); //Remove field html
    x--; //Decrement field counter
});
});
</script>