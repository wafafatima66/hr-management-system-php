<?php
  require '../includes/conn.php';

  //fetching pds data

  
  $query = "SELECT * FROM pds WHERE emp_id = '$emp_id'";

  $runquery = $conn -> query($query);
  if($runquery == true){
   
      
  while($data = $runquery -> fetch_assoc()){


    $emp_gender = $data["emp_gender"];
    $emp_civil_status = $data["emp_civil_status"];
    $emp_height = $data["emp_height"];
    $emp_weight = $data["emp_weight"];
    $emp_blood = $data["emp_blood"];
    $emp_citizen = $data["emp_citizen"];
    $emp_dual_citizen = $data["emp_dual_citizen"];

    
    $emp_citizen_chk = $data["emp_citizen_chk"];
    $emp_resi_add = $data["emp_resi_add"];
    $emp_resi_add_street = $data["emp_resi_add_street"];
    $emp_resi_add_subdivision = $data["emp_resi_add_subdivision"];
    $emp_resi_add_barangay = $data["emp_resi_add_barangay"];
    $emp_resi_add_municipal = $data["emp_resi_add_municipal"];
    $emp_resi_add_province = $data["emp_resi_add_province"];

    $emp_resi_add_zipcode = $data["emp_resi_add_zipcode"];
    $emp_per_add = $data["emp_per_add"];
    $emp_per_add_street = $data["emp_per_add_street"];
    $emp_per_add_subdivision = $data["emp_per_add_subdivision"];
    $emp_per_add_barangay = $data["emp_per_add_barangay"];
    $emp_per_add_municipal = $data["emp_per_add_municipal"];
    $emp_per_add_province = $data["emp_per_add_province"];

    $emp_per_add_zipcode = $data["emp_per_add_zipcode"];
    $emp_tel_no = $data["emp_tel_no"];
    $emp_mb_no = $data["emp_mb_no"];
    $emp_email = $data["emp_email"];

      $emp_contact_gs = $data["emp_contact_gs"];
    $emp_contact_pag = $data["emp_contact_pag"];
    $emp_contact_ph = $data["emp_contact_ph"];
    $emp_contact_ss = $data["emp_contact_ss"];
    $emp_contact_tin = $data["emp_contact_tin"];
    $emp_contact_agency = $data["emp_contact_agency"];

    
    $emp_sex = $data["emp_sex"];

  
  
  }
}



//fetching data of family-background


$query = "SELECT * FROM family_background WHERE emp_id = '$emp_id'";

$runquery = $conn -> query($query);
if($runquery == true){
 
   
while($data = $runquery -> fetch_assoc()){


  $emp_spouse_lastname = $data["emp_spouse_lastname"];
  $emp_spouse_firstname = $data["emp_spouse_firstname"];
  $emp_spouse_middlename = $data["emp_spouse_middlename"];
  $emp_spouse_extname = $data["emp_spouse_extname"];
  $emp_sp_occupation = $data["emp_sp_occupation"];
  $emp_sp_employer = $data["emp_sp_employer"];
  $emp_sp_add = $data["emp_sp_add"];
  $emp_sp_tel = $data["emp_sp_tel"];
  $emp_father_lastname = $data["emp_father_lastname"];
  $emp_father_firstname = $data["emp_father_firstname"];
  $emp_father_middlename = $data["emp_father_middlename"];
  $emp_father_extname = $data["emp_father_extname"];
  $emp_mother_lastname = $data["emp_mother_lastname"];
  $emp_mother_firstname = $data["emp_mother_firstname"];
  $emp_mother_middlename = $data["emp_mother_middlename"];
  $emp_mother_extname = $data["emp_mother_extname"];
}
}



//fetching data of family-background


$query = "SELECT * FROM edu_background WHERE emp_id = '$emp_id'";

$runquery = $conn -> query($query);
if($runquery == true){
 
   
while($data = $runquery -> fetch_assoc()){


  $ele_school_name = $data["ele_school_name"];
  $ele_degree = $data["ele_degree"];
  $ele_from_date = $data["ele_from_date"];
  $ele_to_date = $data["ele_to_date"];
  $ele_units = $data["ele_units"];
  $ele_award = $data["ele_award"];
  $ele_graduation = $data["ele_graduation"];

  $sec_school_name = $data["sec_school_name"];
  $sec_degree = $data["sec_degree"];
  $sec_from_date = $data["sec_from_date"];
  $sec_to_date = $data["sec_to_date"];
  $sec_units = $data["sec_units"];
  $sec_award = $data["sec_award"];
  $sec_graduation = $data["sec_graduation"];

  $voc_school_name = $data["voc_school_name"];
  $voc_degree = $data["voc_degree"];
  $voc_from_date = $data["voc_from_date"];
  $voc_to_date = $data["voc_to_date"];
  $voc_units = $data["voc_units"];
  $voc_award = $data["voc_award"];
  $voc_graduation = $data["voc_graduation"];

  
  $coll_school_name = $data["coll_school_name"];
  $coll_degree = $data["coll_degree"];
  $coll_from_date = $data["coll_from_date"];
  $coll_to_date = $data["coll_to_date"];
  $coll_units = $data["coll_units"];
  $coll_award = $data["coll_award"];
  $coll_graduation = $data["coll_graduation"];

  $gra_school_name = $data["gra_school_name"];
  $gra_degree = $data["gra_degree"];
  $gra_from_date = $data["gra_from_date"];
  $gra_to_date = $data["gra_to_date"];
  $gra_units = $data["gra_units"];
  $gra_award = $data["gra_award"];
  $gra_graduation = $data["gra_graduation"];
}
}

//fetch data from civil service


  $query = "SELECT * FROM civil_service WHERE emp_id = '$emp_id'";

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

//fetch data from work experience
$query = "SELECT * FROM work_experience WHERE emp_id = '$emp_id'";

  $runquery = $conn -> query($query);
  if($runquery == true){
   
      
  while($data = $runquery -> fetch_assoc()){

    $position = $data["position"];
    $employer = $data["employer"];
    $monthly_sal = $data["monthly_sal"];
    $increment = $data["increment"];
  }
}


//fetch data from voluntary works 
$query = "SELECT * FROM voluntary_works WHERE emp_id = '$emp_id'";

  $runquery = $conn -> query($query);
  if($runquery == true){
   
      
  while($data = $runquery -> fetch_assoc()){

    $name_org = $data["name_org"];
    $org_add = $data["org_add"];
    $no_of_hrs = $data["no_of_hrs"];
    $position_vol = $data["position"];
  }
}


//fetch data from learning


$query = "SELECT * FROM emp_learning WHERE emp_id = '$emp_id'";

$runquery = $conn -> query($query);
if($runquery == true){
 
 
while($data = $runquery -> fetch_assoc()){


  $title_of_training = $data["title_of_training"];
  $type_of_position = $data["type_of_position"];
  $no_of_hrs = $data["no_of_hrs"];
  $learn_from_date = $data["learn_from_date"];
  $learn_to_date = $data["learn_to_date"];
  $conducted_by = $data["conducted_by"];
}
}




//fetch data from others


$query = "SELECT * FROM other_inf WHERE emp_id = '$emp_id'";

$runquery = $conn -> query($query);
if($runquery == true){
 
 
while($data = $runquery -> fetch_assoc()){

  

  $condition_1= $data["condition_1"];
  $condition_2= $data["condition_2"];
  $condition_3= $data["condition_3"];
  $condition_4= $data["condition_4"];
  $condition_5= $data["condition_5"];
  $condition_6= $data["condition_6"];
  $condition_7= $data["condition_7"];
  $condition_8= $data["condition_8"];
  $condition_9= $data["condition_9"];
  $condition_10= $data["condition_10"];
  $condition_11= $data["condition_11"];
  $condition_12= $data["condition_12"];


   if ($condition_1 == 'yes') 
    { 
     $condition_1 =  "checked='checked'"; 
    } 

    if ($condition_2 == 'yes'){
      $condition_2 =  "checked='checked'"; 
    }

    if ($condition_3 == 'yes'){
      $condition_3 =  "checked='checked'"; 
    }
    

    if ($condition_4 == 'yes'){
      $condition_4 =  "checked='checked'"; 
    }
    
    if ($condition_5 == 'yes'){
      $condition_5 =  "checked='checked'"; 
    }
    
    if ($condition_6 == 'yes'){
      $condition_6 =  "checked='checked'"; 
    }
    
    if ($condition_7 == 'yes'){
      $condition_7 =  "checked='checked'"; 
    }
    
    if ($condition_8 == 'yes'){
      $condition_8 =  "checked='checked'"; 
    }
    
    if ($condition_9 == 'yes'){
      $condition_9 =  "checked='checked'"; 
    }
    
    if ($condition_10 == 'yes'){
      $condition_10 =  "checked='checked'"; 
    }
    
    if ($condition_11 == 'yes'){
      $condition_11 =  "checked='checked'"; 
    }
    
    if ($condition_12 == 'yes'){
      $condition_12 =  "checked='checked'"; 
    }
    

  $condition_1_des = $data["condition_1_des"];
  $condition_2_des = $data["condition_2_des"];
  $condition_3_des = $data["condition_3_des"];
  $condition_4_des = $data["condition_4_des"];
  $condition_5_des = $data["condition_5_des"];
  $condition_6_des = $data["condition_6_des"];
  $condition_7_des = $data["condition_7_des"];
  $condition_8_des = $data["condition_8_des"];
  $condition_9_des = $data["condition_9_des"];
  $condition_10_des = $data["condition_10_des"];
  $condition_11_des = $data["condition_11_des"];
  $condition_12_des = $data["condition_12_des"];
  
}
}


?>

