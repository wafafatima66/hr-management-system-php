<?php
  require '../includes/conn.php';

  //fetching pds data

  
  $query = "SELECT * FROM pds WHERE emp_id = '$emp_id'";

  $runquery = $conn -> query($query);
  if($runquery == true){
   
      echo"ryt";
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
    explode(",",$emp_resi_add);

    $emp_resi_add_title=$emp_resi_add[0];
    $emp_resi_add_street = $emp_resi_add[1];
    $emp_resi_add_subdivision = $emp_resi_add[2];
    $emp_resi_add_barangay = $emp_resi_add[3];
    $emp_resi_add_municipal = $emp_resi_add[4];
    $emp_resi_add_province = $emp_resi_add[5];
    $emp_resi_add_zipcode = $emp_resi_add[6];

    $emp_per_add = $data["emp_per_add"];
    explode(",",$emp_resi_add);

    $emp_per_add_title=$emp_per_add[0];
    $emp_per_add_street = $emp_per_add[1];
    $emp_per_add_subdivision = $emp_per_add[2];
    $emp_per_add_barangay = $emp_per_add[3];
    $emp_per_add_municipal = $emp_per_add[4];
    $emp_per_add_province = $emp_per_add[5];
    $emp_per_add_zipcode = $emp_per_add[6];

    $emp_contact = $data["emp_contact"];
    explode(",",$emp_contact);

    $emp_tel_no = $emp_contact[0];
    $emp_mb_no = $emp_contact[1];
    $emp_email = $data["emp_email"];

      /*$emp_contact_gs = "GSIS ID No.";
    $emp_contact_pag = "PAG-IBIG ID No.";
    $emp_contact_ph = "PHILHEALTH No.";
    $emp_contact_ss = "SSS ID No.";
    $emp_contact_tin = "TIN No.";
    $emp_contact_agency = "AGENCY EMPLOYEE No.";*/
  
  }
}



//fetching data of family-background


$query = "SELECT * FROM family_background WHERE emp_id = '$emp_id'";

$runquery = $conn -> query($query);
if($runquery == true){
 
    echo"ryt";
while($data = $runquery -> fetch_assoc()){

  $emp_sp_name = $data["emp_sp_name"];
  explode(",",$emp_sp_name);

  $emp_spouse_lastname = $emp_sp_name[0];
  $emp_spouse_firstname = $emp_sp_name[1];
  $emp_spouse_middlename = $emp_sp_name[2];
  $emp_spouse_extname = $emp_sp_name[3];

  $emp_sp_occupation = $data["emp_sp_occupation"];
  $emp_sp_employer = $data["emp_sp_employer"];
  $emp_sp_add = $data["emp_sp_add"];
  $emp_sp_tel = $data["emp_sp_tel"];

  $emp_father_name= $data["emp_father_name"];
  explode(",",$emp_father_name);

  $emp_father_lastname = $emp_father_name[0];
  $emp_father_firstname = $emp_father_name[1];
  $emp_father_middlename = $emp_father_name[2];
  $emp_father_extname = $emp_father_name[3];

  $emp_mother_name= $data["emp_mother_name"];
  explode(",",$emp_mother_name);

  $emp_mother_lastname = $emp_mother_name[0];
  $emp_mother_firstname = $emp_mother_name[1];
  $emp_mother_middlename = $emp_mother_name[2];
  $emp_mother_extname = $emp_mother_name[3];
}
}

//fetch data from civil service


  $query = "SELECT * FROM civil_service WHERE emp_id = '$emp_id'";

  $runquery = $conn -> query($query);
  if($runquery == true){
   
      echo"ryt";
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
   
      echo"ryt";
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
   
      echo"ryt";
  while($data = $runquery -> fetch_assoc()){

    $name_org = $data["name_org"];
    $org_add = $data["org_add"];
    $no_of_hrs = $data["no_of_hrs"];
    $position_vol = $data["position"];
  }
}

?>