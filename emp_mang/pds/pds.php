
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
                        <img src="<?php echo $emp_image?>" alt="" style="width:100%;height:100%">
                    </div>
                </div>

            </div>
        </div>

                 

        <!--body section of personal information -->

       <form action="includes/pds_config.php" method="post" class="form-inline">
        
        <div class="container ">
        
            <div class="emp_profile_section2 pt-4 pb-4 mb-4" id="content-1" style="display:block;">   
           
          

                <div class="container ">
                        <div class="row ">
                            <div class="col-lg-9  form-inline">

                           

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
                            <input type="text" class="form-control" style="width:50px;"  value="<?php echo $mydata["emp_ext"];?>" name="emp_ext">
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

                
                    
               <div class="row">

                    <div class="col-lg-1 form-inline" >
                    
                                <div class="form-group mx-sm-2 mb-2">
                                    <label for="">CONTACTS</label>
                                </div>
                            </div>


                             <div class="col-lg-5 m-2 text-center form-inline " style="background-color:#E6F7FF;">
                             <div class="form-group mx-sm-1 mb-2" >
                                    <div class="d-flex flex-column">
                                        <input type="text" class="form-control" style="width:120px;" value="<?php echo  $emp_tel_no ?>" name="emp_tel_no">
                                        <label for="">Telephone No.</label>
                                    </div>
                                </div>

                                <div class="form-group mx-sm-1 mb-2">
                                    <div class="d-flex flex-column">
                                        <input type="text" class="form-control" style="width:120px;" value="<?php echo  $emp_mb_no ?>" name="emp_mb_no">
                                        <label for="">Mobile No.</label>
                                    </div>
                                </div>

                                <div class="form-group mx-sm-1 mb-2">
                                    <div class="d-flex flex-column">
                                        <input type="text" class="form-control" style="width:120px;" value="<?php echo  $emp_email ?>" name="emp_email">
                                        <label for="">Email Address</label>
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
                        <button type="button" class="btn m-2" style="background: #345587; color:#fff;" onclick="openpanel('content-10','ref')" >PREV</button>

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

     