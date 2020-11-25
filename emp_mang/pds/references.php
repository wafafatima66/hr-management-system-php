
   <!--body section of Reference-->


   <div class=" emp_profile_section2 pt-4 mb-5 pb-2 " id="content-10">  
       

            <form class="form-inline" method="post" action="includes/ref-config.php">

            <div class="container " style="background:#E6F7FF;">

                <div class="row" style="width:100%">

                    <div class="col-lg-4 mb-2 pt-2">
                        
                            <label for="">FULL NAME</label>
                        
                    </div>

                    <div class="col-lg-4 mb-2 pt-2">
                      
                            <label for="">ADDRESS</label>
                        
                    </div>

                    <div class="col-lg-4 mb-2 pt-2">
                     
                            <label for="">TELEPHONE NO./MOBILE PHONE NO.</label>
                      
                    </div>

                </div>

                </div>

                <div class="container field_wrapper" style="background:#E6F7FF;">
                
                <div class="row " >

                    <div class="col-lg-4">
                        <div class="form-group mx-sm-3 mb-2">
                            <input type="text" class="form-control mb-2" id="" placeholder="" style="width:200px;" name="ref_full_name[]">
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-group mx-sm-3 mb-2">
                            <input type="text" class="form-control mb-2" id="" placeholder="" style="width:200px;" name="ref_add[]">
                        </div>
                    </div>

                    <div class="col-lg-4 ">
                        <div class="form-group mx-sm-3 mb-2">
                            <input type="text" class="form-control mb-2" id="" placeholder="" style="width:200px;" name="ref_tel[]">
                        </div>
                    </div>

                </div>

                <a href="javascript:void(0);" class="add_button" title="Add field"><i class="fa fa-plus"></i></a>

                </div>

              
                

          

                <div class="container">
                    
                    <div class="row m-2 p-2" >

                        <div class="col-lg-6">
                            <label for="">GOVERNMENT ISSUED ID <span>/"(i.e.Passport,GSIS,SSS,PRC,Driver's Licence ,etc)</span></label>
                                <input type="text" class="form-control mb-2 mt-2" id="" placeholder="Government Issued ID" style="width:200px;" name= "emp_gov_id" >

                                <input type="text" class="form-control mb-2" id="" placeholder="id/License/Passport No." style="width:200px;" name="emp_passport_no" >

                                <input type="text" class="form-control mb-2" id="" placeholder="Date/Place of Issurance" style="width:200px;" name="emp_place_of_insurance"  >
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
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var fieldHTML = 
    ' <div class="row"> <div class="col-lg-4"> <div class="form-group mx-sm-3 mb-2"> <input type="text" class="form-control mb-2" id="" placeholder="" style="width:200px;" name="ref_full_name[]"></div></div>   <div class="col-lg-4"> <div class="form-group mx-sm-3 mb-2"><input type="text" class="form-control mb-2" id="" placeholder="" name="ref_add[]" style="width:200px;"> </div> </div>  <div class="col-lg-4 "><div class="form-group mx-sm-3 mb-2"> <input type="text" class="form-control mb-2" id="" placeholder="" name="ref_tel[]" style="width:200px;"></div></div> <a href="javascript:void(0);" class="remove_button"><i class="fa fa-minus"></i></a></div>'; 
    
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
    $(wrapper).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
});
</script>
                
