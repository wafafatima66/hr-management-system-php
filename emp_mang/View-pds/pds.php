
<!--PDS--->

<div class=" emp_profile_section2_tab " id="tab-1" style="display:block;">
<div class="container">
        <!--menu section-->
        
            <div class="row">
                <div class="col-lg-9">
                <div class="emp_profile_section1 ">
                        <form class="form-inline " > 
                            <button  onclick="openpanel('content-1')" type="button" class="btn emp_profile_section1_btn active" >PERSONAL INFORMATION</button>
                            <button onclick="openpanel('content-2')"  type="button" class="btn emp_profile_section1_btn">FAMILY BACKGROUND</button>
                            <button   onclick="openpanel('content-3')"type="button" class="btn emp_profile_section1_btn">EDUCATIONAL BACKGROUND</button> 
                            <button  onclick="openpanel('content-4') "type="button" class="btn emp_profile_section1_btn" >CIVIL SERVICE ELIGIBILITY</button> 
                            <button   onclick="openpanel('content-5')"type="button"class="btn emp_profile_section1_btn" >WORK EXPERIENCE</button> 
                            <button   onclick="openpanel('content-6')"type="button" class="btn emp_profile_section1_btn" >VOLUNTARY WORKS</button> 
                            <button   onclick="openpanel('content-7')"type="button" class="btn emp_profile_section1_btn" >LEARNING AND DEVELOPMENT</button> 
                            <button   onclick="openpanel('content-8')"type="button" class="btn emp_profile_section1_btn" >SPECIAL SKILLS</button> 
                            <button  onclick="openpanel('content-9') "type="button" class="btn emp_profile_section1_btn" >OTHER INFORMATION</button> 
                            <button  onclick="openpanel('content-10') "type="button" class="btn emp_profile_section1_btn" >REFERENCE</button> 
                        </form>
                    </div>
                </div>
            </div>
        </div>

                 

        <!--body section of personal information -->

       
        

        
            <div class="emp_profile_section2 pt-4 pb-4 mb-4" id="content-1" style="display:block;">   
           

                <form class="form-inline" >   

                      
                <div class="container ">
                        <div class="row ">
                            <div class="col-lg-9 form-inline">

                           

                            <div class="form-group mx-sm-2 mb-2">
                                <label for="">NAME</label>
                                <input type="text" class="form-control" style="width:100px;"id="" placeholder="<?php echo $emp_first_name?>" name="emp_first_name" >
                            </div>

                            <div class="form-group mx-sm-2 mb-2">
                                <input type="text" class="form-control" style="width:100px;"id="" placeholder="<?php echo  $emp_last_name ?>" name="emp_last_name">
                            </div>

                            <div class="form-group mx-sm-2 mb-2">
                            <input type="text" class="form-control" style="width:100px;"id="" placeholder="<?php echo  $emp_middle_name ?>" name="emp_middle_name">
                            </div>

                            <div class="form-group mx-sm-2 mb-2">
                            <input type="text" class="form-control" style="width:50px;" id="" placeholder="<?php echo $mydata["emp_ext"];?>" name="emp_ext">
                            </div>


    

                         <!--   <div class="form-group mx-sm-2 mb-2">
                            <label for="">SEX</label>
                            <select class="form-control" style="width:50px;" name="emp_sex">
                                <option></option>
                                <option>...</option>
                            </select>
                            </div>  -->

                            <div class="form-group mx-sm-1 mb-2">
                            <label for="">GENDER</label>
                            <select class="form-control" style="width:100px;" name="emp_gender" placeholder="<?php echo  $emp_gender ?>">
                                <option value = "0 ">SELECT</option>
                                <option value = "male">MALE</option>
                                <option value = "female">FEMALE</option>
                            </select>
                            </div>
                  

                       
                            <div class="form-group mx-sm-1 mb-2">
                            <label for="">CIVIL STATUS</label>
                            <input type="text"  class="form-control" style="width:90px;" name="emp_civil_status" placeholder="<?php echo  $emp_civil_status ?>" name="<?php echo  $emp_civil_status ?>">
                            </div>
                            
                            <div class="form-group mx-sm-2 mb-2">
                                <label for="">DATE OF BIRTH</label>
                                <input type="date"  class="form-control" style="width:120px;"  name="emp_dob">
                            </div>

                            <div class="form-group mx-sm-1 mb-2">
                            <label for="">HEIGHT</label>
                                <input type="text" class="form-control" style="width:40px;" id="" placeholder="<?php echo  $emp_height ?>" name="emp_height">
                            </div>

                            <div class="form-group mx-sm-1 mb-2">
                            <label for="">WEIGHT</label>
                            <input type="text" class="form-control" style="width:30px;" id="" placeholder="<?php echo  $emp_weight ?>" name="emp_weight">
                            </div>

                            <div class="form-group mx-sm-1 mb-2">
                            <label for="">BLOOD TYPE</label>
                                <input type="text" class="form-control" style="width:40px;" id="" placeholder="<?php echo  $emp_blood ?>" name="emp_blood">
                            </div>
                      
                    </div>

                    <div class="col-lg-3 p-0 m-0 form-inline" style="background-color:#F4FBFF">
                   
                        <div class="form-group mx-sm-1 mb-2">
                            <label for="">CITIZENSHIP</label>
                                <input type="text" class="form-control" style="width:100px;" id="" placeholder="<?php echo  $emp_citizen ?>" name="emp_citizen">
                        </div>

                        <div class="form-check mx-sm-1 mb-2">
                            <input class="form-check-input" type="checkbox" value="by_birth" name="emp_citizen_chk[]" placeholder="<?php echo  $emp_citizen_chk ?>">
                            <label class="form-check-label" > By Birth</label>
                        </div>

                        <div class="form-check mx-sm-1 mb-2">
                            <input class="form-check-input" type="checkbox" value="by_nature" name="emp_citizen_chk[]" placeholder="<?php echo  $emp_citizen_chk ?>">
                            <label class="form-check-label" >By Naturalization</label>
                        </div>

                        <div class="form-group mx-sm-1 mb-2">
                            <input type="text" class="form-control" style="width:200px;" id="" placeholder="Indicate Country If dual Citizenship" name="emp_dual_citizen" placeholder="<?php echo  $emp_dual_citizen ?>">
                        </div>

                    
                </div>

                </div>

            
                                                

                
                    <div class="row">
                       
                            <div class="form-group mx-sm-3 mb-2">
                                <label for="">RESIDENTIAL ADDRESS</label>
                                <input type="text" class="form-control" style="width:100px;"id="" placeholder="<?php echo  $emp_resi_add_title ?>" name="emp_resi_add_title">
                            </div>

                            <div class="form-group mx-sm-1 mb-2">
                                <input type="text" class="form-control" style="width:100px;"id="" placeholder="<?php echo  $emp_resi_add_street ?>" name="emp_resi_add_street">
                            </div>

                            <div class="form-group mx-sm-1 mb-2">
                                <input type="text" class="form-control" style="width:120px;"id="" placeholder="<?php echo  $emp_resi_add_subdivision ?>" name="emp_resi_add_subdivision">
                            </div>

                            <div class="form-group mx-sm-1 mb-2">
                            <input type="text" class="form-control" style="width:100px;"id="" placeholder="<?php echo  $emp_resi_add_barangay ?>" name="emp_resi_add_barangay">
                            </div>

                            <div class="form-group mx-sm-1 mb-2">
                            <input type="text" class="form-control" style="width:100px;"id="" placeholder="<?php echo  $emp_resi_add_municipal ?>" name="emp_resi_add_municipal">
                            </div>

                            <div class="form-group mx-sm-1 mb-2">
                            <input type="text" class="form-control" style="width:100px;"id="" placeholder="<?php echo  $emp_resi_add_province ?>" name="emp_resi_add_province">
                            </div>

                            <div class="form-group mx-sm-1 mb-2">
                                <input type="text" class="form-control" style="width:90px;"id="" placeholder="<?php echo  $emp_resi_add_zipcode ?>" name="emp_resi_add_zipcode">
                            </div>
                           
                    </div>


                    <div class="row">
                 
                        <div class="form-group mx-sm-3 mb-2">
                            <label for="">PERMANENT ADDRESS</label>
                            <input type="text" class="form-control" style="width:100px;"id="" placeholder="<?php echo  $emp_per_add_title ?>" name="emp_per_add_title">
                        </div>

                        <div class="form-group mx-sm-1 mb-2">
                            <input type="text" class="form-control" style="width:100px;"id="" placeholder="<?php echo  $emp_per_add_street ?>"  name="emp_per_add_street">
                        </div>

                        <div class="form-group mx-sm-1 mb-2">
                            <input type="text" class="form-control" style="width:120px;"id="" placeholder="<?php echo  $emp_per_add_subdivision ?>" name="emp_per_add_subdivision">
                        </div>
                        
                        <div class="form-group mx-sm-1 mb-2">
                        <input type="text" class="form-control" style="width:100px;" id="" placeholder="<?php echo  $emp_per_add_barangay ?>" name="emp_per_add_barangay">
                        </div>

                        <div class="form-group mx-sm-1 mb-2">
                        <input type="text" class="form-control" style="width:100px;"id="" placeholder="<?php echo  $emp_per_add_municipal ?>" name="emp_per_add_municipal">
                        </div>

                        <div class="form-group mx-sm-1 mb-2">
                        <input type="text" class="form-control" style="width:100px;"id="" placeholder="<?php echo  $emp_per_add_province ?>" name="emp_per_add_province">
                        </div> 

                        <div class="form-group mx-sm-1 mb-2">
                            <input type="text" class="form-control" style="width:90px;"id="" placeholder="<?php echo  $emp_per_add_zipcode ?>" name="emp_per_add_zipcode">
                        </div>

                    
                </div>

                
                    
               <div class="row">

                    <div class="col-lg-1 form-inline" >
                    
                                <div class="form-group mx-sm-3 mb-2">
                                    <label for="">CONTACTS</label>
                                </div>
                            </div>


                             <div class="col-lg-5 m-2 text-center form-inline " style="background-color:#E6F7FF;">
                             <div class="form-group mx-sm-2 mb-2" >
                                    <div class="d-flex flex-column">
                                        <input type="text" class="form-control" style="width:100px;"id="" placeholder="<?php echo  $emp_tel_no ?>" name="emp_tel_no">
                                        <label for="">Telephone No.</label>
                                    </div>
                                </div>

                                <div class="form-group mx-sm-1 mb-2">
                                    <div class="d-flex flex-column">
                                        <input type="text" class="form-control" style="width:100px;"id="" placeholder="<?php echo  $emp_mb_no ?>" name="emp_mb_no">
                                        <label for="">Mobile No.</label>
                                    </div>
                                </div>

                                <div class="form-group mx-sm-1 mb-2">
                                    <div class="d-flex flex-column">
                                        <input type="text" class="form-control" style="width:90px;"id="" placeholder="<?php echo  $emp_email ?>" name="emp_email">
                                        <label for="">Email Address</label>
                                    </div>
                                </div>
                             </div>
                   

                    <div class="col-lg-5 form-inline " style="background-color:#E6F7FF; ">

                                 <div class="form-group mx-sm-1 mb-1" >
                                <input type="text" class="form-control" style="width:100px;"id="" placeholder="<?php echo  $emp_contact_gs ?>" name="emp_contact_gs">
                                </div>

                                <div class="form-group mx-sm-1 mb-1">
                                <input type="text" class="form-control" style="width:100px;"id="" placeholder="<?php echo  $emp_contact_pag ?>" name="emp_contact_pag">
                                </div>

                                <div class="form-group mx-sm-1 mb-1">
                                <input type="text" class="form-control" style="width:100px;"id="" placeholder="<?php echo  $emp_contact_ph ?>" name="emp_contact_ph">
                                </div>
                            
                                <div class="form-group mx-sm-1 mb-1" >
                                <input type="text" class="form-control" style="width:100px;"id="" placeholder="<?php echo  $emp_contact_ss ?>" name="emp_contact_ss">
                                </div>

                                <div class="form-group mx-sm-1 mb-1">
                                <input type="text" class="form-control" style="width:100px;"id="" placeholder="<?php echo  $emp_contact_tin ?>" name="emp_contact_tin">
                                </div>

                                <div class="form-group mx-sm-1 mb-1">
                                <input type="text" class="form-control" style="width:100px;"id="" placeholder="<?php echo  $emp_contact_tin ?>" name="emp_contact_agency">
                                </div>
                            
                        
                    </div>
               </div>

              
         
            </div>
            </form>   
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