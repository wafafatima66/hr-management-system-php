

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
           

                <form class="form-inline" method ="POST" action="pds/pds-config.php">   

                      
                <div class="container ">
                        <div class="row ">
                            <div class="col-lg-9 form-inline">

                           

                            <div class="form-group mx-sm-2 mb-2">
                                <label for="">NAME</label>
                                <input type="text" class="form-control" style="width:100px;"id="" placeholder="<?php echo $mydata["emp_first_name"];?>" >
                            </div>

                            <div class="form-group mx-sm-2 mb-2">
                                <input type="text" class="form-control" style="width:100px;"id="" placeholder="<?php echo $mydata["emp_last_name"];?>" name="emp_last_name">
                            </div>

                            <div class="form-group mx-sm-2 mb-2">
                            <input type="text" class="form-control" style="width:100px;"id="" placeholder="<?php echo $mydata["emp_middle_name"];?>" name="emp_middle_name">
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
                            <select class="form-control" style="width:100px;" name="emp_gender" placeholder="">
                                <option value = "0 ">SELECT</option>
                                <option value = "male">MALE</option>
                                <option value = "female">FEMALE</option>
                            </select>
                            </div>
                  

                       
                            <div class="form-group mx-sm-1 mb-2">
                            <label for="">CIVIL STATUS</label>
                                <select class="form-control" name="emp_civil_status">
                                <option selected>Status</option>
                                <option>...</option>
                            </select>
                            </div>
                            
                            <div class="form-group mx-sm-2 mb-2">
                                <label for="">DATE OF BIRTH</label>
                                <input type="text" class="form-control" style="width:70px;" id="" placeholder="10/25/20" name="emp_dob">
                            </div>

                            <div class="form-group mx-sm-1 mb-2">
                            <label for="">HEIGHT</label>
                                <input type="text" class="form-control" style="width:50px;" id="" placeholder="" name="emp_height">
                            </div>

                            <div class="form-group mx-sm-1 mb-2">
                            <label for="">WEIGHT</label>
                            <input type="text" class="form-control" style="width:50px;" id="" placeholder="" name="emp_weight">
                            </div>

                            <div class="form-group mx-sm-1 mb-2">
                            <label for="">BLOOD TYPE</label>
                                <input type="text" class="form-control" style="width:40px;" id="" placeholder="" name="emp_blood">
                            </div>
                      
                    </div>

                    <div class="col-lg-3 p-0 m-0 form-inline" style="background-color:#F4FBFF">
                   
                        <div class="form-group mx-sm-1 mb-2">
                            <label for="">CITIZENSHIP</label>
                                <input type="text" class="form-control" style="width:100px;" id="" placeholder="Filipino" name="emp_citizen">
                        </div>

                        <div class="form-check mx-sm-1 mb-2">
                            <input class="form-check-input" type="checkbox" value="by_birth" name="emp_citizen_chk">
                            <label class="form-check-label" > By Birth</label>
                        </div>

                        <div class="form-check mx-sm-1 mb-2">
                            <input class="form-check-input" type="checkbox" value="by_nature" name="emp_citizen_chk">
                            <label class="form-check-label" >By Naturalization</label>
                        </div>

                        <div class="form-group mx-sm-1 mb-2">
                            <input type="text" class="form-control" style="width:200px;" id="" placeholder="Indicate Country If dual Citizenship" name="emp_dual_citizen">
                        </div>

                    
                </div>

                </div>

            
                                                

                
                    <div class="row">
                       
                            <div class="form-group mx-sm-3 mb-2">
                                <label for="">RESIDENTIAL ADDRESS</label>
                                <input type="text" class="form-control" style="width:100px;"id="" placeholder="House/Block/Lot No" name="emp_resi_add">
                            </div>

                            <div class="form-group mx-sm-2 mb-2">
                                <input type="text" class="form-control" style="width:100px;"id="" placeholder="Street" name="emp_resi_add_street">
                            </div>

                            <div class="form-group mx-sm-1 mb-2">
                                <input type="text" class="form-control" style="width:120px;"id="" placeholder="Subdivision/Village" name="emp_resi_add_subdivision">
                            </div>

                            <div class="form-group mx-sm-1 mb-2">
                                <select class="form-control" style="width:90px;" name="emp_resi_add_barangay">
                                <option value="barangay">Barangay</option>
                                <option></option>
                            </select>
                            </div>

                            <div class="form-group mx-sm-1 mb-2">
                                <select class="form-control" style="width:90px;" name="emp_resi_add_municipal" >
                                <option value="" >Municipal/City</option>
                                <option>...</option>
                            </select>
                            </div>

                            <div class="form-group mx-sm-1 mb-2">
                                <select class="form-control" style="width:90px;" name="emp_resi_add_province">
                                <option selected>Province</option>
                                <option>...</option>
                            </select>
                            </div>

                            <div class="form-group mx-sm-1 mb-2">
                                <input type="text" class="form-control" style="width:90px;"id="" placeholder="Zip Code" name="emp_resi_add_zipcode">
                            </div>
                           
                    </div>


                    <div class="row">
                 
                        <div class="form-group mx-sm-3 mb-2">
                            <label for="">PERMANENT ADDRESS</label>
                            <input type="text" class="form-control" style="width:100px;"id="" placeholder="House/Block/Lot No" name="emp_per_add">
                        </div>

                        <div class="form-group mx-sm-2 mb-2">
                            <input type="text" class="form-control" style="width:100px;"id="" placeholder="Street"  name="emp_per_add_street">
                        </div>

                        <div class="form-group mx-sm-1 mb-2">
                            <input type="text" class="form-control" style="width:120px;"id="" placeholder="Subdivision/Village" name="emp_per_add_subdivision">
                        </div>
                        
                        <div class="form-group mx-sm-1 mb-2">
                            <select class="form-control" style="width:90px;" name="emp_per_add_barangay">
                            <option selected>Barangay</option>
                            <option>...</option>
                        </select>
                        </div>

                        <div class="form-group mx-sm-1 mb-2">
                            <select class="form-control" style="width:90px;" name="emp_per_add_municipal">
                            <option selected>Municipal/City</option>
                            <option>...</option>
                        </select>
                        </div>

                        <div class="form-group mx-sm-1 mb-2">
                            <select class="form-control" style="width:90px;" name="emp_per_add_province">
                            <option selected>Province</option>
                            <option>...</option>
                        </select>
                        </div> 

                        <div class="form-group mx-sm-1 mb-2">
                            <input type="text" class="form-control" style="width:90px;"id="" placeholder="Zip Code" name="emp_per_add_zipcode">
                        </div>

                    
                </div>

                
                    
               <div class="row">
                    <div class="col-lg-6 form-inline">
                    
                    <div class="form-group mx-sm-3 mb-2">
                                    <label for="">CONTACTS</label>
                                </div>

                                <div class="form-group mx-sm-2 mb-2" >
                                <input type="text" class="form-control" style="width:100px;"id="" placeholder="Telephone No." name="emp_tel_no">
                                </div>

                                <div class="form-group mx-sm-1 mb-2">
                                <input type="text" class="form-control" style="width:100px;"id="" placeholder="Mobile No." name="emp_mb_no">
                                </div>

                                <div class="form-group mx-sm-1 mb-2">
                                <input type="text" class="form-control" style="width:90px;"id="" placeholder="Email Address" name="emp_email">
                                </div>
                    </div>

                    <div class="col-lg-5 form-inline p-2 ">

                                 <div class="form-group mx-sm-1 mb-2" >
                                <input type="text" class="form-control" style="width:100px;"id="" placeholder="GSIS ID No." name="emp_contact_gs">
                                </div>

                                <div class="form-group mx-sm-1 mb-2">
                                <input type="text" class="form-control" style="width:100px;"id="" placeholder="PAG-IBIG ID No." name="emp_contact_pag">
                                </div>

                                <div class="form-group mx-sm-1 mb-2">
                                <input type="text" class="form-control" style="width:100px;"id="" placeholder="PHILHEALTH No." name="emp_contact_ph">
                                </div>
                            
                                <div class="form-group mx-sm-1 mb-2" >
                                <input type="text" class="form-control" style="width:100px;"id="" placeholder="SSS ID No." name="emp_contact_ss">
                                </div>

                                <div class="form-group mx-sm-1 mb-2">
                                <input type="text" class="form-control" style="width:100px;"id="" placeholder="TIN No." name="emp_contact_tin">
                                </div>

                                <div class="form-group mx-sm-1 mb-2">
                                <input type="text" class="form-control" style="width:100px;"id="" placeholder="AGENCY EMPLOYEE No." name="emp_contact_agency">
                                </div>
                            
                        
                    </div>
               </div>

                <div class="text-right">
                        <button class="btn m-2" style="background: #345587;color:#fff;" type ="submit" name="update">UPDATE</button>
                        <button  type ="submit" name="submit" class="btn m-2" style="background: #345587; color:#fff";>NEXT</button>
                    </div>
                    </form>   
                 
         
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


      
