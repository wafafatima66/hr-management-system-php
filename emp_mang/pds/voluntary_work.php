
        <!--body section of VOLUNTARY WORKS-->
        <div class="container">
        <div class=" emp_profile_section2 pt-4 mb-5 pb-3 " id="content-6">  
            
        <div class="container voluntary_wrapper">
        
                <div class="form-inline">
                
                <div class="form-group mx-sm-3 mb-2">
                    <div class="d-flex flex-column">
                        <label for="">NAME OF ORGANISATION</label>
                        <input type="text" class="form-control"  value="<?php echo $name_org?>" style="width:200px;" name="name_org">
                    </div>
                </div>
                
                <div class="form-group mx-sm-3 mb-2">
                    <div class="d-flex flex-column">
                        <label for="">ADDRESS</label>
                        <input type="text" class="form-control" value="<?php echo $org_add?>" style="width:200px;" name="org_add">
                    </div>
                </div>

                
                <div class="form-group mx-sm-3 mb-2">
                    <div class="d-flex flex-column">
                        <label for="">INCLUSIVE DATES</label>
                            <div class="d-flex justify-content-center">

                            <input type="date" class="form-control mx-sm-1" value="<?php echo $vol_from_date?>" name="vol_from_date">

                            <input type="date" class="form-control mx-sm-1"  value="<?php echo $vol_to_date?>" name="vol_to_date">
                        </div>
                    </div>
                </div>

                
         
            <div class="d-flex justify-content-center">
               

                    <div class="form-group mx-sm-3 mb-2">
                        <label for="">NO OF HOURS</label>
                        <input type="text" class="form-control"  value="<?php echo $no_of_hrs?>" style="width:100px;" name="no_of_hrs">    
                    </div>

                    <div class="form-group mx-sm-3 mb-2">
                        <label for="">POSITION/ROLE</label>
                        <input type="text" class="form-control"  value="<?php echo $position_vol?>" style="width:120px;" name="position">    
                    </div>
             
                  
            </div>
                
                </div>


                <a href="javascript:void(0);" class="add_vol_button" title="Add field"  ><i class="fa fa-plus"></i></a>
           
           
        </div>

        <div class="container">
                    <div class="text-right">
                        <button class="btn m-2" style="background: #345587;color:#fff;" type="button" onclick="openpanel('content-5','wor')" >PREV</button>
                        <button  type ="button"  class="btn m-2" style="background: #345587; color:#fff" onclick="openpanel('content-7','ler')" >NEXT</button>
                    </div>
                    </div>

        </div>

        </div>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){
var maxField = 10; //Input fields increment limitation
var addButton = $('.add_vol_button'); //Add button selector
var wrapper = $('.voluntary_wrapper'); //Input field wrapper
var fieldHTML = 
' <div><div class="form-inline"> <div class="form-group mx-sm-3 mb-2"> <div class="d-flex flex-column"> <label for="">NAME OF ORGANISATION</label> <input type="text" class="form-control"  value="" style="width:200px;" name="name_org"> </div> </div> <div class="form-group mx-sm-3 mb-2"> <div class="d-flex flex-column"> <label for="">ADDRESS</label> <input type="text" class="form-control" value="" style="width:200px;" name="org_add"> </div> </div> <div class="form-group mx-sm-3 mb-2"> <div class="d-flex flex-column"> <label for="">INCLUSIVE DATES</label> <div class="d-flex justify-content-center"> <input type="date" class="form-control mx-sm-1" value="" name="vol_from_date"> <input type="date" class="form-control mx-sm-1"  value="" name="vol_to_date"> </div> </div> </div> <div class="d-flex justify-content-center"> <div class="form-group mx-sm-3 mb-2"> <label for="">NO OF HOURS</label> <input type="text" class="form-control"  value="" style="width:100px;" name="no_of_hrs"> </div> <div class="form-group mx-sm-3 mb-2"> <label for="">POSITION/ROLE</label> <input type="text" class="form-control"  value="" style="width:120px;" name="position"> </div> </div> </div><a href="javascript:void(0);" class="remove_vol_button"><i class="fa fa-minus"></i></a></div>'; 

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
$(wrapper).on('click', '.remove_vol_button', function(e){
    e.preventDefault();
    $(this).parent('div').remove(); //Remove field html
    x--; //Decrement field counter
});
});
</script>