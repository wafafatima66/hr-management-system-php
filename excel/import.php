<?php //import.php

include '../vendor/autoload.php';
include '../includes/conn.php';

$message = '';


if($_FILES["import_excel"]["name"] != '')
{
    $allowed_extension = array('xls', 'csv', 'xlsx');
    $file_array = explode(".", $_FILES["import_excel"]["name"]);
    $file_extension = end($file_array);

        $path="../uploads/";
        //$emp_id = 1;
        $file_loc = $_FILES['import_excel']['tmp_name'];
       // $file_name_1= $emp_id."-".$_FILES['import_excel']['name'];

 if(in_array($file_extension, $allowed_extension))
 {
    
  $file_name = time() . '.' . $file_extension;
  move_uploaded_file($_FILES['import_excel']['tmp_name'], $file_name);
  $file_type = \PhpOffice\PhpSpreadsheet\IOFactory::identify($file_name);
  $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader($file_type);

  $spreadsheet = $reader->load($file_name);

  unlink($file_name);

   // $workSheet = $spreadsheet->getSheet(0);
    //$cellC1 = $spreadsheet->getSheet(0)->getCell("D10")->getValue() ;
    
            $office_assign = ''; $emp_gender = ''; $emp_civil_status = '';$emp_citizen = '';
            $emp_dual_citizen = '';
            $emp_citizen_chk = '';
            $emp_sex = '';    $emp_status = '';


    $emp_id=$spreadsheet->getSheet(0)->getCell("L7")->getValue();
    // $office_assign=$spreadsheet->getSheet(0)->getCell("L7")->getValue();
    $emp_first_name=$spreadsheet->getSheet(0)->getCell("D11")->getValue();
    $emp_last_name=$spreadsheet->getSheet(0)->getCell("D10")->getValue();
    //  $emp_status=$spreadsheet->getSheet(0)->getCell("L7")->getValue();

    $emp_middle_name=$spreadsheet->getSheet(0)->getCell("D12")->getValue();
    $emp_ext=$spreadsheet->getSheet(0)->getCell("L11")->getValue();
  

    // $emp_sex=$spreadsheet->getSheet(0)->getCell("L7")->getValue();
    // $emp_gender=$spreadsheet->getSheet(0)->getCell("L7")->getValue();
    //  $emp_civil_status=$spreadsheet->getSheet(0)->getCell("L7")->getValue();
    $emp_dob=$spreadsheet->getSheet(0)->getCell("D13")->getValue();
    $emp_height=$spreadsheet->getSheet(0)->getCell("D22")->getValue();
    $emp_weight=$spreadsheet->getSheet(0)->getCell("D24")->getValue();
    $emp_blood=$spreadsheet->getSheet(0)->getCell("D25")->getValue();
    $emp_email = $spreadsheet->getSheet(0)->getCell("I34")->getValue(); 
    $emp_tel_no =$spreadsheet->getSheet(0)->getCell("I32")->getValue();
    $emp_mb_no =$spreadsheet-> getSheet(0)->getCell("I33")->getValue();
   // $emp_citizen=$spreadsheet->getSheet(0)->getCell("L7")->getValue();
   // $emp_dual_citizen=$spreadsheet->getSheet(0)->getCell("L7")->getValue();

    //$emp_citizen_chk_arr=$spreadsheet->getSheet(0)->getCell("L7")->getValue();
    //$emp_citizen_chk = implode(',',$emp_citizen_chk_arr);

    $emp_resi_add=$spreadsheet->getSheet(0)->getCell("I17")->getValue();
    $emp_resi_add_street=$spreadsheet->getSheet(0)->getCell("L17")->getValue();
    $emp_resi_add_subdivision=$spreadsheet->getSheet(0)->getCell("I20")->getValue();
    $emp_resi_add_barangay=$spreadsheet->getSheet(0)->getCell("L20")->getValue();
    $emp_resi_add_municipal=$spreadsheet->getSheet(0)->getCell("I22")->getValue();
    $emp_resi_add_province=$spreadsheet->getSheet(0)->getCell("L22")->getValue();
    $emp_resi_add_zipcode=$spreadsheet->getSheet(0)->getCell("I24")->getValue();

    $emp_per_add=$spreadsheet->getSheet(0)->getCell("I25")->getValue();
    $emp_per_add_street=$spreadsheet->getSheet(0)->getCell("L25")->getValue();
    $emp_per_add_subdivision=$spreadsheet->getSheet(0)->getCell("I27")->getValue();
    $emp_per_add_barangay=$spreadsheet->getSheet(0)->getCell("L27")->getValue();
    $emp_per_add_municipal=$spreadsheet->getSheet(0)->getCell("J29")->getValue();
    $emp_per_add_province=$spreadsheet->getSheet(0)->getCell("L29")->getValue();
    $emp_per_add_zipcode=$spreadsheet->getSheet(0)->getCell("I31")->getValue();
    
    $emp_contact_gs = $spreadsheet->getSheet(0)->getCell("D27")->getValue();
    $emp_contact_pag = $spreadsheet->getSheet(0)->getCell("D29")->getValue();
    $emp_contact_ph = $spreadsheet->getSheet(0)->getCell("D31")->getValue();
    $emp_contact_ss = $spreadsheet->getSheet(0)->getCell("D32")->getValue();
    $emp_contact_tin = $spreadsheet->getSheet(0)->getCell("D33")->getValue();
    $emp_contact_agency =$spreadsheet-> getSheet(0)->getCell("D34")->getValue();

            /*office_assign = '$office_assign',emp_gender = '$emp_gender', emp_civil_status = '$emp_civil_status',      emp_citizen = '$emp_citizen',
            emp_dual_citizen = '$emp_dual_citizen',
            emp_citizen_chk = '$emp_citizen_chk',,
            emp_sex = '$emp_sex'
            */

            $emp_status = "";
            $from_date="";
            $to_date="";
            $office_assign="";
            $emp_image="";
            $office_dept="";

            $sql="INSERT INTO add_emp (emp_first_name, emp_last_name, emp_middle_name,emp_ext,emp_status,from_date,to_date,office_assign,emp_image,emp_id,office_dept) VALUE ( '$emp_first_name', '$emp_last_name', '$emp_middle_name','$emp_ext','$emp_status','$from_date','$to_date','$office_assign','$emp_image','$emp_id','$office_dept')";

            if (mysqli_query($conn, $sql)) {
                $message = '<div class="alert alert-danger">Done</div>';
            } else {
                echo  mysqli_error($conn);
            }

            $sql2="INSERT INTO pds (emp_id,office_assign,emp_first_name,emp_last_name,emp_gender,emp_civil_status,emp_dob,emp_height,emp_weight,emp_blood,emp_email,emp_tel_no,emp_mb_no,emp_citizen,emp_dual_citizen,emp_citizen_chk,emp_resi_add,emp_resi_add_street,emp_resi_add_subdivision,emp_resi_add_barangay,emp_resi_add_municipal,emp_resi_add_province,emp_resi_add_zipcode,emp_per_add,emp_per_add_street,emp_per_add_subdivision,emp_per_add_barangay,emp_per_add_municipal,emp_per_add_province,emp_per_add_zipcode,emp_contact_gs,emp_contact_pag,emp_contact_ph,emp_contact_ss,emp_contact_tin,emp_contact_agency,emp_status,emp_sex,emp_middle_name,emp_ext) VALUE ('$emp_id', '$office_assign', '$emp_first_name','$emp_last_name','$emp_gender','$emp_civil_status','$emp_dob','$emp_height','$emp_weight','$emp_blood','$emp_email','$emp_tel_no','$emp_mb_no','$emp_citizen','$emp_dual_citizen','$emp_citizen_chk','$emp_resi_add','$emp_resi_add_street','$emp_resi_add_subdivision','$emp_resi_add_barangay','$emp_resi_add_municipal','$emp_resi_add_province','$emp_resi_add_zipcode','$emp_per_add','$emp_per_add_street','$emp_per_add_subdivision','$emp_per_add_barangay','$emp_per_add_municipal','$emp_per_add_province','$emp_per_add_zipcode','$emp_contact_gs','$emp_contact_pag','$emp_contact_ph','$emp_contact_ss','$emp_contact_tin','$emp_contact_agency','$emp_status','$emp_sex','$emp_middle_name','$emp_ext');";

                if (mysqli_query($conn, $sql2)) {
                $message = '<div class="alert alert-danger">Done</div>';
            } else {
                echo  mysqli_error($conn);
            }



             //family_background
                $emp_spouse_lastname=$spreadsheet-> getSheet(0)->getCell("D36")->getValue();
                $emp_spouse_firstname=$spreadsheet-> getSheet(0)->getCell("D37")->getValue();
                $emp_spouse_middlename=$spreadsheet-> getSheet(0)->getCell("D38")->getValue();
                $emp_spouse_extname=$spreadsheet-> getSheet(0)->getCell("G37")->getValue();

                $emp_sp_occupation=$spreadsheet-> getSheet(0)->getCell("D39")->getValue();
                $emp_sp_employer=$spreadsheet-> getSheet(0)->getCell("D40")->getValue();
                $emp_sp_add=$spreadsheet-> getSheet(0)->getCell("D41")->getValue();
                $emp_sp_tel=$spreadsheet-> getSheet(0)->getCell("D42")->getValue();

                $emp_child_name_arr = array();
                $emp_child_dob_arr = array();

                for ($i = 37 ; $i <= 48  ; $i++){
                    
                    $emp_child_name_arr[$i-37]= $spreadsheet-> getSheet(0)->getCell("I".$i)->getValue();
                    $emp_child_dob_arr[$i-37]= $spreadsheet-> getSheet(0)->getCell("M" .$i)->getValue();

                    //array_filter($emp_child_name_arr); // removing empty elements
                    //array_filter($emp_child_dob_arr); //removing empty elements

                }

               

                $emp_child_name= implode(',', array_filter($emp_child_name_arr));
                $emp_child_dob= implode(',', array_filter($emp_child_dob_arr));
                

                $emp_father_lastname=$spreadsheet-> getSheet(0)->getCell("D43")->getValue();
                $emp_father_firstname=$spreadsheet-> getSheet(0)->getCell("D44")->getValue();
                $emp_father_middlename=$spreadsheet-> getSheet(0)->getCell("D45")->getValue();
                $emp_father_extname=$spreadsheet-> getSheet(0)->getCell("G44")->getValue();


                $emp_mother_lastname=$spreadsheet-> getSheet(0)->getCell("D47")->getValue();
                $emp_mother_firstname=$spreadsheet-> getSheet(0)->getCell("D48")->getValue();
                $emp_mother_middlename=$spreadsheet-> getSheet(0)->getCell("D49")->getValue();
                $emp_mother_extname=$spreadsheet-> getSheet(0)->getCell("D46")->getValue();


        $sql="INSERT INTO family_background (emp_spouse_lastname,emp_spouse_firstname,emp_spouse_middlename,emp_spouse_extname,emp_sp_occupation,emp_sp_employer,emp_sp_add,emp_sp_tel,emp_child_name,emp_child_dob,emp_father_lastname,emp_father_firstname,emp_father_middlename,emp_father_extname,emp_mother_lastname,emp_mother_firstname,emp_mother_middlename,emp_mother_extname,emp_id) VALUE ('$emp_spouse_lastname', '$emp_spouse_firstname', '$emp_spouse_middlename','$emp_spouse_extname','$emp_sp_occupation','$emp_sp_employer','$emp_sp_add','$emp_sp_tel','$emp_child_name','$emp_child_dob','$emp_father_lastname','$emp_father_firstname','$emp_father_middlename','$emp_father_extname','$emp_mother_lastname','$emp_mother_firstname','$emp_mother_middlename','$emp_mother_extname','$emp_id')
            ";
    
                if (mysqli_query($conn, $sql)) {
                    $message .= '<div class="alert alert-danger">Done 2 </div>';
                } else {
                    echo  mysqli_error($conn);
                }


                //education background

            $ele_school_name=$spreadsheet-> getSheet(0)->getCell("D54")->getValue();
            $ele_degree=$spreadsheet-> getSheet(0)->getCell("G54")->getValue();
            $ele_from_date=$spreadsheet-> getSheet(0)->getCell("J54")->getValue();
            $ele_to_date=$spreadsheet-> getSheet(0)->getCell("K54")->getValue();
            $ele_units=$spreadsheet-> getSheet(0)->getCell("L54")->getValue();
            $ele_award=$spreadsheet-> getSheet(0)->getCell("N54")->getValue();
            $ele_graduation=$spreadsheet-> getSheet(0)->getCell("M54")->getValue();

            $sec_school_name=$spreadsheet-> getSheet(0)->getCell("D55")->getValue();
            $sec_degree=$spreadsheet-> getSheet(0)->getCell("G55")->getValue();
            $sec_from_date=$spreadsheet-> getSheet(0)->getCell("J55")->getValue();
            $sec_to_date=$spreadsheet-> getSheet(0)->getCell("K55")->getValue();
            $sec_units=$spreadsheet-> getSheet(0)->getCell("L55")->getValue();
            $sec_award=$spreadsheet-> getSheet(0)->getCell("N55")->getValue();
            $sec_graduation=$spreadsheet-> getSheet(0)->getCell("M55")->getValue();

            $voc_school_name=$spreadsheet-> getSheet(0)->getCell("D56")->getValue();
            $voc_degree=$spreadsheet-> getSheet(0)->getCell("G56")->getValue();
            $voc_from_date=$spreadsheet-> getSheet(0)->getCell("J56")->getValue();
            $voc_to_date=$spreadsheet-> getSheet(0)->getCell("K56")->getValue();
            $voc_units=$spreadsheet-> getSheet(0)->getCell("L56")->getValue();
            $voc_award=$spreadsheet-> getSheet(0)->getCell("N56")->getValue();
            $voc_graduation=$spreadsheet-> getSheet(0)->getCell("M56")->getValue();

            $coll_school_name=$spreadsheet-> getSheet(0)->getCell("D57")->getValue();
            $coll_degree=$spreadsheet-> getSheet(0)->getCell("G57")->getValue();
            $coll_from_date=$spreadsheet-> getSheet(0)->getCell("J57")->getValue();
            $coll_to_date=$spreadsheet-> getSheet(0)->getCell("K57")->getValue();
            $coll_units=$spreadsheet-> getSheet(0)->getCell("L57")->getValue();
            $coll_award=$spreadsheet-> getSheet(0)->getCell("N57")->getValue();
            $coll_graduation=$spreadsheet-> getSheet(0)->getCell("M57")->getValue();

            $gra_school_name=$spreadsheet-> getSheet(0)->getCell("D58")->getValue();
            $gra_degree=$spreadsheet-> getSheet(0)->getCell("G58")->getValue();
            $gra_from_date=$spreadsheet-> getSheet(0)->getCell("J58")->getValue();
            $gra_to_date=$spreadsheet-> getSheet(0)->getCell("K58")->getValue();
            $gra_units=$spreadsheet-> getSheet(0)->getCell("L58")->getValue();
            $gra_award=$spreadsheet-> getSheet(0)->getCell("N58")->getValue();
            $gra_graduation=$spreadsheet-> getSheet(0)->getCell("M58")->getValue();

           /*
            $post_school_name=$spreadsheet-> getSheet(0)->getCell("D43")->getValue();
            $post_degree=$spreadsheet-> getSheet(0)->getCell("D43")->getValue();
            $post_from_date=$spreadsheet-> getSheet(0)->getCell("D43")->getValue();
            $post_to_date=$spreadsheet-> getSheet(0)->getCell("D43")->getValue();
            $post_units=$spreadsheet-> getSheet(0)->getCell("D43")->getValue();
            $post_award=$spreadsheet-> getSheet(0)->getCell("D43")->getValue();
            $post_graduation=$spreadsheet-> getSheet(0)->getCell("D43")->getValue();
                */
                  
                $post_school_name="";
                $post_degree="";
                $post_from_date="";
                $post_to_date="";
                $post_units="";
                $post_award="";
                $post_graduation="";


                $sql="INSERT INTO edu_background (ele_school_name ,ele_degree,ele_from_date,ele_to_date,ele_units,ele_award,ele_graduation,sec_school_name ,sec_degree,sec_from_date,sec_to_date,sec_units,sec_award,sec_graduation,voc_school_name ,voc_degree,voc_from_date,voc_to_date,voc_units,voc_award,voc_graduation,coll_school_name ,coll_degree,coll_from_date,coll_to_date,coll_units,coll_award,coll_graduation,gra_school_name ,gra_degree,gra_from_date,gra_to_date,gra_units,gra_award,gra_graduation,post_school_name ,post_degree,post_from_date,post_to_date,post_units,post_award,post_graduation,emp_id) VALUE ('$ele_school_name', '$ele_degree', '$ele_from_date','$ele_to_date','$ele_units','$ele_award','$ele_graduation','$sec_school_name','$sec_degree','$sec_from_date','$sec_to_date','$sec_units','$sec_award','$sec_graduation','$voc_school_name','$voc_degree','$voc_from_date','$voc_to_date','$voc_units','$voc_award','$voc_graduation','$coll_school_name','$coll_degree','$coll_from_date','$coll_to_date','$coll_units','$coll_award','$coll_graduation','$gra_school_name','$gra_degree','$gra_from_date','$gra_to_date','$gra_units','$gra_award','$gra_graduation','$post_school_name','$post_degree','$post_from_date','$post_to_date','$post_units','$post_award','$post_graduation','$emp_id') ";


                if (mysqli_query($conn, $sql)) {
                    $message .= '<div class="alert alert-danger">Done 3 </div>';
                } else {
                    echo  mysqli_error($conn);
                }

            //civil services

               
                for ($i = 5; $i <= 11; $i++){

                $name_of_exam= $spreadsheet-> getSheet(1)->getCell("A".$i)->getValue();
                $type_of = " ";
                $rating= $spreadsheet-> getSheet(1)->getCell("F".$i)->getValue();
                $exam_date= $spreadsheet-> getSheet(1)->getCell("G".$i)->getValue();
                $exam_place=$spreadsheet-> getSheet(1)->getCell("I".$i)->getValue();
                $licence_no=$spreadsheet-> getSheet(1)->getCell("L".$i)->getValue();
                $licence_val=$spreadsheet-> getSheet(1)->getCell("M".$i)->getValue();

                if(!empty($name_of_exam)) {

                $sql="INSERT INTO civil_service (type_of,name_of_exam,rating,exam_date,exam_place,licence_no,licence_val,emp_id) VALUE ('$type_of', '$name_of_exam', '$rating','$exam_date','$exam_place','$licence_no','$licence_val','$emp_id')  ";
                
                mysqli_query($conn, $sql);

                }
            
            }

          

            //work-experience 

            for ($i = 18 ; $i <= 44  ; $i++){
        
                $work_from_date=$spreadsheet-> getSheet(1)->getCell("A".$i)->getValue();
                $work_to_date=$spreadsheet-> getSheet(1)->getCell("C".$i)->getValue();
                $work_position=$spreadsheet-> getSheet(1)->getCell("D".$i)->getValue();
                $employer=$spreadsheet-> getSheet(1)->getCell("G".$i)->getValue();
                $govt_service=$spreadsheet-> getSheet(1)->getCell("M".$i)->getValue();
                $monthly_sal=$spreadsheet-> getSheet(1)->getCell("J".$i)->getValue();
                $increment=$spreadsheet-> getSheet(1)->getCell("K".$i)->getValue();
                $work_status=$spreadsheet-> getSheet(1)->getCell("L".$i)->getValue();

                if(!empty($work_position)) {

                    $sql="INSERT INTO emp_work (work_from_date,work_to_date,work_position,employer,govt_service,monthly_sal,increment,work_status,office_assign,emp_id) VALUE ('$work_from_date', '$work_to_date', '$work_position','$employer','$govt_service','$monthly_sal','$increment','$work_status','$office_assign','$emp_id')";

                    mysqli_query($conn, $sql);
                }
            }

          

            //voluntary work 

            for ($i = 6 ; $i <= 11 ; $i++){

                $name_org=$spreadsheet-> getSheet(2)->getCell("A".$i)->getValue();
                $org_add=$spreadsheet-> getSheet(2)->getCell("A".$i)->getValue();
                $vol_from_date=$spreadsheet-> getSheet(2)->getCell("E".$i)->getValue();
                $vol_to_date=$spreadsheet-> getSheet(2)->getCell("F".$i)->getValue();
                $vol_no_of_hrs=$spreadsheet-> getSheet(2)->getCell("G".$i)->getValue();
                $position=$spreadsheet-> getSheet(2)->getCell("H".$i)->getValue();

                if(!empty($name_org)) {

                    $sql="INSERT INTO voluntary_works (name_org,org_add,vol_from_date,vol_to_date,vol_no_of_hrs,position,emp_id) VALUE ('$name_org', '$org_add', '$vol_from_date','$vol_to_date','$vol_no_of_hrs','$position','$emp_id') ";

                    mysqli_query($conn, $sql);
                }
            }

            

//learning
            for ($i = 18 ; $i <= 42  ; $i++){

   
                $title_of_training=$spreadsheet-> getSheet(2)->getCell("A".$i)->getValue();
                $type_of_position=$spreadsheet-> getSheet(2)->getCell("H".$i)->getValue();
                $no_of_hrs=$spreadsheet-> getSheet(2)->getCell("G".$i)->getValue();
                $learn_from_date=$spreadsheet-> getSheet(2)->getCell("E".$i)->getValue();
                $learn_to_date=$spreadsheet-> getSheet(2)->getCell("F".$i)->getValue();
                $conducted_by=$spreadsheet-> getSheet(2)->getCell("I".$i)->getValue();

                if(!empty( $title_of_training)) {
    
                    $sql="INSERT INTO emp_learning (title_of_training,type_of_position,no_of_hrs,learn_from_date,learn_to_date,conducted_by,emp_id) VALUE ('$title_of_training', '$type_of_position', '$no_of_hrs','$learn_from_date','$learn_to_date','$conducted_by','$emp_id')";
                    }

                    mysqli_query($conn, $sql);
            }

           


            //special skills
            $emp_special_skills_arr=array();
            $non_academic_arr=array();
            $membership_arr=array();

            for($i= 46 ; $i <= 52 ; $i++){

            $emp_special_skills_arr[$i-46]=$spreadsheet-> getSheet(2)->getCell("A".$i)->getValue();
            $non_academic_arr[$i-46]=$spreadsheet-> getSheet(2)->getCell("C".$i)->getValue();
            $membership_arr[$i-46]=$spreadsheet-> getSheet(2)->getCell("I".$i)->getValue();

            }

            $emp_special_skills= implode(',',  array_filter ($emp_special_skills_arr));
            $non_academic= implode(',',  array_filter ($non_academic_arr));
            $membership= implode(',',  array_filter ($membership_arr));

            $sql="INSERT INTO skills (emp_special_skills,non_academic,membership,emp_id) VALUE ('$emp_special_skills', '$non_academic', '$membership','$emp_id')";

            mysqli_query($conn, $sql);

            //references

            $ref_full_name_arr =array();
            $ref_add_arr=array();
            $ref_tel_arr=array();

            for($i= 52 ; $i <= 54 ; $i++){

                $ref_full_name_arr[$i-52]=$spreadsheet-> getSheet(3)->getCell("A".$i)->getValue();
                $ref_add_arr[$i-52]=$spreadsheet-> getSheet(3)->getCell("F".$i)->getValue();
                $ref_tel_arr[$i-52]=$spreadsheet-> getSheet(3)->getCell("G".$i)->getValue();

            }

                $emp_gov_id=$spreadsheet-> getSheet(3)->getCell("D61")->getValue();
                $emp_passport_no=$spreadsheet-> getSheet(3)->getCell("D62")->getValue();
                $emp_place_of_insurance=$spreadsheet-> getSheet(3)->getCell("D64")->getValue();
            
                
                $ref_full_name = implode(',', array_filter($ref_full_name_arr));
                $ref_add = implode(',', array_filter($ref_add_arr));
                $ref_tel = implode(',', array_filter($ref_tel_arr));
                

                $sql="INSERT INTO emp_references (ref_full_name,ref_add,ref_tel,emp_gov_id,emp_passport_no,emp_place_of_insurance,emp_id) VALUE ('$ref_full_name', '$ref_add', '$ref_tel','$emp_gov_id','$emp_passport_no','$emp_place_of_insurance','$emp_id')";

                if (mysqli_query($conn, $sql)) {
                    $message .= '<div class="alert alert-danger">Done 10 </div>';
                    
                } else {
                    echo  mysqli_error($conn);
                }

        } // end of 2nd braces




        else
            {
            $message = '<div class="alert alert-danger">Only .xls .csv or .xlsx file allowed</div>';
            }
        }
        else
            {
            $message = '<div class="alert alert-danger">Please Select File</div>';
            }
    
    echo   $message;

       //move_uploaded_file($file_loc,$path.$file_name_1);

?>