 
   <!--body section of Civil service eligibility-->
   <div class="container">
   <div class=" emp_profile_section2 pt-4 mb-5 pb-2 " id="content-4">  
            
                
                  <div class="container civil_wrapper ">

                  <?php 
                             
                             $query = "SELECT * FROM civil_service WHERE emp_id = '$emp_id'";
                           
                             $runquery = $conn -> query($query);
                             $rowcount=mysqli_num_rows($runquery);

                             if($rowcount != 0 ){

                                

                             for($i= 0; $i <=  $rowcount ; $i++ )
                             {
                                    
                                    while($data = $runquery -> fetch_assoc()){


                                        $type_of[$i] = $data["type_of"];
                                        $name_of_exam[$i] = $data["name_of_exam"];
                                        $rating[$i] = $data["rating"];
                                        $exam_date[$i] = $data["exam_date"];
                                        $exam_place[$i] = $data["exam_place"];
                                        $licence_no[$i] = $data["licence_no"];
                                        $licence_val[$i] = $data["licence_val"];
                                
                           
                           ?>

                        <div class="form-inline">
                  
                  <div class="form-group mx-sm-3 mb-2">
                        <div class="d-flex flex-column">
                            <label for="">TYPE</label>
                            <select class="form-control" style="width:200px;" name="type_of"  >
                                <option value = "<?php echo $type_of[$i]?>"><?php echo $type_of[$i]?></option>
                                <option value = "Board Examination">Board Examination</option>
                                <option value = "Civil Service Examination">Civil Service Examination</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group mx-sm-3 mb-2">
                        <div class="d-flex flex-column">
                            <label for="">NAME OF EXAMINATION</label>
                            <input type="text" class="form-control"  value="<?php echo $name_of_exam[$i]?>" name ="name_of_exam[$i]">
                        </div>
                    </div>

                    <div class="form-group mx-sm-3 mb-2">
                        <div class="d-flex flex-column">
                            <label for="">RATING <span class="text-muted"> (if applicable) </span></label>
                            <input type="text" class="form-control"  value="<?php echo $rating[$i]?>" name="rating[$i]">
                        </div>
                    </div>

                    <div class="form-group mx-sm-3 mb-2">
                        <div class="d-flex flex-column">
                            <label for="">EXAMINATION DATE</label>
                            <input type="date" class="form-control"  value="<?php echo $exam_date[$i]?>"  name="exam_date[$i]">
                        </div>
                    </div>

                    <div class="form-group mx-sm-3 mb-2">
                        <div class="d-flex flex-column">
                            <label for="">PLACE OF EXAMINATION</label>
                            <input type="text" class="form-control"  value="<?php echo $exam_place[$i]?>"  name="exam_place[$i]"style="width:200px;">
                        </div>
                    </div>

                    
             
                <div class="d-flex justify-content-center">
                   

                        <div class="form-group mx-sm-3 mb-2">
                            <label for="">LICENCE <span class="text-muted">(If Applicable)</span></label>    
                        </div>

                        <div class="form-group mx-sm-3 mb-2">
                        <div class="d-flex flex-column">
                            <label for="">NUMBER</label>
                            <input type="text" class="form-control"  value="<?php echo $licence_no[$i]?>"  name="licence_no[$i]" style="width:160px;">
                        </div>
                    </div>

                    <div class="form-group mx-sm-3 mb-2">
                        <div class="d-flex flex-column">
                            <label for="">VALIDITY</label>
                            <input type="date" class="form-control"  value="<?php echo $licence_val[$i]?>" name="licence_val[$i]">
                        </div>
                    </div>

                  
                </div>
                </div>

                <?php  } } ?>

<a href="javascript:void(0);" class="add_civil_button" title="Add field"  ><i class="fa fa-plus"></i></a>
      
  <?php  } else { ?>

    <div class="form-inline">
                  
                  <div class="form-group mx-sm-3 mb-2">
                        <div class="d-flex flex-column">
                            <label for="">TYPE</label>
                            <select class="form-control" style="width:200px;" name="type_of[]"  >
                                <option value = "">SELECT</option>
                                <option value = "Board Examination">Board Examination</option>
                                <option value = "Civil Service Examination">Civil Service Examination</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group mx-sm-3 mb-2">
                        <div class="d-flex flex-column">
                            <label for="">NAME OF EXAMINATION</label>
                            <input type="text" class="form-control"  name ="name_of_exam[]">
                        </div>
                    </div>

                    <div class="form-group mx-sm-3 mb-2">
                        <div class="d-flex flex-column">
                            <label for="">RATING <span class="text-muted"> (if applicable) </span></label>
                            <input type="text" class="form-control"   name="rating[]">
                        </div>
                    </div>

                    <div class="form-group mx-sm-3 mb-2">
                        <div class="d-flex flex-column">
                            <label for="">EXAMINATION DATE</label>
                            <input type="date" class="form-control"  name="exam_date[]">
                        </div>
                    </div>

                    <div class="form-group mx-sm-3 mb-2">
                        <div class="d-flex flex-column">
                            <label for="">PLACE OF EXAMINATION</label>
                            <input type="text" class="form-control"    name="exam_place[]"style="width:200px;">
                        </div>
                    </div>

                    
             
                <div class="d-flex justify-content-center">
                   

                        <div class="form-group mx-sm-3 mb-2">
                            <label for="">LICENCE <span class="text-muted">(If Applicable)</span></label>    
                        </div>

                        <div class="form-group mx-sm-3 mb-2">
                        <div class="d-flex flex-column">
                            <label for="">NUMBER</label>
                            <input type="text" class="form-control"    name="licence_no[]" style="width:160px;">
                        </div>
                    </div>

                    <div class="form-group mx-sm-3 mb-2">
                        <div class="d-flex flex-column">
                            <label for="">VALIDITY</label>
                            <input type="date" class="form-control"   name="licence_val[]">
                        </div>
                    </div>

                  
                </div>
                </div>

                <a href="javascript:void(0);" class="add_civil_button" title="Add field"><i class="fa fa-plus"></i></a>

        <?php

    }
     
?>
    


                  </div>

               <div class="container">
                    <div class="text-right">
                        <button  type ="button"  class="btn m-2" style="background: #345587;color:#fff;" onclick="openpanel('content-3','edu')" >PREV</button>
                        <button  type ="button"  class="btn m-2" style="background: #345587; color:#fff" onclick="openpanel('content-5','wor')" >NEXT</button>
                    </div>
               </div>

                
        </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){
var maxField = 10; //Input fields increment limitation
var addButton = $('.add_civil_button'); //Add button selector
var wrapper = $('.civil_wrapper'); //Input field wrapper
var fieldHTML = 
' <div>  <div class="form-inline"> <div class="form-group mx-sm-3 mb-2"> <div class="d-flex flex-column"> <label for="">TYPE</label> <select class="form-control" style="width:200px;" name="type_of[]"  > <option value = ""></option> <option value = "Board Examination">Board Examination</option> <option value = "Civil Service Examination">Civil Service Examination</option> </select> </div> </div> <div class="form-group mx-sm-3 mb-2"> <div class="d-flex flex-column"> <label for="">NAME OF EXAMINATION</label> <input type="text" class="form-control"   name ="name_of_exam[]"> </div> </div> <div class="form-group mx-sm-3 mb-2"> <div class="d-flex flex-column"> <label for="">RATING <span class="text-muted"> (if applicable) </span></label> <input type="text" class="form-control"   name="rating[]"> </div> </div> <div class="form-group mx-sm-3 mb-2"> <div class="d-flex flex-column"> <label for="">EXAMINATION DATE</label> <input type="date" class="form-control"    name="exam_date[]"> </div> </div> <div class="form-group mx-sm-3 mb-2"> <div class="d-flex flex-column"> <label for="">PLACE OF EXAMINATION</label> <input type="text" class="form-control"    name="exam_place[]"style="width:200px;"> </div> </div> <div class="d-flex justify-content-center"> <div class="form-group mx-sm-3 mb-2"> <label for="">LICENCE <span class="text-muted">(If Applicable)</span></label> </div> <div class="form-group mx-sm-3 mb-2"> <div class="d-flex flex-column"> <label for="">NUMBER</label> <input type="text" class="form-control"    name="licence_no[]" style="width:160px;"> </div> </div> <div class="form-group mx-sm-3 mb-2"> <div class="d-flex flex-column"> <label for="">VALIDITY</label> <input type="date" class="form-control"   name="licence_val[]"> </div> </div> </div> </div><a href="javascript:void(0);" class="remove_civil_button"><i class="fa fa-minus"></i></a></div>'; 

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
$(wrapper).on('click', '.remove_civil_button', function(e){
    e.preventDefault();
    $(this).parent('div').remove(); //Remove field html
    x--; //Decrement field counter
});
});
</script>