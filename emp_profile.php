
<?php include 'link.php'; ?>
<?php include 'header.php'; ?>




<!--head section-->
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-9 ">
            <h6 class="text-right pr-2"> 
                <button  onclick="opentab('tab-1')" type="button" class="btn emp_profile_section1_tab active" >PDS | </button>
                <button  onclick="opentab('tab-2')" type="button" class="btn emp_profile_section1_tab " >Leave Ledger | </button>
                <button  onclick="opentab('tab-3')" type="button" class="btn emp_profile_section1_tab " >File 201</button>
            </h6>
            <h4>WARREN DR AFICHAO</h4>
            <p>Permanent > Senior Programmer</p>
        </div>

        <div class="col-lg-3 p-0 m-0 pr-3">
            <div class="emp_profile_image"> </div>
        </div>
       
    </div>
</div>

<!--PDS--->
    <div class=" emp_profile_section2_tab pt-4 " id="tab-1" style="display:block;">
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
                        <form class="form-inline">   

                            <div class="form-group mx-sm-2 mb-2">
                                <label for="">NAME</label>
                                <input type="text" class="form-control" style="width:100px;"id="" placeholder="First Name">
                            </div>
                            <div class="form-group mx-sm-2 mb-2">
                            <input type="text" class="form-control" style="width:100px;"id="" placeholder="Last name">
                            </div>
                            <div class="form-group mx-sm-2 mb-2">
                            <input type="text" class="form-control" style="width:100px;"id="" placeholder="Middle name">
                            </div>
                            <div class="form-group mx-sm-2 mb-2">
                            <input type="text" class="form-control" style="width:50px;" id="" placeholder="Ext">
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




        <!--body section of family background-->
        <div class=" emp_profile_section2 pt-4 " id="content-2">  
            <div class="container">
                <div class="row">

            <div class="col-lg-7">
                <form class="form-inline">
                
                    <div class="form-group mx-sm-1 mb-2">
                        <label for="">SPOUSE NAME</label>
                    <input type="text" class="form-control" id="" style="width:100px; "placeholder="Surname ">
                    </div>

                    <div class="form-group mx-sm-1 mb-2">
                    <input type="text" class="form-control" id="" style="width:100px; "placeholder="First">
                    </div>

                    <div class="form-group mx-sm-1 mb-2">
                    <input type="text" class="form-control" id="" style="width:100px;" placeholder="Middle">
                    </div>

                    <div class="form-group mx-sm-1 mb-2">
                    <input type="text" class="form-control" id="" style="width:50px;" placeholder="Ext">
                    </div>
                
                    
                </form>


                <form class="form-inline">
                
                <div class="form-group mx-sm-1 mb-2">
                    <label for="">OCCUPATION</label>
                    <input type="text" class="form-control" id="" placeholder="Surname ">
                </div>

                <div class="form-group mx-sm-1 mb-2">
                <label for="">EMPLOYER</label>
                    <input type="text" class="form-control" id="" placeholder="First">
                </div>
            </form>

            <div class="row">
                <div class="col-lg-5"></div>
                <div class="col-lg-7">
                <form class="form-inline">
                
                <div class="form-group mx-sm-2 mb-2">
                    <label for="">ADDRESS</label>
                    <input type="text" class="form-control" id=""  placeholder="Surname ">
                </div>

                <div class="form-group mx-sm-2 mb-2">
                <label for="">TELEPHONE NO</label>
                    <input type="text" class="form-control" id="" placeholder="First">
                </div>
                </form>
                </div>
            </div>


            <form class="form-inline">
                
                <div class="form-group mx-sm-1 mb-2">
                    <label for="">FATHER'S NAME</label>
                    <input type="text" class="form-control" id=""  style="width:100px;"  placeholder="Surname ">
                </div>

                <div class="form-group mx-sm-1 mb-2">
                    <input type="text" class="form-control" id="" style="width:100px;"  placeholder="First">
                </div>

                <div class="form-group mx-sm-1 mb-2">
                    <input type="text" class="form-control" id="" style="width:100px;"  placeholder="Middle">
                </div>

                <div class="form-group mx-sm-1 mb-2">
                    <input type="text" class="form-control" id="" style="width:50px;" placeholder="Ext">
                </div>
                
                
            </form>

            <form class="form-inline">
                
                <div class="form-group mx-sm-1 mb-2">
                    <label for="">MOTHER'S NAME</label>
                    <input type="text" class="form-control" id=""style="width:100px;"  placeholder="Surname ">
                </div>

                <div class="form-group mx-sm-1 mb-2">
                    <input type="text" class="form-control" id=""style="width:100px;"  placeholder="First">
                </div>

                <div class="form-group mx-sm-1 mb-2">
                    <input type="text" class="form-control" id="" style="width:100px;"  placeholder="Middle">
                </div>

                <div class="form-group mx-sm-1 mb-2">
                    <input type="text" class="form-control" id="" style="width:50px;" placeholder="Ext">
                </div>
                
                
            </form>

                </div>

                    <div class="col-lg-5">
                        <div class="container">
                                <div class="row">
                                                <div class="col-7 p-0 m-0 ">
                                                    <form class="form-inline">
                                                        <div class="form-group mx-sm-1 mb-2">
                                                            <label for="">NAME OF CHILDREN(Write Fullname)</label>
                                                            </div>
                                                            <div class="form-group mx-sm-1 mb-2">
                                                                <input type="text" class="form-control" style="width:200px;" placeholder="">
                                                            </div>
                                                            <div class="form-group mx-sm-1 mb-2">
                                                                <input type="text" class="form-control" style="width:200px;"  placeholder="">
                                                            </div>
                                                        
                                                    </form>
                                                </div>

                                                <div class="col-5 p-0 m-0">
                                                <form class="form-inline">
                                                        <div class="form-group mx-sm-1 mb-2">
                                                            <label for="">DATE OF BIRTH</label>
                                                            </div>
                                                            <div class="form-group mx-sm-1 mb-2">
                                                                <input type="text" class="form-control" style="width:100px;"  placeholder="">
                                                            </div>
                                                            <div class="form-group mx-sm-1 mb-2">
                                                                <input type="text" class="form-control" style="width:100px;"  placeholder="">
                                                            </div>
                                                        
                                                    </form>
                                                </div>

                                </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>



        <!--body section of education background-->
        <div class=" emp_profile_section2 pt-4 "    id="content-3">  
            <div class="container">

            <!--ELEMENTARY-->
                <div class="row">
                    <div class="col-lg-2 d-flex align-items-center">
                        <h6>ElEMENTARY</h6>

                    </div>

                    <div class="col-lg-10 pt-2 pb-2 mt-2 mb-2" style="background:#E6F7FF;">
                    <div class="row">
                    <form class="form-inline">
                
                    <div class="form-group mx-sm-1 mb-2">
                    <input type="text" class="form-control" id="" style="width:180px" placeholder="NAME OF SCHOOL">
                    </div>
                    <div class="form-group mx-sm-1 mb-2">
                    <input type="text" class="form-control" id="" style="width:200px"  placeholder="BASIC EDUCATION/DEGREE/COURSE">
                    </div>
                    <div class="form-group mx-sm-3 mb-2">
                        <label for="">PERIOD OF ATTENDANCE</label>
                    <input type="text" class="form-control" id="" style="width:80px"   placeholder="">
                    <input type="text" class="form-control" id="" style="width:80px"   placeholder="">
                    </div>
                    
                    </form>

                <form class="form-inline">
                
                    <div class="form-group mx-sm-1 mb-2">
                    <label for="">HIGHEST UNITS EARNED</label>
                    <input type="text" class="form-control" id="" style="width:100px" placeholder=" ">
                    </div>
                <div class="form-group mx-sm-1 mb-2">
                        <label for="">SCHOLARSHIP/AWARDS</label>
                        <input type="text" class="form-control" id="" style="width:200px"  placeholder="">
                </div>
                <div class="form-group mx-sm-3 mb-2">
                    <label for="">YEAR GRADUATED</label>
                    <input type="text" class="form-control" id="" style="width:80px"   placeholder="">
                    
                </div>
                
                    </form>

                    </div>

                    </div>
                </div>

                
            <!--SECONDARY-->
                <div class="row">
                    <div class="col-lg-2 d-flex align-items-center">
                        <h6>SECONDARY</h6>

                    </div>

                    <div class="col-lg-10 pt-2 pb-2 mt-2 mb-2" style="background:#E6F7FF;">
                    <div class="row">
                    <form class="form-inline">
                
                    <div class="form-group mx-sm-1 mb-2">
                    <input type="text" class="form-control" id="" style="width:180px" placeholder="NAME OF SCHOOL">
                    </div>
                    <div class="form-group mx-sm-1 mb-2">
                    <input type="text" class="form-control" id="" style="width:200px"  placeholder="BASIC EDUCATION/DEGREE/COURSE">
                    </div>
                    <div class="form-group mx-sm-3 mb-2">
                        <label for="">PERIOD OF ATTENDANCE</label>
                    <input type="text" class="form-control" id="" style="width:80px"   placeholder="">
                    <input type="text" class="form-control" id="" style="width:80px"   placeholder="">
                    </div>
                    
                    </form>

                <form class="form-inline">
                
                    <div class="form-group mx-sm-1 mb-2">
                    <label for="">HIGHEST UNITS EARNED</label>
                    <input type="text" class="form-control" id="" style="width:100px" placeholder=" ">
                    </div>
                <div class="form-group mx-sm-1 mb-2">
                        <label for="">SCHOLARSHIP/AWARDS</label>
                        <input type="text" class="form-control" id="" style="width:200px"  placeholder="">
                </div>
                <div class="form-group mx-sm-3 mb-2">
                    <label for="">YEAR GRADUATED</label>
                    <input type="text" class="form-control" id="" style="width:80px"   placeholder="">
                    
                </div>
                
                    </form>

                    </div>

                    </div>
                </div>

            <!--VOCATIONAL/TRADE COURSE-->
                <div class="row">
                    <div class="col-lg-2 d-flex align-items-center">
                        <h6>ElEMENTARY</h6>

                    </div>

                    <div class="col-lg-10 pt-2 pb-2 mt-2 mb-2" style="background:#E6F7FF;">
                    <div class="row">
                    <form class="form-inline">
                
                    <div class="form-group mx-sm-1 mb-2">
                    <input type="text" class="form-control" id="" style="width:180px" placeholder="NAME OF SCHOOL">
                    </div>
                    <div class="form-group mx-sm-1 mb-2">
                    <input type="text" class="form-control" id="" style="width:200px"  placeholder="BASIC EDUCATION/DEGREE/COURSE">
                    </div>
                    <div class="form-group mx-sm-3 mb-2">
                        <label for="">PERIOD OF ATTENDANCE</label>
                    <input type="text" class="form-control" id="" style="width:80px"   placeholder="">
                    <input type="text" class="form-control" id="" style="width:80px"   placeholder="">
                    </div>
                    
                    </form>

                <form class="form-inline">
                
                    <div class="form-group mx-sm-1 mb-2">
                    <label for="">HIGHEST UNITS EARNED</label>
                    <input type="text" class="form-control" id="" style="width:100px" placeholder=" ">
                    </div>
                <div class="form-group mx-sm-1 mb-2">
                        <label for="">SCHOLARSHIP/AWARDS</label>
                        <input type="text" class="form-control" id="" style="width:200px"  placeholder="">
                </div>
                <div class="form-group mx-sm-3 mb-2">
                    <label for="">YEAR GRADUATED</label>
                    <input type="text" class="form-control" id="" style="width:80px"   placeholder="">
                    
                </div>
                
                    </form>

                    </div>

                    </div>
                </div>
                <!--COLLEGE-->
                <div class="row">
                    <div class="col-lg-2 d-flex align-items-center">
                        <h6>ElEMENTARY</h6>

                    </div>

                    <div class="col-lg-10 pt-2 pb-2 mt-2 mb-2" style="background:#E6F7FF;">
                    <div class="row">
                    <form class="form-inline">
                
                    <div class="form-group mx-sm-1 mb-2">
                    <input type="text" class="form-control" id="" style="width:180px" placeholder="NAME OF SCHOOL">
                    </div>
                    <div class="form-group mx-sm-1 mb-2">
                    <input type="text" class="form-control" id="" style="width:200px"  placeholder="BASIC EDUCATION/DEGREE/COURSE">
                    </div>
                    <div class="form-group mx-sm-3 mb-2">
                        <label for="">PERIOD OF ATTENDANCE</label>
                    <input type="text" class="form-control" id="" style="width:80px"   placeholder="">
                    <input type="text" class="form-control" id="" style="width:80px"   placeholder="">
                    </div>
                    
                    </form>

                <form class="form-inline">
                
                    <div class="form-group mx-sm-1 mb-2">
                    <label for="">HIGHEST UNITS EARNED</label>
                    <input type="text" class="form-control" id="" style="width:100px" placeholder=" ">
                    </div>
                <div class="form-group mx-sm-1 mb-2">
                        <label for="">SCHOLARSHIP/AWARDS</label>
                        <input type="text" class="form-control" id="" style="width:200px"  placeholder="">
                </div>
                <div class="form-group mx-sm-3 mb-2">
                    <label for="">YEAR GRADUATED</label>
                    <input type="text" class="form-control" id="" style="width:80px"   placeholder="">
                    
                </div>
                
                    </form>

                    </div>

                    </div>
                </div>
                <!--GRADUATE STUDENTS-->
                <div class="row">
                    <div class="col-lg-2 d-flex align-items-center">
                        <h6>ElEMENTARY</h6>

                    </div>

                    <div class="col-lg-10 pt-2 pb-2 mt-2 mb-2" style="background:#E6F7FF;">
                    <div class="row">
                    <form class="form-inline">
                
                    <div class="form-group mx-sm-1 mb-2">
                    <input type="text" class="form-control" id="" style="width:180px" placeholder="NAME OF SCHOOL">
                    </div>
                    <div class="form-group mx-sm-1 mb-2">
                    <input type="text" class="form-control" id="" style="width:200px"  placeholder="BASIC EDUCATION/DEGREE/COURSE">
                    </div>
                    <div class="form-group mx-sm-3 mb-2">
                        <label for="">PERIOD OF ATTENDANCE</label>
                    <input type="text" class="form-control" id="" style="width:80px"   placeholder="">
                    <input type="text" class="form-control" id="" style="width:80px"   placeholder="">
                    </div>
                    
                    </form>

                <form class="form-inline">
                
                    <div class="form-group mx-sm-1 mb-2">
                    <label for="">HIGHEST UNITS EARNED</label>
                    <input type="text" class="form-control" id="" style="width:100px" placeholder=" ">
                    </div>
                <div class="form-group mx-sm-1 mb-2">
                        <label for="">SCHOLARSHIP/AWARDS</label>
                        <input type="text" class="form-control" id="" style="width:200px"  placeholder="">
                </div>
                <div class="form-group mx-sm-3 mb-2">
                    <label for="">YEAR GRADUATED</label>
                    <input type="text" class="form-control" id="" style="width:80px"   placeholder="">
                    
                </div>
                
                    </form>

                    </div>

                    </div>
                </div>


            </div>
        </div>



        <!--body section of Civil service eligibility-->
        <div class=" emp_profile_section2 pt-4 " id="content-4">  
            <form class="form-inline">
                
                    <div class="form-group mx-sm-3 mb-2">
                        <div class="d-flex flex-column">
                            <label for="">TYPE</label>
                            <select class="form-control" style="width:200px;">
                                <option selected>Select type</option>
                                <option>...</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group mx-sm-3 mb-2">
                        <div class="d-flex flex-column">
                            <label for="">NAME OF EXAMINATION</label>
                            <input type="text" class="form-control" id="" placeholder="">
                        </div>
                    </div>

                    <div class="form-group mx-sm-3 mb-2">
                        <div class="d-flex flex-column">
                            <label for="">RATING <span class="text-muted"> (if applicable) </span></label>
                            <input type="text" class="form-control" id="" placeholder="">
                        </div>
                    </div>

                    <div class="form-group mx-sm-3 mb-2">
                        <div class="d-flex flex-column">
                            <label for="">EXAMINATION DATE</label>
                            <input type="text" class="form-control" id="" placeholder="">
                        </div>
                    </div>

                    <div class="form-group mx-sm-3 mb-2">
                        <div class="d-flex flex-column">
                            <label for="">PLACE OF EXAMINATION</label>
                            <input type="text" class="form-control" id="" placeholder="">
                        </div>
                    </div>

                    
                </form>
                <div class="d-flex justify-content-center">
                    <form class="form-inline">

                        <div class="form-group mx-sm-3 mb-2">
                            <label for="">LICENCE <span class="text-muted">(If Applicable)</span></label>    
                        </div>

                        <div class="form-group mx-sm-3 mb-2">
                        <div class="d-flex flex-column">
                            <label for="">NUMBER</label>
                            <input type="text" class="form-control" id="" placeholder="">
                        </div>
                    </div>

                    <div class="form-group mx-sm-3 mb-2">
                        <div class="d-flex flex-column">
                            <label for="">VALIDITY</label>
                            <input type="text" class="form-control" id="" placeholder="">
                        </div>
                    </div>

                    </form>
                </div>
        </div>


        <!--body section of WORK EXPERIENCE-->
        <div class=" emp_profile_section2 pt-4 " id="content-5">  
            <form class="form-inline">
                
                <div class="form-group mx-sm-3 mb-2">
                    <div class="d-flex flex-column">
                        <label for="">INCLUSIVE DATES</label>
                        <div class="d-flex justify-content-center">
                        <input type="text" class="form-control" id="" placeholder="" style="width:100px;">
                        <input type="text" class="form-control" id="" placeholder="" style="width:100px;">
                        </div>
                    </div>
                </div>
                
                <div class="form-group mx-sm-3 mb-2">
                    <div class="d-flex flex-column">
                        <label for="">POSITION/TITLE</label>
                        <input type="text" class="form-control" id="" placeholder="" style="width:200px;">
                    </div>
                </div>

                <div class="form-group mx-sm-3 mb-2">
                    <div class="d-flex flex-column">
                        <label for="">EMPLOYER </label>
                        <input type="text" class="form-control" id="" placeholder="" style="width:200px;">
                    </div>
                </div>

                

                <div class="form-group mx-sm-3 mb-2">
                    <div class="d-flex flex-column">
                        <label for="">GOVERNMENT SERVICE</label>
                        <div class="d-flex justify-content-center">
                        <div class="form-check">
                            <label class="form-check-label" for="defaultCheck1"> Yes</label> <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="defaultCheck1"> Yes</label> <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        </div>
                        </div>
                    </div>
                </div>

                
            </form>
            <div class="d-flex justify-content-center">
                <form class="form-inline">

                    <div class="form-group mx-sm-3 mb-2">
                        <label for="">MONTHLY SALARY</label>
                        <input type="text" class="form-control" id="" placeholder="" style="width:100px;">    
                    </div>

                    <div class="form-group mx-sm-3 mb-2">
                        <label for="">INCREMENT</label>
                        <input type="text" class="form-control" id="" placeholder="" style="width:100px;">    
                    </div>
                    
                    <div class="form-group mx-sm-3 mb-2">
                        <label for="">STATUS</label>
                        <select class="form-control" style="width:100px;">
                            <option selected>Status</option>
                            <option>...</option>
                        </select>  
                    </div>

                

                </form>
            </div>
        </div>

        <!--body section of VOLUNTARY WORKS-->
        <div class=" emp_profile_section2 pt-4 " id="content-6">  
            <form class="form-inline">
                
                <div class="form-group mx-sm-3 mb-2">
                    <div class="d-flex flex-column">
                        <label for="">NAME OF ORGANISATION</label>
                        <input type="text" class="form-control" id="" placeholder="" style="width:200px;">
                    </div>
                </div>
                
                <div class="form-group mx-sm-3 mb-2">
                    <div class="d-flex flex-column">
                        <label for="">ADDRESS</label>
                        <input type="text" class="form-control" id="" placeholder="" style="width:200px;">
                    </div>
                </div>

                
                <div class="form-group mx-sm-3 mb-2">
                    <div class="d-flex flex-column">
                        <label for="">INCLUSIVE DATES</label>
                            <div class="d-flex justify-content-center">

                            <input type="text" class="form-control" id="" placeholder="">

                            <input type="text" class="form-control" id="" placeholder="">
                        </div>
                    </div>
                </div>

                
            </form>
            <div class="d-flex justify-content-center">
                <form class="form-inline">

                    <div class="form-group mx-sm-3 mb-2">
                        <label for="">NO OF HOURS</label>
                        <input type="text" class="form-control" id="" placeholder="" style="width:100px;">    
                    </div>

                    <div class="form-group mx-sm-3 mb-2">
                        <label for="">POSITION/ROLE</label>
                        <input type="text" class="form-control" id="" placeholder="" style="width:120px;">    
                    </div>
                    
                    
                </form>
            </div>
        </div>

        <!--body section of learning and development-->
        <div class=" emp_profile_section2 pt-4 " id="content-7">  
            <form class="form-inline">
                
                <div class="form-group mx-sm-3 mb-2">
                    <div class="d-flex flex-column">
                        <label for="">TITLE OF TRAINING PROGRAMS ATTENDED</label>
                        <input type="text" class="form-control" id="" placeholder="" style="width:300px;">
                    </div>
                </div>
                
                <div class="form-group mx-sm-3 mb-2">
                    <div class="d-flex flex-column">
                        <label for="">TYPE OF PROGRAM</label>
                        <input type="text" class="form-control" id="" placeholder="" style="width:200px;">
                    </div>
                </div>

                <div class="form-group mx-sm-3 mb-2">
                    <div class="d-flex flex-column">
                        <label for="">NO. OF HOURS</label>
                        <input type="text" class="form-control" id="" placeholder="" style="width:80px;">
                    </div>
                </div>

                
                <div class="form-group mx-sm-3 mb-2">
                    <div class="d-flex flex-column">
                        <label for="">INCLUSIVE DATES</label>
                            <div class="d-flex justify-content-center">

                            <input type="text" class="form-control" id="" placeholder="" style="width:50px">
                            <button class="btn mx-sm-1" style="background:#345587;"></button>
                            <input type="text" class="form-control" id="" placeholder="" style="width:50px">
                            <button class="btn mx-sm-1" style="background:#345587;"></button>
                        </div>
                    </div>
                </div>

                
            </form>
            <div class="d-flex justify-content-center">
                <form class="form-inline">

                    <div class="form-group mx-sm-3 mb-2">
                        <label for="">CONDUCTED/SPONSORED BY</label>
                        <input type="text" class="form-control" id="" placeholder="" style="width:300px;">    
                    </div>

                </form>
            </div>
        </div>

        <!--body section of SKILLS/RECOGNITION/AFFLIATION-->
        <div class=" emp_profile_section2 pt-4 "    id="content-8">  
            <div class="container">
            <div class="row" style="background:#E6F7FF">
                <div class="col-lg-4">
                <form class="form-inline">
                    <div class="form-group mx-sm-3 mb-2">
                        <div class="d-flex flex-column">
                            <label for="">SPECIAL SKILLS AND HOBBIES</label>
                            <input type="text" class="form-control mb-2 mt-2" id="" placeholder="" style="width:200px;">
                            <input type="text" class="form-control mb-2" id="" placeholder="" style="width:200px;">
                            <input type="text" class="form-control mb-2" id="" placeholder="" style="width:200px;">
                        </div>
                    </div>
                </form>
                </div>

                <div class="col-lg-4">
                <form class="form-inline">
                
                    <div class="form-group mx-sm-3 mb-2">
                        <div class="d-flex flex-column">
                            <label for="">NON-ACADEMIC DISTINCTION/RECOGNITION</label>
                            <input type="text" class="form-control mb-2 mt-2" id="" placeholder="" style="width:200px;">
                            <input type="text" class="form-control mb-2" id="" placeholder="" style="width:200px;">
                            <input type="text" class="form-control mb-2" id="" placeholder="" style="width:200px;">
                        </div>
                    </div>
                </form>
                </div>

                <div class="col-lg-4">
                <form class="form-inline">
                    <div class="form-group mx-sm-3 mb-2">
                        <div class="d-flex flex-column">
                            <label for="">MEMBERSHIP IN ASSOCIATION/ORGANIZATION</label>
                            <input type="text" class="form-control mb-2 mt-2" id="" placeholder="" style="width:200px;">
                            <input type="text" class="form-control mb-2" id="" placeholder="" style="width:200px;">
                            <input type="text" class="form-control mb-2" id="" placeholder="" style="width:200px;">
                        </div>
                    </div>
                </form>
                </div>


            </div>
            </div>
        </div>

        <!--body section of OTHER INFORMATION-->
        <div class=" emp_profile_section2 pt-4 " id="content-9">  
            <div class="container">
                <div class="row mt-2 mb-2" style="width:60%">
                    <p>Are you related by consanguinity or affninity to the appointing or recommending authority, or to the cheif of bureau or office or to the person who has immediate supervision over you in the office,Bureau or Department where you will be appointed.</p>
                </div>

                <div class="row mt-2 mb-2">
                    <p>a.within the third degree?</p>
                </div>


            </div>
        </div>


        <!--body section of Reference-->
        <div class=" emp_profile_section2 pt-4 " id="content-10">  
            <div class="container">
            <div class="row" style="background:#E6F7FF">
                <div class="col-lg-4">
                <form class="form-inline">
                    <div class="form-group mx-sm-3 mb-2">
                        <div class="d-flex flex-column">
                            <label for="">FULL NAME</label>
                            <input type="text" class="form-control mb-2 mt-2" id="" placeholder="" style="width:200px;">
                            <input type="text" class="form-control mb-2" id="" placeholder="" style="width:200px;">
                            <input type="text" class="form-control mb-2" id="" placeholder="" style="width:200px;">
                        </div>
                    </div>
                </form>
                </div>

                <div class="col-lg-4">
                <form class="form-inline">
                
                    <div class="form-group mx-sm-3 mb-2">
                        <div class="d-flex flex-column">
                            <label for="">ADDRESS</label>
                            <input type="text" class="form-control mb-2 mt-2" id="" placeholder="" style="width:200px;">
                            <input type="text" class="form-control mb-2" id="" placeholder="" style="width:200px;">
                            <input type="text" class="form-control mb-2" id="" placeholder="" style="width:200px;">
                        </div>
                    </div>
                </form>
                </div>

                <div class="col-lg-4">
                <form class="form-inline">
                    <div class="form-group mx-sm-3 mb-2">
                        <div class="d-flex flex-column">
                            <label for="">TELEPHONE NO./MOBILE PHONE NO.</label>
                            <input type="text" class="form-control mb-2 mt-2" id="" placeholder="" style="width:200px;">
                            <input type="text" class="form-control mb-2" id="" placeholder="" style="width:200px;">
                            <input type="text" class="form-control mb-2" id="" placeholder="" style="width:200px;">
                        </div>
                    </div>
                </form>
                </div>


            </div>

            <div class="row">
            <div class="col-lg-3">
                <form class="form-inline">
                    <div class="form-group mx-sm-3 mb-2">
                        <div class="d-flex flex-column">
                            <label for="">GOVERNMENT ISSUED ID <span>(i.e.Passport,GSIS,SSS,PRC,Driver's Licence ,etc)</span></label>
                            <input type="text" class="form-control mb-2 mt-2" id="" placeholder="Government Issued ID" style="width:200px;">
                            <input type="text" class="form-control mb-2" id="" placeholder="id/License/Passport No." style="width:200px;">
                            <input type="text" class="form-control mb-2" id="" placeholder="Date/Place of Issurance" style="width:200px;">
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
        </div>


    </div>


   

        <!--Ledger--->

    <div class=" emp_profile_section2_tab pt-4 " id="tab-2" >  
        <!--menu section--->
         <div class="container">
            <div class="row">
                    <div class="col-lg-9">
                            <div class="emp_profile_section2_header">
                                <h3 class="p-2 m-2" > LEAVE LEDGER </h3>
                            </div>
                    </div>
                </div>
            </div>

        <!--Body section--->
        <div style="background:#E6F7FF">
                    <div class="container">
                    <form class="form-inline "> 
                        <button  onclick="openpanel2('panel-1')" type="button" class="btn emp_profile_section2_tab_btn active" >SUMMARY OF LEAVES</button>
                        <button onclick="openpanel2('panel-2')"  type="button" class="btn emp_profile_section2_tab_btn ">LEAVE CREDIT</button>
                    </form>
                    </div>
        </div>


                <div class="emp_profile_tab2 container pb-5 pt-5" id="panel-1" style="display:block;">
                        <div class="container">
                            <div class="row">

                                            <div class="col-lg-2">
                                                    <div class="d-flex flex-column">
                                                        <p style="color:#54A04B">Month</p>
                                                        <p >January</p>
                                                        <p>Febuary</p>
                                                        <p>March</p>
                                                        <p>April</p>
                                                        <p>May</p>
                                                        <p>June</p>
                                                        <p>July</p>
                                                        <p>August</p>
                                                        <p>September</p>
                                                        <p>October</p>
                                                        <p>November</p>
                                                        <p>December</p>
                                                    </div>
                                            </div>

                                    <div class="col-lg-10">  
                                                                <div class="d-flex align-items-center justify-content-around">
                                                                    <p style="color:#54A04B">VACATION LEAVE</p>
                                                                    <p style="color:#54A04B">SICK LEAVE</p>
                                                                    <p style="color:#54A04B">SPECIAL PRIVILEDGE LEAVE</p>
                                                                    <p style="color:#54A04B">LEAVE WITHOUT PAY</p>
                                                                </div>
                                                                    <form class="form-inline">
                                                
                                                                            <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                                                <input type="text" class="form-control" id="" placeholder="" >
                                                                                <input type="text" class="form-control" id="" placeholder=" " style="width:20%">
                                                                            </div>

                                                                            <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                                                <input type="text" class="form-control" id="" placeholder=" " >
                                                                                <input type="text" class="form-control" id="" placeholder=" " style="width:20%">
                                                                            </div>
                                                                            <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                                                <input type="text" class="form-control" id="" placeholder=" ">
                                                                                <input type="text" class="form-control" id="" placeholder=" " style="width:20%">
                                                                            </div>
                                                                            <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                                                <input type="text" class="form-control" id="" placeholder=" ">
                                                                                <input type="text" class="form-control" id="" placeholder=" " style="width:20%">
                                                                            </div>
                                                                    </form>

                                            <form class="form-inline">
                                                
                                                            <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                                <input type="text" class="form-control" id="" placeholder="" >
                                                                <input type="text" class="form-control" id="" placeholder=" " style="width:20%">
                                                            </div>

                                                            <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                                <input type="text" class="form-control" id="" placeholder=" " >
                                                                <input type="text" class="form-control" id="" placeholder=" " style="width:20%">
                                                            </div>
                                                            <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                                <input type="text" class="form-control" id="" placeholder=" ">
                                                                <input type="text" class="form-control" id="" placeholder=" " style="width:20%">
                                                            </div>
                                                            <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                                <input type="text" class="form-control" id="" placeholder=" ">
                                                                <input type="text" class="form-control" id="" placeholder=" " style="width:20%">
                                                            </div>
                                        </form>

                                        <form class="form-inline">
                                                
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" id="" placeholder="" >
                                                    <input type="text" class="form-control" id="" placeholder=" " style="width:20%">
                                                </div>

                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" id="" placeholder=" " >
                                                    <input type="text" class="form-control" id="" placeholder=" " style="width:20%">
                                                </div>
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" id="" placeholder=" ">
                                                    <input type="text" class="form-control" id="" placeholder=" " style="width:20%">
                                                </div>
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" id="" placeholder=" ">
                                                    <input type="text" class="form-control" id="" placeholder=" " style="width:20%">
                                                </div>
                                        </form>

                                        <form class="form-inline">
                                                
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" id="" placeholder="" >
                                                    <input type="text" class="form-control" id="" placeholder=" " style="width:20%">
                                                </div>

                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" id="" placeholder=" " >
                                                    <input type="text" class="form-control" id="" placeholder=" " style="width:20%">
                                                </div>
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" id="" placeholder=" ">
                                                    <input type="text" class="form-control" id="" placeholder=" " style="width:20%">
                                                </div>
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" id="" placeholder=" ">
                                                    <input type="text" class="form-control" id="" placeholder=" " style="width:20%">
                                                </div>
                                        </form>


                                        <form class="form-inline">
                                                
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" id="" placeholder="" >
                                                    <input type="text" class="form-control" id="" placeholder=" " style="width:20%">
                                                </div>

                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" id="" placeholder=" " >
                                                    <input type="text" class="form-control" id="" placeholder=" " style="width:20%">
                                                </div>
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" id="" placeholder=" ">
                                                    <input type="text" class="form-control" id="" placeholder=" " style="width:20%">
                                                </div>
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" id="" placeholder=" ">
                                                    <input type="text" class="form-control" id="" placeholder=" " style="width:20%">
                                                </div>
                                        </form>


                                        <form class="form-inline">
                                                
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" id="" placeholder="" >
                                                    <input type="text" class="form-control" id="" placeholder=" " style="width:20%">
                                                </div>

                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" id="" placeholder=" " >
                                                    <input type="text" class="form-control" id="" placeholder=" " style="width:20%">
                                                </div>
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" id="" placeholder=" ">
                                                    <input type="text" class="form-control" id="" placeholder=" " style="width:20%">
                                                </div>
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" id="" placeholder=" ">
                                                    <input type="text" class="form-control" id="" placeholder=" " style="width:20%">
                                                </div>
                                        </form>


                                        <form class="form-inline">
                                                
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" id="" placeholder="" >
                                                    <input type="text" class="form-control" id="" placeholder=" " style="width:20%">
                                                </div>

                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" id="" placeholder=" " >
                                                    <input type="text" class="form-control" id="" placeholder=" " style="width:20%">
                                                </div>
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" id="" placeholder=" ">
                                                    <input type="text" class="form-control" id="" placeholder=" " style="width:20%">
                                                </div>
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" id="" placeholder=" ">
                                                    <input type="text" class="form-control" id="" placeholder=" " style="width:20%">
                                                </div>
                                        </form>


                                        <form class="form-inline">
                                                
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" id="" placeholder="" >
                                                    <input type="text" class="form-control" id="" placeholder=" " style="width:20%">
                                                </div>

                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" id="" placeholder=" " >
                                                    <input type="text" class="form-control" id="" placeholder=" " style="width:20%">
                                                </div>
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" id="" placeholder=" ">
                                                    <input type="text" class="form-control" id="" placeholder=" " style="width:20%">
                                                </div>
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" id="" placeholder=" ">
                                                    <input type="text" class="form-control" id="" placeholder=" " style="width:20%">
                                                </div>
                                        </form>


                                        <form class="form-inline">
                                                
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" id="" placeholder="" >
                                                    <input type="text" class="form-control" id="" placeholder=" " style="width:20%">
                                                </div>

                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" id="" placeholder=" " >
                                                    <input type="text" class="form-control" id="" placeholder=" " style="width:20%">
                                                </div>
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" id="" placeholder=" ">
                                                    <input type="text" class="form-control" id="" placeholder=" " style="width:20%">
                                                </div>
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" id="" placeholder=" ">
                                                    <input type="text" class="form-control" id="" placeholder=" " style="width:20%">
                                                </div>
                                        </form>


                                        <form class="form-inline">
                                                
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" id="" placeholder="" >
                                                    <input type="text" class="form-control" id="" placeholder=" " style="width:20%">
                                                </div>

                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" id="" placeholder=" " >
                                                    <input type="text" class="form-control" id="" placeholder=" " style="width:20%">
                                                </div>
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" id="" placeholder=" ">
                                                    <input type="text" class="form-control" id="" placeholder=" " style="width:20%">
                                                </div>
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" id="" placeholder=" ">
                                                    <input type="text" class="form-control" id="" placeholder=" " style="width:20%">
                                                </div>
                                        </form>


                                        <form class="form-inline">
                                                
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" id="" placeholder="" >
                                                    <input type="text" class="form-control" id="" placeholder=" " style="width:20%">
                                                </div>

                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" id="" placeholder=" " >
                                                    <input type="text" class="form-control" id="" placeholder=" " style="width:20%">
                                                </div>
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" id="" placeholder=" ">
                                                    <input type="text" class="form-control" id="" placeholder=" " style="width:20%">
                                                </div>
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" id="" placeholder=" ">
                                                    <input type="text" class="form-control" id="" placeholder=" " style="width:20%">
                                                </div>
                                        </form>


                                                          
                                                                            
                                </div>
                            </div>
                        </div>

                </div>


                <div class="emp_profile_tab2 container pb-5 pt-5" id="panel-2">
                        <div class="container">
                          <div class="d-flex flex-column pb-4">
                              <p class="text-center">BALANCE FORWARD </p>
                              <h4 class="text-center"><span>8.0 |</span> <span>8.0 |</span> <span>8.0 |</span> <span>8.0 |</span></h4>
                          </div>
                            <div class="row">

                                            <div class="col-lg-2">
                                                    <div class="d-flex flex-column">
                                                        <p style="color:#54A04B">Month</p>
                                                        <p >January</p>
                                                        <p>Febuary</p>
                                                        <p>March</p>
                                                        <p>April</p>
                                                        <p>May</p>
                                                        <p>June</p>
                                                        <p>July</p>
                                                        <p>August</p>
                                                        <p>September</p>
                                                        <p>October</p>
                                                        <p>November</p>
                                                        <p>December</p>
                                                    </div>
                                            </div>

                                    <div class="col-lg-10">  
                                                                <div class="d-flex align-items-center justify-content-around">
                                                                    <p style="color:#54A04B">VACATION LEAVE</p>
                                                                    <p style="color:#54A04B">SICK LEAVE</p>
                                                                    <p style="color:#54A04B">SPECIAL PRIVILEDGE LEAVE</p>
                                                                    <p style="color:#54A04B">LEAVE WITHOUT PAY</p>
                                                                </div>
                                                                    <form class="form-inline">
                                                
                                                                            <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                                                <input type="text" class="form-control" id="" placeholder="" >
                                                                                <input type="text" class="form-control" id="" placeholder=" " style="width:20%">
                                                                            </div>

                                                                            <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                                                <input type="text" class="form-control" id="" placeholder=" " >
                                                                                <input type="text" class="form-control" id="" placeholder=" " style="width:20%">
                                                                            </div>
                                                                            <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                                                <input type="text" class="form-control" id="" placeholder=" ">
                                                                                <input type="text" class="form-control" id="" placeholder=" " style="width:20%">
                                                                            </div>
                                                                            <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                                                <input type="text" class="form-control" id="" placeholder=" ">
                                                                                <input type="text" class="form-control" id="" placeholder=" " style="width:20%">
                                                                            </div>
                                                                    </form>

                                            <form class="form-inline">
                                                
                                                            <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                                <input type="text" class="form-control" id="" placeholder="" >
                                                                <input type="text" class="form-control" id="" placeholder=" " style="width:20%">
                                                            </div>

                                                            <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                                <input type="text" class="form-control" id="" placeholder=" " >
                                                                <input type="text" class="form-control" id="" placeholder=" " style="width:20%">
                                                            </div>
                                                            <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                                <input type="text" class="form-control" id="" placeholder=" ">
                                                                <input type="text" class="form-control" id="" placeholder=" " style="width:20%">
                                                            </div>
                                                            <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                                <input type="text" class="form-control" id="" placeholder=" ">
                                                                <input type="text" class="form-control" id="" placeholder=" " style="width:20%">
                                                            </div>
                                        </form>

                                        <form class="form-inline">
                                                
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" id="" placeholder="" >
                                                    <input type="text" class="form-control" id="" placeholder=" " style="width:20%">
                                                </div>

                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" id="" placeholder=" " >
                                                    <input type="text" class="form-control" id="" placeholder=" " style="width:20%">
                                                </div>
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" id="" placeholder=" ">
                                                    <input type="text" class="form-control" id="" placeholder=" " style="width:20%">
                                                </div>
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" id="" placeholder=" ">
                                                    <input type="text" class="form-control" id="" placeholder=" " style="width:20%">
                                                </div>
                                        </form>

                                        <form class="form-inline">
                                                
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" id="" placeholder="" >
                                                    <input type="text" class="form-control" id="" placeholder=" " style="width:20%">
                                                </div>

                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" id="" placeholder=" " >
                                                    <input type="text" class="form-control" id="" placeholder=" " style="width:20%">
                                                </div>
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" id="" placeholder=" ">
                                                    <input type="text" class="form-control" id="" placeholder=" " style="width:20%">
                                                </div>
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" id="" placeholder=" ">
                                                    <input type="text" class="form-control" id="" placeholder=" " style="width:20%">
                                                </div>
                                        </form>


                                        <form class="form-inline">
                                                
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" id="" placeholder="" >
                                                    <input type="text" class="form-control" id="" placeholder=" " style="width:20%">
                                                </div>

                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" id="" placeholder=" " >
                                                    <input type="text" class="form-control" id="" placeholder=" " style="width:20%">
                                                </div>
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" id="" placeholder=" ">
                                                    <input type="text" class="form-control" id="" placeholder=" " style="width:20%">
                                                </div>
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" id="" placeholder=" ">
                                                    <input type="text" class="form-control" id="" placeholder=" " style="width:20%">
                                                </div>
                                        </form>


                                        <form class="form-inline">
                                                
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" id="" placeholder="" >
                                                    <input type="text" class="form-control" id="" placeholder=" " style="width:20%">
                                                </div>

                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" id="" placeholder=" " >
                                                    <input type="text" class="form-control" id="" placeholder=" " style="width:20%">
                                                </div>
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" id="" placeholder=" ">
                                                    <input type="text" class="form-control" id="" placeholder=" " style="width:20%">
                                                </div>
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" id="" placeholder=" ">
                                                    <input type="text" class="form-control" id="" placeholder=" " style="width:20%">
                                                </div>
                                        </form>


                                        <form class="form-inline">
                                                
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" id="" placeholder="" >
                                                    <input type="text" class="form-control" id="" placeholder=" " style="width:20%">
                                                </div>

                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" id="" placeholder=" " >
                                                    <input type="text" class="form-control" id="" placeholder=" " style="width:20%">
                                                </div>
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" id="" placeholder=" ">
                                                    <input type="text" class="form-control" id="" placeholder=" " style="width:20%">
                                                </div>
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" id="" placeholder=" ">
                                                    <input type="text" class="form-control" id="" placeholder=" " style="width:20%">
                                                </div>
                                        </form>


                                        <form class="form-inline">
                                                
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" id="" placeholder="" >
                                                    <input type="text" class="form-control" id="" placeholder=" " style="width:20%">
                                                </div>

                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" id="" placeholder=" " >
                                                    <input type="text" class="form-control" id="" placeholder=" " style="width:20%">
                                                </div>
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" id="" placeholder=" ">
                                                    <input type="text" class="form-control" id="" placeholder=" " style="width:20%">
                                                </div>
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" id="" placeholder=" ">
                                                    <input type="text" class="form-control" id="" placeholder=" " style="width:20%">
                                                </div>
                                        </form>


                                        <form class="form-inline">
                                                
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" id="" placeholder="" >
                                                    <input type="text" class="form-control" id="" placeholder=" " style="width:20%">
                                                </div>

                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" id="" placeholder=" " >
                                                    <input type="text" class="form-control" id="" placeholder=" " style="width:20%">
                                                </div>
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" id="" placeholder=" ">
                                                    <input type="text" class="form-control" id="" placeholder=" " style="width:20%">
                                                </div>
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" id="" placeholder=" ">
                                                    <input type="text" class="form-control" id="" placeholder=" " style="width:20%">
                                                </div>
                                        </form>


                                        <form class="form-inline">
                                                
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" id="" placeholder="" >
                                                    <input type="text" class="form-control" id="" placeholder=" " style="width:20%">
                                                </div>

                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" id="" placeholder=" " >
                                                    <input type="text" class="form-control" id="" placeholder=" " style="width:20%">
                                                </div>
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" id="" placeholder=" ">
                                                    <input type="text" class="form-control" id="" placeholder=" " style="width:20%">
                                                </div>
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" id="" placeholder=" ">
                                                    <input type="text" class="form-control" id="" placeholder=" " style="width:20%">
                                                </div>
                                        </form>


                                        <form class="form-inline">
                                                
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" id="" placeholder="" >
                                                    <input type="text" class="form-control" id="" placeholder=" " style="width:20%">
                                                </div>

                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" id="" placeholder=" " >
                                                    <input type="text" class="form-control" id="" placeholder=" " style="width:20%">
                                                </div>
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" id="" placeholder=" ">
                                                    <input type="text" class="form-control" id="" placeholder=" " style="width:20%">
                                                </div>
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" id="" placeholder=" ">
                                                    <input type="text" class="form-control" id="" placeholder=" " style="width:20%">
                                                </div>
                                        </form>


                                                          
                                                                            
                                </div>
                            </div>
                        </div>

                </div>
    </div>

   
                        <!--File uploaad-->
                    <div class=" emp_profile_section2_tab  pt-4 " id="tab-3">  
                     
                            <div class="row">
                                <div class="col-lg-9">
                                        <div class="emp_profile_section2_header">
                                            <h3 class="p-2 m-2" > FILE 201 </h3>
                                        </div>
                                </div>
                            </div>
                       
                        <div class="container ">

                        </div>
                    </div>
                  

                    <div class="text-right">
                        <button class="btn m-2" style="background: #345587;color:#fff;";>PREV</button>
                        <button class="btn m-2" style="background: #345587; color:#fff";>NEXT</button>
                    </div>

                           
                    </div>  <!-- /#page-content-wrapper -->
  </div> <!-- /#wrapper -->


  
<script>
function openpanel(index) {
  var i;
  var x = document.getElementsByClassName("emp_profile_section2 ");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  document.getElementById(index).style.display = "block";
}

$(document).on('click','button',function(){
    $(this).addClass('active').siblings().removeClass('active');
});

</script>



<script>
function opentab(index) {
  var i;
  var x = document.getElementsByClassName("emp_profile_section2_tab ");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  document.getElementById(index).style.display = "block";
}

$(document).on('click','.emp_profile_section1_tab',function(){
    $(this).addClass('active').siblings().removeClass('active');
});
</script>

<script>
function openpanel2(index) {
  var i;
  var x = document.getElementsByClassName("emp_profile_tab2");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  document.getElementById(index).style.display = "block";
}

$(document).on('click','button',function(){
    $(this).addClass('active').siblings().removeClass('active');
});

</script>
