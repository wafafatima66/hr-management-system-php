
   <!--body section of Reference-->

<div class="container">
   <div class=" emp_profile_section2 pt-4 mb-5 pb-2 " id="content-10">  
       

          

            <div class="container " style="background:#E6F7FF;">

                <div class="row form-inline" style="width:100%">

                    <div class="col-lg-4 mb-2 pt-2 ">
                        
                    <div class="form-group mx-sm-3 mb-2">
                           <label for="" >FULL NAME</label>
                           </div>
                        
                    </div>

                    <div class="col-lg-4 mb-2 pt-2">
                      
                    <div class="form-group mx-sm-3 mb-2">
                            <label for="">ADDRESS</label>
                            </div>
                    </div>

                    <div class="col-lg-4 mb-2 pt-2">
                    <div class="form-group mx-sm-3 mb-2">
                            <label for="">TELEPHONE NO./MOBILE PHONE NO.</label>
                            </div>
                    </div>

                </div>

                </div>

                <div class="container reference_wrapper" style="background:#E6F7FF;">

                <?php 
                             
                             $query = "SELECT * FROM emp_references WHERE emp_id = '$emp_id'";
                           
                             $runquery = $conn -> query($query);
                             $rowcount=mysqli_num_rows($runquery);
                             if($rowcount == 0 ){
                             
                           
                           ?>
                
                <div class="row form-inline " >

                    <div class="col-lg-4">
                        <div class="form-group mx-sm-3 mb-2">
                            <input type="text" class="form-control mb-2" id="" value="" style="width:200px;" name="ref_full_name[]">
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-group mx-sm-3 mb-2">
                            <input type="text" class="form-control mb-2" id="" value="" style="width:200px;" name="ref_add[]">
                        </div>
                    </div>

                    <div class="col-lg-4 ">
                        <div class="form-group mx-sm-3 mb-2">
                            <input type="text" class="form-control mb-2" id="" value="" style="width:200px;" name="ref_tel[]">
                        </div>
                    </div>

                </div>

                <?php }else 

$query = "SELECT * FROM emp_references WHERE emp_id = '$emp_id'";

$runquery = $conn -> query($query);
if($runquery == true){
 
   
while($data = $runquery -> fetch_assoc()){

    $ref_full_name = $data["ref_full_name"];
    $ref_add = $data["ref_add"];
    $ref_tel = $data["ref_tel"];

    $ref_full_name_arr= explode(",",$ref_full_name);
    $ref_add_arr= explode(",",$ref_add);
    $ref_tel_arr= explode(",",$ref_tel);

    

    for($i = 0 ; $i < sizeof($ref_full_name_arr) ; $i++){ ?>

<div class="row form-inline" >

<div class="col-lg-4">
    <div class="form-group mx-sm-3 mb-2">
        <input type="text" class="form-control "   style="width:200px;" name="ref_full_name[]" value="<?php echo $ref_full_name_arr[$i] ?>">
    </div>
</div>

<div class="col-lg-4">
    <div class="form-group mx-sm-3 mb-2">
        <input type="text" class="form-control "   style="width:200px;" name="ref_add[]" value="<?php echo $ref_add_arr[$i] ?>">
    </div>
</div>

<div class="col-lg-4 ">
    <div class="form-group mx-sm-3 mb-2">
        <input type="text" class="form-control "  style="width:200px;" name="ref_tel[]" value="<?php echo $ref_tel_arr[$i] ?>">
    </div>
</div>

</div>


<?php  }


}}

                         ?>

                <a href="javascript:void(0);" class="add_ref_button" title="Add field"><i class="fa fa-plus"></i></a>

                </div>

              
                

          

                <div class="container form-inline">
                    
                    <div class="row m-2 p-2" >

                        <div class="col-lg-6">
                            <label for="">GOVERNMENT ISSUED ID <span>(i.e.Passport,GSIS,SSS,PRC,Driver's Licence ,etc)</span></label>
                                <input type="text" class="form-control mb-2 mt-2" style="width:200px;" name= "emp_gov_id" value="<?php echo $emp_gov_id?>" >

                                <input type="text" class="form-control mb-2"   style="width:200px;" name="emp_passport_no" value="<?php echo $emp_passport_no?>" >

                                <input type="date" class="form-control mb-2"   style="width:200px;" name="emp_place_of_insurance" value="<?php echo $emp_place_of_insurance?>" >
                        </div>

                        

                    </div>
                </div>

              <div class="container">
              <div class="text-right">
                        <button class="btn m-2" style="background: #345587;color:#fff;" type="button" onclick="openpanel('content-9','oth')" >PREV</button>
                        <button  type ="submit" name="submit" class="btn m-2" style="background: #345587; color:#fff";>SUBMIT</button>
                    </div>
              </div>

            </form>
        
    </div>

    </div>          
  

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script type="text/javascript">
$(document).ready(function(){
    var maxField = 10; //Input fields increment limitation
    var addButton = $('.add_ref_button'); //Add button selector
    var wrapper = $('.reference_wrapper'); //Input field wrapper
    var fieldHTML = 
    '<div> <div class="row form-inline"> <div class="col-lg-4"> <div class="form-group mx-sm-3 mb-2"> <input type="text" class="form-control mb-2" id="" value="" style="width:200px;" name="ref_full_name[]"></div></div>   <div class="col-lg-4"> <div class="form-group mx-sm-3 mb-2"><input type="text" class="form-control mb-2" id="" value="" name="ref_add[]" style="width:200px;"> </div> </div>  <div class="col-lg-4 "><div class="form-group mx-sm-3 mb-2"> <input type="text" class="form-control mb-2" id="" value="" name="ref_tel[]" style="width:200px;"></div></div> </div><a href="javascript:void(0);" class="remove_ref_button"><i class="fa fa-minus"></i></a></div>'; 
    
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
    $(wrapper).on('click', '.remove_ref_button', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
});
</script>
                
