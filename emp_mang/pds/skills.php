    <!--body section of SKILLS/RECOGNITION/AFFLIATION-->
    <div class="container">
    <div class=" emp_profile_section2 pt-4 mb-5 pb-3"    id="content-8">  


            <div class="container skills_wrapper" style="background:#E6F7FF">

            
            <div class="row form-inline" style="width:100%">

                    <div class="col-lg-4 mb-2 pt-2 ">
                        
                    <div class="form-group mx-sm-3 mb-2">
                        <label for="" >SPECIAL SKILLS AND HOBBIES</label>
                        </div>
                        
                    </div>

                    <div class="col-lg-4 mb-2 pt-2">
                    
                    <div class="form-group mx-sm-3 mb-2">
                            <label for="">NON-ACADEMIC DISTINCTION/RECOGNITION</label>
                            </div>
                    </div>

                    <div class="col-lg-4 mb-2 pt-2">
                    <div class="form-group mx-sm-3 mb-2">
                            <label for="">MEMBERSHIP IN ASSOCIATION/ORGANIZATION</label>
                            </div>
                    </div>

                    </div>


                    <?php 
                             
                             $query = "SELECT * FROM skills WHERE emp_id = '$emp_id'";
                           
                             $runquery = $conn -> query($query);
                             $rowcount=mysqli_num_rows($runquery);
                             if($rowcount == 0 ){
                             
                           
                           ?>

          

            <div class="row form-inline" >

            

                <div class="col-lg-4 ">
               

                    <div class="form-group mx-sm-3 mb-2">
                            <input type="text" class="form-control mb-2 mt-2"  value="" style="width:200px;" name="emp_special_skills[]">
                    </div>

                
                </div>

                <div class="col-lg-4 ">
                
                
                    <div class="form-group mx-sm-3 mb-2">
                        
                            <input type="text" class="form-control mb-2 mt-2"  value="" style="width:200px;" name="non_academic[]">
                        </div>
                   
                
                </div>

                <div class="col-lg-4">
               
                    <div class="form-group mx-sm-3 mb-2">
                            <input type="text" class="form-control mb-2 mt-2"  value="" style="width:200px;" name="membership[]">
                        
                    </div>
              
                </div>


                </div>
                <?php }else {

$query = "SELECT * FROM skills WHERE emp_id = '$emp_id'";

$runquery = $conn -> query($query);
if($runquery == true){
 
   
while($data = $runquery -> fetch_assoc()){

    $emp_special_skills = $data["emp_special_skills"];
    $non_academic = $data["non_academic"];
    $membership = $data["membership"];

    $emp_special_skills_arr= explode(",",$emp_special_skills);
    $non_academic_arr= explode(",",$non_academic);
    $membership_arr= explode(",",$membership);

    

    for($i = 0 ; $i < sizeof($emp_special_skills_arr) ; $i++){ ?>


<div class="row form-inline" >

            

                <div class="col-lg-4 ">
               

                    <div class="form-group mx-sm-3 mb-2">
                            <input type="text" class="form-control mb-2 mt-2"  value="<?php echo $emp_special_skills_arr[$i]?>" style="width:200px;" name="emp_special_skills[]">
                    </div>

                
                </div>

                <div class="col-lg-4 ">
                
                
                    <div class="form-group mx-sm-3 mb-2">
                        
                            <input type="text" class="form-control mb-2 mt-2"  value="<?php echo $non_academic_arr[$i]?>" style="width:200px;" name="non_academic[]">
                        </div>
                   
                
                </div>

                <div class="col-lg-4">
               
                    <div class="form-group mx-sm-3 mb-2">
                            <input type="text" class="form-control mb-2 mt-2"  value="<?php echo $membership_arr[$i]?>" style="width:200px;" name="membership[]">
                        
                    </div>
              
                </div>


                </div>

              <?php  } }}}?>


                <a href="javascript:void(0);" class="add_skills_button" title="Add field"><i class="fa fa-plus"></i></a>

            </div>

            <div class="container">
              <div class="text-right">
                        <button class="btn m-2" type="button" style="background: #345587;color:#fff;" onclick="openpanel('content-7','ler')" >PREV</button>
                        <button  type ="button"  class="btn m-2" style="background: #345587; color:#fff" onclick="openpanel('content-9','oth')" >NEXT</button>
                    </div>
              </div>

             
        </div>

       
        </div>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){
var maxField = 10; //Input fields increment limitation
var addButton = $('.add_skills_button'); //Add button selector
var wrapper = $('.skills_wrapper'); //Input field wrapper
var fieldHTML = 
'<div> <div class="row form-inline" > <div class="col-lg-4 "> <div class="form-group mx-sm-3 mb-2"> <input type="text" class="form-control mb-2 mt-2"  value="" style="width:200px;" name="emp_special_skills[]"> </div> </div> <div class="col-lg-4 "> <div class="form-group mx-sm-3 mb-2"> <input type="text" class="form-control mb-2 mt-2"  value="" style="width:200px;" name="non_academic[]"> </div> </div> <div class="col-lg-4"> <div class="form-group mx-sm-3 mb-2"> <input type="text" class="form-control mb-2 mt-2"  value="" style="width:200px;" name="membership[]"> </div> </div> </div><a href="javascript:void(0);" class="remove_skills_button"><i class="fa fa-minus"></i></a></div>'; 

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
$(wrapper).on('click', '.remove_skills_button', function(e){
    e.preventDefault();
    $(this).parent('div').remove(); //Remove field html
    x--; //Decrement field counter
});
});
</script>