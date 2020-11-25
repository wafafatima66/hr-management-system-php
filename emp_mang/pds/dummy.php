
                ON DUPLICATE KEY UPDATE
                from_date = '$from_date',
                to_date = '$to_date',
                position = '$position',
                employer = '$employer',
                govt_service = '$govt_service',
                monthly_sal = '$monthly_sal',
                increment = '$increment' ,
                status = '$status' ,
                office_assign = '$office_assign' 


                
                ON DUPLICATE KEY UPDATE
                type_of = '$type_of',
                name_of_exam = '$name_of_exam',
                rating = '$rating',
                exam_date = '$exam_date',
                exam_place = '$exam_place',
                licence_no = '$licence_no',
                licence_val = '$licence_val'

                
                ON DUPLICATE KEY UPDATE
                name_org = '$name_org',
                org_add = '$org_add',
                from_date = '$from_date',
                to_date = '$to_date',
                no_of_hrs = '$no_of_hrs',
                position = '$position' 

                
                ON DUPLICATE KEY UPDATE
                emp_gov_id = '$emp_gov_id',
                emp_passport_no = '$emp_passport_no',
                emp_place_of_insurance = '$emp_place_of_insurance',
                ref_full_name = '$ref_full_name',
                ref_add = '$ref_add',
                ref_tel = '$ref_tel'
                
if(isset($_GET['emp_id'])){
    
    $emp_id=$_GET['emp_id'];

    echo $emp_id;
    
    require '../includes/conn.php';
   
                     
    $query = "SELECT * FROM civil_service WHERE emp_id = $emp_id";

    $runquery = $conn -> query($query);
    if($runquery == true){
        
    while($data = $runquery -> fetch_assoc()){
 
    
        $type_of = $data["type_of"];
        $name_of_exam = $data["name_of_exam"];
        $rating = $data["rating"];
        $exam_date = $data["exam_date"];
        $exam_place = $data["exam_place"];
        $licence_no = $data["licence_no"];
        $licence_val = $data["licence_val"];
   

    
 
 
 }
    }

    $query = "SELECT * FROM voluntary_works WHERE emp_id = $emp_id";

    $runquery = $conn -> query($query);
    if($runquery == true){
        
    while($data = $runquery -> fetch_assoc()){
 
    
        $name_org = $data["name_org"];
        $org_add = $data["org_add"];
        $no_of_hrs = $data["no_of_hrs"];
        $position_vol = $data["position_"];
       

 
 }
    }

  

  

   
} else {

    //pds 
    $emp_gender = "";
    $emp_civil_status ="";
    $emp_height = "";
    $emp_weight = "";
    $emp_blood = "";
    $emp_citizen = "";
    $emp_citizen_chk = "";
    $emp_dual_citizen = "";
    $emp_resi_add ="House/Block/Lot No";
    $emp_resi_add_street = "Street";
    $emp_resi_add_subdivision = "Subdivision/Village";
    $emp_resi_add_barangay = "Barangay";
    $emp_resi_add_municipal = "Municipal/City";
    $emp_resi_add_province = "Province";
    $emp_resi_add_zipcode = "Zip Code";
    $emp_per_add ="House/Block/Lot No";
    $emp_per_add_street = "Street";
    $emp_per_add_subdivision = "Subdivision/Village";
    $emp_per_add_barangay = "Barangay";
    $emp_per_add_municipal = "Municipal/City";
    $emp_per_add_province = "Province";
    $emp_per_add_zipcode ="Zip Code";
    $emp_tel_no = "";
    $emp_mb_no = "";
    $emp_email = "";
    $emp_contact_gs = "GSIS ID No.";
    $emp_contact_pag = "PAG-IBIG ID No.";
    $emp_contact_ph = "PHILHEALTH No.";
    $emp_contact_ss = "SSS ID No.";
    $emp_contact_tin = "TIN No.";
    $emp_contact_agency = "AGENCY EMPLOYEE No.";

    //family-background
    $emp_spouse_lastname = "Surname";
    $emp_spouse_firstname ="First";
    $emp_spouse_middlename = "Middle";
    $emp_spouse_extname = "Ext";
    $emp_sp_occupation = "";
    $emp_sp_employer = "";
    $emp_sp_add = "";
    $emp_sp_tel = "";
    $emp_father_lastname = "Surname";
    $emp_father_firstname = "First";
    $emp_father_middlename = "Middle";
    $emp_father_extname = "Ext";
    $emp_mother_lastname ="Surname";
    $emp_mother_firstname = "First";
    $emp_mother_middlename = "Middle";
    $emp_mother_extname = "Ext";


    //civil-service 
    $type_of = "";
    $name_of_exam ="";
    $rating = "";
    $exam_date = "";
    $exam_place = "";
    $licence_no = "";
    $licence_val = "";

    //work experience
    $position = "";
    $employer ="";
    $monthly_sal = "";
    $increment = "";
    
    //voluntary works
    $name_org = "";
    $org_add ="";
    $no_of_hrs = "";
    $position_vol = "";
    

}


//pdo

<div class="emp_profile_section2 pt-4 pb-4 mb-4" id="content-1" style="display:block;">   
           

           <form class="form-inline" method ="POST" action="pds/pds-config.php">   

                 
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
                       <input type="text"  class="form-control" style="width:90px;" name="emp_civil_status" placeholder="<?php echo  $emp_civil_status ?>">
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
                           <input type="text" class="form-control" style="width:100px;"id="" placeholder="<?php echo  $emp_resi_add ?>" name="emp_resi_add">
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
                       <input type="text" class="form-control" style="width:100px;"id="" placeholder="<?php echo  $emp_per_add ?>" name="emp_per_add">
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
                           <input type="text" class="form-control" style="width:100px;"id="" placeholder="<?php echo  $emp_contact_agency ?>" name="emp_contact_agency">
                           </div>
                       
                   
               </div>
          </div>

          <div class="container">
          <div class="text-right">
                   <!--<button class="btn m-2" style="background: #345587;color:#fff;" type ="submit">PREV</button>-->
                   <button  type ="submit" name="submit" class="btn m-2" style="background: #345587; color:#fff;" >SUBMIT</button>
               </div>
               
          </div>
            
    
       </div>
       </form> 


       