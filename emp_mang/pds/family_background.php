
        <!--body section of family background-->
        <div class=" emp_profile_section2 pt-4 mb-5 pb-4 " id="content-2">  
           
                <form class="form-inline" method ="POST" action="includes/family-config.php">

                <div class="container">
                     <div class="row">
                        <div class="col-lg-7 form-inline">

                     
                
                            <div class="form-group mx-sm-1 mb-2">
                                <label for="">SPOUSE NAME</label>
                                <input type="text" class="form-control" id="" style="width:100px; "placeholder="<?php echo $emp_spouse_lastname?>" name="emp_spouse_lastname" value="">
                            </div>

                            <div class="form-group mx-sm-1 mb-2">
                            <input type="text" class="form-control" id="" style="width:100px; "placeholder="<?php echo $emp_spouse_firstname?>" name="emp_spouse_firstname">
                            </div>

                            <div class="form-group mx-sm-1 mb-2">
                            <input type="text" class="form-control" id="" style="width:100px;" placeholder="<?php echo $emp_spouse_middlename?>" name="emp_spouse_middlename">
                            </div>

                            <div class="form-group mx-sm-1 mb-2">
                            <input type="text" class="form-control" id="" style="width:50px;" placeholder="<?php echo $emp_spouse_extname?>" name="emp_spouse_extname">
                            </div>
                
                          
          
<div class="container">


<div class="row">

<div class="col-lg-6 m-0 p-0 ">



    <div class="form-group mx-sm-1 mb-2">
        <label for="">OCCUPATION</label>
        <input type="text" class="form-control" id="" name="emp_sp_occupation" placeholder="<?php echo $emp_sp_occupation?>">
    </div>

  </div>

<div class="col-lg-6 m-0 p-0">

<div class="form-group mx-sm-2 mb-2">
    <label for="" style="width:100px">EMPLOYER</label>
        <input type="text" class="form-control" id=""  name="emp_sp_employer" placeholder="<?php echo $emp_sp_employer?>"> 
    </div>


<div class="form-group mx-sm-2 mb-2">
    <label for="" style="width:100px">ADDRESS</label>
    <input type="text" class="form-control" id=""  name="emp_sp_add" placeholder="<?php echo $emp_sp_add?>">
</div>

<div class="form-group mx-sm-2 mb-2">
<label for="" style="width:100px">TELEPHONE NO</label>
    <input type="text" class="form-control" id=""  name="emp_sp_tel" placeholder="<?php echo $emp_sp_tel?>">
</div>

</div>


</div>
</div>


        
                
                        <div class="form-group mx-sm-1 mb-2">
                            <label for="">FATHER'S NAME</label>
                            <input type="text" class="form-control" id=""  style="width:100px;"  placeholder="<?php echo $emp_father_lastname?>" name="emp_father_lastname">
                        </div>

                        <div class="form-group mx-sm-1 mb-2">
                            <input type="text" class="form-control" id="" style="width:100px;"  placeholder="<?php echo $emp_father_firstname?>" name="emp_father_firstname">
                        </div>

                        <div class="form-group mx-sm-1 mb-2">
                            <input type="text" class="form-control" id="" style="width:100px;"  placeholder="<?php echo $emp_father_middlename?>" name="emp_father_middlename">
                        </div>

                        <div class="form-group mx-sm-1 mb-2">
                            <input type="text" class="form-control" id="" style="width:50px;" placeholder="<?php echo $emp_father_extname?>" name="emp_father_extname">
                        </div>
                
    
                
                        <div class="form-group mx-sm-1 mb-2">
                            <label for="">MOTHER'S NAME</label>
                            <input type="text" class="form-control" id=""style="width:100px;"  placeholder="<?php echo $emp_mother_lastname?> " name="emp_mother_lastname">
                        </div>

                        <div class="form-group mx-sm-1 mb-2">
                            <input type="text" class="form-control" id=""style="width:100px;"  placeholder="<?php echo $emp_mother_firstname?> " name="emp_mother_firstname">
                        </div>

                        <div class="form-group mx-sm-1 mb-2">
                            <input type="text" class="form-control" id="" style="width:100px;"  placeholder="<?php echo $emp_mother_middlename?>" name="emp_mother_middlename">
                        </div>

                        <div class="form-group mx-sm-1 mb-2">
                            <input type="text" class="form-control" id="" style="width:50px;" placeholder="<?php echo $emp_mother_extname?>" name="emp_mother_extname">
                        </div>
                        
                
        

                </div>

                    <div class="col-lg-5 " style="background:#E6F7FF;">
                        <div class="container family_wrapper">

                            <div class="row">
                                <div class="col-7 p-0 m-0 form-inline ">             
                                    <div class="form-group mx-sm-1 mb-2">
                                        <label for="">NAME OF CHILDREN(Write Fullname)</label>
                                    </div>                   
                                </div>

                                <div class="col-5 p-0 m-0 form-inline "> 
                                    <div class="form-group mx-sm-1 mb-2">
                                        <label for="">DATE OF BIRTH</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-7 p-0 m-0 form-inline ">             
                                    <div class="form-group mx-sm-1 mb-2">
                                        <input type="text" class="form-control" style="width:200px;" name="emp_child_name[]">
                                    </div>                   
                                </div>

                                <div class="col-5 p-0 m-0 form-inline "> 
                                    <div class="form-group mx-sm-1 mb-2">
                                        <input type="date" class="form-control" style="width:100px;"  name="emp_child_dob[]">
                                    </div>
                                </div>
                            </div>

                        </div> 

                         <a href="javascript:void(0);" class="add_fam_button" title="Add field"><i class="fa fa-plus"></i></a>  
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
           
            
            
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){

var maxField = 10; //Input fields increment limitation
var addButton = $('.add_fam_button'); //Add button selector
var wrapper = $('.family_wrapper'); //Input field wrapper
var fieldHTML = 
' <div class="row"><div class="col-7 p-0 m-0 form-inline "> <div class="form-group mx-sm-1 mb-2"><input type="text" class="form-control" name="emp_child_name[]" style="width:200px;" ></div></div> <div class="col-5 p-0 m-0 form-inline "> <div class="form-group mx-sm-1 mb-2"><input type="date" class="form-control" name="emp_child_dob[]" style="width:100px;" ></div></div><a href="javascript:void(0);" class="remove_fam_button"><i class="fa fa-minus"></i></a></div>'; 

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
$(wrapper).on('click', '.remove_fam_button', function(e){
    e.preventDefault();
    $(this).parent('div').remove(); //Remove field html
    x--; //Decrement field counter
});
});
</script>
                  
        