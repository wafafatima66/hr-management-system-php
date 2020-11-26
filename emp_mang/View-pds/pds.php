
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


            <?php
        if(isset($_POST['update'])){

        $emp_id = $_REQUEST["emp_id"];


        if(isset($_POST["emp_gender"]) || isset($_POST["emp_resi_add"]) || isset($_POST["emp_contact_gs"])  || isset($_POST["emp_civil_status"])){

            $emp_gender=$_POST['emp_gender'];
            $emp_civil_status=$_POST['emp_civil_status'];
            $emp_dob=$_POST['emp_dob'];
            $emp_height=$_POST['emp_height'];
            $emp_weight=$_POST['emp_weight'];
            $emp_blood=$_POST['emp_blood'];
            $emp_email = $_POST['emp_email']; 
        
            $emp_tel_no = $_POST['emp_tel_no'];
            $emp_mb_no = $_POST['emp_mb_no'];
        
            $emp_citizen=$_POST['emp_citizen']; 
            $emp_dual_citizen=$_POST['emp_dual_citizen'];
        
            
        
            $emp_resi_add=$_POST['emp_resi_add'];
            $emp_resi_add_street=$_POST['emp_resi_add_street'];
            $emp_resi_add_subdivision=$_POST['emp_resi_add_subdivision'];
            $emp_resi_add_barangay=$_POST['emp_resi_add_barangay'];
            $emp_resi_add_municipal=$_POST['emp_resi_add_municipal'];
            $emp_resi_add_province=$_POST['emp_resi_add_province'];
            $emp_resi_add_zipcode=$_POST['emp_resi_add_zipcode'];
        
            $emp_per_add=$_POST['emp_per_add'];
            $emp_per_add_street=$_POST['emp_per_add_street'];
            $emp_per_add_subdivision=$_POST['emp_per_add_subdivision'];
            $emp_per_add_barangay=$_POST['emp_per_add_barangay'];
            $emp_per_add_municipal=$_POST['emp_per_add_municipal'];
            $emp_per_add_province=$_POST['emp_per_add_province'];
            $emp_per_add_zipcode=$_POST['emp_per_add_zipcode'];
            
               $emp_contact_gs = $_POST['emp_contact_gs'];
            $emp_contact_pag = $_POST['emp_contact_pag'];
            $emp_contact_ph = $_POST['emp_contact_ph'];
            $emp_contact_ss = $_POST['emp_contact_ss'];
            $emp_contact_tin = $_POST['emp_contact_tin'];
            $emp_contact_agency = $_POST['emp_contact_agency'];

    $upquery = "UPDATE pds  SET emp_gender= '$emp_gender', emp_civil_status ='$emp_civil_status' , emp_dob ='$emp_dob' , emp_height ='$emp_height' , emp_weight ='$emp_weight' , emp_blood ='$emp_blood' , emp_email ='$emp_email', emp_tel_no= '$emp_tel_no', emp_mb_no ='$emp_mb_no' , emp_citizen ='$emp_citizen' , emp_dual_citizen ='$emp_dual_citizen' , emp_citizen_chk ='$emp_citizen_chk' , emp_resi_add ='$emp_resi_add' , emp_resi_add_street ='$emp_resi_add_street', emp_resi_add_subdivision= '$emp_resi_add_subdivision', emp_resi_add_barangay ='$emp_resi_add_barangay' , emp_resi_add_municipal ='$emp_resi_add_municipal' , emp_resi_add_province ='$emp_resi_add_province', emp_resi_add_zipcode ='$emp_resi_add_zipcode' , emp_per_add ='$emp_per_add' , emp_per_add_street ='$emp_per_add_street', emp_per_add_subdivision= '$emp_per_add_subdivision', emp_per_add_barangay ='$emp_per_add_barangay' , emp_per_add_municipal ='$emp_per_add_municipal' , emp_per_add_province ='$emp_per_add_province',  emp_per_add_zipcode ='$emp_per_add_zipcode', emp_contact_gs= '$emp_contact_gs', emp_contact_pag ='$emp_contact_pag' , emp_contact_ph ='$emp_contact_ph' , emp_contact_ss ='$emp_contact_ss',  emp_contact_tin ='$emp_contact_tin' , emp_contact_agency ='$emp_contact_agency'   WHERE emp_id = $emp_id";
    
    $runupquery = $conn -> query($upquery);
    if($runupquery==true){
        echo'<p class="alert alert-success h6">UPDATED </p>';
    } else echo'<p class="alert alert-danger h6"> NOT UPDATED </p>';

}
}

    ?>
           

                <form class="form-inline" method="post" action="">   

                      
                <div class="container ">
                        <div class="row ">
                            <div class="col-lg-9 form-inline">

                           

                            <div class="form-group mx-sm-2 mb-2">
                                <label for="">NAME</label>
                                <input type="text" class="form-control" style="width:100px;"id="" value="<?php echo $emp_first_name?>" name="emp_first_name" >
                            </div>

                            <div class="form-group mx-sm-2 mb-2">
                                <input type="text" class="form-control" style="width:100px;"id="" value="<?php echo  $emp_last_name ?>" name="emp_last_name">
                            </div>

                            <div class="form-group mx-sm-2 mb-2">
                            <input type="text" class="form-control" style="width:100px;"id="" value="<?php echo  $emp_middle_name ?>" name="emp_middle_name">
                            </div>

                            <div class="form-group mx-sm-2 mb-2">
                            <input type="text" class="form-control" style="width:50px;" id="" value="<?php echo $mydata["emp_ext"];?>" name="emp_ext">
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
                            <select class="form-control" style="width:100px;" name="emp_gender" value="<?php echo  $emp_gender ?>">
                                <option value = "0 ">SELECT</option>
                                <option value = "male">MALE</option>
                                <option value = "female">FEMALE</option>
                            </select>
                            </div>
                  

                       
                            <div class="form-group mx-sm-1 mb-2">
                            <label for="">CIVIL STATUS</label>
                            <input type="text"  class="form-control" style="width:80px;" name="emp_civil_status" value="<?php echo  $emp_civil_status ?>" name="<?php echo  $emp_civil_status ?>">
                            </div>
                            
                            <div class="form-group mx-sm-2 mb-2">
                                <label for="">DATE OF BIRTH</label>
                                <input type="date"  class="form-control" style="width:120px;"  name="emp_dob">
                            </div>

                            <div class="form-group mx-sm-1 mb-2">
                            <label for="">HEIGHT</label>
                                <input type="text" class="form-control" style="width:40px;" id="" value="<?php echo  $emp_height ?>" name="emp_height">
                            </div>

                            <div class="form-group mx-sm-1 mb-2">
                            <label for="">WEIGHT</label>
                            <input type="text" class="form-control" style="width:40px;" id="" value="<?php echo  $emp_weight ?>" name="emp_weight">
                            </div>

                            <div class="form-group mx-sm-1 mb-2">
                            <label for="">BLOOD TYPE</label>
                                <input type="text" class="form-control" style="width:40px;" id="" value="<?php echo  $emp_blood ?>" name="emp_blood">
                            </div>
                      
                    </div>

                    <div class="col-lg-3 p-0 m-0 form-inline" style="background-color:#F4FBFF">
                   
                        <div class="form-group mx-sm-1 mb-2">
                            <label for="">CITIZENSHIP</label>
                                <input type="text" class="form-control" style="width:100px;" id="" value="<?php echo  $emp_citizen ?>" name="emp_citizen">
                        </div>

                        <div class="form-check mx-sm-1 mb-2">
                            <input class="form-check-input" type="checkbox" value="by_birth" name="emp_citizen_chk[]" value="<?php echo  $emp_citizen_chk ?>">
                            <label class="form-check-label" > By Birth</label>
                        </div>

                        <div class="form-check mx-sm-1 mb-2">
                            <input class="form-check-input" type="checkbox" value="by_nature" name="emp_citizen_chk[]" value="<?php echo  $emp_citizen_chk ?>">
                            <label class="form-check-label" >By Naturalization</label>
                        </div>

                        <div class="form-group mx-sm-1 mb-2">
                            <input type="text" class="form-control" style="width:200px;" id="" value="Indicate Country If dual Citizenship" name="emp_dual_citizen" value="<?php echo  $emp_dual_citizen ?>">
                        </div>

                    
                </div>

                </div>

            
                                                

                
                    <div class="row">
                       
                            <div class="form-group mx-sm-3 mb-2">
                                <label for="">RESIDENTIAL ADDRESS</label>
                                <input type="text" class="form-control" style="width:100px;"id="" value="<?php echo  $emp_resi_add ?>" name="emp_resi_add">
                            </div>

                            <div class="form-group mx-sm-1 mb-2">
                                <input type="text" class="form-control" style="width:100px;"id="" value="<?php echo  $emp_resi_add_street ?>" name="emp_resi_add_street">
                            </div>

                            <div class="form-group mx-sm-1 mb-2">
                                <input type="text" class="form-control" style="width:120px;"id="" value="<?php echo  $emp_resi_add_subdivision ?>" name="emp_resi_add_subdivision">
                            </div>

                            <div class="form-group mx-sm-1 mb-2">
                            <input type="text" class="form-control" style="width:100px;"id="" value="<?php echo  $emp_resi_add_barangay ?>" name="emp_resi_add_barangay">
                            </div>

                            <div class="form-group mx-sm-1 mb-2">
                            <input type="text" class="form-control" style="width:100px;"id="" value="<?php echo  $emp_resi_add_municipal ?>" name="emp_resi_add_municipal">
                            </div>

                            <div class="form-group mx-sm-1 mb-2">
                            <input type="text" class="form-control" style="width:100px;"id="" value="<?php echo  $emp_resi_add_province ?>" name="emp_resi_add_province">
                            </div>

                            <div class="form-group mx-sm-1 mb-2">
                                <input type="text" class="form-control" style="width:90px;"id="" value="<?php echo  $emp_resi_add_zipcode ?>" name="emp_resi_add_zipcode">
                            </div>
                           
                    </div>


                    <div class="row">
                 
                        <div class="form-group mx-sm-3 mb-2">
                            <label for="">PERMANENT ADDRESS</label>
                            <input type="text" class="form-control" style="width:100px;"id="" value="<?php echo  $emp_per_add ?>" name="emp_per_add">
                        </div>

                        <div class="form-group mx-sm-1 mb-2">
                            <input type="text" class="form-control" style="width:100px;"id="" value="<?php echo  $emp_per_add_street ?>"  name="emp_per_add_street">
                        </div>

                        <div class="form-group mx-sm-1 mb-2">
                            <input type="text" class="form-control" style="width:120px;"id="" value="<?php echo  $emp_per_add_subdivision ?>" name="emp_per_add_subdivision">
                        </div>
                        
                        <div class="form-group mx-sm-1 mb-2">
                        <input type="text" class="form-control" style="width:100px;" id="" value="<?php echo  $emp_per_add_barangay ?>" name="emp_per_add_barangay">
                        </div>

                        <div class="form-group mx-sm-1 mb-2">
                        <input type="text" class="form-control" style="width:100px;"id="" value="<?php echo  $emp_per_add_municipal ?>" name="emp_per_add_municipal">
                        </div>

                        <div class="form-group mx-sm-1 mb-2">
                        <input type="text" class="form-control" style="width:100px;"id="" value="<?php echo  $emp_per_add_province ?>" name="emp_per_add_province">
                        </div> 

                        <div class="form-group mx-sm-1 mb-2">
                            <input type="text" class="form-control" style="width:90px;"id="" value="<?php echo  $emp_per_add_zipcode ?>" name="emp_per_add_zipcode">
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
                                        <input type="text" class="form-control" style="width:100px;"id="" value="<?php echo  $emp_tel_no ?>" name="emp_tel_no">
                                        <label for="">Telephone No.</label>
                                    </div>
                                </div>

                                <div class="form-group mx-sm-1 mb-2">
                                    <div class="d-flex flex-column">
                                        <input type="text" class="form-control" style="width:100px;"id="" value="<?php echo  $emp_mb_no ?>" name="emp_mb_no">
                                        <label for="">Mobile No.</label>
                                    </div>
                                </div>

                                <div class="form-group mx-sm-1 mb-2">
                                    <div class="d-flex flex-column">
                                        <input type="text" class="form-control" style="width:90px;"id="" value="<?php echo  $emp_email ?>" name="emp_email">
                                        <label for="">Email Address</label>
                                    </div>
                                </div>
                             </div>
                   

                    <div class="col-lg-5 form-inline " style="background-color:#E6F7FF; ">

                                 <div class="form-group mx-sm-1 mb-1" >
                                <input type="text" class="form-control" style="width:100px;"id="" value="<?php echo  $emp_contact_gs ?>" name="emp_contact_gs">
                                </div>

                                <div class="form-group mx-sm-1 mb-1">
                                <input type="text" class="form-control" style="width:100px;"id="" value="<?php echo  $emp_contact_pag ?>" name="emp_contact_pag">
                                </div>

                                <div class="form-group mx-sm-1 mb-1">
                                <input type="text" class="form-control" style="width:100px;"id="" value="<?php echo  $emp_contact_ph ?>" name="emp_contact_ph">
                                </div>
                            
                                <div class="form-group mx-sm-1 mb-1" >
                                <input type="text" class="form-control" style="width:100px;"id="" value="<?php echo  $emp_contact_ss ?>" name="emp_contact_ss">
                                </div>

                                <div class="form-group mx-sm-1 mb-1">
                                <input type="text" class="form-control" style="width:100px;"id="" value="<?php echo  $emp_contact_tin ?>" name="emp_contact_tin">
                                </div>

                                <div class="form-group mx-sm-1 mb-1">
                                <input type="text" class="form-control" style="width:100px;"id="" value="<?php echo  $emp_contact_tin ?>" name="emp_contact_agency">
                                </div>
                            
                        
                    </div>
               </div>

                
                 
         
            </div>

            <div class="container">
                    <div class="text-right">
                    
                    <button  type ="submit" name="update" class="btn m-2" style="background: #345587; color:#fff";>UPDATE</button>

                    </div>
            </form>       

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
