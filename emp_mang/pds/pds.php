

<!--PDS--->
<div class=" emp_profile_section2_tab " id="tab-1" style="display:block;">
        <!--menu section-->
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                <div class="emp_profile_section1 ">
                        <form class="form-inline "> 
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


            <div class="container emp_profile_section2 pt-4" id="content-1" style="display:block;">       
                <div class="row ">

                    <div class="col-lg-9 ">
                        <form class="form-inline" method ="POST" action="savedata.php">   

                            <div class="form-group mx-sm-2 mb-2">
                                <label for="">NAME</label>
                                <input type="text" class="form-control" style="width:100px;"id="" placeholder="First Name" name="emp_first_name">
                            </div>
                            <div class="form-group mx-sm-2 mb-2">
                            <input type="text" class="form-control" style="width:100px;"id="" placeholder="Last name" name="emp_last_name">
                            </div>
                            <div class="form-group mx-sm-2 mb-2">
                            <input type="text" class="form-control" style="width:100px;"id="" placeholder="Middle name" name="emp_middle_name">
                            </div>
                            <div class="form-group mx-sm-2 mb-2">
                            <input type="text" class="form-control" style="width:50px;" id="" placeholder="Ext" name="emp_ext_name">
                            </div>
                            <div class="form-group mx-sm-2 mb-2">
                            <label for="">SEX</label>
                            <select class="form-control" style="width:50px;">
                                <option></option>
                                <option>...</option>
                            </select>
                            </div>
                            <div class="form-group mx-sm-1 mb-2">
                            <label for="">GENDER</label>
                            <select class="form-control" style="width:50px;">
                                <option ></option>
                                <option>...</option>
                            </select>
                            </div>
                    </form>

                        <form class="form-inline mt-2">
                            <div class="form-group mx-sm-1 mb-2">
                            <label for="">CIVIL STATUS</label>
                                <select class="form-control">
                                <option selected>Status</option>
                                <option>...</option>
                            </select>
                            </div>
                            <div class="form-group mx-sm-2 mb-2">
                                <label for="">DATE OF BIRTH</label>
                                <input type="text" class="form-control" style="width:70px;" id="" placeholder="10/25/20">
                            </div>
                            <div class="form-group mx-sm-1 mb-2">
                            <label for="">HEIGHT</label>
                                <input type="text" class="form-control" style="width:50px;" id="" placeholder="">
                            </div>
                            <div class="form-group mx-sm-1 mb-2">
                            <label for="">WEIGHT</label>
                            <input type="text" class="form-control" style="width:50px;" id="" placeholder="">
                            </div>
                            <div class="form-group mx-sm-1 mb-2">
                            <label for="">BLOOD TYPE</label>
                                <input type="text" class="form-control" style="width:40px;" id="" placeholder="">
                            </div>
                        </form>
                    </div>

                    <div class="col-lg-3 p-0 m-0" style="background-color:#F4FBFF">
                    <form class="form-inline">
                        <div class="form-group mx-sm-1 mb-2">
                            <label for="">CITIZENSHIP</label>
                                <input type="text" class="form-control" style="width:100px;" id="" placeholder="Filipino">
                        </div>
                        <div class="form-check mx-sm-1 mb-2">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                By Birth
                            </label>
                        </div>
                        <div class="form-check mx-sm-1 mb-2">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                By Naturalization
                            </label>
                        </div>
                        <div class="form-group mx-sm-1 mb-2">
                            <input type="text" class="form-control" style="width:200px;" id="" placeholder="Indicate Country If dual Citizenship">
                        </div>
                    </form>
                </div>


                
                    <div class="row">
                        <form class="form-inline">
                            <div class="form-group mx-sm-3 mb-2">
                                <label for="">RESIDENTIAL ADDRESS</label>
                                <input type="text" class="form-control" style="width:100px;"id="" placeholder="House/Block/Lot No">
                            </div>
                            <div class="form-group mx-sm-2 mb-2">
                                <input type="text" class="form-control" style="width:100px;"id="" placeholder="Street">
                            </div>
                            <div class="form-group mx-sm-1 mb-2">
                                <input type="text" class="form-control" style="width:120px;"id="" placeholder="Subdivision/Village">
                            </div>
                            <div class="form-group mx-sm-1 mb-2">
                                <select class="form-control" style="width:90px;">
                                <option selected>Barangay</option>
                                <option>...</option>
                            </select>
                            </div>
                            <div class="form-group mx-sm-1 mb-2">
                                <select class="form-control" style="width:90px;">
                                <option selected>Municipal/City</option>
                                <option>...</option>
                            </select>
                            </div>
                            <div class="form-group mx-sm-1 mb-2">
                                <select class="form-control" style="width:90px;">
                                <option selected>Province</option>
                                <option>...</option>
                            </select>
                            </div>
                            <div class="form-group mx-sm-1 mb-2">
                                <input type="text" class="form-control" style="width:90px;"id="" placeholder="Zip Code">
                            </div>
                            </form>
                    </div>


                    <div class="row">
                    <form class="form-inline">
                        <div class="form-group mx-sm-3 mb-2">
                            <label for="">RESIDENTIAL ADDRESS</label>
                            <input type="text" class="form-control" style="width:100px;"id="" placeholder="House/Block/Lot No">
                        </div>
                        <div class="form-group mx-sm-2 mb-2">
                            <input type="text" class="form-control" style="width:100px;"id="" placeholder="Street">
                        </div>
                        <div class="form-group mx-sm-1 mb-2">
                            <input type="text" class="form-control" style="width:120px;"id="" placeholder="Subdivision/Village">
                        </div>
                        
                        <div class="form-group mx-sm-1 mb-2">
                            <select class="form-control" style="width:90px;">
                            <option selected>Barangay</option>
                            <option>...</option>
                        </select>
                        </div>
                        <div class="form-group mx-sm-1 mb-2">
                            <select class="form-control" style="width:90px;">
                            <option selected>Municipal/City</option>
                            <option>...</option>
                        </select>
                        </div>
                        <div class="form-group mx-sm-1 mb-2">
                            <select class="form-control" style="width:90px;">
                            <option selected>Province</option>
                            <option>...</option>
                        </select>
                        </div> 
                        <div class="form-group mx-sm-1 mb-2">
                            <input type="text" class="form-control" style="width:90px;"id="" placeholder="Zip Code">
                        </div>
                    </form>
                </div>

                <div class="container">
                    
                <div class="row p-0 m-0">
                        <div class="col-lg-7 p-0 m-0" >
                            <form class="form-inline">
                                <div class="form-group mx-sm-3 mb-2">
                                    <label for="">CONTACTS</label>
                                </div>
                                <div class="form-group mx-sm-2 mb-2" >
                                <input type="text" class="form-control" style="width:100px;"id="" placeholder="Telephone No.">
                                </div>
                                <div class="form-group mx-sm-1 mb-2">
                                <input type="text" class="form-control" style="width:100px;"id="" placeholder="Mobile No.">
                                </div>
                                <div class="form-group mx-sm-1 mb-2">
                                <input type="text" class="form-control" style="width:90px;"id="" placeholder="Email Address">
                                </div>
                            </form>
                        </div>

                        <div class="col-lg-5 p-0 m-0">
                            <form class="form-inline">
                                <div class="form-group mx-sm-1 mb-2" >
                                <input type="text" class="form-control" style="width:100px;"id="" placeholder="GSIS ID No.">
                                </div>
                                <div class="form-group mx-sm-1 mb-2">
                                <input type="text" class="form-control" style="width:100px;"id="" placeholder="PAG-IBIG ID No.">
                                </div>
                                <div class="form-group mx-sm-1 mb-2">
                                <input type="text" class="form-control" style="width:100px;"id="" placeholder="PHILHEALTH No.">
                                </div>
                            </form>

                            <form class="form-inline">
                                <div class="form-group mx-sm-1 mb-2" >
                                <input type="text" class="form-control" style="width:100px;"id="" placeholder="SSS ID No.">
                                </div>
                                <div class="form-group mx-sm-1 mb-2">
                                <input type="text" class="form-control" style="width:100px;"id="" placeholder="TIN No.">
                                </div>
                                <div class="form-group mx-sm-1 mb-2">
                                <input type="text" class="form-control" style="width:100px;"id="" placeholder="AGENCY EMPLOYEE No.">
                                </div>
                            </form>
                        </div>
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
