<style>

.emp_profile_image { position: relative; }
.emp_profile_image img { display: block; }
.emp_profile_image .fa-camera { position: absolute; top:0; right:0; font-size:25px;padding:10px; color: #345587 }

</style>
<!--PDS--->



<div class=" emp_profile_section2_tab " id="tab-1" style="display:block;">
<div class="container">
        <!--menu section-->
        
            <div class="row">
                <div class="col-lg-9 d-flex align-items-end pr-0">
                <div class="emp_profile_section1 ">
                        <form class="form-inline " > 
                            <button  onclick="openpanel('content-1','pds')" type="button" class="btn emp_profile_section1_btn active" id="pds" >PERSONAL INFORMATION</button>
                            <button onclick="openpanel('content-2','fam')"  type="button" class="btn emp_profile_section1_btn " id="fam">FAMILY BACKGROUND</button>
                            <button   onclick="openpanel('content-3','edu')"type="button" class="btn emp_profile_section1_btn" id="edu">EDUCATIONAL BACKGROUND</button> 
                            <button  onclick="openpanel('content-4','ser') "type="button" class="btn emp_profile_section1_btn" id="ser" >CIVIL SERVICE ELIGIBILITY</button> 
                            <button   onclick="openpanel('content-5','wor')"type="button"class="btn emp_profile_section1_btn" id="wor">WORK EXPERIENCE</button> 
                            <button   onclick="openpanel('content-6','vol')"type="button" class="btn emp_profile_section1_btn" id="vol" >VOLUNTARY WORKS</button> 
                            <button   onclick="openpanel('content-7','ler')"type="button" class="btn emp_profile_section1_btn" id="ler">LEARNING AND DEVELOPMENT</button> 
                            <button   onclick="openpanel('content-8','spe')"type="button" class="btn emp_profile_section1_btn" id="spe" >SPECIAL SKILLS</button> 
                            <button  onclick="openpanel('content-9','oth') "type="button" class="btn emp_profile_section1_btn" id="oth" >OTHER INFORMATION</button> 
                            <button  onclick="openpanel('content-10','ref') "type="button" class="btn emp_profile_section1_btn" id="ref" >REFERENCE</button> 
                        </form>
                    </div>
                </div>
              
               
           

           

                <div class="col-lg-3 pl-0">
                    <div class="emp_profile_image" style="height:250px"> 
                        <a class="emp_image" data-toggle="modal" data-target="#emp_image" data-todo="<?php echo  $emp_id?>" ><i class="fas fa-camera"></i></a>
                        <img src="<?php echo $emp_image?>" alt="" style="width:100%;height:100%">
                    </div>
                </div>

                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 

                <script>
                        $('.emp_image').click(function(){
                          $.ajax({
                              url:'../emp_mang/emp_image-config.php',
                              type : 'post',
                              data: {
                                emp_id : $(this).data("todo") 
                              },
                               //dataType: 'json',
                              success : function(result){
                                $('#emp_id').val(result);
                            }
                          });
                          
                        });

                                
                </script>
                
                
                <?php require "../emp_mang/emp_image.php"?>
                
            </div>
        </div>

                 

        <!--body section of personal information -->

       <form action="includes/pds_config.php" method="post" class="form-inline">
        
        <div class="container ">
        
            <div class="emp_profile_section2 pt-4 pb-4 mb-4" id="content-1" style="display:block;">   
           
          

                <div class="container ">
                        <div class="row ">
                            <div class="col-lg-9  form-inline">

                           <input type="hidden" name="emp_id" value="<?php echo $emp_id?>">
                           <input type="hidden" name="office_assign" value="<?php echo $office_assign?>">
                           <input type="hidden" name="emp_status" value="<?php echo $emp_status?>">

                            <div class="form-group mx-sm-2 mb-2">
                                <label for="">NAME</label>
                                <input type="text" class="form-control" style="width:100px;" value="<?php echo $emp_first_name?>" name="emp_first_name" >
                            </div>

                            <div class="form-group mx-sm-1 mb-2">
                                <input type="text" class="form-control" style="width:100px;" value="<?php echo  $emp_last_name ?>" name="emp_last_name">
                            </div>

                            <div class="form-group mx-sm-1 mb-2">
                            <input type="text" class="form-control" style="width:100px;" value="<?php echo  $emp_middle_name ?>" name="emp_middle_name">
                            </div>

                            <div class="form-group mx-sm-1 mb-2">
                            <input type="text" class="form-control" style="width:50px;"  value="<?php echo $emp_ext ?>" name="emp_ext">
                            </div>


    

                         <!--   <div class="form-group mx-sm-2 mb-2">
                            <label for="">SEX</label>
                            <select class="form-control" style="width:50px;" name="emp_sex">
                                <option></option>
                                <option>...</option>
                            </select>
                            </div>  -->


                            <div class="form-group mx-sm-1 mb-2">
                            <label for="">SEX</label>
                            <select class="form-control" style="width:70px;" name="emp_sex" value="">
                            <option value = "<?php echo  $emp_sex ?>"><?php echo  $emp_sex ?></option>
                                <option value = "M">M</option>
                                <option value = "F">F</option>
                            </select>
                            </div>


                            <div class="form-group mx-sm-1 mb-2">
                            <label for="">GENDER</label>
                            <select class="form-control" style="width:80px;" name="emp_gender" value="">
                                <option value = "<?php echo  $emp_gender ?> "><?php echo  $emp_gender ?></option>
                                <option value = "male">MALE</option>
                                <option value = "female">FEMALE</option>
                                <option value = "lgbqt">LGBQT</option>
                            </select>
                            </div>
                  

                       
                            <div class="form-group mx-sm-1 mb-2">
                            <label for="">CIVIL STATUS</label>
                            
                            <select class="form-control" style="width:120px;" name="emp_civil_status" >
                                <option value = "<?php echo  $emp_civil_status ?> "><?php echo  $emp_civil_status ?></option>
                                <option value = "single">SINGLE</option>
                                <option value = "married">MARRIED</option>
                                <option value = "widow">WIDOW</option>
                                <option value = "seperated">SEPERATED</option>
                            </select>
                            </div>
                            
                            <div class="form-group mx-sm-1 mb-2">
                                <label for="">DATE OF BIRTH</label>
                                <input type="date"  class="form-control" style="width:140px;"  name="emp_dob" value="<?php echo  $emp_dob ?>">
                            </div>

                            <div class="form-group mx-sm-1 mb-2">
                            <label for="">HEIGHT</label>
                                <input type="text" class="form-control" style="width:50px;"  value="<?php echo  $emp_height ?>" name="emp_height">
                            </div>

                            <div class="form-group mx-sm-1 mb-2">
                            <label for="">WEIGHT</label>
                            <input type="text" class="form-control" style="width:50px;" value="<?php echo  $emp_weight ?>" name="emp_weight">
                            </div>

                            <div class="form-group mx-sm-1 mb-2">
                            <label for="">BLOOD TYPE</label>
                                <input type="text" class="form-control" style="width:40px;"  value="<?php echo  $emp_blood ?>" name="emp_blood">
                            </div>
                      
                    </div>

                    <div class="col-lg-3 p-0 m-0 form-inline" style="background-color:#F4FBFF">
                   
                        <div class="form-group mx-sm-1 mb-2">
                            <label for="">CITIZENSHIP</label>
                                <input type="text" class="form-control" style="width:140px;"  value="<?php echo  $emp_citizen ?>" name="emp_citizen">
                        </div>

                        <div class="form-check mx-sm-1 mb-2">
                            <input class="form-check-input" type="checkbox" value="by_birth" name="emp_citizen_chk[]"  <?php echo $by_birth ;?>>
                            <label class="form-check-label" > By Birth</label>
                        </div>

                        <div class="form-check mx-sm-1 mb-2">
                            <input class="form-check-input" type="checkbox" value="by_nature" name="emp_citizen_chk[]" <?php echo $by_nature ;?>>
                            <label class="form-check-label" >By Naturalization</label>
                        </div>

                        <div class="form-group mx-sm-1 mb-2">
                            <input type="text" class="form-control" style="width:200px;" name="emp_dual_citizen" value="<?php echo  $emp_dual_citizen ?>">
                        </div>

                    
                </div>

                </div>

            
                                                

                
                    <div class="row form-inline">
                       
                            <div class="form-group mx-sm-2 mb-2">
                                <label for="">RESIDENTIAL ADDRESS</label>
                                <input type="text" class="form-control" style="width:100px;" value="<?php echo  $emp_resi_add ?>" name="emp_resi_add">
                            </div>

                            <div class="form-group mx-sm-1 mb-2">
                                <input type="text" class="form-control" style="width:100px;" value="<?php echo  $emp_resi_add_street ?>" name="emp_resi_add_street">
                            </div>

                            <div class="form-group mx-sm-1 mb-2">
                                <input type="text" class="form-control" style="width:120px;" value="<?php echo  $emp_resi_add_subdivision ?>" name="emp_resi_add_subdivision">
                            </div>

                            <div class="form-group mx-sm-1 mb-2">
                            <input type="text" class="form-control" style="width:100px;"  value="<?php echo  $emp_resi_add_barangay ?>" name="emp_resi_add_barangay">
                            </div>

                            <div class="form-group mx-sm-1 mb-2">
                            <input type="text" class="form-control" style="width:100px;" value="<?php echo  $emp_resi_add_municipal ?>" name="emp_resi_add_municipal">
                            </div>

                            <div class="form-group mx-sm-1 mb-2">
                            <input type="text" class="form-control" style="width:100px;"  value="<?php echo  $emp_resi_add_province ?>" name="emp_resi_add_province">
                            </div>

                            <div class="form-group mx-sm-1 mb-2">
                                <input type="text" class="form-control" style="width:90px;"  value="<?php echo  $emp_resi_add_zipcode ?>" name="emp_resi_add_zipcode">
                            </div>
                           
                    </div>


                    <div class="row form-inline">
                 
                        <div class="form-group mx-sm-2 mb-2">
                            <label for="">PERMANENT ADDRESS</label>
                            <input type="text" class="form-control" style="width:100px;" value="<?php echo  $emp_per_add ?>" name="emp_per_add">
                        </div>

                        <div class="form-group mx-sm-1 mb-2">
                            <input type="text" class="form-control" style="width:100px;"  value="<?php echo  $emp_per_add_street ?>"  name="emp_per_add_street">
                        </div>

                        <div class="form-group mx-sm-1 mb-2">
                            <input type="text" class="form-control" style="width:120px;"  value="<?php echo  $emp_per_add_subdivision ?>" name="emp_per_add_subdivision">
                        </div>
                        
                        <div class="form-group mx-sm-1 mb-2">
                        <input type="text" class="form-control" style="width:100px;" value="<?php echo  $emp_per_add_barangay ?>" name="emp_per_add_barangay">
                        </div>

                        <div class="form-group mx-sm-1 mb-2">
                        <input type="text" class="form-control" style="width:100px;" value="<?php echo  $emp_per_add_municipal ?>" name="emp_per_add_municipal">
                        </div>

                        <div class="form-group mx-sm-1 mb-2">
                        <input type="text" class="form-control" style="width:100px;" value="<?php echo  $emp_per_add_province ?>" name="emp_per_add_province">
                        </div> 

                        <div class="form-group mx-sm-1 mb-2">
                            <input type="text" class="form-control" style="width:90px;" value="<?php echo  $emp_per_add_zipcode ?>" name="emp_per_add_zipcode">
                        </div>

                    
                </div>

               
    

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  

<script>


$(document).ready(function(){
    $("#emp_tel_no").on('keyup', function (){
    
    var tel = $("#emp_tel_no").val();
    var tel_check = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}-$/im;//^[0-9 -()+]+$/
    
    if((tel.length <= 9) && (!tel_check.test(tel))){
            $("#tel-phone").html("Invalid telephone number!");
            } else 
            $("#tel-phone").html("");
            
        }); 
    
});

</script> 

<script>
$(document).ready(function(){
    $("#emp_mb_no").on('keyup', function (){
    
    var phone = $("#emp_mb_no").val();
    var intRegex = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}-$/im;;
    
    if((phone.length <= 10) && (!intRegex.test(phone))){
            $("#mbl-phone").html("Invalid Mobile number!");
            } else 
            $("#mbl-phone").html("");
            
        }); 
    
});
</script> 

<script>
$(document).ready(function(){
    $("#emp_email").on('keyup', function (){
    
    
    var email = $("#emp_email").val();
     var emailReg = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    
    if((!emailReg.test(email))) {
        $("#val-email").html("Invalid mail address");
    }else  $("#val-email").html("");
    
      
     
        }); 
    
    });


</script> 



                    
               <div class="row">

                    <div class="col-lg-1 form-inline" >
                    
                                <div class="form-group mx-sm-2 mb-2">
                                    <label for="">CONTACTS</label>
                                </div>
                            </div>

                             <div class="col-lg-5 m-2 text-center form-inline " style="background-color:#E6F7FF;">
                             <div class="form-group mx-sm-1 mb-2" >
                                    <div class="d-flex flex-column">
                                        <input type="text" class="form-control" style="width:120px;" value="<?php echo  $emp_tel_no ?>" name="emp_tel_no" id="emp_tel_no" >
                                        <label >Telephone No.</label>
                                        <small id="tel-phone" style="color:red;"></small>

                                    </div>
                                </div>

                                <div class="form-group mx-sm-1 mb-2">
                                    <div class="d-flex flex-column">
                                        <input type="text" class="form-control" style="width:120px;" value="<?php echo  $emp_mb_no ?>" name="emp_mb_no" id="emp_mb_no">
                                        <label for="">Mobile No.</label>
                                        <small id="mbl-phone" style="color:red;"></small>
                                    </div>
                                </div>

                                <div class="form-group mx-sm-1 mb-2">
                                    <div class="d-flex flex-column">
                                        <input type="text" class="form-control" style="width:120px;" value="<?php echo  $emp_email ?>" name="emp_email" id="emp_email">
                                        <label for="">Email Address</label>
                                        <small id="val-email" style="color:red;"></small>
                                    </div>
                                </div>
                             </div>
                   

                    <div class="col-lg-5 form-inline " style="background-color:#E6F7FF; ">

                                 <div class="form-group mx-sm-1 mb-1" >
                                <input type="text" class="form-control" style="width:100px;" value="<?php echo  $emp_contact_gs ?>" name="emp_contact_gs">
                                </div>

                                <div class="form-group mx-sm-1 mb-1">
                                <input type="text" class="form-control" style="width:100px;" value="<?php echo  $emp_contact_pag ?>" name="emp_contact_pag">
                                </div>

                                <div class="form-group mx-sm-1 mb-1">
                                <input type="text" class="form-control" style="width:100px;" value="<?php echo  $emp_contact_ph ?>" name="emp_contact_ph">
                                </div>
                            
                                <div class="form-group mx-sm-1 mb-1" >
                                <input type="text" class="form-control" style="width:100px;" value="<?php echo  $emp_contact_ss ?>" name="emp_contact_ss">
                                </div>

                                <div class="form-group mx-sm-1 mb-1">
                                <input type="text" class="form-control" style="width:100px;" value="<?php echo  $emp_contact_tin ?>" name="emp_contact_tin">
                                </div>

                                <div class="form-group mx-sm-1 mb-1">
                                <input type="text" class="form-control" style="width:100px;" value="<?php echo  $emp_contact_tin ?>" name="emp_contact_agency">
                                </div>
                            
                        
                    </div>
               </div>

              
                 
         
            </div>
           
            <div class="container">
               <div class="text-right">
                        <!--<button class="btn m-2" style="background: #345587;color:#fff;" type ="submit">PREV</button>-->
                       

                       <button type="button" class="btn m-2" style="background: #345587; color:#fff;" onclick="openpanel('content-2','fam')">NEXT</button>
                    </div>
                    
               </div> 
            </div>  

             
        </div>         

    

             
  
    

        <?php include 'family_background.php'; ?>
        
        <?php include 'education_background.php'; ?>
        <?php include 'civil_service.php'; ?>
        <?php include 'work_experience.php'; ?>
        <?php include 'voluntary_work.php'; ?>
        <?php include 'learning.php'; ?>
        <?php include 'skills.php'; ?>
        <?php include 'others.php'; ?>
        <?php include 'references.php'; ?>

        </div>